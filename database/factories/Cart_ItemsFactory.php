<?php

namespace Database\Factories;

use App\Models\Cart_Items;
use App\Models\Products;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cart_Items>
 */
class Cart_ItemsFactory extends Factory
{

    protected $model = Cart_Items::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::inRandomOrder()->value('id') ?? User::factory()->create()->id,
            'product_id' => Products::inRandomOrder()->value('id') ?? Products::factory()->create()->id,
            'quantity' => $this->faker->numberBetween(1, 10),
        ];
    }
}
