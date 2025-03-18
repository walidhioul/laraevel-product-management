<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/logout',[AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->controller(ProductController::class)->group( function () {

    Route::get('product/create',[ProductController::class,'create'])->name('product.create');
    
    Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
    
    Route::get('/product', [ProductController::class, 'index'])->name('product.index');
    
    Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
    
    Route::put('/product/{id}', [ProductController::class, 'update'])->name('product.update');

});


Route::middleware('guest')->controller(AuthController::class)->group( function () {

    //authentification
    
    Route::get('/register',[AuthController::class, 'showregister'])->name('show_register');
    
    Route::get('/login',[AuthController::class, 'showlogin'])->name('show_login');
    
    
    // responsable for post request of the form
    Route::post('/register',[AuthController::class, 'register'])->name('register');
    
    Route::post('/login',[AuthController::class, 'login'])->name('login');
    
   
    

});


















