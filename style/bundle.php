<?php

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

/* try to load the cached minified css */
$have_apc = false;
if (function_exists ('apc_fetch'))
  {
    $buf = @apc_fetch ('wxo410_css');
    if ($buf != false)
      {
        $mtime = @apc_fetch ('wxo410_css_mtime');
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
$files = array ('header.css', 'base.css', 'frontpage.css', 'news.css');
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

/* output */
write_header ($mtime);
echo $buf;

/* store minified data content */
if ($have_apc)
  {
    $ttl = 3600; /* 1 hour */

    @apc_store ('wxo410_css', $buf, $ttl);
    @apc_store ('wxo410_css_mtime', $mtime, $ttl);
  }

?>
