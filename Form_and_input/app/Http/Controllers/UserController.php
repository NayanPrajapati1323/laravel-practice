<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUser(Request $request)
    {
        // return $request;
        echo $request->name;
        echo $request->email;
        echo $request->password;
    }
}