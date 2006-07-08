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
include ("include/frontpage.php");
include ("include/content.php");
include ("include/feed.php");
include ("include/news.php");

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

# Set the locale for the date() function
setlocale (LC_ALL, $languages[$lang][2]);

# Check for feed request
if ($_GET["feed"] == "rss2")
{
    # Show feed xml and exit
    ParseRssFeed ($lang);
    exit;
}

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
	PrintFrontpage ($lang, $lastvisit);
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
