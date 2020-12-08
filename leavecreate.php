

<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="index.php?pge=home">Home</a>
							</li>
							<li class="active">Leave </li>
						</ul><!-- /.breadcrumb -->

					</div>

					<div class="page-content">
						<div class="row">
							<div class="col-xs-12">

							<div class="tab-content">
							
							<form class="form-horizontal" id="leavecreate" role="form">
								<center><h3>Leave Create</h3></center>


								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Leave Name </label>

									<div class="col-sm-9">
										<input type="text" id="leavename" name="leavename" placeholder="Leave Name" class="col-xs-10 col-sm-7" />
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Total Day </label>

									<div class="col-sm-9">
										<input type="text" id="totalday" name="totalday" placeholder="Total Day" class="col-xs-10 col-sm-7" />
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-4 col-sm-offset-4">
										<input type="submit" class="btn btn-sm btn-success" value="Submit">
									</div>
								</div>
							</form>

							<br>
							<div class="row">
							<div class="col-xs-10 col-xs-offset-1">
							<div class="clearfix">
											<div class="pull-right tableTools-container"></div>
										</div>
										<div class="table-header">
											Leave Manage
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
														<th>Lave Name</th>
														<th>Total Day</th>
														<th style="display: none;"></th>
														<th style="display: none;" class="hidden-480"></th>
														<th style="display: none;"></th>
														<th>Action</th>
													</tr>
												</thead>

												<tbody>
													<?php 

														$i= 1;

														while($leavedata = $leaveviewdata->fetch_assoc())
														{	
															
													?>
													<tr>
														<td class="center">
															<?php echo $i++; ?>
														</td>

														<td>
															<?php echo $leavedata['leave_name']; ?>
														</td>
														<td>
															<?php echo $leavedata['total_day']; ?>
														</td>
														<td style="display: none;">
															
														</td>
														<td style="display: none;" class="hidden-480">
														</td>
														<td style="display: none;"></td>

														<td>
															<div class="hidden-sm hidden-xs action-buttons">
																
																<a class="green" href="index.php?pge=editleave&&leave_id=<?php echo $leavedata['id']; ?>">
																	<i class="ace-icon fa fa-pencil bigger-130"></i>
																</a>

																<!--<a class="red user_delete" user_id="<//?php echo $leavedata['id']; ?>"  href="#">
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
																			<a href="index.php?pge=editleave&&leave_id=<?php echo $leavedata['id']; ?>" class="tooltip-success" data-rel="tooltip" title="Edit">
																				<span class="green">
																					<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<!--<li>
																			<a href="#" class="tooltip-error user_delete" user_id="<//?php echo $leavedata['id']; ?>" data-rel="tooltip" title="Delete">
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