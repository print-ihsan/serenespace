<?php

use App\Livewire\Dashboard;
use App\Livewire\ThoughtDump;
use App\Livewire\MindfulnessTracker;
use App\Livewire\ArtGenerator;
use App\Livewire\SoundscapePlayer;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/thoughts', ThoughtDump::class)->name('thoughts');
    Route::get('/mindfulness', MindfulnessTracker::class)->name('mindfulness');
    Route::get('/art', ArtGenerator::class)->name('art');
    Route::get('/soundscapes', SoundscapePlayer::class)->name('soundscapes');
});

// Halaman Welcome (Landing Page)
Route::get('/', function () {
    return view('welcome');
});


require __DIR__.'/auth.php';