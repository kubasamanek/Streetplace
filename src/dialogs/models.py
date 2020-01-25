from django.db import models
from listings.models import Object
from django.conf import settings

User = settings.AUTH_USER_MODEL


# Create your models here.
class Message(models.Model):
    sender = models.ForeignKey(User, null=True, blank=True, related_name="sender")
    opponent = models.ForeignKey(User, null=True, blank=True, related_name="opponent")
    text = models.TextField(max_length=500, blank=True, null=True)
    time = models.DateTimeField(auto_now_add=True, blank=False, null=False)
    item = models.ForeignKey(Object, null=True, blank=True)
    precteno = models.BooleanField(null=False, blank=False, default=False)

    def __str__(self):
        return str(self.sender) + " to " + str(self.opponent)