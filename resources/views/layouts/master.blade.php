<!doctype html>
<html lang="en">

<head>

    <title>@yield('title', 'IICG')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons -->
    {{-- <link rel="manifest" href="/site.webmanifest"> --}}
    <link rel="shortcut icon" href="/favicon.ico">
    <meta name="msapplication-TileColor" content="#0c274e">
    <meta name="theme-color" content="#ffffff">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="/libs/flickity/dist/flickity.min.css">
    <link rel="stylesheet" href="/libs/flickity-fade/flickity-fade.css">
    <link rel="stylesheet" href="/libs/swiper/dist/css/swiper.min.css">
    <link rel="stylesheet" href="/libs/@fortawesome/fontawesome-free/css/all.min.css">
    <!-- Theme CSS -->
    <link rel="stylesheet" href="/css/iicg-style.css">
    <style>
        .swiper-container {
            width: 100%;
            height: 18rem;
            overflow: hidden;
            overflow: -moz-hidden-unscrollable
        }

        .swiper-pagination-bullet-active,
        .swiper-pagination-bullet {
            background: #dad6d6 !important;
            opacity: 0.9 !important;
        }

        .swiper-pagination-bullet-active {
            height: 2.5rem;
            border-radius: 20% !important;
        }
    </style>


</head>

<body>

    <!-- NAVBAR
    ================================================= -->
    <nav
        class="navbar navbar-expand-xl fixed-top {{ Request::is('/') ? 'navbar-dark navbar-togglable' : 'navbar-light' }}">
        <div class="container">

            <!-- Brand -->
            <a class="navbar-brand" href="{{ url("/") }}">
                <img src="/images/iicg-logo.svg" class="avatar">
            </a>

            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="navbarCollapse">

                <!-- Social -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item-divider">
                        <span class="nav-link">
                            <span></span>
                        </span>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fab fa-facebook"></i>
                            <span class="d-xl-none ml-2">
                                Facebook
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fab fa-twitter"></i>
                            <span class="d-xl-none ml-2">
                                Twitter
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fab fa-instagram"></i>
                            <span class="d-xl-none ml-2">
                                Instagram
                            </span>
                        </a>
                    </li>
                </ul>

                <!-- Links -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Services
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Industries
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Case Studies
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Career
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="" class="nav-link">
                            About Us
                        </a>
                    </li>
                    <li class="nav-item-divider">
                        <span class="nav-link">
                            <span></span>
                        </span>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('contact') }}" class="nav-link">
                            Contact Support
                        </a>
                    </li>
                </ul>

            </div>
            <!-- / .navbar-collapse -->

        </div>
        <!-- / .container -->
    </nav>

    @yield('content')

    <!-- FOOTER
    ================================================== -->
    <footer class="section bg-dark">

        <!-- Triangles -->
        <div class="bg-triangle bg-triangle-light bg-triangle-bottom bg-triangle-left"></div>
        <div class="bg-triangle bg-triangle-light bg-triangle-bottom bg-triangle-right"></div>

        <!--Content -->
        <div class="container">
            <div class="row align-self-center">
                <div class="col-md-auto">

                    <!-- Brand -->
                    <p>
                        <a href="{{ url("/") }}" class="footer-brand text-white">
                            <svg class="footer-brand-svg" viewBox="0 0 235 80" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                <path d="M0 0 L 20 10 L 0 20 Z" class="text-primary" fill="currentColor"></path>
                                <path d="M0 30 L 20 40 L 0 50 Z M20 45 L 0 55 L 20 65 Z M0 60 L 20 70 L 0 80 Z"
                                    fill="currentColor"></path>
                                <text x="40" y="70" font-family="Arial, sans-serif" font-size="60" font-weight="bold"
                                    letter-spacing="-.025em" fill="currentColor">IICG.</text>
                            </svg>
                        </a>
                    </p>

                </div>
                <div class="col-md">

                    <!-- Links -->
                    <ul class="list-unstyled list-inline text-md-right">
                        <li class="list-inline-item mr-2">
                            <a href="#" class="text-white">
                                Terms and conditions
                            </a>
                        </li>
                        <li class="list-inline-item mr-2">
                            <a href="#" class="text-white">
                                Privacy policy
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="text-white">
                                Contact us
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
            <!-- / .row -->
            <div class="row align-items-center">
                <div class="col-md">

                    <!-- Copyright -->
                    <p class="text-white text-muted">
                        <small>
                            &copy; Copyright <span class="current-year"></span> Burgeon Tech. All rights reserved.
                        </small>
                    </p>

                </div>
                <div class="col-md">

                    <!-- Social links -->
                    <ul class="list-inline list-unstyled text-md-right">
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                        <li class="list-inline-item ml-3">
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item ml-3">
                            <a href="#">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
            <!-- / .row -->
        </div>
        <!-- / .container -->

    </footer>

    <!-- JAVASCRIPT
    ================================================== -->
    <!-- Global JS -->
    <script src="/libs/jquery/dist/jquery.min.js"></script>

    <!-- Plugins JS -->
    <script src="/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/libs/flickity/dist/flickity.pkgd.min.js"></script>
    <script src="/libs/flickity-fade/flickity-fade.js"></script>
    <script src="/libs/swiper/dist/js/swiper.min.js"> </script>

    <!-- Theme JS -->
    <script src="/js/iicg-script.js"></script>
    <script src="/js/swiper.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper('.swiper-container', {
      slidesPerView: 1,
      direction: 'vertical',
      autoplay: { delay: 4000, },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });
    </script>

</body>

</html>