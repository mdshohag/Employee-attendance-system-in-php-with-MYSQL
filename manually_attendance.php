

<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="index.php?pge=home">Home</a>
							</li>
							<li class="active">Manually Attendance </li>
						</ul><!-- /.breadcrumb -->

					</div>

					<div class="page-content">


						<div class="row">
							<div class="col-xs-12">
							<div class="tab-content">


							<form class="form-horizontal" id="employeeattendance" role="form">
								
								<center><h3>Manually Attendance </h3></center>
								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-2">  Employee ID </label>

									<div class="col-sm-9">
										<select name="employee_id" id="employee_id" class="col-xs-10 col-sm-7" >
											  <option value="">Select ID</option>

											  <?php while($employee_view = $employeeviewdata->fetch_assoc()){ ?>

											  <option value="<?php echo $employee_view['card_id']; ?>"><?php echo $employee_view['card_id']; ?></option>

											  <?php } ?>
											</select>
									</div>
								</div>

								<div id="employeewiew"></div>


								<div class="form-group" >
									<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> In Time </label>
									<div class="col-sm-9">
										<input type="text" id="indate" name="designation" placeholder="Designation" class="col-xs-10 col-sm-7" />
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> In Date </label>

									<div class="col-sm-9">
										<div class="input-group input-group-sm">
											<input type="text" id="datepicker" name="att_date" class="form-control" data-date-format="yyyy-mm-dd" class="col-xs-10 col-sm-7"/>
											<span class="input-group-addon">
												<i class="ace-icon fa fa-calendar"></i>
											</span>
							 	  		 </div>
									</div>
								</div>
								

								<div class="form-group">
									<div class="col-sm-6 col-sm-offset-3">
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