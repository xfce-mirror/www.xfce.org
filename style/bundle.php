<?php

/* this file loads all the css required for the Xfce website
 * and bundles it in a single file. The css files are split
 * to make them both readable and some files are fetched for
 * other domains too (header.css). */

$dateformat = 'D, d M Y H:i:s';
$expireoffset = 3600 * 24 * 7;
$files = array ('header.css',
                'base.css',
                'home.css',
                'news.css',
                'projects.css');

$buf = '';
$mtime = 0;
foreach ($files as $file)
  $buf .= file_get_contents ($file);
  $fmtime = filemtime ($file);
  if ($fmtime > $mtime)
    $mtime = $fmtime;

/* remove comments */
$buf = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buf);

/* compress lines */
$buf = str_replace(array (': ', ' {', ', '), array (':', '{', ','), $buf);

/* remove whitespaces */
$buf = str_replace (array ("\r\n", "\r", "\n", "\t", '  '), '', $buf);

header('Content-type: text/css');
header('Cache-Control: max-age='. $expireoffset .', public');
header('Expires: '. gmdate ($dateformat, time() + $expireoffset) .' GMT');
header('Last-Modified: '. gmdate ($dateformat, $mtime ) .' GMT');

echo $buf;

?>
