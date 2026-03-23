# 📰 News App — Laravel CRUD

A simple News management application built with Laravel, demonstrating CRUD operations, soft deletes, pagination, Form Request validation, and a REST API.

## 🚀 Features

- ✅ Create, Read, Update, Delete news articles
- ✅ Soft deletes
- ✅ Pagination (10 per page)
- ✅ Form Request validation
- ✅ REST API endpoints
- ✅ Auto-generated excerpt from content

## 🛠️ Tech Stack

- **Laravel 11**
- **Blade templating**
- **Eloquent ORM**
- **MySQL**

## ⚙️ Installation
```bash
git clone https://github.com/eNNN0x/news-app-laravel.git
cd news-app-laravel
composer install
cp .env.example .env
php artisan key:generate
```

Configure your database in `.env`:
```env
DB_DATABASE=news_app
DB_USERNAME=root
DB_PASSWORD=
```

Then run:
```bash
php artisan migrate
php artisan serve
```

Visit `http://127.0.0.1:8000/news`

## 🔌 API Endpoints

| Method | Endpoint | Description |
|--------|----------|-------------|
| GET | `/api/news` | List all news |
| POST | `/api/news` | Create news |
| GET | `/api/news/{id}` | Get single news |
| PUT | `/api/news/{id}` | Update news |
| DELETE | `/api/news/{id}` | Delete news |

## 📁 Project Structure
```
app/
├── Http/
│   ├── Controllers/
│   │   ├── NewsController.php        # Web CRUD
│   │   └── Api/NewsController.php    # REST API
│   └── Requests/
│       ├── StoreNewsRequest.php
│       └── UpdateNewsRequest.php
├── Models/
│   └── News.php
database/
└── migrations/
resources/
└── views/news/
    ├── index.blade.php
    ├── create.blade.php
    ├── edit.blade.php
    └── show.blade.php
routes/
├── web.php
└── api.php
```
