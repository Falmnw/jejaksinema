<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('review_pages', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('deskripsi')->nullable();
            $table->integer('total_reviews')->default(0);
            $table->decimal('average_rating', 3, 2)->default(0.00);
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('review_pages');
    }
};
