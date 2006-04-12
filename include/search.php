<?php
function GenerateTitle ($uri)
{
	# Load breadcrumb correction/translation array
	$file = "i18n/arrays/". $lang .".breadcrumbs.php";
	$file_en = "i18n/arrays/en.breadcrumbs.php";
	$breadcrumbs = array ("home" => "Home");
	
	if (is_file ($file))
		include ($file);
	elseif (is_file ($file_en))
		include ($file_en);
		
	$uri = trim($uri, '/');
	$crumbs = explode ("/", $uri);
	
	if ($crumbs[0])
	{
		$html = $breadcrumbs["home"] ." &#187; ";

		foreach ($crumbs as $name)
		{
			$i++;
			
			# Create breadcrumb title
			if (array_key_exists($name, $breadcrumbs))
				$title = $breadcrumbs[$name];
			else
				$title = ucfirst($name);
			
			if ($i < count($crumbs))
				$html .= $title .' &#187; ';
			else
				$html .= $title;
		}
		
		return $html;
	}
	else
	{
		return $breadcrumbs["home"];
	}
}

function RunSearch ($set, $lang)
{
	include ("search.db.php");
	
	$keywords = explode (" OR ", $set["keywords"]);
	
	foreach ($search_db as $page => $content)
	{
		$html = $content[1];
		
		if ($offset = strpos($html,$keyword))
		{
		
		$left = $offset - 100;
		$right = $offset + 100;
		
		if ($left < 0)
		{
			$left = 0;
			$right = 200;
		}
		
		if ($right > strlen ($html))
			$right = strlen ($html);
			
		$disc = substr ($html, $left, ($right-$left));
		$disc = str_replace ($keyword, "<strong>". $keyword ."</strong>", $disc);
		
		
		echo '<h3><a href="'. $page .'">'. GenerateTitle ($page) .'</a></h3>';
		echo "<p>";
		echo "...". $disc ."...";
		echo "</p>";
		}
	}
}

function PrepareSearch ($lang, $languages)
{
	# Page variabled
	$set["keywords"] = $_POST["q"];
	
	# Determ how the user searched, by using the header or the search page. We do 
	# this by checking if the search button name exists.
	if ($_POST["FromPage"])
	{
		# Search in Website
		if ($_POST["sw"] == "1")
			$set["sw"] = true;
		else
			$set["sw"] = false;
			
		# Search in API
		if ($_POST["sa"] == "1")
			$set["sa"] = true;
		else
			$set["sa"] = false;
		
		# Language
		if ($_POST["sl"] == "cur")
			$set["sl"] = true;
		else
			$set["sl"] = false;
	}
	else
	{
		# TODO: load stuff from cookie
		$set["sw"] = true;
		$set["sa"] = true;
		$set["sl"] = true;
	}
	
	return $set;
}

function PrintSearch ($set, $lang, $languages)
{
	# Website variables
	$keywords = $set["keywords"];
	
	if ($set["sw"])
		$enablewebsite = 'checked="checked"';
		
	if ($set["sa"])
		$enableapi = 'checked="checked"';
		
	if ($set["sl"])
		$enablecur = 'checked="checked"';
	else
		$enableall = 'checked="checked"';
		
	# Load translations file
	if (is_file ("i18n/arrays/en.content.php"))
		include ("i18n/arrays/en.content.php");
	else
		include ("i18n/arrays/en.content.php");
		
	# Do string checking and run the search
	if (!$enablewebsite && !$enableapi)
		$html = $bothdisabled;
		
	elseif ($set["keywords"] == "")
		$html = $nosearchword;
	
	elseif ($set["sl"] && !($html = RunSearch ($set, $lang)))
		$html = $noresultsonelang;
		
	elseif (!$set["sl"] && !($html = RunSearch ($set, $lang)))
		$html = $noresults;
	
	# Load the page
	if (is_file ("i18n/search.".$lang.".php"))
		include ("i18n/search.".$lang.".php");
	else
		include ("i18n/search.en.php");
}
?>