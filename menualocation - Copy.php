

<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="index.php?pge=home">Home</a>
							</li>
							<li class="active">Menus Alocation</li>
						</ul><!-- /.breadcrumb -->

					</div>

					<div class="page-content">
						<div class="row">
							<div class="col-xs-8 col-xs-offset-2">

							<div class="tab-content">

							<form class="form-horizontal" id="menualocation" role="form">
								<center><h3>User Menus alocation</h3></center>
								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Select User </label>

									<div class="col-sm-9">
										<select name="user_id" id="user_id" class="col-xs-10 col-sm-7">
											  <option value="">Select User</option>

											  <?php while($user_view = $userview->fetch_assoc()){ ?>

											  <option value="<?php echo $user_view['id']; ?>"><?php echo $user_view['name']; ?></option>

											  <?php } ?>
										</select>
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Menu Checkbox </label>

									<div class="col-sm-9">
										
										 <?php while($menu_data = $menusviewdata->fetch_assoc()){ ?>

										<label class="checkbox-inline">
     									 	<input type="checkbox" name="menuid[]" value="<?php echo $menu_data['id']; ?>"><?php echo $menu_data['title']; ?>
   										 </label>

   										   <?php } ?>

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