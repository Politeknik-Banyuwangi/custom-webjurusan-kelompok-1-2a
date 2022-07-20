@extends('layout_admin.template')
@section('heading', 'Roles')

@section('page')
    <li class="breadcrumb-item active">Roles</li>
@endsection
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                {{-- <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                    data-target="#tambah">
                                    <i class="nav-icon fas fa-folder-plus"></i> &nbsp; Tambah
                                </button> --}}
                                <a class="btn btn-success" href="{{ route('roles.create') }}"><i
                                        class="nav-icon fas fa-folder-plus"></i> &nbsp;
                                    Tambah</a>
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive mailbox-messages">
                                <div class="table-responsive mailbox-messages">
                                    <table id="example1" class="display table table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr class="bg-info">
                                                <th width="5%">ID </th>
                                                <th width="20%">User Level</th>
                                                <th width="20%">Role Permisions</th>
                                                <th>
                                                    &nbsp;
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($roles as $key => $role)
                                                <td class="text-center">{{ $loop->iteration }}</td>
                                                <td>{{ $role->name }}</td>
                                                <td width="50%">
                                                    @foreach ($role->permissions as $key => $item)
                                                        <span class="badge badge-info">{{ $item->name }}</span>
                                                    @endforeach
                                                </td>
                                                <td>
                                                    <form action="{{ route('roles.destroy', $role->id) }}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <div class="btn-group">
                                                            <a href="{{ route('roles.edit', $role->id) }}"
                                                                class="btn btn-warning btn-sm"><i
                                                                    class="fa fa-edit"></i></a>
                                                            <button class="btn btn-danger btn-sm  delete-link">
                                                                <i class="fa fa-trash"></i></button>
                                                        </div>
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
