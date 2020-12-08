<?php

	$epmlid = $_GET['epmlid'];
	$viewdata = $cls_employee->employee_view_data($epmlid);
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
								<a href="?pge=employeecreate">Employee Registration</a>
							</li>
							<li class="active">Profile</li>
						</ul><!-- /.breadcrumb -->

					</div>

					<div class="page-content">
						<div class="row">
							<div class="col-xs-12">
							<div class="tab-content">

						<div class="row">
							<div class="col-xs-10 col-xs-offset-1">
							<center><h3>Employee Profile Update</h3></center><br>

							<div id="printableArea" style="margin:0 auto width:1000px;background-color:white;">
									
									
									<table class="table table-bordered" style="margin-right:20px;">
										<tr>
											<td width="300">Name</td>
											<td><?php echo $employedata['fullname']; ?></td>
										</tr>
										<tr>
											<td width="300">Designation</td>
											<td><?php echo $employedata['designation']; ?></td>
										</tr>
										<tr>
											<td>Mobile number</td>
											<td><?php echo $employedata['mobile']; ?></td>
										</tr>
										<tr>
											<td>Employee ID</td>
											<td><?php echo $employedata['card_id']; ?></td>
										</tr>										
										<tr>
											<td>Email address</td>
											<td><?php echo $employedata['employee_email']; ?></td>
										</tr>
										<tr>
											<td>Gender</td>
											<td><?php echo $employedata['gender']; ?></td>
										</tr>
										<tr>
											<td>National ID No.</td>
											<td><?php echo $employedata['national_id']; ?></td>
										</tr>
										<tr>
											<td>Religion</td>
											<td><?php echo $employedata['religion']; ?></td>
										</tr>
										<tr>
											<td>Father Name</td>
											<td><?php echo $employedata['fathername']; ?></td>
										</tr>
										<tr>
											<td>Mother Name</td>
											<td><?php echo $employedata['mothername']; ?></td>
										</tr>
										<tr>
											<td>
												Present Address
											</td>
											<td><?php echo $employedata['presentaddress']; ?></td>
											
										</tr>
										<tr>
											<td>
												Permanent Address
											</td>
											<td><?php echo $employedata['permanentaddress']; ?></td>
											
										</tr>
										<tr>
											<td colspan="2"><a href="?pge=editemployee&&empl_id=<?php echo $employedata['id']; ?>">Edit Personal Information</a></td>
											
										</tr>
										
										<tr>
											<td colspan="2"><center><h4>Academic Summary</h4></center>
												<span style="float: right;"><a href="index.php?pge=employee_view&&idno=<?php echo $employedata['card_id']; ?>" class="btn btn-success"><i class="fa fa-arrow" aria-hidden="true"></i>Add Academic </a></span>
											</td>

											
										</tr>

										<?php 
											$i =1;
											 while($emp_education = $emp_education_data->fetch_assoc())
											{
										 ?>

										<tr>
											<td>
											<br>
											<br>
											Academic <?php echo $i++; ?>
											</td>
											<td>Exam name : <?php echo ucfirst($emp_education['examname']); ?><br>
												Institute Name : <?php echo ucfirst($emp_education['institutename']); ?><br>
												Board : <?php echo $emp_education['board']; ?><br>
												result : <?php echo $emp_education['result']; ?>	<br>
												Passing Year : <?php echo $emp_education['passing_year']; ?><br>
												<a href="?pge=editeducation&&edu_id=<?php echo $emp_education['id']; ?>">Edit</a></td>
											</td>
										</tr>

											<?php
												}
											?>

											<tr>
											<td colspan="2"><center><h4>Emergency Contact</h4></center>

												<span style="float: right;"><a href="index.php?pge=employee_view&&idno=<?php echo $employedata['card_id']; ?>" class="btn btn-success"><i class="fa fa-arrow" aria-hidden="true"></i>Add Contact </a></span>

											</td>
											
										</tr>

										<?php 
											$i =1;
											 while($emp_emergency = $emp_emergency_data->fetch_assoc())
											{
										 ?>

										<tr>
											<td>
											<br>
											<br>
											Emergency Contact <?php echo $i++; ?>
											</td>
											<td>Name : <?php echo ucfirst($emp_emergency['ref_name']); ?><br>
												Relation : <?php echo ucfirst($emp_emergency['relation']); ?><br>
												Mobile : <?php echo $emp_emergency['mobile']; ?><br>
												Address : <?php echo $emp_emergency['address']; ?>	<br>
												<a href="?pge=editemergencycontact&&emrg_id=<?php echo $emp_emergency['id']; ?>">Edit</a></td>
										</tr>

											<?php
												}
											?>
									</table>
									
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