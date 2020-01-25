from django.shortcuts import render
from django.contrib.auth.mixins import LoginRequiredMixin
from django.contrib.auth.decorators import login_required
from django.views.generic import CreateView, DetailView, ListView, DeleteView, UpdateView
from .forms import AddObjectForm, AddObjectFormMeta, ReportObjectForm, ContactForm
from .models import Object, Images, Reports
from profiles.models import User, Profile, Deals
from django.http import HttpResponseRedirect
from django.db.models import Q
from .validators import CATEGORIES
from .choices import STAV_TO_ITERATE
from django.shortcuts import get_object_or_404, redirect
from django.contrib.auth import get_user_model
from .filters import ObjectFilter
from django.contrib.messages.views import SuccessMessageMixin
from django import forms
import random

from django.forms import modelformset_factory
from . import filters
from django_filters.views import BaseFilterView
from django.views.generic.edit import FormView
from django.contrib import messages
from django.core.paginator import Paginator




User = get_user_model()

def index(request):
    object_list = Object.objects.all()
    pocet_zbozi = len(object_list)
    user_list = Profile.objects.all()
    pocet_lidi = len(user_list)
    items_serazene = object_list.order_by("-created")
    # kontroluje, jestli je u zbozi obrazek, aby to bylo na indexu atraktivni,
    recent_items = []
    for x in items_serazene:
        if x.image != "/images/no_image.png":
            recent_items.append(x)
        if len(recent_items) == 6:
            break
    uzavrene_obchody = len(Deals.objects.all())
    return render(request, "index.html",{"pocet_zbozi":pocet_zbozi,
                                         "pocet_lidi":pocet_lidi,
                                         "recent_items":recent_items,
                                         "uzavrene_obchody":uzavrene_obchody,
                                         })

@login_required()
def ObjectCreateView(request):

    if request.method == 'POST':
        objectForm = AddObjectFormMeta(request.POST, request.FILES)

        if objectForm.is_valid():
            object_form = objectForm.save(commit=False)
            object_form.owner = request.user
            object_form.save()

            for file in request.FILES.getlist('images'):
                instance = Images(
                    object=Object.objects.get(id=object_form.id),
                    images=file
                )
                instance.save()
            return HttpResponseRedirect("/listings/vse/1/nevybrano/")
        else:
            print(objectForm.errors)
    else:
        objectForm = AddObjectFormMeta()
    return render(request, "objects/form.html",
                  {
                      "categories": CATEGORIES,
                      "condition": STAV_TO_ITERATE,
                      "objectform": objectForm,
                  })



class ObjectDetailView(DetailView):
    queryset = Object.objects.all()
    success_url = "/listings/"

    def get_object(self):
        pk_ = self.kwargs.get("pk")
        return get_object_or_404(Object, pk=pk_)

    def get_context_data(self, **kwargs):
        context = super(ObjectDetailView, self).get_context_data(**kwargs)
        queryset1 = tuple(Profile.objects.all())
        obj = Object.objects.get(pk=self.kwargs.get("pk"))


        owners_products = list(Object.objects.filter(owner=obj.owner))
        random_list = []
        if len(owners_products)>2:
            while len(random_list)<3:
                product = random.choice(owners_products)
                if product not in random_list:
                    random_list.append(product)
        related_products = list(Object.objects.filter(category=obj.category))
        context["related_products"] = related_products[-3:]
        context["owners_products"] = random_list #owners_products[-3:]
        context["owners_products_len"] = len(owners_products)

        reports = Reports.objects.filter(objectkey=obj)
        images = Images.objects.all()
        context['profile'] = queryset1
        context['reports'] = len(reports)
        context['form'] = ReportObjectForm
        context['images'] = images
        profile = Profile.objects.get(user=obj.owner)
        if profile.deals_counter > 0:
            context['rating'] = int(profile.rating / profile.deals_counter * 20)
        else:
            context['rating'] = 0
        return context

    def form_valid(self, form):
        print(form.cleaned_data)
        return super().form_valid(form)

@login_required()
def ReportObjectView(request, pk):
    empty_list = []
    if request.method == 'POST':
        reportForm = ReportObjectForm(request.POST, request.FILES)
        if reportForm.is_valid():
            for report in Reports.objects.filter(owner=request.user):
                if report.object == str(Object.objects.get(pk=pk)):
                    empty_list.append(report)
            if not empty_list:
                report_form = reportForm.save(commit=False)
                report_form.objectkey = Object.objects.get(pk=pk)
                report_form.owner = request.user
                report_form.object = Object.objects.get(pk=pk)
                report_form.save()
                return HttpResponseRedirect("/listings/vse/1/nevybrano/")
            else:
                return HttpResponseRedirect("/alreadyreported/")
        else:
            print(reportForm.errors)
    else:
        reportForm = ReportObjectForm()
    return render(request, "listings/object_report.html",
                  {
                      "form": reportForm,
                  })


class ObjectListView(ListView):
    template_name = "listings/object_list.html"
    queryset = Object.objects.all().order_by("-updated")
    count = 0
    paginate_by = 3
    context_object_name = "obj_list"

    def get_context_data(self, **kwargs):
        context = super(ObjectListView, self).get_context_data(**kwargs)
        profiles = Profile.objects.all()
        context['categories'] = CATEGORIES
        context['current_slug'] = "Vše"
        context['filter'] = ObjectFilter(self.request.GET, queryset=self.get_queryset())
        context['count'] = self.count or 0
        context['profile'] = profiles
        return context


class AllObjectsView(ListView):
    queryset = Object.objects.all().order_by("-updated")
    template_name = "listings/all-objects.html"
    paginate_by = 50
    context_object_name = "obj_list"

    def get_context_data(self, **kwargs):
        context = super(AllObjectsView, self).get_context_data(**kwargs)
        context["page"] = self.kwargs.get("page")
        return context

class SearchObjectListView(ListView):
    template_name = "listings/object_list.html"
    count = 0
    paginate_by = 10
    context_object_name = "obj_list"
    filterset_class = None

    def get_queryset(self):
        stranka = self.kwargs.get("page")
        filter = self.kwargs.get("filter")
        min_price = self.request.GET.get("min_price")
        max_price = self.request.GET.get("max_price")
        slug_cat = self.kwargs.get("slug")
        size = self.kwargs.get("size")
        if size == "nevybrano" and slug_cat == "vse":
            qs = Object.objects.all()
        else:
            if size == "nevybrano" and slug_cat != "vse":
                qs = Object.objects.filter(category__iexact=slug_cat).order_by("-updated")
            elif size != "nevybrano" and slug_cat == "vse":
                try:
                    size = int(size)
                    qs = Object.objects.filter(size__icontains=size).order_by("-updated")
                except:
                    qs = Object.objects.filter(size__iexact=size).order_by("-updated")
            else:
                try:
                    size = int(size)
                    qs = Object.objects.filter(size__icontains=size).filter(category__iexact=slug_cat).order_by("-updated")
                except:
                    qs = Object.objects.filter(size__iexact=size).filter(category__iexact=slug_cat).order_by("-updated")
        if filter == "nejlevnejsich":
            qs = qs.order_by("price")
        elif filter == "nejdrazsich":
            qs = qs.order_by("-price")
        elif filter == "nejnovejsich":
            qs = qs.order_by("-updated")
        elif filter == "nejstarsich":
            qs = qs.order_by("updated")
        elif filter == None:
            qs = qs.order_by("-updated")
        else:
            qs = qs.filter(name__icontains=filter)
        if self.request.GET.get("search"):
            qs = qs.filter(name__icontains=self.request.GET.get("search"))
        if min_price and max_price:
            qs_1 = qs.filter(price__gte=min_price)
            qs = qs_1.filter(price__lte=max_price)
        else:
            return qs
        return qs


    def get_context_data(self, **kwargs):
        context = super(SearchObjectListView, self).get_context_data(**kwargs)
        profiles = Profile.objects.all()

        if self.kwargs.get("slug") == None:
            slug = "Vše"
        else:
            slug = self.kwargs.get("slug")

        if self.kwargs.get("size") == "nevybrano":
            size = "nevybrano"
        else:
            size = self.kwargs.get("size")

        if self.kwargs.get("filter") != None:
            context["current_filter"] = self.kwargs.get("filter")

        if self.request.GET.get("search"):
            context['search'] = self.request.GET.get("search")

        qs = self.get_queryset()
        results = len(qs)
        results_page = int(self.kwargs.get("page")) * 10

        context['categories'] = CATEGORIES
        context["current_slug"] = slug
        try:
            context["current_size"] = int(size)
            context["size_jsou_boty"] = True
        except:
            context["current_size"] = size
            context["size_jsou_boty"] = False

        context["min_price"] = self.request.GET.get("min_price")
        context["max_price"] = self.request.GET.get("max_price")
        context["page"] = self.kwargs.get("page")
        context['filter'] = ObjectFilter(self.request.GET, queryset=self.get_queryset())
        context['profile'] = profiles
        context["results"] = results
        context["results_page"] = results_page
        return context


class UpdateObjectView(SuccessMessageMixin, UpdateView):
    template_name = "objects/update_form.html"
    form_class = AddObjectFormMeta
    queryset = Object.objects.all()
    success_url = "/listings/vse/1/nevybrano/"
    success_message = "Úspěšně jsi upravil své zboží."


    def get_object(self):
        pk_ = self.kwargs.get("pk")
        return get_object_or_404(Object, pk=pk_)

    def form_valid(self, form):
        print(form.cleaned_data)
        return super().form_valid(form)



@login_required()
def edit_object(request, pk):
    object_ = get_object_or_404(Object, pk=pk)
    if object_.owner == request.user:
        if request.method == "POST":
            u_form = AddObjectFormMeta(request.POST, request.FILES or None, instance=object_)

            if len(request.FILES.getlist("images")) > 4:
                raise forms.ValidationError("Pridal jsi moc fotek")


            if request.POST.get("smazatpuvodni") == "yes":
                imgs = Images.objects.filter(object=object_)
                for x in imgs:
                    x.delete()

            for file in request.FILES.getlist('images'):
                instance = Images(
                    object=Object.objects.get(pk=pk),
                    images=file
                )
                instance.save()

            if u_form.is_valid():
                print(request.FILES.get("image"))
                u_form.save()
                return redirect("/listings/"+pk)
        else:
            u_form = AddObjectFormMeta(instance=object_)

        context = {
            "u_form":u_form,
        }

        return render(request, "objects/update_form.html", context)
    else:
        return redirect("/listings/vse/1/nevybrano/"+str(request.user))

@login_required()
def ContactView(request):
    if request.method == 'POST':
        contactForm = ContactForm(request.POST)
        if contactForm.is_valid():
                contact_form = contactForm.save(commit=False)
                contact_form.save()
                return HttpResponseRedirect("/dekujeme/")
        else:
            print(contactForm.errors)
    else:
        contactForm = ContactForm()
    return render(request, "contact.html",
                  {
                      "form": contactForm,
                  })
