<?php

function micro_time() {
   $temp = explode(" ", microtime());
   return bcadd($temp[0], $temp[1], 6);
}
$time_start = micro_time();

include_once ("include/header.php");
include_once ("include/footer.php");
include_once ("include/frontpage.php");
include_once ("include/content.php");

$lang = "en";

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
	
PrintHeader ($uri, $lang);
	
if ($uri == "")
{
	PrintFrontpage ($lang);
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

$time_stop = micro_time();

echo round(($time_stop - $time_start), 6);
?>
