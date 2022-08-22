@extends('layout_admin.template')
@section('heading', 'Data Industri dan Kerjasama')

@section('page')
    <li class="breadcrumb-item active">Industri Page</li>
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
                                        <th>Logo</th>
                                        <th>Region</th>
                                        <th>Address</th>
                                        <th>Link</th>
                                        <th>Industries</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cooperation as $row)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $row->name }}</td>
                                            <td> <img src="{{ Storage::url($row->logo) }}" width="80px"
                                                    class="img-thumbnail">
                                            <td>{{ $row->region }}</td>
                                            <td>{{ $row->address }}</td>
                                            <td>{{ $row->link }}</td>
                                            <td>{{ $row->is_industries }}</td>
                                            </td>
                                            <td>
                                                 <form action="{{-- route('cooperation.destroy',$->id) --}}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{-- route('cooperation.edit',$row->id) --}}"
                                                        class="btn btn-warning btn-sm"><i
                                                            class="nav-icon fas fa-edit"></i>
                                                    </a>
                                                    <button class="btn btn-danger btn-sm"><i
                                                            class=" nav-icon fas fa-trash-alt"></i></button>
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
        $("#cooperation").addClass("active");

    </script>

@endsection
