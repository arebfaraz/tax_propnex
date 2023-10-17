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
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('spa_no', 255)->nullable();
            $table->string('spa_date', 255)->nullable();
            $table->string('transaction_no', 255)->nullable()->after('project_name');
            $table->string('project_name', 255)->nullable();
            $table->string('block_no', 255)->nullable();
            $table->string('unit_no', 255)->nullable();
            $table->string('category', 255)->nullable();
            $table->string('property_type', 255)->nullable();
            $table->string('model', 255)->nullable();
            $table->string('unit_code', 255)->nullable();
            $table->string('bedroom', 255)->nullable();
            $table->string('size', 255)->nullable();
            // $table->string('first_record', 255)->nullable();
            // $table->string('name', 255)->nullable();
            $table->string('gender', 255)->nullable();
            $table->string('marital', 255)->nullable();
            // $table->string('contact_no', 255)->nullable();
            // $table->string('dob', 255)->nullable();
            $table->string('age', 255)->nullable();
            // $table->string('nationality', 255)->nullable();
            $table->string('status', 255)->nullable();
            // $table->string('current_residential_type', 255)->nullable();
            // $table->string('address', 255)->nullable();
            $table->string('property', 255)->nullable();
            // $table->string('payment_scheme', 255)->nullable();
            // $table->string('buyer_type', 255)->nullable();
            // $table->string('vattin', 255)->nullable();
            $table->string('email', 255)->nullable();
            $table->string('transaction_price', 255)->nullable();
            $table->string('discount', 255)->nullable();
            $table->string('nett_transacted_price', 255)->nullable();
            $table->string('percentage', 255)->nullable();
            $table->string('amount', 255)->nullable();
            $table->string('gross_percentage', 255)->nullable();
            $table->string('gross_amount', 255)->nullable();
            $table->string('vat', 255)->nullable();
            $table->string('paying_vat', 255)->nullable();
            $table->string('net_commission', 255)->nullable();
            $table->string('vat_amount', 255)->nullable();
            $table->string('total_amount', 255)->nullable();
            // $table->string('agent_type', 255)->nullable();
            // $table->string('commission_name', 255)->nullable();
            // $table->string('id_passport_no', 255)->nullable();
            // $table->string('search_by', 255)->nullable();
            // $table->string('value', 255)->nullable();
            // $table->string('commission_percentage', 255)->nullable();
            // $table->string('gross_commission', 255)->nullable();
            // $table->string('commission_total_amount', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
