<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('form', 'user');
Route::view('profile', 'profile');
Route::post('login', [UserController::class, 'login'])->name('login');
Route::get('logout', [UserController::class, 'logout'])->name('logout');