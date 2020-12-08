<?php
	 session_start();
	require_once('../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../functions/$classname.class.php");
	}
	
	$db = new cls_dbconfig();
	$cls_menu = new cls_menu();

	
	$userss_id = $_POST['menuid'];

	
	//$user_id = $_POST['user_id'];

	$user_id = "$_POST[user_id]";
	
	for($i=0; $i<count($userss_id); $i++){
	
	$client_id = $_SESSION['customer_id'];
	$menuid = htmlspecialchars($_REQUEST['menuid'][$i], ENT_QUOTES, 'UTF-8');
	
	echo $cls_menu->add_menualocation($client_id,$user_id,$menuid);
	
	}


?>