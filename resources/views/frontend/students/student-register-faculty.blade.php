@extends('layouts.landing')

@section('content')

    @component('components.layouts.frontend.header')
    @endcomponent

    @component('components.layouts.frontend.student.register-faculty')
    @endcomponent


    @component('components.layouts.frontend.footer')
    @endcomponent

@endsection
