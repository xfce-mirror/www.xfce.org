<?php

function microtime_float()
{
	list($usec, $sec) = explode(" ", microtime());
	return ((float)$usec + (float)$sec);
}
$time_start = microtime_float();

include_once ("include/functions.php");
include_once ("include/arrays.php");
include_once ("include/header.php");
include_once ("include/footer.php");
include_once ("include/frontpage.php");
include_once ("include/content.php");

# Load session valiables
session_start();
$layout = UserVariable ("layout", array ("normal","liquid"), "normal");
$lang = UserVariable ("lang", array_keys($languages), "en");

# Get relative url
$uri = $_SERVER["REDIRECT_URL"];
	$uri = trim($uri, '/');
	$uri = strtolower ($uri);
	
#Create webpage
if ($uri == "")
{
	PrintHeader ($uri, $lang, $layout, $languages);
	PrintFrontpage ($lang);
	PrintFooter ($lang);
}
else
{
	$content = GetContent ($uri, $lang);
	PrintHeader ($uri, $lang, $layout, $languages);
	PrintContent ($content);
	PrintFooter ($lang);
}

$time_end = microtime_float();
echo "<!-- Execution time: ". round($time_end - $time_start, 4) ." seconds -->"; 
?>
