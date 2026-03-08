<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Events\UserRegistered;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function registerUser(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        event(new UserRegistered($user));

        $request->session()->flash('success', 'User registered successfully!');
        return redirect('/register');
    }
}
