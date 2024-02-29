<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'viewDashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    // STUDENT ROUTES
    Route::get('/student', [StudentController::class, 'viewStudent'])->name('student');
    Route::post('/student', [StudentController::class, 'studentPost'])->name('student.post');
    Route::get('/student/{student}/edit', [StudentController::class, 'edit'])->name('student.edit');
    Route::delete('/student/{student}', [StudentController::class, 'destroy'])->name('student.destroy');

    // PROFILE ROUTES
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // SUBJECT ROUTES
    Route::get('/subject', [SubjectController::class, 'viewSubject'])->name('subject');
    Route::post('/subject', [SubjectController::class, 'subjectPost'])->name('subject.post');
    Route::delete('/subject/{subject}', [SubjectController::class, 'destroy'])->name('subject.destroy');

    // GRADE ROUTES
    Route::get('/grade', [GradeController::class, 'viewGrade'])->name('grade');
    Route::post('/grade', [GradeController::class, 'gradePost'])->name('grade.post');
    Route::delete('/grade/{grade}', [GradeController::class, 'destroy'])->name('grade.destroy');
});

require __DIR__.'/auth.php';
