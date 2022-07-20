@extends('layout_admin.template')
@section('heading')
    <h1>Form Pengumuman</h1>
@endsection
@section('page')
    <li class="breadcrumb-item active">Pengumuman</li>
@endsection
@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-8">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        {{-- @if (Session::Has('success'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('success') }}
                            </div>
                        @endif --}}
                        <!-- form start -->
                        <form action="{{ route('admin.pengumuman.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="judul">Judul </label>
                                    <input type="text" name="judul" value="{{ old('judul') }}"
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
                                    <textarea name="keterangan" class="textarea @error('keterangan') is-invalid @enderror"
                                        rows="3" placeholder="Keterangan ...">{{ old('keterangan') }}</textarea>
                                    <div class="text-danger">
                                        @error('keterangan')
                                            Keterangan tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
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

                            <div class="card-footer d-flex justify-content-between">
                                <button type="button" class="btn btn-default"><i class='nav-icon fas fa-arrow-left'></i>
                                    &nbsp; Kembali</button>
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
        $("#pengumuman").addClass("active");

    </script>

@endsection
