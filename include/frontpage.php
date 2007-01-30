<?php
/* $Id$ */
/* -
 * Copyright (c) 2006-2007 Nick Schermer <nick@xfce.org>
 * Copyright (c) 2006      Auke Kok <sofar@foo-projects.org>
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

function PrintNews ($lang, $lastvisit, $max=6)
{
  /* load english news file */
  include ("i18n/news/en.news.php");

  /* load the translation, if needed */
  if ($lang != "en" && is_file ("i18n/news/".$lang.".news.php"))
    include ("i18n/news/".$lang.".news.php");
  else
    $news_translated = array ();

  $html = "<ul>";
  $i = 0;

  foreach ($news as $item)
    {
      $i++;

      /* check if this news item (id) is translated */
      if (array_key_exists ($item["id"], $news_translated))
        $title = $news_translated[$item["id"]]["title"];
      else
        $title = $item["title"];

      /* Make title bold if message is newer than the last visit */
      if ($lastvisit < strtotime ($item["date"]))
        $title = "<strong>". $title ."</strong>";

      /* print it */
      $html .= "<li>".
               "<span class=\"grey\">". CreateDate ($item["date"], $date_format, true) ."</span><br />".
               "<a href=\"/about/news?id=". $item["id"] ."\" title=\"". $posted_by ." ". $item["author"] ."\">". $title ."</a>".
               "</li>";

      /* not more then $max items on the frontpage */
      if ($i >= $max)
        break;
    }

  $html .= "</ul>";

  return $html;
}

function PrintBlog ($lastvisit)
{
  include ("parser.php");

  if (!$feed = CreateFeed ())
    return "<ul><li>Developers feed temporarily unavailable.</li></ul>";

  $format = "%e %B %Y";
  $html = "<ul>";

  foreach ($feed as $item)
    {
      $html .= "<li>".
               "<span class=\"grey\">". $item["creator"] ." @ ". CreateDate ($item["date"], $format, true) ."</span><br />";

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
