<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<title><?php echo $this->app->getapp()->appname.$title ?></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<script>
var base_url = window.location.origin;
var host = window.location.host;
var pathArray = window.location.pathname.split( '/' );
</script>
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="<?php echo tema()?>sweat/sweetalert2.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo tema()?>global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo tema()?>global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo tema()?>global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo tema()?>global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>

<link rel="stylesheet" type="text/css" href="<?php echo tema()?>global/plugins/clockface/css/clockface.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo tema()?>global/plugins/bootstrap-datepicker/css/datepicker3.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo tema()?>global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo tema()?>global/plugins/bootstrap-colorpicker/css/colorpicker.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo tema()?>global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo tema()?>global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css"/>
<!-- END PAGE LEVEL STYLES -->
<link href="<?php echo tema()?>global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="<?php echo tema()?>global/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo tema()?>global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/>
<link href="<?php echo tema()?>global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo tema()?>global/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="<?php echo tema()?>global/css/components-md.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="<?php echo tema()?>global/css/plugins-md.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo tema()?>admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
<link id="style_color" href="<?php echo tema()?>admin/layout/css/themes/darkblue.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo tema()?>admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="<?php echo tema() ?>favicon.png"/>
</head>
<body class="page-md page-header-fixed page-quick-sidebar-over-content page-sidebar-closed-hide-logo">
<!-- BEGIN HEADER -->
<div class="page-header md-shadow-z-1-i navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<a href="<?php echo site_url('home') ?>">
			<img src="<?php echo tema() ?>admin/layout/img/logo.png" alt="logo" class="logo-default"/>
			</a>
			<div class="menu-toggler sidebar-toggler">
				<!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
			</div>
		</div>
		<!-- END LOGO -->
		<!-- BEGIN HEADER SEARCH BOX -->
		<form class="search-form search-form-expanded" action="extra_search.html" method="GET">
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Search..." name="query">
				<span class="input-group-btn">
				<a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
				</span>
			</div>
		</form>
		<!-- END HEADER SEARCH BOX -->
    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
    <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
    </a>
    <!-- END RESPONSIVE MENU TOGGLER -->
    <!-- END RESPONSIVE MENU TOGGLER -->
    <!-- BEGIN TOP NAVIGATION MENU -->
    <div class="top-menu">
      <ul class="nav navbar-nav pull-right">
        <!-- BEGIN NOTIFICATION DROPDOWN -->
        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
        <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
          <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
          <i class="icon-bell"></i>
          <span class="badge badge-default">
          7 </span>
          </a>
          <ul class="dropdown-menu">
            <li class="external">
              <h3><span class="bold">12 pending</span> notifications</h3>
              <a href="extra_profile.html">view all</a>
            </li>
            <li>
              <ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
                <li>
                  <a href="javascript:;">
                  <span class="time">just now</span>
                  <span class="details">
                  <span class="label label-sm label-icon label-success">
                  <i class="fa fa-plus"></i>
                  </span>
                  New user registered. </span>
                  </a>
                </li>
                <li>
                  <a href="javascript:;">
                  <span class="time">3 mins</span>
                  <span class="details">
                  <span class="label label-sm label-icon label-danger">
                  <i class="fa fa-bolt"></i>
                  </span>
                  Server #12 overloaded. </span>
                  </a>
                </li>
                <li>
                  <a href="javascript:;">
                  <span class="time">10 mins</span>
                  <span class="details">
                  <span class="label label-sm label-icon label-warning">
                  <i class="fa fa-bell-o"></i>
                  </span>
                  Server #2 not responding. </span>
                  </a>
                </li>
                <li>
                  <a href="javascript:;">
                  <span class="time">14 hrs</span>
                  <span class="details">
                  <span class="label label-sm label-icon label-info">
                  <i class="fa fa-bullhorn"></i>
                  </span>
                  Application error. </span>
                  </a>
                </li>
                <li>
                  <a href="javascript:;">
                  <span class="time">2 days</span>
                  <span class="details">
                  <span class="label label-sm label-icon label-danger">
                  <i class="fa fa-bolt"></i>
                  </span>
                  Database overloaded 68%. </span>
                  </a>
                </li>
                <li>
                  <a href="javascript:;">
                  <span class="time">3 days</span>
                  <span class="details">
                  <span class="label label-sm label-icon label-danger">
                  <i class="fa fa-bolt"></i>
                  </span>
                  A user IP blocked. </span>
                  </a>
                </li>
                <li>
                  <a href="javascript:;">
                  <span class="time">4 days</span>
                  <span class="details">
                  <span class="label label-sm label-icon label-warning">
                  <i class="fa fa-bell-o"></i>
                  </span>
                  Storage Server #4 not responding dfdfdfd. </span>
                  </a>
                </li>
                <li>
                  <a href="javascript:;">
                  <span class="time">5 days</span>
                  <span class="details">
                  <span class="label label-sm label-icon label-info">
                  <i class="fa fa-bullhorn"></i>
                  </span>
                  System Error. </span>
                  </a>
                </li>
                <li>
                  <a href="javascript:;">
                  <span class="time">9 days</span>
                  <span class="details">
                  <span class="label label-sm label-icon label-danger">
                  <i class="fa fa-bolt"></i>
                  </span>
                  Storage server failed. </span>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <!-- END NOTIFICATION DROPDOWN -->
        <!-- BEGIN INBOX DROPDOWN -->
        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
        <li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
          <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
          <i class="icon-envelope-open"></i>
          <span class="badge badge-default">
          4 </span>
          </a>
          <ul class="dropdown-menu">
            <li class="external">
              <h3>You have <span class="bold">7 New</span> Messages</h3>
              <a href="page_inbox.html">view all</a>
            </li>
            <li>
              <ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
                <li>
                  <a href="inbox.html?a=view">
                  <span class="photo">
                  <img src="../../assets/admin/layout3/img/avatar2.jpg" class="img-circle" alt="">
                  </span>
                  <span class="subject">
                  <span class="from">
                  Lisa Wong </span>
                  <span class="time">Just Now </span>
                  </span>
                  <span class="message">
                  Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                  </a>
                </li>
                <li>
                  <a href="inbox.html?a=view">
                  <span class="photo">
                  <img src="../../assets/admin/layout3/img/avatar3.jpg" class="img-circle" alt="">
                  </span>
                  <span class="subject">
                  <span class="from">
                  Richard Doe </span>
                  <span class="time">16 mins </span>
                  </span>
                  <span class="message">
                  Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                  </a>
                </li>
                <li>
                  <a href="inbox.html?a=view">
                  <span class="photo">
                  <img src="../../assets/admin/layout3/img/avatar1.jpg" class="img-circle" alt="">
                  </span>
                  <span class="subject">
                  <span class="from">
                  Bob Nilson </span>
                  <span class="time">2 hrs </span>
                  </span>
                  <span class="message">
                  Vivamus sed nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                  </a>
                </li>
                <li>
                  <a href="inbox.html?a=view">
                  <span class="photo">
                  <img src="../../assets/admin/layout3/img/avatar2.jpg" class="img-circle" alt="">
                  </span>
                  <span class="subject">
                  <span class="from">
                  Lisa Wong </span>
                  <span class="time">40 mins </span>
                  </span>
                  <span class="message">
                  Vivamus sed auctor 40% nibh congue nibh... </span>
                  </a>
                </li>
                <li>
                  <a href="inbox.html?a=view">
                  <span class="photo">
                  <img src="../../assets/admin/layout3/img/avatar3.jpg" class="img-circle" alt="">
                  </span>
                  <span class="subject">
                  <span class="from">
                  Richard Doe </span>
                  <span class="time">46 mins </span>
                  </span>
                  <span class="message">
                  Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <!-- END INBOX DROPDOWN -->
        <!-- BEGIN TODO DROPDOWN -->
        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
        <li class="dropdown dropdown-extended dropdown-tasks" id="header_task_bar">
          <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
          <i class="icon-calendar"></i>
          <span class="badge badge-default">
          3 </span>
          </a>
          <ul class="dropdown-menu extended tasks">
            <li class="external">
              <h3>You have <span class="bold">12 pending</span> tasks</h3>
              <a href="page_todo.html">view all</a>
            </li>
            <li>
              <ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
                <li>
                  <a href="javascript:;">
                  <span class="task">
                  <span class="desc">New release v1.2 </span>
                  <span class="percent">30%</span>
                  </span>
                  <span class="progress">
                  <span style="width: 40%;" class="progress-bar progress-bar-success" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">40% Complete</span></span>
                  </span>
                  </a>
                </li>
                <li>
                  <a href="javascript:;">
                  <span class="task">
                  <span class="desc">Application deployment</span>
                  <span class="percent">65%</span>
                  </span>
                  <span class="progress">
                  <span style="width: 65%;" class="progress-bar progress-bar-danger" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">65% Complete</span></span>
                  </span>
                  </a>
                </li>
                <li>
                  <a href="javascript:;">
                  <span class="task">
                  <span class="desc">Mobile app release</span>
                  <span class="percent">98%</span>
                  </span>
                  <span class="progress">
                  <span style="width: 98%;" class="progress-bar progress-bar-success" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">98% Complete</span></span>
                  </span>
                  </a>
                </li>
                <li>
                  <a href="javascript:;">
                  <span class="task">
                  <span class="desc">Database migration</span>
                  <span class="percent">10%</span>
                  </span>
                  <span class="progress">
                  <span style="width: 10%;" class="progress-bar progress-bar-warning" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">10% Complete</span></span>
                  </span>
                  </a>
                </li>
                <li>
                  <a href="javascript:;">
                  <span class="task">
                  <span class="desc">Web server upgrade</span>
                  <span class="percent">58%</span>
                  </span>
                  <span class="progress">
                  <span style="width: 58%;" class="progress-bar progress-bar-info" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">58% Complete</span></span>
                  </span>
                  </a>
                </li>
                <li>
                  <a href="javascript:;">
                  <span class="task">
                  <span class="desc">Mobile development</span>
                  <span class="percent">85%</span>
                  </span>
                  <span class="progress">
                  <span style="width: 85%;" class="progress-bar progress-bar-success" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">85% Complete</span></span>
                  </span>
                  </a>
                </li>
                <li>
                  <a href="javascript:;">
                  <span class="task">
                  <span class="desc">New UI release</span>
                  <span class="percent">38%</span>
                  </span>
                  <span class="progress progress-striped">
                  <span style="width: 38%;" class="progress-bar progress-bar-important" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">38% Complete</span></span>
                  </span>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <!-- END TODO DROPDOWN -->
        <!-- BEGIN USER LOGIN DROPDOWN -->
        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
        <li class="dropdown dropdown-user">
          <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
          <img alt="" class="img-circle" src="<?php echo employee().$this->app->getPhoto()->photo?>"/>
          <span class="username username-hide-on-mobile">
          <?php echo $this->session->userdata('username'); ?> </span>
          <i class="fa fa-angle-down"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-default">
            <li>
              <a href="extra_profile.html">
              <i class="icon-user"></i> My Profile </a>
            </li>
            <li>
              <a href="page_calendar.html">
              <i class="icon-calendar"></i> My Calendar </a>
            </li>
            <li>
              <a href="inbox.html">
              <i class="icon-envelope-open"></i> My Inbox <span class="badge badge-danger">
              3 </span>
              </a>
            </li>
            <li>
              <a href="page_todo.html">
              <i class="icon-rocket"></i> My Tasks <span class="badge badge-success">
              7 </span>
              </a>
            </li>
            <li class="divider">
            </li>
            <li>
              <a href="<?php echo site_url('welcome/dude/change') ?>">
              <i class="icon-lock"></i> Change Company </a>
            </li>
            <li>
              <a href="<?php echo site_url('home/logout') ?>">
              <i class="icon-key"></i> Log Out </a>
            </li>
          </ul>
        </li>
        <!-- END USER LOGIN DROPDOWN -->
        <!-- BEGIN QUICK SIDEBAR TOGGLER -->
        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
        <li class="dropdown dropdown-quick-sidebar-toggler">
          <a href="javascript:;" class="dropdown-toggle">
          <i class="icon-logout"></i>
          </a>
        </li>
        <!-- END QUICK SIDEBAR TOGGLER -->
      </ul>
    </div>
    <!-- END TOP NAVIGATION MENU -->
  </div>
  <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
		<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
		<div class="page-sidebar navbar-collapse collapse">
      <ul class="page-sidebar-menu page-sidebar-menu-light " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="margin-top:25px;">
        <li class="heading">
          <h3 class="uppercase"><?php echo $this->app->getcompanydetil($this->session->userdata('company_id'))->company_name ?></h3>
        </li>


<?php echo get_all_menu() ?>
      </ul>
      <!-- END SIDEBAR MENU -->
    </div>
  </div>
  <!-- END SIDEBAR -->
