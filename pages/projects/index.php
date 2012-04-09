<?php

$head['title'] = R_('Projects');
$head['stylesheet'] = array ('/style/projects.css');

$toc['anchors'] = array (
        'core' => R_('Core Components'),
        'applications' => R_('Applications'));

?>
<h1><?php echo $head['title'] ?></h1>
<p>
  <?php E_('The Xfce project contains several separated projects for each part of the desktop. Every project has it\'s own project page to provide additionnal information.') ?>
</p>

<h2 id="core"><?php E_('Core Components') ?></h2>

<div class="column"><div class="lcolumn">
  <h3><a href="http://docs.xfce.org/xfce/xfwm4/start" class="external"><?php E_('Window Manager') ?></a></h3>
  <p class="colicon" style="background-image: url('<?php echo $static_media; ?>/projects/xfwm4.png')">
    <?php E_('It manages the placement of application windows on the screen, provides window decorations and manages workspaces or virtual desktops.') ?>
  </p>
</div></div>
<div class="column"><div class="rcolumn">
  <h3><a href="http://docs.xfce.org/xfce/xfce4-panel/start" class="external"><?php E_('Panel') ?></a></h3>
  <p class="colicon" style="background-image: url('<?php echo $static_media; ?>/projects/xfce4-panel.png')">
    <?php E_('The panel is a bar which allows you to have at all times program launchers, panel menus, a clock, a desktop switcher and more.') ?>
  </p>
</div></div>
<div class="clearboth"></div>


<div class="column"><div class="lcolumn">
  <h3><a href="http://docs.xfce.org/xfce/xfdesktop/start" class="external"><?php E_('Desktop Manager') ?></a></h3>
  <p class="colicon" style="background-image: url('<?php echo $static_media; ?>/projects/xfdesktop.png')">
    <?php E_('This program sets the background image and provides a root window menu, desktop icons or minimized icons and a windows list.') ?>
  </p>
</div></div>
<div class="column"><div class="rcolumn">
  <h3><a href="http://docs.xfce.org/xfce/xfce4-session/start" class="external"><?php E_('Session Manager') ?></a></h3>
  <p class="colicon" style="background-image: url('<?php echo $static_media; ?>/projects/xfce4-session.png')">
    <?php E_('The session manager controls all aspects of the startup and the shutdown of the user session.') ?>
  </p>
</div></div>
<div class="clearboth"></div>


<div class="column"><div class="lcolumn">
  <h3><a href="http://docs.xfce.org/xfce/xfce4-settings/start" class="external"><?php E_('Settings Manager') ?></a></h3>
  <p class="colicon" style="background-image: url('<?php echo $static_media; ?>/projects/xfce4-settings.png')">
    <?php E_('It allows you to configure every detail of your desktop environment.') ?>
  </p>
</div></div>
<div class="column"><div class="rcolumn">
  <h3><a href="http://docs.xfce.org/xfce/xfce4-appfinder/start" class="external"><?php E_('Application Finder') ?></a></h3>
  <p class="colicon" style="background-image: url('<?php echo $static_media; ?>/projects/xfce4-appfinder.png')">
    <?php E_('Allows you to search, launch and find information about applications installed on your system.') ?>
  </p>
</div></div>
<div class="clearboth"></div>


<div class="column"><div class="lcolumn">
  <h3><a href="http://docs.xfce.org/xfce/exo/start" class="external"><?php E_('Xfce Libraries') ?></a></h3>
  <p class="colicon" style="background-image: url('<?php echo $static_media; ?>/projects/library.png')">
    <?php E_('They provide additional functions and widgets which ease the development of applications.') ?>
  </p>
</div></div>
<div class="column"><div class="rcolumn">
  <h3><a href="http://docs.xfce.org/xfce/xfconf/start" class="external">Xfconf</a></h3>
  <p class="colicon" style="background-image: url('<?php echo $static_media; ?>/projects/library.png')">
    <?php E_('Simple client-server configuration storage and query system.') ?>
  </p>
</div></div>
<div class="clearboth"></div>


<div class="column"><div class="lcolumn">
  <h3><a href="http://docs.xfce.org/xfce/thunar/start" class="external"><?php E_('Thunar File Manager') ?></a></h3>
  <p class="colicon" style="background-image: url('<?php echo $static_media; ?>/projects/thunar.png')">
    <?php E_('Thunar is a new modern file manager designed from the ground up to be fast and easy-to-use.') ?>
  </p>
</div></div>
<div class="clearboth"></div>


<h2 id="applications"><?php E_('Applications') ?></h2>

<div class="column"><div class="lcolumn">
  <h3><a href="http://www.twotoasts.de/index.php?/pages/midori_summary.html" class="external"><?php E_('Web Browser') ?></a></h3>
  <p class="colicon" style="background-image: url('<?php echo $static_media; ?>/projects/midori.png')">
    <?php E_('Midori is a lightweight Web browser.') ?>
  </p>
</div></div>
<div class="column"><div class="rcolumn">
  <h3><a href="http://docs.xfce.org/apps/terminal/start" class="external"><?php E_('Terminal') ?></a></h3>
  <p class="colicon" style="background-image: url('<?php echo $static_media; ?>/projects/terminal.png')">
    <?php E_('Terminal is a modern terminal emulator featuring tabs and transparent backgrounds.') ?>
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
  <h3><a href="http://docs.xfce.org/apps/ristretto/start" class="external"><?php E_('Image Viewer') ?></a></h3>
  <p class="colicon" style="background-image: url('<?php echo $static_media; ?>/projects/ristretto.png')">
    <?php E_('Ristretto is a lightweight image viewer.') ?>
  </p>
</div></div>
<div class="clearboth"></div>

