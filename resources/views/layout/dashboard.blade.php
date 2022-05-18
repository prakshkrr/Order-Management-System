@include('layout.header')
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('layout.sidebar')
        <div class="content-wrapper">
            <section class="content">
                <div class="containt-fluid">
                    @yield('maincontent')
                </div>
            </section>
            <section class="content">
                <div class="containt-fluid">
                    @yield('maincontent2')
                </div>
            </section>
        </div>
    </div>
</body>