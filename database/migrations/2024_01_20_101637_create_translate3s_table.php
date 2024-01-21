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
        Schema::create('translate3s', function (Blueprint $table) {
            $table->id();
            $table->string('city');
            $table->string('state');
            $table->string('zip_code');
            $table->string('condition');
            $table->string('place');
            $table->string('order');
            $table->string('thank');
            $table->string('you');
            $table->string('message_for_order');
            $table->string('number');
            $table->string('total');
            $table->string('details');
            $table->string('description');
            $table->string('dashboard');
            $table->string('account');
            $table->string('change');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('translate3s');
    }
};
