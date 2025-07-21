<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;
use App\Models\Listing;

Route::resource('listing',ListingController::class)
    ->only(['create','store','edit','update','destroy'])
    ->middleware('auth');
Route::resource('listing',ListingController::class)
    ->except(['create','store','edit','update','destroy']);
    

//Authenticate
Route::get('login' ,[AuthController::class,'create'])
    ->name('login');
Route::post('login' ,[AuthController::class,'store'])
    ->name('login.store');
Route::delete('logout' ,[AuthController::class,'destroy'])
    ->name('logout');