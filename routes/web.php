<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\Admin\PostController;

use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;


// Halaman utama dan publik
Route::controller(PageController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::view('/tentang', 'about')->name('about');
    Route::view('/layanan', 'service')->name('service');
    Route::get('/kontak', 'contact')->name('contact');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::get('/detail', 'detail')->name('detail');
});

Route::get('/tentang/{slug}', [PageController::class, 'aboutDetail'])->name('components.section.detail');


Route::get('/produk', [ProductController::class, 'index'])->name('product');
Route::get('/galeri', [GalleryController::class, 'index'])->name('gallery');
Route::get('/artikel', [BlogController::class, 'index'])->name('artikel');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{post:slug}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/produk', [ProductController::class, 'index'])->name('product');
Route::get('/produk/{product}', [ProductController::class, 'show'])->name('products.show');




Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('posts', AdminPostController::class);
    Route::resource('categories', AdminCategoryController::class);
    Route::resource('products', AdminProductController::class);

});


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::prefix('dashboard')->name('dashboard.')->group(function () {
        Route::get('/messages', [ContactController::class, 'index'])->name('messages');
        Route::patch('/messages/{message}/mark-as-read', [ContactController::class, 'markAsRead'])->name('messages.markAsRead');
    });

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('posts', PostController::class);
});
// // routes/web.php
// Route::get('/checkout/{product}', [CheckoutController::class, 'showForm']);
// Route::post('/checkout/{product}', [CheckoutController::class, 'process']);
// Route::post('/midtrans/callback', [CheckoutController::class, 'midtransCallback']); // untuk notifikasi Midtrans


require __DIR__.'/auth.php';
