<!doctype html>
<!-- 
* Bootstrap Simple Admin Template
* Email: heyalexluna@gmail.com
* Version: 1.1
* Author: Alexis Luna
* Copyright 2019 Alexis Luna
* Website: https://github.com/mralexisluna/bootstrap-simple-admin-template
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard | Start Bootstrap</title>
    <link href="{{asset("cpanel/assets/vendor/bootstrap4/css/bootstrap.min.css")}}" rel="stylesheet">
    <link href="{{asset("cpanel/assets/vendor/DataTables/datatables.min.css")}}" rel="stylesheet">
    <link href="{{asset("cpanel/assets/css/master.css")}}" rel="stylesheet">
    <link href="{{asset("cpanel/assets/vendor/bootstrap4/css/bootstrap.min.css")}}" rel="stylesheet">
    <link href="{{asset("cpanel/assets/css/master.css")}}" rel="stylesheet">
    <link href="{{asset("cpanel/assets/vendor/chartsjs/Chart.min.css")}}" rel="stylesheet">
    <link href="{{asset("cpanel/assets/vendor/flagiconcss3/css/flag-icon.min.css")}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset("css/magnific-popup.css")}}">

    <!-- Flexslider  -->
    <link rel="stylesheet" href="{{asset("css/flexslider.css")}}">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset("css/owl.carousel.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/owl.theme.default.min.css")}}">
    

  <link rel="stylesheet" href="{{asset("css/style.css")}}">
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar" class="active">
            <div class="sidebar-header">
                <img src="{{asset('cpanel/assets/img/bootstraper-logo.png')}}" alt="bootraper logo" class="app-logo">
            </div>
            <ul class="list-unstyled components">
                <li>
                    <a href="dashboard.html"><i class="fas fa-home"></i> Dashboard</a>
                </li>
               
              
               
                <li>
                    <a href="{{url('/cpanel/countries')}}"><i class="fas fa-user-friends"></i>Countries</a>
                </li>
                <li>
                    <a href="{{url('/cpanel/cities')}}"><i class="fas fa-user-friends"></i>Cities</a>
                </li>
                <li>
                    <a href="{{url('/cpanel/streets')}}"><i class="fas fa-user-friends"></i>Streets</a>
                </li>
                <li>
                    <a href="{{url('/cpanel/users')}}"><i class="fas fa-user-friends"></i>User</a>
                </li>
                <li>
                    <a href="settings.html"><i class="fas fa-cog"></i>Settings</a>
                </li>
            </ul>
        </nav>

        <div id="body" class="active">
            <nav class="navbar navbar-expand-lg navbar-primary bg-primary">
                <button type="button" id="sidebarCollapse" class="btn btn-outline-light default-light-menu"><i class="fas fa-bars"></i><span></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <div class="nav-dropdown">
                                <a href="" class="nav-item nav-link dropdown-toggle" data-toggle="dropdown"><i class="fas fa-link"></i> <span>Quick Links</span> <i style="font-size: .8em;" class="fas fa-caret-down"></i></a>
                                <div class="dropdown-menu dropdown-menu-right nav-link-menu">
                                    <ul class="nav-list">
                                        <li><a href="" class="dropdown-item"><i class="fas fa-list"></i> Access Logs</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-database"></i> Back ups</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-cloud-download-alt"></i> Updates</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-user-shield"></i> Roles</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <div class="nav-dropdown">
                                <a href="" class="nav-item nav-link dropdown-toggle" data-toggle="dropdown"><i class="fas fa-user"></i> <span>John Doe</span> <i style="font-size: .8em;" class="fas fa-caret-down"></i></a>
                                <div class="dropdown-menu dropdown-menu-right nav-link-menu">
                                    <ul class="nav-list">
                                        <li><a href="" class="dropdown-item"><i class="fas fa-address-card"></i> Profile</a></li>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-envelope"></i> Messages</a></li>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-cog"></i> Settings</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>