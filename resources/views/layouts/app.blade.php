<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <script src="{{asset('js/pre-load-theme.js')}}"></script>
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="{{asset('css/fontastic.css')}}">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">

    <!-- theme stylesheet-->
    <style>
        :root {
            --site-primary: #796AEE;
            --site-secendary: #796AEE;
        }
    </style>
    <link rel="stylesheet" href="{{asset('css/style.default.premium.css')}}" id="theme-stylesheet">

    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('img/favicon.png')}}">
    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <!-- Scripts -->
    <script src="{{asset('lib/jquery/jquery.min.js')}}" defer></script>
    <script src="{{asset('lib/popper.js/umd/popper.min.js')}}" defer></script>
    <script src="{{asset('lib/bootstrap/js/bootstrap.min.js')}}" defer></script>
    <script src="{{asset('lib/jquery.cookie/jquery.cookie.js')}}" defer></script>
    @livewireStyles
</head>

<body>
    <div class="container-fluid px-3">
        @yield('content')
    </div>

    <!-- JavaScript files-->
    <script src="{{asset('lib/chart.js/Chart.min.js')}}" defer></script>
    <script src="{{asset('lib/jquery-validation/jquery.validate.min.js')}}" defer></script>
    <!-- Main File-->
    <script src="{{asset('js/front.js')}}" defer></script>
    @livewireScripts
</body>

</html>