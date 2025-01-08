<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
})->middleware();

Route::get('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'register']);