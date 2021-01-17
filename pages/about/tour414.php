<?php $head['title'] = R_('Xfce 4.14 tour'); ?>

<h1><?php echo $head['title'] ?></h1>

  <p><?php E_("This tour will introduce you to new major features of Xfce 4.14. It only covers improvements made on the surface; for the full list of changes, see the <a href=\"/download/changelogs/\">changelogs</a>.") ?></p>

<h2><?php E_("Settings Manager") ?> <em>(xfce4-settings)</em></h2>

  <h3><?php E_("Color Profiles Dialog") ?></h3>

<p><?php E_("A new dialog for setting <a href='https://docs.xfce.org/xfce/xfce4-settings/4.14/color'>color profiles</a> for monitors, printers and scanners was introduced. It acts as a frontend to various daemons that talk directly to colord, e.g. saned (scanners), cupsd (printers) or xiccd (monitors).") ?></p>

  <?php print_figure ("about/tour/4.14/color-profiles.png", R_("The new color profiles dialog")) ?>

  <h3><?php E_("Display Dialog") ?></h3>

<p><?php E_("Several improvements were made to the <a href='https://docs.xfce.org/xfce/xfce4-settings/4.14/display'>display dialog</a>. Apart from tweaks to the user interface to make the interaction more intuitive (introducing display numbering, showing a primary indicator with quick access to panel, notification and desktop settings etc.) a feature to save a restore complete display profiles was added. If a single profile exists for a setup, the Xfce settings daemon will automatically enable it. If multiple profiles exist, it will pop up the minimal dialog and offer all profiles in addition to the previously available pre-sets (internal only, mirror, extend and external only).") ?></p>

  <?php print_figure ("about/tour/4.14/display-general.png", R_("The primary indicator")) ?>
  <?php print_figure ("about/tour/4.14/display-advanced.png", R_("The display profile list")) ?>
  <?php print_figure ("about/tour/4.14/display-minimal.png", R_("The improved minimal dialog - in this case only showing one profile only which never happens anymore now ;)")) ?>

  <h3><?php E_("Accessibility") ?></h3>

<p><?php E_("One <a href='https://docs.xfce.org/xfce/xfce4-settings/4.14/accessibility'>accessibility</a> feature that people coming from other desktop environments or operating systems were still missing is to set a (custom) keyboard shortcut (by default: Super+F1) to visually locate the mouse pointer. This feature was added in Xfce 4.14.") ?></p>

  <?php print_figure ("about/tour/4.14/locate-mouse.gif", R_("The mouse pointer location animation")) ?>

  <h2><?php E_("Panel") ?> <em>(xfce4-panel)</em></h2>

  <h3><?php E_("General: Icon size") ?></h3>

<p><?php E_("A new feature that we introduced in the <a href='https://docs.xfce.org/xfce/xfce4-panel/4.14/start'>panel</a> is being able to control the icon size of all plugins. ('All' may not be technically correct, as not all plugins support the new API as of now, but now they <i>can</i>. Plus the Window buttons plugin is an exception, because libwnck doesn't allow anything other than 16px or 32px.) This means setups that were previously impossible, because icons would upscale automatically according to size-steps hard-coded in the panel, are now possible (see below).") ?></p>

  <?php print_figure ("about/tour/4.14/panel-iconsize.png", R_("A 32px tall panel with 16px icons")) ?>

  <h3><?php E_("Window buttons: Grouping") ?></h3>

<p><?php E_("Grouping was improved in the <a href='https://docs.xfce.org/xfce/xfce4-panel/4.14/tasklist'>Window buttons plugin</a>, both functionally (by improving the matching and icon-finding) and visually by providing a new group indicator that is less likely to clash with window titles containing an enumeration in brackets.") ?></p>

  <?php print_figure ("about/tour/4.14/panel-group.png", R_("The new group indicator (two terminal windows)")) ?>

  <h2><?php E_("Session") ?> <em>(xfce4-session)</em></h2>

  <h3><?php E_("Settings Dialog") ?></h3>

<p><?php E_("As soon as a <a href='https://docs.xfce.org/xfce/xfce4-session/4.14/preferences'>session</a> has been saved a new tab is dynamically added to the settings dialog displaying all saved sessions and allowing to delete one or all of them. This should make it way more discoverable for users if they actually have saved sessions that influence the startup behavior - previously this had to be checked manually in the filesystem.") ?></p>

  <?php print_figure ("about/tour/4.14/session-saved.png", R_("The settings dialog after saving a session")) ?>

  <h2><?php E_("File Manager") ?> <em>(thunar)</em></h2>

  <h3><?php E_("Pathbar") ?></h3>

<p><?php E_("Up to Xfce 4.12 <a href='https://docs.xfce.org/xfce/thunar/4.14/start'>Thunar</a> offered two options for the pathbar/locationbar. The best of both worlds has now been mixed into one powerful pathbar, featuring both clickable breadcrumbs (i.e. folders), an easily accessible way to hand-type a path as well as an improved look.") ?></p>

  <?php print_figure ("about/tour/4.14/thunar-pathbar.png", R_("Thunar's new pathbar")) ?>

  <h3><?php E_("Folder Thumbnailer") ?></h3>

<p><?php E_("Same as on the Desktop you can now save an image with the name 'folder.jpg' in a folder and get it displayed as its icon in the File Manager. Note: <a href='https://docs.xfce.org/xfce/tumbler/available_plugins#customized_thumbnailer_for_folders'>Please read the docs</a> on how to set this up (if your distribution hasn't enabled it by default).") ?></p>

  <?php print_figure ("about/tour/4.14/thunar-folder-jpg.png", R_("Thunar's new folder thumbnails")) ?>

  <h2><?php E_("Power Manager") ?> <em>(xfce4-power-manager)</em></h2>

  <h3><?php E_("Panel Plugin") ?></h3>

<p><?php E_("The <a href='https://docs.xfce.org/xfce/xfce4-power-manager/4.14/panel-plugin'>Power Manager's panel plugin</a> supports symbolic icons now and uses the standard UPower icon names (making it more compatible with all icon themes). It also shows an indicator if applications inhibit power management functions like suspend (when power is low) or display dimming (after a defined timeout).") ?></p>

  <?php print_figure ("about/tour/4.14/xfpm-inhibitors.png", R_("Parole's video playback is inhibiting power management")) ?>

  <h2><?php E_("Notification Service") ?> <em>(xfce4-notifyd)</em></h2>

  <h3><?php E_("Settings") ?></h3>

<p><?php E_("Several new features have been added in Xfce's <a href='https://docs.xfce.org/apps/notifyd/start'>Notification service</a>, including a notifications log, the possibility to disable notifications per application, a global 'Do Not Disturb' mode, which inhibits all notifications, and finally a new animation ('slide out').") ?></p>

  <?php print_figure ("about/tour/4.14/notifyd-slideout.gif", R_("The new notification animation 'slide out'")) ?>

  <h3><?php E_("Panel Plugin") ?></h3>

<p><?php E_("Furthermore a new panel plugin was added which provides quick access to both the 'Do Not Disturb' mode as well as the log of recent notifications.") ?></p>

  <?php print_figure ("about/tour/4.14/notifyd-panel.png", R_("The new panel plugin")) ?>

  <h2><?php E_("Media Player") ?> <em>(parole)</em></h2>

  <h3><?php E_("Mini Mode") ?></h3>

<p><?php E_("<a href='https://docs.xfce.org/apps/parole/start'>Parole</a> now features a 'Mini Mode', where the interface is simplified to just display the album artwork and can be positioned over other windows without getting in the way.") ?>

  <?php print_figure ("about/tour/4.14/parole-normal-mode.png", R_("Just right-click anywhere in the player window to select 'Mini Mode'...")) ?>

  <?php print_figure ("about/tour/4.14/parole-mini-mode.png", R_("Afterwards, enjoy a truly minimalistic playback experience!")) ?>

  <h2><?php E_("Screensaver") ?> <em>(xfce4-screensaver)</em></h2>

  <h3><?php E_("A Modern Locking Experience") ?></h3>

<p><?php E_("The new Xfce <a href='https://docs.xfce.org/apps/screensaver/start'>Screensaver</a> provides a configurable lockscreen experience. You can selectively toggle the lock screen and screensaver, and all Xscreensaver themes are supported (with configuration options) out of the box. If you prefer a blank screen, Xfce Screensaver also includes a blank screen option with DPMS integration."); ?></p>

  <?php print_figure ("about/tour/4.14/saver-dialog.png", R_("The new lock screen, sharing styles with LightDM GTK+ Greeter for a consistent experience.")) ?>
  <?php print_figure ("about/tour/4.14/saver-preferences.png", R_("Make it your own. Xfce Screensaver supports a multitude of configuration options.")) ?>

  <h2><?php E_("Terminal") ?> <em>(xfce4-terminal)</em></h2>

<p><?php E_("Lots and lots of features have accumulated in the <a href='https://docs.xfce.org/apps/terminal/start'>Terminal</a> over the last years. Amongst them 'Undo Close Tab' and 'Close Other Tabs' functionality (similar to web browsers), 'Copy Input to All Tabs', 'Set Title Color' (allows to customize tab text color), 'Save Contents' (saves tab contents to a file), an 'Unsafe Paste' dialog (which prevents the terminal from auto-executing pasted text as a command) and support for zooming. Finally when closing a tab or window, there is a new check for running processes which prevents accidentally closing a terminal that is running a process."); ?></p>

  <?php print_figure ("about/tour/4.14/terminal.png", R_("Zooming, 'Save Contents' and much more!")) ?>

  <h2><?php E_("Screenshooter") ?> <em>(xfce4-screenshooter)</em></h2>

<p><?php E_("The Xfce <a href='https://docs.xfce.org/apps/screenshooter/start'>Screenshooter</a> gained several notable features, amongst others seeing the size of the screenshot while dragging, moving the selection with the mouse and better <a href='https://imgur.com'>imgur</a> integration."); ?></p>

  <?php print_figure ("about/tour/4.14/screenshooter.gif", R_("I can drag and move the screenshot area, whoop whoop!")) ?>
