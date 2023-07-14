<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;

Route::post('/', [HomeController::class, 'data']);
Route::get('/', [HomeController::class, 'data']);
Route::get('/home', [HomeController::class, 'index']);
Route::post('/home', [HomeController::class, 'index']);
Route::get('/all', [HomeController::class, 'alls']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/all/{limit}', [HomeController::class, 'all']);
Route::get('/new', [HomeController::class, 'new']);
Route::get('/table', [HomeController::class, 'table']);
Route::get('/date', [HomeController::class, 'date']);

Route::view('/dashboard', 'dashboard')->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
  Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
  Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
  Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
