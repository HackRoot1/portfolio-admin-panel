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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();

            // Title of the project
            $table->string('title');

            // Description (long and short can be handled in frontend if needed)
            $table->text('description')->nullable();

            // Thumbnail / Image / PDF preview
            $table->string('thumbnail_path')->nullable(); // store image or pdf path

            // Project type (personal, freelance, company, open-source, etc.)
            $table->string('project_type', 50)->nullable();

            // Links
            $table->string('github_url')->nullable();
            $table->string('live_url')->nullable();

            // Optional role in the project
            $table->string('role')->nullable();

            // Optional duration
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();

            // Sorting priority
            $table->unsignedInteger('sort_order')->default(0);

            // Visibility
            $table->boolean('is_active')->default(true);

            $table->timestamps();

            $table->index(['title']);
            $table->index(['project_type']);
            $table->index(['is_active']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
