@extends('layout_admin.template')
@section('heading')
    <h1 class="lead">Berita</h1>
@endsection

@section('page')
    <li class="breadcrumb-item active">Berita</li>
@endsection
@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <!-- left column -->
                <div class="col-md-10">
                    <!-- general form elements -->
                    <div class="card card-outline card-info">
                        <form action="{{ route('berita.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group w-50">
                                    <label for="judul_berita">Judul Berita </label>
                                    <input type="text" name="judul_berita" value="{{ old('judul_berita') }}"
                                        class="form-control @error('judul_berita') is-invalid @enderror"
                                        placeholder="judul_berita">
                                    <div class="text-danger">
                                        @error('judul_berita')
                                            Judul tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="isi">Isi Berita</label>
                                    <textarea class="textarea" name="isi"
                                        placeholder="Place some text here">{{ old('isi') }}</textarea>
                                    <div class="text-danger">
                                        @error('isi')
                                            isi tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group  w-50">
                                    <label for="user_id">Kepala Bagian</label>
                                    <select name="user_id" value="{{ old('user_id') }}"
                                        class="form-control @error('user_id') is-invalid @enderror">
                                        <option value="">-- Pilih Kepala Bagian --</option>
                                        <option value="1">Kaprodi</option>
                                        <option value="2">BAAK</option>
                                        <option value="2">Kemahasiswaan</option>
                                    </select>
                                    <div class="text-danger">
                                        @error('user_id')
                                            atuhor tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group w-50">
                                    <label for="gambar">Pilih File</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file"
                                                class="custom-file-input @error('gambar') is-invalid @enderror"
                                                name="gambar">
                                            <label class="custom-file-label" for="gambar">Pilih File</label>
                                        </div>
                                    </div>
                                    <div class="text-danger">
                                        @error('gambar')
                                            atuhor tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
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
        $("#berita").addClass("active");

        // Summernote

    </script>

@endsection
