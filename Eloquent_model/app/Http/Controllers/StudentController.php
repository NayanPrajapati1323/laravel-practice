<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentModel;

class StudentController extends Controller
{
    public function getStudent()
    {
        $data = new StudentModel;
        echo $data->dummy();
        $student = StudentModel::all();
        return view('student', compact('student'));
    }
}
