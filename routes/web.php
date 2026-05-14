<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// 🏠 HOME (halaman utama)
Route::get('/', function () {
    return view('welcome');
})->name('home');

// 🔒 PROFILE (harus login)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// 👑 ADMIN
Route::middleware('guest')->group(function () {
    Route::get('/admin/login', function () {
        return view('admin.login');
    })->name('admin.login');
    Route::post('/admin/login', [\App\Http\Controllers\AdminAuthController::class, 'login'])->name('admin.login.submit');
});

Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', function () { return view('admin.dashboard'); })->name('admin.dashboard');
    Route::get('/products', function () { return view('admin.products'); })->name('admin.products');
    Route::get('/orders', function () { return view('admin.orders'); })->name('admin.orders');
    Route::get('/customers', function () { return view('admin.customers'); })->name('admin.customers');
    Route::get('/analytics', function () { return view('admin.analytics'); })->name('admin.analytics');
    Route::get('/inventory', function () { return view('admin.inventory'); })->name('admin.inventory');
    Route::get('/payments', function () { return view('admin.payments'); })->name('admin.payments');
    Route::get('/banners', function () { return view('admin.banners'); })->name('admin.banners');
    Route::get('/settings', function () { return view('admin.settings'); })->name('admin.settings');
    Route::post('/logout', [\App\Http\Controllers\AdminAuthController::class, 'logout'])->name('admin.logout');
});

// API ADMIN CREATION (Exclusive Postman Route)
Route::post('/api/create-exclusive-admin', function (\Illuminate\Http\Request $request) {
    if ($request->header('X-Admin-Secret') !== 'KPocket_Admin_2026_X9vLq72') {
        return response()->json(['error' => 'Unauthorized. Invalid secret key.'], 403);
    }

    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8',
    ]);

    $admin = \App\Models\User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => \Illuminate\Support\Facades\Hash::make($request->password),
        'role' => 'admin',
    ]);

    return response()->json(['message' => 'Admin successfully created', 'admin' => $admin], 201);
});

// 🔐 AUTH (login, register, dll)
require __DIR__.'/auth.php';

//cart
use App\Http\Controllers\CartController;

Route::middleware('auth')->group(function () {

    // products
    Route::view('/products', 'products')->name('products');

    // cart
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');

    // add to cart
    Route::get('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');

    // quantity
    Route::get('/cart/increase/{id}', [CartController::class, 'increase'])->name('cart.increase');

    Route::get('/cart/decrease/{id}', [CartController::class, 'decrease'])->name('cart.decrease');

    // remove
    Route::get('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');

    // checkout
    Route::get('/cart/checkout', [CartController::class, 'checkout'])->name('cart.checkout');
    
});

