<?php
	session_start();
	require_once('../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../functions/$classname.class.php");
	}
	
	$db = new cls_dbconfig();
	$cls_admin = new cls_admin();
	
	$customer_id = $_SESSION['customer_id'];

	$id = "$_POST[userid]";
	
	$fullname = htmlspecialchars(ucwords ($_REQUEST['fullname']), ENT_QUOTES, 'UTF-8');

	$usertype = "$_POST[usertype]";

	$username = "$_POST[username]";
	
	
	echo $cls_admin->user_update($customer_id,$fullname,$usertype,$username,$id);
	
	
	
?>