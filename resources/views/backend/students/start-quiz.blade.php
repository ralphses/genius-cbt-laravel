@extends('layouts.backend')

@section('content')

    @component('components.backend.students.start-quiz', ['quiz' => $quiz, 'questions' => $questions])
    @endcomponent

@endsection
