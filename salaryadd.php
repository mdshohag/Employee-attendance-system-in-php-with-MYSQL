<div class="main-content">
	<div class="main-content-inner">
		<div class="breadcrumbs ace-save-state" id="breadcrumbs">
			<ul class="breadcrumb">
				<li>
					<i class="ace-icon fa fa-home home-icon"></i>
					<a href="index.php?pge=home">Home</a>
				</li>
				<li class="active">Salary Add </li>
			</ul><!-- /.breadcrumb -->

		</div>

		<div class="page-content">
			<div class="row">
				<div class="col-xs-12">

				<div class="tab-content">
				
				<form class="form-horizontal" id="salaryadd" role="form">
					<center><h3>Salary Add</h3></center>
					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Department </label>
						<div class="col-sm-9">
							<select name="departid" id="departid" class="col-xs-10 col-sm-7">
								  <option value="">Select Department</option>
								  <?php 
									$departmentviewdata = $cls_manage->show_department(); 
									while($departdata = $departmentviewdata->fetch_assoc())
										{			
									?>
								 		 <option value="<?php echo $departdata['id']; ?>"><?php echo $departdata['name_department']; ?></option>  
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
									  <option value="">Select Employee ID</option>
							
							</select>
						</div>
					</div>

					<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Employee Name</label>
					<div class="col-sm-9">

						<select id="employeename" class="col-xs-10 col-sm-7">
							
						</select>
					</div>
				</div>
				<div class="form-group" >
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Basic Salary</label>
					<div class="col-sm-9">
						<input type="text" id="basicsalary" placeholder="Basic Salary" name="basicsalary" class="col-xs-10 col-sm-7" />
					</div>
				</div>	
				<div class="form-group" >
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1">House Rent</label>
					<div class="col-sm-9">
						<input type="text" id="houserent" placeholder="House Rent" name="houserent" class="col-xs-10 col-sm-7" />
					</div>
				</div>	
				<div class="form-group" >
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Medical Allowance</label>
					<div class="col-sm-9">
						<input type="text" id="medical" placeholder="Medical Allowance" name="medical" class="col-xs-10 col-sm-7" />
					</div>
				</div>						
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-2">Description</label>
					<div class="col-sm-9">
						<textarea name="description" id="description" placeholder="Description" rows="3" class="col-xs-10 col-sm-7"></textarea>
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