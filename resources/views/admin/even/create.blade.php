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
                        <form action="{{ route('even.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group w-50">
                                    <label for="title">Judul Event </label>
                                    <input type="text" name="title" value="{{ old('title') }}"
                                        class="form-control @error('title') is-invalid @enderror"
                                        placeholder="Enter title">
                                    <div class="text-danger">
                                        @error('title')
                                            Judul tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="content">Content</label>
                                    <textarea class="textarea" name="content"
                                        placeholder="Place some text here">{{ old('content') }}</textarea>
                                    <div class="text-danger">
                                        @error('content')
                                            Content tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>
                                {{-- <div class="form-group  w-50">
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
                                            author tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div> --}}
                                <div class="form-group w-50">
                                    <label for="image">Pilih Gambar</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file"
                                                class="custom-file-input @error('image') is-invalid @enderror"
                                                name="image">
                                            <label class="custom-file-label" for="image">Pilih Gambar</label>
                                        </div>
                                    </div>
                                    <div class="text-danger">
                                        @error('image')
                                            Gambar terlalu besar atau format tidak didukung.
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="start_time">Waktu Mulai</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="date" class=" @error('start_time')is-invalid @enderror"
                                                name="start_time">
                                        </div>
                                    </div>
                                    <div class="text-danger">
                                        @error('start_time')
                                            Data tanggal tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="start_time">Waktu Selesai</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="date" class="  @error('end_time')is-invalid @enderror "
                                                name="end_time">
                                        </div>
                                    </div>
                                    <div class="text-danger">
                                         @error('end_time')
                                            Data tanggal tidak boleh kosong.
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
        $("#event").addClass("active");

        // Summernote

    </script>

@endsection
