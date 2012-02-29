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

<div class="group">
  <div class="module">
    <h3><a href="/projects/xfwm4"><?php E_('Window Manager') ?></a></h3>
    <p style="background-image: url('/images/projects/xfwm4.png')">
      <?php E_('It manages the placement of application windows on the screen, provides window decorations and manages workspaces or virtual desktops.') ?>
    </p>
  </div>

  <div class="module">
    <h3><a href="/projects/xfce4-panel"><?php E_('Panel') ?></a></h3>
    <p style="background-image: url('/images/projects/xfce4-panel.png')">
      <?php E_('The panel is a bar which allows you to have at all times program launchers, panel menus, a clock, a desktop switcher and more.') ?>
    </p>
  </div>

  <div class="clearboth"></div>
</div>

<div class="group">
  <div class="module">
    <h3><a href="/projects/xfdesktop"><?php E_('Desktop Manager') ?></a></h3>
    <p style="background-image: url('/images/projects/xfdesktop.png')">
      <?php E_('This program sets the background image and provides a root window menu, desktop icons or minimized icons and a windows list.') ?>
    </p>
  </div>

  <div class="module">
    <h3><a href="/projects/xfce4-session"><?php E_('Session Manager') ?></a></h3>
    <p style="background-image: url('/images/projects/xfce4-session.png')">
      <?php E_('The session manager controls all aspects of the startup and the shutdown of the user session.') ?>
    </p>
  </div>

  <div class="clearboth"></div>
</div>

<div class="group">
  <div class="module">
    <h3><a href="/projects/xfce4-settings"><?php E_('Settings Manager') ?></a></h3>
    <p style="background-image: url('/images/projects/xfce4-settings.png')">
      <?php E_('It allows you to configure every detail of your desktop environment.') ?>
    </p>
  </div>

  <div class="module">
    <h3><a href="/projects/xfce4-appfinder"><?php E_('Application Finder') ?></a></h3>
    <p style="background-image: url('/images/projects/xfce4-appfinder.png')">
      <?php E_('Allows you to search, launch and find information about applications installed on your system.') ?>
    </p>
  </div>

  <div class="clearboth"></div>
</div>

<div class="group">
  <div class="module">
    <h3><a href="/projects/libxfce4"><?php E_('Xfce Libraries') ?></a></h3>
    <p style="background-image: url('/images/projects/library.png')">
      <?php E_('They provide additional functions and widgets which ease the development of applications.') ?>
    </p>
  </div>

  <div class="module">
    <h3><a href="/projects/xfconf">Xfconf</a></h3>
    <p style="background-image: url('/images/projects/library.png')">
      <?php E_('Simple client-server configuration storage and query system.') ?>
    </p>
  </div>

  <div class="clearboth"></div>
</div>

<div class="group">
  <div class="module">
    <h3><a href="/projects/thunar"><?php E_('Thunar File Manager') ?></a></h3>
    <p style="background-image: url('/images/projects/thunar.png')">
      <?php E_('Thunar is a new modern file manager designed from the ground up to be fast and easy-to-use.') ?>
    </p>
  </div>

  <div class="clearboth"></div>
</div>

<h2 id="applications"><?php E_('Applications') ?></h2>

<div class="group">
  <div class="module">
    <h3><a href="http://www.twotoasts.de/index.php?/pages/midori_summary.html"><?php E_('Web Browser') ?></a></h3>
    <p style="background-image: url('/images/projects/midori.png')">
      <?php E_('Midori is a lightweight Web browser.') ?>
    </p>
  </div>

  <div class="module">
    <h3><a href="/projects/terminal"><?php E_('Terminal') ?></a></h3>
    <p style="background-image: url('/images/projects/terminal.png')">
      <?php E_('Terminal is a modern terminal emulator featuring tabs and transparent backgrounds.') ?>
    </p>
  </div>

  <div class="clearboth"></div>
</div>

<div class="group">
  <div class="module">
    <h3><a href="/projects/xfburn"><?php E_('Xfburn') ?></a></h3>
    <p style="background-image: url('/images/projects/xfburn.png')">
      <?php E_('Xfburn is an application to create and burn CD\'s and DVD\'s.') ?>
    </p>
  </div>

  <div class="module">
    <h3><a href="/projects/orage"><?php E_('Orage') ?></a></h3>
    <p style="background-image: url('/images/projects/orage.png')">
      <?php E_('A simple calendar application with reminders.') ?>
    </p>
  </div>

  <div class="clearboth"></div>
</div>

<div class="group">
  <div class="module">
    <h3><a href="/projects/xfce4-mixer"><?php E_('Mixer') ?></a></h3>
    <p style="background-image: url('/images/projects/xfce4-mixer.png')">
      <?php E_('Allows you to change the volume of the different audio tracks.') ?>
    </p>
  </div>

  <div class="module">
    <h3><a href="/projects/ristretto"><?php E_('Image Viewer') ?></a></h3>
    <p style="background-image: url('/images/projects/ristretto.png')">
      <?php E_('Ristretto is a lightweight image viewer.') ?>
    </p>
  </div>

  <div class="clearboth"></div>
</div>
