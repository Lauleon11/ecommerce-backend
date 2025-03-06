<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

Route::prefix('/products')->group(function () {
    Route::get('/', [ProductController::class, 'index']);

    Route::get('/create', [ProductController::class, 'create']);

    Route::get('/{name}', [ProductController::class, 'show']);
});
