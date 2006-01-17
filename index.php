<?php
	include_once ("includes/config.php");
	include_once ("includes/functions.php");
	
	include ("includes/header.php");
	
	
	$url = $_SERVER["REQUEST_URI"];
	$url = trim($url, '/');
	
	print ("Current Location: ". $url);
	
	
	include ("includes/footer.php");
?>
