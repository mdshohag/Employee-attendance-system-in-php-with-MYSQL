<?php
	session_start();
	require_once('../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../functions/$classname.class.php");
	}
	
	$db = new cls_dbconfig();
	$cls_manage = new cls_manage();
	

	
	$user_id = $_SESSION['customer_id'];
	
	$holidaytitle = "$_POST[holidaytitle]";
	$holiday_date = "$_POST[holiday_date]";
	$description = "$_POST[description]";
	
		
	echo $cls_manage->add_officeholidays($holidaytitle,$holiday_date,$description,$user_id);


?>