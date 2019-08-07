<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', config('app.name', 'BlogFolio'))</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <script src="{{asset('js/pre-load-theme.js')}}"></script>
    <!-- Bootstrap CSS-->
    <link rel="stylesheet"
          href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}">
    <link href="{{ asset('lib/sweetalert2/sweetalert2.css') }}" rel="stylesheet" type="text/css">
    <!-- Font Awesome CSS-->

 <link rel="stylesheet" href="{{asset('lib/fontawesome-5/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('lib/font-awesome/css/font-awesome.css')}}">
 
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="{{asset('css/fontastic.css')}}">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
@yield('cssFile')
<!-- theme stylesheet-->
    <style>
        :root {
            --site-primary: #796AEE;
            --site-secendary: #796AEE;
        }
    </style>
    <link rel="stylesheet"
          href="{{asset('css/style.default.premium.css')}}"
          id="theme-stylesheet">

    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    @yield('ownCSS')
</head>
<body>
<div class="page">
    <!-- Main Navbar-->
    <header class="header">
        @include('backend.layouts.partials.top-nav-bar')
    </header>
    <div class="page-content d-flex align-items-stretch">
        <!-- Side Navbar -->
        <nav class="side-navbar">
            @include('backend.layouts.partials.left-side-bar')
        </nav>
        <div class="content-inner">
            @yield('content')
            @include('backend.layouts.partials.footer')
        </div>
        <!-- page main contend end -->
    </div>
</div>
<!-- theme change panel-->
@include('backend.layouts.partials.theme-change-panel')
<!-- JavaScript files-->
<script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
<script src="{{asset('lib/popper.js/umd/popper.min.js')}}"></script>
<script src="{{asset('lib/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- sweet alerts -->
<script src="{{asset('lib/sweetalert2/sweetalert2.min.js')}}"></script>
<script src="{{asset('lib/jquery.cookie/jquery.cookie.js')}}"></script>
<script src="{{asset('lib/jquery-validation/jquery.validate.min.js')}}"></script>

<!-- Notifications-->
<script src="{{asset('lib/messenger-hubspot/build/js/messenger.min.js')}}"></script>
<script src="{{asset('lib/messenger-hubspot/build/js/messenger-theme-flat.js')}}"></script>
<script src="{{asset('js/home-premium.js')}}"></script>
@yield('jsFile')
<!-- Main File-->
{{--<script src="{{asset('js/front.js')}}"  ></script>--}}
<script src="{{asset('js/custom-request.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
@yield('ownJS')
</body>
</html>