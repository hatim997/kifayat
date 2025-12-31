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
        Schema::create('urdu_chapter_contents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('urdu_chapter_id')
              ->constrained('urdu_class_chapters')
              ->cascadeOnDelete();
            $table->string('title');
            $table->string('content_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('urdu_chapter_contents');
    }
};
