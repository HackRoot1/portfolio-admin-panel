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
        Schema::create('education', function (Blueprint $table) {
            $table->id();

            // Degree / Course
            $table->string('degree');

            // College / University Name
            $table->string('institution');

            // Location (optional)
            $table->string('location')->nullable();

            // Start & End Year
            $table->year('start_year')->nullable();
            $table->year('end_year')->nullable();

            // Description / Achievements / Notes
            $table->text('description')->nullable();

            // Sorting / display order
            $table->unsignedInteger('sort_order')->default(0);

            // Visibility
            $table->boolean('is_active')->default(true);

            $table->timestamps();

            $table->index(['degree']);
            $table->index(['institution']);
            $table->index(['is_active']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('education');
    }
};
