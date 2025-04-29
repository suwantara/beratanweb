<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\GalleryController;


Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/Tentang', [PageController::class, 'about'])->name('about');
Route::get('/Layanan', [PageController::class, 'service'])->name('service');
Route::get('/Kontak', [PageController::class, 'contact'])->name('contact');

Route::get('/Produk', [ProductController::class, 'index'])->name('product');
Route::get('/Galeri', [GalleryController::class, 'index'])->name('gallery');
Route::get('/Artikel', [BlogController::class, 'index'])->name('artikel');







// Route::get('/', function () {
//     return view('home');
// });
