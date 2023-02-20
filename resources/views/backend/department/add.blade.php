@extends('layouts.backend')

@section('content')

    @component('components.backend.department.add', ['faculties' => $faculties])
    @endcomponent

@endsection
