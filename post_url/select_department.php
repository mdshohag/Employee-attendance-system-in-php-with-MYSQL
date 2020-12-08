

<?php
	// session_start();
	require_once('../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../functions/$classname.class.php");
	}
	
	$db = new cls_dbconfig();

	$cls_manage = new cls_manage();

	$depart_id = "$_POST[depart_id]";

	?>


 <option value="">Select Employee ID</option>
	  <?php 
		$employeeviewdata = $cls_manage->show_employee($depart_id); 
	while($employeedata = $employeeviewdata->fetch_assoc())
			{
		?>
	  <option value="<?php echo $employeedata['id']; ?>"><?php echo $employeedata['card_id']; ?></option>  
		  <?php
			}
		?>
