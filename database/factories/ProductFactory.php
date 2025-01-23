<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
use App\Models\Color;
use App\Models\Partwear;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->word,
            'product_code' => strtoupper($this->faker->unique()->lexify('????-????')),
            'category_id' => Category::factory(),
            'color_id' => Color::factory(),
            'partwear_id' => Partwear::factory(),
            'quantity' => $this->faker->numberBetween(10, 500),
        ];
    }
}
