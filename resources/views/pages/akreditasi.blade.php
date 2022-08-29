@extends('layouts.index')
@section('heading', 'Pengumuman Kampus')
@section('page')
    <a href="{{ route('home.pengumuman') }}">Pengumuman </a>
    <span class="mx-3 fas fa-angle-right"></span>
    <span class="current">{{ $read->judul_pengumuman }} </span>
@endsection
@section('content')
    {{-- Pengumuman detail begin --}}
    <section class="about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-6">
                    <div class="card-title about__text mb-5">
                        <div class="pengumuman">
                            <h4 class="text-center">{{ $read->judul_pengumuman }}</h4>
                            <ul class="list-inline text-center">
                                <li class="list-inline-item text-grey"> <b>Post:</b>
                                    @if ($read->user_id == 1)
                                        BAAK
                                    @elseif ($read->user_id == 2)
                                        KA. Prodi
                                    @else
                                        Kemahasiswaan
                                    @endif
                                </li>
                                <li class="list-inline-item text-grey">Read:
                                    {{ $read->view }}<i class="fab ms-1 fa-readme"></i></li>
                                <li class="list-inline-item text-grey"><i class="fas fa-calendar-week ms-2"></i>
                                    {{ date('d, M Y', strtotime($read->tgl_publish)) }}</li>
                                <li class="list-inline-item text-grey"><i class="fas fa-clock ms-2"></i>
                                    {{ time_elapsed_string($read->created_at) }}</li>
                            </ul>
                            <div class="divider mx-auto mb-4"></div>
                            <h6 class="mb-3"> <span>Nb : </span>Budayakan membaca sampai habis... </h6>
                            <p>{!! $read->isi !!}</p>
                            <p>{{ $read->file }}</p>
                            <a href="{{ Storage::url($read->file) }}" class="btn btn-info">Download</a>
                        </div>
                        <div
                            class="blog_extra d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
                            <div class="blog_social">
                                <ul>
                                    <li><a class="whatsapp"
                                            href=" https://wa.me/?text={{ url($read->judul_pengumuman) }}"
                                            target="_blank"><i class="fab fa-whatsapp" aria-hidden="true"></i>whatsapp</a>
                                    </li>
                                    <li><a class="facebook"
                                            href="https://www.facebook.com/share.php?u={{ url($read->judul_pengumuman) }}"
                                            target="_blank"><i class="fab fa-facebook" aria-hidden="true"></i>facebook</a>
                                    </li>
                                </ul>
                                <span><i class="fas fa-angle-double-left me-2"></i>Bagikan pengumuman ini ke yang lainnya
                                </span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    {{-- Pengumuman detail  end --}}

    <section class="mb-3 testimony-section">
        <div class="container">
            <div class="row justify-content-center mb-1">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <h2 class="mb-4">Student Says About Us</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel">
                        @foreach ($motivasi as $item)
                            <div class="item">
                                <div class="testimony-wrap d-flex">
                                    <div class="user-img me-4"
                                        style="background-image: url({{ Storage::url($item->filepond) }})">
                                    </div>
                                    <div class="text ml-2">
                                        <span class="quote d-flex align-items-center justify-content-center">
                                            <i class="fas fa-quote-left"></i>
                                        </span>
                                        <p>{{ $item->qutes }}</p>
                                        <p class="name">{{ $item->name }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
