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
        Schema::create('achievements', function (Blueprint $table) {
            $table->id();

            // Title of achievement / award
            $table->string('title');

            // Optional description
            $table->text('description')->nullable();

            // Issuer (organization, institution, company)
            $table->string('issued_by')->nullable();

            // Date earned
            $table->date('date_earned')->nullable();

            // Image / badge path
            $table->string('image_path')->nullable();

            // Optional verification / certificate link
            $table->string('credential_url')->nullable();

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
        Schema::dropIfExists('achievements');
    }
};
