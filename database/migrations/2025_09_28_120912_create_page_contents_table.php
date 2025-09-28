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
        Schema::create('page_contents', function (Blueprint $table) {
            $table->id();

            // Page / section name, e.g., "home_hero", "about_section"
            $table->string('page')->index();
            $table->string('section')->nullable(); // optional subsection

            // Content type (text, html, json, image_path)
            $table->string('type', 50)->default('text');

            // Actual content
            $table->longText('content')->nullable();

            // Optional image or media
            $table->string('media_path')->nullable();

            // Sorting order
            $table->unsignedInteger('sort_order')->default(0);

            // Visibility
            $table->boolean('is_active')->default(true);

            $table->timestamps();

            $table->index(['page', 'section']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_contents');
    }
};
