<?php

use App\Http\Controllers\FilesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SubProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function(){echo 'its fake';})->name('login');
