# -*- coding: utf-8 -*-
# Generated by Django 1.11.2 on 2019-01-22 21:21
from __future__ import unicode_literals

from django.db import migrations


class Migration(migrations.Migration):

    dependencies = [
        ('listings', '0015_objectimages'),
    ]

    operations = [
        migrations.RemoveField(
            model_name='object',
            name='image',
        ),
    ]
