@extends('layouts.backend')

@section('content')

    @component('components.backend.staff.all', ['staffs' => $staffs])
    @endcomponent

@endsection
