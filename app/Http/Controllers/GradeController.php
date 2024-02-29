<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    function viewGrade()
    {
        return view('grade', ['grades' => Grade::all(),
        'students' => Student::all(),
        'subjects' => Subject::all()
    ]);
    }

    // GRADE POST
    function gradePost(Request $request)
    {
        // Validate the request data
        $request->validate([
            'student_id' => 'required',
            'subject_id' => 'required',
            'grade' => 'required',
        ]);

        // Check if grade exists to the student
        if (Grade::where('student_id', $request->student_id)->where('subject_id', $request->subject_id)->exists()) {
            return back()->with('error', 'Grade already exists');
        }

        // Check if grade is valid
        if ($request->grade < 0 || $request->grade > 100) {
            return back()->with('error', 'Grade must be between 0 and 100');
        }

        // Create grade
        Grade::create($request->all());
        return back()->with('success', 'Grade created successfully');
    }

    function destroy(Grade $grade)
    {
        $grade->delete();
        return back()->with('success', 'Grade deleted successfully');
    }
}
