<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Products;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{

    protected $model = Products::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->sentence(),
            'description' => fake()->paragraph(),
            'price' => fake()->randomFloat(2,1000,500000),
            'category_id' => Category::inRandomOrder()->value('id') ?? Category::factory()->create()->id
        ];
    }
}
