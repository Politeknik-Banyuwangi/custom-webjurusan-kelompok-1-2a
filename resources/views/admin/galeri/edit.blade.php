@extends('layout_admin.template')
@section('heading', 'Edit Galeri')

@section('page')
    <li class="breadcrumb-item active">Data Galeri</li>
@endsection
@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{ route('galeri.update', $data->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama_alumni">Judul </label>
                                    <input type="text" name="title" value="{{ $data->title }}"
                                        class="form-control @error('title') is-invalid @enderror"
                                        placeholder="nama_alumni Banner">
                                    <div class="text-danger">
                                        @error('title')
                                            Judul galeri tidak boleh kosong.
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
                                            Gambar tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mt">
                                    <div class="mt-3 mb-3">
                                        <h3 class="lead">Gambar pada saat ini</h3>
                                        <img src="{{ Storage::url($data->image) }}" class="img img-thumbnail" alt="" width="50%" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi </label>
                                    <input type="text" name="deskripsi" value="{{ $data->deskripsi }}"
                                        class="form-control @error('deskripsi') is-invalid @enderror"
                                        placeholder="nama_alumni Banner">
                                    <div class="text-danger">
                                        @error('deskripsi')
                                            Judul galeri tidak boleh kosong.
                                        @enderror
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
                window.location = "{{ route('galeri.index') }}";
            });
        });

        $(document).ready(function() {
            bsCustomFileInput.init();
        });

        $("#galeri").addClass("active");

    </script>

@endsection
