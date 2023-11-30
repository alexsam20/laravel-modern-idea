<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

Route::post('/ideas', [\App\Http\Controllers\IdeaController::class, 'store'])->name('ideas.create');

Route::delete('/ideas/{id}', [\App\Http\Controllers\IdeaController::class, 'destroy'])->name('ideas.destroy');

Route::get('/terms', function (){
    return view('terms');
});
