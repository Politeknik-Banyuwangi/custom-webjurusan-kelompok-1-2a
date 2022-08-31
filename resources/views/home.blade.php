@extends('layouts.home')
@section('content')
    <!-- hero slider -->
    <section class="hero-section overlay bg-cover" data-background="{{ asset('assets/images/banner-4.png') }}">
        <div class="container">
            <div class="hero-slider">
                <!-- slider item -->
                @foreach ($banner as $item)
                    <div class="hero-slider-item" data-background="{{ Storage::url($item->gambar_banner) }}">
                        <div class="row">
                            <div class="col-md-8">
                                <h1 class="title-slider text-white" data-animation-out="fadeOutRight" data-delay-out="5"
                                    data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".1">
                                    {{ $item->keterangan }}
                                </h1>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- slider item -->
            </div>
        </div>
    </section>
    <!-- /hero slider -->

    <!-- Pengumuman -->
    <div class="news-updates">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="card-pengumuman">
                        <div class="section-heading d-flex align-items-center justify-content-between">
                            <h2 class="text-black">Pengumuman</h2>
                            <a href="{{ route('home.pengumuman') }}" class="btn btn-primary-outline">Selengkapnya<i
                                    class="fas fa-angle-double-right mx-2"></i></a>
                        </div>
                        @foreach ($pengumuman as $item)
                            <div class="post-entry-big mb-1">
                                <div class="icon-tanggal me-2">
                                    <div class="meta-date text-center">
                                        <span class="day">{{ date('d', strtotime($item->tgl_publish)) }}</span>
                                        <span class="mos">{{ date('M', strtotime($item->tgl_publish)) }}</span>
                                        <span class="yr">{{ date('Y', strtotime($item->tgl_publish)) }}</span>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <div class="post-heading">
                                        <a href="{{ route('pengumuman.detail', $item->slug_pengumuman) }}"
                                            data-bs-toggle="tooltip" data-bs-placement="tooltip"
                                            title="{{ $item->judul_pengumuman }}">{{ $item->judul_pengumuman }}
                                        </a>
                                    </div>
                                    <p>Baca detail..</p>
                                    <p class="details">
                                        <span class="details-item time"><i class="fas fa-eye ms-1"></i>
                                            {{ $item->view }}</span>
                                        <span class="details-item time "><i class="fas fa-clock"></i>
                                            {{ time_elapsed_string($item->created_at) }}</span>
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="card-pengumuman">
                        <div class="section-heading d-flex align-items-center justify-content-between">
                            <h2 class="text-black">Event Kampus</h2>
                            <a href="{{ route('event') }}" class="btn btn-primary-outline">Selengkapnya<i
                                    class="fas fa-angle-double-right mx-2"></i></a>
                        </div>
                        <div class="owl-slide-3 owl-carousel">
                            @foreach ($event as $item)
                                <div class="course-1-item">
                                    <figure class="thumbnail">
                                        <a href="{{ route('event.detail', $item->slug) }}"><img
                                                src="{{ Storage::url($item->image) }}" alt="Image"
                                                class="img-fluid"></a>
                                    </figure>
                                    <div class="course-1-content">
                                        <h2> <a
                                                href="{{ route('event.detail', $item->slug) }}">{{ Str::limit($item->title, 45, '...') }}</a>
                                        </h2>
                                        <p class="desc">
                                            {!! Str::limit(strip_tags($item->content), $limit = 50, $end = '...') !!}</p>
                                        <div class="link">
                                            <a href="{{ route('event.detail', $item->slug) }}"
                                                class="btn btn-primary-outline text-center">Baca
                                                Selanjutnya</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Pengumuman -->

    <!-- Alumni -->
    {{-- <section class="section-sm ">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex align-items-center section-title justify-content-between">
                        <h2 class="mb-0 text-nowrap me-3">Testimonial Alumni</h2>
                        <div class="border-top w-50 border-primary d-none d-md-block d-sm-block"></div>
                        <a href="{{ route('alumni') }}" class="btn btn-primary-outline">Lihat Semua</a>
                    </div>
                </div>
            </div>
            <!-- course list -->
            <div class="row justify-content-center">
                <!-- course item -->
                @foreach ($alumni as $item)
                    <div class="testimoni-alumni hover-shadow" data-aos="fade-up">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img"
                                style="background-image: url({{ Storage::url($item->gambar) }});">
                            </div>
                        </div>
                        <p class="text-center">Alumni</p>
                        <div class="card-alumni">
                            <h4 class="title-alumni">{{ $item->nama_alumni }}, A.Md</h4>
                            <h3 class="title-work mb-1">Bekerja Sebagai {{ $item->tempat_bekerja }}</h3>
                        </div>
                        <div class="video text-center">
                            <a class="icon-video venobox" href="{{ $item->link }}" data-vbtype="video">
                                <i class="fas fa-play"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
                <!-- course item -->
            </div>
            <!-- /course list -->
        </div>
    </section>
    <!-- /Alumni --> --}}

    <!-- Video -->
    <section class="section-sm">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex align-items-center section-title justify-content-between">
                        <h2 class="mb-0 text-nowrap me-3">Video Kampus</h2>
                    </div>
                </div>
            </div>
            <!-- course list -->
            <div class="row justify-content-between">
                <!-- course item -->
                <div class="col-lg-6 col-md-6 mb-3 position-relative">

                    <iframe width="560" height="315" src="https://www.youtube.com/embed/T7f24B5Wy-w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                </div>
                <div class="col-lg-6 col-md-6 mb-3 position-relative">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/EhI4S_qVmFI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <!-- course item -->
            </div>
            <!-- /course list -->
        </div>
    </section>
    <!-- /Video -->
@endsection

@push('script')
    <script>
        AOS.init();
    </script>
@endpush
