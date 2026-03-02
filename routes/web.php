<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\HelloWorld::class)->name('home');

Route::get('/hello-world', \App\Livewire\HelloWorld::class)->name('hello-world');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
