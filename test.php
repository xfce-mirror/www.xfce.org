<?php
	$url = $_SERVER["REQUEST_URI"];
	
	// Trim leading and lagging slashes
	$url = trim($url, '/');
	
	echo $url;
?>
