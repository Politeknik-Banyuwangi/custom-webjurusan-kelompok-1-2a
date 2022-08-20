@extends('layout_admin.template')
@section('heading', 'Data Dosen')

@section('page')
    <li class="breadcrumb-item active">Dosen Page</li>
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
                                    <tr>
                                        <th>No.</th>
                                        <th>NIP</th>
                                        <th>Nama Dosen</th>
                                        <th>Gambar</th>
                                        <th>Deskripsi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dosen as $row)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $row->nip }}</td>
                                            <td>{{ $row->name }}</td>
                                            <td> <img src="{{ Storage::url($row->image) }}" width="80px"
                                                    class="img-thumbnail">
                                            <td>{{ $row->description }}</td>
                                            </td>
                                            <td>
                                                {{-- <form action="{{ route('berita.destroy', $->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger btn-sm"><i
                                                            class="mr-2 nav-icon fas fa-trash-alt"></i>Hapus</button>
                                                </form> --}}
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
        $("#dosen").addClass("active");

    </script>

@endsection
