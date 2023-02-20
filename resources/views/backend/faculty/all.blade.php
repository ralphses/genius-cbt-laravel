@extends('layouts.backend')

@section('content')

    @component('components.backend.faculty.all', ['faculties' => $faculties])
    @endcomponent

@endsection
