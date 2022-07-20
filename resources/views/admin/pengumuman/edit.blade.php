@extends('layout_admin.template')
@section('heading', 'Edit Pengumuman')
@section('page')
    <li class="breadcrumb-item "><a href="{{ route('pengumuman') }}">Pengumuman</a></li>
    <li class="breadcrumb-item active">Edit Pengumuman</li>
@endsection
@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <!-- form start -->
                        <form action="{{ route('admin.pengumuman.update', $pengumuman->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="judul">Judul </label>
                                    <input type="text" name="judul" value="{{ $pengumuman->judul_pengumuman }}"
                                        class="form-control @error('judul') is-invalid @enderror"
                                        placeholder="Judul Pengumuman">
                                    <div class="text-danger">
                                        @error('judul')
                                            Judul tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="keterangan">Keterangan</label>
                                    <textarea name="keterangan" value=""
                                        class="form-control textarea @error('keterangan') is-invalid @enderror" rows="3"
                                        placeholder="Keterangan ...">{{ $pengumuman->isi }}</textarea>
                                    <div class="text-danger">
                                        @error('keterangan') Keterangan tidak boleh kosong. @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="user_id">Kepala Bagian</label>
                                    <select name="user_id" value="{{ old('user_id') }}"
                                        class="form-control @error('user_id') is-invalid @enderror">
                                        <option value="{{ $pengumuman->user_id }}"> {{ $pengumuman->user_id }}</option>
                                        <option value="1">Kaprodi</option>
                                        <option value="2">BAAK</option>
                                        <option value="3">Kemahasiswaan</option>
                                    </select>
                                    <div class="text-danger">
                                        @error('user_id')
                                            Kepala bagian tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="file_berkas">Pilih File</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file"
                                                class="custom-file-input @error('file_berkas') is-invalid @enderror"
                                                name="file_berkas">
                                            <label class="custom-file-label" for="file_berkas">Pilih File</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer justify-content-between">
                                <a href="{{ route('pengumuman') }}" class="btn btn-default"><i
                                        class='nav-icon fas fa-arrow-left'></i>
                                    &nbsp; Kembali</a>
                                <button type="submit" class="btn btn-primary float-right">Simpan</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            bsCustomFileInput.init();
        });
        $("#pengumuman").addClass("active");

    </script>

@endsection
