@extends('layouts.index')
@section('heading', 'Event Kampus')
@section('page')
    <span class="current">Event</span>
@endsection
@section('content')

    {{-- Informasi berita  begin --}}
    <section class="berita__kampus">
        <div class="container">
            <div class="row">
                @foreach ($event as $item)
                    <div class="col-md-6 col-lg-4 ">
                        <div class="blog-entry">
                            <div class="course-1">
                                <div class="thumnail">
                                    <a href="{{ route('berita.detail', $item->slug) }}"><img
                                            src="{{ Storage::url($item->image) }}" alt="Image" class="img-fluid"></a>
                                    <div class="meta-date text-center p-2">
                                        <span class="day">{{ tanggal('tanggal', $item->publish_at) }}</span>
                                        <span class="mos">{{ tanggal('bulan', $item->publish_at) }}</span>
                                        <span class="yr">{{ tanggal('tahun', $item->publish_at) }}</span>
                                    </div>
                                </div>
                                <div class="text bg-white event p-4">
                                    <h3 class="heading"><a
                                            href="{{ route('event.detail', $item->slug) }}">{{ $item->title }}</a>
                                    </h3>
                                    <p><?= Str::limit(strip_tags($item->content), 80, $end = '...') ?></p>
                                            <div class="d-flex align-items-center mt-auto ">
                                                <p class="mb-0"><a href="{{ route('event.detail', $item->slug) }}"
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
