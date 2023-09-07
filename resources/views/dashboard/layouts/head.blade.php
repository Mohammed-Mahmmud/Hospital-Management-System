<meta charset="utf-8">
<title>@yield('title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
<meta content="Themesbrand" name="author">


    
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset("dashboard/assets/images/favicon.ico")}}">
    
    <!-- jsvectormap css -->
    <link href="{{asset("dashboard/assets/libs/jsvectormap/css/jsvectormap.min.css")}}" rel="stylesheet" type="text/css">
    
    <!--Swiper slider css-->
    <link href="{{asset("dashboard/assets/libs/swiper/swiper-bundle.min.css")}}" rel="stylesheet" type="text/css">
    
    <!-- Layout config Js -->
    <script src="{{asset("dashboard/assets/js/layout.js")}}"></script>
    <!-- Icons Css -->
<link href="{{asset("dashboard/assets/css/icons.min.css")}}" rel="stylesheet" type="text/css">
@if(App::getLocale() == "ar")
        <!-- Bootstrap Css -->
        <link href="{{asset("dashboard/assets/css/bootstrap-rtl.min.css")}}" rel="stylesheet" type="text/css">
        <!-- App Css-->
        <link href="{{asset("dashboard/assets/css/app-rtl.min.css")}}" rel="stylesheet" type="text/css">
        <!-- custom Css-->
        <link href="{{asset("dashboard/assets/css/custom-rtl.min.css")}}" rel="stylesheet" type="text/css">
@else
        <!-- Bootstrap Css -->
        <link href="{{asset("dashboard/assets/css/bootstrap.min.css")}}" rel="stylesheet" type="text/css">
        <!-- App Css-->
        <link href="{{asset("dashboard/assets/css/app.min.css")}}" rel="stylesheet" type="text/css">
        <!-- custom Css-->
        <link href="{{asset("dashboard/assets/css/custom.min.css")}}" rel="stylesheet" type="text/css">    
        @endif
@yield('css')
 

