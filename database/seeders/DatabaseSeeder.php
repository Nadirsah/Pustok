<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\TranslateHome;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//         User::factory(1)->create();
//
//         User::factory()->create([
//             'name' => 'Test User',
//             'email' => 'test@example.com',
//         ]);

        $this->call([
//            CategorySeeder::class,
//            ProductSeeder::class,
//            ProductImageSeeder::class,
//              SettingSeeder::class,
//              BrandSeeder::class,
        TranslateHomeSeeder::class,
        ]);


    }
}
