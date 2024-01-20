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
        Schema::create('translate1s', function (Blueprint $table) {
            $table->id();
            $table->string('enter_your_email');
            $table->string('subscribe');
            $table->string('stay_connected');
            $table->string('us');
            $table->string('about');
            $table->string('best_seller');
            $table->string('special');
            $table->string('offer');
            $table->string('days');
            $table->string('hours');
            $table->string('mins');
            $table->string('secs');
            $table->string('new');
            $table->string('customer');
            $table->string('i_am_a');
            $table->string('full');
            $table->string('name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('translate1s');
    }
};
