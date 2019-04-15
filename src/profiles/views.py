from django.shortcuts import render
from django.contrib.auth.mixins import LoginRequiredMixin
from django.http import Http404
from django.views.generic import DetailView, View, CreateView, UpdateView, FormView
from django.contrib.auth import get_user_model
from django.shortcuts import render, get_object_or_404, redirect
from .models import Profile, Deals
from .forms import RegisterForm, UserUpdateForm, ProfileUpdateForm, DealForm, ProfileDealForm
from listings.models import Object
from django.urls import reverse
from django.db.models import Q


from django.http import HttpResponseRedirect
from django.contrib.auth import logout

# Create your views here.
User = get_user_model()


class RegisterView(CreateView):
    form_class = RegisterForm
    template_name = "registration/register.html"
    success_url = "/"


class ProfileFollowToggle(LoginRequiredMixin, View):
    def post(self, request, *args, **kwargs):
        username_to_toggle = request.POST.get("username")
        profile_, is_following = Profile.objects.toggle_follow(request.user, username_to_toggle)
        return redirect(f"/profiles/{profile_.user.username}/")


class ProfileDetailView(DetailView):
    queryset = User.objects.filter(is_active=True)
    template_name = "profiles/user_detail.html"

    def get_object(self):
        username = self.kwargs.get("username")
        if username is None:
            raise Http404
        return get_object_or_404(User, username__iexact=username, is_active=True)

    def get_context_data(self, **kwargs):
        context = super(ProfileDetailView, self).get_context_data(**kwargs)
        user = context['user']
        context['logged_user'] = self.request.user
        if user.profile.deals_counter > 0:
            context['rating'] = user.profile.rating / user.profile.deals_counter
        else:
            context['rating'] = 0
        qs_filtered = Object.objects.filter(owner=user).order_by("-updated")
        context['qs'] = qs_filtered
        deals = Deals.objects.filter(Q(buyer=user) |
                                    Q(buyer=user)).order_by("-time")
        context['deals'] = deals
        if user.profile in self.request.user.is_following.all():
            is_following = True
            context['is_following'] = is_following
        return context



class EditProfile(UpdateView):
    template_name = "profiles/edit_profile.html"
    form_class = ProfileUpdateForm()
    queryset = Profile.objects.all()
    success_url = "/listings/"

    def get_object(self):
        username_ = self.kwargs.get("username")
        return get_object_or_404(User, username__iexact=username_)

    def form_valid(self, form):
        return super().form_valid(form)

def edit_profile(request, username):
    object_ = get_object_or_404(User, username=username)
    if object_ == request.user:
        if request.method == "POST":
            u_form = UserUpdateForm(request.POST, instance=request.user)
            p_form = ProfileUpdateForm(request.POST, request.FILES, instance=request.user.profile)

            if u_form.is_valid() and p_form.is_valid():
                u_form.save()
                p_form.save()
                return redirect("/profiles/"+str(request.user))
        else:
            u_form = UserUpdateForm(instance=request.user)
            p_form = ProfileUpdateForm(instance=request.user.profile)

        context = {
            "u_form":u_form,
            "p_form":p_form
        }

        return render(request, "profiles/edit_profile.html", context)
    else:
        return redirect("/profiles/"+str(request.user))


class DealFormView(FormView):
    template_name = "objects/deal_uzavren.html"
    form_class = DealForm
    queryset = Object.objects.all()

    def get_success_url(self):
        return redirect("/listings/")

    def get_context_data(self, **kwargs):
        context = super(DealFormView, self).get_context_data(**kwargs)
        object = Object.objects.get(pk=self.kwargs.get("pk"))
        users = User.objects.all()
        context['obj'] = object
        context['users'] = users
        return context

    def form_valid(self, form):
        obj = Object.objects.get(pk=self.kwargs.get("pk"))
        dealForm = DealForm(self.request.POST)
        dealForm = dealForm.save(commit=False)
        dealForm.seller = self.request.user
        dealForm.selled_item = obj
        if "buyer_form" in self.request.POST:
            dealForm.buyer = User.objects.get(username=self.request.POST['buyer_form'])

        user = User.objects.get(username=self.request.POST['buyer_form'])
        user.profile.deals_counter += 1
        user.profile.rating += dealForm.user_rating
        user.profile.save()
        dealForm.save()
        return super().form_valid(form)






