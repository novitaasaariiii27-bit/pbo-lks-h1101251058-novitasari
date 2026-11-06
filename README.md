# PBO LKS — Portofolio Praktikum

Sistem Informasi Perpustakaan berbasis decoupled architecture (Backend REST API PHP Native & Frontend SPA Vanilla JS).

---

## 👤 Identitas Peserta
- **Nama**    : Novitasari
- **NIM**     : H1101251058
- **Kelas**   : Pemrograman Berorientasi Objek

---

## 📸 Dokumentasi Screenshot & Riwayat Commit

| Pertemuan | Pokok Bahasan | Link Bukti File / Commit |
| :--- | :--- | :--- |
| **Pertemuan 1** | Setup & Database Connection |[🔗 Link Commit](hhttps://github.com/novitaasaariiii27-bit/pbo-lks-h1101251058-novitasari/tree/main/pertemuan-01) |
| **Pertemuan 2** | Core OOP (Repository & Service) | [🔗 Link Commit](https://github.com/novitaasaariiii27-bit/pbo-lks-h1101251058-novitasari/tree/main/pertemuan-02) |
| **Pertemuan 3** | Framework & Routing | [🔗 Link Commit](https://github.com/novitaasaariiii27-bit/pbo-lks-h1101251058-novitasari/tree/main/pertemuan-03) |
| **Pertemuan 4** | Testing Backend (cURL Script) | [🔗 Link Commit](https://github.com/novitaasaariiii27-bit/pbo-lks-h1101251058-novitasari/tree/main/pertemuan-04) |
| **Pertemuan 5** | CRUD Kategori Complete | [🔗 Link Commit](https://github.com/novitaasaariiii27-bit/pbo-lks-h1101251058-novitasari/tree/main/pertemuan-05) |
| **Pertemuan 6** | CORS Backend & Setup Frontend | [🔗 Link Commit](hhttps://github.com/novitaasaariiii27-bit/pbo-lks-h1101251058-novitasari/tree/main/pertemuan-06) |
| **Pertemuan 7** | Integrasi SPA & Finalisasi | [🔗 Link Commit](https://github.com/novitaasaariiii27-bit/pbo-lks-h1101251058-novitasari/tree/main/pertemuan-07) |

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