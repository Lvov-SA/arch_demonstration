<?php

use App\Http\Controllers\FilesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SubProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::apiResource('products', ProductController::class);
Route::apiResource('products.sub-products', SubProductController::class);
Route::apiResource('files', FilesController::class);
