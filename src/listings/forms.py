from django import forms
from .models import Object, Images, Reports, Question
from .choices import CHOICES
from clever_selects.form_fields import ChainedChoiceField
from django.core.urlresolvers import reverse_lazy
from django_select2.forms import ModelSelect2Widget




class AddObjectForm(forms.Form):
    name = forms.CharField()
    price = forms.IntegerField()
    category = forms.ModelChoiceField(queryset=Object.objects.all(), label=u"Country",
                                      widget=ModelSelect2Widget(model=Object, search_fields=['name__icontains'],
    ))
    size = forms.CharField()
    description = forms.TextInput()



class AddObjectFormMeta(forms.ModelForm):
    image = forms.ImageField()

    class Meta:
        model = Object
        fields = [
            "name",
            "price",
            "category",
            "image",
            "size",
            "description",
            "condition",
            "predani"
        ]





class ReportObjectForm(forms.ModelForm):
    class Meta:
        model = Reports
        fields = ("category",
                  "reason",
                  "object", )


class UpdateImages(forms.ModelForm):
    class Meta:
        model = Images
        fields = ("images",)


class ContactForm(forms.ModelForm):
    class Meta:
        model = Question
        fields = ("name",
                  "email",
                  "message")


