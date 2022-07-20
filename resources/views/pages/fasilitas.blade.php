@extends('layouts.index')
@section('heading', 'Fasilitas Belajar poliwangicom')

@section('page')
    <span class="current">Fasilitas</span>
@endsection

@section('content')
    <!--Biaya Begin -->
    <section class="about spad">
        <div class="container">
            <div class="card-title about__text mb-5">
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="line pb-4">
                            <h3 class="text-center text-capitalize">Ruang <span>Belajar</span>
                            </h3>
                            <div class="underline"></div>
                        </div>
                    </div>
                </div>

                <!-- Ruang Belajar Begin -->
                <div class="instagram" id="galery">
                    <div class="row d-flex justify-content-center demo-gallery">
                        <ul id="lightgallery" class="list-unstyled">
                            <li class="col-lg-3 col-md-4 col-sm-4 mb-3" data-src="assets/images/galery/belajar_1.JPG"
                                data-sub-html="<h4>Ruang Belajar</h4>" data-pinterest-text="Pin it1"
                                data-tweet-text="share on twitter 1">
                                <a href="">
                                    <img class="img-responsive" src="assets/images/galery/belajar_1.JPG" alt="Thumb-1" />
                                </a>
                            </li>
                            <li class="col-lg-3 col-md-4 col-sm-4 mb-3" data-src="/assets/images/galery/belajar_2.JPG"
                                data-sub-html="<h4>Fasilitas poliwangicom</h4>" data-pinterest-text="Pin it1"
                                data-tweet-text="share on twitter 1">
                                <a href="">
                                    <img class="img-responsive" src="/assets/images/galery/belajar_2.JPG" alt="Thumb-1" />
                                </a>
                            </li>
                            <li class="col-lg-3 col-md-4 col-sm-4 mb-3" data-src="/assets/images/galery/belajar_3.jpg"
                                data-sub-html="<h4>Fasilitas poliwangicom</h4>" data-pinterest-text="Pin it1"
                                data-tweet-text="share on twitter 1">
                                <a href="">
                                    <img class="img-responsive" src="/assets/images/galery/belajar_3.jpg" alt="Thumb-1" />
                                </a>
                            </li>
                            <li class="col-lg-3 col-md-4 col-sm-12 mb-3" data-src="/assets/images/galery/belajar_4.JPG"
                                data-sub-html="<h4>Fasilitas poliwangicom</h4>" data-pinterest-text="Pin it1"
                                data-tweet-text="share on twitter 1">
                                <a href="">
                                    <img class="img-responsive" src="/assets/images/galery/belajar_4.JPG" alt="Thumb-1" />
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Ruang Belajar End -->
                <!-- Ruang Praktek Begin -->
                <div class="instagram" id="galery">
                    <div class="line pb-4">
                        <h3 class="text-center text-capitalize">Ruang <span>Perpustakaan</span>
                        </h3>
                        <div class="underline"></div>
                    </div>

                    <div class="row d-flex justify-content-center demo-gallery">
                        <ul id="lightgallery1" class="list-unstyled">
                            <li class="col-lg-3 col-md-4 col-sm-4 mb-3" data-src="assets/images/galery/perpus_1.jpg"
                                data-sub-html="<h4>Ruang Belajar</h4>" data-pinterest-text="Pin it1"
                                data-tweet-text="share on twitter 1">
                                <a href="">
                                    <img class="img-responsive" src="assets/images/galery/perpus_1.jpg" alt="Thumb-1" />
                                </a>
                            </li>
                            <li class="col-lg-3 col-md-4 col-sm-4 mb-3" data-src="/assets/images/galery/perpus_2.JPG"
                                data-sub-html="<h4>Fasilitas poliwangicom</h4>" data-pinterest-text="Pin it1"
                                data-tweet-text="share on twitter 1">
                                <a href="">
                                    <img class="img-responsive" src="/assets/images/galery/perpus_2.JPG" alt="Thumb-1" />
                                </a>
                            </li>
                            <li class="col-lg-3 col-md-4 col-sm-4 mb-3" data-src="/assets/images/galery/perpus_3.jpg"
                                data-sub-html="<h4>Fasilitas poliwangicom</h4>" data-pinterest-text="Pin it1"
                                data-tweet-text="share on twitter 1">
                                <a href="">
                                    <img class="img-responsive" src="/assets/images/galery/perpus_3.jpg" alt="Thumb-1" />
                                </a>
                            </li>
                            <li class="col-lg-3 col-md-4 col-sm-12 mb-3" data-src="/assets/images/galery/perpus_4.JPG"
                                data-sub-html="<h4>Fasilitas poliwangicom</h4>" data-pinterest-text="Pin it1"
                                data-tweet-text="share on twitter 1">
                                <a href="">
                                    <img class="img-responsive" src="/assets/images/galery/perpus_4.JPG" alt="Thumb-1" />
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Ruang Praktek End -->
            </div>
        </div>
    </section>
    <!--Biaya  End -->

@endsection

@section('script')
    <script type="text/javascript">
        lightGallery(document.getElementById('lightgallery'));
        lightGallery(document.getElementById('lightgallery1'));


        $("#fasilitas").addClass("active");
    </script>

@endsection
