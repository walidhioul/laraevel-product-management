<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('product/create',[ProductController::class,'create'])->name('product.create');

Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
//not working

Route::get('/product', [ProductController::class, 'index'])->name('product.index');

Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');

Route::put('/product/{id}', [ProductController::class, 'update'])->name('product.update');



//authentification

Route::get('/register',[AuthController::class, 'showregister'])->name('show_register');

Route::get('/login',[AuthController::class, 'showlogin'])->name('show_login');










