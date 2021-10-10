<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Client\CampaignController;
use App\Http\Controllers\Client\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::prefix('auth')->as('auth.')->group(function() {
    Route::get('/register', [RegisterController::class, 'register'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('register');

    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/login', [LoginController::class, 'store'])->name('login');
});

Route::prefix('donasi')->as('donasi.')->group(function() {
    Route::get('/{campaign:slug}/detail', [CampaignController::class, 'show'])->name('show');
    Route::get('/{campaign:slug}/form', [CampaignController::class, 'form'])->name('form');
    Route::post('/{campaign:slug}/form', [CampaignController::class, 'store'])->name('form');
});
