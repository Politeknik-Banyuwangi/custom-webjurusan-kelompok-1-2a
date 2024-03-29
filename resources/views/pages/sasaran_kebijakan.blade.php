@extends('layouts.index')
@section('heading', 'Sasaran Dan Kebijakan Mutu')
@section('page')
    <span>Profile</span>
    <span class="mx-3 fas fa-angle-right"></span>
    <span class="current">Sasaran Dan Kebijakan</span>
@endsection

@section('content')

    <!--Visi Misi Begin -->
    <section class="about spad">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card-title about__text mb-5">
                        <div class="section-title pb-4">
                            <h4 class="text-center mb-3">SASARAN PENCAPAIAN</h4>
                            <ol>
                                <li> Menghasilkan lulusan dengan IPK 3,0.</li>
                                <li> Menghasilkan Penelitian dan publikasi ilmiah bereputasi nasional statu judul per tahun.</li>
                                <li> Menghasilkan Pengabdian masyarakat yang di biaya oleh insitusi di luar kampus sebanyak 2 pengabdian.</li>
                                <li> Menghasilkan lulusan yeng menguasai teknologi informasi yang adaftif terhadap perkembangan teknologi informasi sebesar 60% (tanggapan stakeholder/ pengguna lulusan)</li>

                            </ol>
                        </div>
                        <div class="section-title">
                            <h4 class="text-center mb-4">STRATEGI PENCAPAIAN</h4>

                            <ol>
                                <li>Meningkatkan kualitas pendidikan dan pengajaran.</li>
                                <li>Meningkatkan kaalitas dan publikasi</li>
                                <li>Meningkatkan kegiatan pengabdian kepada masyarkat</li>
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
