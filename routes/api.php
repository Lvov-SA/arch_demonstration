<?php

use App\Http\Controllers\FilesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SubProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//Route::group(['middleware' => ['auth:sanctum']], static function () {
    Route::apiResource('products', ProductController::class);
    Route::apiResource('products.sub-products', SubProductController::class);
    Route::apiResource('files', FilesController::class);
//});
