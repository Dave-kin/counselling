<?php
 include_once('../config/runn.php');
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
<title>KsTU-Counselling &amp; Guidance Unit</title>
<!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 10]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<!-- Meta -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="description" content="Mega Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
<meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
<meta name="author" content="codedthemes" />
<!-- Favicon icon -->
<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
<!-- Google font-->
<link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
<!-- waves.css -->
<link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
<!-- Required Fremwork -->
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">

<!-- waves.css -->
<link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
<!-- themify icon -->
<link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
<!-- Font Awesome -->
<link rel="stylesheet" type="text/css" href="assets/icon/font-awesome/css/font-awesome.min.css">
<!-- scrollbar.css -->
<link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
<!-- am chart export.css -->
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
<!-- Style.css -->
<link rel="stylesheet" type="text/css" href="assets/css/main.css">
<!-- client css -->
<link rel="stylesheet" type="text/css" href="assets/css/form.css">
  <!-- Custom styles for this page -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.3/datatables.min.css"/>
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css"> -->
</head>

<body>
<!-- Pre-loader start -->
<div class="theme-loader">
<div class="loader-track">
<div class="preloader-wrapper">
<div class="spinner-layer spinner-blue">
<div class="circle-clipper left">
    <div class="circle"></div>
</div>
<div class="gap-patch">
    <div class="circle"></div>
</div>
<div class="circle-clipper right">
    <div class="circle"></div>
</div>
</div>
<div class="spinner-layer spinner-red">
<div class="circle-clipper left">
    <div class="circle"></div>
</div>
<div class="gap-patch">
    <div class="circle"></div>
</div>
<div class="circle-clipper right">
    <div class="circle"></div>
</div>
</div>

<div class="spinner-layer spinner-yellow">
<div class="circle-clipper left">
    <div class="circle"></div>
</div>
<div class="gap-patch">
    <div class="circle"></div>
</div>
<div class="circle-clipper right">
    <div class="circle"></div>
</div>
</div>

<div class="spinner-layer spinner-green">
<div class="circle-clipper left">
    <div class="circle"></div>
</div>
<div class="gap-patch">
    <div class="circle"></div>
</div>
<div class="circle-clipper right">
    <div class="circle"></div>
</div>
</div>
</div>
</div>
</div>
<!-- Pre-loader end -->
<div id="pcoded" class="pcoded">
<div class="pcoded-overlay-box"></div>
<div class="pcoded-container navbar-wrapper">
<nav class="navbar header-navbar pcoded-header">
<div class="navbar-wrapper">
<div class="navbar-logo">
    <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
        <i class="ti-menu"></i>
    </a>
    <div class="mobile-search waves-effect waves-light">
        <div class="header-search">
            <div class="main-search morphsearch-search">
                <div class="input-group">
                    <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                    <input type="text" class="form-control" placeholder="Enter Keyword">
                    <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                </div>
            </div>
        </div>
    </div>
    <a href="#">
        <img class="img-fluid" src="assets/images/logo.png" alt="Theme-Logo" />
    </a>
    <a class="mobile-options waves-effect waves-light">
        <i class="ti-more"></i>
    </a>
</div>

<div class="navbar-container container-fluid">
    <ul class="nav-left">
        <li>
            <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
        </li>
        <li class="header-search">
            <div class="main-search morphsearch-search">
                <div class="input-group">
                    <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                    <input type="text" class="form-control">
                    <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                </div>
            </div>
        </li>
        <li>
            <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                <i class="ti-fullscreen"></i>
            </a>
        </li>
    </ul>
    <ul class="nav-right">
        <li class="header-notification">
            <a href="#!" class="waves-effect waves-light">
                <i class="ti-bell"></i>
                <span class="badge bg-c-red"></span>
            </a>
            <ul class="show-notification">
                <li>
                    <h6>Notifications</h6>
                    <label class="label label-danger">New</label>
                </li>
                <li class="waves-effect waves-light">
                    <div class="media">
                        <img class="d-flex align-self-center img-radius" src="assets/images/avatar-2.jpg" alt="Generic placeholder image">
                        <div class="media-body">
                            <h5 class="notification-user">John Doe</h5>
                            <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                            <span class="notification-time">30 minutes ago</span>
                        </div>
                    </div>
                </li>
                <li class="waves-effect waves-light">
                    <div class="media">
                        <img class="d-flex align-self-center img-radius" src="assets/images/avatar-4.jpg" alt="Generic placeholder image">
                        <div class="media-body">
                            <h5 class="notification-user">Joseph William</h5>
                            <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                            <span class="notification-time">30 minutes ago</span>
                        </div>
                    </div>
                </li>
                <li class="waves-effect waves-light">
                    <div class="media">
                        <img class="d-flex align-self-center img-radius" src="assets/images/avatar-3.jpg" alt="Generic placeholder image">
                        <div class="media-body">
                            <h5 class="notification-user">Sara Soudein</h5>
                            <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                            <span class="notification-time">30 minutes ago</span>
                        </div>
                    </div>
                </li>
            </ul>
        </li>
        <li class="user-profile header-notification">
            <a href="#!" class="waves-effect waves-light">
                
                <i class="ti-angle-down"></i>
            </a>
            <ul class="show-notification profile-notification">
                <li class="waves-effect waves-light">
                    <a href="#!">
                        <i class="ti-settings"></i> Settings
                    </a>
                </li>
                <li class="waves-effect waves-light">
                    <a href="admin-profile.php">
                        <i class="ti-user"></i> Profile
                    </a>
                </li>
                <li class="waves-effect waves-light">
                    <a href="email-inbox.html">
                        <i class="ti-email"></i> Update Password
                    </a>
                </li>
               <hr>
                <li class="waves-effect waves-light">
                <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                    </a>
                </li>
            </ul>

        </li>
    </ul>
</div>
</div>
</nav>

<div class="pcoded-main-container">
<div class="pcoded-wrapper">
<nav class="pcoded-navbar">
    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
    <div class="pcoded-inner-navbar main-menu">
        <dvvZiv class="">
            <div class="main-menu-header">
                <img class="img-80 img-radius" src="assets/images/kstu-1.jpg" alt="User-Profile-Image">
                <div class="user-details">

                </div>
            </div>

        </dvvZiv>            
        <div class="p-15 p-b-0">

        </div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="active">
                <a href="index.php" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
                <br>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Components</div>
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                    <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Counselling</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="record-form.php" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Counselling Forms</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="appoint.php" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Appointments</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="resp.php" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Responses</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Services</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="pcoded-hasmenu">
                <a href="javascript:void(0)" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                    <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Inventory</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="coun.php" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Couns Typ</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="pos.php" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Apply Post</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="even.php" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Add Event</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                </ul>
            </li>   
        </ul>
        <div class="pcoded-navigation-label" data-i18n="nav.category.other">Monitoring</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="pcoded-hasmenu ">
                <a href="javascript:void(0)" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-direction-alt"></i><b>M</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.menu-levels.main">Administrative</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="">
                        <a href="users.php" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.menu-levels.menu-level-21">All Counselies</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class="pcoded-hasmenu ">
                        <a href="#" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-direction-alt"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.menu-levels.menu-level-22.main"></span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                        <ul class="pcoded-submenu">
                            <li class="">
                                <a href="#" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.menu-levels.menu-level-22.menu-level-31"></span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="#" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.menu-levels.menu-level-23">Create new user</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                </ul>
            </li>
        </ul>

        <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Data</div>
        <ul class="pcoded-item pcoded-left-item">
            <li>
                <a href="#" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">Report</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li>
                <a href="#" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">All Unit</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
        </ul>
    </div>
</nav>