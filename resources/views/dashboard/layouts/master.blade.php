<!doctype html>
<html lang="{{App::getLocale()}}" data-layout="vertical" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none"
    data-preloader="enable" data-bs-theme = "dark">

<head>  
    @include('dashboard.layouts.head')
</head>
<body>
    @if (App::getLocale() == "ar")
    <div dir="rtl"> 
       @else
     <div > 
         @endif
        @include('dashboard.layouts.main-header')
        @include('dashboard.layouts.sidebar')
        @yield('content')
        @include('dashboard.layouts.footer')
        @include('dashboard.layouts.theme-settings')
        @include('dashboard.layouts.scripts')
    </body>
</div>
</html>