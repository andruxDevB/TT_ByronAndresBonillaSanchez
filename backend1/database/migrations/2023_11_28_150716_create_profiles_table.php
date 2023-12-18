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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['Mr', 'Ms', 'Mrs', 'Miss'])->default('Mr');
            $table->string('first_name', 30);
            $table->string('last_name', 30);
            $table->string('phone', 15);
            $table->date('dob');
            $table->string('country', 30);
            $table->string('id_card_number', 20)->unique();
            $table->string('nationality', 30);
            $table->unsignedBigInteger('user_id')->unique();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
