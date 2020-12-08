<?php

	$idno = $_GET['idno'];
	$viewdata = $cls_employee->employee_view_single_data($idno);
	$employedata = $viewdata->fetch_assoc();
	$employee_id = $employedata['id'];

	$emp_education_data = $cls_employee->employee_education_data($employee_id);

	$emp_emergency_data = $cls_employee->employee_emergency_data($employee_id);



?>


<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>

							<li>
								<a href="#">Other Pages</a>
							</li>
							<li class="active">Blank Page</li>
						</ul><!-- /.breadcrumb -->

					</div>

					<div class="page-content">
						<div class="row">
							<div class="col-xs-12">
							<div class="tab-content">
								<div class="board">
									<!-- <h2>Welcome to IGHALO!<sup>™</sup></h2>-->
									<div class="board-inner">
										<ul class="nav nav-tabs" id="myTab">
											<div class="liner"></div>
											 <li>
											 <a  title="Personal Information">
											  <span class="round-tabs two">
													 <p style="padding-top: 20px"> Personal Information</p><!--<i class="glyphicon glyphicon-user"></i>-->
											  </span> 
										  </a></li>

										  <li><a title="Other Information">
											 <span class="round-tabs one">
												<p style="padding-top: 20px"> Other Information</p><!--<i class="glyphicon glyphicon-education"></i>-->
											 </span> 
								  			 </a>
										 </li>
										 <li><a title="Profile">
											 <span class="round-tabs three">
												 <p style="padding-top: 28px"> Profile</p><!--<i class="glyphicon glyphicon-gift"></i>-->
											 </span> </a>
											 </li>
										</ul>

									</div>
								</div>


						<div class="row">
							<div class="col-xs-10 col-xs-offset-1">

							<center><h3>Employee Information </h3></center>
							
							<div class="tab-content">
								
								<h4>Name : <?php echo $employedata['fullname']; ?> </h4>
								<h4>Designation : <?php echo $employedata['designation']; ?></h4>
								<h4>Employee Id : <?php echo $employedata['card_id']; ?></h4>
								<h4>Email : <?php echo $employedata['employee_email']; ?></h4>
					
								<!--<div class="col-sm-4 col-sm-offset-4">
									<a href="index.php?pge=editemployee&&empl_id=<//?php echo $employee_id; ?>" style="color:green;" type="button" class="btn btn-success">Update Information</a>												  
								</div><br><br>-->

							<!--</div>-->
							<br>

							<center><h3>Academic Summary </h3></center>
							<br>
							<button type="button" name="add_info" id="add_info" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i>Add Education</button>
							
							<!--<div class="tab-content">-->

								<?php
									
									$asset = $cls_employee->employee_data_check($employee_id);
									
									 $asset_r = $asset->fetch_array();
									 $asset_r_data = $asset_r[0];
									
									
									 if(!empty($asset_r_data))
										{
									?>
									<span style="float: right;"><a href="index.php?pge=employee_profile&&epmlid=<?php echo $employee_id; ?>" name="add_info" id="add_infos" class="btn btn-success"><i class="fa fa-arrow" aria-hidden="true"></i>Next</a></span>

<br><br>
									<table class="table table-bordered rm" >
										<thead>
										  <tr style="background-color:#FCFCFC;">
											<th>Examname</th>
											<th>Institutename</th>
											<th>Board</th>
											<th>Result</th>
											<th>Passing Year</th>
											<th>Action</th>
											
										  </tr>
										</thead>
										<tbody>
										<?php 
									 while($emp_education = $emp_education_data->fetch_assoc())
											{ ?>
										  <tr>
											
											<td><?php echo ucfirst($emp_education['examname']); ?></td>
											<td><?php echo ucfirst($emp_education['institutename']); ?></td>
											<td><?php echo $emp_education['board']; ?></td>
											<td><?php echo $emp_education['result']; ?> <?php echo $emp_education['g_cgpa']; ?></td>
											<td><?php echo $emp_education['passing_year']; ?></td>
											<td><a href="index.php?pge=editeducation&&edu_id=<?php echo $emp_education['id']; ?>">Details</a></td>
										  </tr>
										   <?php
												} 
												?>
										</tbody>
									</table><br>
							  <?php						 
							  }  else {
										?>
									
									   <div class="catp_count" style="height:90px; text-align:center; padding-top:50px; font-size:24px;color:#222">
											No Data !!
										</div>
										<?php
									}
								  ?>
							
								<!--<form class="form-horizontal" id="employe_education" method="post" enctype="multipart/form-data">
								<fieldset id="dynamic_fldss">
								 <div class="form-group"> 
									<input type="hidden" value="<//?php echo $employee_id; ?>" name="employee_id">
								  </div>
									<div class="form-group">
									<div class="col-sm-offset-8 col-sm-4"><br>
										<button type="button" name="add_author" id="add_author" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Add Education</button>
									</div>
									</div>
								</fieldset>
								</form>-->

							<div id="addeduc" style="visibility:hidden">

								<form class="form-horizontal " id="employe_education" method="post" enctype="multipart/form-data">
								<fieldset id="dynamic_fldss">
								 <div class="form-group"> 
									<input type="hidden" value="<?php echo $employee_id; ?>" name="employee_id">
								  </div>


								  	<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="Education">Exam/Degree Title <span style="color: red">*</span></label>
										<div class="col-sm-9">
											<input type="text" name="examname" id="examname" placeholder="Exam/Degree Title" class="col-xs-10 col-sm-7" required></div>
										</div>
										<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="Institute">Institute Name <span style="color: red">*</span></label>
										<div class="col-sm-9">
											<input type="text" name="institutename" id="institutename" placeholder="Institute Name" class="col-xs-10 col-sm-7" required>
										</div>
										</div>
										<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="Board">Board </label>
										<div class="col-sm-9">
											<input type="text" name="board" id="doard" placeholder="Board" class="col-xs-10 col-sm-7">
										</div>
										</div>
										<div class="form-group" >
											<label class="col-sm-3 control-label no-padding-right" for="Asset_Type"> Result <span style="color: red">*</span></label>
										<div class="col-sm-9">
											<select name="result_type" id="result_type" class="col-xs-10 col-sm-7" onchange="showDivp(this)" required>
												<option value=""> Select </option>
												

												<option value="First Division Class">First Division/Class</option><option value="Second Division Class">Second Division/Class</option>
												<option value="Third Division Class">Third Division/Class</option>
												<option value="CGPA">Grade</option>
												<option value="Appeared">Appeared</option>

											</select>
										</div>
										</div>
										<div class="cgpa_div" style="display:none">
										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="Passing">Marks(%) <span style="color: red">*</span></label>
											<div class="col-sm-9">
											<input type="text" name="marks" id="marks" placeholder="Marks" class="col-xs-10 col-sm-7 cgpa" >
											</div>
										</div>
										</div>
										<div class="grade_div" style="display:none">
										<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="Passing">CGPA <span style="color: red">*</span></label>
											<div class="col-sm-9">
												<input type="text" name="cgpa" id="grade" placeholder="CGPA" class="col-xs-10 col-sm-7 grade" >
											</div>
										</div>
										<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="Passing">Scale <span style="color: red">*</span></label>
											<div class="col-sm-9">
												<input type="text" name="scale" id="scale" placeholder="Scale" class="col-xs-10 col-sm-7 grade" >
											</div>
										</div>
										</div>
										<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="Passing">Year of Passing <span style="color: red">*</span></label>
											<div class="col-sm-9">
											<input type="text" name="passing" id="passing" placeholder="Year of Passing" class="col-xs-10 col-sm-7" required>
											</div>
										</div>
										<div class="form-group" id="save_butn_t">
											<div class="col-sm-6 col-sm-offset-3">
											<button type="button" class="btn btn-success btn_close">Close</button>
											<button type="submit" class="btn btn-success">Save</button>
											</div>
										</div>

								</fieldset>
								</form>

								</div>
								<br>

							<center><h3>Emergency Contact </h3></center>
							<br>
							<button type="button" name="add_emergncy" id="add_emergncy" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i>Add Emergency Contact</button>
							<br><br>
							<?php
									
									$data_contact = $cls_employee->employee_contact_check($employee_id);
									
									 $data_r = $data_contact->fetch_array();
									 $cont_data = $data_r[0];
									
									
									 if(!empty($cont_data))
										{
									?>
									<table class="table table-bordered rm" >
										<thead>
										  <tr style="background-color:#FCFCFC;">
											<th>Name</th>
											<th>Relation</th>
											<th>Mobile No.</th>
											<th>Address</th>
											<th>Action</th>
											
										  </tr>
										</thead>
										<tbody>
										<?php 
									 while($emp_emergency = $emp_emergency_data->fetch_assoc())
											{ ?>
										  <tr>
											
											<td><?php echo ucfirst($emp_emergency['ref_name']); ?></td>
											<td><?php echo ucfirst($emp_emergency['relation']); ?></td>
											<td><?php echo $emp_emergency['mobile']; ?></td>
											<td><?php echo $emp_emergency['address']; ?></td>
											<td><a href="index.php?pge=editemergencycontact&&emrg_id=<?php echo $emp_emergency['id']; ?>">Details</a></td>
										  </tr>
										   <?php
												} 
												?>
										</tbody>
									</table><br>
							  <?php						 
							  }  else {
										?>
									
									   <div class="catp_count" style="height:90px; text-align:center; padding-top:50px; font-size:24px;color:#222">
											No Data !!
										</div>
										<?php
									}
								  ?>
							<div id="emergency" style="visibility:hidden">

								<form class="form-horizontal " id="employe_emergency" method="post" enctype="multipart/form-data">
								<fieldset id="dynamic_fldss">
								 <div class="form-group"> 
									<input type="hidden" value="<?php echo $employee_id; ?>" name="employee_id">
								  </div>


								  	<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="Name">Name <span style="color: red">*</span></label>
										<div class="col-sm-9">
											<input type="text" name="refname" id="refname" placeholder="Enter Name" class="col-xs-10 col-sm-7" required></div>
										</div>
										<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="Relaion">Relaion<span style="color: red">*</span></label>
										<div class="col-sm-9">
											<input type="text" name="relaion" id="relaion" placeholder="Relaion" class="col-xs-10 col-sm-7" required>
										</div>
										</div>
										<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="Mobile">Mobile <span style="color: red">*</span></label>
										<div class="col-sm-9">
											<input type="text" name="mobile" id="mobile" placeholder="088+" class="col-xs-10 col-sm-7" required>
										</div>
										</div>
										<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="Address">Address <span style="color: red">*</span></label>
											<div class="col-sm-9">
											<textarea name="address" id="address" placeholder=" Address" rows="3" class="col-xs-10 col-sm-7" required></textarea>
										</div>
									</div>
										<div class="form-group" id="save_butn_t">
											<div class="col-sm-6 col-sm-offset-3">
											<button type="button" class="btn btn-success btn_close">Close</button>
											<button type="submit" class="btn btn-success">Save</button>
											</div>
										</div>

								</fieldset>
								</form>

								</div>
							</div>
						</div>	
					</div>
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