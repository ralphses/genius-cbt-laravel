<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewStudentRequest;
use App\Http\Requests\StudentAuthenticationRequest;
use App\Models\Course;
use App\Models\Department;
use App\Models\Faculty;
use App\Models\Quiz;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Validation\Rule;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.students.all', ['students' => Student::all()]);
    }

    public function selectFaculty() {
        return view('frontend.students.student-register-faculty', ['faculties' => Faculty::all()]);
    }

    public function selectDepartment() {

        $faculty = session()->get('student-register')['faculty'];
        $departments = Faculty::find($faculty)->departments;

        return view('frontend.students.student-register-department', ['departments' => $departments]);
    }

    public function selectCourses() {

        $department = session()->get('student-register')['department'];
        $courses = Department::find($department)->courses;

        return view('frontend.students.student-register-courses', ['courses' => $courses]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $student = Student::find($request->id);

        return view('backend.students.single', ['student' => $student]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['student-matric' => ['required', Rule::unique('students', 'matric')]]);

        Student::create(['matric' => $request->get('student-matric')]);

        return redirect(route('students.all'));
    }

    public function create() {

        //cear any previous registration data
        session()->forget('student-register');

        return view('frontend.students.student-register-start');
    }


    public function save(NewStudentRequest $request)
    {
        $request->validated();

        $info = $request->all(['name', 'matric', 'email', 'level']);

        $info['image'] =  $this->storeImage($request);
        $info['password'] = Crypt::encrypt($request->get('password'));

        session()->put('student-register', $info);

        return redirect(route('student.register.faculty'));
    }

    public function registerFaculty(Request $request) {

        $info = session()->get('student-register');

        if($info) {

            $request->validate(['student-faculty' => ['required', Rule::exists('faculties', 'id')]]);

            $info['faculty'] = $request->get('student-faculty');

            session()->put('student-register', $info);

            return redirect(route('student.register.department'));
        }

        return redirect(route('student.register.start'));
    }

    public function registerDepartment(Request $request) {

        $info = session()->get('student-register') ?? false;

        if($info) {

            $request->validate(['student-department' => ['required', Rule::exists('departments', 'id')]]);

            $info['department'] = $request->get('student-department');

            session()->put('student-register', $info);
    
            return redirect(route('student.register.courses'));
        }

       
    }

    public function registerCourses(Request $request) {

        $studentInfo = session()->get('student-register');
        $courses = $request->get('courses');


        if($courses) {

            $newStudent = Student::where('matric', $studentInfo['matric'])->first();

            $newStudent->update(
                [
                    'name' => $studentInfo['name'],
                    'email' => $studentInfo['email'],
                    'status' => true,
                    'password' => $studentInfo['password'],
                    'level' => $studentInfo['level'],
                    'image_path' => $studentInfo['image'],
                    'department_id' => $studentInfo['department'],
                ]
            );

            $allCourses = collect($courses)->map(function($course) { return Course::find($course)->id; })->all();

            $newStudent->courses()->attach($allCourses);
    
        }

        session()->forget('student-register');

        return redirect()->route('welcome');
            
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function new()
    {
        return view('backend.students.add');
    }

    public function destroy(Request $request) {

        if(Auth::user() == $request->user()) {
            Student::destroy($request->id);
        }

        return redirect(route('students.all'));
    }

    public function authenticate(StudentAuthenticationRequest $request) {

        $request->validated();

        $matric = $request->get('matric');
        $password = $request->get('password');

        $student = Student::where('matric', $matric)->first();

        if(!(Crypt::decrypt($student->password) === $password)) {
            return back()->withErrors(['matric' => 'Credentials do not match']);
        }

        session()->put('student', $student);

        return redirect(route('student.dashboard'));

    }

    public function logout(Request $request) {
        
        $request->session()->flush();

        return redirect(route('welcome'));
    }


    public function dashboard(Request $request) {

        $student = $request->session()->get('student');

        $studentQuizzes = Quiz::whereIn('course_id', $student->courses->map(function($value) { return $value->id; }))->get();

        return view('backend.students.student-dashboard', ['courses' => $student->courses, 'quizzes' => $studentQuizzes]);
    }


    private function storeImage(Request $request): array|string
    {

     if($request->has('image')) {
        $name = str_replace(' ', '', $request->get('name') . $request->get('matric'));
        $newImage = uniqid() . '-' . $name . '.' . $request->file('image')->extension();

        $move = $request->file('image')->move(public_path('assets/images/students/photos'), $newImage, true);
        $move = str_replace("\assets", '/assets', $move);

        return str_replace(str_replace('app\Http\Controllers', '', __DIR__).'public', '', $move);

     }

     return "";
    }

}
