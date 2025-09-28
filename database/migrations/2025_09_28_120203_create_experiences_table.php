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
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();

            // Company / Organization Name
            $table->string('company');

            // Role / Position
            $table->string('role');

            // Start & End Date
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable(); // nullable for current job

            // Duration in years (optional, can calculate dynamically)
            $table->decimal('duration_years', 4, 2)->nullable();

            // Key responsibilities / description
            $table->text('description')->nullable();

            // Projects handled (optional)
            $table->text('projects')->nullable();

            // Technologies used (optional)
            $table->text('technologies')->nullable();

            // Sorting / display order
            $table->unsignedInteger('sort_order')->default(0);

            // Visibility
            $table->boolean('is_active')->default(true);

            $table->timestamps();

            $table->index(['company']);
            $table->index(['role']);
            $table->index(['is_active']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experiences');
    }
};
