# -*- coding: utf-8 -*-
# Generated by Django 1.11.2 on 2019-02-02 23:24
from __future__ import unicode_literals

from django.db import migrations


class Migration(migrations.Migration):

    dependencies = [
        ('profiles', '0014_auto_20190202_2321'),
    ]

    operations = [
        migrations.RenameField(
            model_name='profile',
            old_name='username',
            new_name='slug',
        ),
    ]
