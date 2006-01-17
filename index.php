<?php
	include_once ("includes/config.php");
	include_once ("includes/functions.php");
	
	include ("includes/header.php");
	
	$lang = "en";
	$uri = CleanupURI($_SERVER["REQUEST_URI"]);
	
	$file = GetContentPage ($uri, $lang);
	if ($file) {
		include ($file);
	} else {
		echo "Page not found, search the Xfce website.";
	}
	
	include ("includes/footer.php");
?>
