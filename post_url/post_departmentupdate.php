<?php
	session_start();
	require_once('../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../functions/$classname.class.php");
	}
	
	$db = new cls_dbconfig();
	$cls_manage = new cls_manage();
	

	
	$user_id = $_SESSION['customer_id'];
	
	$departmentid = "$_POST[departmentid]";

	$department = "$_POST[department]";
	
		
	echo $cls_manage->editdepartment($department,$user_id,$departmentid);


?>