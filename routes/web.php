<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/logout',[AuthController::class, 'logout'])->name('logout');
Route::middleware('guest')->controller(AuthController::class)->group( function () {

    //authentification
    
    Route::get('/register',[AuthController::class, 'showregister'])->name('show_register');
    
    Route::get('/login',[AuthController::class, 'showlogin'])->name('show_login');
    
    
    // responsable for post request of the form
    Route::post('/register',[AuthController::class, 'register'])->name('register');
    
    Route::post('/login',[AuthController::class, 'login'])->name('login');
    
   
    

});

Route::get('/products', [ProductController::class, 'index']);
Route::post('/products', [ProductController::class, 'store']);
Route::get('/products/{id}', [ProductController::class, 'show']);
Route::put('/products/{id}', [ProductController::class, 'update']);
Route::delete('/products/{id}', [ProductController::class, 'destroy']);


















