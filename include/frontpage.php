<?php

function CreateLanguageBar ($languages, $lang)
{
	$links = "";
	foreach($languages as $short => $long)
	{
		$i++;
		
		if ($short == $lang)
			$links .= '<a href="?lang='. $short .'" title="'. $long .'"><strong>'. $short .'</strong></a>';
		else
			$links .= '<a href="?lang='. $short .'" title="'. $long .'">'. $short .'</a>';
		
		if ($i < count ($languages))
			$links .= ' | ';
	}

	return $links;
}

function PrintFrontpage ($lang, $languages)
{
	$lang_links = CreateLanguageBar ($languages, $lang);
	
	if (is_file ("i18n/frontpage.".$lang.".php"))
		include ("i18n/frontpage.".$lang.".php");
	else
		include ("i18n/frontpage.en.php");
}

?>
