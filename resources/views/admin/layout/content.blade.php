<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="../../assets/" data-template="vertical-menu-template">

<head>
    @include('admin.layout.head')
</head>

<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            @include('admin.layout.menu')
            <!-- End Menu -->

            <!-- Layout Page -->
            <div class="layout-page">
                <!-- Navbar wrapper -->
                @include('admin.layout.navbar')
                <!-- End Navbar wrapper -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    @yield('content')
                    <!-- End Content -->
                    @include('admin.layout.footer')
                    <div class="content-backdrop fade"></div>
                </div>
                <!-- End Content wrapper -->

            </div>
            <!-- End Layout Page -->
        </div>
        <div class="layout-overlay layout-menu-toggle"></div>
        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class="drag-target"></div>
    </div>


@include('admin.layout.libraryJs')
</body>

</html>
