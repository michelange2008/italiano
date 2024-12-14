<?php

use App\Livewire\Etichetta;
use Illuminate\Support\Facades\Route;
use App\Livewire\Liste;
use App\Livewire\Parola;
use App\Livewire\ParolaNuova;

Route::get('/', Liste::class)
    ->middleware(['auth', 'verified'])
    ->name('lista');

Route::get('parola/{id}', Parola::class)
    ->middleware(['auth', 'verified'])
    ->name('parola');

Route::get('parola_nuova/{nome?}', ParolaNuova::class)
    ->middleware(['auth', 'verified'])
    ->name('parola.nuova');

Route::get('etichette', Etichetta::class)
    ->middleware(['auth', 'verified'])
    ->name('etichette');
    // Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');



require __DIR__.'/auth.php';
