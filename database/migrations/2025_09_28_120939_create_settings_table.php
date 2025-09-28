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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();

            // Key for setting, e.g., "site_title", "footer_text"
            $table->string('key')->unique();

            // Value (can store json or string)
            $table->text('value')->nullable();

            // Optional type (text, json, boolean, number)
            $table->string('type', 50)->default('text');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
