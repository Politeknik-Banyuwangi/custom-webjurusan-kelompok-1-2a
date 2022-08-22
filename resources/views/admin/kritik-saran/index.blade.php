@extends('layout_admin.template')
@section('heading', 'Data Kritik dan saran')

@section('page')
<li class="breadcrumb-item active">Kritik dan Saran Page</li>
@endsection

@section('content')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr class="bg-info">
                                    <th>No</th>
                                    <th>Id User</th>
                                    <th>Isi Kritik</th>
                                    <th>Saran</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                 @foreach ($ks as $row)
                                    <tr>
                                        <td>
                                             {{ $loop->iteration }}
                                        </td>
                                        <td>
                                             {{ $row->users_id }}
                                        </td>
                                        <td>
                                             {{ $row->nm_kritik }}
                                        </td>
                                        <td>
                                            {{ $row->nm_saran }}
                                        </td>
                                        <td>
                                              <form action="{{ route('kritik-saran.destroy', $row->id) }}" method="post">
                                                 @csrf
                                                 @method('delete')
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
