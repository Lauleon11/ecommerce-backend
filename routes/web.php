<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', function () {
    echo "listado de todos los productos";
});

Route::get('/productos/create', function () {
    echo "formulario para crear un producto";
});

Route::get('/productos/{name}', function ($name) {
    echo "producto: $name";
});

Route::get('/productos/{name}/{categoty}', function ($name,$category) {
    echo "producto: $name, y tiene una categoria $category";
});
