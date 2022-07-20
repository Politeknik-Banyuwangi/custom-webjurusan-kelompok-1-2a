@extends('layouts.index')
@section('heading', 'Organisasi poliwangicom')
@section('page')
    <a href="" class="">Organisasi</a>
    <span class="mx-3 fas fa-angle-right"></span>
    <span class="current">Dosen</span>
@endsection
@section('content')

    {{-- Dosen Begin --}}
    <div class="team ftco-section">
        <div class="team_background p-1">
            <div class="container">
                <div class="row">
                    <div class="section_title_container text-center">
                        <h2 class="section_title">Staff poliwangicom</h2>
                    </div>
                </div>
                <div class="row team_row justify-content-center">
                    <!-- Team Item -->
                    @foreach ($dosen as $item)
                        <div class="col-lg-3 col-md-6 team_col">
                            <div class="team_item">
                                <div class="team_image"><img src="{{ Storage::url($item->gambar) }}" alt="">
                                </div>
                                <div class="team_body">
                                    <div class="team_title"><a href="#">{{ $item->nama_staff }}</a></div>
                                    <div class="team_subtitle">{{ $item->jabatan }}</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    {{-- Dosen End --}}
@endsection
