


<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li>
								<a href="index.php?pge=menus">Menu Create</a>
							</li>
							<li class="active">Menu Manage</li>
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
											Menu Setting
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
														<th>Menu Name</th>
														<th>Menu Parent</th>
														<th>Menu Page</th>
														<th class="hidden-480">Status</th>
														<th style="display: none;"></th>
														<th>Action</th>
													</tr>
												</thead>

												<tbody>
													<?php 

														function getcolour($status) { 
																switch($status) 
																{ 
																case 1: 
																	return 'Active'; 
																	break;

																	case 0: 
																	return 'Inactive'; 
																	break; 
																
																} 
															} 

														$i= 1;

														while($parent_menu = $nullmenusviewdata->fetch_assoc())
														{	
															$status = $parent_menu["status"];

															$pr_id = $parent_menu['parent_id'];

															$parent_data = $cls_menu->parent_data($pr_id);
									
															 $parent_data_name = $parent_data->fetch_array();
															

													?>
													<tr>
														<td class="center">
															<?php echo $i++; ?>
														</td>

														<td>
															<?php echo $parent_menu['title']; ?>
														</td>
														<td>
															<?php echo $parent_data_name['title']; ?>
														</td>
														<td>
															<?php echo $parent_menu['page']; ?>
														</td>
														<td class="hidden-480">

															<?php echo getcolour($status); ?>


														</td>
														<td style="display: none;"></td>

														<td>
															<div class="hidden-sm hidden-xs action-buttons">
																
																<a class="green" href="index.php?pge=editmenu&&menu_id=<?php echo $parent_menu['id']; ?>">
																	<i class="ace-icon fa fa-pencil bigger-130"></i>
																</a>

																<a class="red menu_delete" menu_id="<?php echo $parent_menu['id']; ?>"  href="#">
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
																			<a href="index.php?pge=editmenu&&menu_id=<?php echo $parent_menu['id']; ?>" class="tooltip-success" data-rel="tooltip" title="Edit">
																				<span class="green">
																					<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																				</span>
																			</a>
																		</li>

																			<a href="#" class="tooltip-error menu_delete"  menu_id="<?php echo $parent_menu['id']; ?>" data-rel="tooltip" title="Delete">
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
