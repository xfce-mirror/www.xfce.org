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

include ('pages/header.php');
include (lookup_page($uri));
include ('pages/footer.php');

$timer_end = microtime_float ();
echo "<!-- Execution time: ". round ($timer_end - $timer_start, 4) ." second -->";

?>
