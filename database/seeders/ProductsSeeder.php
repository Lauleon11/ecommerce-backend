<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Products;
use App\Models\Category;

class ProductsSeeder extends Seeder
{
    public function run()
    {
        // Obtener una categoría existente o crear una nueva
        $categoria = Category::first() ?? Category::factory()->create();

        $producto1 = new Products();
        $producto1->name = 'Nevera';
        $producto1->description = "Refrigera bien";
        $producto1->price = 1500000.00;
        $producto1->category_id = $categoria->id; // Agregar categoría
        $producto1->save();

        $producto2 = new Products();
        $producto2->name = 'Jean';
        $producto2->description = "Buena tela";
        $producto2->price = 80000.00;
        $producto2->category_id = $categoria->id; // Agregar categoría
        $producto2->save();
    }
}

