<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::post('/products', [ProductController::class, 'create']);
Route::get('/products', [ProductController::class, 'retrieveAll']);
Route::get('/products/{id}', [ProductController::class, 'retrieveProduct']);

// Route::post('/products/{id}', [ProductController::class, 'retrieveProductId']);
