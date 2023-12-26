<?php

namespace Database\Factories;

use App\Models\TranslateHome;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<TranslateHome>
 */
class TranslateHomeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'placeholder' => json_encode([
                'az' => 'butun magazani burada axtarin',
                'en' => 'search entire store here',
                'ru' => 'rus'
            ]),
            'search_button' => json_encode([
                'az' => 'axtar',
                'en' => 'search',
                'ru' => 'rus'
            ]),
            'login' => json_encode([
                'az' => 'daxil ol',
                'en' => 'login',
                'ru' => 'rus'
            ]),
            'or' => json_encode([
                'az' => 've ya',
                'en' => 'or',
                'ru' => 'rus'
            ]),
            'register' => json_encode([
                'az' => 'qeydiyyatdan keçin',
                'en' => 'register',
                'ru' => 'rus'
            ]),
            'shopping_cart' => json_encode([
                'az' => 'Alış-veriş sebeti',
                'en' => 'shopping cart',
                'ru' => 'rus'
            ]),
            'browse_category' => json_encode([
                'az' => 'Kateqoriyaya baxın',
                'en' => 'Browse category',
                'ru' => 'rus '
            ]),
            'free_support' => json_encode([
                'az' => 'Pulsuz dəstək',
                'en' => 'Free support',
                'ru' => 'rus '
            ]),
            'view_cart' => json_encode([
                'az' => 'Səbətə baxın',
                'en' => 'View cart',
                'ru' => 'rus '
            ])
         ];

    }
}

