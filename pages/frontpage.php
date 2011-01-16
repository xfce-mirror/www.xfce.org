<?php

include ('pages/news-array.php');
include ('pages/versions.php');

$head['description'] = 'Xfce Desktop Environment';
$head['keywords'] = 'desktop environment, window manager, desktop, speed, lightweight, gtk+, open source, xforms common environment';
$head['stylesheet'] = array ('/style/home.css');
$head['feed'] = 'http://www.xfce.org/feed?lang='.$lang;

?>

<script type="text/javascript" src="/style/tinyfader.packed.js"></script>
<script type="text/javascript" src="/style/tinybox.packed.js"></script>

<div id="intro">

<div id="intro-wrap">
<div id="intro-logo"><h1 class="hidden">Xfce Desktop Environment 4.8</h1></div>

<p>
  <?php E_('Xfce is a lightweight desktop environment for UNIX-like operating systems. It aims to be fast and low on system resources, while still being visually appealing and user friendly.') ?>
</p>

<ul>
  <li><a href="/download"><?php printf (R_('Download the lastest %s release'), $stable_version) ?></a></li>
  <li><a href="/about/tour"><?php E_('Visual tour of Xfce 4.8') ?></a></li>
  <li><a href="/about/screenshots"><?php E_('Screenshots') ?></a></li>
</ul>

</div>
<div id="slideshow">
  <ul id="slides">
    <li><img src="/images/frontpage/intro-1-small.png" id="intro1" /></li>
    <li><img src="/images/frontpage/intro-2-small.png" id="intro2" /></li>
    <li><img src="/images/frontpage/intro-3-small.png" id="intro3" /></li>
    <li><img src="/images/frontpage/intro-4-small.png" id="intro4" /></li>
  </ul>
</div>
<div class="clearboth"></div>
</div>

<script type="text/javascript">
var slideshow=new TINY.fader.fade('slideshow',
{
  id:'slides',
  auto:5,
  visible:true,
  position:0,
  resume:true
});

T$('intro1').onclick = function(){TINY.box.show(
  "<img src=\"images/frontpage/intro-1.png\" width=\"900\" height=\"600\" alt=\"\" />",0,900,600,0)}
T$('intro2').onclick = function(){TINY.box.show(
  "<img src=\"images/frontpage/intro-2.png\" width=\"900\" height=\"600\" alt=\"\" />",0,900,600,0)}
T$('intro3').onclick = function(){TINY.box.show(
  "<img src=\"images/frontpage/intro-3.png\" width=\"900\" height=\"600\" alt=\"\" />",0,900,600,0)}
T$('intro4').onclick = function(){TINY.box.show(
  "<img src=\"images/frontpage/intro-4.png\" width=\"900\" height=\"600\" alt=\"\" />",0,900,600,0)}


</script>

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
