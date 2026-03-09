# 👤 SIMPLE EMPLOYEE DETAILS

### Employee Management System

**Add. View. Edit. Manage.**

A clean, no-frills employee management web app built with Laravel and Blade — letting you create, read, update, and delete employee records through a straightforward, responsive interface.

[![Laravel](https://img.shields.io/badge/Laravel-11-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.2-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net)
[![Blade](https://img.shields.io/badge/Blade-Templates-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com/docs/blade)
[![Vite](https://img.shields.io/badge/Vite-646CFF?style=for-the-badge&logo=vite&logoColor=white)](https://vitejs.dev)

---

## ✨ Features

### 👥 Employee Records

- View a **list of all employees** in a clean, scannable layout
- See **detailed profile information** for each employee at a glance
- Data includes name, position, department, and other key details

### ✏️ CRUD Operations

| Operation | Description |
|-----------|-------------|
| **Create** | Add a new employee via a validated form |
| **Read** | Browse all employees or view a single employee's details |
| **Update** | Edit any employee's information through an intuitive edit form |
| **Delete** | Remove an employee record with a confirmation step |

### 🛡️ Form Validation

- Server-side validation on all create and update requests
- Inline error messages to guide users on invalid input
- Old input preserved on validation failure so users don't re-type everything

### 📐 Blade Templating

- Modular, reusable **Blade components and layouts** for a consistent UI
- Minimal custom CSS on top of a utility framework for fast, clean styling

---

## 🛠️ Tech Stack

| Technology | Purpose |
|-----------|---------|
| **Laravel** | MVC framework — routing, controllers, Eloquent ORM, validation |
| **PHP** | Server-side application logic |
| **Blade** | Laravel's templating engine for dynamic HTML views |
| **Eloquent ORM** | Expressive database interactions and model relationships |
| **MySQL / SQLite** | Relational database for persisting employee data |
| **Vite** | Asset bundling for CSS and JavaScript |
| **CSS** | Custom styling on top of the base layout |

---

## 🚀 Getting Started

### Prerequisites

- [PHP](https://www.php.net) 8.1+
- [Composer](https://getcomposer.org)
- [Node.js](https://nodejs.org) 18+
- A database (MySQL, PostgreSQL, or SQLite)

### Installation

```bash
# Clone the repository
git clone https://github.com/jpmasangkay/simple-employee-details.git
cd simple-employee-details

# Install PHP dependencies
composer install

# Install Node dependencies
npm install
```

### Environment Setup

```bash
# Copy the example env file
cp .env.example .env

# Generate the application key
php artisan key:generate
```

Then open `.env` and configure your database connection:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=employee_details
DB_USERNAME=root
DB_PASSWORD=
```

### Database Migration

```bash
php artisan migrate

# Optionally seed the database with sample data
php artisan db:seed
```

### Running the App

```bash
# Start the Vite dev server (in one terminal)
npm run dev

# Start the Laravel dev server (in another terminal)
php artisan serve
```

Open [http://localhost:8000](http://localhost:8000) in your browser.

### Available Scripts

| Command | Description |
|---------|-------------|
| `php artisan serve` | Start the Laravel development server |
| `npm run dev` | Start the Vite asset dev server |
| `npm run build` | Build and bundle assets for production |
| `php artisan migrate` | Run all pending database migrations |
| `php artisan migrate:fresh --seed` | Drop all tables, re-migrate, and seed |
| `php artisan test` | Run the test suite |

---

## 📁 Project Structure

```
simple-employee-details/
├── app/
│   ├── Http/
│   │   ├── Controllers/             # Request handling & business logic
│   │   └── Requests/                # Form request validation classes
│   └── Models/                      # Eloquent models (Employee, etc.)
├── bootstrap/                       # Laravel bootstrap files
├── config/                          # Application configuration files
├── database/
│   ├── migrations/                  # Database schema definitions
│   ├── factories/                   # Model factories for testing/seeding
│   └── seeders/                     # Database seeders
├── public/                          # Web root — compiled assets & entry point
├── resources/
│   ├── views/                       # Blade templates
│   │   ├── layouts/                 # Base layout templates
│   │   └── employees/               # Employee CRUD views (index, show, create, edit)
│   ├── css/                         # Source stylesheets
│   └── js/                          # Source JavaScript
├── routes/
│   └── web.php                      # Application web routes
├── storage/                         # Logs, cache, and file uploads
├── tests/                           # Feature and unit tests
├── .env.example                     # Environment variable template
├── artisan                          # Laravel CLI entry point
├── composer.json                    # PHP dependencies
├── package.json                     # Node dependencies
└── vite.config.js                   # Vite bundler configuration
```

---

## 🧠 How It Works

Umbra is a standard **Laravel MVC application**:

1. **Routing** — `routes/web.php` defines RESTful resource routes for employees, mapping HTTP verbs to controller actions (`index`, `create`, `store`, `show`, `edit`, `update`, `destroy`).

2. **Controllers** — The `EmployeeController` handles each action: fetching records from the database, validating incoming form data, persisting changes via Eloquent, and returning the appropriate Blade view or redirect.

3. **Eloquent ORM** — The `Employee` model maps to the `employees` database table and handles all query logic. Migrations define the schema in a version-controlled, database-agnostic way.

4. **Blade Views** — Templates in `resources/views/employees/` render the UI for each CRUD action. A shared layout in `resources/views/layouts/` provides the consistent page shell (navigation, header, footer).

5. **Validation** — Form Request classes (or inline controller validation) ensure all input is sanitised before touching the database. Errors are passed back to views automatically by Laravel.

---

## 🌐 Deployment

To deploy to a production server:

```bash
# Install dependencies (no dev packages)
composer install --no-dev --optimize-autoloader

# Build production assets
npm run build

# Run migrations on the production database
php artisan migrate --force

# Cache config, routes, and views for performance
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

Point your web server (Apache / Nginx) document root to the `public/` directory.

---

## 👏 Acknowledgements

- Built with [Laravel](https://laravel.com/) — The PHP Framework for Web Artisans
- Asset pipeline powered by [Vite](https://vitejs.dev/)
- Templating via [Laravel Blade](https://laravel.com/docs/blade)

---
