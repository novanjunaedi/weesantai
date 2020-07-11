<!DOCTYPE html>
<html lang="en">

<head>
    <title>Weesantai - @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/main/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/main/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/mystyle.css')}}">

    <link rel="stylesheet" href="{{asset('css/main/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/main/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/main/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('css/main/aos.css')}}">

    <link rel="stylesheet" href="{{asset('css/main/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/main/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('css/main/jquery.timepicker.css')}}">

    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('css/main/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/main/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('css/main/style.css')}}">
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{asset('img/ic_logo.png')}}" width="170" height="60" alt="">
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
                    @php $user = Auth::guard('role')->user() @endphp
                    @if ($user)
                    @if ($user->role == 'user')
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600">{{$user->name}}</span>
                            <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Settings
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                Activity Log
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/logout" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                    @endif
                    @else
                    <li class="nav-item"><a href="/login" class="nav-link">Masuk</a></li>
                    <li class="nav-item"><a href="/register" class="nav-link">Daftar</a></li>
                    @endif
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

    <footer class="ftco-footer bg-bottom" style="background-image: url(/img/main/footer-bg.jpg);">
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

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="/logout">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('js/main/jquery.min.js')}}"></script>
    <script src="{{asset('js/main/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{asset('js/main/popper.min.js')}}"></script>
    <script src="{{asset('js/main/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/main/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('js/main/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('js/main/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('js/main/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/main/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/main/aos.js')}}"></script>
    <script src="{{asset('js/main/jquery.animateNumber.min.js')}}"></script>
    <script src="{{asset('js/main/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('js/main/scrollax.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{asset('js/main/google-map.js')}}"></script>
    <script src="{{asset('js/main/main.js')}}"></script>

</body>

</html>