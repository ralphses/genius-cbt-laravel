@extends('layouts.backend')

@section('content')

    @component('components.backend.students.all', ['students' => $students])
    @endcomponent

@endsection
