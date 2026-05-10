<h1 align="center">🎵 Kpop Pocket — Premium K-Pop E-Commerce</h1>

<p align="center">
  <b>Aplikasi Web E-Commerce K-Pop Modern dengan estetika Premium Dark Mode Holographic, fitur pengguna yang lengkap, dan Dashboard Admin yang terintegrasi (Premium Modern Minimalist & Trendy Y2K K-Pop Vibes).</b>
</p>

<p align="center">
  <img src="https://img.shields.io/badge/FRAMEWORK-LARAVEL-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Framework" />
  <img src="https://img.shields.io/badge/LANGUAGE-PHP_8.2+-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="Language" />
  <img src="https://img.shields.io/badge/FRONTEND-BLADE_%26_ALPINE.JS-8CB4FF?style=for-the-badge&logo=alpine-dot-js&logoColor=white" alt="Frontend" />
  <img src="https://img.shields.io/badge/STYLING-TAILWIND_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white" alt="Styling" />
  <img src="https://img.shields.io/badge/DATABASE-MYSQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white" alt="Database" />
</p>

<br>

## 📖 Deskripsi Project

Kpop Pocket adalah aplikasi e-commerce modern yang dirancang khusus untuk komunitas K-Pop. Menggunakan framework Laravel, aplikasi ini menawarkan pengalaman belanja yang imersif dengan desain yang sangat estetis. Fitur utama mencakup manajemen produk pre-order, keranjang belanja selektif, sistem Multi-Role, dan dashboard admin yang komprehensif. Aplikasi ini mengedepankan identitas visual yang mewah, minimalis, dan sangat *trendy* (Y2K Aesthetics).

## 🎨 Estetika & Sistem Desain (Premium Dark Mode)

Kpop Pocket kini menggunakan sistem desain **"Premium Dark Mode Holographic"** yang mengunci aplikasi pada estetika gelap yang konsisten dan profesional.

- **Palet Warna Utama**:
  - **Latar Belakang**: Deep Plum/Dark Maroon (`#1D1014`) — Memberikan kedalaman yang lebih elegan dibandingkan hitam standar.
  - **Aksen Utama**: Electric Pink (`#FF2E93`) & Neon Pink (`#FF5DB1`).
  - **Elemen Kartu**: Glassmorphism (Transparansi 4% dengan Blur 20px).
- **Sistem Interaksi Cinematic**:
  - **Shimmer Hover**: Tombol utama memiliki efek kilauan cahaya (*shimmer*) dinamis saat kursor diarahkan.
  - **Scale Transform**: Feedback visual instan dengan pembesaran skala `1.02` pada elemen interaktif.
- **Tipografi**: Menggunakan kombinasi font **Epilogue** untuk heading yang berani dan **Plus Jakarta Sans** untuk keterbacaan tinggi pada teks bodi.

## 🚀 Fitur Utama

### Fitur Publik & Pengguna
- **Bento-Grid Featured Drops**: Layout produk unggulan yang dinamis dan modern.
- **Horizontal Scrolling New Arrivals**: Navigasi produk baru yang lancar dan responsif.
- **Holographic Product Cards**: Kartu produk dengan efek glow saat hover dan label status stok (Hot, New, Low Stock).
- **Smart Checkout System**: Alur pembelian yang minimalis dan terstruktur.

### Dashboard Admin (Full Integrated)
- **Advanced Analytics**: Monitoring pendapatan, jumlah pesanan, dan tren pelanggan melalui bento-style stats cards.
- **Inventory Management**: Kontrol penuh atas stok produk, kategori, dan galeri gambar produk.
- **Customer & Order Suite**: Manajemen database pelanggan dan pemrosesan pesanan secara *real-time*.
- **Admin Exclusive Creation**: Fitur pembuatan akun admin melalui endpoint API yang aman untuk inisialisasi sistem.

---

## 🔐 Otentikasi & Manajemen Hak Akses (Roles)

Sistem menggunakan Multi-Role terpusat:
- **Pelanggan**: Mengakses dashboard belanja, wishlist, dan profil di `/dashboard`.
- **Administrator**: Mengakses suite manajemen lengkap di `/admin/dashboard`.
- **Secure Redirection**: Sistem secara otomatis mendeteksi role saat login dan mengarahkan pengguna ke dashboard yang sesuai.

---

## 🛠️ Persyaratan Sistem (Requirements)
- PHP ^8.2
- Composer
- Node.js & NPM
- MySQL Database

---

## ⚙️ Instalasi & Pengaturan (Setup)

### 1. Persiapan Dependensi
```bash
composer install
npm install
```

### 2. Konfigurasi Environment
```bash
cp .env.example .env
php artisan key:generate
```
Sesuaikan `DB_DATABASE`, `DB_USERNAME`, dan `DB_PASSWORD` di file `.env`.

### 3. Migrasi & Seed Data
```bash
php artisan migrate --seed
```

### 4. Build Aset
```bash
npm run dev # development
# atau
npm run build # production
```

---

## 🚀 Cara Menjalankan Project

**Terminal 1 (Laravel):**
```bash
php artisan serve
```

**Terminal 2 (Vite):**
```bash
npm run dev
```
Akses melalui: **http://127.0.0.1:8000**

---

## 💻 Standar Kolaborasi
- Gunakan pesan commit yang deskriptif.
- Pastikan aset frontend dikompilasi sebelum push jika ada perubahan CSS/JS.
- Gunakan standar Git Flow untuk penambahan fitur baru.

---

## 📁 Struktur Database Utama
- **Users (Multi-role)**: Admin & Pelanggan.
- **Merchandise Suite**: Products, Product Images, Categories.
- **Transaction Pipeline**: Carts, Orders, Payments, Shipments.
- **Engagement**: Reviews, Wishlists, Newsletters.

---
*Dibangun Sepenuh Hati untuk Komunitas K-Pop Modern.* 🫰
ti untuk Komunitas K-Pop Modern.* 🫰
