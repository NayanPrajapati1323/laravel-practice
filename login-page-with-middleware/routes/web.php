<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Register;
use App\Http\Controllers\Login;
use App\Http\Controllers\Dashboard;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [Register::class, 'register']);
Route::post('/register', [Register::class, 'registerUser']);
Route::get('/login', [Register::class, 'login'])->name('login');
Route::post('/login', [Register::class, 'loginUser']);
Route::get('/dashboard', [Register::class, 'dashboard'])->middleware('auth');
// Route::post('/logout', [Register::class, 'logout'])->middleware('auth');
