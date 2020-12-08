<?php
	// session_start();
	require_once('../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../functions/$classname.class.php");
	}
	
	$db = new cls_dbconfig();

	$cls_menu = new cls_menu();

	$employeeid = "$_POST[employeeid]";


	$employee = $cls_menu->view_employee_data($employeeid);

	$employeedata = $employee->fetch_assoc();

	?>


	<div class="form-group" >
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Employee Name</label>
		<div class="col-sm-9">
			<input type="text" id="employee" name="employee" value="<?php echo $employeedata['fullname']; ?>" class="col-xs-10 col-sm-7" readonly />
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Designation </label>

		<div class="col-sm-9">
			<input type="text" id="designation" name="designation" value="<?php echo $employeedata['designation']; ?>"  class="col-xs-10 col-sm-7" readonly />
		</div>
	</div>