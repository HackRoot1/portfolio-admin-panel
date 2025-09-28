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
        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            // Skill name
            $table->string('name');
            // Category (Frontend / Backend / Tools etc.)
            $table->string('category')->nullable();
            // Icon (can store class name or image path)
            $table->string('icon')->nullable();
            // Skill color (hex code or color name)
            $table->string('color', 20)->nullable();
            // Skill level (Beginner, Intermediate, Expert)
            $table->string('level', 50)->nullable();
            // Optional for ordering on frontend
            $table->unsignedInteger('sort_order')->default(0);
            // Optional: status field for enabling/disabling
            $table->boolean('is_active')->default(true);
            $table->timestamps();

            // Indexes
            $table->index(['name']);
            $table->index(['category']);
            $table->index(['is_active']); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skills');
    }
};
