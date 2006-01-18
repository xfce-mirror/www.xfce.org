<?php

/**
 * Content functions
 **/
  function CleanupURI ($uri) {
  
    $uri = trim($uri, '/');
    $uri = strtolower ($uri);
    
    return $uri;
  }
  
  function GetContentPage ($uri, $lang) {
    
    if ($uri == "") {
      #index
      return false;
    }
    
    /**
     * Maybe recursively strip the uri and try it, so projects/mousepad/download/foo/foo/foo/foo/foo
     * will be reduced to projects/mousepad/download and /projects/mousepad/download.en.php will be returned
     **/
    
    $file = "i18n/" . $uri . "." . $lang . ".php";
    
    
    if (is_file ($file)) {
      
      return ($file);
    }
    
    
    if ($lang != "en") {
      $file_en = "i18n/" . $uri . ".en.php";
      if (is_file ($file_en)) {
      
        return ($file_en);
      }
    }
    
    return false;
  }
 
/**
 * Language functions
 **/
  function GetLanguage () {
  
  }
  
  function SetLanguage () {
  
  
  }
  
/**
 * Breadcrumbs
 **/
  function CreateBreadcrumbs ($uri)
  {
	/* &#187; */
	
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
?>
