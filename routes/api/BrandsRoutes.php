<?php

use App\Http\Controllers\BrandController;
use Illuminate\Support\Facades\Route;

Route::post('/brands', [BrandController::class, 'create']);
Route::get('/brands', [BrandController::class, 'retrieveAll']);
Route::get('/brands/{id}', [BrandController::class, 'retrieveBrand']);
Route::put('/brands/{id}', [BrandController::class, 'updateBrand']);
Route::delete('/brands/{id}', [BrandController::class, 'deleteBrand']);
