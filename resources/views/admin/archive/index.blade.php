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
                                {{-- <a href="{{ route('berita.create') }}" class="btn btn-primary btn-sm">
                                    <i class="nav-icon fas fa-folder-plus"></i> &nbsp; Tambah Berita
                                </a> --}}
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
@endsection

@section('script')
    <script type="text/javascript">
        $("#archive").addClass("active");

    </script>

@endsection