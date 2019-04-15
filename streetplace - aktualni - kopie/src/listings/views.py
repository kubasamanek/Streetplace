from django.shortcuts import render
from django.contrib.auth.mixins import LoginRequiredMixin
from django.contrib.auth.decorators import login_required
from django.views.generic import CreateView, DetailView, ListView
from .forms import AddObjectForm, AddObjectFormMeta
from .models import Object
from django.http import HttpResponseRedirect
from django.db.models import Q
from .validators import CATEGORIES
from django.shortcuts import get_object_or_404




@login_required()
def ObjectCreateView(request):
    errors = None
    form = AddObjectFormMeta(request.POST or None, request.FILES or None)
    if form.is_valid() and request.POST:
        if request.user.is_authenticated():
            instance = form.save(commit=False)
            instance.owner = request.user
            instance.save()
            return HttpResponseRedirect("/listings/")
    if form.errors:
        print(form.errors)
        errors = form.errors

    template_name = "objects/form.html"
    context = {
        "form":form,
        "errors":errors
               }
    return render(request, template_name, context)

class ObjectDetailView(DetailView):
    queryset = Object.objects.all()

    def get_queryset(self):
        slug_cat = self.kwargs.get("slug")
        if slug_cat:
            qs = Object.objects.filter(
                Q(category__iexact=slug_cat) |
                Q(category__icontains=slug_cat))
        else:
            qs = Object.objects.all()
        return qs


class ObjectListView(ListView):
    template_name = "listings/object_list.html"
    queryset = Object.objects.all()

    def get_context_data(self, **kwargs):
        context = super(ObjectListView, self).get_context_data(**kwargs)
        context['categories'] = CATEGORIES
        return context

class SearchObjectListView(ListView):
    template_name = "listings/object_list.html"
    def get_queryset(self):
        slug_cat = self.kwargs.get("slug")
        if slug_cat:
                qs = Object.objects.filter(
                    Q(category__iexact=slug_cat) |
                    Q(category__icontains=slug_cat))
        else:
            qs = Object.objects.all()
        return qs

    def get_context_data(self, **kwargs):
        context = super(SearchObjectListView, self).get_context_data(**kwargs)
        context['categories'] = CATEGORIES
        return context



