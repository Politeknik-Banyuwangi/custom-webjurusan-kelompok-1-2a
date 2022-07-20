@extends('layouts.index')
@section('heading', 'Blog Kampus')
@section('page')
    <span class="current">Blog Kampus</span>
@endsection
@section('content')

    {{-- Informasi berita  begin --}}
    <section class="berita__kampus">
        <div class="container">
            <div class="row">
                @foreach ($blog as $item)
                    <div class="col-md-6 col-lg-4 ">
                        <div class="blog-entry">
                            <div class="course-1">
                                <div class="thumnail">
                                    <a href="{{ route('blog.detail', $item->slug) }}"><img
                                            src="{{ Storage::url($item->gambar) }}" alt="Image" class="img-fluid"></a>
                                    <div class="meta-date text-center p-2">
                                        <span class="day">{{ tanggal('tanggal', $item->publish) }}</span>
                                        <span class="mos">{{ tanggal('bulan', $item->publish) }}</span>
                                        <span class="yr">{{ tanggal('tahun', $item->publish) }}</span>
                                    </div>
                                </div>
                                <div class="text bg-white berita p-4">
                                    <h3 class="heading"><a
                                            href="{{ route('blog.detail', $item->slug) }}">{{ $item->title }}</a>
                                    </h3>
                                    <p>{{ $item->excerpt }}</p>
                                    <div class="d-flex align-items-center mt-4">
                                        <p class="mb-0"><a href="{{ route('blog.detail', $item->slug) }}"
                                                class="btn-read btn-more">Read
                                                More <span class="fa fa-arrow-right"></span></a></p>
                                        <p class="ms-auto mb-0">
                                            <a href="#" class="me-2">{{ $item->user->name }}</a>
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

@section('script')
    <script type="text/javascript">
        $("#blog").addClass("active");
    </script>

@endsection
