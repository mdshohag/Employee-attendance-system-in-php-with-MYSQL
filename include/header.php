<?php
	//include'menu.php';

 session_start();
	if(!isset($_SESSION['customer_id'])){
	//	$id = $_SESSION['customer_id']; 
		echo "<script>location.href='login.php';</script>";
	}
	require_once('functions/cls_dbconfig.php');
	function __autoload($classname){
	require_once("functions/$classname.class.php");
	}
	$cls_dbconfig = new cls_dbconfig();
	$db = $cls_dbconfig->connection();
	
	$cls_admin = new cls_admin();
	$cls_menu = new cls_menu();

	$cls_employee = new cls_employee();

	$cls_manage = new cls_manage();

	$menusview = $cls_menu->view_menus();

	$userview = $cls_admin->view_user_all();

	$menusviewdata= $cls_menu->view_menus_all();
	$nullmenusviewdata= $cls_menu->view_all_null_menu();
	
	$userviewdata = $cls_admin->show_adminuser();

	$employeeviewdata = $cls_employee->show_employee();

	$rosterviewdata = $cls_manage->show_roster();

	$leaveviewdata = $cls_manage->show_leave();
	

	function connect(){
		$connection = mysqli_connect("localhost", "root", "", "db_attendance");
		if(!$connection){
			die('Failed to connect BD');
		}
		return $connection;
	}

	function show_all_menu(){
		
		$dbconnection = connect();
		
		$adminmenus = '';
		$adminmenus .= generate_multilevel_menus_all($dbconnection);
		
		echo $adminmenus;
		
	}
	
	function generate_multilevel_menus_all($dbconnection, $parent_id_data=NULL){
		$menuview = '';
		$sqll = '';
		if( is_null($parent_id_data)){
			$sqll = "select * from tbl_menus where parent_id IS NULL";
		}
		else{
			$sqll = "select * from tbl_menus where parent_id=$parent_id_data";
		}
		
		$resultt = mysqli_query($dbconnection, $sqll);
		
		while($rows = mysqli_fetch_assoc($resultt)){
			
			if($rows['page']){
				$menuview .= '<li class="hover"><a href="?pge='.$rows['page'].'"><span class="menuview-text" >'.$rows['title'].'</span> <b class="arrow fa fa-angle-down"></b></a> <b class="arrow"></b>';
			}
			else{
				$menuview .= '<li class="hover"><a href="?pge='.$rows['page'].'"><span class="menuview-text">'.$rows['title'].'</span></a>';
			}
			$menuview .= '<ul class="submenu" style="border:0px; " >'.generate_multilevel_menus_all($dbconnection, $rows['id']).'</ul>';
			
			$menuview .= '</li>';
		}
		return $menuview;
	}


	function show_menu(){
		
		$connection = connect();
		
		$menus = '';
		$menus .= generate_multilevel_menus($connection);
		
		echo $menus;
		
	}
	
	function generate_multilevel_menus($connection, $parent_id=NULL){
		$client_id = $_SESSION['customer_id'];
		$menu = '';
		$sql = '';
		if( is_null($parent_id)){
			$sql = "SELECT tbl_menus.*, tbl_menualocation.status FROM tbl_menus INNER JOIN tbl_menualocation ON tbl_menus.id = tbl_menualocation.menu_id where tbl_menualocation.user_id=$client_id and tbl_menus.parent_id IS NULL";
		}
		else{
			$sql = "SELECT tbl_menus.*, tbl_menualocation.status FROM tbl_menus INNER JOIN tbl_menualocation ON tbl_menus.id = tbl_menualocation.menu_id  where tbl_menualocation.user_id=$client_id and tbl_menus.parent_id=$parent_id";
		}
		
		$result = mysqli_query($connection, $sql);
		
		while($row = mysqli_fetch_assoc($result)){
			
			if($row['page']){
				$menu .= '<li class="hover"><a href="?pge='.$row['page'].'"><span class="menu-text" >'.$row['title'].'</span> <b class="arrow fa fa-angle-down"></b></a> <b class="arrow"></b>';
			}
			else{
				$menu .= '<li class="hover"><a href="?pge='.$row['page'].'"><span class="menu-text">'.$row['title'].'</span></a>';
			}
			$menu .= '<ul class="submenu" style="border:0px; " >'.generate_multilevel_menus($connection, $row['id']).'</ul>';
			
			$menu .= '</li>';
		}
		return $menu;
	}

	
?>



<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Company Name</title>

		<meta name="description" content="top menu &amp; navigation" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="assets/css/jquery-ui.min.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
		
		  <link rel="stylesheet" href="assets/css/style.css" />

		<link rel="stylesheet" href="assets/alert/alertify.min.css">
		<link rel="stylesheet" href="assets/alert/default.min.css">

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
		<style type="text/css">
table.main {
  width: 100%; 
border: 1px solid black;
	background-color: #9dffff;
}
table.main td {

font-family: verdana,arial, helvetica,  sans-serif;
font-size: 11px;
}
table.main th {
	border-width: 1px 1px 1px 1px;
	padding: 0px 0px 0px 0px;
 background-color: #ccb4cd;
}
table.main a{TEXT-DECORATION: none;}
table,td{ border: 1px solid #ffffff }
</style>

	</head>

	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default    navbar-collapse       h-navbar ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<div class="navbar-header pull-left">
					<a href="index.php" class="navbar-brand">
						<small>
							<i class="fa fa-leaf"></i>
							Admin
						</small>
					</a>

					<button class="pull-right navbar-toggle navbar-toggle-img collapsed" type="button" data-toggle="collapse" data-target=".navbar-buttons,.navbar-menu">
						<span class="sr-only">Toggle user menu</span>

						<img src="assets/images/avatars/user.jpg" alt="Jason's Photo" />
					</button>

					<button class="pull-right navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#sidebar">
						<span class="sr-only">Toggle sidebar</span>

						<span class="icon-bar"></span>

						<span class="icon-bar"></span>

						<span class="icon-bar"></span>
					</button>
				</div>

				<div class="navbar-buttons navbar-header pull-right  collapse navbar-collapse" role="navigation">
					<ul class="nav ace-nav">
						<li class="transparent dropdown-modal">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-bell icon-animated-bell"></i>
							</a>

							<div class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
									<ul class="nav">
										<li class="active">
											<a data-toggle="tab" href="#navbar-tasks">
												Tasks
												<span class="badge badge-danger">4</span>
											</a>
										</li>
									</ul><!-- .nav-tabs -->
							</div><!-- /.dropdown-menu -->
						</li>

						<li class="light-blue dropdown-modal user-min">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="assets/images/avatars/user.jpg" alt="Jason's Photo" />
								<span class="user-info">
									<small>Welcome,</small>
									<?php echo $_SESSION['customer_name'];?>
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="#">
										<i class="ace-icon fa fa-cog"></i>
										Settings
									</a>
								</li>

								<li>
									<a href="#profile">
										<i class="ace-icon fa fa-user"></i>
										Profile
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="#" id="signouts">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>

				<nav role="navigation" class="navbar-menu pull-left collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li>
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								Overview
	  		&nbsp;
								<i class="ace-icon fa fa-angle-down bigger-110"></i>
							</a>

							<ul class="dropdown-menu dropdown-light-blue dropdown-caret">
								<li>
									<a href="#">
										<i class="ace-icon fa fa-eye bigger-110 blue"></i>
										 Visitors
									</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="#">
								<i class="ace-icon fa fa-envelope"></i>
								Messages
								<span class="badge badge-warning"></span>
							</a>
						</li>
					</ul>
				</nav>
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar      h-sidebar                navbar-collapse collapse          ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<!--<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div>--><!-- /.sidebar-shortcuts -->

				<ul class="nav nav-list">
					<li class="hover">
						<a href="index.php?pge=home">
							<!--<i class="menu-icon fa fa-tachometer"></i>-->
							<span class="menu-text"> Dashboard </span>
						</a>

						<b class="arrow"></b>
					</li>
					<?php
						
						if($_SESSION['customer_type']=='Admin'){
													
						?>

					<li class="hover">
						<a href="index.php?pge=home" class="dropdown-toggle">
							<!--<i class="menu-icon ace-icon fa fa-tasks"></i>-->
							<span class="menu-text">
								Manu Manage
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							

							<li class="hover">
								<a href="?pge=menus">
									
									Manus Create
								</a>

								<b class="arrow"></b>
							</li>
							
							<li class="hover">
								<a href="?pge=menumanage">
									
									Manu Manage
								</a>

								<b class="arrow"></b>
							</li>

							<li class="hover">
								<a href="?pge=menualocation">
									
									Menu Alocation
								</a>

								<b class="arrow"></b>
							</li>
							
						</ul>
					</li>

					<li class="hover">
						<a href="#" class="dropdown-toggle">
							<!--<i class="menu-icon ace-icon fa fa-tasks"></i>-->
							<span class="menu-text">
								Office Admin
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="hover">
								<a href="?pge=departmentcreate">
									Department
								</a>

								<b class="arrow"></b>
							</li>
							<li class="hover">
								<a href="?pge=salaryadd">
									Salary Add
								</a>
								<b class="arrow"></b>
							</li>
							<li class="hover">
								<a href="?pge=officeholidays">
									Office Holidays
								</a>
								<b class="arrow"></b>
							</li>
							<li class="hover">
								<a href="?pge=rostercreate">
									
									Roster
								</a>
								<b class="arrow"></b>
							</li>
							<li class="hover">
								<a href="?pge=rosterassign">
									
									Roster Assign
								</a>
								<b class="arrow"></b>
							</li>

							<li class="hover">
								<a href="?pge=leavecreate">
									
									Leave
								</a>
								<b class="arrow"></b>
							</li>
							<li class="hover">
								<a href="?pge=leaveassign">
									Leave Assign
								</a>
								<b class="arrow"></b>
							</li>
							<li class="hover">
								<a href="?pge=leaveassignmanage">
									Leave Assign Manage
								</a>
								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					<li class="hover">
						<a href="#" class="dropdown-toggle">
							<!--<i class="menu-icon ace-icon fa fa-tasks"></i>-->
							<span class="menu-text">
								User & Employee Manage
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">

							<li class="hover">
								<a href="?pge=usercreate">
									User Registration
								</a>
								<b class="arrow"></b>
							</li>
							<li class="hover">
								<a href="?pge=usermanage">
									
									User Manage
								</a>

								<b class="arrow"></b>
							</li>
							
							<li class="hover">
								<a href="?pge=employeecreate">
									Employee Registration
								</a>
								<b class="arrow"></b>
							</li>
							<li class="hover">
								<a href="?pge=employeemanage">
									Employee Manage
								</a>
								<b class="arrow"></b>
							</li>
							
							<li class="hover">
								<a href="?pge=dailyattendance">
									Input Attendance
								</a>
								<b class="arrow"></b>
							</li>
							
						</ul>
					</li>
					<li class="hover">
						<a href="#" class="dropdown-toggle">
							<!--<i class="menu-icon ace-icon fa fa-tasks"></i>-->
							<span class="menu-text">
								Report
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							
							
							<li class="hover">
								<a href="?pge=daliyatten">
									Daily Attendance
								</a>
								<b class="arrow"></b>
							</li>
							<li class="hover">
								<a href="?pge=empattandetails">
									Employee Attendance Report
								</a>
								<b class="arrow"></b>
							</li>
							<li class="hover">
								<a href="?pge=monthreport">
									Month Attendance Report
								</a>
								<b class="arrow"></b>
							</li>
							<li class="hover">
								<a href="?pge=monthlyattendance">
									Monthly Attendance 
								</a>
								<b class="arrow"></b>
							</li>
							<li class="hover">
								<a href="?pge=empattanedit">
									Edi Attendance 
								</a>
								<b class="arrow"></b>
							</li>
						</ul>
					</li>

					<?php show_all_menu(); ?>

					<?php
					
					}else if($_SESSION['customer_type']=='Employee'){
						
					?>


						<?php show_menu(); ?>


						
					<?php
						} 
					?>

				</ul><!-- /.nav-list -->
			</div>
