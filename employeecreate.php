

<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="index.php?pge=home">Home</a>
							</li>
							<li class="active">Employee Registration </li>
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
											  <span class="round-tabs one">
													 <p style="padding-top: 20px"> Personal Information</p><!--<i class="glyphicon glyphicon-user"></i>-->
											  </span> 
										  </a></li>

										  <li><a title="Other Information">
											 <span class="round-tabs two">
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

							<form class="form-horizontal" id="employeecreate" role="form">
								
								<center><h3> Personal Information </h3></center>
								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-2">  Full Name </label>

									<div class="col-sm-9">
										<input type="text" id="fullname" name="fullname" placeholder="Employee Full Name" class="col-xs-10 col-sm-7" />
									</div>
								</div>
								<div class="form-group" >
									<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Department</label>
									<div class="col-sm-9">



										<select name="department" id="department" class="col-xs-10 col-sm-7">
											  <option value="">Select Department</option>

											  <?php

												$departmentviewdata = $cls_manage->show_department(); 
												while($departdata = $departmentviewdata->fetch_assoc())
													{ ?>

													  <option value="<?php echo $departdata['id']; ?>"><?php echo $departdata['name_department']; ?></option>

													<?php } ?>

										</select>



										<!--<input type="text" id="department" name="department" placeholder="Department" class="col-xs-10 col-sm-7" />-->


									</div>
								</div>
								<div class="form-group" >
									<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Designation</label>
									<div class="col-sm-9">
										<input type="text" id="designation" name="designation" placeholder="Designation" class="col-xs-10 col-sm-7" />
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Employee ID No. </label>

									<div class="col-sm-9">
										<input type="text" id="emp_id" name="emp_id" placeholder="Employee ID No" class="col-xs-10 col-sm-7" />
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Mobile No. </label>

									<div class="col-sm-9">
										<input type="text" id="mobile" name="mobile" placeholder="+880" class="col-xs-10 col-sm-7" />
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-3"> Email </label>

									<div class="col-sm-9">
										<input type="email" id="emp_email" name="emp_email" placeholder="@" class="col-xs-10 col-sm-7" />
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Gender </label>

									<div class="col-sm-9">
										
										<select name="gender" id="gender" class="col-xs-10 col-sm-7">
											  <option value="">Select Gender</option>

											  <option value="Male">Male</option>
											  <option value="Female">Female</option>
											   <option value="Other">Other</option>
										</select>

									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> National ID (If Any)</label>

									<div class="col-sm-9">
										<input type="text" id="naid" name="naid" placeholder="00.." class="col-xs-10 col-sm-7" />
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Birth ID (If Any)</label>

									<div class="col-sm-9">
										<input type="text" id="birthid" name="birthid" placeholder="Birth" class="col-xs-10 col-sm-7" />
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Passport ID (If Any)</label>

									<div class="col-sm-9">
										<input type="text" id="passport" name="passport" placeholder="passport" class="col-xs-10 col-sm-7" />
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Religion </label>

									<div class="col-sm-9">
										
										<select name="religion" id="religion" class="col-xs-10 col-sm-7">
											  <option value="">Select Religion</option>

											  <option value="Islam">Islam</option>
											  <option value="Hindu">Hindu</option>
											  <option value="Other">Other</option>
											 
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Father Name </label>

									<div class="col-sm-9">
										<input type="text" id="fathername" name="fathername" placeholder="Father Name" class="col-xs-10 col-sm-7" />
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-2">Mother Name </label>

									<div class="col-sm-9">
										<input type="text" id="mothername" name="mothername" placeholder="Mother Name" class="col-xs-10 col-sm-7" />
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-10"> Present Address </label>
									<div class="col-sm-9">
										<textarea name="presentaddress" id="presentaddress" placeholder="Present Address"  rows="3" class="col-xs-10 col-sm-7"></textarea>
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-11"> Permanent Address </label>
									<div class="col-sm-9">
										<textarea name="permanentaddress" id="permanentaddress" placeholder="Permanent Address"  rows="3" class="col-xs-10 col-sm-7"></textarea>
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Photo Upload </label>

									<div class="col-sm-9">
										<input type="file" id="photoup" name="photoup" title="Photo Upload" onchange="return logoloadValidation()" />
										
										<div id="image-photo"></div>
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