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
        Schema::create('information_flights', function (Blueprint $table) {
            $table->id();
            $table->string('route', 30);
            $table->date('date_flight');
            $table->string('day', 10);
            $table->string('airline', 25);
            $table->string('flight_number', 7);
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->integer('add_day')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('information_flights');
    }
};
