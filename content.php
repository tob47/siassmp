<?php
if(isset($_GET['page'])){
	$page=$_GET['page'];	
	$file="$page.php";
	
	if (!file_exists($file)){
		include ("dashboard.php");
	}else{
		include ("$page.php");
	}
}else{
	include ("dashboard.php");
}
?>