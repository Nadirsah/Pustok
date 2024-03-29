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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('tags');
            $table->json('title');
            $table->json('slug');
            $table->integer('tax');
            $table->integer('price');
            $table->integer('old_price');
            $table->string('brand');
            $table->string('model');
            $table->json('about');
            $table->json('description');
            $table->boolean('activ');
            $table->boolean('offer');
            $table->unsignedBigInteger('catgory_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
