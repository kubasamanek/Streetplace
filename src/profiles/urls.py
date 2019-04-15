from .views import ProfileDetailView, EditProfile, edit_profile
from django.conf.urls import url, include
from django.conf import settings
from django.conf.urls.static import static
from django.views.generic import TemplateView
from listings.views import ObjectListView


urlpatterns = [
    url(r"^(?P<username>[\w-]+)/$", ProfileDetailView.as_view(template_name="profiles/detail_info.html"), name="profiledetail"),
    url(r"^(?P<username>[\w-]+)/hodnoceni/$", ProfileDetailView.as_view(template_name="profiles/detail_rating.html")),
    url(r"^(?P<username>[\w-]+)/produkty/$", ProfileDetailView.as_view(template_name="profiles/detail_products.html")),
    url(r"^(?P<username>[\w-]+)/kontakt/$", ProfileDetailView.as_view(template_name="profiles/detail_kontakt.html")),
    url(r"^(?P<username>[\w-]+)/edit/$", edit_profile),


] + static(settings.MEDIA_URL, document_root=settings.MEDIA_ROOT)

#