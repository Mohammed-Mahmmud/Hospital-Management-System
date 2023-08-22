<!doctype html>
<html lang="en" data-layout="twocolumn" data-sidebar="light" data-sidebar-size="lg" data-sidebar-image="none"
    data-preloader="disable">

<head>  
   @include('layouts.head')
</head>
<body>
    @include('layouts.main-header')
    @include('layouts.sidebar')
    @yield('content')
    @include('layouts.footer')
    @include('layouts.theme-settings')
    @include('layouts.scripts')
    
</body>
</html>