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
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->string('country',50);
            $table->string('city',50);
            $table->enum('category',[5,4,3,2,1]);
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
        Schema::dropIfExists('hotels');
    }
};
