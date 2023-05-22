<!DOCTYPE html>
<!-- upto 2 directory depth-->
<html lang="en-US">

@include('layouts.library-head')

<body id="top">

@include('layouts.library-navbar')

<div class="page-content">
    <div id="content">

        @include('layouts.library-welcome')

        @include('layouts.library-about')

        @include('layouts.library-book-list')

        @include('layouts.library-announcement-list')

        <div class="section px-2 px-lg-4 pb-4 pt-5 mb-5" id="contact">
            <div class="container-narrow">
                <div class="text-center mb-5">
                    <h2 class="marker marker-center">Mesajlar</h2>
                    @include('layouts.library-message')
                </div>
            </div>
            @include('layouts.footer')
        </div>
    </div>
    <div id="scrolltop"><a class="btn btn-secondary" href="#top"><span class="icon">
                <i class="fas fa-angle-up fa-x"></i></span></a></div>
</div>

@include('layouts.library-scripts')

</body>
</html>
