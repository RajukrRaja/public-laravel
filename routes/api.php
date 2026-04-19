<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;



//public routes
Route::middleware('guest')->group(function () {

    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'submit_register']);
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'login_submit']);

});

//protected routes
Route::middleware('auth.role')->group(function () {

    Route::get('/dashboard', [AuthController::class, 'dashboard']);
    Route::post('/logout', [AuthController::class, 'logout']);

});