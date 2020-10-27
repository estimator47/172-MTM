<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=9" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>172-MTM</title>

    <!-- ==============================================
    Favicons
    =============================================== -->
    <link rel="shortcut icon" href="{{asset('public/images/favicon.ico')}}">

    <!-- ==============================================
    CSS
    =============================================== -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/magnific-popup.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/animate.min.css') }}">

    <!-- ==============================================
    Custom Stylesheet
    =============================================== -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/style.css') }}" />
    @yield('css')
    <script src="{{ asset('public/js/modernizr.min.js') }}"></script>

    <script src='{{ asset('public/js/google_analytics_auto.js') }}'></script>
</head>

<body>

<!-- LOAD PAGE -->
<div class="animationload">
    <div class="loader"></div>
</div>

<!-- BACK TO TOP SECTION -->
<a href="#0" class="cd-top cd-is-visible cd-fade-out">Top</a>

<!-- HEADER -->
<div class="header header-1">

    <!-- TOPBAR -->
    <div class="topbar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-8 col-md-6">
                    <div class="info">
                        <div class="info-item">
                            <!-- <i class="fa fa-phone"></i> +99894 695-65-15 -->
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-6">
                    <div class="pull-right d-inline-flex">
                        <a href="{{ url('locale/ru') }}" class="nav-link"><img src="{{ asset('public/images/ru.jpg') }}"></a>
                        <a href="{{ url('locale/uz') }}" class="nav-link"><img src="{{ asset('public/images/uz.jpg') }}"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- NAVBAR SECTION -->
    <div class="navbar-main">
        <div class="container">
            <nav id="navbar-example" class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="{{url('/')}}">
                    <p>172-MTM</p>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/')}}">{{ __('message.main') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('teacher')}}">{{ __('message.staff') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('gallery')}}">{{ __('message.gallery') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('contact')}}">{{ __('message.contact') }}</a>
                        </li>
                    </ul>
                </div>
            </nav> <!-- -->

        </div>
    </div>
</div>

    @yield('main')

<!-- FOOTER SECTION -->
<div class="footer" data-background="{{ asset('public/images/bg.jpg') }}">
    <div class="content-wrap">
        <div class="container">

            <div class="row" style="text-align: center;">
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="footer-item">
                        <p>{{ __('message.contact-us') }}</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="footer-item">
                        <p>{{ __('message.address-det') }}</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="footer-item">
                        <p>+99894 695-65-15</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="fcopy">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <p class="ftex">Copyright 2020 &copy; <span class="color-primary">This website</span>. Made by <a href="https://www.instagram.com/estimator47/">Estimator47</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- JS -->
<script src="{{ asset('public/js/jquery.min.js') }}"></script>
<script src="{{ asset('public/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('public/js/owl.carousel.js') }}"></script>
<script src="{{ asset('public/js/jquery.magnific-popup.min.js') }}"></script>

<!-- SENDMAIL -->
<script src="{{ asset('public/js/validator.min.j') }}s"></script>
<script src="{{ asset('public/js/form-scripts.js') }}"></script>

<script src="{{ asset('public/js/script.js') }}"></script>
@yield('js')
</body>
</html>
