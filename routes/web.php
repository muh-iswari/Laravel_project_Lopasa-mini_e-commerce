<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });

// admin
// Route::get('/admin', function () {
//     return view('admin');
// })->name('admin');
// Admin
// Route::get('login', [SessionController::class, 'index'])->name('login.index');
// Route::post('/sesi/login', [SessionController::class, 'login'])->name('login.post');
// Route::get('/admin', [AdminController::class, 'adminDasboard'])->name('admin.index');

Route::get('/sesi', [SessionController::class, 'index'])->name('login.index');

Route::post('/sesi/login', [SessionController::class, 'login'])->name('login.post');
Route::get('/sesi/logout', [SessionController::class, 'logout'])->name('logout.index');

Route::get('/sesi/register', [SessionController::class, 'register'])->name('register.index');
Route::post('/sesi/create', [SessionController::class, 'create'])->name('crate.post');

Route::get('/admin', [AdminController::class, 'adminDashboard'])->name('admin.index');

// Route lain
Route::get('/', [ProductController::class, 'showProducts'])->name('products.index');
Route::get('/', [ProductController::class, 'showAllProducts'])->name('allProducts.index');
Route::get('/kategori/{kategori?}', [ProductController::class, 'showProductsByCategory'])->name('showProductsByCategory');
Route::get('/search', [ProductController::class, 'search'])->name('search');


Route::get('/product/{id}', [ProductController::class, 'showProductDetail'])->name('product.detail');



Route::get('/profile', [UserProfileController::class, 'show'])->name('profile.show');
Route::put('/profile/update', [UserProfileController::class, 'update'])->name('profile.update');

// Rute untuk login


// Route::prefix('admin/products')->name('admin.products.')->group(function () {
//     Route::get('/', [AdminProductController::class, 'index'])->name('index');
//     Route::get('/create', [AdminProductController::class, 'create'])->name('create');
//     Route::post('/store', [AdminProductController::class, 'store'])->name('store');
//     Route::get('/edit/{id}', [AdminProductController::class, 'edit'])->name('edit');
//     Route::put('/update/{id}', [AdminProductController::class, 'update'])->name('update');
//     Route::delete('/delete/{id}', [AdminProductController::class, 'destroy'])->name('destroy');
// });

// // CRUD Toko
// Route::prefix('admin/stores')->name('admin.stores.')->group(function () {
//     Route::get('/', [AdminStoreController::class, 'index'])->name('index');
//     Route::get('/create', [AdminStoreController::class, 'create'])->name('create');
//     Route::post('/store', [AdminStoreController::class, 'store'])->name('store');
//     Route::get('/edit/{id}', [AdminStoreController::class, 'edit'])->name('edit');
//     Route::put('/update/{id}', [AdminStoreController::class, 'update'])->name('update');
//     Route::delete('/delete/{id}', [AdminStoreController::class, 'destroy'])->name('destroy');
// });

// // CRUD Pengguna
// Route::prefix('admin/users')->name('admin.users.')->group(function () {
//     Route::get('/', [AdminUserController::class, 'index'])->name('index');
//     Route::get('/create', [AdminUserController::class, 'create'])->name('create');
//     Route::post('/store', [AdminUserController::class, 'store'])->name('store');
//     Route::get('/edit/{id}', [AdminUserController::class, 'edit'])->name('edit');
//     Route::put('/update/{id}', [AdminUserController::class, 'update'])->name('update');
//     Route::delete('/delete/{id}', [AdminUserController::class, 'destroy'])->name('destroy');
// });

// // Kelola Pesanan
// Route::prefix('admin/orders')->name('admin.orders.')->group(function () {
//     Route::get('/', [AdminOrderController::class, 'index'])->name('index');
//     Route::get('/details/{id}', [AdminOrderController::class, 'show'])->name('show');
//     Route::put('/update/{id}', [AdminOrderController::class, 'update'])->name('update');
// });

// Route::get('admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

// Route::get('/admin', function () {
//     return view('admin');
// })->name('admin');

// Route::get('/admin', [ProductController::class, 'showProducts']);