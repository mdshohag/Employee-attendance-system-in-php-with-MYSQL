


<div class="main-content">
	<div class="main-content-inner">
		<div class="breadcrumbs ace-save-state" id="breadcrumbs">
			<ul class="breadcrumb">
				<li>
					<i class="ace-icon fa fa-home home-icon"></i>
					<a href="#">Home</a>
				</li>
				<li>
					<a href="index.php?pge=leaveassign">Leave Assign</a>
				</li>
				<li class="active">Leave Assign Manage</li>
			</ul><!-- /.breadcrumb -->

		</div>

		<div class="page-content">
			<div class="row">
				<div class="col-xs-12">
					<!-- PAGE CONTENT BEGINS -->
					<div class="row">
						<div class="col-xs-12">
							

							<div class="clearfix">
								<div class="pull-right tableTools-container"></div>
							</div>
							<div class="table-header">
								Leave Assign Manage
							</div>

							<!-- div.table-responsive -->

							<!-- div.dataTables_borderWrap -->
							<div>
								<table id="dynamic-table" class="table table-striped table-bordered table-hover">
									<thead>
										<tr>
											
											<th>Name</th>
											<th>Designation</th>
											<th>Leave Type</th>
											<th>To date</th>
											<th>From Date</th>
											<th class="hidden-480">Description</th>
											<th>Action</th>
										</tr>
									</thead>

									<tbody>
										<?php 

											$cls_manage = new cls_manage();

											$leaveviewdata = $cls_manage->leaveassignview();

											$i= 1;

											while($leaveviedata = $leaveviewdata->fetch_assoc())
											{	
											
										?>
										<tr>
											
											<td>
												<?php echo $leaveviedata['fullname']; ?>
											</td>
											<td>
												<?php echo $leaveviedata['name_department']; ?>
											</td>
											<td>
												<?php echo $leaveviedata['leave_name']; ?>
											</td>
											<td>
												<?php echo $leaveviedata['leave_to']; ?>
											</td>
											<td>
												<?php echo $leaveviedata['leave_from']; ?>
											</td>
											<td class="hidden-480">
												<?php echo $leaveviedata['note']; ?>
											</td>

											<td>
												<div class="hidden-sm hidden-xs action-buttons">
													
													<a class="green" href="index.php?pge=editleaveassign&&leaveid=<?php echo $leaveviedata['id']; ?>">
														<i class="ace-icon fa fa-pencil bigger-130"></i>
													</a>

													<!---<a class="red empl_delete" empl_id="<//?php echo $leaveviedata['id']; ?>"  href="#">
														<i class="ace-icon fa fa-trash-o bigger-130"></i>
													</a>-->
												</div>

												<div class="hidden-md hidden-lg">
													<div class="inline pos-rel">
														<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
															<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
														</button>

														<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
															
															<li>
																<a href="index.php?pge=editleaveassign&&leaveid=<?php echo $leaveviedata['id']; ?>" class="tooltip-success" data-rel="tooltip" title="Edit">
																	<span class="green">
																		<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																	</span>
																</a>
															</li>

															<!--<li>
																<a href="#" class="tooltip-error empl_delete" empl_id="<//?php echo $leaveviedata['id']; ?>" data-rel="tooltip" title="Delete">
																	<span class="red">
																		<i class="ace-icon fa fa-trash-o bigger-120"></i>
																	</span>
																</a>
															</li>-->

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
