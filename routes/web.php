<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotationController;
use App\Http\Controllers\GamesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SettingsController;

// nav routes
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/notation', function () {
    return view('notation');
});

Route::get('/games', [GamesController::class, 'index'])->name('games.index');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.attempt');

Route::get('/settings', [SettingsController::class, 'index'])->name('settings');

// form actions
Route::post('/notations/store', [NotationController::class, 'store'])->name('notations.store');
