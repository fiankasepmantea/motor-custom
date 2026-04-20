# 🚀 Motor Custom - Fullstack Test

A modern web application for showcasing custom motorcycles with an admin CMS.  
Built using Laravel and Bootstrap with a focus on clean architecture and user experience.

---

## 🛠️ Tech Stack

- Backend: Laravel 13 (PHP 8.3)
- Database: MySQL
- Frontend: Blade + Bootstrap 5
- UI Enhancement: SweetAlert2 (Alert, Toast, Loading)
- AJAX: jQuery (Search & Filter)

---

## ✨ Features

### 🔹 Landing Page
- Hero slider
- Product listing (dynamic)
- Search product (AJAX)
- Filter by category (AJAX)
- Pagination (AJAX)

### 🔹 Admin CMS
- Create, Read, Update, Delete Product
- Upload image (storage)
- Category relation
- Pagination
- SweetAlert confirmation (delete)
- Toast notification (success)
- Loading indicator

---

## 📂 Project Structure
app/
├── Models/
├── Http/Controllers/
resources/
├── views/
├── admin/
├── layouts/
├── partials/
routes/
├── web.php


---

## ⚙️ Installation

```bash
git clone https://github.com/username/motor-custom.git
cd motor-custom

composer install
cp .env.example .env

php artisan key:generate

🗄️ Setup Database
DB_DATABASE=motor_custom
DB_USERNAME=root
DB_PASSWORD=

Run migration & seeder:
php artisan migrate --seed

📁 Storage (Important)
php artisan storage:link

▶️ Run Project
php artisan serve

Access:
http://127.0.0.1:8000

Admin:
http://127.0.0.1:8000/admin/products


🧠 Architecture
This project follows MVC pattern:

Controller → handle request/response & validation
Service logic → handled in controller (simple case)
Model → database interaction
View (Blade) → UI rendering


🚀 Improvements (Future)
Authentication (Admin login)
API versioning
Vue / Nuxt frontend
Docker setup
Unit testing

👨‍💻 Author
Alfian Nur Rachman
Software Enginner || Backend Developer (Golang, PHP, Node.js, etc)

GitHub: https://github.com/fiankasepmantea
