<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

Route::view('/', [PageController::class, 'home'])->name('home');
Route::view('/tentang', [PageController::class, 'about'])->name('about');
Route::view('/layanan', [PageController::class, 'service'])->name('service');
Route::get('/kontak', [PageController::class, 'contact'])->name('contact');
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');

Route::get('/produk', [ProductController::class, 'index'])->name('product');
Route::get('/galeri', [GalleryController::class, 'index'])->name('gallery');
Route::get('/artikel', [BlogController::class, 'index'])->name('artikel');

Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);




// Route::get('/', function () {
//     return view('home');
// });
