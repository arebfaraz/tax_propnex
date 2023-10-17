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
        Schema::create('commission_distributions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('registration_id')->nullable();
            $table->string('agent_type')->nullable();
            $table->string('id_passport_no', 255)->nullable();
            $table->string('company', 255)->nullable();
            $table->string('name', 255)->nullable();
            $table->string('phone', 255)->nullable();
            $table->string('share', 255)->nullable();
            $table->string('gross_commission', 255)->nullable();
            $table->string('total_amount', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commission_distributions');
    }
};
