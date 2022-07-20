@extends('layouts.index')
@section('heading', 'Pengumuman Kampus')
@section('page')
    <span class="current">Pengumuman </span>
@endsection
@section('content')

    {{-- Pengumuman  begin --}}
    <section class="content">
        <div class="container">
            <!-- Timelime example  -->
            <div class="row">
                <div class="col-lg-8">
                    <!-- The time line -->
                    <div class="timeline">
                        <!-- timeline time label -->
                        @foreach ($pengumuman as $item)
                            <div class="time-label">
                                <span class="bg-time">{{ date('d, M Y', strtotime($item->tgl_publish)) }}</span>
                            </div>
                            <!-- /.timeline-label -->
                            <!-- timeline item -->
                            <div>
                                <i class="fas fa-calendar-day bg-blue"></i>
                                <div class="timeline-item">
                                    <span class="time"><i class="fas fa-clock"></i>
                                        {{ time_elapsed_string($item->created_at) }}</span>
                                    <h3 class="timeline-header"><a
                                            href="{{ route('pengumuman.detail', $item->slug_pengumuman) }}">{{ $item->judul_pengumuman }}</a>
                                    </h3>

                                    <div class="timeline-body">
                                        {!! Str::words(strip_tags($item->isi), $limit = 20, $end = '...') !!}
                                        {!! Str::words(strip_tags($item->isi), $limit = 20, $end = '...') !!}

                                    </div>
                                    <div class="timeline-footer">
                                        <a href="{{ route('pengumuman.detail', $item->slug_pengumuman) }}"
                                            class="btn-1 btn-main-2 btn-icon btn-round-full">Baca Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                            <!-- END timeline item -->
                        @endforeach
                        <!-- timeline item -->
                    </div>
                    {{ $pengumuman->links('vendor.pagination.bootstrap-4') }}

                </div>
                <!-- /.col -->
                <div class="col-lg-4 sidebar mt-5">
                    <div class="sidebar-box">
                        <h3 class="lead pt-2">Popular Berita</h3>
                        @foreach ($berita as $item)
                            <div class="block-21 mb-4 d-flex">
                                <a class="blog-img me-2"
                                    style="background-image: url({{ Storage::url($item->gambar) }});"></a>
                                <div class="text">
                                    <h3 class="heading"><a href="#">{{ $item->judul_berita }}</a></h3>
                                    <div class="meta">
                                        <div><a href="#"><span class="fas fa-calendar"></span> {{ $item->created_at }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div><!-- END COL -->
            </div>
        </div>
        <!-- /.timeline -->

    </section>
    {{-- Pengumuman  end --}}



@endsection
