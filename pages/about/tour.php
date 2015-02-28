<?php $head['title'] = R_('Xfce 4.12 tour'); ?>

<h1><?php echo $head['title'] ?></h1>

  <p><?php E_("This tour will introduce you to new major features of Xfce 4.12. It only covers the visual part of what has been done; for the full list of changes, see the <a href=\"/download/changelogs/\">changelogs</a>.") ?></p>

<h2><?php E_("Window Manager") ?> <em>(xfwm4)</em></h2>

  <h3><?php E_("Window Switcher Dialog") ?></h3>

<p><?php E_("The window manager gained a new themable Alt+Tab dialog with optional windows preview and a list mode.") ?></p>

  <?php print_figure ("about/tour/4.12/tabwin-simple-crop.png", R_("Traditional dialog is fully themable")) ?>

<p><?php E_("Here, showing a drop-down list of windows.") ?></p>

  <?php print_figure ("about/tour/4.12/tabwin-list-crop.png", R_("List of window with titles")) ?>

<p><?php E_("Or displaying window previews in a grid. Here you can see minimized windows greyed out, the currently active window, and the to-be active window.") ?></p>

  <?php print_figure ("about/tour/4.12/tabwin-preview-crop.png", R_("Window thumbnails")) ?>

  <h3><?php E_("Tiling, Zooming, Client-side Decorations") ?></h3>

<p><?php E_("Initial Client side decoration support was implemented for better Gtk3 applications integration.") ?></p>

  <?php print_figure ("about/tour/4.12/xfwm4-csd.png", R_("Gtk3 apps now have their native decorations")) ?>

<p><?php E_("Window tiling mode was improved providing support for corner-tiling, and a new zooming mode was added using Alt-mousewheel.") ?></p>

  <?php print_figure ("about/tour/4.12/xfwm4-tiling-small.png", R_("Drop a window to a corner to tile it")) ?>

  <h3><?php E_("HiDPI Support") ?></h3>
<p><?php E_("To take advantage of modern screens, a HiDPI Xfwm theme was also added.") ?></p>

<h2><?php E_("Panel") ?> <em>(xfce4-panel)</em></h2>

  <h3><?php E_("Intelligent Hiding") ?></h3>
<p><?php E_("The panel can now intelligently hide itself when a window is dragged near it") ?></p>

  <?php print_figure ("about/tour/4.12/panel-shown.png", R_("Oh what is this window ??")) ?>

  <?php print_figure ("about/tour/4.12/panel-shown-stack.png", R_("Don't come closer !")) ?>

  <?php print_figure ("about/tour/4.12/panel-hidden.png", R_("Hah! Now you don't see me!")) ?>

  <h3><?php E_("Gtk3 plugins") ?></h3>

<p><?php E_("Infrastructure was added to be able to load Gtk3 plugins along Gtk2 plugins.") ?></p>

<h2><?php E_("Desktop Manager") ?> <em> (xfdesktop)</em></h2>

<p><?php E_("The desktop has a new wallpaper settings dialog and better multi-monitor handling. You just need to drag the dialog to the display where you want to change the wallpaper") ?></p>

  <?php print_figure ("about/tour/4.12/xfdesktop-properties-multiworkspace.png", R_("Better multi-monitor handling")) ?>

<p><?php E_("Uncheck 'apply to all workspaces' to have distinct wallpaper per workspace") ?></p>

<h2><?php E_("Settings") ?> <em>(xfce4-settings)</em></h2>

  <h3><?php E_("Multi-monitor Settings") ?></h3>

<p><?php E_("Support for multi-monitor use was improved in a new display settings dialog and a quick setup popup on monitor plugging") ?></p>

  <?php print_figure ("about/tour/4.12/xfce4-display-settings-twoscreens.png", R_("Configure multiple displays")) ?>
  <?php print_figure ("about/tour/4.12/xfce4-display-layout.png", R_("Choose display layout when plugging a monitor")) ?>

  <h3><?php E_("Appearance Settings") ?></h3>

<p><?php E_("The appearance dialog now showcases previews.") ?></p>

  <?php print_figure ("about/tour/4.12/xfce4-appearance-settings-style.png", R_("Gtk style preview")) ?>

  <?php print_figure ("about/tour/4.12/xfce4-appearance-settings-icons.png", R_("Icon theme preview")) ?>

<h2><?php E_("Power Manager") ?> <em>(xfce4-power-manager)</em></h2>

  <h3><?php E_("Panel Plugin") ?></h3>

<p><?php E_("A new panel plugin was created") ?></p>

  <?php print_figure ("about/tour/4.12/xfpm-plugin-crop.png", R_("Plugin allows to control brightness too")) ?>

  <h3><?php E_("Settings Dialog") ?></h3>

<p><?php E_("The Settings dialog was revamped.") ?></p>

  <?php print_figure ("about/tour/4.12/xfpm-prefs-devices.png", R_("Display power devices information")) ?>

  <?php print_figure ("about/tour/4.12/xfpm-prefs-general.png", R_("Configure what to do on button/lid actions")) ?>
  <?php print_figure ("about/tour/4.12/xfpm-prefs-system.png", R_("Configure what to do when the user is inactive or battery is drained")) ?>
  <?php print_figure ("about/tour/4.12/xfpm-prefs-display.png", R_("Manage display power management")) ?>

<p><?php E_("When light-locker is available, you can lock the screen when the system is suspended") ?></p>

  <?php print_figure ("about/tour/4.12/xfpm-prefs-security.png", R_("Setup light-locker integration")) ?>
<h2><?php E_("File Manager") ?> <em>(thunar)</em></h2>

  <h3><?php E_("Tab Support") ?></h3>

<p><?php E_("A long-awaited feature was added with tabs.") ?></p>

  <?php print_figure ("about/tour/4.12/thunar-tabs.png", R_("Browse multiple directories")) ?>

<p><?php E_("Thunar now displays the remaining free space with a bar in a folder properties.") ?></p>

  <?php print_figure ("about/tour/4.12/thunar-freespace.png", R_("Freespace bar")) ?>

<p><?php E_("And you can select multiple files to see their common properties.") ?></p>

  <?php print_figure ("about/tour/4.12/thunar-multifiles-props.png", R_("Multiple File Properties")) ?>

<h2><?php E_("Goodies") ?></h2>

<p><?php E_("There's been lots of improvements to various of our goodies, and new shiny applications.") ?></p>

<h3><?php E_("Alternative panel menu plugin") ?><em>(xfce4-whiskermenu)</em></h3>

<p><?php E_("This is an alternative to the traditional menu plugin, showing favourites, allowing to search through existing apps...") ?></p>

  <?php print_figure ("about/tour/4.12/whiskermenu-default.png", R_("Browse through categories")) ?>

  <?php print_figure ("about/tour/4.12/whiskermenu-search.png", R_("Search for an application")) ?>

<h3><?php E_("Task Manager") ?><em>(xfce4-taskmanager)</em></h3>

<p><?php E_("The task manager got a revamped user interface, and now supports Gtk3.") ?></p>

  <?php print_figure ("about/tour/4.12/taskman-tree.png", R_("Show processes as a tree")) ?>

  <?php print_figure ("about/tour/4.12/taskman-filter.png", R_("Filter processes by name")) ?>

<h3><?php E_("Media Player") ?><em>(parole)</em></h3>

<p><?php E_("Parole's UI was totally redone, parts of it rewritten with many features added.") ?></p>

  <?php print_figure ("about/tour/4.12/parole.png", R_("Watch videos")) ?>

  <?php print_figure ("about/tour/4.12/parole-audio.png", R_("Listen to music")) ?>

<h3><?php E_("Text Editor") ?><em>(mousepad)</em></h3>

<p><?php E_("Mousepad was totally rewritten and got an initial port to Gtk3") ?></p>

  <?php print_figure ("about/tour/4.12/mousepad-prefs.png", R_("New mousepad settings")) ?>
