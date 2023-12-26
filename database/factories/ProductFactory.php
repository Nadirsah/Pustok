<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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

            $title = fake()->title;
        return [
            'tags'=>fake()->company,
            'title' => json_encode([
                'az' => $title,
                'en' => $title,
                'ru' => $title,
            ]),
            'slug' => json_encode([
                'az' => Str::slug($title, '-'),
                'en' => Str::slug($title, '-'),
                'ru' => Str::slug($title, '-'),
            ]),
            'tax' => fake()->numberBetween(10, 50),
            'price' => fake()->numberBetween(10, 50),
            'old_price' => fake()->numberBetween(10, 50),
            'brand'=>fake()->name,
            'model'=>fake()->name,
            'points' => fake()->numberBetween(10, 50),
            'activity' => fake()->boolean(),
            'about' => json_encode([
                'az' => json_encode(fake()->sentence(20)),
                'en' => json_encode(fake()->sentence(20)),
                'ru' => json_encode(fake()->sentence(20)),
            ]),
            'description' => json_encode([
                'az' => json_encode(fake()->sentence(50)),
                'en' => json_encode(fake()->sentence(50)),
                'ru' => json_encode(fake()->sentence(50)),
            ]),
            'catgory_id' => fake()->numberBetween(10, 20),
        ];
    }
}
