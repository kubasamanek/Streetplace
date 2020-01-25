from django.shortcuts import render
from django.contrib.auth.mixins import LoginRequiredMixin
from django.http import Http404
from django.views.generic import DetailView, View, CreateView, UpdateView, FormView, ListView
from django.contrib.auth import get_user_model
from django.shortcuts import render, get_object_or_404, redirect
from .models import Profile, Deals, UserReport
from .forms import RegisterForm, UserUpdateForm, ProfileUpdateForm, DealForm, ActivationForm, LostPassword, PasswordResetForm, ReportUserForm, UserRatingForm
from listings.models import Object
from django.contrib.auth.decorators import login_required
from django.core.mail import send_mail
from django.urls import reverse
from django.db.models import Q
from django.urls import reverse_lazy
from django.template.loader import render_to_string
from django.utils.html import strip_tags
from django.core.mail import EmailMultiAlternatives
from django.http import HttpResponseRedirect
from django.contrib.auth import logout
from .utlis import code_generator
from django.contrib.messages.views import SuccessMessageMixin
from django.contrib.auth import update_session_auth_hash
# Create your views here.
from django.contrib import messages

User = get_user_model()


class RegisterView(SuccessMessageMixin, CreateView):
    form_class = RegisterForm
    template_name = "registration/register.html"
    success_url = "/notactivated/"
    success_message = "Úspěšně jsi si vytvořil účet. Nyní ho prosím aktivuj pomocí odkazu, který jsme ti poslali na email."




def activation(request, username, key):
    user = User.objects.get(username__iexact=username)
    profile = user.profile
    key = key

    if key == user.profile.activation_key:
        if request.method == "POST":
            form = PasswordReset
        profile.activated = True
        profile.save()
        return render(request, "accounts/activation.html",)
    else:
        return EnvironmentError

def PasswordReset(request, username, key):
    user = User.objects.get(username__iexact=username)
    profile = user.profile
    key = key

    if key == user.profile.activation_key:
        if request.method == "POST":
            form = PasswordResetForm(request.POST, instance=user)

            if form.is_valid():
                form.save()
                return redirect("/passwordchanged/")
        else:
            form = PasswordResetForm(instance=user)
            args = {"form":form,
                    "username":user}
            return render(request, "registration/password-reset.html", args)

def ReportUserView(request, username):
    empty_list = []
    if request.method == 'POST':
        reportForm = ReportUserForm(request.POST)
        if reportForm.is_valid():
            for report in UserReport.objects.filter(owner=request.user):
                if report.reported == str(User.objects.get(username=username)):
                    empty_list.append(report)
            if not empty_list:
                report_form = reportForm.save(commit=False)
                report_form.reported = User.objects.get(username=username)
                report_form.owner = request.user
                report_form.save()
                return HttpResponseRedirect("/profiles/"+username)
            else:
                return HttpResponseRedirect("/useralreadyreported/")
        else:
            print(reportForm.errors)
    else:
        reportForm = ReportUserForm()
    return render(request, "profiles/user_report.html",
                  {
                      "form": reportForm,
                  })

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
            context['rating'] = user.profile.rating / user.profile.deals_counter * 20
            print(context['rating'])
        else:
            context['rating'] = 0
        qs_filtered = Object.objects.filter(owner=user).order_by("-updated")
        context['qs'] = qs_filtered
        deals = Deals.objects.filter(type=user).order_by("-time")
        context['deals'] = deals
        if user.profile in self.request.user.is_following.all():
            is_following = True
            context['is_following'] = is_following
        reports = UserReport.objects.filter(reported=user).order_by("-time")
        context['reports'] = reports
        return context

@login_required()
def UserRating(request, username):
    seller = User.objects.get(username=username)
    user = request.user
    if request.method == 'POST':
        ratingForm = UserRatingForm(request.POST)
        if ratingForm.is_valid():
                rating_form = ratingForm.save(commit=False)
                rating_form.buyer = seller
                rating_form.type = seller         #místo typu je tam uživatel na jehoz profilu se ukaze hodnoceni
                rating_form.seller = user
                seller.profile.deals_counter += 1
                seller.profile.rating += rating_form.user_rating
                seller.profile.save()
                rating_form.save()
                return HttpResponseRedirect("/profiles/"+str(seller)+"/")
        else:
            print(ratingForm.errors)
    else:
        ratingForm = UserRatingForm()
    return render(request, "objects/user-rating.html",
                  {
                      "form": ratingForm,
                      "user": user,
                      "seller": seller,
                  })

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
    success_url = "/listings/vse/1/nevybrano/"

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
        dealForm.type = user        #místo typu je tam uživatel na jehoz profilu se ukaze hodnoceni
        if dealForm.seller == user or dealForm.seller == dealForm.buyer:
            return HttpResponseRedirect("/nelze-smazat/")
        user.profile.deals_counter += 1
        user.profile.rating += dealForm.user_rating
        user.profile.save()
        dealForm.save()
        obj.delete()
        return super().form_valid(form)

class FindProfileView(ListView):
    queryset = Profile.objects.all()
    context_object_name = "user_list"
    template_name = "profiles/findprofile.html"


def delete(request, pk):
    object = Object.objects.get(pk=pk)
    if object.owner == request.user:
        object.delete()
    else:
        pass
    return HttpResponseRedirect("/listings/vse/1/nevybrano/")



def LostPassword(request):

    if request.method == 'POST':
            email = request.POST['email']
            user = User.objects.get(email=email)
            key = user.profile.activation_key

            subject = "Streetplace - heslo"
            sender = "jakubsamanek@gmail.com"
            person = email

            text_content = "Ahoj " + str(user) + "přes tento odkaz si můžeš změnit heslo: http://127.0.0.1:8000/password-reset/"+str(user) + "/" + str(key)+"/"

            mail = EmailMultiAlternatives(subject, text_content, sender, [person])

            mail.send(fail_silently=False)

            context = {}

            return HttpResponseRedirect("/passwordsent/")
    else:
        return render(request, "registration/lostpassword.html")






