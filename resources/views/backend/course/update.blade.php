@extends('layouts.backend')

@section('content')

    @component('components.backend. course.update', ['course' => $course, 'departments' => $departments])
    @endcomponent

@endsection
