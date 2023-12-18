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
        Schema::create('cabins', function (Blueprint $table) {
            $table->id();
            $table->string('cabin_name',30);
            $table->enum('deck',['Main Deck', 'Upper Deck', 'Lower Deck']);
            $table->boolean('active')->default(true);
            $table->unsignedBigInteger('cruise_id');
            $table->foreign('cruise_id')->references('id')->on('cruises');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cabins');
    }
};
