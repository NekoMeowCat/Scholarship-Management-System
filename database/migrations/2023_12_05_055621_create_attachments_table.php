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
        Schema::create('attachments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained();
            $table->string('transcript_of_records')->nullable();
            $table->string('certificate_of_enrollment')->nullable();
            $table->string('grade_slip')->nullable();
            $table->string('income_tax_return')->nullable();
            $table->string('certificate_of_indegency')->nullable();
            $table->string('statement_of_accounts')->nullable();
            $table->string('birth_certificate')->nullable();
            $table->string('good_moral')->nullable();
            $table->string('valid_id')->nullable();
            $table->string('application_form')->nullable();
            $table->string('essay')->nullable();
            $table->string('endorsement')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attachments');
    }
};
