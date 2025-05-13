<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;

use App\View\Components\Section\Gallery;
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


require __DIR__.'/auth.php';

// Route::get('/produk', [ProductController::class, 'index'])->name('product');
// Route::get('/galeri', [GalleryController::class, 'index'])->name('gallery');
// Route::get('/artikel', [BlogController::class, 'index'])->name('artikel');

// Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');

// Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [LoginController::class, 'login']);
// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
// Route::post('/register', [RegisterController::class, 'register']);




// Route::middleware(['auth'])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');

//     Route::prefix('dashboard')->name('dashboard.')->group(function () {
//         Route::get('/messages', [ContactController::class, 'index'])->name('messages');
//         Route::patch('/messages/{message}/mark-as-read', [ContactController::class, 'markAsRead'])->name('messages.markAsRead');
//     });
// });

// Route::middleware(['auth'])->group(function () {
//     Route::resource('admin/posts', AdminPostController::class);
//     Route::resource('admin/categories', AdminCategoryController::class);
// });

// Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
//     Route::resource('posts', AdminPostController::class);
//     Route::resource('categories', AdminCategoryController::class);
// });

// Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
//     Route::resource('posts', PostController::class);
// });

// Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
//     Route::resource('categories', CategoryController::class);
// });

// Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
// Route::get('/blog/{post:slug}', [BlogController::class, 'show'])->name('blog.show');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//     Route::patch('/messages/{message}/mark-as-read', [ContactController::class, 'markAsRead'])->name('messages.markAsRead');
// });

// require __DIR__.'/auth.php';

// Route::prefix('admin')->name('admin.')->group(function () {
//     Route::resource('categories', CategoryController::class);
//     Route::resource('products', ProductController::class);
// });

// // Tambahkan route untuk admin products
// Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
//     Route::resource('products', AdminProductController::class);
// });

// Route::middleware(['auth'])->prefix('admin')->name('products.')->group(function () {
//     Route::resource('products', AdminProductController::class);
// });



// Route::get('/', function () {
//     return view('home');
// });
