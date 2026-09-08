---
title: "Xfce 4.16 tour"
layout: "tour"
hasToc: true
---

This tour will introduce you to new major features of Xfce 4.16. It only covers improvements made on the (user-visible) surface; for the full list of changes, see the [changelog](/download/changelogs/4.16/).

## Visual identity: New icons and palette

In order to make Xfce shine a little more out of the box and to strengthen its visual identity we created new icons for all of our core applications and based them on a shared palette to ensure consistency. We also set some further (implicit) design constraints, loosely following Adwaita's principles.

![The Xfce palette][img-palette]

![New upstream Xfce icons, coming in many sizes for sharp appearance][img-upstream-icons]

## Settings Manager *(xfce4-settings)*

The Settings Manager itself received a visual refresh of its filter box, which can now be hidden permanently. At the same time the search capabilities of the filter box were improved by searching the descriptive 'Comments' part of each dialog's launcher (aka [.desktop](https://specifications.freedesktop.org/desktop-entry-spec/desktop-entry-spec-latest.html)) file.

![Visually cleaner, more powerful filter box][img-settings-manager]

### Default Applications

This new dialog represents a merger between the previously available 'Mime Settings' and the 'Preferred Applications' dialogs. Consolidating both in one place means users have an easier time setting default applications to handle certain file types.

![The new Default Applications dialog][img-default-applications]

### Display Dialog

To better support high-density displays - which come in various sizes and densities - we added fractional scaling based on the RandR extension of X11. Furthermore the preferred mode of a display is now marked with an asterisk and aspect ratios are shown along display resolutions.

![Fractional scaling support][img-display-dialog]

### Keyboard Shortcuts

In order to make things easier for our users we added more default keyboard shortcuts out of the box, for instance for window tiling or to open Thunar. The keyboard shortcuts dialog itself was also visually updated.

![Visually updated keyboard shortcuts dialog][img-keyboard-shortcuts]

## File Manager *(thunar)*

In Thunar's copy and move dialogs users can now easily pause the respective file operation. Furthermore support for queued file transfer, remembering view settings per folder and support for transparency in Gtk themes was added.

![Thunar can now pause copying/moving files][img-thunar-copy]

## Panel *(xfce4-panel)*

The panel received quite a few noteworthy updates, an animation for autohide and intellihide, a new 'Status Tray' plugin that combines both legacy Systray item support with modern StatusNotifier item support, dark mode support, launchers showing additional actions on right-click, window buttons offering to 'Launch a new instance...' and much more.

![Dark mode enabled in the panel's settings dialog][img-panel-dark]

![The new statustray plugin][img-panel-statustray]

![Autohide animation][img-panel-autohide]

![Launch a new instance!][img-panel-launch]

## About Dialog *(xfce4-about)*

Not only was the Xfce tab reworked to be more visually appealing and easily parsable, a separate tab showing basic information about the user's system was also added.

![About Xfce][img-about-xfce]

![About System][img-about-system]

## Power Manager *(xfce4-power-manager)*

The settings dialog of the power manager was cleaned up and shows either 'on battery' or 'plugged in' settings as opposed to both in a huge table.

![Power Manager settings][img-powermanager]

[img-palette]: //cdn.xfce.org/about/tour/4.16/palette.png
[img-upstream-icons]: //cdn.xfce.org/about/tour/4.16/upstream-icons.png
[img-settings-manager]: //cdn.xfce.org/about/tour/4.16/settings-manager.png
[img-default-applications]: //cdn.xfce.org/about/tour/4.16/default-applications.png
[img-display-dialog]: //cdn.xfce.org/about/tour/4.16/display-dialog.png
[img-keyboard-shortcuts]: //cdn.xfce.org/about/tour/4.16/keyboard-shortcuts.png
[img-thunar-copy]: //cdn.xfce.org/about/tour/4.16/thunar-copy.png
[img-panel-dark]: //cdn.xfce.org/about/tour/4.16/panel-dark.png
[img-panel-statustray]: //cdn.xfce.org/about/tour/4.16/panel-statustray.png
[img-panel-autohide]: //cdn.xfce.org/about/tour/4.16/panel-autohide.gif
[img-panel-launch]: //cdn.xfce.org/about/tour/4.16/panel-launch.png
[img-about-xfce]: //cdn.xfce.org/about/tour/4.16/about-xfce.png
[img-about-system]: //cdn.xfce.org/about/tour/4.16/about-system.png
[img-powermanager]: //cdn.xfce.org/about/tour/4.16/powermanager.png
