<?php

$head['title'] = R_('Projects');
$head['stylesheet'] = array ('/style/projects.css');

/* for the learnmore() function in core.php */
$foo = R_('Learn&nbsp;More&nbsp;&rarr;');

?>
<h1><?php echo $head['title'] ?></h1>
<p>
  <?php E_('The Xfce project contains several separated projects for each part of the desktop. Some projects have their own project pages to provide additional information.') ?>
</p>

<h2 id="core"><?php E_('Core Components') ?></h2>

<div class="grid icons">

<div class="item">
  <h3><?php E_('Window Manager') ?></h3>
  <p style="background-image: url('<?php echo $static_media; ?>/projects/xfwm4.png')">
    <?php E_('It manages the placement of application windows on the screen, provides window decorations and manages workspaces or virtual desktops.') ?>
    <?php learnmore ("https://docs.xfce.org/xfce/xfwm4/start") ?>
  </p>
</div>
<div class="item">
  <h3><?php E_('Panel') ?></h3>
  <p style="background-image: url('<?php echo $static_media; ?>/projects/xfce4-panel.png')">
    <?php E_('The panel is a bar which allows you to have at all times program launchers, panel menus, a clock, a desktop switcher and more.') ?>
    <?php learnmore ("https://docs.xfce.org/xfce/xfce4-panel/start") ?>
  </p>
</div>

<div class="item">
  <h3><?php E_('Desktop Manager') ?></h3>
  <p style="background-image: url('<?php echo $static_media; ?>/projects/xfdesktop.png')">
    <?php E_('This program sets the background image and provides a root window menu, desktop icons or minimized icons and a windows list.') ?>
    <?php learnmore ("https://docs.xfce.org/xfce/xfdesktop/start") ?>
  </p>
</div>
<div class="item">
  <h3><?php E_('Session Manager') ?></h3>
  <p style="background-image: url('<?php echo $static_media; ?>/projects/xfce4-session.png')">
    <?php E_('The session manager controls all aspects of the startup and the shutdown of the user session.') ?>
    <?php learnmore ("https://docs.xfce.org/xfce/xfce4-session/start") ?>
  </p>
</div>

<div class="item">
  <h3><?php E_('Settings Manager') ?></h3>
  <p style="background-image: url('<?php echo $static_media; ?>/projects/xfce4-settings.png')">
    <?php E_('It allows you to configure every detail of your desktop environment.') ?>
    <?php learnmore ("https://docs.xfce.org/xfce/xfce4-settings/start") ?>
  </p>
</div>
<div class="item">
  <h3><?php E_('Application Finder') ?></h3>
  <p style="background-image: url('<?php echo $static_media; ?>/projects/xfce4-appfinder.png')">
    <?php E_('Allows you to search, launch and find information about applications installed on your system.') ?>
    <?php learnmore ("https://docs.xfce.org/xfce/xfce4-appfinder/start") ?>
  </p>
</div>

<div class="item">
  <h3><?php E_('Xfce Libraries') ?></h3>
  <p style="background-image: url('<?php echo $static_media; ?>/projects/library.png')">
    <?php E_('They provide additional functions and widgets which ease the development of applications.') ?>
    <?php learnmore ("https://docs.xfce.org/xfce/exo/start") ?>
  </p>
</div>
<div class="item">
  <h3>Xfconf</h3>
  <p style="background-image: url('<?php echo $static_media; ?>/projects/library.png')">
    <?php E_('Simple client-server configuration storage and query system.') ?>
    <?php learnmore ("https://docs.xfce.org/xfce/xfconf/start") ?>
  </p>
</div>

<div class="item">
  <h3><?php E_('Thunar File Manager') ?></h3>
  <p style="background-image: url('<?php echo $static_media; ?>/projects/thunar.png')">
    <?php E_('Thunar is a new modern file manager designed from the ground up to be fast and easy-to-use.') ?>
    <?php learnmore ("https://docs.xfce.org/xfce/thunar/start") ?>
  </p>
</div>

</div>

<h2 id="applications"><?php E_('Applications') ?></h2>

<div class="grid icons">

<div class="item">
  <h3><?php E_('Web Browser') ?></h3>
  <p style="background-image: url('<?php echo $static_media; ?>/projects/midori.png')">
    <?php E_('Midori is a lightweight Web browser.') ?>
    <?php learnmore ("http://www.midori-browser.org/") ?>
  </p>
</div>
<div class="item">
  <h3><?php E_('Terminal') ?></h3>
  <p style="background-image: url('<?php echo $static_media; ?>/projects/terminal.png')">
    <?php E_('Terminal is a modern terminal emulator featuring tabs and transparent backgrounds.') ?>
    <?php learnmore ("https://docs.xfce.org/apps/terminal/start") ?>
  </p>
</div>

<div class="item">
  <h3><?php E_('Xfburn') ?></h3>
  <p style="background-image: url('<?php echo $static_media; ?>/projects/xfburn.png')">
    <?php E_('Xfburn is an application to create and burn CD\'s and DVD\'s.') ?>
  </p>
</div>
<div class="item">
  <h3><?php E_('Orage') ?></h3>
  <p style="background-image: url('<?php echo $static_media; ?>/projects/orage.png')">
    <?php E_('A simple calendar application with reminders.') ?>
  </p>
</div>

<div class="item">
  <h3><?php E_('Mixer') ?></h3>
  <p style="background-image: url('<?php echo $static_media; ?>/projects/xfce4-mixer.png')">
    <?php E_('Allows you to change the volume of the different audio tracks.') ?>
  </p>
</div>
<div class="item">
  <h3><?php E_('Image Viewer') ?></h3>
  <p style="background-image: url('<?php echo $static_media; ?>/projects/ristretto.png')">
    <?php E_('Ristretto is a lightweight image viewer.') ?>
    <?php learnmore ("https://docs.xfce.org/apps/ristretto/start") ?>
  </p>
</div>

</div>