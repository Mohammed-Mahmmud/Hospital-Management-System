<!doctype html>
<html lang="en" data-layout="twocolumn" data-sidebar="light" data-sidebar-size="lg" data-sidebar-image="none"
    data-preloader="disable">

<head>  
   @include('dashboard.layouts.head')
</head>
<body>
    @include('dashboard.layouts.main-header')
    @include('dashboard.layouts.sidebar')
    @yield('content')
    @include('dashboard.layouts.footer')
    @include('dashboard.layouts.theme-settings')
    @include('dashboard.layouts.scripts')

</body>
</html>