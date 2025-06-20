<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;

Route::resource('listing',ListingController::class)
    ->only(['index','show','create','store','edit','update','destroy']);