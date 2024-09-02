<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class AddStudentController extends Controller
{

    function showStudentForm()
    {
        return view("backend.add-student");
    }


    public function store(Request $request)
    {
        $request->validate([
            'studentId' => 'required|unique:students,id', // Optional: If you need to validate the ID
            'studentName' => 'required|string|max:255',
            'studentAddr' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
        ]);

        Student::create([
            'name' => $request->input('studentName'),
            'phone' => $request->input('phone'),
            'address' => $request->input('studentAddr'),
        ]);

        return redirect()->back()->with('success', 'Student added successfully!');
    }

    public function search(Request $request)
    {
        $student = null;
        $searchId = $request->input('studentId');

        if ($searchId) {
            $student = Student::where('id', $searchId)->first();
        }

        return view('backend.student-search', ['student' => $student]);
    }
}
