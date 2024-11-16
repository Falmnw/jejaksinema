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
        Schema::create('add_reviews', function (Blueprint $table) {
            $table->id("forumId");
            $table->integer("userId");
            $table->integer("filmId");
            $table->string("judul");
            $table->text("ulasan");
            $table->integer("rating");
            $table->string("poster");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('add_reviews');
    }
};
