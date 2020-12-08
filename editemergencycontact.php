<?php
	
	$emrgid = $_GET['emrg_id'];

	$view_emergency = $cls_employee->view_emergency_id($emrgid);

	$emergencydata = $view_emergency->fetch_assoc();


?>

<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="index.php?pge=home">Home</a>
							</li>
							<li class="active">Emergency Contact Update </li>
						</ul><!-- /.breadcrumb -->
						
					</div>

					<div class="page-content">
						<div class="row">
							<div class="col-xs-8 col-xs-offset-2">

							<div class="tab-content">
							
							<form class="form-horizontal" id="updateEmergency" role="form">
								<center><h3>Emergency Contact Update</h3></center>
								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-2">Name <span style="color: red">*</span></label>

									<div class="col-sm-9">
										<input type="text" id="refname" name="refname" value="<?php echo $emergencydata['ref_name']; ?>" class="col-xs-10 col-sm-7" />
										<input type="hidden" name="emrgyid" value="<?php echo $emergencydata['id']; ?>" required/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Relaion <span style="color: red">*</span></label>
										
									<div class="col-sm-9">
										<input type="text" id="relaion" name="relaion" value="<?php echo $emergencydata['relation']; ?>" class="col-xs-10 col-sm-7" required/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Mobile <span style="color: red">*</span></label>

									<div class="col-sm-9">
										<input type="text" id="mobile" name="mobile" value="<?php echo $emergencydata['mobile']; ?>" class="col-xs-10 col-sm-7" required/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="Address">Address <span style="color: red">*</span></label>
									<div class="col-sm-9">
										<textarea name="address" id="address" rows="3" class="col-xs-10 col-sm-7" required=""><?php echo $emergencydata['address']; ?></textarea>
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