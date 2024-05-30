<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

// MUESTRA EL LOGIN COMO PRINCIPAL
Route::get('/', function () {
    return view('welcome');
})->name('home');

// REDIRECCIONA LAS OPCIONES DE MENU: ADMINISTRADOR

// REDIRECCIONA LAS OPCIONES DE MENU: USUARIO / PROFESOR
Route::get('/id', [App\Http\Controllers\ClientController::class, 'id'])->name('id');
Route::get('/studies', [App\Http\Controllers\ClientController::class, 'studies'])->name('studies');
Route::get('/data', [App\Http\Controllers\ClientController::class, 'data'])->name('data');
Route::get('/line', [App\Http\Controllers\ClientController::class, 'line'])->name('line');
Route::get('/production', [App\Http\Controllers\ClientController::class, 'production'])->name('production');
Route::get('/projects', [App\Http\Controllers\ClientController::class, 'projects'])->name('projects');