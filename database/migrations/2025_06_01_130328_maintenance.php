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
        Schema::create('maintenance', function (Blueprint $table) {
            $table->id();
            // Assuming 'atms' table exists and has an 'id' column
            $table->foreign('atm_id')->references('id')->on('atms')->onDelete('cascade');
            $table->string('bank_name');
            $table->string('atm_location');
            $table->string('maintenance_type'); // e.g., routine, emergency
            $table->string('technician_name');
            $table->string('technician_contact')->nullable();
            $table->string('status')->default('pending'); // e.g., pending, completed, in-progress
            $table->string('due_date')->nullable(); // Optional due date for maintenance
            $table->date('maintenance_date');
            $table->string('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
