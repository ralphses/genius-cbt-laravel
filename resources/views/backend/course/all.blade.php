@extends('layouts.backend')

@section('content')

    @component('components.backend. course.all', ['courses' => $courses])
    @endcomponent

@endsection
