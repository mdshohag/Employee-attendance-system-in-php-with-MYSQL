<?php
	session_start();
	require_once('../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../functions/$classname.class.php");
	}
	
	$db = new cls_dbconfig();
	$cls_employee = new cls_employee();
	
	$user_id = $_SESSION['customer_id'];

	$empid = "$_POST[empid]";
	
	$fullname = htmlspecialchars(ucwords ($_REQUEST['fullname']), ENT_QUOTES, 'UTF-8');
	$designation = htmlspecialchars(ucwords ($_REQUEST['designation']), ENT_QUOTES, 'UTF-8');
	$emp_id = htmlspecialchars(ucwords ($_REQUEST['emp_id']), ENT_QUOTES, 'UTF-8');
	$mobile = "$_POST[mobile]";
	$emp_email = "$_POST[emp_email]";
	$gender = htmlspecialchars(ucwords ($_REQUEST['gender']), ENT_QUOTES, 'UTF-8');
	$naid = "$_POST[naid]";
	$religion = htmlspecialchars(ucwords ($_REQUEST['religion']), ENT_QUOTES, 'UTF-8');
	$fathername = htmlspecialchars(ucwords ($_REQUEST['fathername']), ENT_QUOTES, 'UTF-8');
	$mothername = htmlspecialchars(ucwords ($_REQUEST['mothername']), ENT_QUOTES, 'UTF-8');
	$presentaddress = "$_POST[presentaddress]";
	$permanentaddress = "$_POST[permanentaddress]";

	
	echo $cls_employee->edit_employee($fullname, $designation, $emp_id, $mobile, $emp_email, $gender, $naid, $religion, $fathername, $mothername, $presentaddress, $permanentaddress, $user_id, $empid);
	
	
?>