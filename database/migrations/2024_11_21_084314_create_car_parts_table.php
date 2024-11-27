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
        Schema::create('car_parts', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->unsignedBigInteger("car_types_id");
            $table->foreign("car_types_id")->references('id')->on('car_types')->onDelete('cascade');
            $table->string("attribute");
            $table->integer("increasing_factor_hp");
            $table->integer("increasing_factor_torque");
            $table->integer("increasing_factor_top_speed");
            $table->integer("decreasing_factor_accelerate");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicle_parts');
    }
};
