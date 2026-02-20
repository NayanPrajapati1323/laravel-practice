<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;

Route::get('/', function () {
    return view('welcome');
});
Route::view('mail-form', 'send-mail');

Route::post('/send-mail', [MailController::class, 'sendMail'])->name('send.mail');


