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

/* globals */
$headup;
$headtitle;

/**
 * This function creates the language bar, located
 * right under the header.
 **/
/*
function CreateLanguageBar ($languages, $lang)
{
  $links = "";
  foreach($languages as $short => $long)
    {
      $i++;

      if ($short == $lang)
        $links .= '<a href="?lang='. $short .'" title="'. $long[0] .'"><strong>'. strtolower ($short) .'</strong></a>';
      else
        $links .= '<a href="?lang='. $short .'" title="'. $long[0] .'">'. strtolower ($short) .'</a>';

      if ($i < count ($languages))
        $links .= ' | ';
    }

  return $links;
}
*/

function CreateLanguageBar ($languages, $lang)
{
  $links = '<form id="LanguageForm" action="" method="get">';
  $links .= '<select name="lang" onChange="document.getElementById(\'LanguageForm\').submit();return true;">';

  foreach($languages as $short => $long)
    {
      $links .= '<option value="'. $short .'"';

      if ($short == $lang)
        $links .= ' selected';

      $links .= '>'. $long[0] .'</option>';
    }

  $links .= '</select>';
  $links .= '<input type="submit" class="hidden" value="&gt;" />';
  $links .= '</form>';

  return $links;
}



/**
 * This function creates the breadcrumbs links
 **/
function CreateBreadcrumbs ($uri, $lang)
{
  global $headup;
  global $headtitle;

  /* Load breadcrumb correction/translation array */
  $file = "i18n/arrays/". $lang .".breadcrumbs.php";
  $file_en = "i18n/arrays/en.breadcrumbs.php";

  if (is_file ($file))
    include ($file);
  elseif (is_file ($file_en))
    include ($file_en);

  /* Default page title (Desktop Environment in /) */
  $headtitle = $breadcrumbs["default_title"];

  $crumbs = explode ("/", $uri);

  if ($crumbs[0])
    {
      /* Goto frontpage */
      $url = '/';
      $headup = $url;
      $html = '<a href="'. $url .'" title="'. $breadcrumbs["home"] .'">'. $breadcrumbs["home"] .'</a> &#187; ';

      foreach ($crumbs as $name)
        {
          $url .= $name . '/';
          $i++;

          /* Create breadcrumb title */
          if (array_key_exists($name, $breadcrumbs))
            $title = $breadcrumbs[$name];
          else
            $title = ucfirst ($name);

          /* Build link */
          if ($i > 15)
      {
              /* Arbitary maximum */
        break;
      }
          elseif ($i < count($crumbs))
            {
              $html .= '<a href="'. $url .'" title="'. $title .'">'. $title .'</a> &#187; ';
              $headup = $url;
            }
          else
            {
              $html .= $title;
              $headtitle = $title;
            }
        }

      return $html;
    }
  else
    {
      return false;
    }
}



/**
 * This function prepares the variables used in the header.xx.php file
 * and loads this file
 **/
function PrintHeader ($uri, $lang, $layout, $languages)
{
  global $headtitle;
  global $headup;

  /* Define style css */
  if ($layout == "liquid")
    {
      $layout_css = "#global-page {".
                      "width: 100%;".
                    "}\n";
    }
  else
    {
      $layout_css = "#global-page {".
                      "min-width: 740px; ".
                      "max-width: 1000px; ".
                      "width: 100%;".
                    "}\n\t\t".
                    "* html #global-page {".
                      "width: 780px;".
                    "}\n";
    }

  if ($uri == "")
    {
      /* Frontpage: show extra css file */
      $linked_css = '<link rel="stylesheet" media="screen" href="/layout/css/front.css" type="text/css" />';
    }
  else
    {
      /* Show content css file */
      $linked_css = '<link rel="stylesheet" media="screen" href="/layout/css/content.css" type="text/css" />';

      /* Show page jump for non-css readers */
      $content_bool = true;
    }

  /* Create breadcrumb links */
  $breadcrumbs = CreateBreadcrumbs ($uri, $lang);

  /* languages */
  $lang_links = CreateLanguageBar ($languages, $lang);

  /* Charset */
  $charset = $languages[$lang][1];

  /* Get the (translated) file */
  if (is_file ("i18n/header.".$lang.".php"))
    include ("i18n/header.".$lang.".php");
  else
    include ("i18n/header.en.php");
}

?>
