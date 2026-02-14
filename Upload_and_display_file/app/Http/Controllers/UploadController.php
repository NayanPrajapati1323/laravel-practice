<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
        // $path = $request->file('file')->store('uploads', 'public');
        // $path = $request->file('file')->storeAs('uploads', 'dummy-file.jpg', 'public');
        // $path = $request->file('file')->storeAs('uploads', 'dummy-file' . time() . '.jpg', 'public');
        $path = $request->file('file')->storeAs('uploads', 'dummy-file' . time() . '.pdf', 'public');

        $request->session()->flash('message', "File uploaded successfully");

        return view('welcome', [
            'fileName' => $path
        ]);
    }

}
