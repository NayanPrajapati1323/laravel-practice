<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('form', 'user');
Route::view('dashboard', 'dashboard');

Route::post('adduser', [UserController::class, 'addUser'])->name('user.adduser');

// Route::post('login', [UserController::class, 'login'])->name('user.login');
// Route::get('logout', [UserController::class, 'logout'])->name('user.logout');
