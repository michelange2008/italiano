<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Liste;

Route::view('/', 'welcome');

Route::get('dashboard', Liste::class)
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');



require __DIR__.'/auth.php';
