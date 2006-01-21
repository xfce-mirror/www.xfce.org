<?php
function microtime_float()
{
	list($usec, $sec) = explode(" ", microtime());
	return ((float)$usec + (float)$sec);
}
$time_start = microtime_float();

include_once ("include/news.php");

ParseFile ("xml/news.xml");

$time_end = microtime_float();
echo "Execution time: ". round($time_end - $time_start, 4) ." seconds"; 
	
?>
