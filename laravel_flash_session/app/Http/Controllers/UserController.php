<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // public function login(Request $request)
    // {
    //     //store all the fields in the session
    //     $request->session()->put('username', $request->username);
    //     $request->session()->put('email', $request->email);
    //     $request->session()->put('password', $request->password);
    //     return redirect('dashboard');
    // }
    // public function logout(Request $request)
    // {
    //     $request->session()->forget('username');
    //     $request->session()->forget('email');
    //     $request->session()->forget('password');
    //     return redirect('form');
    // }

    public function addUser(Request $request)
    {
        $request->session()->flash('msg', 'User added successfully');
        $request->session()->flash('msg1', 'User mali gyo ho');

        return redirect('form');
    }
}
