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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('job_title');
            $table->string('company');
            $table->string('location');  
            $table->enum('job_type', ['Full-Time', 'Part-Time', 'Contract']);
            $table->json('required_skills'); 
            $table->enum('experience_level', ['Beginner', 'Intermediate', 'Advanced']);
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
