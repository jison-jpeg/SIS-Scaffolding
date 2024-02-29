<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    function viewSubject()
    {
        return view('subject', ['subjects' => Subject::all()]);
    }

    // POST SUBJECT
    function subjectPost(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required',
            'code' => 'required',
            'description' => 'required',
        ]);

        // Check if subject exists
        if (Subject::where('name', $request->name)->exists()) {
            return back()->with('error', 'Subject already exists');
        }

        // Create subject
        Subject::create($request->all());
        return back()->with('success', 'Subject created successfully');
    }

    //UPDATE SUBJECT
    function subjectUpdate(Request $request, $subject)
    {
        $subject = Subject::findOrFail($subject);

        $validatedData = $request->validate([
            'name' => 'nullable|string',
            'code' => 'nullable|string',
            'description' => 'nullable|string',
        ]);

        // Remove fields with null values from the validated data
        $validatedData = array_filter($validatedData, function ($value) {
            return !is_null($value);
        });

        $subject->update($validatedData);
        return back()->with('success', 'Subject updated successfully');
    }


    //DELETE SUBJECT
    function destroy(Subject $subject)
    {
        $subject->delete();
        return back()->with('success', 'Subject deleted successfully');
    }
}
