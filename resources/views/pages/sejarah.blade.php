@extends('layouts.index')
@section('heading', 'Sejarah Institusi')
@section('page')
    <span>Profile</span>
    <span class="mx-3 fas fa-angle-right"></span>
    <span class="current">Sejarah</span>
@endsection
@section('content')

    <div class="site-title spad">
        <div class="container" data-aos="fade_up">
            <div class="row justify-content-center text-start">
                <div class="col-lg-12">
                    <div class="card-title">
                        <div class="row mb-3">
                            <div class="col-lg-6 col-md-6 mb-2 position-relative">
                                <div class="success-video set-bg" data-background="assets/images/about-video.jpg">
                                    <a class="play-btn venobox" href="https://youtu.be/nA1Aqp0sPQo" data-vbtype="video">
                                        <i class="fas fa-play"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="about__text">
                                    <div class="section-title">
                                        <h2>Informasi Singkat</h2>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut
                                        labore et dolore magna aliqua.</p>
                                    <ul>
                                        <li><i class="fa fa-check-circle"></i> Routine and medical care</li>
                                        <li><i class="fa fa-check-circle"></i> Excellence in Healthcare every</li>
                                        <li><i class="fa fa-check-circle"></i> Building a healthy environment</li>
                                    </ul>
                                    <a href="#" class="btn btn-primary-outline">Contact us</a>
                                </div>
                            </div>
                        </div>
                        <div class="section-informasi mt-5 mb-4 " data-aos="fade-up">
                            <h3 class="text-center text-uppercase">Sejarah Kampus
                            </h3>

                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                 labore et dolore magna aliqua..</p>
                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                 labore et dolore magna aliqua.</p>

                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                 labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="about spad">
        <div class="container" data-aos="fade-up" data-aos-easing="ease-in-sine">
            <div class="row justify-content-center text-start">
                <div class="col-lg-12">
                    <div class="card-title mb-2">
                        <div class="section-informasi mb-4">
                            <h3 class="text-center text-uppercase">SEJARAH INSTITUSI
                            </h3>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                 labore et dolore magna aliqua..</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                 labore et dolore magna aliqua.</p>

                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                 labore et dolore magna aliqua.</p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                 labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        $("#profile").addClass("active");
    </script>
@endsection
