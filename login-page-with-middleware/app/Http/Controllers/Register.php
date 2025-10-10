<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoginModel;

class Register extends Controller
{
    
    public function register(){
        return view('register');
    }

    public function registerUser(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

        $user = new LoginModel();
        $user->name = $name;
        $user->email = $email;
        $user->password = bcrypt($password);
        $user->save();

        return redirect('/login')->with('success', 'Registration successful! Please login.');
    }   

 public function login(){
        return view('login');
    }
    public function loginUser(){
        $email = request('email');
        $password = request('password');

        $user = LoginModel::where('email', $email)->first();

        if ($user && password_verify($password, $user->password)) {
            // Authentication successful
            return redirect('/dashboard');
        } else {
            // Authentication failed
            return back()->withErrors(['email' => 'Invalid credentials']);
        }
        
    }
    public function dashboard(){
        return view('dashboard');
    }
    
    
}
