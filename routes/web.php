<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product',[ProductController::class,'dashbord'])->name('product.dashbord');

Route::get('product/create',[ProductController::class,'create'])->name('product.create');

Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');



