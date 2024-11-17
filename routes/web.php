<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddReviewController;


Route::post('/addReview', [AddReviewController::class, 'store']);

//Route::get('/', function () {
//    return view('welcome')
