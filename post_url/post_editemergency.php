<?php
	session_start();
	require_once('../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../functions/$classname.class.php");
	}
	
	$db = new cls_dbconfig();
	$cls_employee = new cls_employee();
	
	$user_id = $_SESSION['customer_id'];

	$emrgyid = "$_POST[emrgyid]";

	$refname = htmlspecialchars(ucwords ($_REQUEST['refname']), ENT_QUOTES, 'UTF-8');
	$relaion = htmlspecialchars(ucwords ($_REQUEST['relaion']), ENT_QUOTES, 'UTF-8');
	$mobile = "$_POST[mobile]";
	$address = htmlspecialchars(ucwords ($_REQUEST['address']), ENT_QUOTES, 'UTF-8');

	
	echo $cls_employee->update_employee_emergency($user_id, $refname, $relaion, $mobile, $address, $emrgyid);
		
	
?>