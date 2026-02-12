<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});


Route::view('user', 'user');
Route::post('login', [UserController::class, 'login']);