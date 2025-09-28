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
        Schema::create('social_links', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->string('platform_name', 100); // e.g., LinkedIn, GitHub, Twitter, Instagram
            $table->string('url');
            $table->string('icon_class')->nullable(); // for frontend (e.g., lucide/fa class)
            $table->string('icon_color', 7)->nullable(); // Hex color code, e.g., #3b5998
            $table->unsignedInteger('sort_order')->default(0);

            $table->timestamps();

            $table->unique(['user_id', 'platform_name']); // prevent duplicates per user
            $table->index(['user_id', 'sort_order']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('social_links');
    }
};
