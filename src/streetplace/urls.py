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
from django.urls import reverse
from django.views.generic import TemplateView
from django.contrib.auth.views import LoginView, LogoutView
from listings.views import ObjectDetailView, ObjectListView, SearchObjectListView, UpdateObjectView, ObjectCreateView, ReportObjectView, edit_object, index, AllObjectsView, ContactView
from django.conf import settings
from dialogs.views import SendMessageView, ChatView, ChatMessageView, PrectenoForm
from profiles.views import ProfileFollowToggle, RegisterView, DealFormView, FindProfileView, activation, delete, LostPassword, PasswordReset, ProfileDetailView, edit_profile, ReportUserView, UserRating
from django.contrib.auth.views import logout
from django_private_chat import urls as django_private_chat_urls


urlpatterns = [
    url(r'^admin/', admin.site.urls),
    url(r'^$', index, name="index"),
    url(r'^kontakt/', ContactView, name="contact"),
    url(r'^dekujeme/', TemplateView.as_view(template_name="dekujeme.html"), name="dekujeme"),
    url(r'^about/', TemplateView.as_view(template_name="about.html"), name="about"),
    url(r'^faq/', TemplateView.as_view(template_name="faq.html"), name="faq"),

    url(r'^follow/$', ProfileFollowToggle.as_view(), name="follow"),
    url(r'^form/(?P<pk>\d+)/$', ReportObjectView, name="report-form"),

    url(r'^login/$', LoginView.as_view(), name="login"),
    url(r'^logout/$', LogoutView.as_view(), name="logout"),
    url(r'^register/$', RegisterView.as_view(), name="register"),
    url(r'^activation/(?P<username>[\w-]+)/(?P<key>[\w-]+)/$', activation, name="activation"),
    url(r'^notactivated/$', TemplateView.as_view(template_name="accounts/not_activated.html"), name="activation"),
    url(r'^passwordsent/$', TemplateView.as_view(template_name="registration/password-sent.html"),name="password-sent"),
    url(r'^passwordchanged/$', TemplateView.as_view(template_name="registration/password-changed.html"),name="password-changed"),
    url(r'^lost-password/$', LostPassword, name="lost-password"),
    url(r'^password-reset/(?P<username>[\w-]+)/(?P<key>[\w-]+)/$', PasswordReset, name="password-reset"),

    url(r"^chat/(?P<username>[\w-]+)/$", ChatView.as_view(), name="chat"),
    url(r"^chat/(?P<username>[\w-]+)/message/$", ChatMessageView.as_view(), name="chat-message"),
    url(r"^precteno/(?P<sender>[\w-]+)/$", PrectenoForm, name="precteno"),


    url(r"^listings/add/$", ObjectCreateView, name="add"),
    url(r'^listings/(?P<pk>\d+)/$', ObjectDetailView.as_view(), name="obj-detail"),
    url(r'^listings/(?P<pk>\d+)/update/$', edit_object, name="object_update"),
    url(r'^listings/(?P<pk>\d+)/proc/$', DealFormView.as_view(), name="deal-form"),
    url(r'^nelze-smazat/$', TemplateView.as_view(template_name="objects/nelzesmazat.html"), name="nelze-smazat"),
    url(r"^listings/(?P<slug>[\w-]+)/(?P<page>[\w-]+)/(?P<size>[\w-]+)/$", SearchObjectListView.as_view()),
    url(r'^listings/(?P<slug>[\w-]+)/(?P<page>[\w-]+)/filter=(?P<filter>[\w-]+)/$', SearchObjectListView.as_view()),
    url(r'^listings/(?P<slug>[\w-]+)/(?P<page>[\w-]+)/(?P<size>[\w-]+)/filter=(?P<filter>[\w-]+)/', SearchObjectListView.as_view()),
    url(r"^listings/(?P<pk>\d+)/delete/$", delete, name="delete_view"),
    url(r"^listings/(?P<pk>\d+)/report/$", ReportObjectView, name="report-form"),
    url(r"^listings/(?P<pk>\d+)/message/$", SendMessageView.as_view(), name="message-form"),
    url(r'^alreadyreported/$', TemplateView.as_view(template_name="listings/already_reported.html"),name="already_reported"),
    url(r'^useralreadyreported/$', TemplateView.as_view(template_name="profiles/user_already_reported.html"),name="user_already_reported"),
    url(r"^listings/everything/(?P<page>[\w-]+)/$", AllObjectsView.as_view(template_name="listings/all-objects.html"), name="everything"),

    url(r'^profiles/(?P<username>[\w-]+)/$', ProfileDetailView.as_view(template_name="profiles/user_detail.html"), name="profiledetail"),
    url(r"^profiles/(?P<username>[\w-]+)/edit/$", edit_profile, name="edit_profile"),
    url(r"^profiles/(?P<username>[\w-]+)/report/$", ReportUserView, name="report-user-form"),
    url(r"^profiles/(?P<username>[\w-]+)/rating/$", UserRating, name="user-rating"),
    url(r'^hledatprofil/', FindProfileView.as_view(), name="find-profile"),

    url(r'^', include(django_private_chat_urls)),

] + static(settings.MEDIA_URL, document_root=settings.MEDIA_ROOT)

#

