<?php
	session_start();
	require_once('../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../functions/$classname.class.php");
	}
	
	$db = new cls_dbconfig();
	$cls_menu = new cls_menu();
	
	$customer_id = $_SESSION['customer_id'];

	$id = "$_POST[menuid]";
	
	$menutitle = htmlspecialchars(ucwords ($_REQUEST['menutitle']), ENT_QUOTES, 'UTF-8');

	$pagename = "$_POST[pagename]";

	$parent_id = "$_POST[parent_id]";
	
	
	echo $cls_menu->menu_update($menutitle,$parent_id,$pagename,$customer_id,$id);
	
	
	
?>