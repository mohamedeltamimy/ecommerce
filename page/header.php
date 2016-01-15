<!DOCTYPE html>
<!-- Template Name: Rapido - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.0 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<?php

switch (isset($_GET['p'])) {
    case "products":
        $page_name = "All Product";
        break;
    case "productsx":
        $page_name = "Add Products";
        break;
    case "categories":
        $page_name = "Categories";
        break;
    case "user":
        $page_name = "All user";
        break;
    case "store":
        $page_name = "Store";
        break;
    case "filter":
        $page_name = "Filter";
        break;
    case "options":
        $page_name = "Options";
        break;
    case "customers":
        $page_name = "Customers";
        break;
    case "order":
        $page_name = "Orders";
        break;
    case "setting":
        $page_name = "Setting";
        break;
    default:
        $page_name = "Dashboard";;
}
/*
if(isset($_GET['p'])){
	$page_name = $_GET['p'];	
}else{
	$page_name = "Dashboard";
}
*/
?>
	<!--<![endif]-->
	<!-- start: HEAD -->
	<head>
		<title>Rapido - Responsive Admin Template</title>
		<!-- start: META -->
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
		<!-- end: META -->
		<!-- start: MAIN CSS -->
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,200,100,800' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/plugins/iCheck/skins/all.css">
		<link rel="stylesheet" href="assets/plugins/perfect-scrollbar/src/perfect-scrollbar.css">
		<link rel="stylesheet" href="assets/plugins/animate.css/animate.min.css">
		<!-- end: MAIN CSS -->
		<!-- start: CSS REQUIRED FOR SUBVIEW CONTENTS -->
		<link rel="stylesheet" href="assets/plugins/owl-carousel/owl-carousel/owl.carousel.css">
		<link rel="stylesheet" href="assets/plugins/owl-carousel/owl-carousel/owl.theme.css">
		<link rel="stylesheet" href="assets/plugins/owl-carousel/owl-carousel/owl.transitions.css">
		<link rel="stylesheet" href="assets/plugins/summernote/dist/summernote.css">
		<link rel="stylesheet" href="assets/plugins/fullcalendar/fullcalendar/fullcalendar.css">
		<link rel="stylesheet" href="assets/plugins/toastr/toastr.min.css">
		<link rel="stylesheet" href="assets/plugins/bootstrap-select/bootstrap-select.min.css">
		<link rel="stylesheet" href="assets/plugins/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css">
		<link rel="stylesheet" href="assets/plugins/DataTables/media/css/DT_bootstrap.css">
		<link rel="stylesheet" href="assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css">
		<link rel="stylesheet" href="assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css">
		<!-- end: CSS REQUIRED FOR THIS SUBVIEW CONTENTS-->
		<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
		<link rel="stylesheet" href="assets/plugins/jQuery-File-Upload/css/jquery.fileupload-ui.css">
		<link rel="stylesheet" href="assets/plugins/dropzone/downloads/css/dropzone.css">
		<!-- CSS adjustments for browsers with JavaScript disabled -->
		<noscript>
			<link rel="stylesheet" href="assets/plugins/jQuery-File-Upload/css/jquery.fileupload-ui-noscript.css">
		</noscript>
		<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CORE CSS -->
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/styles-responsive.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-default.css" type="text/css" id="skin_color">
		<link rel="stylesheet" href="assets/css/print.css" type="text/css" media="print"/>
		<!-- end: CORE CSS -->
		<link rel="shortcut icon" href="favicon.ico" />
	</head>
	<!-- end: HEAD -->
	<!-- start: BODY -->
	<body>
		<!-- start: SLIDING BAR (SB) -->
		<div id="slidingbar-area">
			<div id="slidingbar">
				<div class="row">
					<!-- start: SLIDING BAR FIRST COLUMN -->
					<div class="col-md-4 col-sm-4">
						<h2>My Options</h2>
						<div class="row">
							<div class="col-xs-6 col-lg-3">
								<button class="btn btn-icon btn-block space10">
									<i class="fa fa-folder-open-o"></i>
									Projects <span class="badge badge-info partition-red"> 4 </span>
								</button>
							</div>
							<div class="col-xs-6 col-lg-3">
								<button class="btn btn-icon btn-block space10">
									<i class="fa fa-envelope-o"></i>
									Messages <span class="badge badge-info partition-red"> 23 </span>
								</button>
							</div>
							<div class="col-xs-6 col-lg-3">
								<button class="btn btn-icon btn-block space10">
									<i class="fa fa-calendar-o"></i>
									Calendar <span class="badge badge-info partition-blue"> 5 </span>
								</button>
							</div>
							<div class="col-xs-6 col-lg-3">
								<button class="btn btn-icon btn-block space10">
									<i class="fa fa-bell-o"></i>
									Notifications <span class="badge badge-info partition-red"> 9 </span>
								</button>
							</div>
						</div>
					</div>
					<!-- end: SLIDING BAR FIRST COLUMN -->
					<!-- start: SLIDING BAR SECOND COLUMN -->
					<div class="col-md-4 col-sm-4">
						<h2>My Recent Works</h2>
						<div class="blog-photo-stream margin-bottom-30">
							<ul class="list-unstyled">
								<li>
									<a href="#"><img alt="" src="assets/images/image01_th.jpg"></a>
								</li>
								<li>
									<a href="#"><img alt="" src="assets/images/image02_th.jpg"></a>
								</li>
								<li>
									<a href="#"><img alt="" src="assets/images/image03_th.jpg"></a>
								</li>
								<li>
									<a href="#"><img alt="" src="assets/images/image04_th.jpg"></a>
								</li>
								<li>
									<a href="#"><img alt="" src="assets/images/image05_th.jpg"></a>
								</li>
								<li>
									<a href="#"><img alt="" src="assets/images/image06_th.jpg"></a>
								</li>
								<li>
									<a href="#"><img alt="" src="assets/images/image07_th.jpg"></a>
								</li>
								<li>
									<a href="#"><img alt="" src="assets/images/image08_th.jpg"></a>
								</li>
								<li>
									<a href="#"><img alt="" src="assets/images/image09_th.jpg"></a>
								</li>
								<li>
									<a href="#"><img alt="" src="assets/images/image10_th.jpg"></a>
								</li>
							</ul>
						</div>
					</div>
					<!-- end: SLIDING BAR SECOND COLUMN -->
					<!-- start: SLIDING BAR THIRD COLUMN -->
					<div class="col-md-4 col-sm-4">
						<h2>My Info</h2>
						<address class="margin-bottom-40">
							Peter Clark
							<br>
							12345 Street Name, City Name, United States
							<br>
							P: (641)-734-4763
							<br>
							Email:
							<a href="#">
								peter.clark@example.com
							</a>
						</address>
						<a class="btn btn-transparent-white" href="#">
							<i class="fa fa-pencil"></i> Edit
						</a>
					</div>
					<!-- end: SLIDING BAR THIRD COLUMN -->
				</div>
				<div class="row">
					<!-- start: SLIDING BAR TOGGLE BUTTON -->
					<div class="col-md-12 text-center">
						<a href="#" class="sb_toggle"><i class="fa fa-chevron-up"></i></a>
					</div>
					<!-- end: SLIDING BAR TOGGLE BUTTON -->
				</div>
			</div>
		</div>
		<!-- end: SLIDING BAR -->
		<div class="main-wrapper">
			<!-- start: TOPBAR -->
			<header class="topbar navbar navbar-inverse navbar-fixed-top inner">
				<!-- start: TOPBAR CONTAINER -->
				<div class="container">
					<div class="navbar-header">
						<a class="sb-toggle-left hidden-md hidden-lg" href="#main-navbar">
							<i class="fa fa-bars"></i>
						</a>
						<!-- start: LOGO -->
						<a class="navbar-brand" href="index.html">
							<img src="assets/images/logo.png" alt="Rapido"/>
						</a>
						<!-- end: LOGO -->
					</div>
					<div class="topbar-tools">
						<!-- start: TOP NAVIGATION MENU -->
						<ul class="nav navbar-right">
							<!-- start: USER DROPDOWN -->
							<li class="dropdown current-user">
								<a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true" href="#">
									<img src="assets/images/avatar-1-small.jpg" class="img-circle" alt=""> <span class="username hidden-xs">Peter Clark</span> <i class="fa fa-caret-down "></i>
								</a>
								<ul class="dropdown-menu dropdown-dark">
									<li>
										<a href="pages_user_profile.html">
											My Profile
										</a>
									</li>
									<li>
										<a href="pages_calendar.html">
											My Calendar
										</a>
									</li>
									<li>
										<a href="pages_messages.html">
											My Messages 
										</a>
									</li>
									
									<li>
										<a href="#">
											Log Out
										</a>
									</li>
								</ul>
							</li>
							<!-- end: USER DROPDOWN -->
							<li class="right-menu-toggle">
								<a href="#" class="sb-toggle-right">
									<i class="fa fa-globe toggle-icon"></i> <i class="fa fa-caret-right"></i> <span class="notifications-count badge badge-default hide"> 3</span>
								</a>
							</li>
						</ul>
						<!-- end: TOP NAVIGATION MENU -->
					</div>
				</div>
				<!-- end: TOPBAR CONTAINER -->
			</header>
			<!-- end: TOPBAR -->
			<!-- start: PAGESLIDE LEFT -->
			<a class="closedbar inner hidden-sm hidden-xs" href="#">
			</a>
			<nav id="pageslide-left" class="pageslide inner">
				<div class="navbar-content">
					<!-- start: SIDEBAR -->
					<div class="main-navigation left-wrapper transition-left">
						<div class="navigation-toggler hidden-sm hidden-xs">
							<a href="#main-navbar" class="sb-toggle-left">
							</a>
						</div>
						<div class="user-profile border-top padding-horizontal-10 block">
							<div class="inline-block">
								<img src="assets/images/avatar-1.jpg" alt="">
							</div>
							<div class="inline-block">
								<h5 class="no-margin"> Welcome </h5>
								<h4 class="no-margin"> Peter Clark </h4>
								<a class="btn user-options sb_toggle">
									<i class="fa fa-cog"></i>
								</a>
							</div>
						</div>
						<!-- start: MAIN NAVIGATION MENU -->
						<ul class="main-navigation-menu">
							<li class="active open">
								<a href="index.html"><i class="fa fa-home"></i> <span class="title"> Dashboard </span> </a>
							</li>
							<li>
								<a href="javascript:void(0)"><i class="fa fa-desktop"></i> <span class="title"> Products </span><i class="icon-arrow"></i> </a>
								<ul class="sub-menu">
									
									<li>
										<a href="?p=products">
											<span class="All Products"> All Products </span>
										</a>
									</li>
									<li>
										<a href="?p=productsx">
											<span class="title"> Add Products </span>
										</a>
									</li>
									
								</ul>
							</li>
							<li>
								<a href="?p=categories"><i class="fa fa-sitemap"></i> <span class="title">Categories</span> </a>
							</li>
							<li>
								<a href="?p=user"><i class="fa fa-user"></i> <span class="title">User</span> </a>
							</li>
							<li>
								<a href="?p=store"><i class="fa fa-shopping-cart"></i> <span class="title">Store</span> </a>
							</li>
							<li>
								<a href="?p=filter"><i class="fa fa-bolt"></i> <span class="title">Filter</span> </a>
							</li>
							<li>
								<a href="?p=options"><i class="fa fa-gear"></i> <span class="title">Options</span> </a>
							</li>
							<li>
								<a href="?p=customers"><i class="fa fa-group"></i> <span class="title">Customers</span> </a>
							</li>
							<li>
								<a href="?p=order"><i class="fa fa-suitcase"></i> <span class="title">Order</span> </a>
							</li>
							<li>
								<a href="?p=setting"><i class="fa fa-cogs"></i> <span class="title">Setting</span> </a>
							</li>

						</ul>
						<!-- end: MAIN NAVIGATION MENU -->
					</div>
					<!-- end: SIDEBAR -->
				</div>
				<div class="slide-tools">
					<div class="col-xs-6 text-left no-padding">
						<a class="btn btn-sm status" href="#">
							Status <i class="fa fa-dot-circle-o text-green"></i> <span>Online</span>
						</a>
					</div>
					<div class="col-xs-6 text-right no-padding">
						<a class="btn btn-sm log-out text-right" href="login_login.html">
							<i class="fa fa-power-off"></i> Log Out
						</a>
					</div>
				</div>
			</nav>
			<!-- end: PAGESLIDE LEFT -->
			<!-- start: PAGESLIDE RIGHT -->
			<div id="pageslide-right" class="pageslide slide-fixed inner">
				<div class="right-wrapper">
					<div class="notifications">
						<div class="pageslide-title">
							You have 11 notifications
						</div>
						<ul class="pageslide-list">
							<li>
								<a href="javascript:void(0)">
									<span class="label label-primary"><i class="fa fa-user"></i></span> <span class="message"> New user registration</span> <span class="time"> 1 min</span>
								</a>
							</li>
							<li>
								<a href="javascript:void(0)">
									<span class="label label-success"><i class="fa fa-comment"></i></span> <span class="message"> New comment</span> <span class="time"> 7 min</span>
								</a>
							</li>
							<li>
								<a href="javascript:void(0)">
									<span class="label label-success"><i class="fa fa-comment"></i></span> <span class="message"> New comment</span> <span class="time"> 8 min</span>
								</a>
							</li>
							<li>
								<a href="javascript:void(0)">
									<span class="label label-success"><i class="fa fa-comment"></i></span> <span class="message"> New comment</span> <span class="time"> 16 min</span>
								</a>
							</li>
							<li>
								<a href="javascript:void(0)">
									<span class="label label-primary"><i class="fa fa-user"></i></span> <span class="message"> New user registration</span> <span class="time"> 36 min</span>
								</a>
							</li>
							<li>
								<a href="javascript:void(0)">
									<span class="label label-warning"><i class="fa fa-shopping-cart"></i></span> <span class="message"> 2 items sold</span> <span class="time"> 1 hour</span>
								</a>
							</li>
							<li class="warning">
								<a href="javascript:void(0)">
									<span class="label label-danger"><i class="fa fa-user"></i></span> <span class="message"> User deleted account</span> <span class="time"> 2 hour</span>
								</a>
							</li>
						</ul>
						<div class="view-all">
							<a href="javascript:void(0)">
								See all notifications <i class="fa fa-arrow-circle-o-right"></i>
							</a>
						</div>
					</div>
					<div class="hidden-xs" id="style_selector">
						<div id="style_selector_container">
							<div class="pageslide-title">
								Style Selector
							</div>
							<div class="box-title">
								Choose Your Layout Style
							</div>
							<div class="input-box">
								<div class="input">
									<select name="layout" class="form-control">
										<option value="default">Wide</option><option value="boxed">Boxed</option>
									</select>
								</div>
							</div>
							<div class="box-title">
								Choose Your Header Style
							</div>
							<div class="input-box">
								<div class="input">
									<select name="header" class="form-control">
										<option value="fixed">Fixed</option><option value="default">Default</option>
									</select>
								</div>
							</div>
							<div class="box-title">
								Choose Your Sidebar Style
							</div>
							<div class="input-box">
								<div class="input">
									<select name="sidebar" class="form-control">
										<option value="fixed">Fixed</option><option value="default">Default</option>
									</select>
								</div>
							</div>
							<div class="box-title">
								Choose Your Footer Style
							</div>
							<div class="input-box">
								<div class="input">
									<select name="footer" class="form-control">
										<option value="default">Default</option><option value="fixed">Fixed</option>
									</select>
								</div>
							</div>
							<div class="box-title">
								10 Predefined Color Schemes
							</div>
							<div class="images icons-color">
								<a href="#" id="default"><img src="assets/images/color-1.png" alt="" class="active"></a>
								<a href="#" id="style2"><img src="assets/images/color-2.png" alt=""></a>
								<a href="#" id="style3"><img src="assets/images/color-3.png" alt=""></a>
								<a href="#" id="style4"><img src="assets/images/color-4.png" alt=""></a>
								<a href="#" id="style5"><img src="assets/images/color-5.png" alt=""></a>
								<a href="#" id="style6"><img src="assets/images/color-6.png" alt=""></a>
								<a href="#" id="style7"><img src="assets/images/color-7.png" alt=""></a>
								<a href="#" id="style8"><img src="assets/images/color-8.png" alt=""></a>
								<a href="#" id="style9"><img src="assets/images/color-9.png" alt=""></a>
								<a href="#" id="style10"><img src="assets/images/color-10.png" alt=""></a>
							</div>
							<div class="box-title">
								Backgrounds for Boxed Version
							</div>
							<div class="images boxed-patterns">
								<a href="#" id="bg_style_1"><img src="assets/images/bg.png" alt=""></a>
								<a href="#" id="bg_style_2"><img src="assets/images/bg_2.png" alt=""></a>
								<a href="#" id="bg_style_3"><img src="assets/images/bg_3.png" alt=""></a>
								<a href="#" id="bg_style_4"><img src="assets/images/bg_4.png" alt=""></a>
								<a href="#" id="bg_style_5"><img src="assets/images/bg_5.png" alt=""></a>
							</div>
							<div class="style-options">
								<a href="#" class="clear_style">
									Clear Styles
								</a>
								<a href="#" class="save_style">
									Save Styles
								</a>
							</div>
						</div>
						<div class="style-toggle open"></div>
					</div>
				</div>
			</div>
			<!-- end: PAGESLIDE RIGHT -->
			<!-- start: MAIN CONTAINER -->
			<div class="main-container inner">
				<!-- start: PAGE -->
				<div class="main-content">
					<!-- start: PANEL CONFIGURATION MODAL FORM -->
					<div class="modal fade" id="panel-config" tabindex="-1" role="dialog" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
										&times;
									</button>
									<h4 class="modal-title">Panel Configuration</h4>
								</div>
								<div class="modal-body">
									Here will be a configuration form
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">
										Close
									</button>
									<button type="button" class="btn btn-primary">
										Save changes
									</button>
								</div>
							</div>
							<!-- /.modal-content -->
						</div>
						<!-- /.modal-dialog -->
					</div>
					<!-- /.modal -->
					<!-- end: SPANEL CONFIGURATION MODAL FORM -->
					<div class="container">
						<!-- start: PAGE HEADER -->
						<!-- start: TOOLBAR -->
						<div class="toolbar row">
							<div class="col-sm-6 hidden-xs">
								<div class="page-header">
									<h1><?php echo $page_name ; ?> <small> </small></h1>
								</div>
							</div>
							<div class="col-sm-6 col-xs-12">
								<a href="#" class="back-subviews">
									<i class="fa fa-chevron-left"></i> BACK
								</a>
								<a href="#" class="close-subviews">
									<i class="fa fa-times"></i> CLOSE
								</a>
								<div class="toolbar-tools pull-right">
									<!-- start: TOP NAVIGATION MENU -->
									<ul class="nav navbar-right">
										<!-- start: TO-DO DROPDOWN -->
										<li class="dropdown">
											<a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true" href="#">
												<i class="fa fa-plus"></i> SUBVIEW
												<div class="tooltip-notification hide">
													<div class="tooltip-notification-arrow"></div>
													<div class="tooltip-notification-inner">
														<div>
															<div class="semi-bold">
																HI THERE!
															</div>
															<div class="message">
																Try the Subview Live Experience
															</div>
														</div>
													</div>
												</div>
											</a>
											<ul class="dropdown-menu dropdown-light dropdown-subview">
												<li class="dropdown-header">
													Notes
												</li>
												<li>
													<a href="#newNote" class="new-note"><span class="fa-stack"> <i class="fa fa-file-text-o fa-stack-1x fa-lg"></i> <i class="fa fa-plus fa-stack-1x stack-right-bottom text-danger"></i> </span> Add new note</a>
												</li>
												<li>
													<a href="#readNote" class="read-all-notes"><span class="fa-stack"> <i class="fa fa-file-text-o fa-stack-1x fa-lg"></i> <i class="fa fa-share fa-stack-1x stack-right-bottom text-danger"></i> </span> Read all notes</a>
												</li>
												<li class="dropdown-header">
													Calendar
												</li>
												<li>
													<a href="#newEvent" class="new-event"><span class="fa-stack"> <i class="fa fa-calendar-o fa-stack-1x fa-lg"></i> <i class="fa fa-plus fa-stack-1x stack-right-bottom text-danger"></i> </span> Add new event</a>
												</li>
												<li>
													<a href="#showCalendar" class="show-calendar"><span class="fa-stack"> <i class="fa fa-calendar-o fa-stack-1x fa-lg"></i> <i class="fa fa-share fa-stack-1x stack-right-bottom text-danger"></i> </span> Show calendar</a>
												</li>
												<li class="dropdown-header">
													Contributors
												</li>
												<li>
													<a href="#newContributor" class="new-contributor"><span class="fa-stack"> <i class="fa fa-user fa-stack-1x fa-lg"></i> <i class="fa fa-plus fa-stack-1x stack-right-bottom text-danger"></i> </span> Add new contributor</a>
												</li>
												<li>
													<a href="#showContributors" class="show-contributors"><span class="fa-stack"> <i class="fa fa-user fa-stack-1x fa-lg"></i> <i class="fa fa-share fa-stack-1x stack-right-bottom text-danger"></i> </span> Show all contributor</a>
												</li>
											</ul>
										</li>
										<li class="dropdown">
											<a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true" href="#">
												<span class="messages-count badge badge-default hide">3</span> <i class="fa fa-envelope"></i> MESSAGES
											</a>
											<ul class="dropdown-menu dropdown-light dropdown-messages">
												<li>
													<span class="dropdown-header"> You have 9 messages</span>
												</li>
												<li>
													<div class="drop-down-wrapper ps-container">
														<ul>
															<li class="unread">
																<a href="javascript:;" class="unread">
																	<div class="clearfix">
																		<div class="thread-image">
																			<img src="./assets/images/avatar-2.jpg" alt="">
																		</div>
																		<div class="thread-content">
																			<span class="author">Nicole Bell</span>
																			<span class="preview">Duis mollis, est non commodo luctus, nisi erat porttitor ligula...</span>
																			<span class="time"> Just Now</span>
																		</div>
																	</div>
																</a>
															</li>
															<li>
																<a href="javascript:;" class="unread">
																	<div class="clearfix">
																		<div class="thread-image">
																			<img src="./assets/images/avatar-3.jpg" alt="">
																		</div>
																		<div class="thread-content">
																			<span class="author">Steven Thompson</span>
																			<span class="preview">Duis mollis, est non commodo luctus, nisi erat porttitor ligula...</span>
																			<span class="time">8 hrs</span>
																		</div>
																	</div>
																</a>
															</li>
															<li>
																<a href="javascript:;">
																	<div class="clearfix">
																		<div class="thread-image">
																			<img src="./assets/images/avatar-5.jpg" alt="">
																		</div>
																		<div class="thread-content">
																			<span class="author">Kenneth Ross</span>
																			<span class="preview">Duis mollis, est non commodo luctus, nisi erat porttitor ligula...</span>
																			<span class="time">14 hrs</span>
																		</div>
																	</div>
																</a>
															</li>
														</ul>
													</div>
												</li>
												<li class="view-all">
													<a href="pages_messages.html">
														See All
													</a>
												</li>
											</ul>
										</li>
										<li class="menu-search">
											<a href="#">
												<i class="fa fa-search"></i> SEARCH
											</a>
											<!-- start: SEARCH POPOVER -->
											<div class="popover bottom search-box transition-all">
												<div class="arrow"></div>
												<div class="popover-content">
													<!-- start: SEARCH FORM -->
													<form class="" id="searchform" action="#">
														<div class="input-group">
															<input type="text" class="form-control" placeholder="Search">
															<span class="input-group-btn">
																<button class="btn btn-main-color btn-squared" type="button">
																	<i class="fa fa-search"></i>
																</button> </span>
														</div>
													</form>
													<!-- end: SEARCH FORM -->
												</div>
											</div>
											<!-- end: SEARCH POPOVER -->
										</li>
									</ul>
									<!-- end: TOP NAVIGATION MENU -->
								</div>
							</div>
						</div>
						<!-- end: TOOLBAR -->
						<!-- end: PAGE HEADER -->
						<!-- start: BREADCRUMB -->
						<div class="row">
							<div class="col-md-12">
								<ol class="breadcrumb">
									<li>
										<a href="?p=dashboard">
											Home
										</a>
									</li>
									<li class="active">
										<?php echo $page_name; ?>
									</li>
								</ol>
							</div>
						</div>