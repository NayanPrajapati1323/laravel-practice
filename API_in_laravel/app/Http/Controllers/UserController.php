<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }

    public function add(Request $request)
    {
        // return $request->input();
        $rules = [
            'name' => 'required|min:3|max:20',
            'email' => 'required|email',
            'city' => 'required',
            'country' => 'required',
            'address' => 'required',
            'zip_code' => 'required',
            'phone' => 'required|numeric',
            'gender' => 'required',
            'age' => 'required',
            'salary' => 'required',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json($validator->errors());
        } else {
            $user = User::where('email', $request->email)->first();
            if ($user) {
                return response()->json(['message' => 'This Email is already Registered']);
            }
            $student = new User();
            $student->name = $request->name;
            $student->email = $request->email;
            $student->city = $request->city;
            $student->country = $request->country;
            $student->address = $request->address;
            $student->zip_code = $request->zip_code;
            $student->phone = $request->phone;
            $student->gender = $request->gender;
            $student->age = $request->age;
            $student->salary = $request->salary;
            $student->save();
            return "User added successfully";
        }
    }

    public function update(Request $request)
    {
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->city = $request->city;
        $user->country = $request->country;
        $user->address = $request->address;
        $user->zip_code = $request->zip_code;
        $user->phone = $request->phone;
        $user->gender = $request->gender;
        $user->age = $request->age;
        $user->salary = $request->salary;
        $user->save();
        return "User updated successfully";
    }

    public function delete(Request $request)
    {
        $user = User::find($request->id);
        $user->delete();
        return "User deleted successfully";
    }

}
