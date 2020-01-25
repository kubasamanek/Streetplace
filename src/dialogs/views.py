from django.shortcuts import render
from django.views.generic import FormView, DetailView, UpdateView
from listings.models import Object
from .forms import SendMessageForm, MessagePrecteno
from profiles.models import User, Profile
from .models import Message
from django.contrib.auth import get_user_model
from django.shortcuts import get_object_or_404, redirect
from django.db.models import Q
from django.http import HttpResponseRedirect, HttpResponse
from django.urls import reverse
from django.contrib.auth.decorators import login_required





User = get_user_model()


# Create your views here.

class SendMessageView(FormView):
    template_name = "listings/object_detail.html"
    form_class = SendMessageForm
    success_url = "/listings/vse/1/nevybrano/"


    def get_context_data(self, **kwargs):
        context = super(SendMessageView, self).get_context_data(**kwargs)
        object = Object.objects.get(pk=self.kwargs.get("pk"))
        user = User.objects.get(username=object.owner)
        context['obj'] = object
        context['user'] = user
        return context

    def form_valid(self, form):
        obj = Object.objects.get(pk=self.kwargs.get("pk"))
        owner = User.objects.get(username=obj.owner)
        sender = self.request.user
        messageForm = SendMessageForm(self.request.POST)
        messageForm = messageForm.save(commit=False)
        messageForm.text = messageForm.text
        messageForm.sender = sender
        messageForm.item = obj
        messageForm.opponent = owner
        messageForm.save()
        return super().form_valid(form)

    def get_success_url(self):
        obj = Object.objects.get(pk=self.kwargs.get("pk"))
        owner = User.objects.get(username=obj.owner)
        return reverse("chat", kwargs={"username": owner, })

class ChatView(DetailView):
    template_name = "chat.html"

    def get_object(self):
        username_ = self.kwargs.get("username")
        return get_object_or_404(User, username=username_)

    def get_context_data(self, **kwargs):
        context = super(ChatView, self).get_context_data(**kwargs)

        opponent = User.objects.get(username=self.kwargs.get("username"))
        sender = self.request.user

        all_messages = Message.objects.filter(Q(sender=sender) | Q(opponent=sender))
        all_messages = all_messages.order_by("-time")
        message_bar = []
        message_bar_users = []
        for message in all_messages:
            if message.sender == sender and message.opponent not in message_bar_users and message not in message_bar:
                message_bar.append(message)
                message_bar_users.append(message.opponent)
            if message.opponent == sender and message.sender not in message_bar_users and message not in message_bar:
                message_bar.append(message)
                message_bar_users.append(message.sender)

        opponent_messages = Message.objects.filter(sender=opponent)
        opponent_messages = opponent_messages.filter(opponent=sender)

        sender_messages = Message.objects.filter(sender=sender)
        sender_messages = sender_messages.filter(opponent=opponent)
        messages = sender_messages | opponent_messages
        messages = messages.order_by("time")
        context["message_bar_users"] = message_bar
        context["opponent"] = opponent
        context["sender"] = sender
        context["messages"] = messages
        context["opponent_messages"] = opponent_messages
        context['sender_messages'] = sender_messages

        return context


class ChatMessageView(FormView):
    template_name = "chat.html"
    form_class = SendMessageForm

    def get_context_data(self, **kwargs):
        context = super(ChatMessageView, self).get_context_data(**kwargs)
        user = User.objects.get(username=self.kwargs.get("username"))
        context['user'] = user
        return context

    def form_valid(self, form):
        owner = User.objects.get(username=self.kwargs.get("username"))
        sender = self.request.user
        messageForm = SendMessageForm(self.request.POST)
        messageForm = messageForm.save(commit=False)
        messageForm.sender = sender
        messageForm.opponent = owner
        messageForm.save()
        return super().form_valid(form)

    def get_success_url(self):
        username = str(User.objects.get(username=self.kwargs.get("username")))
        return reverse("chat", kwargs={"username" : username,})

def PrectenoForm(request, sender):
    username = sender
    user = User.objects.get(username=username)
    messages = Message.objects.filter(sender=user)
    messages = messages.filter(opponent=request.user)
    if request.method == 'POST':
        prectenoForm = MessagePrecteno(request.POST)

        if prectenoForm.is_valid():
            for message in messages:
                message.precteno = True
                message.save()

            return HttpResponseRedirect("/chat/"+str(username)+"/")
        else:
            print(prectenoForm.errors)
    else:
        prectenoForm = MessagePrecteno()
    return render(request, "chat.html")

