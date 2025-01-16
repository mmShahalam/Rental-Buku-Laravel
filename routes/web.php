<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');

Route::middleware('only_guest')->group(function(){
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'authenticating']);
    Route::get('register', [AuthController::class, 'register']);
});

Route::middleware('auth')->group(function(){
Route::get('dashboard', [DashboardController::class, 'index'])->middleware('only_admin');
Route::get('profile', [UserController::class, 'profile'])->middleware('only_client');
Route::get('books', [BookController::class, 'index']);
});