<?php

 $departmentid = $_GET['department_id'];

 $departmentdataview = $cls_manage->department_data($departmentid);

 $departmentdata = $departmentdataview->fetch_assoc();


?>


<div class="main-content">
		<div class="main-content-inner">
			<div class="breadcrumbs ace-save-state" id="breadcrumbs">
				<ul class="breadcrumb">
					<li>
						<i class="ace-icon fa fa-home home-icon"></i>
						<a href="index.php?pge=home">Home</a>
					</li>
					<li class="active">Department </li>
				</ul><!-- /.breadcrumb -->

			</div>

			<div class="page-content">
				<div class="row">
					<div class="col-xs-12">

					<div class="tab-content">
					
					<form class="form-horizontal" id="editdepartment" role="form">
						<center><h3>Department Create</h3></center>


						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Department  Name </label>

							<div class="col-sm-9">
								<input type="hidden" id="departmentid" name="departmentid" value="<?php echo $departmentdata['id']; ?>" />
								<input type="text" id="department" name="department" value="<?php echo $departmentdata['name_department']; ?>" class="col-xs-10 col-sm-7" />
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-4 col-sm-offset-4">
								<input type="submit" class="btn btn-sm btn-success" value="Submit">
							</div>
						</div>
					</form>
					<br>
					

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