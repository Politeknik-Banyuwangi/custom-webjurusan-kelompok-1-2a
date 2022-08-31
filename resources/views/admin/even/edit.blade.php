@extends('layout_admin.template')
@section('heading', 'Edit Data Industri')

@section('page')
    <li class="breadcrumb-item active">Ubah Data Event </li>
@endsection
@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{ route('event.update', $data->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="title">Judul</label>
                                    <input type="text" name="title" value="{{ $data->title }}"
                                        class="form-control @error('title') is-invalid @enderror"
                                        >
                                    <div class="text-danger">
                                        @error('title')
                                            Nama tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="content">Content</label>
                                    <input type="text" name="content" value="{{ $data->content }}"
                                        class="form-control @error('content') is-invalid @enderror"
                                       >
                                    <div class="text-danger">
                                        @error('content')
                                            Data content tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="gambar_banner">Pilih File</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file"
                                                class="custom-file-input  @error('image') is-invalid @enderror"
                                                name="image">
                                            <label class="custom-file-label" for="image">Pilih File</label>
                                        </div>
                                    </div>
                                    <div class="text-danger">
                                        @error('image')
                                            image tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="start_time">Waktu Mulai </label>
                                    <input type="date" name="start_time" value="{{ $data->start_time }}"
                                        class="form-control @error('start_time') is-invalid @enderror">
                                    <div class="text-danger">
                                        @error('start_time')
                                            Data tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="end_time">Waktu selesai </label>
                                    <input type="date" name="end_time" value="{{ $data->end_time }}"
                                        class="form-control @error('end_time') is-invalid @enderror">
                                    <div class="text-danger">
                                        @error('end_time')
                                            Data tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer justify-content-between">
                                <a href="#" name="kembali" class="btn btn-default" id="back"><i
                                        class='nav-icon fas fa-arrow-left'></i> &nbsp; Kembali</a> &nbsp;
                                <button type="submit" class="btn btn-success float-right">Update</button>
                            </div>
                        </form>

                    </div>
                    <div class="col-md-6 mt">
                        <div class="mt-3">
                            <h3 class="lead">Gambar pada saat ini</h3>
                            <img src="{{ Storage::url($data->image) }}" class="img img-thumbnail" alt="" width="50%" />
                        </div>
                    </div>
                </div>
                <!-- /.card -->
            </div>

            <!-- /.col -->
        </div>
        <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <!-- Extra large modal -->
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#back').click(function() {
                window.location = "{{ route('even.index') }}";
            });
        });

        $(document).ready(function() {
            bsCustomFileInput.init();
        });

        $("#Event").addClass("active");

    </script>

@endsection
