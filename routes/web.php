<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;

Route::resource('listing',ListingController::class)
    ->only(['index','show','create','store','edit','update','destroy']);
    
Route::get('login' ,[AuthController::class,'create'])
    ->name('login');
Route::post('login' ,[AuthController::class,'store'])
    ->name('login.store');
Route::get('logout' ,[AuthController::class,'destroy'])
    ->name('logout');