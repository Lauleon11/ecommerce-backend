<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        echo "listado de todos los productos";
    }

    public function create()
    {
        echo "formulario para crear un producto";
    }

    public function show($name)
    {
        echo "producto: $name";
    }
}
