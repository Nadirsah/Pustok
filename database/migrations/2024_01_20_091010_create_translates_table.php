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
        Schema::create('translates', function (Blueprint $table) {
            $table->id();
            $table->string('placeholder');
            $table->string('search_button');
            $table->string('name');
            $table->string('login');
            $table->string('or');
            $table->string('register');
            $table->string('shopping_cart');
            $table->string('browse_category');
            $table->string('free_support');
            $table->string('home');
            $table->string('shop');
            $table->string('contact');
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->string('information');
            $table->string('extras');
            $table->string('newsletter_subscribe');
           
           
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('translates');
    }
};
