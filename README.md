<h1 align="center">🎵 Kpop Pocket — Premium K-Pop E-Commerce</h1>

<p align="center">
  <b>Aplikasi Web E-Commerce K-Pop Modern dengan dukungan Dark/Light Mode, fitur pengguna yang lengkap, dan Dashboard Admin yang terintegrasi (Premium Modern Minimalist & Trendy Y2K K-Pop Vibes).</b>
</p>

<p align="center">
  <img src="https://img.shields.io/badge/FRAMEWORK-LARAVEL-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Framework" />
  <img src="https://img.shields.io/badge/LANGUAGE-PHP_8.2+-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="Language" />
  <img src="https://img.shields.io/badge/FRONTEND-BLADE_%26_ALPINE.JS-8CB4FF?style=for-the-badge&logo=alpine-dot-js&logoColor=white" alt="Frontend" />
  <img src="https://img.shields.io/badge/STYLING-TAILWIND_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white" alt="Styling" />
  <img src="https://img.shields.io/badge/DATABASE-MYSQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white" alt="Database" />
</p>

<br>

## 🎨 Estetika & Sistem Desain

Desain ini memadukan **"Premium Modern Minimalist"** dengan **"Trendy Y2K K-Pop Vibes"** (tema urban, keren, dan sangat estetis), yang ditargetkan untuk kalangan Gen-Z dan Milenial.

- **Gaya UI (UI Style)**: *Soft-Glassmorphism* (efek kaca buram, latar belakang blur), menonjolkan kedalaman dimensi, dan tata letak dengan pola *bento-box grid*.
- **Bentuk (Shapes)**: Sudut melengkung yang halus (24px untuk bentuk kartu, pil penuh/oval untuk tombol).
- **Tema (Themes)**: Mendukung penuh **Mode Gelap (Dark Mode)** dan **Mode Terang (Light Mode)** di setiap halaman.
- **Warna**: APLIKASI INI MENGHINDARI penggunaan warna hijau untuk elemen penanda sukses (*success states*). Sebagai gantinya, menggunakan warna khusus seperti ungu elektrik, merah muda (*soft neon pink*), atau oranye hangat.
  - **Mode Gelap**: Latar Belakang #0B0B0F, Kartu #14141B, Pink Utama #FF4FA3.
  - **Mode Terang**: Latar Belakang #FFF7FB, Kartu #FFFFFF, Pink Utama #FF5CA8.

## 🚀 Fitur Utama

### Fitur Publik & Pengguna Biasa
- **Beranda Imersif**: *Hero Banner* selebar layar, bagian promosi dengan format *Bento Grid*, kartu kategori dengan efek animasi melayang (*hover*), dan produk yang dapat digeser menyamping (*horizontal scrolling*).
- **Katalog & Detail Produk**: Mendukung fitur *pre-order*, berbagai label produk (*Trending*, *Hot*, *Popular*), dan galeri gambar bergaya Instagram.
- **Keranjang Belanja Pintar**: Item yang akan di-*checkout* bisa dicentang dan dipilih secara independen (Pilih per item / Pilih Semua), dan *subtotal* harga terbarui secara otomatis.
- **Tahapan Checkout (Stepper)**: Menggunakan alur *checkout* minimalis mulai dari Alamat > Pengiriman > Pembayaran (Mendukung E-wallet, Transfer Bank, QRIS).
- **Dashboard Pengguna**: Fitur manajemen profil pengguna, pelacakan pesanan, pemberian ulasan, dan *wishlist* (daftar keinginan).
- **Newsletter**: Menyediakan blok *subscribe* yang estetis untuk menerima pembaruan produk.

### Dashboard Admin
- **Ringkasan Analitik**: Kartu statistik keren berbentuk kotak *bento* dengan grafik bawaan (Mencakup Total Pendapatan, Pesanan, Produk, dan Pelanggan).
- **Manajemen Produk**: Mengontrol katalog, jumlah stok, *Update* ETA (Estimasi kedatangan barang *pre-order*), serta pengaturan kategori produk.
- **Manajemen Pesanan**: Memproses pengiriman barang dan melakukan verifikasi pembayaran pelanggan.
- **Antarmuka (UI) Bersih**: Tabel tanpa garis batas (*borderless*), *sidebar* melayang (*floating*), efek tembus pandang, dan area unggah gambar (*drag-and-drop*).

---

## 🔐 Otentikasi & Manajemen Hak Akses (Roles)

Aplikasi ini sudah dikonfigurasi dengan sistem multi-role menggunakan database tabel yang sama (\users\):
- **User Dashboard**: Terletak di route \/dashboard\. Untuk user reguler/pembeli.
- **Admin Dashboard**: Terletak di route \/admin/dashboard\. Dilindungi oleh *Admin Middleware*.
> **Penting**: Saat melakukan proses Login, sistem akan **secara otomatis mengarahkan** pengguna ke halaman (dashboard) yang sesuai dengan isi kolom \
ole\ pada databasenya masing-masing (\dmin\ atau \user\). Semua controller dan tampilan UI (Blade views) sudah dipisah ke dalam foldernya masing-masing (\
esources/views/admin/\ dan \
esources/views/user/\).

---

## 🛠️ Persyaratan Sistem (Requirements)
- PHP ^8.2
- Composer
- Node.js & NPM
- MySQL Database

---

## ⚙️ Instalasi & Pengaturan Tuntunan (Setup)

Ikuti langkah-langkah berikut untuk menjalankan proyek "Kpop Pocket" di komputer / laptop Anda (Lingkungan Lokal):

### 1. Kloning & Instal Dependensi (Library)
Buka terminal Anda dan pastikan Anda berada di dalam folder proyek:

# Instal dependensi PHP
composer install

# Instal dependensi Javascript/CSS
npm install


### 2. Konfigurasi Environment (Lingkungan)
Salin file environment standar dan buat kunci aplikasi (app key) baru:

cp .env.example .env
# Jika menggunakan Windows PowerShell: copy .env.example .env

php artisan key:generate


Pastikan untuk menyesuaikan file \.env\ Anda agar terhubung dengan database MySQL lokal Anda:
\\\env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=kpop_pocket
DB_USERNAME=root
DB_PASSWORD=


### 3. Migrasi Database & Seeding Data
Pastikan server MySQL Anda (Bisa melalui XAMPP/Laragon/DBngin) sedang menyala. Buatlah database baru secara manual dengan nama \kpop_pocket\.
Setelah itu, jalankan perintah migrasi untuk merakit semua tabel secara otomatis:

php artisan migrate

# Jika Anda memiliki data dummy (seeder), Anda dapat menjalankan:
php artisan db:seed


### 4. Build Aset Frontend
Lakukan kompilasi kerangka Tailwind CSS dan Javascript menggunakan *Vite*:

# Untuk keperluan development (Live reload/Hot-module)
npm run dev

# Membangun file yang siap dilepas ke tahap produksi (Minified)
npm run build


### 5. Jalankan Server Lokal
Terakhir, mulai jalankan server dasar bawaan Laravel:

php artisan serve

Lalu buka website di browser Anda melalui alamat: **\http://127.0.0.1:8000\**.

---

## 📁 Ringkasan Arsitektur Database
- **Users**: Mengelola data admin & data pelanggan, status peran (role), avatar, serta nomor telepon.
- **Categories & Groups**: Mengatur kategori jenis *merchandise* dan direktori grup K-pop.
- **Products & Product Images**: Menyimpan barang, ketersediaan stok, status *pre-order*, informasi harga dasar, dan aneka lencana (badge) promosi.
- **Carts (Keranjang)**: Mesin utama yang mendukung fitur *Smart Selective Checkout* (Pilih sebagian barang).
- **Orders, Order Items, Shipments, Payments**: Alur pipa (Pipeline) lengkap mulai dari transaksi, pembayaran, hingga pengiriman.
- **Reviews**: Arsip *feedback* produk dari pelanggan (Wajib lolos persetujuan Admin).
- **Wishlists & Newsletters**: Pelengkap fitur pelibatan pelanggan (*User engagement*).

---
*Dibangun Sepenuh Hati untuk Komunitas K-Pop Modern.* 🫰
