<?php
	 session_start();
	require_once('../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../functions/$classname.class.php");
	}
	
	$db = new cls_dbconfig();
	$cls_employee = new cls_employee();

	
	$emp_id = $_POST['empid'];

	
	//$user_id = $_POST['user_id'];

	
	for($i=0; $i<count($emp_id); $i++){
	
	$admin_id = $_SESSION['customer_id'];

	$empid = htmlspecialchars($_REQUEST['empid'][$i], ENT_QUOTES, 'UTF-8');
	$card_id = htmlspecialchars($_REQUEST['card_id'][$i], ENT_QUOTES, 'UTF-8');
	$attendance_status = $_REQUEST['attendance_status'][$i];
	$late_time = htmlspecialchars($_REQUEST['late_time'][$i], ENT_QUOTES, 'UTF-8');
	$atd_type = htmlspecialchars($_REQUEST['atd_type'][$i], ENT_QUOTES, 'UTF-8');
	$in_time = htmlspecialchars($_REQUEST['in_time'][$i], ENT_QUOTES, 'UTF-8');
	$out_time = htmlspecialchars($_REQUEST['out_time'][$i], ENT_QUOTES, 'UTF-8');
	$comment = htmlspecialchars($_REQUEST['comment'][$i], ENT_QUOTES, 'UTF-8');
	$enterdate = htmlspecialchars($_REQUEST['enterdate'][$i], ENT_QUOTES, 'UTF-8');
	
echo $cls_employee->add_attendance($empid,$card_id,$late_time,$attendance_status,$atd_type,$in_time,$out_time,$comment,$admin_id,$enterdate);
	
	}


?>