<!DOCTYPE html>
<html lang="en">

<head>
    <title>Weesantai - @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/main/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/main/animate.css">
    <link rel="stylesheet" href="css/mystyle.css">

    <link rel="stylesheet" href="css/main/owl.carousel.min.css">
    <link rel="stylesheet" href="css/main/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/main/magnific-popup.css">

    <link rel="stylesheet" href="css/main/aos.css">

    <link rel="stylesheet" href="css/main/ionicons.min.css">

    <link rel="stylesheet" href="css/main/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/main/jquery.timepicker.css">

    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/main/flaticon.css">
    <link rel="stylesheet" href="css/main/icomoon.css">
    <link rel="stylesheet" href="css/main/style.css">
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="img/ic_logo.png" width="170" height="60" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item {{ Request::is('/') ? 'active' : '' }}"><a href="/" class="nav-link">Beranda</a></li>
                    <li class="nav-item {{ Request::is('destination') ? 'active' : '' }}"><a href="/destination" class="nav-link">Destinasi</a></li>
                    <li class="nav-item {{ Request::is('about') ? 'active' : '' }}"><a href="/about" class="nav-link">Tentang</a></li>
                    <li class="nav-item {{ Request::is('contact') ? 'active' : '' }}"><a href="/contact" class="nav-link">Kontak</a></li>
                    <li class="nav-item"><a href="/login" class="nav-link">Masuk</a></li>
                    <li class="nav-item"><a href="/signup" class="nav-link">Daftar</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <div class="hero-wrap" style="@yield('bg-banner')" data-stellar-background-ratio="0.5">
        <div class="overlay" style="height: 450px"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true" style="height: 450px;">
                <div class="col-md-9 text text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">@yield('title-banner')</h1>
                    <p class="caps" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Weesantai, discover your journey.</p>
                </div>
            </div>
        </div>
    </div>

    @yield('search-form')

    @yield('content')

    <footer class="ftco-footer bg-bottom" style="background-image: url(img/main/footer-bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="block-23 mb-3">
                        <span class="icon icon-map-marker mr-2"></span><span class="text mr-3">Kota Bandung, Jawa Barat</span><br>
                        <a href="#"><span class="icon icon-phone mr-2"></span><span class="text mr-3">+62 822 1234 5678</span></a>
                        <a href="#"><span class="icon icon-envelope mr-2"></span><span class="text">admin@weesantai.id</span></a>
                    </div>
                    <!-- <p> -->
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    <!-- Copyright &copy;<script>
							document.write(new Date().getFullYear());
						</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib | Kelompok 1</a> -->
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    <!-- </p> -->
                </div>
            </div>
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>


    <script src="js/main/jquery.min.js"></script>
    <script src="js/main/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/main/popper.min.js"></script>
    <script src="js/main/bootstrap.min.js"></script>
    <script src="js/main/jquery.easing.1.3.js"></script>
    <script src="js/main/jquery.waypoints.min.js"></script>
    <script src="js/main/jquery.stellar.min.js"></script>
    <script src="js/main/owl.carousel.min.js"></script>
    <script src="js/main/jquery.magnific-popup.min.js"></script>
    <script src="js/main/aos.js"></script>
    <script src="js/main/jquery.animateNumber.min.js"></script>
    <script src="js/main/bootstrap-datepicker.js"></script>
    <script src="js/main/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/main/google-map.js"></script>
    <script src="js/main/main.js"></script>

</body>

</html>