<?php

function PrintNews ($lang, $lastvisit)
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
                 "<a href=\"/about/news\" title=\"". $lastvisit ." and ". strtotime ($item["date"]) ."\">". $title ."</a>".
                 "</li>";
    
    /* Break @ 5 items */
    if ($i >= 5)
        break;
    }
    $html .= "</ul>";
    
    return $html;
}

function PrintBlog ()
{



}

function PrintFrontpage ($lang, $lastvisit)
{
    $frontpage["news"] = PrintNews ($lang, $lastvisit);
    $frontpage["blog"] = PrintBlog ();
    
    if (is_file ("i18n/frontpage.".$lang.".php"))
        include ("i18n/frontpage.".$lang.".php");
    else
        include ("i18n/frontpage.en.php");
}

?>
