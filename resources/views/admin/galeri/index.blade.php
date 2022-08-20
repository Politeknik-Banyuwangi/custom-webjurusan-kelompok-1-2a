@extends('layout_admin.template')
@section('heading', 'Data Galeri')

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
                        <a class="btn btn-success" href="{{ route('galeri.create') }}">
                            <i class="nav-icon fas fa-folder-plus"></i> &nbsp; Tambah
                        </a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Gambar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                 @foreach ($galeri as $row)
                                    <tr>
                                        <td>
                                             {{ $loop->iteration }}
                                        </td>
                                        <td>
                                             {{ $row->title }}
                                        </td>
                                        <td>
                                             <img src="{{ Storage::url($row->image) }}" alt="{{ $row->title }}" class="img-thumbnail">
                                        </td>
                                        <td>
                                             <form action="{{ route('galeri.destroy', $row->id) }}" method="post">
                                                 @csrf
                                                 @method('delete')
                                                <a class="btn btn-info btn-sm" href="{{-- route('galeri.edit',$row->id) --}}">
                                                    <i class="fas fa-edit"></i>
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
