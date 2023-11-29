<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\DashboardController::class, 'index']);

Route::get('/terms', function (){
    return view('terms');
});
