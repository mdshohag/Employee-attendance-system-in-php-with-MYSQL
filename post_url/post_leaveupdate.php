<?php
	session_start();
	require_once('../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../functions/$classname.class.php");
	}
	
	$db = new cls_dbconfig();
	$cls_manage = new cls_manage();
	

	
	$user_id = $_SESSION['customer_id'];
	
	$leaveid = "$_POST[leaveid]";
	$leavename = "$_POST[leavename]";
	$totalday = "$_POST[totalday]";
	
		
	echo $cls_manage->updateleave($leavename,$totalday,$user_id,$leaveid);


?>