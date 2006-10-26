<?php

function PrintNews ($lang, $lastvisit, $max=6)
{
    if (is_file ("i18n/news/".$lang.".news.php"))
        include ("i18n/news/".$lang.".news.php");
    else
        include ("i18n/news/en.news.php");

    $html = "<ul>\n";
    $i = 0;
    $format = "%e %B %Y";
    
    foreach ($news as $item)
    {
        $i++;
        
        # Make title bold if message is newer than the last visit
        if ($lastvisit < strtotime ($item["date"]))
            $title = "<strong>". $item["title"] ."</strong>";
        else
            $title = $item["title"];
    
        $html .= "\t\t\t\t<li>\n".
                 "\t\t\t\t\t<span class=\"grey\">". CreateDate ($item["date"], $format, true) ."</span><br />\n".
                 "\t\t\t\t\t<a href=\"/about/news?id=". strtotime ($item["date"]) ."\" title=\"Posted by ". $item["author"] ."\">". $title ."</a>\n".
                 "\t\t\t\t</li>\n";

        # not more then $max items on the frontpage
        if ($i >= $max)
            break;
    }
    $html .= "\t\t\t</ul>\n";
    
    return $html;
}

function PrintBlog ($lastvisit)
{
    include ("parser.php");

    if (!$feed = CreateFeed ("http://blog.xfce.org/?feed=rss2"))
        return "Developers feed temporarily unavailable.";

    $format = "%e %B %Y";
    $html = "<ul>\n";
    
    foreach ($feed as $item)
    {
    	  $html .= "\t\t\t\t<li>\n".
    	           "\t\t\t\t\t<span class=\"grey\">". $item["creator"] ." @ ". CreateDate ($item["date"], $format, true) ."</span><br />\n";
    	  
    	  if ($lastvisit < strtotime ($item["date"]))
    	      $html .= "\t\t\t\t\t<strong><a href=\"". $item["link"] ."\">". $item["title"] ."</a></strong>\n";
    	  else
    	      $html .= "\t\t\t\t\t<a href=\"". $item["link"] ."\">". $item["title"] ."</a>\n";
    	  
    	  $html .= "\t\t\t\t</li>\n";
    }
    
    $html .= "\t\t\t</ul>\n";
    
    return $html;
}

function PrintFrontpage ($lang, $lastvisit)
{
    $frontpage["news"] = PrintNews ($lang, $lastvisit);
    $frontpage["blog"] = PrintBlog ($lastvisit);
    
    if (is_file ("i18n/frontpage.".$lang.".php"))
        include ("i18n/frontpage.".$lang.".php");
    else
        include ("i18n/frontpage.en.php");
}

?>
