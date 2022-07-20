@extends('layout_admin.template')
@section('heading', 'Profile')

@section('page')
    <li class="breadcrumb-item active">User Profile</li>
@endsection
@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle admin_picture"
                                    src="{{ Storage::url(Auth::user()->picture) }}" alt="User profile picture ">
                            </div>

                            <p class="profile-username text-center">{{ Auth::user()->name }}</p>

                            <input type="file" name="gambar-profile" id="admin_image" style="opacity:0; display: none ">

                            <a href="javascript:void(0)" class="btn btn-primary btn-block" id="change_picture_btn">Ubah
                                Foto</a>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <!-- /.col -->

                <div class="col-md-8">
                    <div class="card card-primary card-outline">
                        <div class="card-body">
                            <form action="{{ route('profile.update') }}" enctype="multipart/form-data" method="post"
                                accept-charset="utf-8">
                                @csrf
                                @method('patch')
                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            name="name" value="{{ old('name', Auth::user()->name) }}" autocomplete="off"
                                            autofocus>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            name="email" value="{{ old('name', Auth::user()->email) }}" id="inputEmail"
                                            placeholder="Email" disabled>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="offset-sm-2 col-sm-10">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

@section('script')
    <script type="text/javascript">
        // $(document).ready(function() {
        //             $('#back').click(function() {
        //                 window.location = "{{ route('banner.index') }}";
        //             });

        // $(document).on('click', '#change_picture_btn', function() {
        //     $('#admin.image').click();
        // })



        $("#admin_image").on("change", function() {
            var files = !!this.files ? this.files : [];
            if (!files.length || !window.FileReader)
                return; // no file selected, or no FileReader support

            if (/^image/.test(files[0].type)) { // only image file
                var reader = new FileReader(); // instance of the FileReader
                reader.readAsDataURL(files[0]); // read the local file

                reader.onloadend = function() { // set image data as background of div
                    $("#imagePreview").css("background-image", "url(" + this.result + ")");
                }
            }
        });



        $('#admin_image').ijaboCropTool({
            preview: '.image-previewer',
            setRatio: 1,
            allowedExtensions: ['jpg', 'jpeg', 'png'],
            buttonsText: ['SIMPAN', 'BATAL'],
            buttonsColor: ['#30bf7d', '#ee5155', -15],
            processUrl: '{{ route('ubahfoto') }}',
            withCSRF: ['_token', '{{ csrf_token() }}'],
            onSuccess: function(message, element, status) {
                //     alert(message);
                // },
                // onError: function(message, element, status) {
                //     alert(message);
                // }
            });
        });

        $("#Profile").addClass("active");
        $("#Users_Management").addClass("active");
    </script>

@endsection
