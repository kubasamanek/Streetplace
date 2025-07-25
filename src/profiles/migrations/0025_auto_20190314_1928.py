# -*- coding: utf-8 -*-
# Generated by Django 1.11.2 on 2019-03-14 18:28
from __future__ import unicode_literals

from django.conf import settings
from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        migrations.swappable_dependency(settings.AUTH_USER_MODEL),
        ('profiles', '0024_deals_type'),
    ]

    operations = [
        migrations.RemoveField(
            model_name='deals',
            name='buyer',
        ),
        migrations.AddField(
            model_name='deals',
            name='buyer',
            field=models.ManyToManyField(blank=True, null=True, related_name='buyer', to=settings.AUTH_USER_MODEL),
        ),
        migrations.RemoveField(
            model_name='deals',
            name='seller',
        ),
        migrations.AddField(
            model_name='deals',
            name='seller',
            field=models.ManyToManyField(blank=True, null=True, related_name='seller', to=settings.AUTH_USER_MODEL),
        ),
    ]
