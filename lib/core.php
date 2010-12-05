<?php

include ('streams.php');
include ('gettext.php');
include ('locales.php');

/* load session variables */
session_start ();

/* shared translation reader, loaded at buttom of this file */
$gettext_reader = null;
$lang = null;

/* return translated string */
function R_($text)
{
	global $gettext_reader, $lang;
	if ($gettext_reader)
		return $gettext_reader->translate($text);
	elseif ($lang == 'foo')
		return '###';
	else
		return $text;
}

/* print translated string */
function E_($text)
{
	echo R_($text);
}

/* lookup the coresponding page for an uri */
function lookup_page($uri)
{
	$root = 'pages/';

	/* don't allow ../nav uris */
	if (basename ($uri) == 'nav')
		$uri = 'foo';

	if (empty ($uri))
		return $root.'frontpage.php';

	if (is_dir ($root.$uri))
		return lookup_page ($uri.'/index');

	$file = $root.$uri.'.php';
	if (is_file ($file))
		return $file;

	header ('HTTP/1.0 404 Not Found');
	return $root.'404.php';
}

/* lookup a key from the user in this order: get value, session value or cookie */
function lookup_key ($key, $valid_values, $default = null)
{
	/* try to get value from url */
	if (isset ($_GET[$key]))
	{
		$value = $_GET[$key];
		if (in_array ($value, $valid_values))
		{
			/* store 1 year */
			$expire = time() + (60*60*24*365);
			setcookie ($key, $value, $expire, "/");

			/* store in session variable */
			$_SESSION[$key] = $value;

			return $value;
		}
	}

	/* try to read from session */
	if (isset ($_SESSION[$key]))
	{
		$value = $_SESSION[$key];
		if (in_array ($value, $valid_values))
			return $value;
	}

	/* try cookie */
	if (isset ($_COOKIE[$key]))
	{
		$value = $_COOKIE[$key];
		if (in_array ($value, $valid_values))
		{
			/* store in session variable */
			$_SESSION[$key] = $value;

			return $value;
		}
	}

	/* return default value */
	return $default;
}

function lookup_user_language ($valid_values, $default = 'en')
{
	if (!isset($_SERVER['HTTP_ACCEPT_LANGUAGE']))
		return $default;

	$accept = strtolower ($_SERVER['HTTP_ACCEPT_LANGUAGE']);
	if (empty ($accept))
		return $default;

	foreach (explode (',', $accept) as $lang)
	{
		/* check if we have a match for the full language, ie pt-br */
		$code = explode (';', $lang, 2); /* explode code and quantifier */
		$primarytag = str_replace ('-', '_', $code[0]);
		if (in_array (trim ($primarytag), $valid_values))
			return $primarytag;

		/* check if we have a match for the sub language, ie pt */
		$subtag = explode ('-', $code[0]);
		if (in_array (trim ($subtag[0]), $valid_values))
			return $subtag[0];
	}

	return $default;
}

function mungify_mail ($email)
{
	return '<span class="mungify">'. strrev ($email) .'</span>';
}

/* if no language if found, lookup the accepted browser languages */
$lang = lookup_key ('lang', $language_codes);
if (empty ($lang))
{
	$lang = lookup_user_language ($language_codes);

	/* store result in session, so we don't check this all the time */
	$_SESSION['lang'] = $lang;
}

/* load the gettext translation */
if (!empty($lang))
{
	$path = './lib/locale/'. $lang .'/LC_MESSAGES/www.mo';
	if (is_file ($path))
	{
		$file_reader = new FileReader($path);
		$gettext_reader = new gettext_reader($file_reader);
	}
}

?>
