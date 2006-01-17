<?php
	#define ("XFCEURL", "http://www-test.xfce.org");
	define ("XFCEURL", "http://". $_SERVER["SERVER_NAME"] );

	#define ("XFCEROOT", "/var/www/www-test.xfce.org/" );
	define ("XFCEROOT", $_SERVER["DOCUMENT_ROOT"] ."/");
	
?>
