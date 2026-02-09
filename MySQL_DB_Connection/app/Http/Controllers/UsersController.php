<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Laravel\Prompts\select;

class UsersController extends Controller
{
    public function users()
    {
        $users = DB::select('select * from users');

        return view('users', compact('users'));
        // return DB::select('select * from users');
    }
}
