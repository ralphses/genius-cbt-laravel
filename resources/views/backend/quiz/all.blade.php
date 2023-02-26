@extends('layouts.backend')

@section('content')

    @component('components.backend.quiz.all', ['quizzes' => $quizzes])
    @endcomponent

@endsection
