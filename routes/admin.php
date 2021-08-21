<?php

use Illuminate\Support\Facades\Route;



Route::get('/', App\Http\Controllers\Admin\HomeController::class)->name('admin.home');

Route::resource('/product', App\Http\Controllers\Admin\ProductController::class);

Route::resource('/category', App\Http\Controllers\Admin\CategoryController::class);

Route::resource('/discount', App\Http\Controllers\Admin\DiscountController::class);