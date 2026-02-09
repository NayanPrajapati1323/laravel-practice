<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

Route::get('/', function () {
    return view('welcome');
});

// Route::view('users', 'users');
Route::get('users', [UsersController::class, 'users']);