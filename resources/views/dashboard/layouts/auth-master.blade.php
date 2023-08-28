<!doctype html>
<html lang="en" data-layout="twocolumn" data-sidebar="light" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>
    @include('dashboard.layouts.auth.head')
</head>
<body>
    @yield('content')
    @include('dashboard.layouts.auth.footer')
    @include('dashboard.layouts.auth.scripts')
</body>
</html>