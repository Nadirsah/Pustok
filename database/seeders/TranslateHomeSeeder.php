<?php

namespace Database\Seeders;

use App\Models\TranslateHome;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TranslateHomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       TranslateHome::factory(1)->create();
    }
}
//{"az":"axtar","en":"search","ru":"poisk"}
