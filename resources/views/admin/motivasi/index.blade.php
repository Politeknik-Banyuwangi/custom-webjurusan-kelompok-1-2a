@extends('layout_admin.template')
@section('heading', 'Motivasi')

@section('page')

@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a class="btn btn-success" href="{{ route('motivasi.create') }}"><i
                                    class="nav-icon fas fa-folder-plus"></i> &nbsp;
                                Tambah</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Motivasi</th>
                                        <th>Gambar</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($motivasi as $quotes)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td> <img src="{{ Storage::url($quotes->filepond) }} " alt="" width="80px"
                                                    class="img-thumbnail"> </td>
                                            <td>{{ $quotes->name }}</td>
                                            <td>{{ $quotes->qutes }} </td>
                                            <td>
                                                <form action="{{ route('motivasi.destroy', $quotes->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a class="btn btn-info btn-sm"
                                                        href="{{ route('motivasi.edit', $quotes->id) }}"><i
                                                            class="fas fa-edit"></i>
                                                        Edit</a>

                                                    <button type="submit" class="btn btn-danger btn-sm"> <i
                                                            class="fas fa-trash"></i>
                                                        Delete </button>
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
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection
