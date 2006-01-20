<?php


function GetContent ($uri, $lang)
{
	$dir = "i18n/" . $uri;
	
	if (is_dir ($dir))
	{
		return GetContent ( $uri . "/index", $lang );
	}
	else
	{
		# $uri = projects/xfmedia/downloads = file? => get the index page
		$file = "i18n/" . $uri . "." . $lang . ".php";
		$file_en = "i18n/" . $uri . ".en.php";
		
		
		
		if (is_file ($file))
		{
			$content["file"] = $file;
		}
		elseif (is_file ($file_en))
		{
			$content["file"] = $file_en;
			$content["wronglang"] = true; # not in your language
		}
		else
		{
			# Page does not exist, return 404 page and 404 header for wget
			header("HTTP/1.0 404 Not Found");
			return GetContent ("404", $lang);
		}
		
		$uri_dir = dirname ($uri);
		
		$nav = "i18n/" . $uri_dir . "/navigation." . $lang . ".nav";
		$nav_en = "i18n/" . $uri_dir . "/navigation.en.nav";
		
		if (is_file ($nav))
		{
			$content["nav"] = $nav;
		}
		elseif (is_file ($nav_en))
		{
			$content["nav"] = $nav_en;
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
			<p><a href="http://www.2x.com/" title="2X  Software Ltd" target="_blank">Developers</a> of <a href="http://www.2x.com/terminalserver" target="_blank" title="2X Terminal Server for Linux">2X Terminal Server for Linux</a> &amp; <a href="http://www.2x.com/thinclientserver" target="_blank" title="2X Thin Client Server">2X Thin Client Server</a><br />Linux <a href="http://www.2x.com/" target="_blank" title="2X  Software Ltd">thin client OS</a>, deployment &amp; management</p>
		   ');
}

function PrintContent ($content)
{
	print ('<div id="content-right">1');
	
		if ($content["wronglang"])
		{
			print ('<div id="content-lang">2');
				print ('<p>This page is not available in your language. You can help us out by <a href="translate">translating</a> it into your language.</p>');
			print ('3</div');
		}
		
		if ($content["nav"])
		{
			print ('<div id="content-menu">4');
				print ('<h2 class="hidden">Content Navigation</h2>');
				include ($content["nav"]);
			print ('5</div>');
			
		}
			print ('<div id="content-sponsor">6');
					PrintSponsor ();
			print ('7</div>');
	
	print ('</div>'); #end content-right
	print ('<div id="content-text">');
			include ($content["file"]);
	print ('</div>'); #end content-text
}


?>
