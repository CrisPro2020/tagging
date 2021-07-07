<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', HomeController::class)->name('inicio');

Route::view('quienes-somos', 'quienes-somos')->name('quienes-somos');
Route::view('servicios', 'servicios')->name('servicios');
Route::view('portafolio', 'portafolio')->name('portafolio');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
