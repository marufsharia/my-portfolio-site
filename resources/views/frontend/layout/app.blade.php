<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('site_title', 'BlogFolio')</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width"/>
    <meta name="robots" content="all,follow">
    <link rel="shortcut icon" href="{{asset('img/favicon.png')}}"/>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <script src="{{asset('js/pre-load-theme.js')}}"></script>
    <link href="{{asset('css/frontend.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/custom.css')}}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{asset('lib/fontawesome-5/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('lib/font-awesome/css/font-awesome.css')}}">
    <script src="{{asset('js/jquery-1.9.1.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/modernizr-2.6.2.min.js')}}" type="text/javascript"></script>
    <!--[if lt IE 9]>
    <script src="{{ asset('js/html5.js') }} "></script><![endif]-->
    <!--[if IE]>
    <style>.timeline li {
        display: block;
        -ms-filter: "progid: DXImageTransform.Microsoft.Alpha(Opacity=100)";
        filter: alpha(opacity=100);
        opacity: 1;
    }</style><![endif]-->
    @yield('ownCSS')
</head>
<body>

@yield('content')
<script src="{{asset('js/frontend.min.js')}}" type="text/javascript"></script>
@yield('ownJS')
</body>
</html>
