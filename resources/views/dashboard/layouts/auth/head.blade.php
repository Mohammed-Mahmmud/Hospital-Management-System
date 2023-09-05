<meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset("dashboard/assets/images/favicon.ico")}}">

    <!-- Layout config Js -->
    <script src="{{asset("dashboard/assets/js/layout.js")}}"></script>
    <!-- Bootstrap Css -->
    <link href="{{asset("dashboard/assets/css/bootstrap.min.css")}}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset("dashboard/assets/css/icons.min.css")}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset("dashboard/assets/css/app.min.css")}}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{asset("dashboard/assets/css/custom.min.css")}}" rel="stylesheet" type="text/css" />
    
@yield('css')