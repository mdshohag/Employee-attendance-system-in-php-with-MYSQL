<?php
	session_start();
	require_once('../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../functions/$classname.class.php");
	}
	
	$db = new cls_dbconfig();
	$cls_employee = new cls_employee();
	
	$user_id = $_SESSION['customer_id'];
	
	$fullname = htmlspecialchars(ucwords ($_REQUEST['fullname']), ENT_QUOTES, 'UTF-8');	
	$department = htmlspecialchars(ucwords ($_REQUEST['department']), ENT_QUOTES, 'UTF-8');
	$designation = htmlspecialchars(ucwords ($_REQUEST['designation']), ENT_QUOTES, 'UTF-8');
	$emp_id = htmlspecialchars(ucwords ($_REQUEST['emp_id']), ENT_QUOTES, 'UTF-8');
	$mobile = "$_POST[mobile]";
	$emp_email = "$_POST[emp_email]";
	$gender = htmlspecialchars(ucwords ($_REQUEST['gender']), ENT_QUOTES, 'UTF-8');
	$naid = "$_POST[naid]";
	$birthid = "$_POST[birthid]";
	$passport = "$_POST[passport]";
	$religion = htmlspecialchars(ucwords ($_REQUEST['religion']), ENT_QUOTES, 'UTF-8');
	$fathername = htmlspecialchars(ucwords ($_REQUEST['fathername']), ENT_QUOTES, 'UTF-8');
	$mothername = htmlspecialchars(ucwords ($_REQUEST['mothername']), ENT_QUOTES, 'UTF-8');
	$presentaddress = "$_POST[presentaddress]";
	$permanentaddress = "$_POST[permanentaddress]";



	$photoup = $_FILES['photoup']['name'];
	$tmp = $_FILES["photoup"]["tmp_name"];	
	
	$alloweds = array('jpg','jpeg','png');

	$extss = explode('.', $photoup);

	if(!in_array($extss[1], $alloweds)){
	echo '<script>alert("Only JPG and PNG file allowed !!");</script>';
	} else {
		list($width, $height) = getimagesize($tmp);
		
		if(!empty($width<1675 || $height<1675)){
		$rr = rand('1111','9999');
		$pic = "$rr.jpg";
		$destinations = "../employee_photo/$pic";
			if(move_uploaded_file($tmp,$destinations)){
				
				}else{
					echo '<script>alert("Upload Filed !!");</script>';
				}
			} else {
				echo '<script>alert("Allow image Size width ");</script>';
			}
		}



	
	echo $cls_employee->add_employee($fullname, $department, $designation, $emp_id, $mobile, $emp_email, $gender, $naid, $birthid, $passport, $religion, $fathername, $mothername, $presentaddress, $permanentaddress, $pic, $user_id);
	
	
?>