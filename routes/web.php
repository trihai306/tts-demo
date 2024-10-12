<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [\App\Http\Controllers\HomeController::class, 'about'])->name('about');

Route::get('login', [\App\Http\Controllers\AuthController::class,'login'])->name('login');



Route::get('/shop-list', [ProductController::class, 'shop'])->name('shop');
Route::get('/featured-products', [ProductController::class, 'getFeaturedProducts'])->name('getFeaturedProducts');
Route::get('/size-product', [ProductController::class, 'showSizesWithProductCount'])->name('size-product');
