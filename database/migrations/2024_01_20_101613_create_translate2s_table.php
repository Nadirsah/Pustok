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
        Schema::create('translate2s', function (Blueprint $table) {
            $table->id();
            $table->string('password');
            $table->string('returning');
            $table->string('image');
            $table->string('product');
            $table->string('price');
            $table->string('total');
            $table->string('quantity');
            $table->string('cart_summary');
            $table->string('sub');
            $table->string('grand');
            $table->string('checkout');
            $table->string('billing');
            $table->string('first');
            $table->string('last');
            $table->string('company');
            $table->string('country');
            $table->string('no');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('translate2s');
    }
};
