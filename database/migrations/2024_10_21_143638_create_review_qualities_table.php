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
        Schema::create('review_qualities', function (Blueprint $table) {
            $table->id();
            $table->smallInteger('assessment');
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('review_id')->constrained('reviews');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('review_qualities');
    }
};
