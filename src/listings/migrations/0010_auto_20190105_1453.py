# -*- coding: utf-8 -*-
# Generated by Django 1.11.2 on 2019-01-05 13:53
from __future__ import unicode_literals

from django.db import migrations, models
import listings.validators


class Migration(migrations.Migration):

    dependencies = [
        ('listings', '0009_auto_20190102_1254'),
    ]

    operations = [
        migrations.AddField(
            model_name='object',
            name='size',
            field=models.CharField(blank=True, choices=[('XS', 'XS'), ('S', 'S'), ('M', 'M'), ('L', 'L'), ('XL', 'XL'), ('XXL', 'XXL')], max_length=120, null=True),
        ),
        migrations.AlterField(
            model_name='object',
            name='category',
            field=models.CharField(blank=True, choices=[('Mikiny', 'Mikiny'), ('Boty', 'Boty'), ('Kalhoty', 'Kalhoty'), ('Trika', 'Trika'), ('Košile', 'Košile'), ('Doplňky', 'Doplňky')], max_length=120, null=True, validators=[listings.validators.validate_category]),
        ),
    ]
