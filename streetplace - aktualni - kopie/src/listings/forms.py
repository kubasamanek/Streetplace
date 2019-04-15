from django import forms
from .models import Object
from .choices import CHOICES

class AddObjectForm(forms.Form):
    name = forms.CharField()
    price = forms.IntegerField()
    category = forms.Select()
    image = forms.ImageField()


class AddObjectFormMeta(forms.ModelForm):

    class Meta:
        model = Object
        fields = [
            "name",
            "price",
            "category",
            "image",
        ]


