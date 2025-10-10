<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoginModel;

class Login extends Controller
{
    public function index(){
        return view('login');
    }
    public function login(){
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

        return redirect('/dashbaord')->with('success', 'Registration successful! Please login.');
    }
    public function dashboard(){
        return view('dashboard');
    }
    
}
 