<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return $students;
    }

    public function save()
    {
        $Student = new Student();
        $Student->name = "Nayan";
        $Student->email = "nayan@gmail.com";
        $Student->password = "123456";
        $Student->phone = "9876543210";
        $Student->address = "123 Main St";
        if ($Student->save()) {
            echo "Student saved successfully";
        } else {
            echo "Student not saved";
        }
    }
}
