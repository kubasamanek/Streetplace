# -*- coding: utf-8 -*-
# Generated by Django 1.11.2 on 2019-03-10 11:18
from __future__ import unicode_literals

from django.db import migrations, models
import django.db.models.deletion


class Migration(migrations.Migration):

    dependencies = [
        ('profiles', '0018_auto_20190310_1152'),
    ]

    operations = [
        migrations.AddField(
            model_name='deals',
            name='cash',
            field=models.IntegerField(null=True),
        ),
        migrations.AlterField(
            model_name='deals',
            name='buyed_item',
            field=models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, related_name='buyed_item', to='listings.Object'),
        ),
        migrations.AlterField(
            model_name='deals',
            name='selled_item',
            field=models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, related_name='selled_item', to='listings.Object'),
        ),
    ]
