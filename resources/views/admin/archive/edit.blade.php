@extends('layout_admin.template')
@section('heading', 'Edit Archive')
@section('page')
     <li class="breadcrumb-item "><a href="{{ route('archive.index') }}">archive</a></li>
    <li class="breadcrumb-item active">Edit archive</li>
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
                        <form action="{{ route('archive.update', $archive->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Nama </label>
                                    <input type="text" name="name" value="{{ $archive->name }}"
                                        class="form-control @error('name') is-invalid @enderror"
                                        placeholder="Enter Nama ">
                                    <div class="text-danger">
                                        @error('name')
                                            Judul tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="description">Deskripsi</label>
                                    <textarea name="description" value=""
                                        class="form-control textarea @error('description') is-invalid @enderror" rows="3"
                                        placeholder="description ...">{{ $archive->description }}</textarea>
                                    <div class="text-danger">
                                        @error('description') Deskripsi tidak boleh kosong. @enderror
                                    </div>
                                </div>
                                {{-- <div class="form-group">
                                    <label for="user_id">Kepala Bagian</label>
                                    <select name="user_id" value="{{ old('user_id') }}"
                                        class="form-control @error('user_id') is-invalid @enderror">
                                        <option value="{{ $archive->user_id }}"> {{ $archive->user_id }}</option>
                                        <option value="1">Kaprodi</option>
                                        <option value="2">BAAK</option>
                                        <option value="3">Kemahasiswaan</option>
                                    </select>
                                    <div class="text-danger">
                                        @error('user_id')
                                            Kepala bagian tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div> --}}
                                <div class="form-group">
                                    <label for="file_berkas">Pilih File</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file"
                                                class="custom-file-input @error('file') is-invalid @enderror"
                                                name="file_berkas">
                                            <label class="custom-file-label" for="file">Pilih File</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer justify-content-between">
                                <a href="{{ route('archive.index') }}" class="btn btn-default"><i
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
        $("#archive").addClass("active");

    </script>

@endsection
