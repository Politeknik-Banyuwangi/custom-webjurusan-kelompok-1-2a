@extends('layout_admin.template')
@section('heading', 'Data Galeri')

@section('page')
<li class="breadcrumb-item active">Galeri Page</li>
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
                                <tr class="bg-info">
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
                                             <img src="{{ Storage::url('images/galeri/' .$row->image) }}" alt="{{ $row->title }}" width="80px" class="img-thumbnail">
                                        </td>
                                        <td>
                                             <form action="{{ route('galeri.destroy', $row->id) }}" method="post">
                                                 @csrf
                                                 @method('delete')

                                                 <a href="{{ route('galeri.edit', $row->id) }}"
                                                    class="btn btn-warning btn-sm"><i
                                                        class="nav-icon fas fa-edit"></i>
                                                </a>

                                                <button type="submit" class="btn btn-danger btn-sm"> <i
                                                        class="fas fa-trash"></i>
                                                     </button>
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
