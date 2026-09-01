# Streetplace

A Django marketplace for buying and selling second-hand streetwear — listings with photos and
sizing, user profiles with ratings and following, real-time chat between buyer and seller, and
moderation tooling for reported content.

---

## Features

**Listings**
- Post items with photos, category, size, condition (rated 1/10 to 10/10), price, and handover method
- Browse, search, and filter across the catalogue
- Categories covering the streetwear range — hoodies, shoes, trousers, tees, shirts, jackets,
  accessories, sportswear, shorts, and more
- Slug-based URLs generated automatically from item names

**Profiles**
- Registration with email activation keys
- Public profile with description, city, and photo
- Stored shoe and clothing sizes, so buyers can judge fit quickly
- **Follower/following** relationships between users
- **Seller rating** and a completed-deals counter to build trust

**Messaging**
- Real-time private chat between users over WebSockets, so buyer and seller can negotiate in-app

**Moderation**
- Users can report both listings and other users, with a category and written reason
- Reports carry a `solved` flag for admin follow-up

---

## Stack

| Layer | Technology |
|---|---|
| Framework | Django 1.11 |
| Database | PostgreSQL (`psycopg2`) |
| Chat | `django-private-chat` over `websockets` |
| Forms & filtering | `django-crispy-forms`, `django-filter`, `django-widget-tweaks`, `django-select2` |
| Images | `Pillow`, `sorl-thumbnail`, `multiuploader` |
| Money | `py-moneyed` |
| Serving | `gunicorn` |

## Apps

```
src/
├── listings/    Items, categories, search/filter, reports
├── profiles/    User profiles, following, ratings, activation
├── dialogs/     Private messaging between users
├── templates/   Shared templates
└── streetplace/ Project settings and URLs
```

---

## Running locally

```bash
cd src
pip install -r requirements.txt
python manage.py migrate
python manage.py runserver
```

The project targets **Python 3 with Django 1.11**; a SQLite database is included for local
development, with PostgreSQL configured for deployment via `dj-database-url`.

---

## A note on this repository

This is an early project (2018) and the repository shows it in two ways worth stating plainly:

- **Django 1.11 has reached end of life.** The code is kept as originally written rather than
  upgraded, so treat it as a snapshot of the project as it was built.
- **Collected static files and a virtualenv were committed**, which is why the repository is
  large. Neither belongs in version control; the application code itself lives in
  `src/listings`, `src/profiles`, and `src/dialogs`, and that is the part worth reading.

The interface and category names are in Czech.
