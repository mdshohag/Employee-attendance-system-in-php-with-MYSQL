<?php
	
	$userid = $_GET['user_id'];

	$view_user = $cls_admin->view_user_id($userid);

	$userdata = $view_user->fetch_assoc();


?>

<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="index.php?pge=home">Home</a>
							</li>
							<li class="active">User Registration </li>
						</ul><!-- /.breadcrumb -->
						
					</div>

					<div class="page-content">
						<div class="row">
							<div class="col-xs-8 col-xs-offset-2">

							<div class="tab-content">
							
							<form class="form-horizontal" id="edituser" role="form">
								<center><h3>User Registration </h3></center>
								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Full Name </label>

									<div class="col-sm-9">
										<input type="text" id="fullname" name="fullname" value="<?php echo $userdata['name']; ?>" class="col-xs-10 col-sm-7" />
										<input type="hidden" name="userid" value="<?php echo $userdata['id']; ?>" />
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> User Type</label>
										<!--<input type="text" id="usertype" name="usertype" value="Employee" placeholder="usertype" class="col-xs-10 col-sm-6" />-->
									<div class="col-sm-5">
										<select class="form-control" name="usertype" class="col-xs-10 col-sm-7">
											<option value="<?php echo $userdata['type']; ?>"><?php echo $userdata['type']; ?></option>
											  <option value="">Select User Type</option>
											  <option value="Admin">Admin</option>
											  <option value="Employee">Employee</option>
											</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> User Name </label>

									<div class="col-sm-9">
										<input type="text" id="username" name="username" value="<?php echo $userdata['username']; ?>" class="col-xs-10 col-sm-7" />
									</div>
								</div>

								
								<div class="form-group">
									<div class="col-sm-4 col-sm-offset-4">
										<input type="submit" class="btn btn-sm btn-success" value="Submit">
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