<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('translate_homes', function (Blueprint $table) {
            $table->id();
            $table->json('placeholder');
            $table->json('search_button');
            $table->json('login');
            $table->json('veya');
            $table->json('register');
            $table->json('shopping_cart');
            $table->json('browse_category');
            $table->json('free_support');
            $table->json('view_cart');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('translate_homes');
    }
};
