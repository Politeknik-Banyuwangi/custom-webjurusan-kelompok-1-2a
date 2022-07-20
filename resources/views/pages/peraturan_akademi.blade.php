@extends('layouts.index')
@section('heading', 'akademi')
@section('page')
    <a href="" class="">akademi</a>
    <span class="mx-3 fas fa-angle-right"></span>
    <span class="current">Peraturan Akademi</span>
@endsection
@section('content')

    {{-- Peraturan akademi begin --}}
    <section class="about spad">
        <div class="container">
            <div class="card-title about__text mb-5">
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="section-informasi pb-4">
                            <h3 class="text-center text-capitalize">peraturan akademik poliwangi
                            </h3>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-informasi">
                            <h4 class="mb-1">Beban Studi</h4>
                        </div>
                        <div class="section-title pb-4">
                            <ol>
                                <li> Beban studi mahasiswa Tingkat Persiapan Bersama selama satu tahun sebanyak 48 SKS
                                    yang dibagi menjadi dua semester.</li>
                                <li> Beban studi tersebut berupa paket mata kuliah yang sama untuk seluruh mahasiswa.
                                </li>
                                <li> Beban studi lebih lanjut ditentukan oleh indeks prestasi kumulatif (IPK).</li>
                            </ol>
                        </div>

                        <div class="section-informasi">
                            <h4 class="mb-1">Masa Studi </h4>
                        </div>
                        <div class="section-title pb-4">
                            <ol>
                                <li> Masa studi maksimum 6 semester dan waktu cuti akademik tidak diperhitungkan
                                    dalam
                                    penentuan batas waktu studi.</li>
                                <li> Waktu Cuti dapat dilakukan setelah melewati perkuliahaan 1 semester</li>
                            </ol>
                        </div>

                        <div class="section-informasi">
                            <h4 class="mb-1">Sumbangan Penyelenggaraan Pendidikan (SPP)</h4>
                        </div>
                        <div class="section-title pb-4">
                            <ol>
                                <li>Tiap Mahasiswa wajib membayar UANG KULIAH pada waktu yang telah ditentukan.</li>
                                <li>SPP terdiri dari 2 komponen yaitu:</li>
                                <ul>
                                    <li>=> Biaya Peningkatan Mutu Pendidikan (BPMP)</li>
                                    <li>=> Biaya Penyelenggaraan Mata Kuliah (BPMK)</li>
                                </ul>
                                <li>Jumlah uang SPP ditetapkan dengan Keputusan Direktur poliwangi.</li>
                                <li>Mahasiswa yang sedang menjalani cuti akademik wajib membayar BPMP.</li>
                                <li>Mahasiswa yang tidak membayar SPP sampai batas waktu yang ditentukan dikenai sanksi
                                    non aktif dan atau pemutusan pelayanan administrasi.</li>
                                <li>Sanksi akademik dapat berupa kehilangan hak mengikuti perkuliahan, pengguguran
                                    perolehan SKS pada semester bersangkutan, penangguhan kelulusan, pemutusan studi
                                    sementara (skorsing) atau dikeluarkan dari
                                    poliwangi dengan Keputusan poliwangi.</li>
                                <li>Pemutusan pelayanan administrasi ialah kehilangan hak untuk memperoleh semua jenis
                                    pelayanan yang berkaitan dengan akademik dan kemahasiswaan.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    {{-- Peraturan akademi end --}}

@endsection
