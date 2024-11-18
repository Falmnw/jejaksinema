<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddReview;

class addReviewController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'ulasan' => 'required|string',
            'rating' => 'required|integer|min:0|max:10',
            'poster' => 'required|file|mimes:jpeg,png,jpg|max:2048',
        ]);

        $filePath = $request->file('poster')->store('posters', 'public');

        AddReview::create([
            'judul' => $validated['judul'],
            'ulasan' => $validated['ulasan'],
            'rating' => $validated['rating'],
            'poster' => $filePath,
        ]);

        return response()->json(['message' => 'Review successfully added!'], 201);
    }
}
