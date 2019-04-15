from django.db import models
from django.db.models.signals import pre_save, post_save
from .utils import unique_slug_generator
from .validators import validate_category
from django.conf import settings
from .choices import CHOICES

User = settings.AUTH_USER_MODEL

# Create your models here.
class Object(models.Model):
    owner = models.ForeignKey(User, default=1)
    name = models.CharField(max_length=120)
    price = models.CharField(max_length=120, null=True, blank=True)
    category = models.CharField(max_length=120, choices=CHOICES, blank=True, null=True, validators=[validate_category])
    image = models.ImageField(default="/images/no_image.png", null=True, blank=True, upload_to="images")
    slug = models.SlugField(null=True, blank=True)


    def __str__(self):
        return self.name

def rl_pre_save_reciever(sender, instance, *args, **kwargs):
    instance.category = instance.category.capitalize()
    if not instance.slug:
        instance.slug = unique_slug_generator(instance)

pre_save.connect(rl_pre_save_reciever, sender=Object)
