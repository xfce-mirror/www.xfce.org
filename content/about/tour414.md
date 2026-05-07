---
title: "Xfce 4.14 tour"
layout: "tour"
hasToc: true
---

This tour will introduce you to new major features of Xfce 4.14. It only covers improvements made on the surface; for the full list of changes, see the [changelogs](/download/changelogs/).

## Settings Manager *(xfce4-settings)*

### Color Profiles Dialog

A new dialog for setting [color profiles](https://docs.xfce.org/xfce/xfce4-settings/4.14/color) for monitors, printers and scanners was introduced. It acts as a frontend to various daemons that talk directly to colord, e.g. saned (scanners), cupsd (printers) or xiccd (monitors).

![The new color profiles dialog][img-color-profiles]

### Display Dialog

Several improvements were made to the [display dialog](https://docs.xfce.org/xfce/xfce4-settings/4.14/display). Apart from tweaks to the user interface to make the interaction more intuitive (introducing display numbering, showing a primary indicator with quick access to panel, notification and desktop settings etc.) a feature to save and restore complete display profiles was added. If a single profile exists for a setup, the Xfce settings daemon will automatically enable it. If multiple profiles exist, it will pop up the minimal dialog and offer all profiles in addition to the previously available pre-sets (internal only, mirror, extend and external only).

![The primary indicator][img-display-general]

![The display profile list][img-display-advanced]

![The improved minimal dialog - in this case only showing one profile only which never happens anymore now ;)][img-display-minimal]

### Accessibility

One [accessibility](https://docs.xfce.org/xfce/xfce4-settings/4.14/accessibility) feature that people coming from other desktop environments or operating systems were still missing is to set a (custom) keyboard shortcut (by default: Super+F1) to visually locate the mouse pointer. This feature was added in Xfce 4.14.

![The mouse pointer location animation][img-locate-mouse]

## Panel *(xfce4-panel)*

### General: Icon size

A new feature that we introduced in the [panel](https://docs.xfce.org/xfce/xfce4-panel/4.14/start) is being able to control the icon size of all plugins. ('All' may not be technically correct, as not all plugins support the new API as of now, but now they *can*. Plus the Window buttons plugin is an exception, because libwnck doesn't allow anything other than 16px or 32px.) This means setups that were previously impossible, because icons would upscale automatically according to size-steps hard-coded in the panel, are now possible (see below).

![A 32px tall panel with 16px icons][img-panel-iconsize]

### Window buttons: Grouping

Grouping was improved in the [Window buttons plugin](https://docs.xfce.org/xfce/xfce4-panel/4.14/tasklist), both functionally (by improving the matching and icon-finding) and visually by providing a new group indicator that is less likely to clash with window titles containing an enumeration in brackets.

![The new group indicator (two terminal windows)][img-panel-group]

## Session *(xfce4-session)*

### Settings Dialog

As soon as a [session](https://docs.xfce.org/xfce/xfce4-session/4.14/preferences) has been saved a new tab is dynamically added to the settings dialog displaying all saved sessions and allowing to delete one or all of them. This should make it way more discoverable for users if they actually have saved sessions that influence the startup behavior - previously this had to be checked manually in the filesystem.

![The settings dialog after saving a session][img-session-saved]

## File Manager *(thunar)*

### Pathbar

Up to Xfce 4.12 [Thunar](https://docs.xfce.org/xfce/thunar/4.14/start) offered two options for the pathbar/locationbar. The best of both worlds has now been mixed into one powerful pathbar, featuring both clickable breadcrumbs (i.e. folders), an easily accessible way to hand-type a path as well as an improved look.

![Thunar's new pathbar][img-thunar-pathbar]

### Folder Thumbnailer

Same as on the Desktop you can now save an image with the name 'folder.jpg' in a folder and get it displayed as its icon in the File Manager. Note: [Please read the docs](https://docs.xfce.org/xfce/tumbler/available_plugins#customized_thumbnailer_for_folders) on how to set this up (if your distribution hasn't enabled it by default).

![Thunar's new folder thumbnails][img-thunar-folder-jpg]

## Power Manager *(xfce4-power-manager)*

### Panel Plugin

The [Power Manager's panel plugin](https://docs.xfce.org/xfce/xfce4-power-manager/4.14/panel-plugin) supports symbolic icons now and uses the standard UPower icon names (making it more compatible with all icon themes). It also shows an indicator if applications inhibit power management functions like suspend (when power is low) or display dimming (after a defined timeout).

![Parole's video playback is inhibiting power management][img-xfpm-inhibitors]

## Notification Service *(xfce4-notifyd)*

### Settings

Several new features have been added in Xfce's [Notification service](https://docs.xfce.org/apps/notifyd/start), including a notifications log, the possibility to disable notifications per application, a global 'Do Not Disturb' mode, which inhibits all notifications, and finally a new animation ('slide out').

![The new notification animation 'slide out'][img-notifyd-slideout]

### Panel Plugin

Furthermore a new panel plugin was added which provides quick access to both the 'Do Not Disturb' mode as well as the log of recent notifications.

![The new panel plugin][img-notifyd-panel]

## Media Player *(parole)*

### Mini Mode

[Parole](https://docs.xfce.org/apps/parole/start) now features a 'Mini Mode', where the interface is simplified to just display the album artwork and can be positioned over other windows without getting in the way.

![Just right-click anywhere in the player window to select 'Mini Mode'...][img-parole-normal-mode]

![Afterwards, enjoy a truly minimalistic playback experience!][img-parole-mini-mode]

## Screensaver *(xfce4-screensaver)*

### A Modern Locking Experience

The new Xfce [Screensaver](https://docs.xfce.org/apps/screensaver/start) provides a configurable lockscreen experience. You can selectively toggle the lock screen and screensaver, and all Xscreensaver themes are supported (with configuration options) out of the box. If you prefer a blank screen, Xfce Screensaver also includes a blank screen option with DPMS integration.

![The new lock screen, sharing styles with LightDM GTK+ Greeter for a consistent experience.][img-saver-dialog]

![Make it your own. Xfce Screensaver supports a multitude of configuration options.][img-saver-preferences]

## Terminal *(xfce4-terminal)*

Lots and lots of features have accumulated in the [Terminal](https://docs.xfce.org/apps/terminal/start) over the last years. Amongst them 'Undo Close Tab' and 'Close Other Tabs' functionality (similar to web browsers), 'Copy Input to All Tabs', 'Set Title Color' (allows to customize tab text color), 'Save Contents' (saves tab contents to a file), an 'Unsafe Paste' dialog (which prevents the terminal from auto-executing pasted text as a command) and support for zooming. Finally when closing a tab or window, there is a new check for running processes which prevents accidentally closing a terminal that is running a process.

![Zooming, 'Save Contents' and much more!][img-terminal]

## Screenshooter *(xfce4-screenshooter)*

The Xfce [Screenshooter](https://docs.xfce.org/apps/screenshooter/start) gained several notable features, amongst others seeing the size of the screenshot while dragging, moving the selection with the mouse and better [imgur](https://imgur.com) integration.

![I can drag and move the screenshot area, whoop whoop!][img-screenshooter]

[img-color-profiles]: //cdn.xfce.org/about/tour/4.14/color-profiles.png
[img-display-general]: //cdn.xfce.org/about/tour/4.14/display-general.png
[img-display-advanced]: //cdn.xfce.org/about/tour/4.14/display-advanced.png
[img-display-minimal]: //cdn.xfce.org/about/tour/4.14/display-minimal.png
[img-locate-mouse]: //cdn.xfce.org/about/tour/4.14/locate-mouse.gif
[img-panel-iconsize]: //cdn.xfce.org/about/tour/4.14/panel-iconsize.png
[img-panel-group]: //cdn.xfce.org/about/tour/4.14/panel-group.png
[img-session-saved]: //cdn.xfce.org/about/tour/4.14/session-saved.png
[img-thunar-pathbar]: //cdn.xfce.org/about/tour/4.14/thunar-pathbar.png
[img-thunar-folder-jpg]: //cdn.xfce.org/about/tour/4.14/thunar-folder-jpg.png
[img-xfpm-inhibitors]: //cdn.xfce.org/about/tour/4.14/xfpm-inhibitors.png
[img-notifyd-slideout]: //cdn.xfce.org/about/tour/4.14/notifyd-slideout.gif
[img-notifyd-panel]: //cdn.xfce.org/about/tour/4.14/notifyd-panel.png
[img-parole-normal-mode]: //cdn.xfce.org/about/tour/4.14/parole-normal-mode.png
[img-parole-mini-mode]: //cdn.xfce.org/about/tour/4.14/parole-mini-mode.png
[img-saver-dialog]: //cdn.xfce.org/about/tour/4.14/saver-dialog.png
[img-saver-preferences]: //cdn.xfce.org/about/tour/4.14/saver-preferences.png
[img-terminal]: //cdn.xfce.org/about/tour/4.14/terminal.png
[img-screenshooter]: //cdn.xfce.org/about/tour/4.14/screenshooter.gif
