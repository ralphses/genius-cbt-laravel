@extends('layouts.backend')

@section('content')

    @component('components.backend. course.add', ['semesters' => $semesters, 'departments' => $departments])
    @endcomponent

@endsection
