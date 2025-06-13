<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ListingController;


// Route::get('/',[IndexController::class, 'index'])
//     ->name('index');
// Route::get('/show', [IndexController::class, 'show'])
//     ->name('show');

Route::resource('listing',ListingController::class)
    ->only(['index','show']);