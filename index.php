<?php
	include_once ("include/functions.php");
	include_once ("include/header.php");
	include_once ("include/footer.php");

	$lang = "en";
	$uri = CleanupURI($_SERVER["REDIRECT_URL"]);

	$file = GetContentPage ($uri, $lang);

	PrintHeader ($uri, $file, $lang);
	
	if ($file) {
		include ($file);
	} else {
		include ("include/frontpage.php");
	}
	
	PrintFooter ($lang);
?>
