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

    Route::view('/', 'backend.dashboard');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
