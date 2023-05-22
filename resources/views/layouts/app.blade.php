<!DOCTYPE html>
<html lang="tr">
@include('layouts.head')
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
<div class="page-content">
<!-- @include('layouts.preloader')-->
    <!-- Navbar -->
@include('layouts.navbar')
<!-- Main Sidebar Container -->
@include('layouts.sidebar')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @include('layouts.header')
        <!-- Ana içerik kısmını buraya yazacaksınız -->
        @yield('content')
    </div>

<!-- Footer -->
    @include('layouts.footer')
</div>
<!-- @include('layouts.foot')-->
<!-- AdminLTE JS dosyalarını dahil etmek için -->

<!-- İhtiyaç duyduğunuz diğer JS dosyalarını burada dahil edebilirsiniz -->
@include('layouts.scripts')
</body>
</html>
