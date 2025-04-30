<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/Tentang', [PageController::class, 'about'])->name('about');
Route::get('/Layanan', [PageController::class, 'service'])->name('service');
Route::get('/Kontak', [PageController::class, 'contact'])->name('contact');
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');

Route::get('/Produk', [ProductController::class, 'index'])->name('product');
Route::get('/Galeri', [GalleryController::class, 'index'])->name('gallery');
Route::get('/Artikel', [BlogController::class, 'index'])->name('artikel');

Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);




// Route::get('/', function () {
//     return view('home');
// });
