import django_filters
from .models import Object

CHOICES_ORDER = (
    ("low", "Od nejnižší"),
    ("high", "Od nejvyšší")
)

class ObjectFilter(django_filters.FilterSet):
    name = django_filters.CharFilter(lookup_expr='icontains', label="Search")
    ordering = django_filters.ChoiceFilter(label="Seřadit podle ceny", choices=CHOICES_ORDER,
                                           method="filter_by_order")
    class Meta:
        model = Object

        fields = ["name"]

    def filter_by_order(self, queryset, name, value):
        expression = "price" if value == "low" else "-price"
        return queryset.order_by(expression)


