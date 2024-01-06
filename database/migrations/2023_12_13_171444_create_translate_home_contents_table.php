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
        Schema::create('translate_home_contents', function (Blueprint $table) {
            $table->id();
            $table->json('best_seller');
            $table->json('feature_products');
            $table->json('new_arrivals');
            $table->json('most_view_products');
            $table->json('special_offer');
            $table->json('arts_photography');
            $table->json('childrens_books');
            $table->json('biographies');
            $table->json('days');
            $table->json('hours');
            $table->json('mins');
            $table->json('secs');
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
