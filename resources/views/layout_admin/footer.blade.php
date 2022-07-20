<footer class="main-footer">
    <div class="col-sm-7 d-flex">
        <p class="text-start">
            <script>
                document.write(new Date().getFullYear());
            </script> AMIK Medicom
        </p>
    </div>
    <script script src="{{ url('plugins/jquery/jquery.min.js') }}">

    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ url('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- bs-custom-file-input -->
    <script src="{{ url('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <!--overlayScrollbars -->
    <script src="{{ url('plugins/overlayScrollbars/js/OverlayScrollbars.min.js') }}"></script>
    <!-- Toastr -->
    <script src="{{ url('plugins/toastr/toastr.min.js') }}"></script>
    <!-- DataTables -->
    <script src="{{ url('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ url('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ url('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ url('plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- ijaboCropTool -->
    <script src="{{ url('plugins/ijaboCropTool-master/ijaboCropTool.min.js') }}"></script>
    <!-- Select2 -->
    <script src="{{ url('plugins/select2/js/select2.full.min.js') }}"></script>
    <!-- Load FilePond library -->
    <script src="{{ url('plugins/filepond/js/filepond.js') }}"></script>

    <!-- AdminLTE App -->
    <script src="{{ url('dist/js/adminlte.js') }}"></script>


    <!-- page script -->
    <script>
        $('#change_picture_btn').click(function() {
            $('#admin_image').click();
        });

        $('#admin_image').ijaboCropTool({
            preview: '.admin_picture',
            setRatio: 1,
            allowedExtensions: ['jpg', 'jpeg', 'png'],
            buttonsText: ['SIMPAN', 'BATAL'],
            buttonsColor: ['#30bf7d', '#ee5155', -15],
            processUrl: '{{ route('ubahfoto') }}',
            withCSRF: ['_token', '{{ csrf_token() }}'],
            onSuccess: function(message, element, status) {
                alert(message);
            },
            onError: function(message, element, status) {
                alert(message);
            }
        });


        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
            $('.textarea').summernote()

        });
    </script>


    @yield('script')
    @if (count($errors) > 0)
        @foreach ($errors->all() as $error)
            <script>
                toastr.error("{{ $error }}");
            </script>
        @endforeach
    @endif


    @if (Session::has('success'))
        <script>
            toastr.success("{{ Session('success') }}");
        </script>
    @endif
    @if (Session::has('warning'))
        <script>
            toastr.warning("{{ Session('warning') }}");
        </script>
    @endif
    @if (Session::has('info'))
        <script>
            toastr.info("{{ Session('info') }}");
        </script>
    @endif
    @if (Session::has('error'))
        <script>
            toastr.error("{{ Session('error') }}");
        </script>
    @endif

    </body>

    </html>
