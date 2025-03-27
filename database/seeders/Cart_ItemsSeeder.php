<?php

namespace Database\Seeders;

use App\Models\Cart_Items;
use Illuminate\Database\Seeder;
use App\Models\CartItem;
use App\Models\User;
use App\Models\Product;
use App\Models\Products;

class Cart_ItemsSeeder extends Seeder
{
    public function run()
    {
        // Buscar un usuario existente o crear uno si no hay
        $user = User::first() ?? User::factory()->create();

        // Buscar un producto existente o crear uno si no hay
        $product = Products::first() ?? Products::factory()->create();

        // Crear ítems en el carrito
        $carrito1 = new Cart_Items();
        $carrito1->user_id = $user->id;
        $carrito1->product_id = $product->id;
        $carrito1->quantity = 3;
        $carrito1->save();

        $carrito2 = new Cart_Items();
        $carrito2->user_id = $user->id;
        $carrito2->product_id = $product->id;
        $carrito2->quantity = 2;
        $carrito2->save();
    }
}

