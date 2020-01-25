from django import template
from django.db.models import Q

register = template.Library()

from ..models import Message


@register.simple_tag
def messages_count():
    user = request.user
    messages = Message.objects.filter(Q(sender=user) | Q(opponent=user))
    messages = messages.filter(precteno=False)
    pocet_zprav = messages.count()
    return pocet_zprav