<?php
	require_once('../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../functions/$classname.class.php");
	}
	
	$db = new cls_dbconfig();
	
	$cls_login = new cls_login();
	
	$uname = htmlspecialchars($_REQUEST['uname'], ENT_QUOTES, 'UTF-8');
	$pass = htmlspecialchars($_REQUEST['password'], ENT_QUOTES, 'UTF-8');
	
	
	
	echo $cls_login->customer_access($uname,$pass);
	
?>