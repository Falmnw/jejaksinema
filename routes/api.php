<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\reviewPageController;
use App\Http\Controllers\AddReviewController;

Route::get('/reviews', [reviewPageController::class, 'index']);
Route::get('/reviews/{id}', [reviewPageController::class, 'show']);
Route::post('/reviews', [AddReviewController::class, 'store']);

