<!doctype html>
<html lang="en" data-layout="twocolumn" data-sidebar="light" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>
    @include('dashboard.layouts.auth.head')
</head>
<body>
    @if (App::getLocale() == "ar")
    <div dir="rtl"> 
       @else
     <div > 
         @endif
    @yield('content')
    @include('dashboard.layouts.auth.footer')
    @include('dashboard.layouts.auth.scripts')
</div>
</body>
</html>