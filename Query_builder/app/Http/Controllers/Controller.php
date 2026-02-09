<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

abstract class Controller
{
    public function getUser()
    {
        // $users = DB::table('users')->where('role_id', 3)->get();
        // return view('user', compact('users'));
        // return $users;

        // $users = DB::table('users')->insert([
        //     'name' => 'nayan',
        //     'email' => '[nayan1324@gmail.com]',
        //     'password' => '123456',
        //     'role_id' => 3,
        // ]);
        // if ($users) {
        //     return "User inserted successfully";
        // } else {
        //     return "User not inserted";
        // }

        //update
        // $users = DB::table('users')->where('id', 1)->update([
        //     'name' => 'nayan',
        //     'email' => '[nayan132411@gmail.com]',
        //     'password' => '123456',
        //     'role_id' => 1,
        // ]);
        // if ($users) {
        //     return "User updated successfully";
        // } else {
        //     return "User not updated";
        // }

        //delete
        // $users = DB::table('users')->where('id', 43)->delete();
        // if ($users) {
        //     return "User deleted successfully";
        // } else {
        //     return "User not deleted";
        // }

        ////////////////////////////////////////////////////

        // $response = User::all();
        // $response = User::where('role_id', 3)->get();
        $response = User::find(1);
        return view('user', compact('response'));

    }
}
