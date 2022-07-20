@extends('layouts.index')
@section('heading', 'Blog Kampus')
@section('page')
    <a href="{{ route('blog') }}" class="text-capitalize">Blog</a>
    <span class="mx-3 fas fa-angle-right"></span>
    <span class="current">{{ $blog->title }} </span>
@endsection
@section('content')
    {{-- Informasi berita Detail  begin --}}
    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="berita-detail">
                        <h2 class="text-center">{{ $blog->tile }}</h2>
                        <div class="divider mx-auto mb-2"></div>
                        <ul class="list-inline text-center">
                            <li class="list-inline-item text-grey"> <b>Post:</b>
                                {{ $blog->user->name }}
                            </li>
                            <li class="list-inline-item text-grey"> <b>Kategori:</b>
                                <a href="/categories/{{ $blog->categori->slug }}"> {{ $blog->categori->name }}</a>
                            </li>
                            <li class="list-inline-item text-grey"><i class="fas fa-calendar-week me-2"> </i>:
                                {{ tanggal('hari', $blog->created_at) }}
                            </li>
                            <li class="list-inline-item text-grey"><i class="fas fa-clock ms-2"></i>
                                {{ time_elapsed_string($blog->created_at) }}</li>
                        </ul>
                        <img src="{{ Storage::url($blog->gambar) }}" alt="" class="img-fluid">
                        <p class="mt-2 px-3">{!! $blog->body !!}</p>
                        <span class="mx-3 fas fa-angle-left"><a href="{{ route('blog') }}"
                                class="text-capitalize px-2">Kembali
                                Ke Blog</a></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Informasi Detail  end --}}

    <section class="mb-3 testimony-section">
        <div class="container">
            <div class="row justify-content-center mb-3">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <h2 class="mb-4">Student Says About Us</h2>
                    <p>Separated they live in. A small river named Duden flows by their place and supplies it with the
                        necessary regelialia. It is a paradisematic country</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel">
                        <div class="item">
                            <div class="testimony-wrap d-flex">
                                <div class="user-img me-4"
                                    style="background-image: url({{ asset('assets/images/alumni/teacher-4.jpg') }})">
                                </div>
                                <div class="text ml-2">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="fas fa-quote-left"></i>
                                    </span>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                        Consonantia, there live the blind texts.</p>
                                    <p class="name">Racky Henderson</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
