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
        Schema::create('certificates', function (Blueprint $table) {
            $table->id();

            // Certificate title
            $table->string('title');

            // Optional description
            $table->text('description')->nullable();

            // Image / PDF path
            $table->string('image_path')->nullable();

            // Issuing organization / college
            $table->string('issued_by');

            // Date earned
            $table->date('date_earned')->nullable();

            // Verification link / view link
            $table->string('credential_url')->nullable();

            // Optional certificate ID
            $table->string('certificate_id')->nullable();

            // Sorting / display order
            $table->unsignedInteger('sort_order')->default(0);

            // Visibility
            $table->boolean('is_active')->default(true);

            $table->timestamps();

            $table->index(['title']);
            $table->index(['issued_by']);
            $table->index(['is_active']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('certificates');
    }
};
