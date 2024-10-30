<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('doctor_name');
            $table->string('doctor_designation')->nullable();
            $table->string('doctor_department')->nullable();
            $table->string('Hospital')->nullable();
            $table->string('chamber_day')->nullable();
            $table->string('chamber_time')->nullable();
            $table->string('doctor_assistent')->nullable();
            $table->string('doctor_image')->nullable();
            $table->string('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
