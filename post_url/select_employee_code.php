<?php
	// session_start();
	require_once('../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../functions/$classname.class.php");
	}
	
	$db = new cls_dbconfig();

	$cls_employee = new cls_employee();

	$departmentid = "$_POST[departmentid]";

	?>

<option value=""> Select Staff Code</option>

<?php

	$departmentid = $cls_employee->view_employee_departmentid($departmentid);

	while($employeedata = $departmentid->fetch_assoc())
	{	
?>
	<option value="<?php echo $employeedata['card_id']; ?>" ><?php echo $employeedata['card_id']; ?> -- <?php echo $employeedata['fullname']; ?></option>
<?php
	}
?>

