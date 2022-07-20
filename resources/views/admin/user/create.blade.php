@extends('layout_admin.template')
@section('heading', 'Buat akses user')
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
                            <form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data"
                                accept-charset="utf-8">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Username *</label>
                                    <input type="text" name="name" value="{{ old('name') }}"
                                        class="form-control @error('name') is-invalid @enderror" placeholder="Username">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            Username tidak boleh kosong.
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="email">Email *</label>
                                    <input type="email" name="email" value="{{ old('email') }}"
                                        class="form-control @error('email') is-invalid @enderror" placeholder="Username">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="password">Password *</label>
                                    <input id="password" type="password" name="password"
                                        class="form-control @error('password') is-invalid @enderror"
                                        autocomplete="new-password" placeholder="Password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                <div class="form-group">
                                    <label for="password">Confirm Password *</label>
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" placeholder="Confirm Password" required
                                        autocomplete="new-password">
                                </div>


                                <div class="form-group">
                                    <label for="permissions">Role *</label>
                                    <span class="btn btn-info btn-xs select-all">Select all</span>
                                    <span class="btn btn-info btn-xs deselect-all">Deselect all</span></label>
                                    <select name="role_id" id="roles" class="form-control select2"
                                        data-placeholder="Pilih akses">
                                        <option value="">-- Roles Akses --</option>
                                        {{-- @foreach ($roles as $id => $roles)
                                            <option value="{{ $id }}"
                                                {{ in_array($id, old('role', [])) || (isset($user) && $user->roles->contains($id)) ? 'selected' : '' }}>
                                                {{ $roles }}</option>
                                        @endforeach --}}
                                        <option value=""> Pilih Level</option>
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->id }}"> {{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                    <div class="text-danger">
                                        @error('permissions')
                                            Role tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="d-flex justify-content-between">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <button type="button" class="btn btn-default"><i class='nav-icon fas fa-arrow-left'></i>
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
        $("#users").addClass("active");
    </script>

@endsection
