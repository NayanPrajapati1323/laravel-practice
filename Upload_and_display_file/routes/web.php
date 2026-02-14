<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('file-upload', 'upload');
Route::post('/', [UploadController::class, 'upload'])->name('upload');