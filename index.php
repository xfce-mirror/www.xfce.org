<?php

function microtime_float()
{
	list($usec, $sec) = explode(" ", microtime());
	return ((float)$usec + (float)$sec);
}
$time_start = microtime_float();

include ("include/functions.php");
include ("include/arrays.php");
include ("include/header.php");
include ("include/footer.php");
include ("include/search.php");
include ("include/frontpage.php");
include ("include/content.php");

# Load session valiables
session_start();

# User language
$userlang = substr(trim($_SERVER["HTTP_ACCEPT_LANGUAGE"]), 0, 2);
if (!in_array ($userlang, array_keys($languages)))
	$userlang = "en";

# Get saved variables
$layout = UserVariable ("layout", $layouts, "normal");
$lang = UserVariable ("lang", array_keys($languages), $userlang);
$lastvisit = UserLastVisit ();

# Get relative url
$uri = $_SERVER["REDIRECT_URL"];
$uri = trim($uri, '/');
$uri = strtolower ($uri);

# Block some pages users are not allowed to see
$forbidden = array ("footer", "frontpage", "header");
if (in_array ($uri, $forbidden))
	$uri = "";

#Create webpage
if ($uri == "")
{
	PrintHeader ($uri, $lang, $layout, $languages);
	PrintFrontpage ($lang);
	PrintFooter ($lang);
}
elseif ($uri == "search")
{
	$search = PrepareSearch ($lang, $languages);
	PrintHeader ($uri, $lang, $layout, $languages);
	PrintSearch ($search, $lang, $languages);
	PrintFooter ($lang);
}
else
{
	$content = PrepareContent ($uri, $lang);
	PrintHeader ($uri, $lang, $layout, $languages);
	PrintContent ($content, $lang);
	PrintFooter ($lang);
}

$time_end = microtime_float();
echo "<!-- Execution time: ". round($time_end - $time_start, 4) ." seconds -->"; 
?>
