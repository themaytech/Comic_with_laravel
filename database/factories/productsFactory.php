<?php

namespace Database\Factories;

use App\Models\categories;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductsFactory extends Factory
{
    public function definition()
    {
        $category = categories::inRandomOrder()->first();

        if (!$category) {
            $category = categories::factory()->create();
        }
        
        return [
            'product_name' => $this->faker->name(),
            'category_id' => $category->category_id,
            'unit' => $this->faker->numberBetween($min = 1, $max = 4),
            'price' => $this->faker->numberBetween($min = 1, $max = 8),
        ];
    }
}
