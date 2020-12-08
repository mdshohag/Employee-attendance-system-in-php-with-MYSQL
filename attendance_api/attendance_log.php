<?php
	

	require_once('../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../functions/$classname.class.php");
	}
	$cls_dbconfig = new cls_dbconfig();
	$db = $cls_dbconfig->connection();

	

	
	$cardid = $_GET['card_no'];

	///$Pdt = '1556967529';

 	$unixdatetime = $_GET['date_time'];
 
 	$TIME_COUNT = $_GET['date_time'];
	
	$from = new DateTimeZone('GMT');
	$to   = new DateTimeZone('Asia/Dhaka');
	$currDate     = new DateTime('now', $from);
	$currDate->setTimezone($to);
	//$data = $currDate->format('Y/m/j H:i:s');

	
	$CHECK_TIME = date('Y-m-d H:i:s', $unixdatetime); 

	$cenvertedTime = date('Y-m-d g:ia',strtotime('+4 hour',strtotime($CHECK_TIME)));

//	$cenvertedTime = date('Y-m-d g:ia',strtotime($CHECK_TIME));

	$TIME_COUNT = date("H:i:s",strtotime('+4 hour',strtotime($CHECK_TIME)));
	
	 $ok = $db->query("Insert into _atd_device_log (CARD_NO, CHECK_TIME, TIME_COUNT, STATUS) values ('$cardid','$cenvertedTime','$TIME_COUNT','1')");
	// return $ok;

	 if($ok){

	 	echo "<script type='text/javascript'>";
		//echo "alert('Ok');";
		echo "</script>";

	 }else{

	 	echo "<script type='text/javascript'>";
		//echo "alert('Not!');";
		echo "</script>";

	 }



?>

