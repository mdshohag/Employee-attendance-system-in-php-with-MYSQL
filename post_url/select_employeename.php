<?php
	// session_start();
	require_once('../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../functions/$classname.class.php");
	}
	
	$db = new cls_dbconfig();

	$cls_manage = new cls_manage();

	$employee_id = "$_POST[employee_id]";


	$employee = $cls_manage->view_employee_name($employee_id);

	$employeedata = $employee->fetch_assoc();

	?>


	

	<option ><?php echo $employeedata['fullname']; ?></option> 
