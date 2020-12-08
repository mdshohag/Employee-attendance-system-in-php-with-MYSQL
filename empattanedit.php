<?php
	


?>

<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="index.php?pge=home">Home</a>
							</li>
							<li class="active">Report :: Attendance </li>
						</ul><!-- /.breadcrumb -->
						
					</div>

					<div class="page-content">
						<div class="row">
							<div class="col-xs-8 col-xs-offset-2">

						
							
							<form class="form-horizontal" id="deptmentview" role="form">
								<center><h3>Report :: Attendance</h3></center>
								
								<div class="form-group" >
									<label class="col-sm-3 control-label no-padding-right" for="Department"> Select Department <span style="color: red">*</span></label>
								<div class="col-sm-9">
									<select name="departmentid" id="departmentid" class="col-xs-10 col-sm-6">
										<option value=""> Select </option>
										<?php

										$departmentviewdata = $cls_manage->show_department(); 

										while($departdata = $departmentviewdata->fetch_assoc())
										{	
									?>
										<option value="<?php echo $departdata['id']; ?>" > <?php echo $departdata['name_department']; ?></option>
										<?php
											}
										?>

									</select>
								</div>
								</div>
								<div class="form-group" >
									<label class="col-sm-3 control-label no-padding-right" for="Asset_Type"> ID NO: RDTL- <span style="color: red">*</span></label>
								<div class="col-sm-9">
									<select name="staffcode" id="staffcode" class="col-xs-10 col-sm-6">
										<option value=""> Select Staff Code</option>
										
									</select>
								</div>
								</div>

								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Month/Year <span style="color: red">*</span></label>

									<div class="col-sm-9">
										<select name="selectMonth" id="selectMonth" class="col-xs-10 col-sm-3">
                                    <option value="1" >January</option>
                                    <option value="2" >February</option>
                                    <option value="3" >March</option>
                                    <option value="4" >April</option>
                                    <option value="5" >May</option>
                                    <option value="6" >June</option>
                                    <option value="7" >July</option>
                                    <option value="8" >August</option>
                                    <option value="9" >September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
								 <select name="selectYear" id="selectYear" class="col-xs-10 col-sm-3">
                                    <?php
                                    date_default_timezone_set('Asia/Dhaka');
                                    $StartYear= '2018';
                                    $currentYear= date('Y');
                                    for($i=$StartYear;$i<=$currentYear;$i++)
                                    {
                                      
                                        echo "<option value='$i' >$i</option>";
                                    }
                                    ?>

                                </select>
									</div>
								</div>

								
								<div class="form-group">
									<div class="col-sm-4 col-sm-offset-4">
										<input id="empdeparment" type="submit" class="btn btn-sm btn-success" value="Search">
										<!--<input type="button" id="save" class="btn btn-danger btn-sm" value="Print" onclick="printView()">-->
									</div>
								</div>

							</form>

							<div id="viewdepartment"></div>
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