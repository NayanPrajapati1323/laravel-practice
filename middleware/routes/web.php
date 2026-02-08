<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::view('home', 'home');

Route::view('form', 'age-form');
// Protected route
Route::post('/age-submit', function (Request $request) {
    return "Access granted. You are above 18.";
})->middleware('check.age')->name('age.submit');
