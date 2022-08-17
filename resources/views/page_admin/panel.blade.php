<!DOCTYPE html>
<html lang="en">

@include('page_admin.css')

<body class="app">
    @include('page_admin.header')
    @include('page_admin.sidebar')

    <div class="app-wrapper">
        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">
                @include('page_admin.notif')
                        @yield('content')

                    </div>
                    <!--//container-fluid-->
                </div>
                <!--//app-content-->

            </div>

            @include('page_admin.js')

</body>

</html>
