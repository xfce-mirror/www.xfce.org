<?php

$static_media = "http://cdn.xfce.org";

/*error_reporting(E_ALL | E_STRICT);*/
date_default_timezone_set ('UTC');

function microtime_float ()
{
        list ($usec, $sec) = explode(" ", microtime());
        return ((float)$usec + (float)$sec);
}

$timer_start = microtime_float ();

include ('lib/core.php');

$uri_a = explode('?', $_SERVER['REQUEST_URI']);
$uri = trim (strtolower ($uri_a[0]), '/');

/* compatibility with old website */
if (isset ($_GET['feed']) && $_GET['feed'] == 'rss2')
{
  header ('HTTP/1.1 301 Moved Permanently');
  header ('Location: http://www.xfce.org/feed');
  exit;
}

/* lookup to page from the uri */
$content_file = lookup_page ($uri);

/* news feed handling */
if ($uri == 'feed')
{
  include ($content_file);
  exit;
}

/* load the page content in a buffer (we don't need it yet,
 * but we do need some variables for the header) */
ob_start ();
include ($content_file);
$contents = ob_get_clean ();

/* load the category navigation if there is one */
$navigation_file = dirname ($content_file) . '/nav.php';
if (is_file ($navigation_file))
        $toc['filename'] = $navigation_file;

/* unique class name for the page content */
$page_class = str_replace (array ('pages/', '/'), array ('', '_'),
                           basename ($content_file, '.php'));

/* load the page header */
include ('pages/header.php');

/* maybe we need to do something with the content first */
if (strpos ($uri, 'download/changelogs/') == 0)
{
        /* replace #???? with bug tracker links */
        $bugurl = '<a href="https://bugzilla.xfce.org/show_bug.cgi?id=$1">#$1</a>';
        $contents = preg_replace ('/#(\d+)/', $bugurl, $contents);
}

/* write the contents */
echo $contents;

/* end with the footer */
$footer['mtime'] = date ('Y/m/d', filemtime ($content_file));
include ('pages/footer.php');

$timer_end = microtime_float ();
echo "<!-- Execution time: ". round ($timer_end - $timer_start, 4) ." second -->";

?>
