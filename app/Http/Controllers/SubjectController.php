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

    // SUBJECT POST
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

    function destroy(Subject $subject)
    {
        $subject->delete();
        return back()->with('success', 'Subject deleted successfully');
    }
}
