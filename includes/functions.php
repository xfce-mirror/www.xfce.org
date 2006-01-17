<?php

	function CleanupURI ($uri) {
	
		$uri = trim($uri, '/');
		
		return $uri;
	}
	
	function GetContentPage ($uri, $lang) {
		
		if ($uri == "") {
			#index
			return (XFCEROOT ."includes/frontpage.php");
		}
		
				
		$file = XFCEROOT . "i18n/" . $uri . "." . $lang . ".php";
		if (is_file ($file )) {
			
			return ($file);
		} else {
			/**
			 * Maybe recursively strip the uri and try it, so projects/mousepad/download/foo/foo/foo/foo/foo
			 * will be reduced to projects/mousepad/download and /projects/mousepad/download.en.php will be returned
			 **/
		}
	}
?>
