<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Events\RegisterUser;

class RegisterController extends Controller
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
            'password' => bcrypt($request->password)
        ]);

        event(new RegisterUser($user));

        return "User Registered Successfully!";
    }
}
