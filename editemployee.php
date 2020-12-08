
<?php
	
	$employeeid = $_GET['empl_id'];

	$view_employee = $cls_employee->view_employee_id($employeeid);

	$employeedata = $view_employee->fetch_assoc();


?>
<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="index.php?pge=home">Home</a>
							</li>
							<li class="active">Employee Registration Update</li>
						</ul><!-- /.breadcrumb -->

					</div>

					<div class="page-content">


						<div class="row">
							<div class="col-xs-12">
							<div class="tab-content">

							<form class="form-horizontal" id="editemployee" role="form">
								
								<center><h3> Personal Information Update</h3></center>
								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Full Name </label>
									<div class="col-sm-9">
										<input type="text" id="fullname" name="fullname" value="<?php echo $employeedata['fullname']; ?>" class="col-xs-10 col-sm-7" />
										<input type="hidden" name="empid" value="<?php echo $employeedata['id']; ?>"  />
									</div>
								</div>
								<div class="form-group" >
									<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Designation</label>
									<div class="col-sm-9">
										<input type="text" id="designation" name="designation" value="<?php echo $employeedata['designation']; ?>" class="col-xs-10 col-sm-7" />
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Employee ID No. </label>

									<div class="col-sm-9">
										<input type="text" id="emp_id" name="emp_id" value="<?php echo $employeedata['card_id']; ?>" class="col-xs-10 col-sm-7" />
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Mobile No. </label>

									<div class="col-sm-9">
										<input type="text" id="mobile" name="mobile" value="<?php echo $employeedata['mobile']; ?>" class="col-xs-10 col-sm-7" />
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-3"> Email </label>

									<div class="col-sm-9">
										<input type="email" id="emp_email" name="emp_email" value="<?php echo $employeedata['employee_email']; ?>" class="col-xs-10 col-sm-7" />
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Gender </label>

									<div class="col-sm-9">
										<input type="text" id="gender" name="gender" value="<?php echo $employeedata['gender']; ?>" class="col-xs-10 col-sm-7" />
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> National ID No. </label>

									<div class="col-sm-9">
										<input type="text" id="naid" name="naid" value="<?php echo $employeedata['national_id']; ?>" class="col-xs-10 col-sm-7" />
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Religion </label>

									<div class="col-sm-9">
										<input type="text" id="religion" name="religion" value="<?php echo $employeedata['religion']; ?>" class="col-xs-10 col-sm-7" />
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Father Name </label>

									<div class="col-sm-9">
										<input type="text" id="fathername" name="fathername" value="<?php echo $employeedata['fathername']; ?>" class="col-xs-10 col-sm-7" />
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-2">Mother Name </label>

									<div class="col-sm-9">
										<input type="text" id="mothername" name="mothername" value="<?php echo $employeedata['mothername']; ?>" class="col-xs-10 col-sm-7" />
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-10"> Present Address </label>
									<div class="col-sm-9">
										<textarea name="presentaddress" id="presentaddress" rows="3" class="col-xs-10 col-sm-7"><?php echo $employeedata['presentaddress']; ?></textarea>
										
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-11"> Permanent Address </label>
									<div class="col-sm-9">
										<textarea name="permanentaddress" id="permanentaddress" rows="3" class="col-xs-10 col-sm-7"><?php echo $employeedata['permanentaddress']; ?></textarea>
										
									</div>
								</div>

								<div class="form-group">
									<div class="col-sm-6 col-sm-offset-3">
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