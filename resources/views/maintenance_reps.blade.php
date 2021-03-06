<!DOCTYPE html>
<html lang="en">

<!--================================================================================
  Item Name: Materialize - Material Design Admin Template
  Version: 1.0
  Author: GeeksLabs
  Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>Hydromet Station Maintenance System</title>

    <!-- Favicons-->
    <link rel="icon" href="images/favicon/icon-32x32.png" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="images/favicon/icon-152x152.png">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
    <!-- For Windows Phone -->


    <!-- CORE CSS-->    
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection">


    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->    
    <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="js/plugins/jvectormap/jquery-jvectormap.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">


</head>

<body>
    <!-- Start Page Loading -->
     <!--<div id="loader-wrapper">
        <div id="loader"></div>        
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>-->
    <!-- End Page Loading -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START HEADER -->
    <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="cyan">
                @if (Route::has('login'))
                <div class="nav-wrapper">
                    <h1 class="logo-wrapper"><a href="/" class="brand-logo darken-1"><img src="images/masthead.png" alt="materialize logo"></a> <span class="logo-text">DOST Region IV-A</span></h1>
                    <ul class="right hide-on-med-and-down">
                        <li class="search-out">
                            <input type="text" class="search-out-text">
                        </li>
                        <li>    
                            <a href="javascript:void(0);" class="waves-effect waves-block waves-light show-search"><i class="mdi-action-search"></i></a>
                        </li>
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a>
                        </li>
                        <li>
                            @if (Auth::check())
                                <a href="{{ route('logout') }}" class="waves-effect waves-block waves-light" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="mdi-action-exit-to-app"></i></a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                                </form>
                            @else
                                <a href="{{ url('/login') }}" class="waves-effect waves-block waves-light"><i class="mdi-action-input"></i></a>
                            @endif
                        </li>
                    </ul>
                </div>
                @endif
            </nav>
        </div>
        <!-- end header nav-->
    </header>
    <!-- END HEADER -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START MAIN -->
    <div id="main">
        <!-- START WRAPPER -->
        <div class="wrapper">

            <!-- START LEFT SIDEBAR NAV-->
            <aside id="left-sidebar-nav">
                <ul id="slide-out" class="side-nav fixed leftside-navigation">
                    <li class="user-details cyan darken-2">
                        <div class="row">
                            <div class="col col s4 m4 l4">
                                <img src="images/default.png" alt="" class="circle responsive-img valign profile-image">
                            </div>
                            
                            @if (Route::has('login'))
                            <div class="col col s8 m8 l8">
                                @if (Auth::check())
                                <a id="login" class="btn-flat waves-effect waves-light white-text profile-btn" href="/" data-activates="profile-dropdown">{{ Auth::user()->name }}</a>
                                <p class="user-roal">Administrator</p>
                                @else
                                <a id="login" class="btn-flat waves-effect waves-light white-text profile-btn" href="/" data-activates="profile-dropdown">You</a>
                                <p class="user-roal">Guest</p>
                                @endif
                            </div>
                             @endif
                        </div>
                    </li>
                    <li class="bold"><a href="/" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Home </a>
                    </li>

                    @if (Route::has('login'))
                    @if (Auth::check())
                    <li class="bold"><a href="#" class="waves-effect waves-cyan"><i class="mdi-editor-insert-invitation"></i> Calendar</a>
                    <li class="bold"><a class="waves-effect waves-cyan"><i class="mdi-action-announcement"></i> Notifications <span class="new badge">1</span></a>
                    </li>
                    <li class="bold"><a class="waves-effect waves-cyan"><i class="mdi-editor-insert-chart"></i> Sensor Statistics</a>
                    </li>
                    <li class="bold"><a class="waves-effect waves-cyan" href="maintenanceReps"><i class="mdi-editor-insert-comment"></i> Maintenance Reports</a>
                    </li>
                    <li class="li-hover"><div class="divider"></div></li>
                    <li class="li-hover"><p class="ultra-small margin more-text">MORE</p></li>
                    <li><a class="waves-effect waves-cyan" href="#"><i class="#"></i> User Activity</a>
                    </li>
                    <li><a class="waves-effect waves-cyan" href="#"><i class="#"></i> Help</a>
                    </li>
                    @endif
                    @endif
                </ul>
                <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only darken-2"><i class="mdi-navigation-menu" ></i></a>
            </aside>
            <!-- END LEFT SIDEBAR NAV-->

            <!-- //////////////////////////////////////////////////////////////////////////// -->
        <!-- main activity goes here -->
            
            <nav>
                <div id="home" class="toggle">
                    <ul class="tabs tabs-transparent">
                        <li class="tab"><a class="addReport" href="#addReport">Add Report</a></li>
                        <li class="tab"><a class="myReport" href="#myReport">My Reports</a></li>
                        <li class="tab"><a href="#viewReport">View All Reports</a></li>
                    </ul>
                </div>
            </nav>

            <div id="addReport" class="toggle" style="padding:5%">
                @include('add_report')
            </div>
            <div id="myReport" class="toggle" style="padding:5%">
            my
            </div>
            <div id="viewReport" class="toggle" style=" padding:5%">
                @include('view_report')
            </div>

        <!-- main activity ends here -->
            <!-- //////////////////////////////////////////////////////////////////////////// -->
        </div>
        <!-- END WRAPPER -->

    </div>
    <!-- END MAIN -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START FOOTER -->
 <!--   <footer class="page-footer">
        
        <div class="footer-copyright">
            <div class="container">
                Copyright © 2015 <a class="grey-text text-lighten-4" href="http://themeforest.net/user/geekslabs/portfolio?ref=geekslabs" target="_blank">GeeksLabs</a> All rights reserved.
                <span class="right"> Design and Developed by <a class="grey-text text-lighten-4" href="http://geekslabs.com/">GeeksLabs</a></span>
            </div>
        </div>
    </footer> -->
    <!-- END FOOTER -->


    <!-- ================================================
    Scripts
    ================================================ -->
    
    <!-- jQuery Library -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>    
    <!--materialize js-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
       

    <!-- chartist -->
    <script type="text/javascript" src="js/plugins/chartist-js/chartist.min.js"></script>   

    <!-- chartjs -->
    <script type="text/javascript" src="js/plugins/chartjs/chart.min.js"></script>
    <script type="text/javascript" src="js/plugins/chartjs/chart-script.js"></script>

    <!-- sparkline -->
    <script type="text/javascript" src="js/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script type="text/javascript" src="js/plugins/sparkline/sparkline-script.js"></script>
    
    <!--jvectormap-->
    <script type="text/javascript" src="js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script type="text/javascript" src="js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script type="text/javascript" src="js/plugins/jvectormap/vectormap-script.js"></script>

    
    <!-- Google map API -->
    <script type="text/javascript" src="js/script-map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB6xvLOfDOXnS5nPnI9dHa4kg664Tu_TtU&libraries=places"></script>
    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.js"></script>
  
</body>

</html>