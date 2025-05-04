<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\View\Components\Section\Gallery;

Route::controller(PageController::class)
    ->group(function () {
        Route::view('/', 'home')->name('home');
        Route::view('/tentang', 'about')->name('about');
        Route::view('/layanan', 'service')->name('service');
        Route::get('/kontak', 'contact')->name('contact');
        Route::get('/dashboard', 'dashboard')->name('dashboard');
        Route::get('/detail', 'detail')->name('detail');
    });
// Route::view('/', [PageController::class, 'home'])->name('home');
// Route::view('/tentang', [PageController::class, 'about'])->name('about');
Route::controller(ProductController::class)
    ->group(function () {
        Route::get('/produk', 'index')->name('product');

    });
Route::controller(GalleryController::class)
    ->group(function () {
        Route::get('/galeri', 'index')->name('gallery');

    });
Route::controller(BlogController::class)
    ->group(function () {
        Route::get('/artikel', 'index')->name('artikel');
    });

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
// Route::get('/produk', [ProductController::class, 'index'])->name('product');
// Route::get('/galeri', [GalleryController::class, 'index'])->name('gallery');
// Route::get('/artikel', [BlogController::class, 'index'])->name('artikel');

// Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');

// Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [LoginController::class, 'login']);
// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
// Route::post('/register', [RegisterController::class, 'register']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [ContactController::class, 'index'])->name('dashboard');
    // ... route lainnya
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



// Route::get('/', function () {
//     return view('home');
// });
