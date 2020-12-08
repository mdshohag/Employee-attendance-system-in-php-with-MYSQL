<?php
	require_once('../functions/cls_dbconfig.php');
	function __autoload($classname){
	  require_once("../functions/$classname.class.php");
	}
	
	$db = new cls_dbconfig();
	$cls_menu = new cls_menu();
	
	 
	$menuid = "$_POST[menu_id]";
	
	 
	echo  $cls_menu->menu_delete($menuid);

	echo  $cls_menu->menualocation_delete($menuid);


?>