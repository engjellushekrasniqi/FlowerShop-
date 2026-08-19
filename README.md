# Laravel Flower Shop Website

This is a web application built with **Laravel** that simulates the functionality of an online flower shop. Users can browse products, register, log in, add items to their cart, and place orders. Administrators can manage products, categories, and orders.

---

## Technologies Used

| Technology | Purpose |
| --- | --- |
| **PHP (Laravel)** | The main backend framework for the MVC structure and application logic |
| **HTML5** | Page structure and interactive forms |
| **CSS3** | Page styling and a modern visual design |
| **Bootstrap** | Responsive design support and prebuilt components |
| **JavaScript** | Page interactions, validation, and effects |
| **XML** | Structured product data and product information import/export in selected modules |
| **MySQL** | Database storage for users, orders, and products |
| **Blade (Laravel)** | Template engine for dynamically generating HTML in Laravel |

---

## Authentication

Authentication is implemented using Laravel's built-in system and includes:

- User registration and login
- A separate administration panel
- Route protection through the `auth` middleware
- Database persistence through the Laravel Eloquent ORM

**Example:**

`Auth::check()`, `Auth::user()`, and the `auth` middleware are used to control access.

---

## Use of HTML5

HTML5 is used for:

- Semantic page structure (`<header>`, `<footer>`, `<section>`)
- Forms with advanced attributes (`type="email"`, `required`, `placeholder`)
- Basic browser-side validation for form inputs

---

## Use of CSS

- CSS and Bootstrap are used to create a clean, responsive interface.
- Product cards, the navbar, forms, and other elements are styled throughout the website.
- Bootstrap classes such as `container`, `row`, `col-md-*`, `btn`, and `card` are used extensively.

---

## Use of XML

XML is used in selected project modules for:

- Structured storage of static data or product backups
- Importing or exporting products and orders in XML format in advanced versions or extensions of the project

---

## Project Structure

```
flower_shop_project/
│
├── app/                   # Controllers, models, and business logic
├── public/                # Public assets such as CSS, JavaScript, and images
├── resources/
│   ├── views/             # Blade templates for the pages
│   └── css, js            # Styling and functionality files
├── routes/
│   └── web.php            # Application routes
├── database/
│   ├── migrations/        # Database table migrations
│   └── seeders/           # Initial data population
├── .env                   # Database configuration and other settings
└── README.md              # Project documentation
```

---

## Key Features

- User registration and login
- Administration panel for managing products and categories
- Product listing and product detail pages
- Adding products to the shopping cart
- Purchasing and order management
- Administrator role with full access

---

## Project Demo

Add screenshots here to demonstrate the project:

![Homepage](screenshots/homepage.png)
![Login](screenshots/login.png)
![Shopping Cart](screenshots/cart.png)
![Admin Panel](screenshots/admin_panel.png)

---

## How to Run the Project Locally

1. Open the project and install the dependencies:

```bash
cd project-name
composer install
npm install && npm run dev
```

2. Configure `.env`:

```bash
cp .env.example .env
php artisan key:generate
```

3. Create and migrate the database:

```bash
php artisan migrate
```

4. Start the development server:

```bash
php artisan serve
```

## Screenshots

<p>
  <img src="screenshots/readme1.png" alt="Demo 1" width="600"/>
</p>
<p>
  <img src="screenshots/readme2.png" alt="Demo 2" width="600"/>
</p>
<p>
  <img src="screenshots/readme3.png" alt="Demo 3" width="600"/>
</p>
<p>
  <img src="screenshots/readme4.png" alt="Demo 4" width="600"/>
</p>

> This project was developed as part of an educational assignment.

---
