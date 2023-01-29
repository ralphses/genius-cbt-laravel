@extends('layouts.landing')

@section('content')

    @component('components.layouts.frontend.header')
    @endcomponent

    @component('components.layouts.frontend.landing-main')
    @endcomponent


    @component('components.layouts.frontend.footer')
    @endcomponent

@endsection
