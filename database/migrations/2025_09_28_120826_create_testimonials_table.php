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
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();

            // Name of person giving testimonial
            $table->string('name');

            // Role / company of person
            $table->string('role')->nullable();

            // Testimonial message
            $table->text('message');

            // Optional rating (1-5)
            $table->unsignedTinyInteger('rating')->nullable();

            // Optional image of person
            $table->string('image_path')->nullable();

            // Optional LinkedIn or portfolio URL
            $table->string('profile_url')->nullable();

            // Sorting / display order
            $table->unsignedInteger('sort_order')->default(0);

            // Visibility
            $table->boolean('is_active')->default(true);

            $table->timestamps();

            $table->index(['name']);
            $table->index(['role']);
            $table->index(['is_active']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
