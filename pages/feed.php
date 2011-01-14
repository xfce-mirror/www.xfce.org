<?php

include ('pages/news-array.php');

function escape_content($str)
{
  $search = array ('<a href="/','<', '>', '"');
  $replace = array ('<a href="http://www.xfce.org/', '&lt;', '&gt;','&quot;');

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
     'version="2.0">'.
     '<channel>'.
       '<title>'.R_('Xfce News').'</title>'.
       '<description>'.R_('Xfce release announcements').'</description>'.
       '<link>http://www.xfce.org/about/news</link>'.
       '<copyright>Olivier Fourdan 1996 - '. date ('Y') .'</copyright>'.
       '<language>". $lang ."</language>'.
       '<generator>Xfce feed spawner</generator>';

foreach ($news as $item)
{
    $stamp = strtotime ($item['date']);

    echo '<item>'.
           '<title>'.$item['title'].'</title>'.
           '<description>'. escape_content ($item['content'][0]) .'</description>'.
           '<content:encoded><![CDATA[';

    foreach ($item['content'] as $p)
            echo '<p>'.$p.'</p>';

    echo   ']]></content:encoded>'.
           '<link>http://www.xfce.org/about/news/?id='.$stamp.'</link>'.
           '<dc:creator>'. $item['author'] .'</dc:creator>'.
           '<pubDate>'. date ($format, $stamp) .'</pubDate>'.
           '<category>Xfce News</category>'.
           '<guid isPermaLink="false">http://www.xfce.org/about/news/?id='.$stamp.'</guid>'.
         '</item>';

    if ($item_limit-- < 0)
      break;
}

echo '</channel></rss>';
