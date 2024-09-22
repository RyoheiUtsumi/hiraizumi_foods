<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\StaticPagesController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Product resource routes
Route::resource('products', ProductController::class);

// Customer resource routes
Route::resource('customers', CustomerController::class);

// Review resource routes
Route::resource('reviews', ReviewController::class);

// Admin resource routes
Route::resource('admins', AdminController::class);

// Seller resource routes
Route::resource('sellers', SellerController::class);

// Static pages routes (for example, contact page, shipping info)
Route::get('contact', [StaticPagesController::class, 'contact'])->name('contact');
Route::get('shipping', [StaticPagesController::class, 'shipping'])->name('shipping');
Route::get('/home', [ProductController::class, 'home'])->name('home');

require __DIR__.'/auth.php';
