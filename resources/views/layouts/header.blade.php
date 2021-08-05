<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from thevectorlab.net/dashlab-v1.3/dashboard-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 May 2018 03:25:16 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">

    <!--favicon icon-->
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.html')}}">

    <title>Dashboard 3</title>

    <!--web fonts-->
    <link href="{{asset('http://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800')}}" rel="stylesheet">
    <link href="{{asset('http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800')}}" rel="stylesheet">

    <!--bootstrap styles-->
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!--icon font-->
    <link href="{{asset('assets/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/dashlab-icon/dashlab-icon.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/themify-icons/css/themify-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/weather-icons/css/weather-icons.min.css')}}" rel="stylesheet">

    <!--custom scrollbar-->
    <link href="{{asset('assets/vendor/m-custom-scrollbar/jquery.mCustomScrollbar.css')}}" rel="stylesheet">

    <!--jquery dropdown-->
    <link href="{{asset('assets/vendor/jquery-dropdown-master/jquery.dropdown.css')}}" rel="stylesheet">

    <!--jquery ui-->
    <link href="{{asset('assets/vendor/jquery-ui/jquery-ui.min.css')}}" rel="stylesheet">

    <!--iCheck-->
    <link href="{{asset('assets/vendor/icheck/skins/all.css')}}" rel="stylesheet">

    <!--vector maps -->
    <link href="{{asset('assets/vendor/vector-map/jquery-jvectormap-1.1.1.css')}}" rel="stylesheet">

    <!--data table-->
    <link href="{{asset('assets/vendor/data-tables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

    <!--custom styles-->
    <link href="{{asset('assets/css/main.css')}}" rel="stylesheet">

    <!--datetime & time picker-->
    <link href="{{asset('assets/vendor/datetime-picker/css/datetimepicker.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/timepicker/css/timepicker.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/vendor/html5shiv.js"></script>
    <script src="assets/vendor/respond.min.js"></script>
    <![endif]-->
</head>

<body class="fixed-nav">

    <!--navigation : sidebar & header-->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark" id="mainNav">

        <!--brand name-->
        <a class="navbar-brand" href="/home">
            <img class="pr-3 float-left" src="assets/img/logo-icon.png" srcset="assets/img/logo-icon@2x.png 2x" alt="" />
            <div class="float-left">
                <div>ABC Motors</div>
            </div>
        </a>
        <!--/brand name-->

        <!--responsive nav toggle-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!--/responsive nav toggle-->

        <!--responsive rightside toogle-->
        <a href="javascript:;" class="nav-link right_side_toggle responsive-right-side-toggle">
            <i class="icon-options-vertical"> </i>
        </a>
        <!--/responsive rightside toogle-->

        <div class="collapse navbar-collapse" id="navbarResponsive">

            <!--left side nav-->
            <ul class="navbar-nav left-side-nav" id="accordion">

                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Exra Pages">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" data-target="#extra_pages">
                        <i class="vl_files"></i>
                        <span class="nav-link-text">Personal</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="extra_pages" data-parent="#accordion">
                        <li> <a href="/create-product">Create Product</a> </li>

                        <li> <a href="/stock">Stock</a> </li>
                    </ul>
                </li>



            </ul>
            <!--/left side nav-->

            <!--nav push link-->
            <ul class="navbar-nav sidenav-toggler">
                <li class="nav-item">
                    <a class="nav-link text-center" id="left-nav-toggler">
                        <i class="fa fa-angle-left"></i>
                    </a>
                </li>
            </ul>
            <!--/nav push link-->


            <!--header rightside links-->
            <ul class="navbar-nav header-links ml-auto hide-arrow">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mr-lg-3" id="userNav" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="user-thumb">
                            <img class="rounded-circle" src="assets/img/avatar/avatar1.jpg" alt="" />
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userNav">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault()
                        document.getElementById('logout-form').submit()">Sign Out</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
            <!--/header rightside links-->

        </div>
    </nav>
