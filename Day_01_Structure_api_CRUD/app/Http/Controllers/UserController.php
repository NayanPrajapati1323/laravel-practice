<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    //without eager loading 
    // public function show($id)
    // {
    //     $user = User::findOrFail($id);

    //     return response()->json([
    //         'status' => true,
    //         'data' => $user->load('posts.comments')
    //     ]);
    // }

    //using with() eager loading in laravel
    public function show($id)
    {
        $user = User::with(['posts.comments'])->findOrFail($id);

        return response()->json([
            'status' => true,
            'data' => $user
        ]);
    }
}
