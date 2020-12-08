<?php

 $rosterid = $_GET['roster_id'];

 $rosterview = $cls_manage->roster_data_id($rosterid);

 $rosterdata = $rosterview->fetch_assoc();


?>

<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="index.php?pge=home">Home</a>
							</li>
							<li class="active">Roster </li>
						</ul><!-- /.breadcrumb -->

					</div>

					<div class="page-content">
						<div class="row">
							<div class="col-xs-12">

							<div class="tab-content">
							
							<form class="form-horizontal" id="rosterupdate" role="form">
								<center><h3>Roster Update</h3></center>


								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Roster Name </label>

									<div class="col-sm-9">
										<input type="text" id="rostername" name="rostername" value="<?php echo $rosterdata['roster_name']; ?>" class="col-xs-10 col-sm-7" />
										<input type="hidden" name="rosterid" value="<?php echo $rosterdata['id']; ?>" />
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Start time </label>

									<div class="col-sm-9">
										<input type="text" id="starttime" name="starttime" value="<?php echo $rosterdata['start_time']; ?>" class="col-xs-10 col-sm-7" />
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> End Time </label>

									<div class="col-sm-9">
										<input type="text" id="endtime" name="endtime" value="<?php echo $rosterdata['end_time']; ?>" class="col-xs-10 col-sm-7" />
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