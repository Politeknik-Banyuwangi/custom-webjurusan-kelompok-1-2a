@extends('layout_admin.template')
@section('heading', 'Permission')

@section('page')
    <li class="breadcrumb-item active">Edit permission</li>
@endsection
<!-- Main content -->
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <form action="{{ route('permission.update', $permission->id) }}" method="post"
                                accept-charset="utf-8">
                                @csrf
                                @method('patch')
                                <div class="form-group">
                                    <label for="name">Permissions</label>
                                    <input type="name" name="name"
                                        value="{{ old('name', isset($permission) ? $permission->name : '') }}"
                                        class="form-control @error('name') is-invalid @enderror"
                                        placeholder="permission_show" required>
                                    <div class="text-danger">
                                        @error('name')
                                            Permission tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-group pull-right btn-group">
                                        <button type="submit" class="btn btn-primary float-right">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
        </div>
    </section>
    <!-- /.content -->
@endsection
@section('script')
    <script>
        $("#mastermanagement").addClass("menu-open");
        $("#usermanagement").addClass("active");
    </script>

@endsection
