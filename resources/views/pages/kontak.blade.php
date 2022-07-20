@extends('layouts.index')
@section('heading', 'Informasi Kampus poliwangi')
@section('page')
    <span class="current">Kontak Kampus</span>
@endsection
@section('content')

    {{-- Kontak begin --}}
    <section class="contact spad">
        <div class="container">
            <div class="card-title about__text mb-5">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="contact__content">
                            <div class="contact__address">
                                <h5>Kontak Informasi</h5>
                                <ul>
                                    <li>
                                        <h6><i class="fa fa-map-marker"></i> Kampus 1</h6>
                                        <p>Jalan Darat No. 74 Medan - (061) 4152616</p>
                                    </li>
                                    <li>
                                        <h6><i class="fa fa-map-marker"></i> Kampus 2</h6>
                                        <p>Jalan Prof. H.M. Yamin No. 508-510 Medan - (061) 4557494</p>
                                    </li>
                                    <li>
                                        <h6><i class="fa fa-phone"></i> Phone</h6>
                                        <p><span>Kamson Sirait</span><span>0821-6812-7949</span></p>
                                        <p><span>Rizky Habibi</span><span>0821-6550-3420</span></p>

                                    </li>
                                    <li>
                                        <h6><i class="fa fa-envelope"></i>Email Kampus</h6>
                                        <p>sahabatmedicom@gmail.com</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="contact__form">
                                <h5>Kirim Pesan</h5>
                                <form method="post" action="#">
                                    <input type="text" name="name" placeholder="Name">
                                    <input type="email" name="email" placeholder="Email">
                                    <input type="number" name="nohandphone" placeholder="No Handphone">
                                    <textarea placeholder="Apa yang ada ingin tanyakan"></textarea>
                                    <button type="submit" class="btn btn-primary-outline">Kirim</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="contact__map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48158.305462977965!2d-74.13283844036356!3d41.02757295168286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2e440473470d7%3A0xcaf503ca2ee57958!2sSaddle%20River%2C%20NJ%2007458%2C%20USA!5e0!3m2!1sen!2sbd!4v1575917275626!5m2!1sen!2sbd"
                                height="780" style="border:0" allowfullscreen="">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    {{-- Kontak end --}}

@endsection
