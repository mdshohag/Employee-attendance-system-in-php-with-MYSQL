<?php




?>


<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li><a href="index.php?pge=rostercreate">Roster</a></li>
							<li class="active">Roster Assign</li>
						</ul><!-- /.breadcrumb -->

					</div>

					<div class="page-content">
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="row">
									<div class="col-xs-10 col-xs-offset-1">
										
										<form class="form-horizontal" id="rosterassignid" method="post">
										<div class="clearfix">
											<div class="pull-right tableTools-container"></div>
										</div>
										<div class="table-header">
											Roster Assign
										</div>

										<!-- div.table-responsive -->

										<!-- div.dataTables_borderWrap -->
										
										<div>

											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th class="center">
															SL
														</th>
														<th>Name</th>
														<th>Card Id</th>
														<th>User Type</th>
														<th>Roster</th>
														<th class="hidden-480">Status</th>
														<th>Action</th>
													</tr>
												</thead>

												<tbody>
													<?php 

														$i= 1;

														while($employeedata = $employeeviewdata->fetch_assoc())
														{	

															$emid = $employeedata['id'];

															
													?>
													<tr>
														<td class="center">

															<?php
																echo $i++;
															?>
															<!--<input type="checkbox" name="chk[]">-->
														</td>

														<td>
															<?php echo $employeedata['fullname']; ?>
															
															<input type="hidden" name="card_id[]" value="<?php echo $employeedata['card_id']; ?>">

																<input type="hidden" name="employeeid[]" value="<?php echo $employeedata['id']; ?>">
														</td>
														<td>
															<?php echo $employeedata['card_id']; ?>
														</td>
														<td>
															<?php echo $employeedata['designation']; ?>
														</td>
														<td>
															
															<select class="form-control" name="rosterid[]">
															  <option value="">Select Roster</option>

															  <?php
																  $rosterdata = $cls_manage->rosterdataview();

															  while($viewdata = $rosterdata->fetch_assoc()) {

															  		 $menuid = $viewdata['id'];

																	 $view_rost = $cls_manage->view_roster_id($menuid,$emid);

																	$rostdata = $view_rost->fetch_assoc();

																	$rostid= $rostdata['roster_id'];
															 
																	 $menu_name = $viewdata['roster_name'];

															  ?>

															  <option <?php if($menuid==$rostid) { ?> selected <?php } ?> value="<?php echo $viewdata['id']; ?>">

															  	<?php if(!empty($menu_name)) { ?><?php echo $menu_name; } ?>


															  </option>

															  <?php
															  		}
															  	?>

															</select>

														</td>

														<td class="hidden-480">
															<select class="form-control" name="status_id[]">
															  <option value="">Select Status</option>

															  <?php

															  $statusdata = $cls_manage->statusdataview();

															  while($viewstatus = $statusdata->fetch_assoc()) {

															  	$stuid = $viewstatus['status_id'];

															  	$view_status = $cls_manage->view_status_id($stuid,$emid);

																$statuid = $view_status->fetch_assoc();

																$viewstuts = $statuid['status'];

																$status_name = $viewstatus['status_name'];

															  ?>

															   <option <?php if($stuid==$viewstuts) { ?> selected <?php } ?> value="<?php echo $viewstatus['status_id']; ?>">

															  	<?php if(!empty($status_name)) { ?><?php echo $status_name; } ?>


															  </option>


															  <?php
															  		}
															  	?>

															</select>
														</td>

														<td>
															<div class="hidden-sm hidden-xs action-buttons">
																
																<a class="green" href="index.php?pge=rosterassign&&user_id=<?php echo $employeedata['id']; ?>">
																	<i class="ace-icon fa fa-pencil bigger-130"></i>
																</a>
															</div>

															<div class="hidden-md hidden-lg">
																<div class="inline pos-rel">
																	<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
																		<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
																	</button>

																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																		
																		<li>
																			<a href="index.php?pge=rosterassign&&menu_id=<?php echo $employeedata['id']; ?>" class="tooltip-success" data-rel="tooltip" title="Edit">
																				<span class="green">
																					<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																				</span>
																			</a>
																		</li>

																	</ul>
																</div>
															</div>
														</td>

													</tr>

													<?php
														}
													?>


												</tbody>
												</table>
												<br>
												<div class="form-group">
													<div class="col-sm-4 col-sm-offset-4">
														<input type="submit" class="btn btn-sm btn-success" value="Submit">
													</div>
												</div>
												</div>
												
											</form>
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
