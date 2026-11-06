# PBO LKS — Portofolio Praktikum

Sistem Informasi Perpustakaan berbasis decoupled architecture (Backend REST API PHP Native & Frontend SPA Vanilla JS).

---

## 👤 Identitas Peserta
- **Nama**    : Novitasari
- **NIM**     : H1101251058
- **Kelas**   : Pemrograman Berorientasi Objek

---

## 📋 Daftar Pertemuan & Status
- [x] Pertemuan 1 — Setup & Database
- [x] Pertemuan 2 — Core OOP
- [x] Pertemuan 3 — Framework & Routing
- [x] Pertemuan 4 — Testing Backend
- [x] Pertemuan 5 — CRUD Kategori
- [x] Pertemuan 6 — Frontend
- [x] Pertemuan 7 — Integrasi & Finalisasi

---

## 🚀 Daftar Fitur Aplikasi

### 1. Backend REST API (Port 8000)
- **Arsitektur Decoupled**: Struktur MVC dengan Service Layer & Repository Pattern.
- **Dependency Injection**: Custom DI Container untuk manajemen instance objek secara otomatis.
- **Autoloading**: Standar PSR-4 menggunakan Composer.
- **CORS Middleware**: Akses API lintas origin untuk frontend terpisah.
- **CRUD Operations**: API Endpoint lengkap untuk Resource Buku & Kategori.
- **Automated Testing**: Skrip pengujian cURL otomatis (`tests/api_test.sh`).

### 2. Frontend SPA (Port 3000)
- **Single Page Application**: Navigasi halaman tanpa reload menggunakan Hash Router (`#dashboard`, `#books`, `#categories`).
- **Styling UI**: Tailwind CSS (CDN) responsif dan bersih.
- **Dynamic Dashboard**: Ringkasan statistik Total Buku, Total Stok, dan Kategori secara *real-time*.
- **Interactive UI**: Modal Form untuk Tambah/Edit data dan sistem Toast Notification.
- **Keamanan Client**: Pembersihan input (XSS Escaping) pada teks user.

---

## ⚙️ Cara Menjalankan Proyek

### Step 1: Import Database
Import skema MySQL di phpMyAdmin atau terminal MySQL:
```bash
mysql -u root -e "CREATE DATABASE IF NOT EXISTS perpustakaan;"
mysql -u root perpustakaan < database/schema.sql