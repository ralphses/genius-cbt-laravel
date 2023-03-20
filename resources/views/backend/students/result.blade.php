@extends('layouts.backend')

@section('content')

    @component('components.backend.students.result', ['result' => $result])
    @endcomponent

@endsection
