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
        Schema::create('translate_home_footers', function (Blueprint $table) {
            $table->id();
            $table->json('address');
            $table->json('phone');
            $table->json('email');
            $table->json('information');
            $table->json('extras');
            $table->json('newsletter_subscribe');
            $table->json('enter_your_email');
            $table->json('subscribe');
            $table->json('stay_connected');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('translate_home_footers');
    }
};
