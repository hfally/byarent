<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="theme-color" content="#5699EA">

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

    <!-- Custom Css -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    {{--Favicon--}}
    <link href="{{ asset('img/icon.png') }}" rel="icon" type="image/png">

    @yield('extras')
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

<!-- Scripts -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/loader.js') }}"></script>
<script src="{{ asset('bootstrap/popper.min.js') }}"></script>
<script src="{{ asset('bootstrap/bootstrap.min.js') }}"></script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
