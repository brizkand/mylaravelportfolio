<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name='author' content='Kevin Holgado'>
        <link rel="shortcut icon" type='image/x-icon' href="/storage/briz_icon.png">
        <title>{{ config('app.name', 'MyPortfolio') }}</title>
        {{-- Font Awesome --}}
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        {{-- Bootstrap core CSS --}}
        <link rel="stylesheet" href="{{asset('mdb_boothack/css/bootstrap.min.css')}}">
        {{-- Material Design Bootstrap --}}
        <link rel="stylesheet" href="{{asset('mdb_boothack/css/mdb.min.css')}}">

        {{-- <link rel="stylesheet" href="{{asset('mdb_boothack/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('mdb_boothack/css/mdb.css')}}">
        <link rel="stylesheet" href="{{asset('mdb_boothack/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('mdb_boothack/css/style.min.css')}}"> --}}
        <style>
            .stickyTop{        
                position: sticky;
                top: 0;
                width: 100%;
                z-index: 1;
            }
        </style>    
    </head>
    <body>
        @yield('carousel')
        @include('includes.navigation')
        @yield('content')
        @include('includes.footer')
        
        {{-- SCRIPTS --}}
        {{-- JQuery --}}
        <script type="text/javascript" src="{{asset('mdb_boothack/js/jquery-3.3.1.min.js')}}"></script>
        {{-- Bootstrap tooltips --}}
        <script type="text/javascript" src="{{asset('mdb_boothack/js/popper.min.js')}}"></script>
        {{-- Bootstrap core JavaScript --}}
        <script type="text/javascript" src="{{asset('mdb_boothack/js/bootstrap.min.js')}}"></script>
        {{-- MDB core JavaScript --}}
        <script type="text/javascript" src="{{asset('mdb_boothack/js/mdb.min.js')}}"></script>

        {{-- <script type="text/javascript" src="{{asset('mdb_boothack/js/bootsratp.js')}}"></script>
        <script type="text/javascript" src="{{asset('mdb_boothack/js/mdb.js')}}"></script> --}}

        <script>
            // object-fit polyfill run
            objectFitImages();

            /* init Jarallax */
            jarallax(document.querySelectorAll('.jarallax'));

            jarallax(document.querySelectorAll('.jarallax-keep-img'), {
                keepImg: true,
            });
        </script>
        <script>
            new WOW().init();
        </script>

    </body>
</html>
