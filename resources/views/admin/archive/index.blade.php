@extends('layout_admin.template')
@section('heading', 'Data Archive')

@section('page')
    <li class="breadcrumb-item active">Archive Page</li>
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
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                    data-target=".bd-example-modal-lg">
                                    <i class="nav-icon fas fa-folder-plus"></i> &nbsp; Tambah Data Arsip
                                </button>
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr class="bg-info">
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>Id User</th>
                                        <th>Deskripsi</th>
                                        <th>Tipe</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($archive as $row)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $row->name }}</td>
                                            <td>{{ $row->users_id }}</td>
                                            <td>{{ $row->description }}</td>
                                            <td>{{ $row->type }}</td>
                                            <td>{{ $row->status }}</td>
                                            <td>
                                                 <form action="{{-- route('archive.destroy',$->id) --}}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{-- route('archive.edit',$row->id) --}}"
                                                        class="btn btn-warning btn-sm"><i
                                                            class="nav-icon fas fa-edit"></i>
                                                    </a>
                                                    <button class="btn btn-danger btn-sm"><i
                                                            class="nav-icon fas fa-trash-alt"></i></button>
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
            <h4 class="modal-title">Tambah Data</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('archive.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">

                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" name="name" value="{{ old('name') }}"
                            class="form-control @error('name') is-invalid @enderror"
                            placeholder="Enter name">
                        <div class="text-danger">
                            @error('name')
                                Nama tidak boleh kosong.
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Id User</label>
                        <input type="text" name="users_id" value="{{ old('users_id') }}"
                            class="form-control @error('users_id') is-invalid @enderror"
                            placeholder="Enter name">
                        <div class="text-danger">
                            @error('users_id')
                               Id user tidak boleh kosong.
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="description">Deskripsi </label>
                        <textarea type="text" name="description" value="{{ old('description') }}"
                            class="form-control @error('description') is-invalid @enderror"
                            placeholder="Enter description"></textarea>
                    </div>

                </div>
                <!-- /.card-body -->
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i
                            class='nav-icon fas fa-arrow-left'></i> &nbsp; Kembali</button>
                    <button type="submit" class="btn btn-success"><i class="nav-icon fas fa-save"></i> &nbsp;
                        Update</button>
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

$("#archive").addClass("active");

</script>

@endsection
