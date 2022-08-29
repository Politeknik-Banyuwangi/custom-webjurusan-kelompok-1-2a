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
                            <p> Assalamualaikum, Wr. Wb.
                                Direktur beserta seluruh Civitas akademika Politeknik Negeri Banyuwangi dengan ini mengucapkan selamat datang di layanan media informasi berbasis web Politeknik Negeri Banyuwangi.Media informasi merupakan salah satu bentuk upaya konkrit dari pihak institusi dalam rangka mensejajarkan Politeknik Negeri Banyuwangi dengan Perguruan Tinggi lain di Indonesia yang telah terlebih dahulu memasuki dunia informasi global.Selain itu diharapkan bahwa layanan ini dapat menjadi pintu gerbang (portal) dan penyedia informasi dan komunikasi bagi semua pihak dari seluruh penjuru dunia yang membutukan data dan informasi seputar Politeknik Negeri Banyuwangi.</p>

                            <p> Kami menyadari bahwa sebagai institusi akademik yang berfungsi sebagai pencetak sumberdaya manusia berkualitas dan berwawasan global, Politeknik Negeri Banyuwangi dituntut untuk mampu menyediakan data dan infromasi yang sebanyak-banyaknya bagi yang membutuhkan, serta menyediakan sumber informasi yang dapat mengakses secara akurat, relevan dan up-to-date.</p>

                            <p> Akhirnya, kami berharap bahwa layanan informasi berbasis web ini dapat memberikan manfaat bagi yang membutuhkan, dan kami akan terus mengembangkan layanan ini, sehingga pada gilirannya akan dapat memuaskan kebutuhan informasi bagi semua pihak yang membutuhkannya. Untuk itu sumbangan kritik dan saran membangun sangat kami harapkan untuk kemajuan layanan ini. </p>

                            <p>Demikianlah yang dapat saya sampaikan. Kepada seluruh pengguna teknologi informasi yang telah mengunjungi website ini, kami ucapkan terima kasih.</p>

                            <p> Wassalamualaikum, Wr. Wb.</p>
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
