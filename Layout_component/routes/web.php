<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('about', 'about')->name('about');
Route::view('home', 'home')->name('home');
Route::view('contact', 'contact')->name('contact');
Route::view('services', 'services')->name('services');
Route::view('portfolio', 'portfolio')->name('portfolio');
Route::view('blog', 'blog')->name('blog');

