"""streetplace URL Configuration

The `urlpatterns` list routes URLs to views. For more information please see:
    https://docs.djangoproject.com/en/1.11/topics/http/urls/
Examples:
Function views
    1. Add an import:  from my_app import views
    2. Add a URL to urlpatterns:  url(r'^$', views.home, name='home')
Class-based views
    1. Add an import:  from other_app.views import Home
    2. Add a URL to urlpatterns:  url(r'^$', Home.as_view(), name='home')
Including another URLconf
    1. Import the include() function: from django.conf.urls import url, include
    2. Add a URL to urlpatterns:  url(r'^blog/', include('blog.urls'))
"""
from django.conf.urls import url, include
from django.conf.urls.static import static
from django.contrib import admin
from django.views.generic import TemplateView
from django.contrib.auth.views import LoginView, LogoutView
from listings.views import ObjectDetailView, ObjectListView, SearchObjectListView, DeleteObjectView, UpdateObjectView, ObjectCreateView, ReportObjectView
from django.conf import settings
from profiles.views import ProfileFollowToggle, RegisterView, DealFormView
from django.contrib.auth.views import logout
from django_private_chat import urls as django_private_chat_urls


urlpatterns = [
    url(r'^admin/', admin.site.urls),
    url(r'^$', TemplateView.as_view(template_name="index.html")),
    url(r'^contact/', TemplateView.as_view(template_name="contact.html")),
    url(r'^about/', TemplateView.as_view(template_name="about.html"), name="about"),
    url(r'^follow/$', ProfileFollowToggle.as_view(), name="follow"),
    url(r"^listings/add/$", ObjectCreateView),
    url(r'^login/$', LoginView.as_view()),
    url(r'^logout/$', LogoutView.as_view()),
    url(r'^register/$', RegisterView.as_view()),
    url(r'^listings/(?P<pk>\d+)/$', ObjectDetailView.as_view()),
    url(r'^listings/(?P<pk>\d+)/delete/$', DeleteObjectView.as_view(), name="object_delete"),
    url(r'^listings/(?P<pk>\d+)/update/$', UpdateObjectView.as_view(), name="object_update"),
    url(r'^listings/(?P<pk>\d+)/proc/$', DealFormView.as_view(), name="DealForm"),
    url(r'^form/$', ReportObjectView, name="ReportObject"),
    url(r"^listings/(?P<slug>[\w-]+)/$", SearchObjectListView.as_view()),
    url(r'^listings/$', SearchObjectListView.as_view()),
    url(r'^listings/filter=(?P<filter>[\w-]+)/', SearchObjectListView.as_view()),
    url(r'^profiles/', include("profiles.urls"), name="profiles"),
    url(r'^', include(django_private_chat_urls)),

] + static(settings.MEDIA_URL, document_root=settings.MEDIA_ROOT)

#

