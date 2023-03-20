<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->view('backend.faculty.all', ['faculties' => Faculty::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('backend.faculty.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['faculty-name' => ['required', Rule::unique('faculties', 'name')]]);

        Faculty::create([
            'name' => $request->get('faculty-name')
        ]);

        return response()->redirectTo(route('faculty.all'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        Faculty::destroy($id);

        return response()->redirectTo(route('faculty.all'));
    }
}
