@extends('layouts.backend')

@section('content')

    @component('components.backend.quiz.add', ['courses' => $courses])
    @endcomponent

@endsection
