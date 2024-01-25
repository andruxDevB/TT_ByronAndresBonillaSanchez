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
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('num_pax');
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('tour_days');
            $table->year('tour_year', 4);
            $table->string('file_number', 10);
            $table->string('country_tours', 50);
            $table->string('sales_executive', 25);
            $table->string('type_tour');
            $table->text('general_notes');
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programs');
    }
};
