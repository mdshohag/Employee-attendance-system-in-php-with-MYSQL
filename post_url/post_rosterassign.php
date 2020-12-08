<?php
	 session_start();
	require_once('../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../functions/$classname.class.php");
	}
	
	$db = new cls_dbconfig();
	$cls_manage = new cls_manage();
	

//$chk = $_POST['chk'];


//if (!empty($_POST['chk'])){

	$emp_id = $_POST['employeeid'];


	
	//for($i=0; $i<count(!empty($_POST['chk'])); $i++){

	for($i=0; $i<count($emp_id); $i++){
	
	$user_id = $_SESSION['customer_id'];

	$employeeid = htmlspecialchars($_REQUEST['employeeid'][$i], ENT_QUOTES, 'UTF-8');
	$card_id = htmlspecialchars($_REQUEST['card_id'][$i], ENT_QUOTES, 'UTF-8');
	$rosterid = htmlspecialchars($_REQUEST['rosterid'][$i], ENT_QUOTES, 'UTF-8');
	$status_id = htmlspecialchars($_REQUEST['status_id'][$i], ENT_QUOTES, 'UTF-8');
	
	echo $cls_manage->add_rosterassign($employeeid,$card_id,$rosterid,$status_id,$user_id);
	
	}
//}else{
	//echo 'not';
//}




?>