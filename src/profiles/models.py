from django.db import models
from django.conf import settings
from django.db.models.signals import post_save, pre_save
from listings.utils import unique_slug_generator_profile
from listings.choices import SIZES
from listings.models import Object


# Create your models here.
User = settings.AUTH_USER_MODEL

class ProfileManager(models.Manager):
    def toggle_follow(self, request_user, username_to_toggle):
        profile_ = Profile.objects.get(user__username__iexact=username_to_toggle)
        user = request_user
        is_following = False
        if user in profile_.followers.all():
            profile_.followers.remove(user)
        else:
            profile_.followers.add(user)
            is_following = True
        return profile_, is_following

class Profile(models.Model):
    user = models.OneToOneField(User)
    first_name = models.CharField(User, max_length=30, blank=False, null=True)
    last_name = models.CharField(User, max_length=30, blank=False, null=True)
    email = models.EmailField(User, null=True, blank=False)
    city = models.CharField(max_length=30, null=True, blank=True)
    followers = models.ManyToManyField(User, related_name="is_following", blank=True)
    following = models.ManyToManyField(User, related_name="following", blank=True)
    activated = models.BooleanField(default=False)
    image = models.ImageField(default="/images/no_image.png", null=True, blank=True, upload_to="images")
    slug = models.SlugField(null=True, blank=True)
    shoe_size = models.IntegerField(null=True, blank=True)
    clothes_size = models.CharField(null=True, blank=True, choices=SIZES, max_length=3)
    rating = models.IntegerField(null=True, blank=True, default=0)
    deals_counter = models.IntegerField(null=True, blank=True, default=0)
    objects = ProfileManager()

    def __str__(self):
        return self.user.username + " profile"


class Deals(models.Model):
    seller = models.ForeignKey(User, related_name="seller", null=True, blank=True)
    buyer = models.ForeignKey(User, related_name="buyer", null=True, blank=True)
    selled_item = models.ForeignKey(Object, related_name="selled_item", blank=True, null=True)
    buyed_item = models.ForeignKey(Object, related_name="buyed_item", blank=True, null=True)
    system_rating = models.IntegerField(null=True, blank=True)
    why_system_rating = models.TextField(max_length=300, blank=True, null=True)
    user_rating = models.IntegerField(null=True, blank=True)
    why_user_rating = models.TextField(max_length=300, blank=True, null=True)
    type = models.CharField(max_length=30, null=True, blank=True)
    time = models.DateTimeField(auto_now_add=True)

    def __str__(self):
        return str(self.seller) + " to " + str(self.buyer) + " - " + str(self.selled_item)


def post_save_user_reciever(sender, instance, created, *args, **kwargs):
    if created:
        profile, is_created = Profile.objects.get_or_create(user=instance)

def rl_pre_save_reciever(sender, instance, *args, **kwargs):
    if not instance.slug:
        instance.slug = unique_slug_generator_profile(instance)

pre_save.connect(rl_pre_save_reciever, sender=Profile)


post_save.connect(post_save_user_reciever, sender=User)