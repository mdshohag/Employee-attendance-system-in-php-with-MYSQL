<?php
	 session_start();
	require_once('../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../functions/$classname.class.php");
	}
	
	$db = new cls_dbconfig();
	$cls_menu = new cls_menu();

	$client_id = $_SESSION['customer_id'];

	
	$menuid = $_POST[menuidin];

	
	//$user_id = $_POST['user_id'];

	$user_id = "$_POST[user_id]";
	
	

	echo $cls_menu->add_menualocation($client_id,$user_id,$menuid);


?>