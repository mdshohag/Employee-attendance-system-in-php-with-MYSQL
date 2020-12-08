

<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="index.php?pge=home">Home</a>
							</li>
							<li class="active">Menus Create</li>
						</ul><!-- /.breadcrumb -->

					</div>

					<div class="page-content">
						<div class="row">
							<div class="col-xs-8 col-xs-offset-2">

							<div class="tab-content">

							<form class="form-horizontal" id="menus" role="form">
								<center><h3>Menus Create</h3></center>
								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Menu Title </label>

									<div class="col-sm-9">
										<input type="text" id="menutitle" name="menutitle" placeholder="Menu Title" class="col-xs-10 col-sm-7" />
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Page Name </label>

									<div class="col-sm-9">
										<input type="text" id="pagename" name="pagename" placeholder="page name" class="col-xs-10 col-sm-7" />
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Select Parent Menu </label>

									<div class="col-sm-9">
										<select name="parent_id" id="parent_id" class="col-xs-10 col-sm-7" >
											  <option value="">Select Parent Menu</option>

											  <?php while($menu_view = $menusview->fetch_assoc()){ ?>

											  <option value="<?php echo $menu_view['id']; ?>"><?php echo $menu_view['title']; ?></option>

											  <?php } ?>
											</select>
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