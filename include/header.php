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

function CreateBreadcrumbs ($uri)
{
	$crumbs = explode ("/", $uri);

	if ($crumbs[0])
	{
		# Goto frontpage
		$url = '/';
		$breadcrumbs = '<a href="'. $url .'" title="Home">Home</a> &#187; ';

		# Add items with links
		for ($i=0; $i < (count($crumbs)-1); $i++)
		{
			$url .= $crumbs[$i] . '/';
			$breadcrumbs .= '<a href="'. $url .'" title="'. ucfirst($crumbs[$i]) .'">'. ucfirst($crumbs[$i]) .'</a> &#187; ';
		}

		# Add last item, without a link
		$url .= $crumbs[count($crumbs)-1] . '/';
		$breadcrumbs .= ucfirst($crumbs[count($crumbs)-1]);

		return $breadcrumbs;
	}
	else
	{
		return false;
	}
}

function PrintHeader ($uri, $lang, $layout, $languages)
{
	# Define style css
	if ($layout == "liquid")
	{
		$layout_css =	'#global-page {'.
					'width: 100%; '.
				'}';
	} else {
		
			
		$layout_css =	'#global-page {'.
					'min-width: 740px; '.
					'max-width: 1000px; '.
					'width: 100%; '.
				'}'.
				' '.
				'* html #global-page {'.
					'width: 780px; '.
				'}';
	}

	if ($uri == "") 
		# Frontpage: show extra css file
		$linked_css = '<link rel="stylesheet" media="screen" href="/layout/css/front.css" type="text/css" />';
	else
		# No frontpage, show page jump for non-css readers
		$content_bool = true;
	
	# Create breadcrumb links
	$breadcrumbs = CreateBreadcrumbs ($uri);
	
	#languages
	$lang_links = CreateLanguageBar ($languages, $lang);

	# Get the (translated) file
	if (is_file ("i18n/header.".$lang.".php"))
		include ("i18n/header.".$lang.".php");
	else
		include ("i18n/header.en.php");
}
?>
