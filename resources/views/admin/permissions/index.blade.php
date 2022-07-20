@extends('layout_admin.template')
@section('heading', 'Permissions')

@section('page')
    <li class="breadcrumb-item active">Permissions</li>
@endsection
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                    data-target="#tambah">
                                    <i class="nav-icon fas fa-folder-plus"></i> &nbsp; Tambah
                                </button>
                            </h3>
                            @include('admin/permissions/tambah')
                        </div>
                        <div class="card-body">
                            <div class="table-responsive mailbox-messages">
                                <div class="table-responsive mailbox-messages">
                                    <table id="example1" class="display table table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr class="bg-info">
                                                <th width="3%">No</th>
                                                <th width="20%">Permission</th>
                                                <th width="20%">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($permissions as $permission)
                                                <tr>
                                                    <td class="text-center">{{ $loop->iteration }}</td>
                                                    <td>{{ $permission->name }}</td>
                                                    <td>
                                                        <form action="{{ route('permission.destroy', $permission->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('delete')

                                                            <a href="{{ route('permission.edit', $permission->id) }}"
                                                                class="btn btn-warning btn-sm"><i
                                                                    class="fa fa-edit"></i>Edit</a>
                                                            <button type="submit"
                                                                class="btn btn-danger btn-sm  delete-link">
                                                                <i class="fa fa-trash"></i>Hapus</button>

                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@section('script')
    <script>
        $("#mastermanagement").addClass("menu-open");
        $("#usermanagement").addClass("active");
    </script>

@endsection
