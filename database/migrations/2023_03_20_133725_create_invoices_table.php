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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('transaction_no', 255)->nullable();
            $table->string('registration_id', 255)->nullable();
            $table->string('invoice_no', 255)->nullable();
            $table->string('status', 255)->nullable();
            $table->string('pxc_id', 255)->nullable();
            $table->string('associate_passport_no', 255)->nullable();
            $table->string('associate_name', 255)->nullable();
            $table->string('invoice_date', 255)->nullable();
            $table->string('tax_code', 255)->nullable();
            $table->string('transaction_due_amount', 255)->nullable();
            $table->string('total_invoiced_due_amount', 255)->nullable();
            $table->string('current_due_amount', 255)->nullable();
            $table->string('vat', 255)->nullable();
            $table->string('vat_amount', 255)->nullable();
            $table->string('invoice_amount', 255)->nullable();
            $table->string('client_name_1', 255)->nullable();
            $table->string('client_name_2', 255)->nullable();
            $table->string('client_name_3', 255)->nullable();
            $table->string('client_name_4', 255)->nullable();
            $table->string('billing_address', 255)->nullable();
            $table->string('remarks', 255)->nullable();
            $table->string('reason', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
