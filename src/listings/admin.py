from django.contrib import admin
from .models import Object, Images, Reports
from .forms import AddObjectFormMeta

# Register your models here.
class ImageInline(admin.StackedInline):
    model = Images
    extra = 4

class ObjectAdmin(admin.ModelAdmin):
    form = AddObjectFormMeta
    inlines = [ImageInline]

    def save_model(self, request, obj, form, change):
        super(ObjectAdmin, self).save_model(request, obj, form, change)
        # obj.save()

        for afile in request.FILES.getlist('photos_multiple'):
            obj.images.create(file=afile)

admin.site.register(Object, ObjectAdmin)
admin.site.register(Reports)