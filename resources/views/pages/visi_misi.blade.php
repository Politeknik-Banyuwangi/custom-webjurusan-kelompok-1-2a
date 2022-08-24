@extends('layouts.index')
@section('heading', 'Visi, Misi Institusi Akademi Informatika Dan Komputer Medicom')
@section('page')
    <span>Profile</span>
    <span class="mx-3 fas fa-angle-right"></span>
    <span class="current">Visi Misi</span>
@endsection
@section('content')

    <!--Visi Misi Begin -->
    <section class="about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-6">
                    <div class="card-title about__text mb-4">
                        <div class="section-title pb-4">
                            <h4 class="text-center">Visi</h4>
                            <p> Menjadikan program studi yang berkualitas dan unggul di bidang keahlian teknik informatika pada tahun 2022.</p>
                        </div>

                        <div class="section-title pb-4">
                            <h4 class="text-center">Misi</h4>

                            <ol>
                                <li> Menyelenggarakan pendidikan vokasi yang berkualitas dan unggul di bidang keahlian teknik informatika dengan didukung oleh suasana akademik yang kondusif bagi peningkatan mutu sumber daya manusia.</li>
                                <li> Menyelenggarakan suatu kegiatan penelitian dan pengabdian kepada masyarakat di bidang teknik informatika yang secara nyata mampu menyelesaikan masalah-masalah bidang teknik informatika yang bersinergi dengan kegiatan Politeknik Negeri Banyuwangi sebagai penyelenggara pendidikan keahlian.</li>
                            </ol>
                        </div>

                        <div class="section-title pb-4">
                            <h4 class="text-center">TUJUAN</h4>
                            <ol>
                                <li> Menghasilkan lulusan yang berkualitas dan unggul, yang memiliki kompetensi technical support, rekayasa perangkat lunak, jaringan komputer, dan komputasi cerdas & visual.</li>
                                <li> Menghasilkan penelitian dalam bidang teknik informatika yang dapat dipublikasikan di jurnal nasional dan internasional.</li>
                                <li> Menghasilkan kegiatan pengabdian kepada masyarakat dalam bidang teknik informatika yang mampu meningkatkan taraf kehidupan masyarakat.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Visi Misi End -->
@endsection

@section('script')
    <script type="text/javascript">
        $("#profile").addClass("active");
    </script>

@endsection
