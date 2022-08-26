@extends('layouts.index')
@section('heading', 'Berita Kampus')
@section('page')
    <span class="current">Berita</span>
@endsection
@section('content')

    {{-- Informasi berita  begin --}}
    <section class="berita__kampus">
        <div class="container">
            <div class="row">
                @foreach ($berita as $item)
                    <div class="col-md-6 col-lg-4 ">
                        <div class="blog-entry">
                            <div class="course-1">
                                <div class="thumnail">
                                    <a href="{{ route('berita.detail', $item->slug_berita) }}"><img
                                            src="{{ Storage::url($item->gambar) }}" alt="Image" class="img-fluid"></a>
                                    <div class="meta-date text-center p-2">
                                        <span class="day">{{ tanggal('tanggal', $item->publish) }}</span>
                                        <span class="mos">{{ tanggal('bulan', $item->publish) }}</span>
                                        <span class="yr">{{ tanggal('tahun', $item->publish) }}</span>
                                    </div>
                                </div>
                                <div class="text bg-white berita p-4">
                                    <h3 class="heading"><a
                                            href="{{ route('berita.detail', $item->slug_berita) }}">{{ $item->judul_berita }}</a>
                                    </h3>
                                    <p><?= Str::limit(strip_tags($item->isi), 80, $end = '...') ?></p>
                                            <div class="d-flex align-items-center mt-auto ">
                                                <p class="mb-0"><a href="{{ route('berita.detail', $item->slug_berita) }}"
                                                        class="btn-read btn-sm btn-more">Read
                                                        More <span class="fa fa-arrow-right"></span></a></p>
                                                <p class="ms-auto mb-0">
                                                    <a href="#" class="me-2">Admin</a>
                                                    <a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>

            {{-- Informasi berita  end --}}

@endsection
