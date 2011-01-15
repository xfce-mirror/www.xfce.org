<?php

/* if you want to update news: update the news-array.php file */
include ('pages/news-array.php');

$head['title'] = R_('News');
$head['stylesheet'] = array ('/style/news.css');
$head['feed'] = 'http://www.xfce.org/feed?lang='.$lang;

$toc['anchors'] = array ();

echo '<h1>'.$head['title'].'</h1>';

echo '<span class="rss"><a href="'.$head['feed'].'">Subscribe to articles using RSS Feed</a></span>';

if (isset ($_GET['post']))
  $only_stamp = (int) $_GET['post'];
else
  $only_stamp = 0;

$has_items = false;

foreach ($news as $item)
{
  $stamp = strtotime ($item['date']);

  if ($only_stamp > 0 && $only_stamp != $stamp)
    continue;
    
  if (!empty ($item['version']))
      $title = sprintf (R_('Xfce %s released'), $item['version']);
    else
      $title = $item['title'];

  echo '<h2 id="post-'.$stamp.'">'.$title.'</h2>'."\n";

  echo '<div class="post-date"><span class="post-month">'. date ('M', $stamp).
       '</span> <span class="post-day">'. date ('d', $stamp).
       '<br />'.date ('Y', $stamp).'</span></div>';

  echo '<div class="post-wrap">';
  foreach ($item['paragraphs'] as $p)
    echo '<p>'.$p.'</p>'."\n";

  if (!empty ($item['version']))
  {
    echo '<ul>';
      echo '<li>Download: <a href="http://archive.xfce.org/xfce/'.$item['version'].'/">http://archive.xfce.org/xfce/'.$item['version'].'/</a></li>';
      echo '<li><a href="/download/changelogs/'.$item['version'].'/">'.R_('Changes in this release').'</a></li>';
    echo '</ul>';
  }

  echo '</div>';

  $toc['anchors'] += array ('post-'. $stamp => $item['title']);
  $has_items = true;
}

if (!$has_items)
{
  echo '<p>'.R_('No news articles found.').'</p>';
}

?>


