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
        Schema::create('cruises', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->enum('category',['Luxury','First Class', 'Tourist', 'Diving']);
            $table->string('sales_executive',50);
            $table->string('email');
            $table->string('phone',15);
            $table->boolean('active')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cruises');
    }
};
