<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frontend.home');
});

Route::prefix('students')->group(function () {

    Route::prefix('/register')->group(function () {

        Route::view('/', 'frontend.students.student-register-start')
            ->name('student.register.start');

        Route::view('/faculty', 'frontend.students.student-register-faculty')
            ->name('student.register.faculty');

        Route::view('/department', 'frontend.students.student-register-department')
            ->name('student.register.department');

        Route::view('/courses', 'frontend.students.student-register-courses')
            ->name('student.register.courses');

    });

});

Route::prefix('dashboard')->group(function () {

    Route::view('/', 'backend.dashboard')
        ->name('dashboard');

    //Route for Courses
    Route::prefix('courses')->group(function () {

        Route::view('/', 'backend.course.all')
            ->name('course.all');

        Route::view('/add', 'backend.course.add')
            ->name('course.add');

        Route::view('/update/{id?}', 'backend.course.update')
            ->name('course.update');
    });

    Route::prefix('students')->group(function () {

        Route::view('/', 'backend.students.all')
            ->name('students.all');

        Route::view('/view/{id}', 'backend.students.single')
            ->name('student.view');

        Route::view('/update/{id}', 'backend.students.update')
            ->name('student.update');
    });

    Route::prefix('staff')->group(function () {

        Route::view('/', 'backend.staff.all')
            ->name('staff.all');

        Route::view('/view/{id}', 'backend.staff.single')
            ->name('staff.view');
    });

    Route::prefix('quiz')->group(function () {

        Route::view('/', 'backend.quiz.all')
            ->name('quiz.all');

        Route::view('/add', 'backend.quiz.add')
            ->name('quiz.new');

        Route::view('/view/{id}', 'backend.quiz.single')
            ->name('quiz.view');
    });

    Route::prefix('school')->group(function() {

        Route::view('/', 'backend.school.settings')
            ->name('school.settings');
    });



});




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
