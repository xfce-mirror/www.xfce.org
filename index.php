<?php

function microtime_float ()
{
    list ($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}
$time_start = microtime_float ();

include ("include/functions.php");
include ("include/arrays.php");

/* Load session valiables */
session_start ();

/* User language */
$userlang = substr(trim($_SERVER["HTTP_ACCEPT_LANGUAGE"]), 0, 2);
if (!in_array ($userlang, array_keys($languages)))
    $userlang = "en";

/* Get saved variables */
$layout = UserVariable ("layout", $layouts, "normal");
$lang = UserVariable ("lang", array_keys($languages), $userlang);
$lastvisit = UserLastVisit ();

/* Set the locale for the date() function */
setlocale (LC_ALL, $languages[$lang][2]);

/* Redirects from old to new website */
if ($page = $_GET["page"])
{
    include ("include/redirect.php");

    /* Send user to the new url */
	header ("Location: http://". $_SERVER['SERVER_NAME'] ."/". $redirect[$page]);
	exit;
}

/* Check for feed request */
if ($_GET["feed"] == "rss2")
{
    include ("include/feed.php");

    /* Show feed xml and exit */
    ParseRssFeed ($lang);
    exit;
}

/* Get relative url */
$uri = $_SERVER["REDIRECT_URL"];
$uri = trim ($uri, '/');
$uri = strtolower ($uri);

/* Block some pages users are not allowed to see */
$forbidden = array ("footer", "frontpage", "header");
if (in_array ($uri, $forbidden))
    $uri = "";

/* Include needed files */
include ("include/header.php");
include ("include/footer.php");
include ("include/news.php");

/* Create webpage */
if ($uri == "")
{
    include ("include/frontpage.php");

    PrintHeader ($uri, $lang, $layout, $languages);
    PrintFrontpage ($lang, $lastvisit);
    PrintFooter ($lang);
}
else
{
    include ("include/content.php");

    $content = PrepareContent ($uri, $lang);
    PrintHeader ($uri, $lang, $layout, $languages);
    PrintContent ($content, $lang);
    PrintFooter ($lang);
}

$time_end = microtime_float ();
echo "<!-- Execution time: ". round ($time_end - $time_start, 4) ." second -->";
?>
