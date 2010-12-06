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
      <?php E_('The Panel is part of the Xfce Desktop Environment and features program launchers, panel menus, a clock, a desktop switcher and more.') ?>
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
      <?php E_('The session manager controls the startup and shutdown of the Xfce Desktop Environment.') ?>
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
    <h3><a href="/projects/xfce-utils"><?php E_('Utilities and Scripts') ?></a></h3>
    <p style="background-image: url('/images/projects/xfce-utils.png')">
      <?php E_('Essential utilities and scripts. Provides a credits and license dialog, a dialog for launching applications and several important scripts that are used by other packages.') ?>
    </p>
  </div>

  <div class="clearboth"></div>
</div>

<div class="group">
  <div class="module">
    <h3><a href="/projects/libxfce4"><?php E_('Xfce Libraries') ?></a></h3>
    <p style="background-image: url('/images/projects/library.png')">
      <?php E_('The three base libraries of Xfce (libxfce4util and libxfce4ui) are used by almost any Xfce application.') ?>
    </p>
  </div>

  <div class="module">
    <h3><a href="/projects/xfconf"><?php E_('Xfconf') ?></a></h3>
    <p style="background-image: url('/images/projects/library.png')">
      <?php E_('Simple client-server configuration storage and query system.') ?>
    </p>
  </div>

  <div class="clearboth"></div>
</div>

<div class="group">
  <div class="module">
    <h3><a href="/projects/thunar"><?php E_('Thunar Filemanager') ?></a></h3>
    <p style="background-image: url('/images/projects/thunar.png')">
      <?php E_('Thunar is a new modern file manager for the Xfce Desktop Environment. Thunar has been designed from the ground up to be fast and easy-to-use.') ?>
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

<h2 id="applications"><?php E_('Applications') ?></h2>

<div class="group">
  <div class="module">
    <h3><a href="/projects/mousepad"><?php E_('Mousepad') ?></a></h3>
    <p style="background-image: url('/images/projects/mousepad.png')">
      <?php E_('Mousepad is a text editor for Xfce based on Leafpad. The initial reason for Mousepad was to provide printing support, which would have been difficult for Leafpad for various reasons.') ?>
    </p>
  </div>

  <div class="module">
    <h3><a href="/projects/terminal"><?php E_('Terminal') ?></a></h3>
    <p style="background-image: url('/images/projects/terminal.png')">
      <?php E_('Terminal is a modern terminal emulator for the Unix/Linux desktop - primarly for the Xfce desktop environment.') ?>
    </p>
  </div>

  <div class="clearboth"></div>
</div>

<div class="group">
  <div class="module">
    <h3><a href="/projects/xfburn"><?php E_('Xfburn') ?></a></h3>
    <p style="background-image: url('/images/projects/xfburn.png')">
      <?php E_('Xfburn is a frontend burning application based on <a href="http://libburnia-project.org/">libburnia</a> libraries to create and burn CD\'s and DVD\'s.') ?>
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
      <?php E_('A modern sound mixer based on GStreamer.') ?>
    </p>
  </div>

  <div class="module">
    <h3><a href="/projects/ristretto"><?php E_('Image Viewer') ?></a></h3>
    <p style="background-image: url('/images/projects/ristretto.png')">
      <?php E_('Ristretto is a lightweight image viewer.<') ?>
    </p>
  </div>

  <div class="clearboth"></div>
</div>

<div class="group">
  <div class="module">
    <h3><a href="http://www.twotoasts.de/index.php?/pages/midori_summary.html"><?php E_('Web Browser') ?></a></h3>
    <p style="background-image: url('/images/projects/midori.png')">
      <?php E_('Midori is a lightweight web browser.') ?>
    </p>
  </div>

  <div class="clearboth"></div>
</div>
