@extends('layouts.backend')

@section('content')

    @component('components.backend.students.single', ['student' => $student])
    @endcomponent

@endsection
