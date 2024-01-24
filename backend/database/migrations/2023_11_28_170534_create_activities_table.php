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
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->date('date');
            $table->time('time_pickup')->nullable();
            $table->string('day')->nullable();
            $table->unsignedBigInteger('breakfast_id')->nullable();
            $table->foreign('breakfast_id')->references('id')->on('restaurants')->onDelete('cascade');
            $table->unsignedBigInteger('lunch_id')->nullable();
            $table->foreign('lunch_id')->references('id')->on('restaurants')->onDelete('cascade');
            $table->unsignedBigInteger('dinner_id')->nullable();
            $table->foreign('dinner_id')->references('id')->on('restaurants')->onDelete('cascade');
            $table->text('remarks')->nullable();
            $table->unsignedBigInteger('program_id')->nullable();
            $table->foreign('program_id')->references('id')->on('programs')->onDelete('cascade');
            $table->unsignedBigInteger('guide_id')->nullable();
            $table->foreign('guide_id')->references('id')->on('guides')->onDelete('cascade');
            $table->unsignedBigInteger('driver_id')->nullable();
            $table->foreign('driver_id')->references('id')->on('drivers')->onDelete('cascade');
            $table->unsignedBigInteger('hotel_id')->nullable();
            $table->foreign('hotel_id')->references('id')->on('hotels')->onDelete('cascade');
            $table->unsignedBigInteger('cruise_id')->nullable();
            $table->foreign('cruise_id')->references('id')->on('cruises')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};
