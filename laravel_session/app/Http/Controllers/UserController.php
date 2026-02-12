<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $request->session()->put('name', $request->input('name'));
        // return session('name');
        return redirect('profile');
    }

    public function logout(Request $request)
    {
        $request->session()->forget('name');
        return redirect('form');
    }
}
