<?php
	/* Benchmark */
	$startTime = array_sum(explode(" ",microtime()));
	
	include_once ("include/functions.php");
	include_once ("include/header.php");
	include_once ("include/footer.php");
	echo ''. round((array_sum(explode(" ",microtime())) - $startTime),4).' seconds';
	$lang = "en";
	$uri = CleanupURI($_SERVER["REDIRECT_URL"]);

	$file = GetContentPage ($uri, $lang);

	PrintHeader ($uri, $file, $lang);
	
	if ($file) {
		include ($file);
	} else {
		#will be replaced by a 404 page or the index
		include ("include/frontpage.php");
	}
	
	PrintFooter ($lang);
	
	echo ''. round((array_sum(explode(" ",microtime())) - $startTime),4).' seconds';
?>
