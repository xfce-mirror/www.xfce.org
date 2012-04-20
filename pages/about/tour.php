<?php $head['title'] = R_('Tour') ?>

<h1><?php echo $head['title'] ?></h1>

  <p><?php E_("This tour will introduce you to all the new major visual features in Xfce 4.10. This is only the visual part of what has been done; for a full list of changes, see the <a href=\"/download/changelogs/\">changelogs</a>.") ?></p>

<h2><?php E_("Online Documentation") ?></h2>

  <p><?php E_("During the 4.10 development we've decided to remove the user manuals from the packages and move all manuals in an online wiki at <a href=\"http://docs.xfce.org\">docs.xfce.org</a>. Reason for this change that there was hardly any documentation contributed after the Xfce 4.6 release and a lot of pages were outdated or missing.") ?></p>

  <p><?php E_("We hope that with the introduction of a wiki it will be easier for contributers to help maintaining the docs and of course for developers it is easier as well.") ?></p>

<h2><?php E_("Application Finder") ?> <em>(xfce4-appfinder)</em></h2>

  <p><?php E_("The application finder has been completely rewritten and merges the functionality of the old appfinder and xfrun4. It also allows to create custom actions that match a prefix or a regex pattern.") ?></p>

<h2><?php E_("Panel") ?> <em>(xfce4-panel)</em></h2>

  <h3><?php E_("Rows") ?></h3>

    <p><?php E_("In 4.10 there is a general setting to configure the number of rows of a panel. Rows are used to keep some plugins small (Launchers) and give other plugins more space (like the Window Buttons).") ?></p>

  <h3><?php E_("Deskbar Mode") ?></h3>

    <p><?php E_("The panel features a new display mode called Deskbar. In Deskbar mode the panel is aligned vertical, but the orientation of the plugins is horizontal. In combination with the new rows setting, this allows to create panels that are suitable for wide-screen setups.") ?></p>

  <h3><?php E_("Actions Plugin") ?></h3>

    <p><?php E_("This plugin have been rewritten and merges the functionality of the session plugin that was previously shipped with the xfce4-session package.") ?></p>

  <h3><?php E_("Window Buttons") ?></h3>

    <p><?php E_("The Window Buttons plugin does not expand anymore to gives users more freedom with positioning the plugin. Use a separator plugin with Expand enabled to align plugins on the panel.") ?></p>

<h2><?php E_("File Manager") ?> <em>(thunar)</em></h2>

  <p><?php E_("Visually not much changed in Thunar this release. The main window has been enhanced a bit to reduce padding and improve the position of the status bar.") ?></p>

<h2><?php E_("Session Manager") ?> <em>(xfce4-session)</em></h2>

  <p><?php E_("The session manager has a button in the settings dialog to clear the saved session session (no more <tt>rm -r ~/.config/sessions</tt>). It also has an option to lock the screen before suspending or hibernating the system.") ?></p>

  <h3><?php E_("Applications Autostart") ?></h3>

    <p><?php E_("Another noticeable change is the way GNOME and KDE compatibility work. The compatibility check boxes only enable the services that need to be started before other applications (<em>gnome-keyring</em> and <em>gconf</em> for GNOME and <em>kdeinit</em> for KDE). All other autostart applications are always visible in the <strong>Applications Autostart</strong>, but listed cursive and not enabled by default if they are for a non-Xfce desktop.") ?></p>

<h2><?php E_("Settings") ?> <em>(xfce4-settings)</em></h2>

  <h3><?php E_("Settings Manager") ?></h3>

    <p><?php E_("The Settings dialog has support for categories and searching. Most of the dialogs are also embedded in the window (this was a compile-time option in 4.8).") ?></p>

  <h3><?php E_("Settings Editor") ?></h3>

    <p><?php E_("The Settings Editor has been modified to reload the changed properties per-cell instead of reloading the entire tree, so it does not collapse when you modify a property. It also has in-line editing of the values (for most value types), making it easier to quickly adjust a setting.") ?></p>

    <p><?php E_("Another new feature in the settings editor is channel monitoring. If you right-click a channel in the main window, you can open a <strong>Monitor</strong> dialog which will show the property activity in a channel.") ?></p>

  <h3><?php E_("MIME Type-editor") ?></h3>

    <p><?php E_("") ?></p>

  <h3><?php E_("Mouse and Touchpad") ?></h3>

    <p><?php E_("") ?></p>

<h2><?php E_("Desktop Manager") ?> <em> (xfdesktop)</em></h2>

  <p><?php E_("") ?></p>

<h2><?php E_("Window Manager") ?> <em>(xfwm4)</em></h2>

  <p><?php E_("") ?></p>
