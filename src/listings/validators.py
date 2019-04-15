from django.core.exceptions import ValidationError



CATEGORIES = [ "Boty", "Trika", "Mikiny", "Kalhoty", "Bundy", "Doplňky", "Košile" ]

def validate_category(value):
    cat = value.capitalize()
    if not value in CATEGORIES and not cat in CATEGORIES:
        raise ValidationError(f" {value} not a valid category")
    return cat
