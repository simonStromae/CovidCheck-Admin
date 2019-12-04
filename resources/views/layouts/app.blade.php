
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THE_LAPA - @yield('title')</title>
    <link type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('bootstrap/css/bootstrap-responsive.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('css/theme.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('images/icons/css/font-awesome.css') }}" rel="stylesheet">
    <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
    @stack('css')
</head>
<body>
@include('layouts.partial._navbar')

<div class="wrapper">
    <div class="container">
        <div class="row">
            @if(Request::is('administration*'))
                @include('layouts.partial._siderbar')
            @endif

            @yield('content')
        </div>
    </div>
</div><!--/.wrapper-->

@include('layouts.partial._footer')

<script src="{{ asset('scripts/jquery-1.9.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('scripts/jquery-ui-1.10.1.custom.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
@stack('scripts')
</body>