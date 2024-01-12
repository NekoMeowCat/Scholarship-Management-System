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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('student_image')->nullable();
            $table->string('year_level');
            $table->string('id_number');
            $table->string('gender');
            $table->string('course');
            $table->string('email');
            $table->enum('semester', ['1st Semester', '2nd Semester'])->default('1st Semester');
            $table->enum('status', ['verified', 'not_verified', 'graduated'])->default('not_verified');
            $table->foreignId('department_id')->constrained();
            $table->foreignId('scholarship_id')->constrained('scholarships');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
