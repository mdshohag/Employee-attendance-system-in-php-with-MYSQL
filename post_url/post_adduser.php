<?php
	session_start();
	require_once('../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../functions/$classname.class.php");
	}
	
	$db = new cls_dbconfig();
	$cls_admin = new cls_admin();
	

	
	$customer_id = $_SESSION['customer_id'];
	
	$name = "$_POST[fullname]";
	$usertype = "$_POST[usertype]";
	$username = "$_POST[username]";
	$upassword = md5("$_POST[upassword]");
	
	
	//$description = $db->connection()->real_escape_string("$_POST[description]");
	
		
	echo $cls_admin->adduser($customer_id,$name,$usertype,$username,$upassword);

	
		
		
	
?>