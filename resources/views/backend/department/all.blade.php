@extends('layouts.backend')

@section('content')

    @component('components.backend.department.all', ['departments' => $departments])
    @endcomponent

@endsection
