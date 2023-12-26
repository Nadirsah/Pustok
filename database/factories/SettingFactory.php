<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Setting>
 */
class SettingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "logo" => fake()->imageUrl,
            "facebook" => fake()->url,
            "facebook_icon" => fake()->imageUrl,
            "twitter" => fake()->url,
            "twitter_icon" => fake()->imageUrl,
            "phone_1" => fake()->phoneNumber,
            "phone_2" => fake()->phoneNumber,
            "about" => json_encode([
                'az'=>fake()->sentence(),
                'en'=>fake()->sentence(),
                'ru'=>fake()->sentence(),
            ]),
            "location" => json_encode([
                'az' => "Aşıq Molla Cümə 84, Bakı, Azerbaycan az",
                'en' => "Aşıq Molla Cümə 84, Bakı, Azerbaycan en",
                'ru' => "Aşıq Molla Cümə 84, Bakı, Azerbaycan ru"
            ]),
            "adress" =>fake()->address,
            "email" => fake()->email,
            "activ" => fake()->boolean(),
        ];
    }
}
