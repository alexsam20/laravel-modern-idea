<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

Route::post('/idea', [\App\Http\Controllers\IdeaController::class, 'store'])->name('idea.create');

Route::get('/terms', function (){
    return view('terms');
});
