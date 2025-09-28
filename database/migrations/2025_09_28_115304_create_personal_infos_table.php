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
        Schema::create('personal_infos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete()
                ->unique(); // one-to-one

            // Core details
            $table->string('full_name')->nullable();     // can mirror users.name or be more formal
            $table->string('email')->nullable();         // public email; not necessarily login email
            $table->string('mobile_number', 20)->nullable();
            $table->string('designation')->nullable();   // role / title (e.g., "Full-Stack Developer")

            // Profile & docs
            $table->string('profile_photo_path')->nullable(); // storage path or URL
            $table->string('resume_url')->nullable();   // url or storage path
            $table->string('cv_url')->nullable();  // url or storage path

            // About & location
            $table->text('short_bio')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('location_city')->nullable();
            $table->string('location_country')->nullable();

            $table->timestamps();

            // Helpful indexes
            $table->index(['user_id']);
            $table->index(['location_country']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_infos');
    }
};
