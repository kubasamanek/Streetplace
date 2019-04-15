from django import forms
from django.contrib.auth import get_user_model
from django.contrib.auth.forms import UserChangeForm
from .models import Profile, Deals

User = get_user_model()

class RegisterForm(forms.ModelForm):
    """A form for creating new users. Includes all the required
    fields, plus a repeated password."""
    password1 = forms.CharField(label='', widget=forms.PasswordInput(attrs={'placeholder': 'Heslo'}))
    password2 = forms.CharField(label='', widget=forms.PasswordInput(attrs={'placeholder': 'Potvrzení hesla'}))
    username = forms.CharField(label="",
                               max_length=20,
                               widget=forms.TextInput(attrs={'placeholder': 'Uživatelské jméno'}))
    first_name = forms.CharField(label="", max_length=30, widget=forms.TextInput(attrs={'placeholder': 'Křestní jméno'}))
    last_name = forms.CharField(label="", max_length=30,  widget=forms.TextInput(attrs={'placeholder': 'Příjmení'}))
    email = forms.EmailField(label="", max_length=200, widget=forms.TextInput(attrs={'placeholder': 'Email'}))

    class Meta:
        model = User
        fields = ('username', 'email', "first_name", "last_name")

    def clean_email(self):
        email = self.cleaned_data.get("email")
        qs = User.objects.filter(email__iexact=email)
        if qs.exists():
            raise forms.ValidationError("Tento email je už zaregistrovaný.")
        return email

    def clean_username(self):
        username = self.cleaned_data.get("username")
        black_list = ["@", "-", ".", "+"]
        for char in black_list:
            print(char)
            if char in username:
                raise forms.ValidationError(str(char)+" není povolený znak.")
        return username


    def clean_password2(self):
        # Check that the two password entries match
        password1 = self.cleaned_data.get("password1")
        password2 = self.cleaned_data.get("password2")

        if len(password1) < 5:
            raise forms.ValidationError("Heslo musí být alespoň 5 znaků dlouhé.")

        elif password1 and password2 and password1 != password2:
            raise forms.ValidationError("Hesla se neshodují. Zkus to znovu.")
        return password2


    def save(self, commit=True):
        # Save the provided password in hashed format
        user = super(RegisterForm, self).save(commit=False)
        user.set_password(self.cleaned_data["password1"])
        user.is_active = True
        # create a new user hash for activating email.

        if commit:
            user.save()
        return user


class UserUpdateForm(forms.ModelForm):
    email = forms.EmailField()
    class Meta:
        model = User
        fields = [
            "email",
            "first_name",
            "last_name"
        ]

class ProfileUpdateForm(forms.ModelForm):

    class Meta:
        model = Profile
        fields = (
            "image",
            "city",
            "shoe_size",
            "clothes_size"
            )

class DealForm(forms.ModelForm):

    class Meta:
        model = Deals
        fields = (
            "type",
            "buyer",
            "seller",
            "selled_item",
            "buyed_item",
            "system_rating",
            "user_rating",
            "why_system_rating",
            "why_user_rating",
        )

class ProfileDealForm(forms.ModelForm):
    deals_counter = forms.IntegerField(required=False)
    rating = forms.IntegerField(required=False)
    class Meta:
        model = User
        fields = ("deals_counter", "rating",)