<?php

function PrepareContent ($uri, $lang)
{
	$dir = "i18n/" . $uri;

	if (is_dir ($dir))
	{
		return PrepareContent ( $uri . "/index", $lang );
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
			return PrepareContent ("404", $lang);
		}

		$uri_dir = dirname ($uri);

		$nav = "i18n/" . $uri_dir . "/" . $lang . ".nav.php";
		$nav_en = "i18n/" . $uri_dir . "/en.nav.php";

		if (is_file ($nav))
			$content["nav"] = $nav;

		elseif (is_file ($nav_en))
			$content["nav"] = $nav_en;

		else
			$content["nav"] = false;

		return $content;
	}
}

function PrintSponsor () {

	print ('<h2 class="hidden">Sponsor</h2>');
	print ('<a href="http://www.2x.com/" target="_blank"><img src="/layout/friends/2x_large.jpg" width="160" height="50" alt="2X" border="0" /></a>');
	print ('<p>Check out the 2X range:<br />'.
				'&#8226; <a href="http://www.2x.com/thinclientserver/" target="_blank">2X ThinClientServer</a><br />'.
				'&#8226; <a href="http://www.2x.com/loadbalancer/" target="_blank">2X LoadBalancer</a><br />'.
				'&#8226; <a href="http://www.2x.com/applicationserver/" target="_blank">2X ApplicationServer</a>'.
			'</p>');
}

function PrintContent ($content)
{
	if (is_file ("i18n/arrays/". $lang .".content.php"))
		include ("i18n/arrays/". $lang .".content.php");
	else
		include ("i18n/arrays/en.content.php");

	print ('<div id="content-right">');

		if ($content["wronglang"])
		{
			print ('<h2 class="hidden">Warning</h2>');
			print ('<div id="content-lang">');
				print ('<p><img src="/layout/images/spacer.gif" alt="" width="0" height="0" align="left" />'. $notinlang .'</p>');
			print ('</div>');
		}

		if ($content["nav"])
		{
			print ('<div id="content-menu">');
				print ('<h2 class="hidden">Content Navigation</h2>');
				include ($content["nav"]);
			print ('</div>');

		}
			print ('<div id="content-sponsor">');
					PrintSponsor ();
			print ('</div>');

	print ('</div>'); #end content-right
	print ('<div id="content-text">');
			include ($content["file"]);
	print ('</div>'); #end content-text

        if ($top) # button to jump to top of page
        {
        	print ('<a href="#"><img src="/layout/images/go-top.png" alt="Top" width="16" height="16" border="0" align="right" /></a>');
        }
}


?>
