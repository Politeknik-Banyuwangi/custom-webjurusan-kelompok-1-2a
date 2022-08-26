@extends('layout_admin.template')
@section('heading', 'Data Industri dan Kerjasama')

@section('page')
<li class="breadcrumb-item active">Industri Page</li>
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
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr class="bg-info">
                                    <th>No.</th>
                                    <th>Id Industries</th>
                                    <th>Nama</th>
                                    <th>Logo</th>
                                    <th>Region</th>
                                    <th>Address</th>
                                    <th>Link</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cooperation as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $row->is_industries }}</td>
                                    <td>{{ $row->name }}</td>
                                    <td> <img src="{{ Storage::url($row->logo) }}" width="80px" class="img-thumbnail">
                                    <td>{{ $row->region }}</td>
                                    <td>{{ $row->address }}</td>
                                    <td>{{ $row->link }}</td>

                                    </td>
                                    <td>
                                        <form action="{{ route('cooperation.destroy',$row->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <a href="{{ route('cooperation.edit', ($row->id)) }}"
                                                class="btn btn-warning btn-sm"><i class="nav-icon fas fa-edit"></i>
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

<!-- Extra large modal -->
<div class="modal fade bd-example-modal-md bd-example-modal-lg" tabindex="-1" role="dialog"
    aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Data Industri</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('cooperation.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="name" value="{{ old('name') }}"
                                class="form-control  @error('name')is-invalid @enderror " placeholder="Enter Name">
                            <div class="text-danger">
                                 @error('name')
                               Data Nama tidak boleh kosong.
                            @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="gambar">Logo</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input  @error('logo') is-invalid @enderror"
                                        name="logo">
                                    <label class="custom-file-label" for="image">Pilih File</label>
                                </div>
                            </div>
                            <div class="text-danger">
                                @error('logo')
                                    Gambar logo tidak boleh kosong.
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama">Region</label>
                            <input type="text" name="region" value="{{ old('region') }}"
                                class="form-control  @error('region')is-invalid @enderror " placeholder="Enter region">
                            <div class="text-danger">
                                @error('region')
                                Isian region tidak boleh kosong.
                            @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama">Address</label>
                            <input type="text" name="address" value="{{ old('address') }}"
                                class="form-control  @error('address')is-invalid @enderror " placeholder="Enter address">
                            <div class="text-danger">
                                @error('address')
                                Isian address tidak boleh kosong.
                            @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama">Link</label>
                            <input type="text-area" name="link" value="{{ old('link') }}"
                                class="form-control  @error('link')is-invalid @enderror " placeholder="http://www.google.com">
                            <div class="text-danger">
                                @error('link')
                                link tidak boleh kosong.
                            @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama">Id Industri</label>
                            <input type="text" name="is_industries" value="{{ old('is_industries') }}"
                                class="form-control  @error('is_industries')is-invalid @enderror" placeholder="Enter Industri">
                            <div class="text-danger">
                                @error('is_industries')
                                Isian industri tidak boleh kosong.
                            @enderror
                            </div>
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

        $("#cooperation").addClass("active");

    </script>

@endsection
