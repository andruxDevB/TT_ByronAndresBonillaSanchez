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
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->string('company', 25);
            $table->string('transport_type', 50);
            $table->boolean('active')->default(true);
            $table->unsignedBigInteger('guide_driver_profile_id')->unique();
            $table->foreign('guide_driver_profile_id')->references('id')->on('guide_driver_profiles')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drivers');
    }
};
