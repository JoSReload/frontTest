<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    <title>@yield('title', 'ChenkaCrud')</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    @section('styles')
        <link rel="shortcut icon" href="{{ asset('statics/favicon.ico') }}">
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="stylesheet" href="{{ asset('statics/styles/vendor.css') }}"/>
        <link rel="stylesheet" href="{{ asset('statics/styles/chenka-crud.css') }}"/>
        <script src="{{ asset('statics/scripts/vendor/modernizr.js') }}"></script>
    @show
</head>

<body class="@yield('body_class', '')">
    <!--[if lt IE 10]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    @yield('body', 'Content Body')

    @section('scripts')
        <script src="{{ asset('statics/scripts/vendor.js') }}"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
                function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
                e=o.createElement(i);r=o.getElementsByTagName(i)[0];
                e.src='//www.google-analytics.com/analytics.js';
                r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
        <script src="{{ asset('statics/scripts/plugins.js') }}"></script>
        <script src="{{ asset('statics/scripts/main.js') }}"></script>
    @show
</body>
</html>