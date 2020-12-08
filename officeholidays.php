
<div class="main-content">
	<div class="main-content-inner">
		<div class="breadcrumbs ace-save-state" id="breadcrumbs">
			<ul class="breadcrumb">
				<li>
					<i class="ace-icon fa fa-home home-icon"></i>
					<a href="index.php?pge=home">Home</a>
				</li>
				<li class="active">Office Holidays </li>
			</ul><!-- /.breadcrumb -->

		</div>

		<div class="page-content">
			<div class="row">
				<div class="col-xs-12">

				<div class="tab-content">
				
				<form class="form-horizontal" id="holiday" role="form">
					<center><h3>Office Holidays</h3></center>

					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-2">Office Holiday Reason</label>
						<div class="col-sm-9">
							<select name="holidaytitle" id="holidaytitle" class="col-xs-10 col-sm-7">
								<option value="">Select</option>
								<option value="Weekend">Weekend</option>
								<option value="Govt Holiday">Govt Holiday</option>
								<option value="Other Holiday">Other Holiday</option>
							</select>	
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Date </label>
						<div class="col-sm-9">
							<input type="text" id="datepickerfrom" name="holiday_date" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd" class="col-xs-10 col-sm-7" />
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-2">Notes</label>
						<div class="col-sm-9">
							<textarea name="description" id="Notes" placeholder="Description" rows="3" class="col-xs-10 col-sm-7"></textarea>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-4 col-sm-offset-4">
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