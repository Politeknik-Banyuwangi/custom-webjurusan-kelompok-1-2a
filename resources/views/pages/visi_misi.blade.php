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
                            <h4 class="text-center">VISI</h4>
                            <p> >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>></p>
                        </div>

                        <div class="section-title pb-4">
                            <h4 class="text-center">MISI</h4>

                            <ol>
                                <li> satu.</li>
                                <li> dua</li>
                                <li> tiga</li>
                                <li> empat</li>
                                <li> lima</li>
                            </ol>
                        </div>

                        <div class="section-title pb-4">
                            <h4 class="text-center">TUJUAN</h4>
                            <ol>
                                <li> >>>>>>>>>>>>></li>
                                <li> >>>>>>>>>>>>></li>
                                <li>>>>>>>>>>>>>>>>></li></li>
                                <li>>>>>>>>>>>>>>>>>></li>
                                <li> >>>>>>>>>>>>>>>>>>> </li>
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
