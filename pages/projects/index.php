<?php

$head['title'] = R_('Projects');
$head['stylesheet'] = array ('/style/projects.css');

?>
<h1><?php echo $head['title'] ?></h1>
<p>
  <?php E_('The Xfce project contains several separated projects for each part of the desktop. Every project has it\'s own project page to provide additionnal information.') ?>
</p>

<h2 id="core"><?php E_('Core Components') ?></h2>

<div class="column"><div class="lcolumn">
  <h3><?php E_('Window Manager') ?></h3>
  <p class="colicon" style="background-image: url('<?php echo $static_media; ?>/projects/xfwm4.png')">
    <?php E_('It manages the placement of application windows on the screen, provides window decorations and manages workspaces or virtual desktops.') ?>
    <a href="http://docs.xfce.org/xfce/xfwm4/start"><?php E_('Learn More &rarr;') ?></a>
  </p>
</div></div>
<div class="column"><div class="rcolumn">
  <h3><?php E_('Panel') ?></h3>
  <p class="colicon" style="background-image: url('<?php echo $static_media; ?>/projects/xfce4-panel.png')">
    <?php E_('The panel is a bar which allows you to have at all times program launchers, panel menus, a clock, a desktop switcher and more.') ?>
    <a href="http://docs.xfce.org/xfce/xfce4-panel/start"><?php E_('Learn More &rarr;') ?></a>
  </p>
</div></div>
<div class="clearboth"></div>


<div class="column"><div class="lcolumn">
  <h3><?php E_('Desktop Manager') ?></h3>
  <p class="colicon" style="background-image: url('<?php echo $static_media; ?>/projects/xfdesktop.png')">
    <?php E_('This program sets the background image and provides a root window menu, desktop icons or minimized icons and a windows list.') ?>
    <a href="http://docs.xfce.org/xfce/xfdesktop/start"><?php E_('Learn More &rarr;') ?></a>
  </p>
</div></div>
<div class="column"><div class="rcolumn">
  <h3><?php E_('Session Manager') ?></h3>
  <p class="colicon" style="background-image: url('<?php echo $static_media; ?>/projects/xfce4-session.png')">
    <?php E_('The session manager controls all aspects of the startup and the shutdown of the user session.') ?>
    <a href="http://docs.xfce.org/xfce/xfce4-session/start"><?php E_('Learn More &rarr;') ?></a>
  </p>
</div></div>
<div class="clearboth"></div>


<div class="column"><div class="lcolumn">
  <h3><?php E_('Settings Manager') ?></h3>
  <p class="colicon" style="background-image: url('<?php echo $static_media; ?>/projects/xfce4-settings.png')">
    <?php E_('It allows you to configure every detail of your desktop environment.') ?>
    <a href="http://docs.xfce.org/xfce/xfce4-settings/start"><?php E_('Learn More &rarr;') ?></a>
  </p>
</div></div>
<div class="column"><div class="rcolumn">
  <h3><?php E_('Application Finder') ?></h3>
  <p class="colicon" style="background-image: url('<?php echo $static_media; ?>/projects/xfce4-appfinder.png')">
    <?php E_('Allows you to search, launch and find information about applications installed on your system.') ?>
    <a href="http://docs.xfce.org/xfce/xfce4-appfinder/start"><?php E_('Learn More &rarr;') ?></a>
  </p>
</div></div>
<div class="clearboth"></div>


<div class="column"><div class="lcolumn">
  <h3><?php E_('Xfce Libraries') ?></h3>
  <p class="colicon" style="background-image: url('<?php echo $static_media; ?>/projects/library.png')">
    <?php E_('They provide additional functions and widgets which ease the development of applications.') ?>
    <a href="http://docs.xfce.org/xfce/exo/start"><?php E_('Learn More &rarr;') ?></a>
  </p>
</div></div>
<div class="column"><div class="rcolumn">
  <h3>Xfconf</h3>
  <p class="colicon" style="background-image: url('<?php echo $static_media; ?>/projects/library.png')">
    <?php E_('Simple client-server configuration storage and query system.') ?>
    <a href="http://docs.xfce.org/xfce/xfconf/start"><?php E_('Learn More &rarr;') ?></a>
  </p>
</div></div>
<div class="clearboth"></div>


<div class="column"><div class="lcolumn">
  <h3><?php E_('Thunar File Manager') ?></h3>
  <p class="colicon" style="background-image: url('<?php echo $static_media; ?>/projects/thunar.png')">
    <?php E_('Thunar is a new modern file manager designed from the ground up to be fast and easy-to-use.') ?>
    <a href="http://docs.xfce.org/xfce/thunar/start"><?php E_('Learn More &rarr;') ?></a>
  </p>
</div></div>
<div class="clearboth"></div>


<h2 id="applications"><?php E_('Applications') ?></h2>

<div class="column"><div class="lcolumn">
  <h3><?php E_('Web Browser') ?></h3>
  <p class="colicon" style="background-image: url('<?php echo $static_media; ?>/projects/midori.png')">
    <?php E_('Midori is a lightweight Web browser.') ?>
    <a href="http://www.twotoasts.de/index.php?/pages/midori_summary.html"><?php E_('Learn More &rarr;') ?></a>
  </p>
</div></div>
<div class="column"><div class="rcolumn">
  <h3><?php E_('Terminal') ?></h3>
  <p class="colicon" style="background-image: url('<?php echo $static_media; ?>/projects/terminal.png')">
    <?php E_('Terminal is a modern terminal emulator featuring tabs and transparent backgrounds.') ?>
    <a href="http://docs.xfce.org/apps/terminal/start"><?php E_('Learn More &rarr;') ?></a>
  </p>
</div></div>
<div class="clearboth"></div>



<div class="column"><div class="lcolumn">
  <h3><?php E_('Xfburn') ?></h3>
  <p class="colicon" style="background-image: url('<?php echo $static_media; ?>/projects/xfburn.png')">
    <?php E_('Xfburn is an application to create and burn CD\'s and DVD\'s.') ?>
  </p>
</div></div>
<div class="column"><div class="rcolumn">
  <h3><?php E_('Orage') ?></h3>
  <p class="colicon" style="background-image: url('<?php echo $static_media; ?>/projects/orage.png')">
    <?php E_('A simple calendar application with reminders.') ?>
  </p>
</div></div>
<div class="clearboth"></div>



<div class="column"><div class="lcolumn">
  <h3><?php E_('Mixer') ?></h3>
  <p class="colicon" style="background-image: url('<?php echo $static_media; ?>/projects/xfce4-mixer.png')">
    <?php E_('Allows you to change the volume of the different audio tracks.') ?>
  </p>
</div></div>
<div class="column"><div class="rcolumn">
  <h3><?php E_('Image Viewer') ?></h3>
  <p class="colicon" style="background-image: url('<?php echo $static_media; ?>/projects/ristretto.png')">
    <?php E_('Ristretto is a lightweight image viewer.') ?>
    <a href="http://docs.xfce.org/apps/ristretto/start"><?php E_('Learn More &rarr;') ?></a>
  </p>
</div></div>
<div class="clearboth"></div>

