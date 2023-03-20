@extends('layouts.backend')

@section('content')

    @component('components.backend.students.student-dashboard', ['courses' => $courses, 'quizzes' => $quizzes])
    @endcomponent

@endsection
