@extends('layout_admin.template')
@section('heading')
    <h1 class="lead">Pengumuman</h1>
@endsection
@section('page')
    <li class="breadcrumb-item active">Pengumuman</li>
@endsection
@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <a href="{{ route('admin.pengumuman.create') }}" type="button"
                                    class="btn btn-primary btn-sm">
                                    <i class="nav-icon fas fa-folder-plus"></i> &nbsp; Tambah Data Pengumuman
                                </a>
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th width="5%">No.</th>
                                        <th width="60%">Judul</th>
                                        {{-- <th width="50%">Isi</th> --}}
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pengumuman as $data)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $data->judul_pengumuman }}</td>
                                            <td>
                                                <form action="{{ route('admin.pengumuman.destroy', $data->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('admin.pengumuman.edit', $data->id) }}"
                                                        class="btn btn-success btn-sm"><i
                                                            class="nav-icon fas fa-eye"></i>Details
                                                    </a>
                                                    <a href="{{ route('admin.pengumuman.edit', $data->id) }}"
                                                        class="btn btn-success btn-sm"><i
                                                            class="nav-icon fas fa-edit"></i>Edit
                                                    </a>

                                                    <button class="btn btn-danger btn-sm"><i
                                                            class="nav-icon fas fa-trash-alt"></i>Hapus</button>
                                                </form>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <!-- Extra large modal -->
    {{-- <div class="modal fade bd-example-modal-md tambah-pengumuman" tabindex="-1" role="dialog"
        aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Pengumuman</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.pengumuman.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="judul">Judul </label>
                                <input type="text" name="judul" value=""
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
                                <textarea name="keterangan" class="form-control @error('keterangan') is-invalid @enderror"
                                    rows="3" placeholder="Keterangan ..."></textarea>
                                <div class="text-danger">
                                    @error('keterangan')
                                        Keterangan tidak boleh kosong.
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="user_id">Kepala Bagian</label>
                                <select name="user_id" class="form-control @error('user_id') is-invalid @enderror">
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
                                        <input type="file" class="custom-file-input" name="file_berkas">
                                        <label class="custom-file-label" for="file_berkas">Pilih File</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i
                                    class='nav-icon fas fa-arrow-left'></i> &nbsp; Kembali</button>
                            <button type="submit" class="btn btn-primary"><i class="nav-icon fas fa-save"></i> &nbsp;
                                Tambahkan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}

@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            bsCustomFileInput.init();
        });
        $("#pengumuman").addClass("active");

    </script>

@endsection
