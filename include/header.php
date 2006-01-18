<?php
function LayoutCSS ()
{
	/**
	* Define style css
	**/
	$normal ='#global-page {'.
			'min-width: 740px; '.
			'max-width: 1000px; '.
			'width: 100%; '.
		'}'.
		' '.
		'* html #global-page {'.
			'width: 780px; '.
		'}';

	$liquid ='#global-page {'.
			'width: 100%; '.
		'}';
    
	/**
	* Is there a post value?
	**/
	$get = strtolower ($_GET["style"]);
	$expire = time()+(60*60*24*365);

	if ($get == "liquid")
	{
		setcookie ("layout", "liquid", $expire);
		return $liquid;
	}

	if ($get == "normal")
	{
		setcookie ("layout", "normal", $expire);
		return $normal;
	}

	/**
	* Search for cookie
	**/
	$cookie = strtolower ($_COOKIE["layout"]);

	if ($cookie == "liquid")
		return $liquid;

	if ($cookie == "normal")
		return $normal;

	/**
	* Default value
	**/
	return $normal;

}

function CreateBreadcrumbs ($uri)
{
	$crumbs = explode ("/", $uri);

	if ($crumbs[0])
	{
		#goto frontpage
		$url = '/';
		$breadcrumbs = '<a href="'. $url .'" title="Home">Home</a> &#187; ';

		for ($i=0; $i < (count($crumbs)-1); $i++)
		{
			$url .= $crumbs[$i] . '/';
			$breadcrumbs .= '<a href="'. $url .'" title="'. ucfirst($crumbs[$i]) .'">'. ucfirst($crumbs[$i]) .'</a> &#187; ';
		}

		# Add last item
		$url .= $crumbs[count($crumbs)-1] . '/';
		$breadcrumbs .= ucfirst($crumbs[count($crumbs)-1]);

		return $breadcrumbs;
	}
	else
	{
		return false;
	}
}

function PrintHeader ($uri, $lang)
{

	$custom_css = LayoutCSS ();

	if ($uri == "") /* Front page will be displayed */
		$linked_css = '<link rel="stylesheet" media="screen" href="/layout/css/front.css" type="text/css" />';
	else
		$content_bool = true;
	
	$breadcrumbs = CreateBreadcrumbs ($uri);

	if (is_file ("i18n/header.".$lang.".php"))
		include ("i18n/header.".$lang.".php");
	else
		include ("i18n/header.en.php");
}
?>
