<?php
/* $Id$ */
/* -
 * Copyright (c) 2006-2007 Nick Schermer <nick@xfce.org>
 *
 * This php code is free software; you can redistribute it and/or modify
 * it under the terms of the GNU Library General Public License as published
 * by the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This php code is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Library General Public License for more details.
 *
 * You should have received a copy of the GNU Library General Public License
 * along with this php code; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307, USA.
 */



/**
 * This function parses the news feed
 **/
function ParseRssFeed ($lang, $max=15)
{
    /* load the english translation */
    include ("i18n/news/en.news.php");
    
    /* load the translated news items, if needed */
    if ($lang != "en" && is_file ("i18n/news/".$lang.".news.php"))
        include ("i18n/news/".$lang.".news.php");
    else
        $news_translated = array ();

    /* feed translations */
    if (is_file ("i18n/arrays/".$lang.".feed.php"))
        include ("i18n/arrays/".$lang.".feed.php");
    else
        include ("i18n/arrays/en.feed.php");
        
    /* the default rss date/time format */
    $format = "D, d M Y H:i:s \G\M\T";

    /* set header type */
    header ('Content-type: application/xml; charset="utf-8"', true);

    /* start creating the xml content */
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>".
         "<rss xmlns:content=\"http://purl.org/rss/1.0/modules/content/\" ".
         "xmlns:wfw=\"http://wellformedweb.org/CommentAPI/\" ".
         "xmlns:dc=\"http://purl.org/dc/elements/1.1/\" ".
         "version=\"2.0\">".
         "<channel>".
           "<title>$title</title>".
           "<description>$discription</description>".
           "<link>http://www.xfce.org/about/news</link>".
           "<copyright>Olivier Fourdan 1996 - ". date ("Y") ."</copyright>".
           "<language>". $lang ."</language>".
           "<generator>Personal Feed Script</generator>";

    /* parse the first 15 news items */
    $i = 0;
    foreach ($news as $item)
    {
    	/* check if this news item (id) is translated */
        if (array_key_exists ($item["id"], $news_translated))
        {
            $title = $news_translated[$item["id"]]["title"];
            $content = $news_translated[$item["id"]]["content"];
        }
        else
        {
            $title = $item["title"];
    	    $content = $item["content"];
        }
    	
        echo "<item>".
               "<title>". $title ."</title>".
               "<description>". ParseBBCode ($content, true) ."</description>".
               "<link>http://www.xfce.org/about/news?id=". $item["id"] ."</link>".
               "<dc:creator>". $item["author"] ."</dc:creator>".
               "<pubDate>". CreateDate ($item["date"], $format) ."</pubDate>".
               "<category>Xfce News</category>".
               "<guid isPermaLink=\"false\">http://www.xfce.org/about/news?id=". $item["id"] ."</guid>".
             "</item>";

        $i++;
        
        if ($i >= $max)
            break;
    }

    /* close */
    echo "</channel>".
         "</rss>";
}
?>
