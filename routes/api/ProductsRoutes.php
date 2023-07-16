<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::post('/products', [ProductController::class, 'create']);

// Route::post('/products/{id}', [ProductController::class, 'retrieveProductId']);
