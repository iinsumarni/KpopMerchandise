<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// 🏠 HOME (halaman utama)
Route::get('/', function () {
    return view('welcome'); // ganti kalau kamu punya home sendiri
})->name('home');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// 🔒 PROFILE (harus login)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// 🔐 AUTH (login, register, dll)
require __DIR__.'/auth.php';

//cart
use App\Http\Controllers\CartController;

Route::middleware('auth')->group(function () {
    Route::get('/cart', [CartController::class, 'index']);
    Route::get('/cart/add/{id}', [CartController::class, 'add']);

// quantity
    Route::get('/cart/increase/{id}', [CartController::class, 'increase']);
    Route::get('/cart/decrease/{id}', [CartController::class, 'decrease']);
    Route::get('/cart/remove/{id}', [CartController::class, 'remove']);
    Route::get('/cart/checkout', [CartController::class, 'checkout']);
});

