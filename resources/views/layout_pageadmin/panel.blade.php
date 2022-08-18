<!DOCTYPE html>
<html lang="en">

@include('layout_pageadmin.css')

<body class="app">
    @include('layout_pageadmin.header')
    @include('layout_pageadmin.sidebar')

    <div class="app-wrapper">
        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">
                @include('layout_pageadmin.notif')
                        @yield('content')

                    </div>
                    <!--//container-fluid-->
                </div>
                <!--//app-content-->

            </div>

            @include('layout_pageadmin.js')

</body>

</html>
