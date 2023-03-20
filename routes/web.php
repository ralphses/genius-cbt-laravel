<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\StudentsController;
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
})->name('welcome');

Route::prefix('students')->group(function () {

    Route::prefix('/register')->group(function () {

        Route::get('/', [StudentsController::class, 'create'])
            ->name('student.register.start');
        
        Route::post('/', [StudentsController::class, 'save'])
            ->name('student.register.start.save');

        Route::get('/faculty', [StudentsController::class, 'selectFaculty'])
            ->name('student.register.faculty');

        Route::post('/faculty', [StudentsController::class, 'registerFaculty'])
            ->name('student.register.faculty.save');
     
        Route::get('/department', [StudentsController::class, 'selectDepartment'])
            ->name('student.register.department');

        Route::post('/department', [StudentsController::class, 'registerDepartment'])
            ->name('student.register.department.save');

        Route::get('/courses', [StudentsController::class, 'selectCourses'])
            ->name('student.register.courses');

        Route::post('/courses', [StudentsController::class, 'registerCourses'])
            ->name('student.register.courses.save');

    });

    Route::post('/authenticate', [StudentsController::class, 'authenticate'])
        ->name('student.authenticate');

    Route::post('/logout', [StudentsController::class, 'logout'])
        ->name('student.logout');

    Route::get('/dashboard', [StudentsController::class, 'dashboard'])
        ->name('student.dashboard');

    Route::get('/courses/{id}', [StudentsController::class, 'studentCourses'])
        ->name('student.courses');

    Route::prefix('quiz')->group(function() {

        Route::get('/{id}', [QuizController::class, 'startQuiz'])
            ->name('quiz.start');

        Route::get('/submit/{id}', [QuizController::class, 'submit'])
            ->name('quiz.submit');
    });

});

Route::prefix('dashboard')->middleware(['auth', 'verified'])->group(function () {

    Route::view('/', 'backend.dashboard')
        ->name('dashboard');
    
    //Routes for Faculty
    Route::prefix('faculty')->group(function () {

        Route::get('/', [FacultyController::class, 'index'])
            ->name('faculty.all');
        
        Route::get('/add', [FacultyController::class, 'create'])
            ->name('faculty.add');
        
        Route::post('/add', [FacultyController::class, 'store'])
            ->name('faculty.store');

        Route::delete('/remove/{id}', [FacultyController::class, 'destroy'])
            ->name('faculty.delete');
    });

    //Routes for Departments
    Route::prefix('department')->group(function () {

        Route::get('/', [DepartmentController::class, 'index'])
            ->name('department.all');
        
        Route::get('/add', [DepartmentController::class, 'create'])
            ->name('department.add');
        
        Route::post('/add', [DepartmentController::class, 'store'])
            ->name('department.store');
        
        Route::delete('/delete/{id}', [DepartmentController::class, 'destroy'])
            ->name('department.delete');
    });

    //Route for Courses
    Route::prefix('courses')->group(function () {

        Route::get('/', [CourseController::class, 'index'])
            ->name('course.all');

        Route::get('/add', [CourseController::class, 'create'])
            ->name('course.add');
        
        Route::delete('/delete/{id}', [CourseController::class, 'destroy'])
            ->name('course.delete');

        Route::post('/add', [CourseController::class, 'store'])
            ->name('course.store');

        Route::get('/update/{id}', [CourseController::class, 'edit'])
            ->name('course.update');
        
        Route::patch('/update/{id}', [CourseController::class, 'update'])
            ->name('course.update');
    });

    //Routes for Students
    Route::prefix('students')->group(function () {

        Route::get('/add', [StudentsController::class, 'new'])
            ->name('student.add');

        Route::post('/add', [StudentsController::class, "store"])
            ->name('student.store');

        Route::get('/', [StudentsController::class, 'index'])
            ->name('students.all');

        Route::get('/view/{id}', [StudentsController::class, 'show'])
            ->name('student.view');
        
        Route::delete('/delete/{id}', [StudentsController::class, 'destroy'])
            ->name('student.delete');

        Route::view('/update/{id}', 'backend.students.update')
            ->name('student.update');
    });

    //Routes for Staff
    Route::prefix('staff')->group(function () {

        Route::get('/', [StaffController::class, 'index'])
            ->name('staff.all');

        Route::view('/view/{id}', 'backend.staff.single')
            ->name('staff.view');
    });

    //Routes for Quiz
    Route::prefix('quiz')->group(function () {

        Route::get('/', [QuizController::class, 'index'])
            ->name('quiz.all');

        Route::get('/add', [QuizController::class, 'create'])
            ->name('quiz.new');
        
        Route::post('/add', [QuizController::class, 'store'])
            ->name('quiz.new');

        Route::post('/add/courses/{id?}', [QuizController::class, 'courses'])
            ->name('quiz.courses');

        Route::view('/view/{id?}', 'backend.quiz.single')
            ->name('quiz.view');
        
        Route::get('/question/remove/{no}', [QuizController::class, 'removeQuestion'])
            ->name('question.cancel');
        
        Route::post('/quiz/save', [QuizController::class, 'saveCurrentQuiz'])
            ->name('quiz.save');
    });

    Route::prefix('school')->group(function() {

        Route::view('/', 'backend.school.settings')
            ->name('school.settings');
    });



});
require __DIR__.'/auth.php';

