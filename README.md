<p align="center">
<a href="#" target="_blank">
<img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
</a>
</p>

<p align="center">
<img src="https://img.shields.io/badge/status-in%20progress-yellow" alt="Project Status">
<img src="https://img.shields.io/badge/custom-auth-learning-blue" alt="Custom Auth">
<img src="https://img.shields.io/badge/laravel-10-red" alt="Laravel">
</p>

---

## About This Project

This is a **work-in-progress Laravel project** focused on building a **custom authentication system from scratch**.

The aim is not just to use ready-made solutions, but to **understand how authentication, sessions, and role-based systems actually work internally**.

⚠️ This project is **still evolving**, structure and features may change over time.

---

## Current Progress

- Custom Register & Login (session-based)
- Manual authentication flow (no packages)
- Custom middleware (auth + role combined)
- Basic role-based dashboard logic
- Clean route structure

---

## Roles (initial)

- Admin
- Manager
- Employee
- Client
- Guest

---

## Tech Stack

- Laravel
- PHP
- MySQL
- Blade

---

## Philosophy

> Build it yourself → Understand it deeply → Then optimize

This project avoids:
- Breeze
- Jetstream
- Sanctum

To focus on **core fundamentals first**.

---

## Project Nature

- Not fully structured yet
- Not production-ready (yet)
- Iterative development
- Learning + building together

---

## Contributing

If you're interested in:
- improving structure
- adding features
- optimizing logic
- suggesting better practices

👉 You're welcome to contribute.

No strict rules — just clean thinking and meaningful improvements.

---

## Future Direction (loosely planned)

- Better role management
- Cleaner architecture
- React frontend integration
- API-based auth
- Admin panel
- Security improvements

---

## Running the Project

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve