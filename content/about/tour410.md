---
title: "Xfce 4.10 tour"
layout: "tour"
hasToc: true
---

This tour will introduce you to new major features of Xfce 4.10. It only covers the visual part of what has been done; for the full list of changes, see the [changelogs](/download/changelogs/).

## Online Documentation

During the 4.10 development we've decided to remove user manuals from the packages and move them to an online wiki at [docs.xfce.org](https://docs.xfce.org). The reason for this change is to make [contributing](https://docs.xfce.org/wiki/documentation) and updating the documentation easier.

![When you click a Help button Xfce will ask you to go to an online wiki page][img-online-help]

We hope that with the introduction of the wiki it will be easier for developers and contributors to maintain the documentation.

## Application Finder *(xfce4-appfinder)*

![Collapsed view of the Application Finder][img-appfinder-collapsed]

The application finder has been completely rewritten and combines the functionality of the old appfinder and xfrun4. Apart from user interface improvements, it now allows creating custom actions matching a prefix or a regex pattern.

![Expanded view of the Application Finder][img-appfinder-expanded]

## Panel *(xfce4-panel)*

### Multiple Rows

In 4.10 there is a single panel-wide option for configuring the number of rows in the panel. Some plugins (e.g. *launchers*) fit a single row, while others, like window buttons are allowed to occupy full width of the panel.

![A horizontal panel with a number of rows set to three][img-panel-rows]

### Deskbar Mode

The panel features a new configuration called a *deskbar* mode. In the deskbar mode the panel is aligned vertically, just like in the vertical mode, but the plugins are laid out horizontally. With multiple rows, it allows creating wide vertical panels suitable for wide-screen setups.

![A panel in Deskbar mode with a number of rows set to five][img-panel-deskbar]

### Actions Plugin

Session plugin from the xfce4-session package has been merged with a rewritten *actions* plugin

![Action plugin in a menu mode (left), and in a button mode (right)][img-panel-actions]

### Window Buttons

The *window buttons* plugin no longer expands, which makes the plugin positioning more flexible. In order to restore the previous behavior please add a transparent *separator* plugin with the **Expand** option enabled just behind the window buttons plugin.

## File Manager *(thunar)*

There are few visual changes in this release of Thunar. The window has less padding and the position of the status bar has been adjusted.

## Session Manager *(xfce4-session)*

The *session manager*'s settings dialog has a button for clearing the saved session (no more `rm -r ~/.config/sessions`). Xfce4-tips has been removed and the session manager can now lock the screen before suspending or hibernating the system.

### Applications Autostart

Another noticeable change is the way GNOME and KDE compatibility works. Compatibility check boxes only enable services, which have to be started before other applications (*gnome-keyring* and *gconf* for GNOME and *kdeinit* for KDE). All other autostart applications are available from **Applications Autostart**, but they are listed using an italic font and not enabled by default in order to distinguish them from Xfce applications. Unlike in previous versions of Xfce, compatibility services can be started independently from each other.

![Applications, which are not a part of Xfce, are listed using an italic font][img-session-autostart]

## Settings *(xfce4-settings)*

### Settings Daemon

Xfce 4.8 used two processes for applying settings: `xfce4-settings-helper` and `xfsettingsd`. In 4.10 they have been merged into xfsettingsd, which now handles all system settings.

### Settings Manager

The new *settings manager* groups configuration dialogs in categories and allows you to search for their names or descriptions. Most of the dialogs are also now embedded in the settings manager window (this was a compile-time option in Xfce 4.8).

![The settings manager with icons grouped by category and a search filter applied][img-settings-manager]

### Settings Editor

The *settings editor* no longer collapses the entire tree when you edit a property (this is because it now reloads a single cell rather than the whole tree). Most properties can now be edited in-place, making it easier to quickly adjust settings.

Using settings editor you can also monitor changes of settings in a selected channel. Right-click on a channel in the main window, and select **Monitor** to display the monitor window.

![Settings editor with an open channel monitor, while editing a property in-place][img-settings-editor]

### MIME Type Editor

In the last couple of years, many people were asking for a tool to manage their file type associations. The new *MIME type editor* does just that. It allows you to easily assign a default application to a file type, see your changes and reset them to default settings when necessary. Note that it does not allow you to change the system MIME Type definitions (add or remove types and change icons).

![MIME types matching a pattern and a menu for selecting a default application][img-settings-mime]

### Mouse and Touchpad

The *mouse and touchpad* dialog is capable of handling basic Synaptics and Wacom properties in the GUI. A settings daemon running in the background handles all kinds of device properties, as documented in the [mouse settings](https://docs.xfce.org/xfce/xfce4-settings/mouse) wiki.

![Synaptics touchpad settings in the mouse and touchpad dialog][img-settings-mouse]

### Appearance Settings

In 4.10 you can drag and drop a tarball with a downloaded theme onto the *style* or *icon* list. Xfce will attempt to extract and install the files into the `~/.themes` or `~/.icons` directory.

## Desktop Manager *(xfdesktop)*

Although the initial plan for Xfce 4.10 was to integrate desktop handling in Thunar, we have decided not to do it at this time yet. Meanwhile, Xfdesktop has gained support for single-click operation, automated background image cycling and thumbnail rendering.

![Desktop with image thumbnails and support for single-click operation][img-xfdesktop]

Xfdesktop is now shipped with a new default background image.

## Window Manager *(xfwm4)*

Xfwm4 can now tile a window when you drag it to the edge of the screen. This feature is optional and is disabled by default. In such a case windows can still be tiled using a keyboard shortcut. Another improvement is a better theming support and cursor key navigation in the tab window (Alt+Tab).

[img-online-help]: //cdn.xfce.org/about/tour/4.10/online-help.png
[img-appfinder-collapsed]: //cdn.xfce.org/about/tour/4.10/appfinder-collapsed.png
[img-appfinder-expanded]: //cdn.xfce.org/about/tour/4.10/appfinder-expanded.png
[img-panel-rows]: //cdn.xfce.org/about/tour/4.10/panel-rows.png
[img-panel-deskbar]: //cdn.xfce.org/about/tour/4.10/panel-deskbar.png
[img-panel-actions]: //cdn.xfce.org/about/tour/4.10/panel-actions.png
[img-session-autostart]: //cdn.xfce.org/about/tour/4.10/session-autostart.png
[img-settings-manager]: //cdn.xfce.org/about/tour/4.10/settings-manager.png
[img-settings-editor]: //cdn.xfce.org/about/tour/4.10/settings-editor.png
[img-settings-mime]: //cdn.xfce.org/about/tour/4.10/settings-mime.png
[img-settings-mouse]: //cdn.xfce.org/about/tour/4.10/settings-mouse.png
[img-xfdesktop]: //cdn.xfce.org/about/tour/4.10/xfdesktop.png
