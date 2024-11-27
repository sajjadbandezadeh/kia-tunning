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
        Schema::create('tunned_cars', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("cars_id");
            $table->foreign("cars_id")->references('id')->on('cars')->onDelete('cascade');
            $table->unsignedBigInteger("car_parts_id");
            $table->foreign("car_parts_id")->references('id')->on('car_types')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tunned_cars');
    }
};
