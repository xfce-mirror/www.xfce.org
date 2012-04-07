<?php $head['title'] = R_('Xfce 4.6 tour') ?>

<h1><?php echo $head['title'] ?></h1>

<p>
  <?php E_('The long awaited 4.6.0 version of the Xfce Desktop Environment is finally available. We will try to highlight some of the new features which have been added since the last stable release.') ?>
</p>

<h2><?php E_('Improved desktop experience with Xfdesktop') ?></h2>

<p>
  <?php E_('Since desktop icons have been introduced in Xfce 4.4, people have expressed the need to allow the selection of multiple icons (rubber banding). With <b>Xfce 4.6</b>, the <b>Xfdesktop</b> manager finally implements this feature: you can select multiple icons, remove them, etcetera...') ?>
</p>

<p class="image">
  <img src="http://cdn.xfce.org/about/tour/4.6/xfdesktop-rubberbanding.png" title="<?php E_('Multiple icons selection') ?>" alt="" />
</p>

<p>
  <?php E_('<b>Xfce 4.6</b> features a brand new desktop menu which allows you to manipulate files as with the <b>Thunar</b> filemanager contextual menu, but also to open applications, exit your session, or access the help documentation.') ?>
</p>

<p class="image"><img src="http://cdn.xfce.org/about/tour/4.6/xfdesktop-menu.png" title="<?php E_('New desktop menu') ?>" alt="" /></p>

<h2><?php E_('Panel') ?></h2>

<p>
  <?php E_('A lot of long standing bugs have been fixed in <b>Xfce4 Panel</b>, particularly for multiple screen setups, but this new release also brings an improved set of panel plugins.') ?>
</p>

<p class="image">
  <img src="http://cdn.xfce.org/about/tour/4.6/xfce4-panel-clock.png" title="<?php E_('New binary clock') ?>" alt="" />
</p>

<p>
  <?php E_('The <b>clock plugin</b> has been rewritten to consume fewer system resources and to fix some display bugs, but there is also a new clock mode for the geek in you: binary clock! The new <b>notification area plugin</b> allows you to hide selected notification icons to keep your notification area clean and readable.') ?>
</p>

<h2><?php E_('New sound mixer') ?></h2>

<p>
<?php E_('<b>Xfce4 Mixer</b> has been rewritten from scratch to use <a href="http://www.gstreamer.net/">Gstreamer</a>. This allows us to more easily support multiple sound systems, the user interface is more polished, and you can manage several different sound cards. Additionally, a panel plugin allows you to set the system sound quickly using the mouse scroll wheel.') ?>
</p>

<p class="image">
  <img src="http://cdn.xfce.org/about/tour/4.6/xfce4-mixer.png" title="<?php E_('New sound mixer') ?>" alt="" />
</p>

<h2><?php E_('Improved session manager') ?></h2>

<p>
  <?php E_('<b>Xfce 4.6</b> comes with an enhanced session manager: your session should be started faster, and the settings dialog has been reworked to ease the management of session-aware applications.  Additionally, the session manager will now automatically restart session applications which crashed so that you are not left without a desktop, panel, window manager, etcetera, if a crash occurs. ') ?>
</p>

<p class="image">
  <img src="http://cdn.xfce.org/about/tour/4.6/xfce4-session-settings.png" title="<?php E_('Session settings dialog') ?>" alt="" />
</p>

<p>
  <?php E_('The session manager also includes a new long-awaited feature: support for <b>suspend</b> and <b>hibernate</b> "out of the box."  The logout dialog now has two additional buttons which offer to suspend or hibernate your computer.') ?>
</p>

<p class="image">
  <img src="http://cdn.xfce.org/about/tour/4.6/xfce4-session-logout.png" title="<?php E_('Session logout dialog') ?>" alt="" />
</p>

<h2><?php E_('Window manager') ?></h2>

<p>
  <?php E_('As usual, <b>Xfwm4</b> has matured quite a bit during this release cycle: many bugs have been fixed, support for multiple displays has been added, and overall performance has been improved.') ?>
</p>

<p><?php E_('In addition to some other new features, <b>Xfwm4</b> is now able to detect windows that do not respond and offer to terminate them.') ?>
</p>

<p class="image">
  <img src="http://cdn.xfce.org/about/tour/4.6/xfwm4-net-ping.png" title="<?php E_('Dialog to terminate busy applications') ?>" alt="" />
</p>

<p>
  <?php E_('There is also a new <b>actions menu</b> which allows you to quickly move and resize windows, put them above or below other windows, or fullscreen them.') ?>
</p>

<p class="image">
  <img src="http://cdn.xfce.org/about/tour/4.6/xfwm4-new-menu.png" title="<?php E_('New actions menu') ?>" alt="" />
</p>

<p>
  <?php E_('A new <b>fill</b> operation has been implemented; it expands a given window to the available space without overlapping other adjacent windows.') ?>
</p>

<p class="image">
  <img src="http://cdn.xfce.org/about/tour/4.6/xfwm4-fill-operation.png" title="<?php E_('Fill operation') ?>" alt="" />
</p>

<p>
  <?php E_('The <b>compositor</b> has been optimized to reduce window flickering duringresize operations.') ?>
</p>

<p class="image">
  <img src="http://cdn.xfce.org/about/tour/4.6/xfwm4-resize.png" title="<?php E_('Flicker free resizing') ?>" alt="" />
</p>

<p>
  <?php E_('Some <b>tweakable options</b> have also been added: for example, you can now disable the blinking of windows when they receive an urgency hint.') ?>
</p>

<p class="image">
  <img src="http://cdn.xfce.org/about/tour/4.6/xfwm4-new-tweaks.png" title="<?php E_('New tweakable options') ?>" alt="" />
</p>

<h2><?php E_('File manager') ?></h2>

<p>
  <?php E_('There have been many bug fixes and performance improvements in <b>Thunar</b>. It can use the mouse forward and backward buttons (if available) to navigate, and it includes a new plugin that allows you to set an image as wallpaper from the context menu.') ?>
</p>

<p class="image">
  <img src="http://cdn.xfce.org/about/tour/4.6/thunar-wallpaper-plugin.png" title="Set an image in a Thunar folder as wallpaper" alt="" />
</p>

<p>
  <?php E_('<b>Thunar</b> now follows the <a href="http://freedesktop.org/wiki/Software/xdg-user-dirs"> XDG user directories</a> specification; this allows you to have themed and localized user folders to store your music, documents, videos, templates, etcetera...') ?>
</p>

<p class="image">
  <img src="http://cdn.xfce.org/about/tour/4.6/thunar-xdg-user-dirs.png" title="<?php E_('Thunar menu for user directories') ?>" alt="" />
</p>

<p>
  <?php E_('<b>Thunar</b> will now display a translucent icon for drives or volumes that are not mounted, so that you can distinguish them from the mounted ones.') ?>
</p>

<p class="image">
  <img src="http://cdn.xfce.org/about/tour/4.6/thunar-mounting.png" title="<?php E_('Translucent icons for unmounted drives and volumes') ?>" alt="" />
</p>

<p>
  <?php E_('Last, but not least, <b>Thunar</b> now supports encrypted devices!') ?>
</p>

<p class="image">
  <img src="http://cdn.xfce.org/about/tour/4.6/thunar-encrypted.png" title="<?php E_('Thunar support for encrypted devices') ?>" alt="" />
</p>

<h2><?php E_('New configuration dialogs') ?></h2>

<p>
  <?php E_('Xfce 4.6 features a new settings interface, <b>Xfce Settings Manager</b>, which allows you to configure your desktop environment much more easily than before. The dialogs which are accessible by single clicking on the icons have been designed to be more compact and to allow you to customize your desktop quickly and in a more intuitive way.') ?>
</p>

<p class="image">
  <img src="http://cdn.xfce.org/about/tour/4.6/xfce4-settings-manager.png" title="<?php E_('Xfce4 Settings Manager') ?>" alt="" />
</p>

<h3><?php E_('Accessibility settings') ?></h3>

<p class="image">
  <img src="http://cdn.xfce.org/about/tour/4.6/xfce4-accessibility-settings.png" title="<?php E_('Accessibility settings dialog') ?>" alt="" />
</p>

<p>
  <?php E_('The <b>Accessibility settings</b> dialog allows you to set the accessibility related mouse and keyboard options, such as sticky keys, bounce keys, or mouse emulation.') ?>
</p>

<h3><?php E_('Appearance settings') ?></h3>

<p class="image">
  <img src="http://cdn.xfce.org/about/tour/4.6/xfce4-appearance-settings.png" title="<?php E_('Appearance settings dialog') ?>" alt="" />
</p>

<p>
  <?php E_('The <b>Appearance settings</b> dialog allows you to set the widget style, the icon theme, and font, toolbar and menu options.') ?>
</p>

<h3><?php E_('Display settings') ?></h3>
<p class="image">
  <img src="http://cdn.xfce.org/about/tour/4.6/xfce4-display-settings.png" title="<?php E_('Display settings dialog') ?>" alt="" />
</p>

<p>
  <?php E_('The <b>Display settings</b> dialog allows you to set the resolution, refresh rate, and the rotation for each screen that is connected.') ?>
</p>

<h3><?php E_('Keyboard settings') ?></h3>

<p class="image">
  <img src="http://cdn.xfce.org/about/tour/4.6/xfce4-keyboard-settings-layout.png" title="<?php E_('Keyboard settings dialog, layout tab') ?>" alt="" />
</p>

<p>
  <?php E_('The <b>Keyboard settings</b> dialog allows you to set keyboard preferences such as key repeating, keyboard shortcuts, and your keyboard layout.') ?>
</p>

<p class="image">
  <img src="http://cdn.xfce.org/about/tour/4.6/xfce4-keyboard-settings-shortcuts.png" title="<?php E_('Keyboard settings dialog, shortcuts tab') ?>" alt="" />
</p>

<p>
  <?php E_('You can now configure shortcuts more simply, and any shortcut conflicts are automatically detected.') ?>
</p>

<h3><?php E_('Mouse settings') ?></h3>

<p class="image">
  <img src="http://cdn.xfce.org/about/tour/4.6/xfce4-mouse-settings.png" title="<?php E_('Mouse settings dialog') ?>" alt="" />
</p>

<p>
  <?php E_('The <b>Mouse settings</b> dialog allows you to configure the different mice connected to your computer: button order, acceleration, double-click speed, mouse cursor theme, etcetera...') ?>
</p>

<h3><?php E_('Desktop settings') ?></h3>

<p class="image">
  <img src="http://cdn.xfce.org/about/tour/4.6/xfdesktop-settings.png" title="<?php E_('Desktop settings dialog') ?>" alt="" />
</p>

<p>
  <?php E_('The <b>Desktop settings</b> dialog is now much more compact; it allows you to configure per-screen settings: wallpaper, brightness, desktop menu, displayed icons, etcetera...') ?>
</p>

<h2><?php E_('New Application finder') ?></h2>

<p>
  <?php E_('<b>Xfce 4.6</b> also comes with a brand new application finder which features a cleaner user interface.  It is also easier to use it with the keyboard, and it monitors installed applications to update the list "on the fly."  It also allows you to create panel launchers quickly by dragging an application icon to the launcher creation window.') ?>
</p>

<p class="image">
  <img src="http://cdn.xfce.org/about/tour/4.6/xfce4-appfinder.png" title="<?php E_('New application finder') ?>" alt="" />
</p>

<h2><?php E_('Links') ?></h2>

<ul>
  <li><a href="http://www.xfce.org/"><?php E_('Xfce website') ?></a></li>
  <li><a href="http://www.xfce.org/projects/thunar"><?php E_('Thunar website') ?></a></li>
</ul>

<h2><?php E_('Credits') ?></h2>

<ul>
  <li><?php E_('Written by Jérôme Guelfucci (February 2009)') ?></li>
  <li><?php E_('Screenshots by Jannis Pohlmann') ?></li>
</ul>
