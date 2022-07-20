@extends('layout_admin.template')
@section('heading', 'User Management')

@section('page')
    <li class="breadcrumb-item active">Edit User</li>
@endsection
@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <form action="{{ route('users.update', $user->id) }}" enctype="multipart/form-data"
                                method="post" accept-charset="utf-8">
                                @csrf
                                @method('patch')
                                <div class="form-group row">
                                    <label class="col-sm-3 control-label text-right">Nama lengkap</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="name" class="form-control" placeholder="Nama lengkap"
                                            value="{{ $user->name }} {{ old('name') }}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 control-label text-right">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" name="email" class="form-control" placeholder="Email"
                                            value="{{ $user->email }}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 control-label text-right">Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" name="new_password" class="form-control"
                                            placeholder="New_password" value="{{ old('new_password') }}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 control-label text-right">Level Hak Akses</label>
                                    <div class="col-sm-9">
                                        <select name="role_id" class="form-control">
                                            <option value=""> Pilih Level</option>
                                            @foreach ($roles as $role)
                                                <option value="{{ $role->id }}"
                                                    {{ $role->id == $user->role_id ? 'selected' : '' }}>
                                                    {{ $role->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 control-label text-right"></label>
                                    <div class="col-sm-9">
                                        <div class="form-group pull-right btn-group">
                                            <button type="submit" class="btn btn-primary float-right">Simpan</button>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
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
    <script type="text/javascript">
        $("#mastermanagement").addClass("menu-open");
        $("#usermanagement").addClass("active");
        $("#users").addClass("active");

    </script>

@endsection
