<?php

include ('pages/news-array.php');
include ('pages/versions.php');

$head['description'] = 'Xfce Desktop Environment';
$head['keywords'] = 'desktop environment, window manager, desktop, speed, lightweight, gtk+, open source, xforms common environment';
$head['feed'] = 'http://www.xfce.org/feed?lang='.$lang;
$head['javascript'] = '/style/tinyslider.js';
$head['pagediv'] = false;
?>

<div id="slidewrap" class="page_contents">
  <div id="slide">
    <ul>
      <li>
        <img src="/images/frontpage/slider-desktop.jpg" width="800" height="400" alt="Xfce Desktop" />
        <p><?php E_('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue.') ?></p>
      </li>
      <li>
        <img src="/images/frontpage/slider-thunar.jpg" width="800" height="400" alt="File Manager" />
        <p><?php E_('Thunar is the file manager for the Xfce Desktop Environment. It has been designed from the ground up to be fast and easy-to-use. Its user interface is clean and intuitive, and does not include any confusing or useless options by default.') ?></p>
      </li>
      <li>
        <img src="/images/frontpage/slider-settings.jpg" width="800" height="400" alt="Settings" />
        <p><?php E_('The Xfce Desktop Environement provides all the required settings to configure your hardware, desktop appearance and other desktop-critical settings allowing you to easily manage your system.') ?></p>
      </li>
      <li>
        <img src="/images/frontpage/slider-xfwm4.jpg" width="800" height="400" alt="Window Manager" />
        <p><?php E_('The Xfce Window Manager is the core of the desktop. It can be adjusted in a lot of ways to make window management quick and predictable. It also features around 100 border styles giving it the look you want!') ?></p>
      </li>
      <li>
        <img src="/images/frontpage/slider-panel.jpg" width="800" height="400" alt="Panel" />
        <p><?php E_('The Xfce Panel can be customized in numerous ways so it provides all the items you need right where you need it. It has three different display modes, transparency and a dozen different plugins.') ?></p>
      </li>
      <li>
        <img src="/images/frontpage/slider-apps.jpg" width="800" height="400" alt="Applications" />
        <p><?php E_('Beside the core desktop functionality, a number of other applications are developed in the Xfce repositories, like an image viewer, the Midori web browser, task manager, notes plugin and calendar.') ?></p>
      </li>
    </ul>
  </div>
  <div id="slidenavwrap">
    <ul id="slidenav">
      <li onclick="slideshow.pos(0)"></li>
      <li onclick="slideshow.pos(1)"></li>
      <li onclick="slideshow.pos(2)"></li>
      <li onclick="slideshow.pos(3)"></li>
      <li onclick="slideshow.pos(4)"></li>
      <li onclick="slideshow.pos(5)"></li>
    </ul>
  </div>
</div>

<script type="text/javascript">
var slideshow=new TINY.slider.slide('slideshow',{
  id:'slide',
  auto:10,
  vertical:false,
  navid:'slidenav',
  activeclass:'current',
  position:0,
  rewind:false,
  elastic:false
});
</script>

<div class="page_contents file_frontpage">

<h2><?php E_('Latest News') ?></h2>
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
