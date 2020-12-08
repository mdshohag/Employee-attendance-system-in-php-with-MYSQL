<?php


	$leaveid = $_GET['leaveid'];

	$view_leaveassign = $cls_manage->view_leaveassign($leaveid);

	$leaveassigndata = $view_leaveassign->fetch_assoc();

	$departmentid = $leaveassigndata['department_id'];

	$employeeid = $leaveassigndata['employee_id'];

	$leaveid = $leaveassigndata['leave_id'];

?>

<div class="main-content">
	<div class="main-content-inner">
		<div class="breadcrumbs ace-save-state" id="breadcrumbs">
			<ul class="breadcrumb">
				<li>
					<i class="ace-icon fa fa-home home-icon"></i>
					<a href="index.php?pge=home">Home</a>
				</li>
				<li>
					
					<a href="index.php?pge=leaveassignmanage">Leave Entry</a>
				</li>
				<li class="active">Leave Entry Update</li>
			</ul><!-- /.breadcrumb -->

		</div>

		<div class="page-content">
			<div class="row">
				<div class="col-xs-12">

				<div class="tab-content">
				
				<form class="form-horizontal" id="leaveentryedit" role="form">
					<center><h3>Leave Entry Update</h3></center>
					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Department </label>
						<div class="col-sm-9">
							<input type="hidden" id="leaveassignid" name="leaveassignid" value="<?php echo $leaveassigndata['id']; ?>" />
							<select name="departid" id="departid" class="col-xs-10 col-sm-7">
								  <option value="">Select Department</option>
								 
								  <?php 
									$departmentviewdata = $cls_manage->show_department(); 
									while($departdata = $departmentviewdata->fetch_assoc())
										{

										 $departid = $departdata['id'];

										  $departname = $departdata['name_department'];

									?>
								 	<option <?php if($departid==$departmentid) { ?> selected <?php } ?> value="<?php echo $departdata['id']; ?>">

										<?php if(!empty($departname)) { ?><?php echo $departname; } ?>
									</option>

									  <?php
										}
									?>

							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-2">Employee ID</label>
						<div class="col-sm-9">
							<select name="employeeid" id="employeeview" class="col-xs-10 col-sm-7">
																				
								<option value="<?php echo $leaveassigndata['employee_id']; ?>"><?php echo $leaveassigndata['card_id']; ?></option> 
									  										
							</select>
						</div>
					</div>
					<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Employee Name</label>
					<div class="col-sm-9">

						<select id="employeename" class="col-xs-10 col-sm-7">
							<option ><?php echo $leaveassigndata['fullname']; ?></option> 

						</select>
					</div>
				</div>
				<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Leave Type </label>
						<div class="col-sm-9">
							<select name="leaveid" id="leaveid" class="col-xs-10 col-sm-7">
								  <option value="">Select Leave Type</option>
								  <?php 
									while($leavedata = $leaveviewdata->fetch_assoc())
										{	

										$leaveviewid =	$leavedata['id'];
										$leavename = $leavedata['leave_name'];

									?>
								  
								    <option <?php if($leaveviewid==$leaveid) { ?> selected <?php } ?> value="<?php echo $leavedata['id']; ?>">
										<?php if(!empty($leavename)) { ?><?php echo $leavename; } ?>
									 </option>

									  <?php
										}
									?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> To </label>
						<div class="col-sm-9">
							<input type="text" id="datepicker" name="leave_to"  data-date-format="yyyy-mm-dd" value="<?php echo $leaveassigndata['leave_to']; ?>" class="col-xs-10 col-sm-7" />
								
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> From </label>
						<div class="col-sm-9">
							<input type="text" id="datepickerfrom" name="leave_from" data-date-format="yyyy-mm-dd" value="<?php echo $leaveassigndata['leave_from'];?>" class="col-xs-10 col-sm-7" />
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-2">Description</label>
						<div class="col-sm-9">
							<textarea name="description" id="description" rows="3" class="col-xs-10 col-sm-7"><?php echo $leaveassigndata['note'];?></textarea>
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