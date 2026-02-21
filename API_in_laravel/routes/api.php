<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserAuthController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/hello', function () {
    return ["name" => "Nayan", "age" => 22];
});

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::get('/users', [UserController::class, 'index']);
    Route::post('/add', [UserController::class, 'add']);
    Route::put('/update', [UserController::class, 'update']);
    Route::delete('/delete', [UserController::class, 'delete']);
});

Route::post('/signup', [UserAuthController::class, 'signup'])->name('signup');
Route::post('/login', [UserAuthController::class, 'login'])->name('login');
Route::get('/dashboard', [UserAuthController::class, 'dashboard'])->name('dashboard');