<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Response;
use Illuminate\Http\Request;
use App\Models\Student;  // Capital S
use Carbon\Carbon;

class studentController extends Controller
{
    public function index()
    {   
        $students = Student::get();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    // Ano ginagawa nito: Validates input, then saves new student record sa DB
    public function store(Request $request)
    {
        $request->validate([
            'stud_no' => 'required|integer',
            'stud_fname' => 'required|max:255|string',
            'stud_mname' => 'required|max:255|string',
            'stud_lname' => 'required|max:255|string',
            'stud_bday' => 'required|max:255|string',
            'zip' => 'required|integer',
        ]);

        Student::create($request->all());

        return redirect()->route('students.index')->with('status', 'Student created successfully!');
    }

    public function edit(int $id)
    {
        $student = Student::findOrFail($id);
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'stud_no' => 'required|integer',
            'stud_fname' => 'required|max:255|string',
            'stud_mname' => 'required|max:255|string',
            'stud_lname' => 'required|max:255|string',
            'stud_bday' => 'required|max:255|string',
            'zip' => 'required|integer',
        ]);
        
        Student::findOrFail($id)->update($request->all());

        return redirect()->back()->with('status', 'Student Updated Successfully!');
    }

    public function destroy(int $id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect()->back()->with('status', 'Student Deleted');
    }
}
