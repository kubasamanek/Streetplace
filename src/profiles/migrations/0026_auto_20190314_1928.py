# -*- coding: utf-8 -*-
# Generated by Django 1.11.2 on 2019-03-14 18:28
from __future__ import unicode_literals

from django.conf import settings
from django.db import migrations, models
import django.db.models.deletion


class Migration(migrations.Migration):

    dependencies = [
        migrations.swappable_dependency(settings.AUTH_USER_MODEL),
        ('profiles', '0025_auto_20190314_1928'),
    ]

    operations = [
        migrations.RemoveField(
            model_name='deals',
            name='buyer',
        ),
        migrations.AddField(
            model_name='deals',
            name='buyer',
            field=models.ForeignKey(blank=True, null=True, on_delete=django.db.models.deletion.CASCADE, related_name='buyer', to=settings.AUTH_USER_MODEL),
        ),
        migrations.RemoveField(
            model_name='deals',
            name='seller',
        ),
        migrations.AddField(
            model_name='deals',
            name='seller',
            field=models.ForeignKey(blank=True, null=True, on_delete=django.db.models.deletion.CASCADE, related_name='seller', to=settings.AUTH_USER_MODEL),
        ),
    ]
