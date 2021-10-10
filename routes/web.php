<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'layouts.client.app');
Route::view('/detail', 'client.campaign.detail');
Route::view('/form', 'client.campaign.form');
Route::view('/finish', 'client.campaign.finish');
Route::view('/dashboard', 'client.dashboard.index');
Route::view('/history', 'client.dashboard.history');
