<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');

Route::get('login', [AuthController::class, 'login'])->name('login')->middleware('only_guest');
Route::post('login', [AuthController::class, 'authenticating'])->middleware('only_guest');
Route::get('register', [AuthController::class, 'register'])->middleware('only_guest');

Route::get('dashboard', [DashboardController::class, 'index'])->middleware('auth', 'only_admin');
Route::get('profile', [UserController::class, 'profile'])->middleware('auth', 'only_client');
Route::get('books', [BookController::class, 'index'])->middleware('auth');