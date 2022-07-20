@extends('layouts.index')
@section('heading', 'Berita Kampus')
@section('page')
    <a href="{{ route('berita') }}" class="text-capitalize">Alumni</a>
    <span class="mx-3 fas fa-angle-right"></span>
    <span class="current">{{ 'Testimoni Alumni' }} </span>
@endsection
@section('content')

    {{-- ALumni  begin --}}
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <!-- course item -->
                @foreach ($alumni as $item)
                    {{-- <div class="col-lg-3 col-sm-6 mb-5"> --}}
                    <div class="testimoni-alumni hover-shadow">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img" style="background-image: url({{ Storage::url($item->gambar) }});"></div>
                        </div>
                        <p class="text-center">Alumni </p>
                        <div class="card-alumni">
                            <h4 class="title-alumni">{{ $item->nama_alumni }}, A.Md</h4>
                            <h3 class="title-work mb-1">Bekerja Sebagai {{ $item->tempat_bekerja }}</h3>
                        </div>
                        <span> <a href="{{ $item->link }}"
                                class="btn text-center w-75 btn-primary-outline mb-2 btn-sm">Lihat
                                Video</a></span>

                    </div>
                    {{-- </div> --}}
                @endforeach
                <!-- course item -->
            </div>
            {{ $alumni->links('vendor.pagination.bootstrap-4') }}
            <!-- /course list -->
        </div>
    </section>
    {{-- ALumni   end --}}

@endsection
