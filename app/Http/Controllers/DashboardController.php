<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // GET USER COUNT, SUBJECT COUNT, STUDENT COUNT

    function viewDashboard()
    {
        return view('pages.dashboard', [
            'userCount' => User::count(),
            'subjectCount' => Subject::count(),
            'studentCount' => Student::count()
        ]);
    }
}
