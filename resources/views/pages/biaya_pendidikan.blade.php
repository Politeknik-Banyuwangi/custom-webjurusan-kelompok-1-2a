@extends('layouts.index')
@section('heading', 'Biaya Pendidikan')
@section('page')
    <a href="" class="text-capitalize">Pendaftaran</a>
    <span class="mx-3 fas fa-angle-right"></span>
    <span class="current">Biaya Pendidikan</span>
@endsection
@section('content')

    {{-- Biaya Pendidikan  begin --}}
    <section class="about spad">
        <div class="container">
            <div class="card-title about__text mb-5">
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="section-informasi pb-4">
                            <h3 class="text-center text-capitalize">biaya pendidikan TA. 2021-2022
                            </h3>
                        </div>
                        <div class="about__text mb-5 bg-informasi">
                            <ul>
                                <li><i class="fa fa-check-circle"></i> Total Biaya Pendidikan
                                    Mahasiswa Pagi dan Malam
                                    Selama 1(satu) Tahun Rp. 6.000.000,</li>
                                <li><i class="fa fa-check-circle"></i> Pembayaran Uang Administrasi:
                                    Rp. 950.000 + Uang Kuliah Pertama(Sesuai Cicilan Pembayaran)
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Biaya Pendaftaran -->
                <section class="prices">
                    <div class="container text-center">
                        <div class="row justify-content-evenly">
                            <h2 class="special_font">Biaya Administrasi Pendaftaran</h2>
                            <article class="col-lg-3 col-sm-6 ">
                                <div class="item">
                                    <div class="header">
                                        <h2>Biaya Pendaftaran</h2>
                                    </div>
                                    <h4 class="price"><span>Rp.</span>200.000</h4>
                                </div>
                            </article>

                            <article class="col-lg-3 col-sm-6 opacity_init">
                                <div class="item">
                                    <div class="header">
                                        <h2>Biaya Blazer/Almamater</h2>
                                    </div>
                                    <h4 class="price"><span>Rp.</span>200.000</h4>
                                </div>
                            </article>

                            <article class="col-lg-3 col-sm-6 opacity_init">
                                <div class="item">
                                    <div class="header">
                                        <h2>Biaya Orientasi</h2>
                                    </div>
                                    <h4 class="price"><span>Rp.</span>550.000</h4>
                                </div>
                            </article>
                        </div>
                    </div>
                </section>
                <!-- end Pendaftaran -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-informasi mt-4 mb-4">
                            <h4 class="mb-1">Sistem Pembayaran Biaya Kulia Mahasiswa/I TA. 2019/2020 </h4>
                            <span>Pembayaran dilakukan setiap awal bulan paling lambat tanggal 10 disetiap
                                bulannya.</span>
                        </div>

                        <ul class="list-group mt-2">
                            <li class="list-group-item ">
                                <table
                                    class="table table-striped table-bordered table-hover table-responsive table-responsive-sm">
                                    <tbody>
                                        <tr>
                                            <td class="coll">CICILAN PEMBAYARAN </td>
                                            <td>BAYAR 1 KALI</td>
                                            <td>BAYAR 2 KALI</td>
                                            <td>BAYAR 3 KALI</td>
                                            <td>BAYAR 6 KALI</td>
                                            <td>BAYAR 11 KALI</td>
                                        </tr>

                                        <tr class="table-info">
                                            <td>Bulan 1</td>
                                            <td>Rp. 5.800.000,-</td>
                                            <td>Rp. 3.000.000,-</td>
                                            <td>Rp. 2.000.000,-</td>
                                            <td>Rp. 1.000.000,-</td>
                                            <td>Rp. 1.450.000,-</td>
                                        </tr>

                                        <tr>
                                            <td>Bulan 2</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>Rp. 450.000,-</td>
                                        </tr>

                                        <tr>
                                            <td>Bulan 3</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>Rp. 1.000.000,-</td>
                                            <td>Rp. 450.000,-</td>
                                        </tr>
                                        <tr>
                                            <td>Bulan 4</td>
                                            <td></td>
                                            <td></td>
                                            <td>Rp. 2.000.000,-</td>
                                            <td></td>
                                            <td>Rp. 450.000,-</td>
                                        </tr>
                                        <tr>
                                            <td>Bulan 5</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>Rp. 1.000.000,-</td>
                                            <td>Rp. 450.000,-</td>
                                        </tr>
                                        <tr>
                                            <td>Bulan 6</td>
                                            <td></td>
                                            <td>Rp. 2.850.000,-</td>
                                            <td></td>
                                            <td></td>
                                            <td>Rp. 450.000,-</td>
                                        </tr>
                                        <tr>
                                            <td>Bulan 7</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>Rp. 1.000.000,-</td>
                                            <td>Rp. 450.000,-</td>
                                        </tr>
                                        <tr>
                                            <td>Bulan 8</td>
                                            <td></td>
                                            <td></td>
                                            <td>Rp. 1.900.000,-</td>
                                            <td></td>
                                            <td>Rp. 450.000,-</td>
                                        </tr>
                                        <tr>
                                            <td>Bulan 9</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>Rp. 1.000.000,-</td>
                                            <td>Rp. 450.000,-</td>
                                        </tr>
                                        <tr>
                                            <td>Bulan 10</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>Rp. 450.000,-</td>
                                        </tr>
                                        <tr>
                                            <td>Bulan 11</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>Rp. 950.000,-</td>
                                            <td>Rp. 450.000,-</td>
                                        </tr>

                                        <tr class="table-success">
                                            <td>Potongan Uang Kuliah</td>
                                            <td>Rp. 200.000,-</td>
                                            <td>Rp. 150.000,-</td>
                                            <td>Rp. 100.000,-</td>
                                            <td>Rp. 50.000,-</td>
                                            <td>-</td>

                                        </tr>
                                    </tbody>
                                </table>
                            </li>
                        </ul>
                    </div>
                </div>



                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-informasi mt-5">
                            <h4 class="mb-2">Biaya Perkuliahan Tersebut Telah meliputi:</h4>
                            <ul>
                                <li><i class="fa fa-check-circle"></i> Biaya perkuliahan selama 1 tahun </li>
                                <li><i class="fa fa-check-circle"></i> Biaya laboratorium </li>
                                <li><i class="fa fa-check-circle"></i> Biaya materi perkuliahan </li>
                                <li><i class="fa fa-check-circle"></i> Biaya ujian selama 1 tahun</li>
                                <li><i class="fa fa-check-circle"></i> Biaya perpustakaan </li>
                                <li><i class="fa fa-check-circle"></i> Biaya Diktat</li>
                                <li><i class="fa fa-check-circle"></i> Biaya Catatan Belajar</li>
                                <li><i class="fa fa-check-circle"></i> Biaya Uang Ujian</li>
                                <li><i class="fa fa-check-circle"></i> Biaya Praktek Komputer</li>
                                <li><i class="fa fa-check-circle"></i> Biaya Praktek Bahasa Inggris (Setiap Hari)</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    {{-- Biaya Pendidikan  end --}}

@endsection
