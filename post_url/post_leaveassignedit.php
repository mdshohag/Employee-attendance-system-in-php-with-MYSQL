<?php
	session_start();
	require_once('../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../functions/$classname.class.php");
	}
	
	$db = new cls_dbconfig();
	$cls_manage = new cls_manage();
	
	
	$user_id = $_SESSION['customer_id'];
	
	$leaveassignid = "$_POST[leaveassignid]";
	$employeeid = "$_POST[employeeid]";
	$departid = "$_POST[departid]";
	$leaveid = "$_POST[leaveid]";
	$leave_to = "$_POST[leave_to]";
	$leave_from = "$_POST[leave_from]";
	$description = "$_POST[description]";

		
	echo $cls_manage->leaveassignedit($employeeid,$departid,$leaveid,$leave_to,$leave_from,$description,$user_id,$leaveassignid);


?>