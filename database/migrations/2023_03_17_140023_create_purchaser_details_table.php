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
        Schema::create('purchaser_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('registration_id')->nullable();
            $table->string('type')->nullable();
            $table->string('company_name', 255)->nullable();
            $table->string('roc_no', 255)->nullable();
            $table->string('name', 255)->nullable();
            $table->string('dob', 255)->nullable();
            $table->string('nationality', 255)->nullable();
            $table->string('contact_no', 255)->nullable();
            $table->string('current_residential_type', 255)->nullable();
            $table->string('address', 255)->nullable();
            $table->string('payment_scheme', 255)->nullable();
            $table->string('buyer_type', 255)->nullable();
            $table->string('vattin', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchaser_details');
    }
};
