<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewCourseRequest;
use App\Models\Course;
use App\Models\Department;
use App\Models\utility\Utility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;


class CourseController extends Controller
{
    public function index(Request $request)
    {

        $courses = (Auth::check()) ? Course::all() : "";
        $student = $request->session()->get('student');

        if ($student) {
            $courses = $student->courses;
        }

        if (!$courses) {
            return redirect(route('welcome'));
        }

        return view('backend.course.all', ['courses' => $courses]);
    }

    public function create()
    {
        return view('backend.course.add', ['departments' => Department::all(), 'semesters' => Utility::SEMESTER]);
    }

    public function store(NewCourseRequest $request)
    {

        $request->validated();

        Course::create([
            'title' => $request->get('course-title'),
            'semester' => $request->get('course-semester'),
            'code' => $request->get('course-code'),
            'unit' => $request->get('course-unit'),
            'level' => $request->get('course-level'),
            'department_id' => $request->get('course-department'),
        ]);

        return redirect()->route('course.all');
    }

    public function destroy(Request $request)
    {

        Course::destroy($request->id);
        return redirect()->route('course.all');
    }

    public function edit(Request $request)
    {
        if (Auth::user() == $request->user()) {
            return view('backend.course.update', ['course' => Course::find($request->id), 'departments' => Department::all()]);
        } else return redirect('/');
    }

    public function update(Request $request)
    {

        $id = $request->id;

        $request->validate([
            'course-title' => ['required', Rule::unique('courses', 'title')->ignore($id)],
            'course-code' => ['required', Rule::unique('courses', 'code')->ignore($id)],
            'course-unit' => ['required', 'integer'],
            'course-semester' => ['required', Rule::in(array_keys(Utility::SEMESTER))],
            'course-department' => ['required', Rule::exists('departments', 'id')],
            'course-level' => ['required', Rule::in(array_keys(Utility::LEVELS))],
        ]);

        $course = Course::find($id);

        $course->update([
            'title' => $request->get('course-title'),
            'semester' => $request->get('course-semester'),
            'code' => $request->get('course-code'),
            'unit' => $request->get('course-unit'),
            'level' => $request->get('course-level'),
            'department_id' => $request->get('course-department'),
        ]);

        return redirect(route('course.all'));
    }
}
