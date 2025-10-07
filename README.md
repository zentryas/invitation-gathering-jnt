# 🚀 Invitation Gathering J&T

Project ini dibangun menggunakan Laravel Framework versi 12.

---

## 🛠️ Fitur

- Link invitation
- Autentikasi pengguna (Login, Logout)
- Master data (CR)
- Middleware & Authorization
- dll.

---

## 📦 Tech Stack

- Laravel 12
- PHP >= 8.2
- Composer
- MySQL 
- Node.js v.20.19.3 + npm v10.8.2

---

## 🚀 Cara Install & Menjalankan Project

Ikuti langkah-langkah berikut untuk menjalankan project ini secara lokal:

### 1. Clone Repository

git clone https://github.com/zentryas/invitation-gathering-jnt.git
cd invitation-gathering-jnt

### 2. Install Dependency PHP
composer install

### 3. Salin File .env
cp .env.example .env

### 4. Generate Application Key
php artisan key:generate

### 5. Konfigurasi Database

Edit file .env dan sesuaikan bagian berikut:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database
DB_USERNAME=root
DB_PASSWORD=yourpassword

### 6. Jalankan Migrasi & Seeder (opsional)
php artisan migrate --seed

### 7. Install Dependency Frontend (jika menggunakan Laravel Mix)
npm install && npm run dev