<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shrotcut icon" href="{{ url('assets/images/logo.png') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/fontawesome-free/css/all.css') }}" />
    <!-- slick slider -->
    <link rel="stylesheet" href="{{ url('assets/css/slick.css') }}" />
    <!-- animation css -->
    <link rel="stylesheet" href="{{ url('assets/css/animate.css') }}" />
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{ url('assets/css/owl.carousel.min.css') }}" />
    <!-- venobox css -->
    <link rel="stylesheet" href="{{ url('assets/css/venobox.css') }} " />
    <link rel="stylesheet" href="{{ url('assets/css/master.css') }}" />
    <!-- aos css -->
    <link rel="stylesheet" href="{{ url('assets/css/aos.css') }}" />
    <title>AMIK MEDICOM</title>
</head>

<body>
    <header class="fixed-top header">
        <div class="top-header py-1 header bg-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 text-start">
                        <div class="main-info-area">
                            <div class="left-section wrap-logo-top">
                                <a href="{{ url('/') }}" class="link-to-home"><img
                                        src="assets/images/logo-top-1.png" alt="medicom" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 mb-2 top-title justify-content-center align-items-center d-flex text-center">
<<<<<<< Updated upstream
                        <a href="#" class="small text-center"><span
                                class="fab fa-whatsapp me-2 my-auto"></span>0852-7017-6884</a>
                        <a href="#" class="small my-auto mx-3"><span class="fas fa-envelope-open mx-2"></span>
                            sahabatmedicom@gmail.com</a>
=======
                        <a href="#" class="text-light text-center"><span
                                class="fab fa-whatsapp me-2 my-auto mt-5"></span>0852-7017-6884</a>
                        <a href="#" class="text-light my-auto mx-3 mt-5"><span class="fas fa-envelope-open mx-2"></span>
                            TIpoliwangi@gmail.com</a>
>>>>>>> Stashed changes
                    </div>
                    <div class="col-lg-4 mb-2 col-sm-12 d-flex justify-content-center text-sm-center text-lg-end">
                        <a href="{{ route('login') }}" class="btn-register my-auto"><span
                                class="fas fa-users mx-1"></span> Login</a>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.navbar')

    </header>

    @yield('content')

    @include('layouts.footer')
