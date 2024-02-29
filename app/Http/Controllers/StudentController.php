<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    function viewStudent()
    {
        return view('student', ['students' => Student::all()]);

    }

    // POST STUDENT
    function studentPost(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'address' => 'required',
            'age' => 'required'
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }

        // Check if student exists
        if (Student::where('name', $request->name)->exists()) {
            return back()->with('error', 'Student already exists');
        }

        // Create student
        Student::create($request->all());
        return back()->with('success', 'Student created successfully');
    }

    //UPDATE STUDENT
    function studentUpdate(Request $request, $student)
    {
        $student = Student::findOrFail($student);

        $validatedData = $request->validate([
            'name' => 'nullable|string',
            'address' => 'nullable|string',
            'age' => 'nullable|integer',
        ]);

        // Remove fields with null values from the validated data
        $validatedData = array_filter($validatedData, function ($value) {
            return !is_null($value);
        });

        $student->update($validatedData);
        return back()->with('success', 'Student updated successfully');
    }

    //DELETE STUDENT
    function destroy(Student $student)
    {
        $student->delete();
        return back()->with('success', 'Student deleted successfully');
    }
}
