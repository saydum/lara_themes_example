<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThemeController;

Route::get('/', [ThemeController::class, 'home'])->name('home');
Route::get('/contacts', [ThemeController::class, 'contacts'])->name('contacts');
Route::post('/theme/select', [ThemeController::class, 'selectTheme'])->name('theme.select');

