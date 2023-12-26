<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
//
    public function definition(): array
    {
        $title=fake()->name;
        return [
            'name' => json_encode([
                'az'=>$title,
                'en'=>$title,
                'ru'=>$title,
            ]),
            'slug' => json_encode([
                'az'=>Str::slug($title,'-'),
                'en'=>Str::slug($title,'-'),
                'ru'=>Str::slug($title,'-'),
            ]),
            'parent_id' => fake()->numberBetween(0, 9),
            'status' =>fake()->boolean(),
        ];
    }
}


