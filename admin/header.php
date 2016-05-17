<!DOCTYPE html>
<!-- saved from url=(0035)http://bucketadmin.themebucket.net/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">

    <meta http-equiv="”X-UA-Compatible”" content="”IE=EmulateIE9”">
    <meta http-equiv="”X-UA-Compatible”" content="”IE=9”">

    <link rel="shortcut icon" href="http://bucketadmin.themebucket.net/images/favicon.png">
    <title>BucketAdmin</title>
    <!--Core CSS -->
	
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="./BucketAdmin/bootstrap.min.css" rel="stylesheet">
    <link href="./BucketAdmin/jquery-ui-1.10.1.custom.min.css" rel="stylesheet">
    <link href="./BucketAdmin/bootstrap-reset.css" rel="stylesheet">
    <link href="./BucketAdmin/font-awesome.css" rel="stylesheet">
    <link href="./BucketAdmin/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <link href="./BucketAdmin/clndr.css" rel="stylesheet">
    <!--clock css-->
    <link href="./BucketAdmin/style.css" rel="stylesheet">
    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="./BucketAdmin/morris.css">
    <!-- Custom styles for this template -->
    <link href="./BucketAdmin/style(1).css" rel="stylesheet">
    <link href="./BucketAdmin/style-responsive.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]>
    <script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
<style type="text/css">.jqstooltip { position: absolute;left: 30px;top: 0px;display: block;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;border: 0px solid white;border-radius: 3px;-webkit-border-radius: 3px;z-index: 10000;}.jqsfield { color: white;padding: 5px 5px 5px 5px;font: 10px arial, san serif;text-align: left;}</style></head>
<body style="">
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">

    <a href="http://bucketadmin.themebucket.net/index.html" class="logo">
        <img src="./BucketAdmin/logo.png" alt="">
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->

<div class="nav notify-row" id="top_menu">
    <!--  notification start -->
    <ul class="nav top-menu">
        <!-- settings start -->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="http://bucketadmin.themebucket.net/#">
                <i class="fa fa-tasks"></i>
                <span class="badge bg-success">8</span>
            </a>
            <ul class="dropdown-menu extended tasks-bar">
                <li>
                    <p class="">You have 8 pending tasks</p>
                </li>
                <li>
                    <a href="http://bucketadmin.themebucket.net/#">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>Target Sell</h5>
                                <p>25% , Deadline  12 June’13</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="45">
                            <span class="percent">45</span>
                            <canvas height="50" width="50"></canvas></span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="http://bucketadmin.themebucket.net/#">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>Product Delivery</h5>
                                <p>45% , Deadline  12 June’13</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="78">
                            <span class="percent">78</span>
                            <canvas height="50" width="50"></canvas></span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="http://bucketadmin.themebucket.net/#">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>Payment collection</h5>
                                <p>87% , Deadline  12 June’13</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="60">
                            <span class="percent">60</span>
                            <canvas height="50" width="50"></canvas></span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="http://bucketadmin.themebucket.net/#">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>Target Sell</h5>
                                <p>33% , Deadline  12 June’13</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="90">
                            <span class="percent">90</span>
                            <canvas height="50" width="50"></canvas></span>
                        </div>
                    </a>
                </li>

                <li class="external">
                    <a href="http://bucketadmin.themebucket.net/#">See All Tasks</a>
                </li>
            </ul>
        </li>
        <!-- settings end -->
        <!-- inbox dropdown start-->
        <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="http://bucketadmin.themebucket.net/#">
                <i class="fa fa-envelope-o"></i>
                <span class="badge bg-important">4</span>
            </a>
            <ul class="dropdown-menu extended inbox">
                <li>
                    <p class="red">You have 4 Mails</p>
                </li>
                <li>
                    <a href="http://bucketadmin.themebucket.net/#">
                        <span class="photo"><img alt="avatar" src="./BucketAdmin/avatar-mini.jpg"></span>
                                <span class="subject">
                                <span class="from">Jonathan Smith</span>
                                <span class="time">Just now</span>
                                </span>
                                <span class="message">
                                    Hello, this is an example msg.
                                </span>
                    </a>
                </li>
                <li>
                    <a href="http://bucketadmin.themebucket.net/#">
                        <span class="photo"><img alt="avatar" src="./BucketAdmin/avatar-mini-2.jpg"></span>
                                <span class="subject">
                                <span class="from">Jane Doe</span>
                                <span class="time">2 min ago</span>
                                </span>
                                <span class="message">
                                    Nice admin template
                                </span>
                    </a>
                </li>
                <li>
                    <a href="http://bucketadmin.themebucket.net/#">
                        <span class="photo"><img alt="avatar" src="./BucketAdmin/avatar-mini-3.jpg"></span>
                                <span class="subject">
                                <span class="from">Tasi sam</span>
                                <span class="time">2 days ago</span>
                                </span>
                                <span class="message">
                                    This is an example msg.
                                </span>
                    </a>
                </li>
                <li>
                    <a href="http://bucketadmin.themebucket.net/#">
                        <span class="photo"><img alt="avatar" src="./BucketAdmin/avatar-mini.jpg"></span>
                                <span class="subject">
                                <span class="from">Mr. Perfect</span>
                                <span class="time">2 hour ago</span>
                                </span>
                                <span class="message">
                                    Hi there, its a test
                                </span>
                    </a>
                </li>
                <li>
                    <a href="http://bucketadmin.themebucket.net/#">See all messages</a>
                </li>
            </ul>
        </li>
        <!-- inbox dropdown end -->
        <!-- notification dropdown start-->
        <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="http://bucketadmin.themebucket.net/#">

                <i class="fa fa-bell-o"></i>
                <span class="badge bg-warning">3</span>
            </a>
            <ul class="dropdown-menu extended notification">
                <li>
                    <p>Notifications</p>
                </li>
                <li>
                    <div class="alert alert-info clearfix">
                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                        <div class="noti-info">
                            <a href="http://bucketadmin.themebucket.net/#"> Server #1 overloaded.</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="alert alert-danger clearfix">
                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                        <div class="noti-info">
                            <a href="http://bucketadmin.themebucket.net/#"> Server #2 overloaded.</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="alert alert-success clearfix">
                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                        <div class="noti-info">
                            <a href="http://bucketadmin.themebucket.net/#"> Server #3 overloaded.</a>
                        </div>
                    </div>
                </li>

            </ul>
        </li>
        <!-- notification dropdown end -->
    </ul>
    <!--  notification end -->
</div>
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="http://bucketadmin.themebucket.net/#">
                <img alt="" src="./BucketAdmin/avatar1_small.jpg">
                <span class="username">John Doe</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="http://bucketadmin.themebucket.net/#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="http://bucketadmin.themebucket.net/#"><i class="fa fa-cog"></i> Settings</a></li>
                <li><a href="http://bucketadmin.themebucket.net/login.html"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
        <li>
            <div class="toggle-right-box">
                <div class="fa fa-bars"></div>
            </div>
        </li>
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation" tabindex="5000" style="overflow: hidden; outline: none;">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="http://bucketadmin.themebucket.net/index.html">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sub-menu dcjq-parent-li">
                    <a href="javascript:;" class="dcjq-parent">
                        <i class="fa fa-laptop"></i>
                        <span>Layouts</span>
                    <span class="dcjq-icon"></span></a>
                    <ul class="sub" style="display: none;">
                        <li><a href="http://bucketadmin.themebucket.net/boxed_page.html">Boxed Page</a></li>
                        <li><a href="http://bucketadmin.themebucket.net/horizontal_menu.html">Horizontal Menu</a></li>
                        <li><a href="http://bucketadmin.themebucket.net/language_switch.html">Language Switch Bar</a></li>
                    </ul>
                </li>
                <li class="sub-menu dcjq-parent-li">
                    <a href="javascript:;" class="dcjq-parent">
                        <i class="fa fa-book"></i>
                        <span>UI Elements</span>
                    <span class="dcjq-icon"></span></a>
                    <ul class="sub" style="display: none;">
                        <li><a href="http://bucketadmin.themebucket.net/general.html">General</a></li>
                        <li><a href="http://bucketadmin.themebucket.net/buttons.html">Buttons</a></li>
<li><a href="http://bucketadmin.themebucket.net/typography.html">Typography</a></li>
                        <li><a href="http://bucketadmin.themebucket.net/widget.html">Widget</a></li>
                        <li><a href="http://bucketadmin.themebucket.net/slider.html">Slider</a></li>
                        <li><a href="http://bucketadmin.themebucket.net/tree_view.html">Tree View</a></li>
                        <li><a href="http://bucketadmin.themebucket.net/nestable.html">Nestable</a></li>
                        <li><a href="http://bucketadmin.themebucket.net/grids.html">Grids</a></li>
                        <li><a href="http://bucketadmin.themebucket.net/calendar.html">Calender</a></li>
                        <li><a href="http://bucketadmin.themebucket.net/draggable_portlet.html">Draggable Portlet</a></li>
                    </ul>
                </li>
                <li>
                    <a href="http://bucketadmin.themebucket.net/fontawesome.html">
                        <i class="fa fa-bullhorn"></i>
                        <span>Fontawesome </span>
                    </a>
                </li>
                <li class="sub-menu dcjq-parent-li">
                    <a href="javascript:;" class="dcjq-parent">
                        <i class="fa fa-th"></i>
                        <span>Data Tables</span>
                    <span class="dcjq-icon"></span></a>
                    <ul class="sub" style="display: none;">
                        <li><a href="http://bucketadmin.themebucket.net/basic_table.html">Basic Table</a></li>
                        <li><a href="http://bucketadmin.themebucket.net/responsive_table.html">Responsive Table</a></li>
                        <li><a href="http://bucketadmin.themebucket.net/dynamic_table.html">Dynamic Table</a></li>
                        <li><a href="http://bucketadmin.themebucket.net/editable_table.html">Editable Table</a></li>
                    </ul>
                </li>
                <li class="sub-menu dcjq-parent-li">
                    <a href="javascript:;" class="dcjq-parent">
                        <i class="fa fa-tasks"></i>
                        <span>Form Components</span>
                    <span class="dcjq-icon"></span></a>
                    <ul class="sub" style="display: none;">
                        <li><a href="http://bucketadmin.themebucket.net/form_component.html">Form Elements</a></li>
                        <li><a href="http://bucketadmin.themebucket.net/advanced_form.html">Advanced Components</a></li>
                        <li><a href="http://bucketadmin.themebucket.net/form_wizard.html">Form Wizard</a></li>
                        <li><a href="http://bucketadmin.themebucket.net/form_validation.html">Form Validation</a></li>
                        <li><a href="http://bucketadmin.themebucket.net/file_upload.html">Muliple File Upload</a></li>

                        <li><a href="http://bucketadmin.themebucket.net/dropzone.html">Dropzone</a></li>
                        <li><a href="http://bucketadmin.themebucket.net/inline_editor.html">Inline Editor</a></li>

                    </ul>
                </li>
                <li class="sub-menu dcjq-parent-li">
                    <a href="javascript:;" class="dcjq-parent">
                        <i class="fa fa-envelope"></i>
                        <span>Mail </span>
                    <span class="dcjq-icon"></span></a>
                    <ul class="sub" style="display: none;">
                        <li><a href="http://bucketadmin.themebucket.net/mail.html">Inbox</a></li>
                        <li><a href="http://bucketadmin.themebucket.net/mail_compose.html">Compose Mail</a></li>
                        <li><a href="http://bucketadmin.themebucket.net/mail_view.html">View Mail</a></li>
                    </ul>
                </li>
                <li class="sub-menu dcjq-parent-li">
                    <a href="javascript:;" class="dcjq-parent">
                        <i class=" fa fa-bar-chart-o"></i>
                        <span>Charts</span>
                    <span class="dcjq-icon"></span></a>
                    <ul class="sub" style="display: none;">
                        <li><a href="http://bucketadmin.themebucket.net/morris.html">Morris</a></li>
                        <li><a href="http://bucketadmin.themebucket.net/chartjs.html">Chartjs</a></li>
                        <li><a href="http://bucketadmin.themebucket.net/flot_chart.html">Flot Charts</a></li>
                        <li><a href="http://bucketadmin.themebucket.net/c3_chart.html">C3 Chart</a></li>
                    </ul>
                </li>
                <li class="sub-menu dcjq-parent-li">
                    <a href="javascript:;" class="dcjq-parent">
                        <i class=" fa fa-bar-chart-o"></i>
                        <span>Maps</span>
                    <span class="dcjq-icon"></span></a>
                    <ul class="sub" style="display: none;">
                        <li><a href="http://bucketadmin.themebucket.net/google_map.html">Google Map</a></li>
                        <li><a href="http://bucketadmin.themebucket.net/vector_map.html">Vector Map</a></li>
                    </ul>
                </li>
                <li class="sub-menu dcjq-parent-li">
                    <a href="javascript:;" class="dcjq-parent">
                        <i class="fa fa-glass"></i>
                        <span>Extra</span>
                    <span class="dcjq-icon"></span></a>
                    <ul class="sub" style="display: none;">
                        <li><a href="http://bucketadmin.themebucket.net/blank.html">Blank Page</a></li>
                        <li><a href="http://bucketadmin.themebucket.net/lock_screen.html">Lock Screen</a></li>
                        <li><a href="http://bucketadmin.themebucket.net/profile.html">Profile</a></li>
                        <li><a href="http://bucketadmin.themebucket.net/invoice.html">Invoice</a></li>
                        <li><a href="http://bucketadmin.themebucket.net/pricing_table.html">Pricing Table</a></li>
                        <li><a href="http://bucketadmin.themebucket.net/timeline.html">Timeline</a></li>                    
<li><a href="http://bucketadmin.themebucket.net/gallery.html">Media Gallery</a></li><li><a href="http://bucketadmin.themebucket.net/404.html">404 Error</a></li>
                        <li><a href="http://bucketadmin.themebucket.net/500.html">500 Error</a></li>
                        <li><a href="http://bucketadmin.themebucket.net/registration.html">Registration</a></li>
                    </ul>
                </li>
                <li>
                    <a href="http://bucketadmin.themebucket.net/login.html">
                        <i class="fa fa-user"></i>
                        <span>Login Page</span>
                    </a>
                </li>
            </ul>            </div>
        <!-- sidebar menu end-->
    <div id="ascrail2000" class="nicescroll-rails" style="width: 3px; z-index: auto; cursor: default; position: absolute; top: 0px; left: 237px; height: 639px; display: block; opacity: 0.676506;"><div style="position: relative; top: 27px; float: right; width: 3px; height: 612px; border: 0px solid rgb(255, 255, 255); border-radius: 0px; background-color: rgb(31, 181, 173); background-clip: padding-box;"></div></div><div id="ascrail2000-hr" class="nicescroll-rails" style="height: 3px; z-index: auto; top: 636px; left: 0px; position: absolute; cursor: default; display: none; width: 237px; opacity: 0.676506;"><div style="position: relative; top: 0px; height: 3px; width: 240px; border: 0px solid rgb(255, 255, 255); border-radius: 0px; background-color: rgb(31, 181, 173); background-clip: padding-box;"></div></div></div>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
<section class="wrapper">

