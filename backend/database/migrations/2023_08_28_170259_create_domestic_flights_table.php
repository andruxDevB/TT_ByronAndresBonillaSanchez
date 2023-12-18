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
        Schema::create('domestic_flights', function (Blueprint $table) {
            $table->id();
            $table->string('reserve_code', 8);
            $table->unsignedBigInteger('program_id')->nullable();
            $table->foreign('program_id')->references('id')->on('programs')->onDelete('cascade');
            $table->unsignedBigInteger('information_flight_id')->unique()->nullable();
            $table->foreign('information_flight_id')->references('id')->on('information_flights')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('domestic_flights');
    }
};
