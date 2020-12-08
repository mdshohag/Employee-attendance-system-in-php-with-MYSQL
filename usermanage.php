


<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li>
								<a href="index.php?pge=usercreate">User Registration</a>
							</li>
							<li class="active">User Manage</li>
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
											User Manage
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
														<th>User ID</th>
														<th>User Type</th>
														<th style="display: none;" class="hidden-480"></th>
														<th style="display: none;"></th>
														<th>Action</th>
													</tr>
												</thead>

												<tbody>
													<?php 

														$i= 1;

														while($userdata = $userviewdata->fetch_assoc())
														{	
															
													?>
													<tr>
														<td class="center">
															<?php echo $i++; ?>
														</td>

														<td>
															<?php echo $userdata['name']; ?>
														</td>
														<td>
															<?php echo $userdata['username']; ?>
														</td>
														<td>
															<?php echo $userdata['type']; ?>
														</td>
														<td style="display: none;" class="hidden-480">
														</td>
														<td style="display: none;"></td>

														<td>
															<div class="hidden-sm hidden-xs action-buttons">
																
																<a class="green" href="index.php?pge=edituser&&user_id=<?php echo $userdata['id']; ?>">
																	<i class="ace-icon fa fa-pencil bigger-130"></i>
																</a>

																<a class="red user_delete" user_id="<?php echo $userdata['id']; ?>"  href="#">
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
																			<a href="index.php?pge=editmenu&&menu_id=<?php echo $userdata['id']; ?>" class="tooltip-success" data-rel="tooltip" title="Edit">
																				<span class="green">
																					<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-error user_delete" user_id="<?php echo $userdata['id']; ?>" data-rel="tooltip" title="Delete">
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
