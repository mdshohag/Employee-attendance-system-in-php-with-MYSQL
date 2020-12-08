<?php

$leaveid = $_GET['leave_id'];

$leaveview = $cls_manage->show_leave_id($leaveid);
$leavedata = $leaveview->fetch_assoc();


?>

<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="index.php?pge=home">Home</a>
							</li>
							<li class="active">Leave </li>
						</ul><!-- /.breadcrumb -->

					</div>

					<div class="page-content">
						<div class="row">
							<div class="col-xs-12">

							<div class="tab-content">
							
							<form class="form-horizontal" id="leaveupdate" role="form">
								<center><h3>Leave Create</h3></center>


								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Leave Name </label>

									<div class="col-sm-9">
										<input type="text" id="leavename" name="leavename" value="<?php echo $leavedata['leave_name']; ?>" class="col-xs-10 col-sm-7" />
										<input type="hidden" name="leaveid" value="<?php echo $leavedata['id']; ?>"/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Total Day </label>

									<div class="col-sm-9">
										<input type="text" id="totalday" name="totalday" value="<?php echo $leavedata['total_day']; ?>" class="col-xs-10 col-sm-7" />
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-4 col-sm-offset-4">
										<input type="submit" class="btn btn-sm btn-success" value="Update">
									</div>
								</div>
							</form>

							

						</div>

							</div>	
						</div>
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div>