<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

// When visiting http://127.0.0.1:8000/ → go directly to the student list
Route::get('/', [StudentController::class, 'index']);

// AJAX route for DataTables server-side processing
Route::get('/students-data', [StudentController::class, 'getStudents'])->name('students.data');

// Full CRUD resource route (add, edit, update, delete)
Route::resource('students', StudentController::class);
