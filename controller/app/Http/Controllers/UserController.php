<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUser($name)
    {
        return view('user', compact('name'));
    }

    public function getUsersArray()
    {
        $user = ['Nayan', 'Prajapati', 'Nayan Prajapati'];
        return view('user', compact('user'));
    }
}
