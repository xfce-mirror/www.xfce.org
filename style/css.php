<?php

/* change this prefix when you want to make sure cache is cleared */
$apc_cache_prefix = '2017-06-20';

$site = urlencode ($_GET['site']);

/* this file loads all the css required for the Xfce website
 * and bundles it in a single file. The css files are split
 * to make them both readable and some files are fetched for
 * other domains too (header.css). APC is used to cache the
 * generated content to speed things up. */

function write_header ($mtime)
{
  $dateformat = 'D, d M Y H:i:s';
  $expireoffset = 3600 * 24 * 7;

  header ('Content-type: text/css');
  header ('Cache-Control: max-age='. $expireoffset .', public');
  header ('Expires: '. gmdate ($dateformat, time() + $expireoffset) .' GMT');
  header ('Last-Modified: '. gmdate ($dateformat, $mtime ) .' GMT');
}

function base64data ($matches)
{
  $file = $matches[1] .'.'. $matches[2];

  $buf = file_get_contents ($file);
  if ($buf != false)
    {
      return 'url(\'data:image/'.
                  $matches[2].';base64,'.
                  base64_encode ($buf).'\')';
    }

  return $matches[0];
}

/* try to load the cached minified css */
$have_apc = false;
if (function_exists ('apc_fetch'))
  {
    $buf = @apc_fetch ($apc_cache_prefix.$site.'_css');
    if ($buf != false)
      {
        $mtime = @apc_fetch ($apc_cache_prefix.$site.'_css_mtime');
        write_header ($mtime);
        echo $buf;

        exit;
      }

    $have_apc = true;
  }

/* init */
$buf = '';
$mtime = 0;

/* load contents */
$files = array ('base_header.css', 'base.css');
if ($site && file_exists ('site_'. urlencode ($site).'.css')) {
	$files[] = 'site_'. urlencode ($site).'.css';
}
$files[] = 'base_mobile.css';
if ($site && file_exists ('site_'. urlencode ($site).'_mobile.css')) {
	$files[] = 'site_'. urlencode ($site).'_mobile.css';
}
foreach ($files as $file)
  {
    $buf .= file_get_contents ($file);

    $fmtime = filemtime ($file);
    if ($fmtime > $mtime)
      $mtime = $fmtime;
  }

/* minify the css */
$buf = preg_replace ('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buf); /* strip comments */
$buf = str_replace (array (': ', ' {', ', '), array (':', '{', ','), $buf); /* compress code */
$buf = str_replace (array ("\r\n", "\r", "\n", "\t", '  '), '', $buf); /* strip lines and spaces */

/* embed images in css */
$buf = preg_replace_callback ('!url\(\'([a-z/-]*?).(png|gif|jpg)\'\)!', 'base64data', $buf);

/* output */
write_header ($mtime);
echo $buf;

/* store minified data content */
if ($have_apc)
  {
    $ttl = 3600; /* 1 hour */

    @apc_store ($apc_cache_prefix.$site.'_css', $buf, $ttl);
    @apc_store ($apc_cache_prefix.$site.'_css_mtime', $mtime, $ttl);
  }

?>
