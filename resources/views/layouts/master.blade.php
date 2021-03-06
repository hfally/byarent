<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="theme-color" content="#FF00F3">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }} | @yield('title')</title>

    <!-- LOADER -->
    <link href="{{ asset('css/loader.css') }}" rel="stylesheet">

    <!-- Bootstrap Css -->
    <link href="{{ asset('bootstrap/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Plugin Css -->
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('fontawesome/css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/checker.css') }}" rel="stylesheet" media="all">

    <!-- Custom Css -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    {{--Favicon--}}
    <link href="{{ asset('img/icon.png') }}" rel="icon" type="image/png">

    @stack('page-style')
</head>
<body @yield('bodyAttr')>

<div id="preloader">
    <div class="container">
        <div class="row">
            <div id="loader">
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="lading"></div>
            </div>
        </div>
    </div>
</div>

@yield('content')

{{--FEEDBACK SECTION--}}
@if(session('feedback'))
    @component('components.' . session('feedback')['status'])
        @slot('id', 'feedback-modal')
        @slot('message', session('feedback')['message'])
    @endcomponent
@endif

<!-- Scripts -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/loader.js') }}"></script>
<script src="{{ asset('bootstrap/popper.min.js') }}"></script>
<script src="{{ asset('bootstrap/bootstrap.min.js') }}"></script>

<script src="{{ asset('js/currency-formatter.js') }}"></script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    const cart = {!! session('cart') ? json_encode(session('cart')) : '[]' !!};
    const route = {
        updateCart: '{{ route('cart.update') }}'
    };
</script>

{{--IMPORTS--}}
<script src="{{ asset('js/cart.js') }}"></script>

<script src="{{ asset('js/main.js') }}"></script>

@stack('page-script')
</body>
</html>
