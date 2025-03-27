<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Cart_Items;
use App\Models\Category;
use App\Models\Products;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategorySeeder::class,
            ProductsSeeder::class,
            Cart_ItemsSeeder::class,
        ]);

        Category::factory(100)->create();
        Products::factory(100)->create();
        Cart_Items::factory(100)->create();
        
    }
}