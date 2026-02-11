<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrisonersController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/prisoners', [PrisonersController::class, 'index'])->name('prisoners.index');
Route::get('/prisoners/create', [PrisonersController::class, 'create'])->name('prisoners.create');
Route::post('/prisoners', [PrisonersController::class, 'store'])->name('prisoners.store');
Route::get('/prisoners/{id}', [PrisonersController::class, 'show'])->name('prisoners.show');