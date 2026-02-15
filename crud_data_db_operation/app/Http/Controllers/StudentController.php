<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function addStudent(Request $request)
    {
        // return $request->input();

        $student = new Student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->save();
        $request->session()->flash('success', 'Student Added Successfully');
        return redirect('show-students');

    }

    public function showStudents()
    {
        $students = Student::paginate(5);
        return view('show-students', compact('students'));
    }

    public function editStudent($id, Request $request)
    {
        $students = Student::find($id);
        return view('edit-students', compact('students'));
    }

    public function deleteStudent($id, Request $request)
    {
        $students = Student::find($id);
        $students->delete();
        $request->session()->flash('delete', 'Student Deleted Successfully');
        return redirect('show-students');
    }

    public function deleteMultiStudents(Request $request)
    {
        $students = Student::destroy($request->ids);
        $request->session()->flash('delete', 'Student Deleted Successfully');
        return redirect('show-students');
    }

    public function updateStudent($id, Request $request)
    {
        $students = Student::find($id);
        $students->name = $request->name;
        $students->email = $request->email;
        $students->phone = $request->phone;
        $students->save();
        $request->session()->flash('update', 'Student Update Successfully');
        return redirect('show-students');
    }

    public function searchStudents(Request $request)
    {
        $search = $request->search;
        // $students = Student::where('name', 'like', "%$search%")->get();
        // $students = Student::where('email', 'like', "%$search%")->get();
        // $students = Student::where('phone', 'like', "%$search%")->get();
        $students = Student::where('name', 'like', "%$search%")->orWhere('email', 'like', "%$search%")->orWhere('phone', 'like', "%$search%")->get();

        return view('show-students', compact('students'));
    }
}
