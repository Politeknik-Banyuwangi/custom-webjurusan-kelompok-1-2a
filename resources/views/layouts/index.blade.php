<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shrotcut icon" href="{{ url('assets/images/logo.png') }}">
    <title>Teknik Informatika</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/fontawesome-free/css/all.css') }}" />
    <!-- slick slider -->
    <link rel="stylesheet" href="{{ url('assets/css/slick.css') }}" />
    <!-- themefy-icon -->
    <link rel="stylesheet" href="{{ url('assets/themify-icons/themify-icons.css') }}">
    <!-- animation css -->
    <link rel="stylesheet" href="{{ url('assets/css/animate.css') }}" />
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{ url('assets/css/owl.carousel.min.css') }}" />
    <!-- venobox css -->
    <link rel="stylesheet" href="{{ url('assets/css/venobox.css') }} " />
    <!-- lightgallery css -->
    <link rel="stylesheet" href="{{ url('assets/css/lightgallery.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/css/master.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/css/aos.css') }}">

    <!-- Filepond stylesheet -->
    <link href="{{ url('plugins/filepond/css/filepond.css') }}" rel="stylesheet">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ url('plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ url('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">

</head>

<body>
    <header class="fixed-top header">
        <div class="top-header py-1 header bg-warning">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 text-start">
                        <div class="main-info-area">
                            <div class="left-section wrap-logo-top mt-2 mb-2">
                                <a href="{{ url('/') }}" class="link-to-home">
                                    <img src="https://poliwangi.ac.id/wp-content/uploads/brizy/imgs/logo-68x67x0x1x68x66x1642688663.png" alt="medicom" style="height: 70px; width:65px;" />
                                </a>
                            </div>
                            <span class="text-light mt-5"> &ensp; TEKNIK INFORMATIKA</span>
                        </div>
                    </div>
                    <div class="col-lg-5 mb-2 top-title justify-content-center align-items-center d-flex text-center">
                        <a href="#" class="text-light text-center"><span
                                class="fab fa-whatsapp me-2 my-auto mt-5"></span>0852-7017-6884</a>
                        <a href="#" class="text-light my-auto mx-3 mt-5"><span class="fas fa-envelope-open mx-2"></span>
                            sahabatTI@gmail.com</a>
                    </div>
                    <div class="col-lg-2 mb-2 col-sm-12 d-flex justify-content-center text-sm-center text-lg-end mt-5">
                        <a href="{{ route('login') }}" class="btn-sm btn-danger my-auto"><span
                                class="fas fa-users mx-1"></span> Login</a>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.navbar')
    </header>
    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4 "
        data-background="{{ asset('assets/images/bg_1.jpg') }}">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12">
                    <h2 class="mb-0 text-uppercase">@yield('heading')</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="custom-breadcrumns">
            <a href="{{ url('/') }}">Home</a>
            <span class="mx-3 fas fa-angle-right"></span>
            @yield('page')
        </div>
    </div>

    @yield('content')

    @include('layouts.footer')
