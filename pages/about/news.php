<?php

include ('pages/news-array.php');

$head['title'] = R_('News');
$head['stylesheet'] = array ('/style/news.css');
$head['feed'] = '/feed';

$toc['anchors'] = array ();

echo '<h1>'.$head['title'].'</h1>';

if (isset ($_GET['id']))
  $only_stamp = (int) $_GET['id'];
else
  $only_stamp = 0;

$has_items = false;

foreach ($news as $item)
{
  $stamp = strtotime ($item['date']);

  if ($only_stamp > 0 && $only_stamp != $stamp)
    continue;

  echo '<h2 id="'.$stamp.'">'.$item['title'].'</h2>'."\n";

  echo '<div class="post-date"><span class="post-month">'. date ('M', $stamp).
       '</span> <span class="post-day">'. date ('d', $stamp).
       '<br />'.date ('Y', $stamp).'</span></div>';

  echo '<div class="post-wrap">';
  foreach ($item['content'] as $p)
    echo '<p>'.$p.'</p>'."\n";
  echo '</div>';

  $toc['anchors'] += array ($stamp => $item['title']);
  $has_items = true;
}

if (!$has_items)
{
  echo '<p>'.R_('No news articles found.').'</p>';
}

?>


