<?php
	session_start();
	require_once('../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../functions/$classname.class.php");
	}
	
	$db = new cls_dbconfig();
	$cls_employee = new cls_employee();
	
	$user_id = $_SESSION['customer_id'];

	$eduid = "$_POST[eduid]";
	
	$examname = htmlspecialchars(ucwords ($_REQUEST['examname']), ENT_QUOTES, 'UTF-8');
	$institutename = htmlspecialchars(ucwords ($_REQUEST['institutename']), ENT_QUOTES, 'UTF-8');
	$board = htmlspecialchars(ucwords ($_REQUEST['board']), ENT_QUOTES, 'UTF-8');
	$result = "$_POST[result_type]"; 
	$marks = "$_POST[marks]";
	$cgpa = "$_POST[cgpa]";
	$scale = "$_POST[scale]";
	$passing = "$_POST[passing]";

	
	echo $cls_employee->update_employee_education($user_id, $examname, $institutename, $board, $result, $marks, $cgpa, $scale, $passing, $eduid);
		
	
?>