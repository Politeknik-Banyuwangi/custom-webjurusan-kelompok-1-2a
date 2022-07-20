@extends('layout_admin.template')
@section('heading', 'Edit permision role')
@section('page')
    <li class="breadcrumb-item active">User Akses</li>
@endsection
@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-8">
                        <!-- general form elements -->
                        <div class="card-body">
                            <form action="{{ route('roles.update', $role->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('patch')
                                <div class="form-group">
                                    <label for="name">User Akses *</label>
                                    <input type="text" name="name"
                                        value="{{ old('title', isset($role) ? $role->name : '') }}"
                                        class="form-control @error('name') is-invalid @enderror" placeholder="Admin">
                                    <div class="text-danger">
                                        @error('name')
                                            User akses tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="permissions">Permissions *</label>
                                    <select name="permissions[]" id="permissions" class="form-control select2"
                                        multiple="multiple" data-placeholder="Pilih akses">
                                        @foreach ($permissions as $id => $permissions)
                                            <option value="{{ $id }}"
                                                {{ in_array($id, old('permissions', [])) || (isset($role) && $role->permissions->contains($id)) ? 'selected' : '' }}>
                                                {{ $permissions }}</option>
                                        @endforeach
                                    </select>
                                    <div class="text-danger">
                                        @error('permissions')
                                            Permissions tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="d-flex justify-content-between">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <button type="button" class="btn btn-default"><i
                                            class='nav-icon fas fa-arrow-left'></i>
                                        &nbsp; Kembali</button>
                                </div>
                            </form>
                        </div>
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
    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()
        })
        $("#mastermanagement").addClass("menu-open");
        $("#usermanagement").addClass("active");
    </script>

@endsection
