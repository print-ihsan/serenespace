<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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

// Auth Routes - menggunakan file yang sudah ada
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

// Halaman Home/Landing Page (Default route)
Route::get('/', [HomeController::class, 'index'])->name('home');

// Auth Routes - menggunakan modal di home page
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard (setelah login)
Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

// Routes untuk fitur yang sudah ada (tetap tersedia)
Route::get('/login-page', [AuthController::class, 'showLogin'])->name('login.page');
Route::get('/register-page', [AuthController::class, 'showRegister'])->name('register.page');
Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->name('password.request');

require __DIR__.'/auth.php';