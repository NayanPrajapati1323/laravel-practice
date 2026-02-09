<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::view('home', 'home')->middleware('check1');
// Route::view('about', 'about')->middleware('check1');
// Route::view('country', 'country')->middleware('check1');
// Route::view('noCountry', 'noCountry')->middleware('check1');

Route::middleware('check1')->group(function () {
    Route::view('home', 'home');
    Route::view('about', 'about');
    Route::view('country', 'country');
    Route::view('noCountry', 'noCountry');
});