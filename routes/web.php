<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;


Route::get('/',[IndexController::class, 'index'])
    ->name('index');
Route::get('/show', [IndexController::class, 'show'])
    ->name('show');