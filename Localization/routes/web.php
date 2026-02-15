<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;


Route::middleware('setlang')->group(function () {

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/{lang}', function ($lang) {
        App::setLocale($lang);
        return view('welcome');
    });
    Route::get('setLang/{lang}', function ($lang) {
        Session::put('lang', $lang);
        return redirect()->back();
    });
});
