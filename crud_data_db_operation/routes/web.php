<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

// Route::view('add-student', 'add_student');
// Route::get('show-students', [StudentController::class, 'showStudents']);
// Route::post('add-student', [StudentController::class, 'addStudent']);
// Route::get('edit-students/{id}', [StudentController::class, 'editStudent']);
// Route::get('delete-students/{id}', [StudentController::class, 'deleteStudent']);
// Route::post('edit-student/{id}', [StudentController::class, 'updateStudent']);

// Group all route with controller
Route::controller(StudentController::class)->group(function () {
    Route::view('add-student', 'add_student');
    Route::get('show-students', 'showStudents')->name('show-students');
    Route::post('add-student', 'addStudent')->name('add-student');
    Route::get('edit-students/{id}', 'editStudent')->name('edit-students');
    Route::get('delete-students/{id}', 'deleteStudent')->name('delete-students');
    Route::post('delete-multi-students', 'deleteMultiStudents')->name('delete-multi-students');
    Route::post('edit-student/{id}', 'updateStudent')->name('update-student');
    Route::get('search-students', 'searchStudents')->name('search-students');
});