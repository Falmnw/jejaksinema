<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddReviewController;
use App\Http\Controllers\reviewPageController;

Route::get('/reviews', [reviewPageController::class, 'index'])->name('review.index');
Route::get('/reviews/{id}', [reviewPageController::class, 'show'])->name('review.show');

