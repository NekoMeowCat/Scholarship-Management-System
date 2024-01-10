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
            $table->boolean('transcript_of_records')->default(false)->nullable();
            $table->boolean('certificate_of_enrollment')->default(false)->nullable();
            $table->boolean('grade_slip')->default(false)->nullable();
            $table->boolean('income_tax_return')->default(false)->nullable();
            $table->boolean('certificate_of_indegency')->default(false)->nullable();
            $table->boolean('statement_of_accounts')->default(false)->nullable();
            $table->boolean('birth_certificate')->default(false)->nullable();
            $table->boolean('good_moral')->default(false)->nullable();
            $table->boolean('valid_id')->default(false)->nullable();
            $table->boolean('application_form')->default(false)->nullable();
            $table->boolean('essay')->default(false)->nullable();
            $table->boolean('endorsement')->default(false)->nullable();
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
