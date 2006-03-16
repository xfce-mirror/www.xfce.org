<?php

function PrintFrontpage ($lang)
{
	$types = array ('xfce', 'projects', 'blog');
	
	foreach ($types as $item)
	{
		$file    = "i18n/auto/".$lang.".frontpage.". $item .".php";
		$file    = "i18n/auto/en.frontpage.". $item .".php";
		
		if (is_file ($file))
			$frontpage[$item] = $file;
		elseif (is_file ($file_en))
			$frontpage[$item] = $file_en;
		else
			$frontpage[$item] = false;
	
	}	
	
	if (is_file ("i18n/frontpage.".$lang.".php"))
		include ("i18n/frontpage.".$lang.".php");
	else
		include ("i18n/frontpage.en.php");
}

?>
