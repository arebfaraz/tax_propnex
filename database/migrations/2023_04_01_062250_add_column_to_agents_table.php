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
        Schema::table('agents', function (Blueprint $table) {
            $table->string('full_name')->after('account_name')->nullable();
            $table->string('dob')->after('biz_name')->nullable();
            $table->string('join_date')->after('dob')->nullable();
            $table->string('role')->after('join_date')->nullable();
            $table->string('title')->after('role')->nullable();
            $table->string('scheme')->after('title')->nullable();
            $table->string('nationality')->after('scheme')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('agents', function (Blueprint $table) {
            //
        });
    }
};
