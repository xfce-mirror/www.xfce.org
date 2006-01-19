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

$languages = array (
    "en" => 'English',
    "nl" => 'Nederlands',
);

session_start();
$layout = UserVariable ("layout", array ("normal","liquid"), "normal");
$lang = UserVariable ("lang", array_keys($languages), "en");

/* Recursive stripping idea:
	- explode uri
	- start building the uri again while trying if the file exists
	  - translation page and english one.
	- if no file is found anymore: use last working uri.
	
	so projects/xfmedia/downloads/foo/foo/foo/foo/foo will be striped
	to projects/xfmedia/downloads.
	
	Also names like projects/xfmedia/downloads.html will be projects/xfmedia
*/

$uri = $_SERVER["REDIRECT_URL"];
	$uri = trim($uri, '/');
	$uri = strtolower ($uri);
	
PrintHeader ($uri, $lang, $layout);
	
if ($uri == "")
{
	PrintFrontpage ($lang, $languages);
}
elseif ($content = GetContent ($uri, $lang))
{
	PrintContent ($content);
}
else
{
	print ("<h1>404, page not found</h1>");
}

PrintFooter ($lang);

$time_end = microtime_float();
echo "<center>Execution time: ". round($time_end - $time_start, 4) ." seconds</center>"; 
?>
