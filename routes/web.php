<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/menu-list', [HomeController::class, 'menu'])->name('menu');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::get('booking', [HomeController::class, 'booking'])->name('booking');