<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request)
    {
        // return $request->method();
        // return $request->path();
        // return $request->url();
        // return $request->fullUrl();
        // return $request->host();
        // return $request->schemeAndHttpHost();
        // return $request->header(); know all the header methods
        // return $request->isMethod('post');
        // return $request->input('username');
        // return $request->input('password');
        // return $request->input('_token'); for csrf token
        return $request->all();
    }
}
