<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddReview extends Model
{
    //protected $primaryKey = 'addReviewId';
    protected $table = 'addReview';
    protected $fillable = ['judul', 'ulasan', 'rating', 'poster'];
    use HasFactory;
}
