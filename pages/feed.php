<?php

/* if you want to update news: update the news-array.php file */
include ('pages/news-array.php');

function fixup ($str)
{
  $search = array ('<a href="/');
  $replace = array ('<a href="https://xfce.org/');

  return str_replace ($search, $replace, $str);
}

$item_limit = 10;

/* the default rss date/time format */
$format = 'D, d M Y H:i:s \G\M\T';

header ('Content-type: application/xml; charset="utf-8"', true);

/* start creating the xml content */
echo '<?xml version="1.0" encoding="UTF-8"?>'.
     '<rss xmlns:content="http://purl.org/rss/1.0/modules/content/" '.
     'xmlns:wfw="http://wellformedweb.org/CommentAPI/" '.
     'xmlns:dc="http://purl.org/dc/elements/1.1/" '.
     'xmlns:atom="http://www.w3.org/2005/Atom" '.
     'version="2.0">'.
     '<channel>'.
       '<title>'.R_('Xfce News').'</title>'.
       '<description>'.R_('Xfce release announcements').'</description>'.
       '<link>https://xfce.org/about/news</link>'.
       '<copyright>Olivier Fourdan 1996 - '. date ('Y') .'</copyright>'.
       '<language>'.$lang.'</language>'.
       '<generator>Xfce feed spawner</generator>'.
       '<atom:link href="https://xfce.org/feed?lang='.$lang.'" rel="self" type="application/rss+xml" />';

foreach ($news as $item)
{
    $stamp = strtotime ($item['date']);
    
    if (isset ($item['version']) && !empty ($item['version']))
      $title = sprintf (R_('Xfce %s released'), $item['version']);
    else
      $title = $item['title'];

    echo '<item>'.
           '<title>'.$item['title'].'</title>'.
           '<description><![CDATA['. fixup ($item['paragraphs'][0]) .']]></description>'.
           '<content:encoded><![CDATA[';

    foreach ($item['paragraphs'] as $p)
        if (is_array( $p ) )
            foreach ( $p as $curp ) { echo '<p>'.fixup ($curp).'</p>'; }
        else
            echo '<p>'.fixup ($p).'</p>';

    echo   ']]></content:encoded>'.
           '<link>https://xfce.org/about/news/?post='.$stamp.'</link>'.
           '<dc:creator>'. $item['author'] .'</dc:creator>'.
           '<pubDate>'. date ($format, $stamp) .'</pubDate>'.
           '<category>Xfce News</category>'.
           '<guid isPermaLink="false">https://xfce.org/about/news/?post='.$stamp.'</guid>'.
         '</item>';

    if ($item_limit-- < 0)
      break;
}

echo '</channel></rss>';
