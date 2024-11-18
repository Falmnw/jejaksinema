<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('add_reviews', function (Blueprint $table) {
            $table->id("addReviewId");
            $table->string("judul");
            $table->text("ulasan");
            $table->integer("rating");
            $table->string("poster");
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('add_reviews');
    }
};
