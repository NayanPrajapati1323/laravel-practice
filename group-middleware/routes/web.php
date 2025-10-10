<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Alias;

Route::get('/', function () {
    return view('welcome');
});


Route::view('home', 'home')->middleware(['agecheckd','countrycheck']);
Route::view('about', 'about');
Route::view('contact','contact');
