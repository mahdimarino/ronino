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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Blog title
            $table->string('category'); // Blog type (campaign_type)
            $table->date('post_date'); // Start date of the blog
            $table->text('content'); // Content from the Quill editor
            $table->string('image_path')->nullable(); // Image path for the uploaded blog image
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
