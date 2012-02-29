<?php

include ('pages/news-array.php');
include ('pages/versions.php');

$head['description'] = 'Xfce Desktop Environment';
$head['keywords'] = 'desktop environment, window manager, desktop, speed, lightweight, gtk+, open source, xforms common environment';
$head['stylesheet'] = array ('/style/home.css');
$head['feed'] = 'http://www.xfce.org/feed?lang='.$lang;
?>

<div id="intro">

<div id="intro-wrap">
<div id="intro-logo"><h1 class="hidden">Xfce Desktop Environment 4.8</h1></div>

<p>
  <?php E_('Xfce is a lightweight desktop environment for UNIX-like operating systems. It aims to be fast and low on system resources, while still being visually appealing and user friendly.') ?>
</p>

<ul>
  <li><a href="/download"><?php printf (R_('Download the latest %s release'), $stable_version) ?></a></li>
  <li><a href="/download/changelogs/4.8.0"><?php printf (R_('Release notes for %s'), $stable_version) ?></a></li>
  <li><a href="/about/tour"><?php E_('Visual tour of Xfce 4.8') ?></a></li>
  <li><a href="/about/screenshots"><?php E_('Screenshots') ?></a></li>
</ul>

</div>
<div id="slideshow">
  <ul id="no-show-slides">
    <li><img src="images/frontpage/intro-1-small.jpg" id="intro1" alt="" width="450" height="300" /></li>
    <li><img src="images/frontpage/intro-2-small.jpg" id="intro2" alt="" width="450" height="300" /></li>
    <li><img src="images/frontpage/intro-3-small.jpg" id="intro3" alt="" width="450" height="300" /></li>
    <li><img src="images/frontpage/intro-4-small.jpg" id="intro4" alt="" width="450" height="300" /></li>
  </ul>

  <script type="text/javascript">
    // <![CDATA[
      document.getElementById('no-show-slides').id = 'slides';
    // ]]>
  </script>

  <noscript>
    <ul id="slides">
      <?php  $i = rand(1,4) ?>
      <li><img src=<?php echo("\"images/frontpage/intro-" . $i . "-small.jpg\" id=\"intro" . $i . "-noscript\" alt=\"\"") ?> /></li>
    </ul>
  </noscript>
</div>
<div class="clearboth"></div>
</div>

<script type="text/javascript" src="/style/tiny.packed.js"></script>

<h2>Latest News</h2>
<?php
  $count = 3;
  foreach ($news as $item)
  {
    if (isset ($item['version']) && !empty ($item['version']))
      $title = sprintf (R_('Xfce %s released'), $item['version']);
    else
      $title = $item['title'];

    echo '<h3><a href="/about/news/?post='.strtotime ($item['date']).'">'.$title.'</a></h3>';

    echo '<p>'.$item['paragraphs'][0].'</p>';

    if (--$count <= 0)
      break;
  }
?>
