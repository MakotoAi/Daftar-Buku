# 📚 Daftar Buku

![Laravel CI](https://github.com/MakotoAi/Daftar-Buku/actions/workflows/laravel.yml/badge.svg)

Aplikasi web sederhana berbasis Laravel 12 untuk mengelola data buku.  
Proyek ini dibuat sebagai latihan dan pembelajaran dalam membangun aplikasi CRUD menggunakan Laravel, Tailwind, dan MySQL.

---

## ✨ Fitur Utama

- 📥 Tambah data buku
- 📄 Lihat daftar buku
- ✏️ Edit data buku
- ❌ Hapus data buku
- 💬 Notifikasi interaktif dengan SweetAlert2
- 📱 Desain responsif dengan Tailwind CSS

---

## 🛠️ Teknologi yang Digunakan

- **Laravel 12**
- **PHP 8.x**
- **MySQL / MariaDB**
- **Tailwind CSS**
- **SweetAlert2**
- **Composer**

---

## ⚙️ Langkah Instalasi

Ikuti langkah-langkah berikut untuk menjalankan aplikasi ini secara lokal:

1. **Clone Repository**
   ```bash
   git clone https://github.com/MakotoAi/Daftar-Buku.git
   cd Daftar-Buku

2. **Install Dependensi**
    ```bash
    composer install

3. **Salin File .env**
    ```bash
    cp .env.example .env
    php artisan key:generate

4. **Konfigurasi Database di .env**
    ```dotenv
    DB_DATABASE=daftar_buku
    DB_USERNAME=root
    DB_PASSWORD=

5. **Migrasi Database**
    ```bash
   php artisan migrate

5. **Jalankan Aplikasi**
    ```bash
   php artisan serve

5. **Akses di Browser**
    ```browser
   http://localhost:8000
   
👤 Kontributor
MakotoAi — Developer & maintainer utama
