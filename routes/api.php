use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

<?php


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

