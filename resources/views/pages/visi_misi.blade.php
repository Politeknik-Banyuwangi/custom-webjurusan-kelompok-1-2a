@extends('layouts.index')
@section('heading', 'Visi, Misi dan Tujuan Jurusan Teknik Informatika')
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
                            <p> Menjadi  jurusan  teknik  informatika  yang  unggul  dan  terkemuka  untuk  menunjang kebutuhan pasar global pada tahun 2027
                            </p>
                        </div>

                        <div class="section-title pb-4">
                            <h4 class="text-center">Misi</h4>

                            <ol>
                                <li> Menyelenggarakan Jurusan Teknik Informatika secara berkualitas dan bermartabat
                                </li>
                                <li> Menghasilkan lulusan yang memiliki karakteristik berpengetahuan secara utuh, memiliki kemampuan untuk belajar dan beradaptasi, ketajaman bisnis,   pengelolaan waktu, kemampuan interpersonal, serta menjunjung tinggi nilai-nilai Pancasila.</li>
                                <li>Berperan aktif dalam pengembangan dan peningkatan sistem pendidikan politeknik di Indonesia bidang teknologi informasi
                                </li>
                                <li>Aktif menyelenggarakan kegiatan tri dharma perguruan tinggi secara efektif, efisien dan akuntabel.
                                </li>
                                <li>Menghasilkan produk-produk inovatif menggunakan teknologi informasi.
                                </li>
                            </ol>
                        </div>

                        {{-- <div class="section-title pb-4">
                            <h4 class="text-center">TUJUAN</h4>
                            <ol>
                                <li> Menghasilkan lulusan yang berkualitas dan unggul, yang memiliki kompetensi technical support, rekayasa perangkat lunak, jaringan komputer, dan komputasi cerdas & visual.</li>
                                <li> Menghasilkan penelitian dalam bidang teknik informatika yang dapat dipublikasikan di jurnal nasional dan internasional.</li>
                                <li> Menghasilkan kegiatan pengabdian kepada masyarakat dalam bidang teknik informatika yang mampu meningkatkan taraf kehidupan masyarakat.</li>
                            </ol>
                        </div> --}}
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
