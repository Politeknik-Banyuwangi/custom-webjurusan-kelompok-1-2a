@extends('layout_admin.template')
@section('heading', 'Banner')

@section('page')
    <li class="breadcrumb-item active">Banner</li>
@endsection
@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{ route('banner.update', $banner->id_banner) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="gambar_banner">Pilih File Banner</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file"
                                                class="custom-file-input  @error('gambar_banner') is-invalid @enderror"
                                                name="gambar_banner">
                                            <label class="custom-file-label" for="gambar_banner">Pilih File</label>
                                        </div>
                                    </div>
                                    <div class="text-danger">
                                        @error('gambar_banner')
                                            Gambar tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="keterangan">Keterangan </label>
                                    <textarea name="keterangan"
                                        class="form-control @error('keterangan') is-invalid @enderror" rows="5"
                                        placeholder="Keterangan">{{ $banner->keterangan }}</textarea>
                                    <div class="text-danger">
                                        @error('keterangan')
                                            Judul tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="#" name="kembali" class="btn btn-default" id="back"><i
                                        class='nav-icon fas fa-arrow-left'></i> &nbsp; Kembali</a> &nbsp;
                                <button type="submit" class="btn btn-primary float-right">Simpan</button>
                            </div>
                            <!-- /.card-body -->
                        </form>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-6 mt">
                        <div class="mt-3">
                            <h3 class="lead">Gambar pada saat ini</h3>
                            <img src="{{ Storage::url($banner->gambar_banner) }}" class="img img-thumbnail" alt=""
                                width="80%" />
                        </div>
                    </div>
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
                window.location = "{{ route('banner.index') }}";
            });
        });

        $(document).ready(function() {
            bsCustomFileInput.init();
        });

        $("#banner").addClass("active");

    </script>

@endsection
