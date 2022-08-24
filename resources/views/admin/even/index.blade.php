@extends('layout_admin.template')
@section('heading', 'Data Event')

@section('page')
    <li class="breadcrumb-item active">Event Page</li>
@endsection
@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <a class="btn btn-success text-light" data-toggle="modal"
                            data-target=".bd-example-modal-lg">
                                <i class="nav-icon fas fa-folder-plus"></i> &nbsp; Add
                            </a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="display table table-bordered">
                                <thead>
                                    <tr class="bg-info">
                                        <th>No.</th>
                                        <th>Judul</th>
                                        <th>Content</th>
                                        <th>Gambar</th>
                                        <th>Waktu Mulai</th>
                                        <th>Waktu Selesai</th>
                                        <th>Aktif</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($event as $row)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $row->title }}</td>
                                            <td>{{ $row->content }}</td>
                                            <td> <img src="{{ Storage::url($row->image) }}" width="80px"
                                                    class="img-thumbnail">
                                            <td>{{ $row->start_time }}</td>
                                            <td>{{ $row->end_time }}</td>
                                            <td>{{ $row->is_active }}</td>

                                            <td>
                                                  <form action="{{-- route('delete.destroy',$row->id) --}}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{-- route('even.edit',$row->id) --}}"
                                                        class="btn btn-warning btn-sm"><i
                                                            class="nav-icon fas fa-edit"></i>
                                                    </a>
                                                    <button class="btn btn-danger btn-sm"><i
                                                            class=" nav-icon fas fa-trash-alt"></i></button>
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
<div class="modal fade bd-example-modal-md bd-example-modal-lg" tabindex="-1" role="dialog"
aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Tambah Data Event</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="{{-- route('even.store') --}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="nama">Judul</label>
                         <input type="text" name="title" value="{{ old('title') }}"
                            class="form-control {{-- @error('title')is-invalid@enderror --}}"
                            placeholder="Enter">
                        <div class="text-danger">
                            {{--@error('title')
                                Judul  tidak boleh kosong.
                            @enderror--}}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nama">Content</label>
                         <input type="text-area" name="content" value="{{ old('content') }}"
                            class="form-control {{-- @error('title')is-invalid@enderror --}}"
                            placeholder="Enter">
                        <div class="text-danger">
                            {{--@error('content')
                                Judul galeri tidak boleh kosong.
                            @enderror--}}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="image">Gambar</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input {{-- @error('image')is-invalid@enderror --}}"
                                    name="image">
                                <label class="custom-file-label" for="image">Pilih File</label>
                            </div>
                        </div>
                        <div class="text-danger">
                           {{-- @error('image')
                                Gambar tidak boleh kosong.
                            @enderror--}}
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="start_time">Waktu Mulai</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="date" class="custom-file-input {{-- @error('start_time')is-invalid@enderror --}}"
                                    name="start_time">
                                <label class="custom-file-label" for="start_time">Pilih File</label>
                            </div>
                        </div>
                        <div class="text-danger">
                           {{-- @error('start_time')
                                Data tanggal tidak boleh kosong.
                            @enderror--}}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="start_time">Waktu Selesai</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="date" class="custom-file-input {{-- @error('start_time')is-invalid@enderror --}}"
                                    name="end_time">
                                <label class="custom-file-label" for="start_time">Pilih File</label>
                            </div>
                        </div>
                        <div class="text-danger">
                            {{-- @error('start_time')
                                Data tanggal tidak boleh kosong.
                            @enderror --}}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="start_time">Active</label>

                    </div>




                </div>
                <!-- /.card-body -->
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i
                            class='nav-icon fas fa-arrow-left'></i> &nbsp; Cancel</button>
                    <button type="submit" class="btn btn-primary"><i class="nav-icon fas fa-save"></i> &nbsp;
                        Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection

@section('script')
<script type="text/javascript">
$(document).ready(function() {
    bsCustomFileInput.init();
});

$("#even").addClass("active");
</script>

@endsection

