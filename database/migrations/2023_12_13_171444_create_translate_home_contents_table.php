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
        Schema::create('translate_homecontents', function (Blueprint $table) {
            $table->id();
            $table->json('Best seller');
            $table->json('Feature products');
            $table->json('New arrivals');
            $table->json('Most view products');
            $table->json('Special offer');
            $table->json('Arts & photography');
            $table->json('Childrens books');
            $table->json('Biographies');
            $table->json('Days');
            $table->json('Hours');
            $table->json('Mins');
            $table->json('Secs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('translate_home_contents');
    }
};
