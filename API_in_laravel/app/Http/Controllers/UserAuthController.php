<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserAuthController extends Controller
{

    public function signup(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->city = $request->city;
        $user->country = $request->country;
        $user->address = $request->address;
        $user->zip_code = $request->zip_code;
        $user->phone = $request->phone;
        $user->gender = $request->gender;
        $user->age = $request->age;
        $user->salary = $request->salary;
        $user->save();
        $user->token = $user->createToken($user->email)->plainTextToken;
        // return redirect()->route('login')->with('success', 'User created successfully');
        return response()->json([
            'message' => 'User created successfully',
            'user' => $user
        ]);
    }

    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if ($user) {
            $user->token = $user->createToken($user->email)->plainTextToken;
            return response()->json([
                'message' => 'User logged in successfully',
                'user' => $user
            ]);
        }
        return response()->json([
            'message' => 'User not found',
            'user' => null
        ]);
    }

    public function dashboard()
    {
        $users = User::all();
        return view('dashboard', compact('users'));
    }

}
