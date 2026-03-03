<?php

use Illuminate\Support\Facades\Route;

Route::get('/hello', function () {
    return 'Hello World no Laravel!';
})->middleware('auth');

Route::get('/SSP', function () {
    return 'Integração Luahr!';
})->middleware('auth');

Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
