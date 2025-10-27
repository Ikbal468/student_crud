<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class StudentController extends Controller
{
    // Display listing
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    // Show create form
    public function create()
    {
        return view('students.create');
    }

    // Store new record
    public function store(Request $request)
    {
        $request->validate([
            'student_code' => 'required|unique:students',
            'name' => 'required',
            'course' => 'required'
        ]);

        Student::create($request->all());
        return redirect()->route('students.index')->with('success', 'Student added successfully!');
    }

    // Edit page
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    // Update record
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required',
            'course' => 'required'
        ]);

        $student->update($request->all());
        return redirect()->route('students.index')->with('success', 'Student updated successfully!');
    }

    // Delete record
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted successfully!');
    }

    public function getStudents(Request $request)
    {
        if ($request->ajax()) {
            $data = Student::select(['id', 'student_code', 'name', 'course', 'remarks']);
            return DataTables::of($data)
                ->addColumn('action', function($row){
                    return '
                        <a href="'.route('students.edit', $row->id).'" class="btn btn-sm btn-primary">Edit</a>
                        <form action="'.route('students.destroy', $row->id).'" method="POST" style="display:inline;">
                            '.csrf_field().method_field("DELETE").'
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    ';
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }
}
