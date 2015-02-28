<?php $head['title'] = R_('Xfce 4.12 tour'); ?>

<h1><?php echo $head['title'] ?></h1>

  <p><?php E_("This tour will introduce you to new major features of Xfce 4.12. It only covers the visual part of what has been done; for the full list of changes, see the <a href=\"/download/changelogs/\">changelogs</a>.") ?></p>

<h2><?php E_("Window Manager") ?> <em>(xfwm4)</em></h2>

  <h3><?php E_("Window Switcher Dialog") ?></h3>

<p><?php E_("The window manager's Alt+Tab dialog is now fully themeable and also gained two new modes: a list mode and a mode showing window previews. Furthermore users use their mouse to click/select the window they want to give focus to.") ?></p>

  <?php print_figure ("about/tour/4.12/tabwin-simple-crop.png", R_("The traditional dialog is fully themable now")) ?>

<p><?php E_("The list mode of the Alt-Tab dialog.") ?></p>

  <?php print_figure ("about/tour/4.12/tabwin-list-crop.png", R_("List mode of Alt-Tag")) ?>

<p><?php E_("The new mode shows previews of the window content alongside each respective app's icon. Activating the compositor is a prerequisite for this mode.") ?></p>

  <?php print_figure ("about/tour/4.12/tabwin-preview-crop.png", R_("Window thumbnails")) ?>

  <h3><?php E_("Tiling, Zooming, Client-side Decorations") ?></h3>

<p><?php E_("The support by the window manager for client side decorations was improved, so they are positioned and tile correctly.") ?></p>

  <?php print_figure ("about/tour/4.12/xfwm4-csd.png", R_("Gtk3 apps with their decorations drawn by the client")) ?>

<p><?php E_("Window tiling mode was improved providing support for corner-tiling, and a new zooming mode was added using Alt-mousewheel.") ?></p>

  <?php print_figure ("about/tour/4.12/xfwm4-tiling-small.png", R_("Drag and drop a window to a corner to tile it")) ?>

  <h3><?php E_("HiDPI Support") ?></h3>
<p><?php E_("In order to better support modern hi-resolution screens, two new Xfwm4 themes were added (hdpi, xhdpi).") ?></p>

<h2><?php E_("Panel") ?> <em>(xfce4-panel)</em></h2>

  <h3><?php E_("Intelligent Hiding") ?></h3>
<p><?php E_("The panel can now intelligently hide itself when a window is dragged near it.") ?></p>

  <?php print_figure ("about/tour/4.12/panel-shown.png", R_("Oh what is this window??")) ?>

  <?php print_figure ("about/tour/4.12/panel-shown-stack.png", R_("Don't come closer!")) ?>

  <?php print_figure ("about/tour/4.12/panel-hidden.png", R_("Hah! Now you don't see me!")) ?>

  <h3><?php E_("Gtk3 plugins") ?></h3>

<p><?php E_("Infrastructure was added to be able to load Gtk3 plugins alongside Gtk2 plugins.") ?></p>

<h2><?php E_("Desktop Manager") ?> <em> (xfdesktop)</em></h2>

<p><?php E_("The desktop has a new wallpaper settings dialog with many new options and better multi-monitor support. Drag the dialog to the display or workspace where you want to change the wallpaper.") ?></p>

  <?php print_figure ("about/tour/4.12/xfdesktop-properties-multiworkspace.png", R_("Better multi-monitor support")) ?>

<p><?php E_("Uncheck 'apply to all workspaces' to set a different wallpaper for each workspace.") ?></p>

<h2><?php E_("Settings") ?> <em>(xfce4-settings)</em></h2>

  <h3><?php E_("Display Settings") ?></h3>

<p><?php E_("Support for multi-monitor use was vastly improved in the display settings dialog. Upon connecting a new display, a quick setup popup offers some of the most-used modes for users to quickly change their layout.") ?></p>

  <?php print_figure ("about/tour/4.12/xfce4-display-settings-twoscreens.png", R_("Configure multiple displays")) ?>
  <?php print_figure ("about/tour/4.12/xfce4-display-layout.png", R_("Choose your layout when plugging in a new display")) ?>

  <h3><?php E_("Appearance Settings") ?></h3>

<p><?php E_("The appearance dialog now showcases previews for styles and icons.") ?></p>

  <?php print_figure ("about/tour/4.12/xfce4-appearance-settings-style.png", R_("Gtk style preview")) ?>

  <?php print_figure ("about/tour/4.12/xfce4-appearance-settings-icons.png", R_("Icon theme preview")) ?>

<h2><?php E_("Power Manager") ?> <em>(xfce4-power-manager)</em></h2>

  <h3><?php E_("Panel Plugin") ?></h3>

<p><?php E_("A new panel plugin was created which allows you to quickly control your screen brightness, either via the menu or by simply using your mouse's scrollwheel over the plugin. The plugin's menu also shows all other connected devices with a power status, e.g. bluetooth keyboards or wireless mice. Finally it also offers quick access to the presentation mode, which inhibits your screensaver for as long as the option is active.") ?></p>

  <?php print_figure ("about/tour/4.12/xfpm-plugin-crop.png", R_("The plugin's menu allows users to control screen brightness and check on the remaining uptime their battery provides.")) ?>

  <h3><?php E_("Settings Dialog") ?></h3>

<p><?php E_("The settings dialog was completely restructured and hopefully offers a clearer and userfriendlier way of setting your preferences.") ?></p>

  <?php print_figure ("about/tour/4.12/xfpm-prefs-general.png", R_("Configure what action to take when certain buttons are pressed or the laptop lid is closed")) ?>
  <?php print_figure ("about/tour/4.12/xfpm-prefs-system.png", R_("Configure what to do when the user is inactive or battery is drained")) ?>
  <?php print_figure ("about/tour/4.12/xfpm-prefs-display.png", R_("Manage display power management")) ?>
  <?php print_figure ("about/tour/4.12/xfpm-prefs-devices.png", R_("Display information on all connected devices")) ?>

<p><?php E_("When light-locker is available, you can control its settings directly via the power manager.") ?></p>

  <?php print_figure ("about/tour/4.12/xfpm-prefs-security.png", R_("Setup light-locker integration")) ?>
<h2><?php E_("File Manager") ?> <em>(thunar)</em></h2>

  <h3><?php E_("Tab Support") ?></h3>

<p><?php E_("A long-awaited feature was added with support for tabs.") ?></p>

  <?php print_figure ("about/tour/4.12/thunar-tabs.png", R_("Browse multiple directories")) ?>

<p><?php E_("Thunar now displays the remaining free space with a bar in a folder properties.") ?></p>

  <?php print_figure ("about/tour/4.12/thunar-freespace.png", R_("Freespace bar")) ?>

<p><?php E_("And you can select multiple files to see their properties at once.") ?></p>

  <?php print_figure ("about/tour/4.12/thunar-multifiles-props.png", R_("Multiple File Properties")) ?>

<h2><?php E_("Goodies") ?></h2>

<p><?php E_("There's been lots of improvements to various of our goodies, and some new and shiny applications have been added by new contributors.") ?></p>

<h3><?php E_("Alternative panel menu plugin") ?><em>(xfce4-whiskermenu)</em></h3>

<p><?php E_("The whisker menu is an alternative to the traditional menu plugin, showing favourites, allowing to search through existing apps and much more.") ?></p>

  <?php print_figure ("about/tour/4.12/whiskermenu-default.png", R_("Browse through categories")) ?>

  <?php print_figure ("about/tour/4.12/whiskermenu-search.png", R_("Search for an application")) ?>

<h3><?php E_("Task Manager") ?><em>(xfce4-taskmanager)</em></h3>

<p><?php E_("The task manager got a revamped user interface, a filter and also supports Gtk3 now.") ?></p>

  <?php print_figure ("about/tour/4.12/taskman-tree.png", R_("Show processes as a tree")) ?>

  <?php print_figure ("about/tour/4.12/taskman-filter.png", R_("Filter processes by name")) ?>

<h3><?php E_("Media Player") ?><em>(parole)</em></h3>

<p><?php E_("Parole's UI was totally redone in Gtk3, parts of it rewritten with many new features added.") ?></p>

  <?php print_figure ("about/tour/4.12/parole.png", R_("Watch videos")) ?>

  <?php print_figure ("about/tour/4.12/parole-audio.png", R_("Listen to music")) ?>

<h3><?php E_("Text Editor") ?><em>(mousepad)</em></h3>

<p><?php E_("Mousepad was totally rewritten, gained a settings dialog and now supports Gtk3.") ?></p>

  <?php print_figure ("about/tour/4.12/mousepad-prefs.png", R_("New mousepad settings")) ?>
