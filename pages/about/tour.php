<?php $head['title'] = R_('Xfce 4.14 tour'); ?>

<h1><?php echo $head['title'] ?></h1>

  <p><?php E_("This tour will introduce you to new major features of Xfce 4.14. It only covers improvements made on the surface; for the full list of changes, see the <a href=\"/download/changelogs/\">changelogs</a>.") ?></p>

<h2><?php E_("Settings Manager") ?> <em>(xfce4-settings)</em></h2>

  <h3><?php E_("Color Profiles Dialog") ?></h3>

<p><?php E_("A new dialog for setting color profiles for monitors, printers and scanners was introduced. It acts as a frontend to various daemons that talk directly to colord, e.g. saned (scanners), cupsd (printers) or xiccd (monitors).") ?></p>

  <?php print_figure ("about/tour/4.14/color-profiles.png", R_("The new color profiles dialog")) ?>

  <h3><?php E_("Display Dialog") ?></h3>

<p><?php E_("Several improvements were made to the display dialog. Apart from tweaks to the user interface to make the interaction more intuitive (introducing display numbering, showing a primary indicator with quick access to panel, notification and desktop settings etc.) a feature to save a restore complete display profiles was added. If a single profile exists for a setup, the Xfce settings daemon will automatically enable it. If multiple profiles exist, it will pop up the minimal dialog and offer all profiles in addition to the previously available pre-sets (internal only, mirror, extend and external only).") ?></p>

  <?php print_figure ("about/tour/4.14/display-general.png", R_("The primary indicator")) ?>
  <?php print_figure ("about/tour/4.14/display-advanced.png", R_("The display profile list")) ?>
  <?php print_figure ("about/tour/4.14/display-minimal.png", R_("The improved minimal dialog - in this case only showing one profile only which never happens anymore now ;)")) ?>

  <h3><?php E_("Accessibility") ?></h3>

<p><?php E_("One accessibility feature that people coming from other desktop environments or operating systems were still missing is to set a (custom) keyboard shortcut (by default: Super+F1) to visually locate the mouse pointer. This feature was added in Xfce 4.14.") ?></p>

  <?php print_figure ("about/tour/4.14/locate-mouse.gif", R_("The mouse pointer location animation")) ?>

  <h2><?php E_("Panel") ?> <em>(xfce4-panel)</em></h2>

  <h3><?php E_("General: Icon size") ?></h3>

<p><?php E_("A new feature that we introduced in the panel is being able to control the icon size of all plugins. ('All' may not be technically correct, as not all plugins support the new API as of now, but now they <i>can</i>. Plus the Window buttons plugin is an exception, because libwnck doesn't allow anything other than 16px or 32px.) This means setups that were previously impossible, because icons would upscale automatically according to size-steps hard-coded in the panel, are now possible (see below).") ?></p>

  <?php print_figure ("about/tour/4.14/panel-iconsize.png", R_("A 32px tall panel with 16px icons")) ?>

  <h3><?php E_("Window buttons: Grouping") ?></h3>

<p><?php E_("Grouping was improved in the Window buttons plugin, both functionally (by improving the matching and icon-finding) and visually by providing a new group indicator that is less likely to clash with window titles containing an enumeration in brackets.") ?></p>

  <?php print_figure ("about/tour/4.14/panel-group.png", R_("The new group indicator (two terminal windows)")) ?>

  <h2><?php E_("Session") ?> <em>(xfce4-session)</em></h2>

  <h3><?php E_("Settings Dialog") ?></h3>

<p><?php E_("As soon as a session has been saved a new tab is dynamically added to the settings dialog displaying all saved sessions and allowing to delete one or all of them. This should make it way more discoverable for users if they actually have saved sessions that influence the startup behavior - previously this had to be checked manually in the filesystem.") ?></p>

  <?php print_figure ("about/tour/4.14/session-saved.png", R_("The settings dialog after saving a session")) ?>

  <h2><?php E_("File Manager") ?> <em>(thunar)</em></h2>

  <h3><?php E_("Pathbar") ?></h3>

<p><?php E_("Up to Xfce 4.12 two options were available for the pathbar/locationbar. The best of both worlds has now been mixed into one powerful pathbar, featuring both clickable breadcrumbs (i.e. folders), an easily accessible way to hand-type a path as well as an improved look.") ?></p>

  <?php print_figure ("about/tour/4.14/thunar-pathbar.png", R_("Thunar's new pathbar")) ?>

  <h2><?php E_("Power Manager") ?> <em>(xfce4-power-manager)</em></h2>

  <h3><?php E_("Panel Plugin") ?></h3>

<p><?php E_("The panel plugin supports symbolic icons now and uses the standard UPower icon names (making it more compatible with all icon themes). It also shows an indicator if applications inhibit power management functions like suspend (when power is low) or display dimming (after a defined timeout).") ?></p>

  <?php print_figure ("about/tour/4.14/xfpm-inhibitors.png", R_("Parole's video playback is inhibiting power management")) ?>
