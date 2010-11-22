<?php

error_reporting(E_ALL | E_STRICT);

include ('lib/core.php');

$uri_a = explode('?', $_SERVER['REQUEST_URI']);
$uri = trim (strtolower ($uri_a[0]), '/');

include ('pages/header.php');
include (lookup_page($uri));
include ('pages/footer.php');

?>
