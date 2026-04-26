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