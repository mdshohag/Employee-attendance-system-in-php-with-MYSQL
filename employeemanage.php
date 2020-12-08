


<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li>
								<a href="index.php?pge=employeecreate">Employee Registration</a>
							</li>
							<li class="active">Employee Manage</li>
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
											Employee Manage 
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
														<th>Designation</th>
														<th>Email</th>
														<th class="hidden-480">Employee ID</th>
														<th>Mobile No</th>
														<th>Action</th>
													</tr>
												</thead>

												<tbody>
													<?php 

														$i= 1;

														while($employeedata = $employeeviewdata->fetch_assoc())
														{	
															
													?>
													<tr>
														<td class="center">
															<?php echo $i++; ?>
														</td>

														<td>
															<?php echo $employeedata['fullname']; ?>
														</td>
														<td>
															<?php echo $employeedata['designation']; ?>
														</td>
														<td>
															<?php echo $employeedata['employee_email']; ?>
														</td>
														<td class="hidden-480">
															<?php echo $employeedata['card_id']; ?>
														</td>
														<td>
															<?php echo $employeedata['mobile']; ?>
														</td>

														<td>
															<div class="hidden-sm hidden-xs action-buttons">
																
																<a class="green" href="index.php?pge=employeemanageprofile&&epmlid=<?php echo $employeedata['id']; ?>">
																	<i class="ace-icon fa fa-pencil bigger-130"></i>
																</a>

																<a class="red empl_delete" empl_id="<?php echo $employeedata['id']; ?>"  href="#">
																	<i class="ace-icon fa fa-trash-o bigger-130"></i>
																</a>
															</div>

															<div class="hidden-md hidden-lg">
																<div class="inline pos-rel">
																	<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
																		<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
																	</button>

																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																		
																		<li>
																			<a href="index.php?pge=employeemanageprofile&&epmlid=<?php echo $employeedata['id']; ?>" class="tooltip-success" data-rel="tooltip" title="Edit">
																				<span class="green">
																					<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-error empl_delete" empl_id="<?php echo $employeedata['id']; ?>" data-rel="tooltip" title="Delete">
																				<span class="red">
																					<i class="ace-icon fa fa-trash-o bigger-120"></i>
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
