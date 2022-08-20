@extends('layout_admin.template')
@section('heading', 'Data Event')

@section('page')
    <li class="breadcrumb-item active">Event Page</li>
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
                                        <th>Judul</th>
                                        <th>Content</th>
                                        <th>Gambar</th>
                                        <th>Waktu Mulai</th>
                                        <th>Waktu Selesai</th>
                                        <th>Aktif</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($event as $row)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $row->title }}</td>
                                            <td>{{ $row->content }}</td>
                                            <td> <img src="{{ Storage::url($row->image) }}" width="80px"
                                                    class="img-thumbnail">
                                            <td>{{ $row->start_time }}</td>
                                            <td>{{ $row->end_time }}</td>
                                            <td>{{ $row->is_active }}</td>

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
        $("#event").addClass("active");

    </script>

@endsection
