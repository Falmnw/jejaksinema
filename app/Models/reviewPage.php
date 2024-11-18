<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewPage extends Model
{
    use HasFactory;

    protected $table = 'review_pages';
    protected $fillable = [
        'judul',
        'deskripsi',
        'total_reviews',
        'average_rating',
    ];
}
