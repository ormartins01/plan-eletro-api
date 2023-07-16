<?php

use App\Http\Controllers\BrandController;
use Illuminate\Support\Facades\Route;

Route::post('/brands', [BrandController::class, 'create']);

// Route::post('/brands/{id}', [ProductController::class, 'retrieveProductId']);
