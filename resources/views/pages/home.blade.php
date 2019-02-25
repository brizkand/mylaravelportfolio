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
    </head>
    <body>
        <!-- Main navigation -->
        <header>

            <!--Navbar-->
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
                <div class="container">
                    <a class="navbar-brand animated rubberBand slower infinite" href="#">
                        <img class="circle" src="/storage/briz_icon.png" alt="Kev Logo" style="width:40px;">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7"
                    aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link lead" href="/">HOME
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link lead" href="/portfolio">PORTFOLIO</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link lead" href="/gallery">GALLERY</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link lead" href="/about">ABOUT</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link lead" href="contact">CONTACT</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Navbar -->

            <!-- Full Page Intro -->
            <div class="view jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url('/storage/{{$home->image}}'); background-repeat: no-repeat; background-size: cover; background-position: center center;">        
                <!-- Mask & flexbox options-->
                <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
                    <!-- Content -->
                    <div class="container">
                        <!--Grid row-->
                        <div class="row">
                            <!--Grid column-->
                            <div class="col-md-12 white-text text-center">
                                <h1 class="display-3 mb-0 pt-md-5 pt-5 white-text font-weight-bold wow fadeInDown" data-wow-delay="0.3s">{{strToUpper($home->firstname)}}
                                    <a class="indigo-text font-weight-bold">{{strToUpper($home->lastname)}}</a>
                                </h1>
                                <h5 class="text-uppercase pt-md-5 pt-sm-2 pt-5 pb-md-5 pb-sm-3 pb-5 white-text font-weight-bold wow fadeInDown"
                                data-wow-delay="0.3s">{{$home->description}}</h5>
                                <div class="wow fadeInDown" data-wow-delay="0.3s">
                                    <a class="btn btn-light-blue btn-lg">portfolio</a>
                                    <a class="btn btn-indigo btn-lg">About me</a>
                                </div>
                            </div>
                            <!--Grid column-->
                        </div>
                        <!--Grid row-->
                    </div>
                    <!-- Content -->
                </div>
                <!-- Mask & flexbox options-->
            </div>
            <!-- Full Page Intro -->
        </header>
        <!-- Main navigation -->

        <!--Main Layout-->
        <main>
            <div class="container">    
            </div>
        </main>
        <!--Main Layout-->

        <!-- Footer -->
        <footer class="page-footer font-small special-color-dark pt-4">
            <!-- Footer Elements -->
            <div class="container">    
                <!-- Social buttons -->
                <ul class="list-unstyled list-inline text-center">
                    <li class="list-inline-item">
                        <a class="btn-floating btn-fb mx-1">
                            <i class="fa fa-facebook"> </i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn-floating btn-tw mx-1">
                            <i class="fa fa-twitter"> </i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn-floating btn-gplus mx-1">
                            <i class="fa fa-google"> </i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn-floating btn-li mx-1">
                            <i class="fa fa-linkedin"> </i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn-floating btn-dribbble mx-1">
                            <i class="fa fa-instagram"> </i>
                        </a>
                    </li>
                </ul>
                <!-- Social buttons -->    
            </div>
            <!-- Footer Elements -->    
        
            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">&copy; Copyright: {{date('Y')}}
                <a href="https://mdbootstrap.com/education/bootstrap/">Kevin Holgado</a>
            </div>
            <!-- Copyright -->      
        </footer>
        <!-- Footer -->

        {{-- SCRIPTS --}}
        {{-- JQuery --}}
        <script type="text/javascript" src="{{asset('mdb_boothack/js/jquery-3.3.1.min.js')}}"></script>
        {{-- Bootstrap tooltips --}}
        <script type="text/javascript" src="{{asset('mdb_boothack/js/popper.min.js')}}"></script>
        {{-- Bootstrap core JavaScript --}}
        <script type="text/javascript" src="{{asset('mdb_boothack/js/bootstrap.min.js')}}"></script>
        {{-- MDB core JavaScript --}}
        <script type="text/javascript" src="{{asset('mdb_boothack/js/mdb.min.js')}}"></script>
        
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