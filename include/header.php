<?php
/**
 * Default page title
 **/
$headtitle = "Desktop Environment";

/**
 * This function creates the language bar, located
 * right under the header.
 **/
function CreateLanguageBar ($languages, $lang)
{
	$links = "";
	foreach($languages as $short => $long)
	{
		$i++;
		
		if ($short == $lang)
			$links .= '<a href="?lang='. $short .'" title="'. $long[0] .'"><strong>'. $short .'</strong></a>';
		else
			$links .= '<a href="?lang='. $short .'" title="'. $long[0] .'">'. $short .'</a>';
		
		if ($i < count ($languages))
			$links .= ' | ';
	}

	return $links;
}

/**
 * This function creates the breadcrumbs links
 **/
function CreateBreadcrumbs ($uri, $lang)
{
	global $headtitle;

	# Load breadcrumb correction/translation array
	$file = "i18n/arrays/". $lang .".breadcrumbs.php";
	$file_en = "i18n/arrays/en.breadcrumbs.php";
	$breadcrumbs = array ("home" => "Home");
	
	if (is_file ($file))
		include ($file);
	elseif (is_file ($file_en))
		include ($file_en);
	
	$crumbs = explode ("/", $uri);

	if ($crumbs[0])
	{
		# Goto frontpage
		$url = '/';
		$html = '<a href="'. $url .'" title="'. $breadcrumbs["home"] .'">'. $breadcrumbs["home"] .'</a> &#187; ';

		foreach ($crumbs as $name)
		{
			$url .= $name . '/';
			$i++;
			
			# Create breadcrumb title
			if (array_key_exists($name, $breadcrumbs))
				$title = $breadcrumbs[$name];
			else
				$title = ucfirst($name);
			
			# Build link
			if ($i > 15)
				break; # Arbitary maximum
			
			elseif ($i < count($crumbs))
				$html .= '<a href="'. $url .'" title="'. $title .'">'. $title .'</a> &#187; ';
			else
			{
				$html .= $title;
				$headtitle = $title;
			}
		}

		return $html;
	}
	else
	{
		return false;
	}
}

/**
 * This function prepares the variables used in the header.xx.php file
 * and loads this file
 **/
function PrintHeader ($uri, $lang, $layout, $languages)
{
	global $headtitle;

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
	{
		# Frontpage: show extra css file
		$linked_css = '<link rel="stylesheet" media="screen" href="/layout/css/front.css" type="text/css" />';
	} else {
		# Show content css file
		$linked_css = '<link rel="stylesheet" media="screen" href="/layout/css/content.css" type="text/css" />';
		# Show page jump for non-css readers
		$content_bool = true;
	}
	
	# Create breadcrumb links
	$breadcrumbs = CreateBreadcrumbs ($uri, $lang);
	
	#languages
	$lang_links = CreateLanguageBar ($languages, $lang);
	
	# Charset
	$charset = $languages[$lang][1];

	# Get the (translated) file
	if (is_file ("i18n/header.".$lang.".php"))
		include ("i18n/header.".$lang.".php");
	else
		include ("i18n/header.en.php");
}
?>
