<!doctype html>
<html class="no-js" lang="zxx">

<head>
    @include('layout.front.header')
</head>

<body id="home-version-1" class="home-saas-main" data-style="default">
    <!-- header -->
    @include('layout.front.navbar')
    <!-- header-end -->
    <!-- main-area -->
    <main>
         @yield('content')
    </main>
    <!-- main-area-end -->
    <!-- footer -->
    @include('layout.front.footer')
    <!-- footer-end -->

    @include('layout.front.script')

    @yield('script')


</body>

</html>
