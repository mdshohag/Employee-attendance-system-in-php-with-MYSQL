<?php 
	if(!isset($_GET['pge'])){
		header('Location:?pge=home'); 
	}else{
		$page = $_GET['pge']; 

		include 'include/header.php';
		include $page.'.php';
		include 'include/footer.php';
	}
?>