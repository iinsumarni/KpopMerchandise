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

## 🎨 Aesthetic & Design System

The design blends **"Premium Modern Minimalist"** with **"Trendy Y2K K-Pop Vibes"** (urban, cool, and highly aesthetic), targeting Gen-Z and Millennials.

- **UI Style**: Soft-Glassmorphism (frosted glass effects, background blur), deep depth perception, and bento-box grid layouts.
- **Shapes**: Smooth, heavily rounded corners (24px for cards, full-pill for buttons).
- **Themes**: Fully supported **Dark Mode** and **Light Mode**.
- **Colors**: No green for success states. Uses custom electric purple, soft neon pink, or warm orange instead.
  - **Dark Mode**: Background #0B0B0F, Card #14141B, Primary Pink #FF4FA3.
  - **Light Mode**: Background #FFF7FB, Card #FFFFFF, Primary Pink #FF5CA8.

## 🚀 Features

### Public & User Features
- **Immersive Homepage**: Edge-to-edge Hero Banner, Bento Grid promotional sections, Category cards with hover animations, and horizontal scrolling for products.
- **Product Catalog & Detail**: Supports pre-orders, various product badges (Trending, Hot, Popular), and Instagram-style image galleries.
- **Smart Shopping Cart**: Selectable checkout items (Select individually/Select All), dynamic subtotal updates.
- **Checkout Stepper**: Minimalist address, shipping, and payment selection (E-wallet, Bank Transfer, QRIS).
- **User Dashboard**: Profile management, track orders, reviews, and wishlist.
- **Newsletter**: Aesthetic subscribe block.

### Admin Dashboard
- **Analytics Overview**: Bento-style stat cards with charts (revenue, orders, products, customers).
- **Product Management**: Manage catalog, stock, pre-order ETAs, and categories.
- **Order Management**: Process shipments and verify payments.
- **Clean UI**: Borderless tables, floating sidebar, glass effect, and drag-and-drop zones for image uploads.

---

## � Authentication & Roles Management

Aplikasi ini sudah dikonfigurasi dengan sistem multi-role menggunakan database tabel yang sama (`users`):
- **User Dashboard**: Terletak di route `/dashboard`. Untuk user reguler/pembeli.
- **Admin Dashboard**: Terletak di route `/admin/dashboard`. Dilindungi oleh *Admin Middleware*.
> **Penting**: Saat melakukan proses Login, sistem akan **secara otomatis mengarahkan** pengguna ke halaman (dashboard) yang sesuai dengan isi kolom `role` pada databasenya masing-masing (`admin` atau `user`). Semua controller dan tampilan UI (Blade views) sudah dipisah ke dalam foldernya masing-masing (`resources/views/admin/` dan `resources/views/user/`).

---

## �🛠️ Requirements
- PHP ^8.2
- Composer
- Node.js & NPM
- MySQL

---

## ⚙️ Installation & Setup

Follow these steps to run the "Kpop Pocket" project locally:

### 1. Clone & Setup Dependencies
Open your terminal and make sure you are in the project folder:
\\\ash
# Install PHP dependencies
composer install

# Install Javascript/CSS dependencies
npm install
\\\

### 2. Environment Configuration
Copy the default environment file and generate a new app key:
\\\ash
cp .env.example .env
# or on Windows PowerShell: copy .env.example .env

php artisan key:generate
\\\

Make sure to configure your .env file to connect to your local MySQL database:
\\\env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=kpop_pocket
DB_USERNAME=root
DB_PASSWORD=
\\\

### 3. Database Migration & Seeding
Ensure your MySQL server (via XAMPP/Laragon/DBngin) is running. Create a database named \kpop_pocket\.
Then run the migrations to set up all tables:
\\\ash
php artisan migrate

# If you have dummy data configured, you can run:
php artisan db:seed
\\\

### 4. Build Frontend Assets
Compile the Tailwind CSS and JS assets using Vite:
\\\ash
# For development (hot-module replacement)
npm run dev

# For production (builds minified assets)
npm run build
\\\

### 5. Run the Local Server
Finally, start the Laravel built-in server:
\\\ash
php artisan serve
\\\
Visit **\http://127.0.0.1:8000\** in your browser.

---

## 📁 Database Architecture Overview
- **Users**: Handles admin & user roles, avatar, and phone.
- **Categories & Groups**: For categorizing merch and K-pop groups.
- **Products & Product Images**: Stores items, stock, pre-order status, base price, and badges.
- **Carts**: Powers the smart selective checkout feature.
- **Orders, Order Items, Shipments, Payments**: Full checkout to delivery pipeline.
- **Reviews**: Customer product feedback with admin approval.
- **Wishlists & Newsletters**: User engagement features.

---
*Built for the Modern K-Pop Community.* 🫰
