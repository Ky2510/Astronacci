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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title'); 
            $table->text('content'); 
            $table->unsignedBigInteger('author_id')->nullable(); 
            $table->string('image_url')->nullable();
            $table->enum('status', ['published', 'draft', 'archived'])->default('draft');
            $table->string('tags')->nullable(); 
            $table->timestamps();


            $table->foreign('author_id')->references('id')->on('users')->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
