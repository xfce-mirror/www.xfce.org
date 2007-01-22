<?php

function microtime_float ()
{
    list ($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}
$time_start = microtime_float ();

include ("include/functions.php");
include ("include/arrays.php");

/* load session variables */
session_start ();

/* Try to detect the user language */
$userlang = substr(trim($_SERVER["HTTP_ACCEPT_LANGUAGE"]), 0, 2);
if (!in_array ($userlang, array_keys($languages)))
    $userlang = "en";

/* get saved variables */
$layout = UserVariable ("layout", $layouts, "normal");
$lang = UserVariable ("lang", array_keys($languages), $userlang);
$lastvisit = UserLastVisit ();

/* set the locale for the date() function */
setlocale (LC_ALL, $languages[$lang][2]);

/* redirect to download server */
if ($location = $_GET["server"])
{
	header ("Location: ". $location);
    exit;
}

/* redirects from old to new website */
if ($page = $_GET["page"])
{
    include ("include/redirect.php");

    /* send user to the new url */
    header ("Location: http://". $_SERVER['SERVER_NAME'] ."/". $redirect[$page]);
    exit;
}

/* check for feed request */
if ($_GET["feed"] == "rss2")
{
    include ("include/feed.php");

    /* show feed xml and exit */
    ParseRssFeed ($lang);
    exit;
}

/* get relative url */
$uri_a = explode('?', $_SERVER["REQUEST_URI"]);
$uri = $uri_a[0];
$uri = trim ($uri, '/');
$uri = strtolower ($uri);

/* block some pages users are not allowed to see */
$forbidden = array ("footer", "frontpage", "header");
if (in_array ($uri, $forbidden))
    $uri = "";

/* include needed files */
include ("include/header.php");
include ("include/footer.php");
include ("include/news.php");

/* create webpage */
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
