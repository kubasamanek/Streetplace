# -*- coding: utf-8 -*-
# Generated by Django 1.11.2 on 2019-05-06 08:47
from __future__ import unicode_literals

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('profiles', '0034_auto_20190504_1745'),
    ]

    operations = [
        migrations.AddField(
            model_name='profile',
            name='activation_key',
            field=models.CharField(max_length=120, null=True),
        ),
    ]
