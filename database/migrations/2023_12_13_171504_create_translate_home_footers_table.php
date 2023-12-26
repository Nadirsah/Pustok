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
            $table->json('Address');
            $table->json('Phone');
            $table->json('Email');
            $table->json('INFORMATION');
            $table->json('EXTRAS');
            $table->json('Newsletter subscribe');
            $table->json('Enter your email');
            $table->json('Subscribe');
            $table->json('Stay connected');
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
