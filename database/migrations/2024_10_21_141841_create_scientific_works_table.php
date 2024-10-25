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
        Schema::create('scientific_works', function (Blueprint $table) {
            $table->id();
            $table->foreignId('subarea_id')->constrained('subareas');
            $table->text('title');
            $table->dateTime('publish_date');
            $table->longText('abstract');
            $table->text('keywords');
            $table->text('pdf_url');
            $table->foreignId('user_id')->constrained('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scientific_works');
    }
};
