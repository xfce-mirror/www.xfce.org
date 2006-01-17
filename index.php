<?php
	include_once ("include/config.php");
	include_once ("include/functions.php");
	
	include ("include/header.php");
	
	$lang = "en";
	$uri = CleanupURI($_SERVER["REDIRECT_URL"]);
	
	$file = GetContentPage ($uri, $lang);
	if ($file) {
		include ($file);
	} else {
		print ("Page '<strong>". $uri ."</strong>' not found, search the Xfce website.");
	}
	
	include ("include/footer.php");
?>
