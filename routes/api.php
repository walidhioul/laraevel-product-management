<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Products API Routes
Route::apiResource('products', ProductController::class);


// API Routes for Products
//Route::get('/products', [ProductController::class, 'index']);
//Route::post('/products', [ProductController::class, 'store']);
//Route::get('/products/{id}', [ProductController::class, 'show']);
//Route::put('/products/{id}', [ProductController::class, 'update']);
//Route::delete('/products/{id}', [ProductController::class, 'destroy']);


