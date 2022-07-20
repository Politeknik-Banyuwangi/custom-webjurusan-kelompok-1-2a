@extends('layout_admin.template')
@section('heading', 'Motivasi')

@section('page')
    <li class="breadcrumb-item active">Tambah Motivasi</li>
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- jquery validation -->
                    <div class="card card-primary">
                        <!-- form start -->
                        <form action="{{ route('motivasi.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Nama Motivator</label>
                                    <input type="text" name="name"
                                        class="form-control @error('name') is-invalid                                                                                                @enderror "
                                        id="name" placeholder="Jack Ma">
                                    <div class="text-danger">
                                        @error('name')
                                            Nama tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Motivasi</label>
                                    <textarea
                                        class="form-control @error('qutes') is-invalid                                 @enderror"
                                        name="qutes" cols="5" rows="5" placeholder="Motivasi"></textarea>
                                    <div class="text-danger">
                                        @error('qutes')
                                            Quote motivasi tidak boleh kosong.
                                        @enderror
                                    </div>
                                </div>
                                <input type="file" name="filepond" />
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>

                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection

@section('script')
    <script>
        // FilePond.registerPlugin(
        //     FilePondPluginImagePreview,
        // );
        FilePond.setOptions({
            server: {
                url: '/upload',
                process: {
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                }
            }
        });
        const inputElement = document.querySelector('input[type="file"]');
        const pond = FilePond.create(inputElement);

    </script>

@endsection
