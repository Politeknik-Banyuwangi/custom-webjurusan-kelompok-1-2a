@extends('layout_admin.template')
@section('heading', 'Edit Data Industri')

@section('page')
    <li class="breadcrumb-item active">Data Industri </li>
@endsection
@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{ route('cooperation.update', $data->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="name">Nama</label>
                                    <input type="text" name="name" value="{{ $data->name }}"
                                        class="form-control @error('name') is-invalid @enderror"
                                        placeholder="Enter name">
                                    <div class="text-danger">
                                        @error('name')
                                            Nama tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="gambar_banner">Pilih File</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file"
                                                class="custom-file-input  @error('logo') is-invalid @enderror"
                                                name="logo">
                                            <label class="custom-file-label" for="logo">Pilih File</label>
                                        </div>
                                    </div>
                                    <div class="text-danger">
                                        @error('logo')
                                            logo tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="region">Region </label>
                                    <input type="text" name="region" value="{{ $data->region }}"
                                        class="form-control @error('region') is-invalid @enderror"
                                        placeholder="Enter region">
                                    <div class="text-danger">
                                        @error('region')
                                            region tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="address">Address </label>
                                    <input type="text" name="address" value="{{ $data->address }}"
                                        class="form-control @error('address') is-invalid @enderror"
                                        placeholder="Enter address">
                                    <div class="text-danger">
                                        @error('address')
                                           Isian address tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="link">Link </label>
                                    <input type="text" name="link" value="{{ $data->link }}" class="form-control"
                                        placeholder="https://id.wikipedia.org">
                                </div>
                                <div class="form-group">
                                    <label for="is_industries">Id Industri </label>
                                    <input type="text" name="is_industries" value="{{ $data->is_industries }}"
                                        class="form-control @error('is_industries') is-invalid @enderror"
                                        placeholder="Enter id industries">
                                    <div class="text-danger">
                                        @error('is_industries')
                                            Id industri tidak boleh kosong.
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
                            <h3 class="lead">Logo pada saat ini</h3>
                            <img src="{{ Storage::url($data->logo) }}" class="img img-thumbnail" alt="" width="50%" />
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
                window.location = "{{ route('cooperation.index') }}";
            });
        });

        $(document).ready(function() {
            bsCustomFileInput.init();
        });

        $("#Cooperation").addClass("active");

    </script>

@endsection
