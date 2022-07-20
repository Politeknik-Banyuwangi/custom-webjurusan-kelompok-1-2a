@extends('layouts.index')
@section('heading', 'Sambutan Direktur ')
@section('page')
    <span>Profile</span>
    <span class="mx-3 fas fa-angle-right"></span>
    <span class="current">Sambutan Direktur</span>
@endsection
@section('content')

    <!-- Sambutan_direktur Begin -->
    <section class="about  team spad">
        <div class="container">
            <div class="card-title pb-4 mb-4">
                <div class="row justify-content-center text-center mb-2">
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="{{ asset('assets/images/fjabatan/direktur.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="social">
                                    <a href=""><i class="fab fa-facebook"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Walter Jhonson, M.Kom</h4>
                                <span>Direktur</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="direktur__item__text pb-4" data-aos="fade-up">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                 labore et dolore magna aliqua.</p>

                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                 labore et dolore magna aliqua.</p>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                 labore et dolore magna aliqua. </p>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                 labore et dolore magna aliqua.</p>

                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                 labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Sambutan_direktur End -->
@endsection


@section('script')
    <script type="text/javascript">
        $("#profile").addClass("active");
    </script>

@endsection
