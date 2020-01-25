from django.contrib import admin
from .models import Profile, Deals, UserReport

# Register your models here.
admin.site.register(Profile)
admin.site.register(Deals)
admin.site.register(UserReport)