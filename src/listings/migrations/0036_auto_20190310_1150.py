# -*- coding: utf-8 -*-
# Generated by Django 1.11.2 on 2019-03-10 10:50
from __future__ import unicode_literals

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('listings', '0035_auto_20190307_1734'),
    ]

    operations = [
        migrations.AlterField(
            model_name='object',
            name='price',
            field=models.IntegerField(blank=True, default='Dohodou', null=True),
        ),
    ]
