<?php
	
	$eduid = $_GET['edu_id'];

	$view_education = $cls_employee->view_education_id($eduid);

	$educationdata = $view_education->fetch_assoc();


?>

<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="index.php?pge=home">Home</a>
							</li>
							<li class="active">Employee Education Update </li>
						</ul><!-- /.breadcrumb -->
						
					</div>

					<div class="page-content">
						<div class="row">
							<div class="col-xs-8 col-xs-offset-2">

							<div class="tab-content">
							
							<form class="form-horizontal" id="updateeducation" role="form">
								<center><h3>Education Update</h3></center>
								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Exam/Degree Title  <span style="color: red">*</span></label>

									<div class="col-sm-9">
										<input type="text" id="examname" name="examname" value="<?php echo $educationdata['examname']; ?>" class="col-xs-10 col-sm-7" />
										<input type="hidden" name="eduid" value="<?php echo $educationdata['id']; ?>" required/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Institute Name  <span style="color: red">*</span></label>
										
									<div class="col-sm-9">
										<input type="text" id="institutename" name="institutename" value="<?php echo $educationdata['institutename']; ?>" class="col-xs-10 col-sm-7" required/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Board  <span style="color: red">*</span></label>

									<div class="col-sm-9">
										<input type="text" id="board" name="board" value="<?php echo $educationdata['board']; ?>" class="col-xs-10 col-sm-7" required/>
									</div>
								</div>
								<div class="form-group" >
									<label class="col-sm-3 control-label no-padding-right" for="Asset_Type"> Result <span style="color: red">*</span></label>
								<div class="col-sm-9">
									<select name="result_type" id="result_type" class="col-xs-10 col-sm-7" onchange="showDivp(this)" required>
										<option value=""> Select </option>
										<option value="<?php echo $educationdata['result']; ?>" selected> <?php echo $educationdata['result']; ?> </option>
										<option value="First Division Class">First Division/Class</option>
										<option value="Second Division Class">Second Division/Class</option>
										<option value="Third Division Class">Third Division/Class</option>
										<option value="CGPA">Grade</option>
										<option value="Appeared">Appeared</option>

									</select>
								</div>
								</div>
								<div class="cgpa_div" style="display:">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="Passing">Marks(%) </label>
										<div class="col-sm-9">
										<input type="text" name="marks" id="marks" value="<?php echo $educationdata['marks']; ?>" class="col-xs-10 col-sm-7 cgpa" >
										</div>
									</div>
								</div>
								<div class="grade_div" style="display:">
									<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="Passing">CGPA</label>
										<div class="col-sm-9">
											<input type="text" name="cgpa" id="grade" value="<?php echo $educationdata['g_cgpa']; ?>" class="col-xs-10 col-sm-7 grade" >
										</div>
									</div>
									<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="Passing">Scale</label>
										<div class="col-sm-9">
											<input type="text" name="scale" id="scale" value="<?php echo $educationdata['Scale']; ?>" class="col-xs-10 col-sm-7 grade" >
										</div>
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Year of Passing  <span style="color: red">*</span></label>

									<div class="col-sm-9">
										<input type="text" id="passing" name="passing" value="<?php echo $educationdata['passing_year']; ?>" class="col-xs-10 col-sm-7" required/>
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