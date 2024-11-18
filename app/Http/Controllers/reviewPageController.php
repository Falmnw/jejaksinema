<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddReview;

class reviewPageController extends Controller
{
    public function index()
    {
        $reviews = AddReview::all();
        return response()->json($reviews);
    }

    public function show($id)
    {
        $review = AddReview::findOrFail($id);
        return response()->json($review);
    }
}
