@extends('layout_admin.template')
@section('heading')
    <h1 class="lead">Create Data Event</h1>
@endsection

@section('page')
    <li class="breadcrumb-item active">Event Create</li>
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
                                    <label for="title">Judul Event </label>
                                    <input type="text" name="title" value="{{ old('title') }}"
                                        class="form-control @error('title') is-invalid @enderror"
                                        placeholder="title">
                                    <div class="text-danger">
                                        @error('title')
                                            Judul tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="isi">Content</label>
                                    <textarea class="textarea" name="content"
                                        placeholder="Place some text here">{{ old('content') }}</textarea>
                                    <div class="text-danger">
                                        @error('content')
                                            content tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group w-50">
                                    <label for="gambar">Pilih File</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file"
                                                class="custom-file-input @error('image') is-invalid @enderror"
                                                name="gambar">
                                            <label class="custom-file-label" for="image">Pilih File</label>
                                        </div>
                                    </div>
                                    <div class="text-danger">
                                        @error('image')
                                            gambar tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group w-50">
                                    <label for="gambar">Waktu Mulai</label>
                                    <div class="input-group">
                                            <input type="date"
                                                class="custom-date-input @error('start_time') is-invalid @enderror"
                                                name="start_time">
                                    </div>
                                    <div class="text-danger">
                                        @error('start_time')
                                            Data tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group w-50">
                                    <label for="gambar">Waktu Selesai</label>
                                    <div class="input-group">
                                            <input type="date"
                                                class="custom-date-input @error('end_time') is-invalid @enderror"
                                                name="end_time">
                                    </div>
                                    <div class="text-danger">
                                        @error('end_time')
                                            Data tidak boleh kosong.
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
