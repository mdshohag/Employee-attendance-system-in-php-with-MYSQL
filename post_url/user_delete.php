<?php
	require_once('../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../functions/$classname.class.php");
	}
	
	$db = new cls_dbconfig();
	$cls_admin = new cls_admin();
	
	 
	$userid = "$_POST[user_id]";
	
	 
	echo  $cls_admin->user_delete($userid);

	echo  $cls_admin->usermenualocation_delete($userid);


?>