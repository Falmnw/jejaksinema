<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddReview extends Model
{
    use HasFactory;

    protected $table = 'add_reviews';
    protected $fillable = ['judul', 'ulasan', 'rating', 'poster'];
}
