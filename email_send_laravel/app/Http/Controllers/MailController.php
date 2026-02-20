<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;

class MailController extends Controller
{
    public function sendMail(Request $request)
    {
        $to_email = $request->email;
        $message = $request->message;
        $subject = $request->subject;
        Mail::to($to_email)->send(new WelcomeEmail($message, $subject));
        $request->session()->flash('success', 'Email sent successfully');
        return redirect()->back();
    }
}
