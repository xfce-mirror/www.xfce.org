<?php
include_once ("include/header.php");
include_once ("include/footer.php");
include_once ("include/frontpage.php");

$lang = "en";

$uri = $_SERVER["REDIRECT_URL"];
	$uri = trim($uri, '/');
	$uri = strtolower ($uri);
	
	
PrintHeader ($uri, $file, $lang);
	
if ($uri == "")
{
	PrintFrontpage ();
}
else
{
	$file = "i18n/" . $uri . "." . $lang . ".php";
	$file_en = "i18n/" . $uri . ".en.php";
	
	if (is_file ($file))
	{
		include ($file);
	}
	else if (is_file ($file_en))
	{
		include ($file_en);
	}
	else
	{
		/* Recursive stripping:
			- explode uri
			- start building the uri again while trying if the file exists
			  - translation page and english one.
			- if no file is found anymore: use last working uri.
			
			so projects/xfmedia/downloads/foo/foo/foo/foo/foo will be striped
			to projects/xfmedia/downloads.
			
			Also names like projects/xfmedia/downloads.html will be projects/xfmedia
		*/
		print ("<h1>404, page not found</h1>");
	}
}

PrintFooter ($lang);
?>
