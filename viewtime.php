

<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="index.php?pge=home">Home</a>
							</li>
							<li class="active">Time View </li>
						</ul><!-- /.breadcrumb -->

					</div>

					<div class="page-content">
						<div class="row">
							<div class="col-xs-12">

							<div class="tab-content">
							
							<div class="row">
							<div class="col-xs-10 col-xs-offset-1">
							<div class="clearfix">
											<div class="pull-right tableTools-container"></div>
										</div>
										<div class="table-header">
										View Time
										</div>

										<!-- div.table-responsive -->

										<!-- div.dataTables_borderWrap -->
										<div>
											<table class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th class="center">
															SL
														</th>
														<th>ID</th>
														<th>Card NO</th>
														<th>Min ID</th>
														<th>Max ID</th>
														<th>In Time</th>
														<th>Out Time</th>
														<th>Date</th>
													</tr>
												</thead>

												<tbody>
													<?php 
													$cls_employee = new cls_employee();

														$i= 1;

														$timeview = $cls_employee->view_atd_device();

														while($tdata = $timeview->fetch_assoc())
														{	

														$id = $tdata['ID'];

														$CARD = $tdata['CARD_NO'];

														$view = $cls_employee->view_atd($CARD);

														$timed = $view->fetch_assoc();

														
														$minid = $timed['minID'];

														$mdxid = $timed['mxID'];


														$viewmini = $cls_employee->view_miniid($minid,$CARD);

														$timemini = $viewmini->fetch_assoc();

														$viewmax = $cls_employee->view_minmax($mdxid,$CARD);

														$timemax = $viewmax->fetch_assoc();

															
													?>
													<tr>
														<td class="center">
															<?php echo $i++; ?>
														</td>
														<td>
															
														</td>
														<td>
															<?php echo $tdata['CARD_NO']; ?>
														</td>
														<td>
															<?php echo $timed['minID']; ?>
														</td>
														<td>
															<?php echo $timed['mxID']; ?>
														</td>
														
														<td>
															<?php echo $timemini['totime']; ?>
														</td>
														<td>
															<?php echo $timemax['mxtotime']; ?>
														</td>

														<td>
															<?php echo $tdata['CHECK_TIME']; ?>
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