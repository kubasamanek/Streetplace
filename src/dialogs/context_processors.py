from django.db.models import Q
from .models import Message
from django.contrib.auth import get_user_model


User = get_user_model()


def unread_messages(request):
    if request.user.is_anonymous == False:
        user = request.user
        messages = Message.objects.filter(opponent=user)
        messages = messages.filter(precteno=False)
        messages = messages.order_by("-time")
        sender_list = []
        unread_messages = []
        for message in messages:
            if message.sender not in sender_list:
                sender_list.append(message.sender)
                print(message.sender)
                unread_messages.append(message)
        pocet_zprav = len(unread_messages)
        last_message_list = Message.objects.filter(Q(sender=user) | Q(opponent=user))
        last_message_list = last_message_list.order_by("-time")
        last_message = last_message_list[0]
        if last_message.sender == user:
            last_message_user = last_message.opponent
        else:
            last_message_user = last_message.sender
        if not last_message_user:
            last_message_user = last_message.opponent
        return {"pocet_zprav" : pocet_zprav,
                "unread_messages" : unread_messages,
                "last_message_user": last_message_user,}
    else:
        print(request.user)
        return  {"pocet_zprav" : 0,
                "unread_messages" : [],
                "last_message_user": "#",}