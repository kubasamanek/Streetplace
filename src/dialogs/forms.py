from django import forms
from .models import Message

class SendMessageForm(forms.ModelForm):
    class Meta:
        model = Message
        fields = [
            "sender",
            "opponent",
            "text",
            "item",
        ]

class MessagePrecteno(forms.ModelForm):
    class Meta:
        model = Message
        fields = [
            "precteno",
        ]