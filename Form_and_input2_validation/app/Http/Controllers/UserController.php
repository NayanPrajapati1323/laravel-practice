<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUser(request $request)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'password' => 'required',
        //     'skills' => 'required',
        //     'gender' => 'required',
        //     'city' => 'required',
        // ]);

        //custome vlidation rule
        $request->validate(
            [
                'name' => 'required|string|min:3|max:10',
                'email' => 'required|email',
                'password' => 'required',
                'skills' => 'required',
                'gender' => 'required',
                'city' => 'required',
            ],
            [
                'name.required' => 'oy name enter kar to',
                'name.string' => 'oy name ma number na hoy',
                'name.min' => 'oy name kam se kam 3 letter no hoye to',
                'name.max' => 'oy name 10 letter no hoye to',
                'email.required' => 'oy email enter kar to',
                'password.required' => 'oy password enter kar to',
                'skills.required' => 'oy skills enter kar to',
                'gender.required' => 'oy gender enter kar to',
                'city.required' => 'oy city enter kar to',
            ]
        );
        return $request;
    }
}
