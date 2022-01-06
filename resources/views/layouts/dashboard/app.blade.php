@include('layouts.dashboard.inc._header')

<body class="hold-transition sidebar-mini layout-fixed">

    <!-- wrapper -->
    <div class="wrapper">

        @include('layouts.dashboard.inc._navbar')
        @include('layouts.dashboard.inc._aside')
        @include('partials._session')

        <!-- Content Wrapper -->
        <div class="content-wrapper">
            @yield('content')
        </div>
        <!-- ./Content Wrapper -->

        @include('layouts.dashboard.inc._copyright')

    </div>
    <!-- ./wrapper -->

    @include('layouts.dashboard.inc._footer')

</body>

</html>
