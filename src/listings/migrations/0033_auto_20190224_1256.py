# -*- coding: utf-8 -*-
# Generated by Django 1.11.2 on 2019-02-24 11:56
from __future__ import unicode_literals

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('listings', '0032_reports_object'),
    ]

    operations = [
        migrations.AlterField(
            model_name='reports',
            name='object',
            field=models.CharField(blank=True, max_length=120, null=True),
        ),
    ]
