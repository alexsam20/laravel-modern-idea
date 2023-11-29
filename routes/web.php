<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\DashboardController::class, 'index']);

Route::get('/profile', [\App\Http\Controllers\ProfileController::class, 'index']);
