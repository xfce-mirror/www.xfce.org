<?php

error_reporting(E_ALL | E_STRICT);

function microtime_float ()
{
  list ($usec, $sec) = explode(" ", microtime());
  return ((float)$usec + (float)$sec);
}

$timer_start = microtime_float ();

include ('lib/core.php');

$uri_a = explode('?', $_SERVER['REQUEST_URI']);
$uri = trim (strtolower ($uri_a[0]), '/');

/* lookup to page from the uri */
$content_file = lookup_page ($uri);

/* load the page content in a buffer (we don't need it yet,
 * but we do need some variables for the header) */
ob_start ();
include ($content_file);
$contents = ob_get_clean ();

/* load the page header */
include ('pages/header.php');

/* load the category navigation if there is one */
$navigation_file = dirname ($content_file) . '/nav.php';
if (is_file ($navigation_file))
        include ($navigation_file);

/* write the contents */
echo $contents;

/* end with the footer */
include ('pages/footer.php');

$timer_end = microtime_float ();
echo "Execution time: ". round ($timer_end - $timer_start, 4) ." second";

?>
