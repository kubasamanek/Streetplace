from django.shortcuts import render
from django.contrib.auth.mixins import LoginRequiredMixin
from django.contrib.auth.decorators import login_required
from django.views.generic import CreateView, DetailView, ListView, DeleteView, UpdateView
from .forms import AddObjectForm, AddObjectFormMeta, ImageForm, ReportObjectForm
from .models import Object, Images
from profiles.models import User, Profile
from django.http import HttpResponseRedirect
from django.db.models import Q
from .validators import CATEGORIES
from .choices import STAV_TO_ITERATE
from django.shortcuts import get_object_or_404
from django.contrib.auth import get_user_model
from .filters import ObjectFilter
from django.forms import modelformset_factory
from . import filters
from django_filters.views import BaseFilterView
from django.views.generic.edit import FormView
from django.contrib import messages
from django.core.paginator import Paginator




User = get_user_model()

@login_required()
def ObjectCreateView(request):

    ImageFormSet = modelformset_factory(Images, form=ImageForm, extra=6)
    if request.method == 'POST':
        objectForm = AddObjectFormMeta(request.POST, request.FILES)
        formset = ImageFormSet(request.POST, request.FILES, queryset=Images.objects.none())

        if objectForm.is_valid() and formset.is_valid():
            object_form = objectForm.save(commit=False)
            object_form.owner = request.user
            object_form.save()

            for form in formset.cleaned_data:
                # this helps to not crash if the user
                # do not upload all the photos
                if form:
                    image = form['images']
                    photo = Images(object=object_form, images=image)
                    photo.save()
            return HttpResponseRedirect("/listings/")
        else:
            print(objectForm.errors, formset.errors)
    else:
        objectForm = AddObjectFormMeta()
        formset = ImageFormSet(queryset=Images.objects.none())
    return render(request, "objects/form.html",
                  {
                      "categories": CATEGORIES,
                      "condition": STAV_TO_ITERATE,
                      "objectform": objectForm,
                      "formset": formset,
                  })



class EditProfile(UpdateView):
    template_name = "profiles/edit_profile.html"
    form_class = AddObjectFormMeta
    queryset = Object.objects.all()
    success_url = "/listings/"

    def get_object(self):
        pk_ = self.kwargs.get("pk")
        return get_object_or_404(Object, pk=pk_)

    def form_valid(self, form):
        print(form.cleaned_data)
        return super().form_valid(form)



class ObjectDetailView(DetailView):
    queryset = Object.objects.all()
    success_url = "/listings/"

    def get_object(self):
        pk_ = self.kwargs.get("pk")
        return get_object_or_404(Object, pk=pk_)

    def get_context_data(self, **kwargs):
        context = super(ObjectDetailView, self).get_context_data(**kwargs)
        queryset1 = tuple(Profile.objects.all())
        images = Images.objects.all()
        context['profile'] = queryset1
        context['form'] = ReportObjectForm
        context['images'] = images
        return context

    def form_valid(self, form):
        print(form.cleaned_data)
        return super().form_valid(form)

def ReportObjectView(request):

    if request.method == 'POST':
        reportForm = ReportObjectForm(request.POST, request.FILES)

        if reportForm.is_valid():
            report_form = reportForm.save(commit=False)
            report_form.owner = request.user
            report_form.save()
            return HttpResponseRedirect("/listings/")
        else:
            print(reportForm.errors)
    else:
        reportForm = ReportObjectForm()
    return render(request, "listings/object_detail.html",
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




class SearchObjectListView(ListView):
    template_name = "listings/object_list.html"
    count = 0
    paginate_by = 10
    context_object_name = "obj_list"
    filterset_class = None

    def get_queryset(self):
        stranka = self.kwargs.get("page")
        filter = self.kwargs.get("filter")
        print(filter)
        slug_cat = self.kwargs.get("slug")
        if slug_cat:
                qs = Object.objects.filter(
                    Q(category__iexact=slug_cat) |
                    Q(category__icontains=slug_cat)).order_by("-updated")
        if filter == "nejlevnejsich":
            qs = Object.objects.all().order_by("price")
            print("price")
        elif filter == "nejdrazsich":
            qs = Object.objects.all().order_by("-price")
            print("-price")
        elif filter == "nejnovejsich":
            qs = Object.objects.all().order_by("-updated")
            print("-created")
        elif filter == "nejstarsich":
            qs = Object.objects.all().order_by("updated")
            print("created")
        elif filter == None:
            qs = Object.objects.all().order_by("-updated")
        else:
            qs = Object.objects.filter(name__icontains=filter)
        return qs


    def get_context_data(self, **kwargs):
        context = super(SearchObjectListView, self).get_context_data(**kwargs)
        profiles = Profile.objects.all()

        if self.kwargs.get("slug") == None:
            slug = "Vše"
        else:
            slug = self.kwargs.get("slug")
        context['categories'] = CATEGORIES
        context["current_slug"] = slug
        context['filter'] = ObjectFilter(self.request.GET, queryset=self.get_queryset())
        context['profile'] = profiles
        return context


class DeleteObjectView(DeleteView):
    template_name = "listings/object_delete.html"
    success_url = "/proc/"

    def get_context_data(self, **kwargs):
        context = super(DeleteObjectView, self).get_context_data(**kwargs)
        user = self.request.user
        object = Object.objects.get(pk=self.kwargs.get("pk"))
        owner = object.owner
        context['user'] = user
        context['owner'] = owner
        return context

    def get_object(self):
        pk_ = self.kwargs.get("pk")
        return get_object_or_404(Object, pk=pk_)


class UpdateObjectView(UpdateView):
    template_name = "objects/update_form.html"
    form_class = AddObjectFormMeta
    queryset = Object.objects.all()
    success_url = "/listings/"

    def get_object(self):
        pk_ = self.kwargs.get("pk")
        return get_object_or_404(Object, pk=pk_)

    def form_valid(self, form):
        print(form.cleaned_data)
        return super().form_valid(form)






