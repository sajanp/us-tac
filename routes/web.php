<?php

use App\Http\Controllers\PresentationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/presentations', [PresentationController::class, 'index'])
    ->name('presentations.index');
Route::get('/presentations/{presentation}', [PresentationController::class, 'show'])
    ->name('presentations.show');
Route::get('/presentations/{presentation}/{slide}', [PresentationController::class, 'slide'])
    ->where('slide', '[0-9]+')
    ->name('presentations.slide');
