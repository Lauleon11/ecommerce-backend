<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

Route::get('/products', [ProductController::class, 'index']);

Route::get('/productos/create', [ProductController::class, 'create']);

Route::get('/productos/{name}', [ProductController::class, 'show']);
