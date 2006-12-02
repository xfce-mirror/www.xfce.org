<?php

function CreateDate ($date, $format, $locale=false)
{
    if (($unix = strtotime ($date)) === false)
        return $date;

    if ($locale)
        return strftime ($format, $unix);
    else
        return date ($format, $unix);
}

function UserVariable ($name, $values, $default)
{
	$get = strtolower ($_GET[$name]);

	$expire = time()+(60*60*24*365);
	if (in_array ($get, $values))
	{
		setcookie ($name, $get, $expire, "/");
		$_SESSION[$name] = $get;
		return $get;
	}

	# Session value
	if (in_array ($_SESSION[$name], $values))
		return $_SESSION[$name];

	# Search for cookie
	$cookie = strtolower ($_COOKIE[$name]);

	if (in_array ($cookie, $values))
	{
		$_SESSION[$name] = $cookie;
		return $cookie;
	}

	# Default value
	$_SESSION[$name] = $default;
	return $default;
}

function UserLastVisit ()
{
	if (!$_SESSION["lastvisit"])
	{
		$cookie = $_COOKIE["lastvisit"];
		$now = date ("U");
		$expire = time()+(60*60*24*365);

		if ($cookie)
			# Old user, retrieve last visit (unix)time.
			$_SESSION["lastvisit"] = $cookie;
		else
			# New user, no cookie, so last visit is current (unix)time.
			$_SESSION["lastvisit"] = $now;

		# Set new cookie with current time, for the next time he/she visits
		setcookie ("lastvisit", $now, $expire, "/");
	}

	return $_SESSION["lastvisit"];
}

function ParseBBCode ($string, $feed=false)
{
	# new lines
	$string = str_replace("[br]", "<br />", $string);

	# stock bb code
	$string = preg_replace("#\[b\](.*?)\[/b\]#si", "<b>\\1</b>", $string);
	$string = preg_replace("#\[i\](.*?)\[/i\]#si", "<i>\\1</i>", $string);
	//$string = preg_replace("#\[u\](.*?)\[/u\]#si", "<u>\\1</u>", $string); // onderstreepte tekst
	//$string = preg_replace("#\[s\](.*?)\[/s\]#si", "<s>\\1</s>", $string);
	//$string = preg_replace("#\[sub\](.*?)\[/sub\]#si", "<sub>\\1</sub>", $string);
	//$string = preg_replace("#\[sup\](.*?)\[/sup\]#si", "<sup>\\1</sup>", $string);
	//$string = preg_replace("#\[center\](.*?)\[/center\]#si", "<center>\\1</center>", $string);

	# user defines links
	$string = eregi_replace("\\[link=(/)?([^\\[]*)\\][[:space:]]*([^\\[]*)[[:space:]]*\\[/link\\]","<a href=\"/\\2\">\\3</a>", $string);
	//$string = eregi_replace("\[url\][[:space:]]*(http://)?([^\\[]*)[[:space:]]*\[/url\]","<a href=\"http://\\2\" target=\"_blank\">http://\\2</a>", $string);
	$string = eregi_replace("\\[url=(http://)?([^\\[]*)\\][[:space:]]*([^\\[]*)[[:space:]]*\\[/url\\]","<a href=\"http://\\2\" target=\"_blank\">\\3</a>", $string);
	//$string = preg_replace("#(\[email\])(.*)(\[\/email\])#i","<a href=\"mailto:\\2\">\\2</a>", $string);

	# automatic create links and email
	$string = preg_replace("#(^|[ \n\r\t])www.([a-z\-0-9]+).([a-z]{2,4})($|[ \n\r\t])#i", "\\1<a href=\"http://www.\\2.\\3\" target=\"_blank\">www.\\2.\\3</a>\\4", $string);
	$string = preg_replace("#(^|[ \n\r\t])(((ftp://)|(http://)|(https://))([a-z0-9\-\.,\?!%\*_\#:;~\\&$@\/=\+]+))#i", "\\1<a href=\"\\2\" target=\"_blank\">\\2</a>", $string);
	$string = preg_replace("#(^|[ \n\r\t])([a-z0-9\-_.]+?)@([\w\-]+\.([\w\-\.]+\.)?[\w]+)#i", "\\1<a href='mailto:\\2@\\3'>\\2@\\3</a>", $string);

	# font styles
    //$string = preg_replace ("#\[color=(\#[0-9A-F]{6}|[a-z\-]+)\](.*?)\[/color\]#si", "<font color=\"\\1\">\\2</font>", $string);
    //$string = preg_replace ("#\[font=(.*)\](.*)\[/font\]#si", "<font face=\"\\1\">\\2</font>", $string);
    //$string = preg_replace ("#\[size=(.*)\](.*)\[/size\]#si", "<font size=\"\\1\">\\2</font>", $string);

    # lists
    //$string = preg_replace("#\[list\](.*?)\[/list\]#si", "<ul>\\1</ul>", $string);
    //$string = preg_replace("#\[list=1\](.*?)\[/list\]#si", "<ol type=\"1\">\\1</ol>", $string);
    //$string = preg_replace("#\[list=a\](.*?)\[/list\]#si", "<ol type=\"a\">\\1</ol>", $string);
    //$string = str_replace("[*]", "<li>", $string);

    if ($feed)
    {
    	# escapage the html charaters in feeds
    	$character = array ("<a href=\"/","<", ">", "\"");
    	$encoded   = array ("<a href=\"http://www.xfce.org/", "&lt;", "&gt;","&quot;");
        $string = str_replace($character, $encoded, $string);
    }

	return $string;
}
?>
