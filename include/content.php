<?php

function GetContent ($uri, $lang)
{
	$dir = "i18n/" . $uri;
	
	if (is_dir ($dir))
	{
		# $uri = projects/xfmedia = dir => get the index page
		$file = "i18n/" . $uri . "/index." . $lang . ".php";
		$file_en = "i18n/" . $uri . "/index.en.php";
		
		if (is_file ($file))
		{
			$content["file"] = $file;
			$content["filelang"] = true; # In your language
		}
		elseif (is_file ($file_en))
		{
			$content["file"] = $file_en;
			$content["filelang"] = false;
		}
		else
		{
			return false;
		}
		
		$nav = "i18n/" . $uri . "/navigation." . $lang . ".nav";
		$nav_en = "i18n/" . $uri . "/navigation.en.nav";
		
		if (is_file ($nav))
		{
			$content["nav"] = $nav;
			$content["navlang"] = true;
		}
		elseif (is_file ($nav_en))
		{
			$content["nav"] = $nav_en;
			$content["navlang"] = false;
		}
		else
		{
			$content["nav"] = false;
		}
		
		return $content;
	}
	else
	{
		# $uri = projects/xfmedia/downloads = file? => get the index page
		$file = "i18n/" . $uri . "." . $lang . ".php";
		$file_en = "i18n/" . $uri . ".en.php";
		
		
		
		if (is_file ($file))
		{
			$content["file"] = $file;
			$content["filelang"] = true; # In your language
		}
		elseif (is_file ($file_en))
		{
			$content["file"] = $file_en;
			$content["filelang"] = false;
		}
		else
		{
			return false;
		}
		
		$uri_dir = dirname ($uri);
		
		$nav = "i18n/" . $uri_dir . "/navigation." . $lang . ".nav";
		$nav_en = "i18n/" . $uri_dir . "/navigation.en.nav";
		
		if (is_file ($nav))
		{
			$content["nav"] = $nav;
			$content["navlang"] = true;
		}
		elseif (is_file ($nav_en))
		{
			$content["nav"] = $nav_en;
			$content["navlang"] = false;
		}
		else
		{
			$content["nav"] = false;
		}
		
		return $content;
	}
}

function PrintSponsor () {
	
	print ('<h2 class="hidden">Sponsor</h2>
		<a href="http://www.2x.com/" target="_blank"><img src="/layout/friends/2x_large.jpg" width="160" height="50" alt="2X" border="0" /></a>
		<p><a href="http://www.2x.com/" title="2X  Software Ltd" target="_blank">Developers</a> of <a href="http://www.2x.com/terminalserver" target="_blank" title="2X Terminal Server for Linux">2X Terminal Server for Linux</a> & <a href="http://www.2x.com/thinclientserver" target="_blank" title="2X Thin Client Server">2X Thin Client Server</a><br>Linux <a href="http://www.2x.com/" target="_blank" title="2X  Software Ltd">thin client OS</a>, deployment & management</p>
		');
}

function PrintContent ($content)
{
	print ('<div id="content-right">');
	if ($content["nav"])
	{
		print ('<div id="content-menu">
				<h2 class="hidden">Content Navigation</h2>');
		include ($content["nav"]);
		print ('</div>');
		
	}
		print ('<div id="content-sponsor">');
				PrintSponsor ();
		print ('</div>');
	
	print ('</div>
		<div id="content-text">');
			include ($content["file"]);
	print ('</div>');
}


?>
