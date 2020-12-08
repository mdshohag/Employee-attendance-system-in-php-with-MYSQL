<?php
	session_start();
	require_once('../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../functions/$classname.class.php");
	}
	
	$db = new cls_dbconfig();
	$cls_employee = new cls_employee();
	
	$user_id = $_SESSION['customer_id'];

	$employee_id = "$_POST[employee_id]";
	
	$refname = htmlspecialchars(ucwords ($_REQUEST['refname']), ENT_QUOTES, 'UTF-8');
	$relaion = htmlspecialchars(ucwords ($_REQUEST['relaion']), ENT_QUOTES, 'UTF-8');
	$mobile = "$_POST[mobile]";
	$address = "$_POST[address]";
	
	echo $cls_employee->add_employee_emergency($employee_id, $refname, $relaion, $mobile, $address, $user_id);
		

		
	
?>