<?php
	if(!isset($_SESSION['customer_id'])){
	//	$id = $_SESSION['customer_id']; 
		echo "<script>location.href='login.php';</script>";
	}
	?>		
			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>

							<li class="active">
								<a href="index.php?pge=home">Dashboard</a>  
							</li>
						</ul><!-- /.breadcrumb -->

					</div>
					
					<div class="page-content">
					

						<div class="page-header">
							<h1>
								<?php
								

							$from = new DateTimeZone('GMT');
							$to   = new DateTimeZone('Asia/Dhaka');
							$currDate     = new DateTime('now', $from);
							$currDate->setTimezone($to);

							echo $date = $currDate->format('Y-m-j H:i:s');
							




//Example Y-m-d H:i:s date string.
$CHECK_TIME = '2019-06-27 09:12.00';
 
//12 hour format with lowercase AM/PM
//echo date("g:ia", strtotime($date));

$in_datetime = '00:00:00';
$enterdate = '08/04/2010';
//echo $newDateTime = date('h:i A', strtotime($currentDateTime));

 //echo $addintime = date("Y-m-j h:i A", strtotime($date)); 

// echo $in_time = $enterdate.' '.$addintime; 

//echo $cenvertedTime = date('Y-m-d g:i a',strtotime('+4 hour',strtotime($CHECK_TIME)));

								?>
								
							</h1>
						</div>
						
						<!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="alert alert-info visible-sm visible-xs">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>
									mobile
								</div>

								<div class="well well-sm visible-sm visible-xs">
									mobile
								</div>

								<!--<div class="hidden-sm hidden-xs">
									<button type="button" class="sidebar-collapse btn btn-white btn-primary" data-target="#sidebar">
										<i class="ace-icon fa fa-angle-double-up" data-icon1="ace-icon fa fa-angle-double-up" data-icon2="ace-icon fa fa-angle-double-down"></i>
										Collapse/Expand Menu
									</button>
								</div>-->
								
								
						

								

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->