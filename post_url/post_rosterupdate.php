<?php
	session_start();
	require_once('../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../functions/$classname.class.php");
	}
	
	$db = new cls_dbconfig();
	$cls_manage = new cls_manage();
	

	
	$user_id = $_SESSION['customer_id'];

	$rosterid = "$_POST[rosterid]";
	
	$rostername = "$_POST[rostername]";
	$starttime = "$_POST[starttime]";
	$endtime = "$_POST[endtime]";
	
		
	echo $cls_manage->updateroster($rostername,$starttime,$endtime,$user_id,$rosterid);


?>