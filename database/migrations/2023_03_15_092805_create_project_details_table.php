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
        Schema::create('project_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->nullable();
            $table->string('closing_agent', 255)->nullable();
            $table->string('block_no', 255)->nullable();
            $table->string('unit_no', 255)->nullable();
            $table->string('postal_code', 255)->nullable();
            $table->string('type', 255)->nullable();
            $table->string('size', 255)->nullable();
            $table->string('bed_room', 255)->nullable();
            $table->enum('car_parking', ["Y", "N"])->default('Y');
            $table->enum('remark', ["Y", "N"])->default('Y');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_details');
    }
};
