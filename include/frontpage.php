<?php

function PrintNews ($lang, $lastvisit, $max=5)
{
    if (is_file ("i18n/news/".$lang.".news.php"))
        include ("i18n/news/".$lang.".news.php");
    else
        include ("i18n/news/en.news.php");

    $html = "<ul>";
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
    
        $html .= "<li>".
                 "<span class=\"grey\">". CreateDate ($item["date"], $format, true) ."</span>".
                 "<br />".
                 "<a href=\"/about/news?id=". strtotime ($item["date"]) ."\" title=\"Posted by ". $item["author"] ."\">". $title ."</a>".
                 "</li>";

        # not more then $max items on the frontpage
        if ($i >= $max)
            break;
    }
    $html .= "</ul>";
    
    return $html;
}

function PrintBlog ($lastvisit)
{
    include ("parser.php");

    if (!$feed = CreateFeed ("http://blog.xfce.org/?feed=rss2"))
        return "developers feed temporarily unavailable.";

    $format = "%e %B %Y";
    $html = "<ul>";
    
    foreach ($feed as $item)
    {
    	  $html .= "<li><span class=\"grey\">". $item["creator"] ." @ ". CreateDate ($item["date"], $format, true) ."</span><br />";
    	  
    	  if ($lastvisit < strtotime ($item["date"]))
    	      $html .= "<strong><a href=\"". $item["link"] ."\">". $item["title"] ."</a></strong>";
    	  else
    	      $html .= "<a href=\"". $item["link"] ."\">". $item["title"] ."</a>";
    	  
    	  $html .= "</li>";
    }
    
    $html .= "</ul>";
    
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
