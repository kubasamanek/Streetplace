
from django.db import models
from django.db.models.signals import pre_save, post_save
from .utils import unique_slug_generator
from .validators import validate_category
from django.conf import settings
from .choices import CHOICES, STAV, Report_categories, CHOICES_PREDANI
from django.db.models import Q
from django.template.defaultfilters import slugify

User = settings.AUTH_USER_MODEL

# Create your models here.



class Object(models.Model):
    owner = models.ForeignKey(User, default="deleted")
    name = models.CharField(max_length=30)
    price = models.IntegerField(default="Dohodou", null=True, blank=True, )
    category = models.CharField(max_length=120, choices=CHOICES, blank=True, null=True)
    image = models.ImageField(default="/images/no_image.png", null=True, blank=True, upload_to="images")
    slug = models.SlugField(null=True, blank=True)
    created = models.DateTimeField(auto_now_add=True)
    updated = models.DateTimeField(auto_now=True)
    size = models.CharField(max_length=255, blank=True, null=True)
    description = models.TextField(max_length=300, blank=True, null=True)
    condition = models.CharField(max_length=120, choices=STAV, blank=True, null=True)
    predani = models.CharField(max_length=30, blank=True, null=True)

    def __str__(self):
        return self.name



class Reports(models.Model):
    owner = models.ForeignKey(User, default=1)
    object = models.CharField(max_length=120, blank=True, null=True)
    objectkey = models.ForeignKey(Object, default=1)
    category = models.CharField(max_length=120, choices=Report_categories, blank=True, null=True)
    reason = models.TextField(max_length=300, blank=True, null=True)
    solved = models.BooleanField(default=False)
    time = models.DateTimeField(auto_now_add=True)


    def __str__(self):
        if self.solved == False:
            return self.object + " NEVYŘEŠENO"
        else:
            return self.object + " ✓"


def get_image_filename(instance, filename):
    title = instance.object.name
    slug = slugify(title)
    return "post_images/%s-%s" % (slug, filename)


class Images(models.Model):
    object = models.ForeignKey(Object, default=None)
    images = models.ImageField(upload_to=get_image_filename, verbose_name='Images')

    def __str__(self):
        return self.object.name

def rl_pre_save_reciever(sender, instance, *args, **kwargs):
    instance.category = instance.category.capitalize()
    if not instance.slug:
        instance.slug = unique_slug_generator(instance)


pre_save.connect(rl_pre_save_reciever, sender=Object)

class Question(models.Model):
    name = models.CharField(max_length=30, blank=False, null=True)
    email = models.EmailField(blank=False, null=True)
    message = models.TextField(blank=False, null=True, max_length=350)

    def __str__(self):
        return self.email