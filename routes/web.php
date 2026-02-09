<?php

use App\Http\Controllers\PresentationController;
use App\Http\Middleware\EnsureAccessGranted;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function (Request $request) {
    if ($request->session()->get('access_granted')) {
        return redirect()->route('presentations.index');
    }

    return view('welcome');
});

Route::post('/access', function (Request $request) {
    if ($request->input('password') === 'COSTAC2026') {
        $request->session()->put('access_granted', true);

        return redirect()->route('presentations.index');
    }

    return redirect('/')->with('error', 'Incorrect password.');
})->name('access.check');

Route::middleware(EnsureAccessGranted::class)->group(function () {
    Route::get('/presentations', [PresentationController::class, 'index'])
        ->name('presentations.index');
    Route::get('/presentations/{presentation}', [PresentationController::class, 'show'])
        ->name('presentations.show');
    Route::get('/presentations/{presentation}/{slide}', [PresentationController::class, 'slide'])
        ->where('slide', '[0-9]+')
        ->name('presentations.slide');
});
