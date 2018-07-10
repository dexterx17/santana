<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title',config('app.name', 'Admin')) | SANTANA estudio</title>

    <!-- Favicon-->
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{ asset('plugins/node-waves/waves.css') }}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{ asset('plugins/animate-css/animate.css') }}" rel="stylesheet" />

    <!-- Sweetalert Css -->
    <link href="{{ asset('plugins/sweetalert/sweetalert.css') }}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">

    <!-- AdminBSB Themes. -->
    <link href="{{ asset('css/themes/all-themes.css') }}" rel="stylesheet" />

    <!-- Styles 
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
    @yield('css')

</head>
<body class="@yield('page_class','')" >
    {!! Notify::render() !!}
    @yield('content')

    <!-- Jquery Core Js -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="{{ asset('plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
    
    <!-- Waves Effect Plugin Js -->
    <script src="{{ asset('plugins/node-waves/waves.js') }}"></script>

    <!-- SweetAlert Plugin Js -->
    <script src="{{ asset('plugins/sweetalert/sweetalert.min.js') }}"></script>

    <!-- Validation Plugin Js -->
    <script src="{{ asset('plugins/jquery-validation/jquery.validate.js') }}"></script>
    <script src="{{ asset('plugins/jquery-validation/localization/messages_es.js') }}"></script>

    <!-- Custom Js -->
    <script src="{{ asset('js/admin.js') }}"></script>

    <script src="{{ asset('js/pages/examples/sign-in.js') }}"></script>
    
    <script src="{{ asset('js/demo.js') }}"></script>
    <!-- Scripts 
    <script src="{{ asset('js/app.js') }}"></script>-->

    @yield('js')
</body>
</html>
