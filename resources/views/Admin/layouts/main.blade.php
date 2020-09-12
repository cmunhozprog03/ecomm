@include('Admin.layouts.header')
<div id="wrapper">
    <!-- sidebar -->
@include('Admin.layouts.sidebar')
<!-- ./sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <!-- TopBar -->
        @include('Admin.layouts.navbar')
        <!-- Topbar -->

            <!-- Container Fluid-->
       @yield('content')
        <!---Container Fluid-->
        </div>
        <!-- Footer -->
    @include('Admin.layouts.footer')
    <!-- Footer -->
    </div>
</div>

<!-- Scroll to top -->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

