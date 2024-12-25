<?php

use App\Livewire\Etichetta;
use Illuminate\Support\Facades\Route;
use App\Livewire\Liste;
use App\Livewire\Parola;
use App\Livewire\ParolaNuova;
use App\Livewire\Verbi;

Route::middleware(['auth', 'verified'])->group(function() {

    Route::get('/', Liste::class)->name('lista');
    
    Route::get('parola/{id}', Parola::class)->name('parola');
    
    Route::get('parola_nuova', ParolaNuova::class)->name('parola.nuova');
    
    Route::get('etichette', Etichetta::class)->name('etichette');
    
    Route::get('verbi', Verbi::class)->name('verbi');
    
});

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');



require __DIR__.'/auth.php';
