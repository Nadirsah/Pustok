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
        Schema::create('translate_cards', function (Blueprint $table) {
            $table->id();
            $table->json('shopping_cart');
            $table->json('image');
            $table->json('product');
            $table->json('price');
            $table->json('total');
            $table->json('cart_summary');
            $table->json('sub_total');
            $table->json('shipping_cost');
            $table->json('grand_total');
            $table->json('checkout');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('translate_cards');
    }
};
