# -*- coding: utf-8 -*-
# Generated by Django 1.11.2 on 2019-01-23 21:38
from __future__ import unicode_literals

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('listings', '0020_auto_20190123_2233'),
    ]

    operations = [
        migrations.AlterField(
            model_name='object',
            name='file',
            field=models.FileField(null=True, upload_to='images'),
        ),
    ]
