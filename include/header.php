<?php
  function LayoutCSS ()
  {
    /**
     * Define style css
     **/
    $normal =	'#global-page {'.
			'min-width: 740px; '.
			'max-width: 1000px; '.
			'width: 100%; '.
		'}'.
		' '.
		'* html #global-page {'.
			'width: 780px; '.
		'}';
    
    $liquid =	'#global-page {'.
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
  
  function PrintHeader ($uri, $file, $lang)
  {
  
    $custom_css = LayoutCSS ();
    
    if (!$file) /* Front page will be displayed */
      $linked_css = '<link rel="stylesheet" media="screen" href="/layout/css/front.css" type="text/css" />';
    else
      $content_bool = true;
    
    if ($file) /* Don't display on Frontpage */
	$breadcrumbs = CreateBreadcrumbs ($uri);
    
    if (is_file ("i18n/header.".$lang.".php"))
      include ("i18n/header.".$lang.".php");
    else
      include ("i18n/header.en.php");
  }
?>
