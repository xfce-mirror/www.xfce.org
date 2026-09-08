---
title: "Xfce 4.12 tour"
layout: "tour"
hasToc: true
---

This tour will introduce you to new major features of Xfce 4.12. It only covers improvements made on the surface; for the full list of changes, see the [changelogs](/download/changelogs/).

## Window Manager *(xfwm4)*

### Window Switcher Dialog

The window manager's Alt+Tab dialog is now fully themeable and also gained two new modes: a 'List' mode and a 'Window Preview' mode. Furthermore users use their mouse to click/select the window they want to give focus to.

![The traditional dialog is fully themable now][img-tabwin-simple-crop]

The List mode of the Alt-Tab dialog.

![List mode of Alt-Tab, showing all window titles][img-tabwin-list-crop]

The Window Preview mode shows thumbnails of windows' content alongside their icon. Activating the compositor is a prerequisite for this mode.

![Window thumbnails][img-tabwin-preview-crop]

### Tiling, Zooming, Client-side Decorations

Support for Client-Side Decorations (CSDs) has been improved. They now properly snap to screen and panel borders, and tile correctly, even with shadows.

![Gtk3 apps with their decorations drawn by the client][img-xfwm4-csd]

Window tiling mode was improved by providing support for corner-tiling, and a new zooming mode was added using Alt + Mouse Wheel.

![Drag and drop a window to a corner to tile it][img-xfwm4-tiling-small]

### HiDPI Support

In order to better support modern hi-resolution screens, two new Xfwm4 themes were added (hdpi, xhdpi).

## Panel *(xfce4-panel)*

### Intelligent Hiding

The panel can now intelligently hide itself when a window is dragged near it.

![Oh what is this window??][img-panel-shown]

![Don't come closer!][img-panel-shown-stack]

![Hah! Now you don't see me!][img-panel-hidden]

### Gtk3 plugins

Infrastructure was added to be able to load Gtk3 plugins alongside Gtk2 plugins.

## Desktop Manager *(xfdesktop)*

The desktop has a new wallpaper settings dialog with many new options and better multi-monitor support. Drag the dialog to the display or workspace where you want to change the wallpaper.

![Better multi-monitor support][img-xfdesktop-properties-multiworkspace]

Uncheck 'apply to all workspaces' to set a different wallpaper for each workspace.

## Settings *(xfce4-settings)*

### Display Settings

Support for multi-monitor use was vastly improved in the display settings dialog. Upon connecting a new display, a quick setup popup offers some of the most-used modes for users to quickly change their layout.

![Configure multiple displays][img-xfce4-display-settings-twoscreens]

![Choose your layout when plugging in a new display][img-xfce4-display-layout]

### Appearance Settings

The appearance dialog now showcases previews for styles and icons.

![Gtk style preview][img-xfce4-appearance-settings-style]

![Icon theme preview][img-xfce4-appearance-settings-icons]

## Power Manager *(xfce4-power-manager)*

### Panel Plugin

A new panel plugin was created which allows you to quickly control your screen brightness, either via the menu or by simply using your mouse's scroll wheel over the plugin. The plugin's menu also shows all other connected devices with a power status, e.g. bluetooth keyboards or wireless mice. It still offers quick access to the presentation mode, which inhibits your screensaver for as long as the option is active.

![The plugin's menu allows users to control screen brightness and check on the remaining uptime their battery provides.][img-xfpm-plugin-crop]

### Settings Dialog

The settings dialog was completely restructured (separating button/lid events from system and display behavior) and offers a clearer way of setting your preferences.

![Configure what action to take when certain buttons are pressed or the laptop lid is closed][img-xfpm-prefs-general]

![Configure what to do when the user is inactive or battery is drained][img-xfpm-prefs-system]

![Manage display power management][img-xfpm-prefs-display]

![Display information on all connected devices][img-xfpm-prefs-devices]

When light-locker is available, you can control its settings directly via the power manager.

![Setup light-locker integration][img-xfpm-prefs-security]

## File Manager *(thunar)*

### Tab Support

A long-awaited feature was added: you can now open multiple folders in the same Thunar window.

![Browse multiple directories][img-thunar-tabs]

Thunar now displays the remaining free space with a bar in a folder properties.

![Freespace bar][img-thunar-freespace]

And you can select multiple files to see their properties at once.

![Multiple File Properties][img-thunar-multifiles-props]

## Goodies

There have been lots of improvements to our goodies, and some new and shiny applications have been added by new contributors.

### Alternative panel menu plugin *(xfce4-whiskermenu)*

The whisker menu is an alternative to the traditional menu plugin, showing favourites, allowing to search through existing apps and much more.

![Browse through categories][img-whiskermenu-default]

![Search for an application][img-whiskermenu-search]

### Task Manager *(xfce4-taskmanager)*

The task manager got a revamped user interface, a filter and also supports Gtk3 now.

![Show processes as a tree][img-taskman-tree]

![Filter processes by name][img-taskman-filter]

### Media Player *(parole)*

Parole's UI was totally redone in Gtk3. It now supports multiple video backends, makes more efficient use of your resources and contains a few novel plugins.

![Watch videos][img-parole]

The media controls are now contained in a slide-over overlay (with a configurable timeout).

![Listen to music][img-parole-audio]

### Text Editor *(mousepad)*

Mousepad was totally rewritten, gained a settings dialog and now supports Gtk3.

![New mousepad settings][img-mousepad-prefs]

## A note on Xfce's portability

All but one of those screenshots were taken on machines running OpenBSD -current, a good proof that Xfce is still portable and friendly to all Unix systems.

[img-tabwin-simple-crop]: //cdn.xfce.org/about/tour/4.12/tabwin-simple-crop.png
[img-tabwin-list-crop]: //cdn.xfce.org/about/tour/4.12/tabwin-list-crop.png
[img-tabwin-preview-crop]: //cdn.xfce.org/about/tour/4.12/tabwin-preview-crop.png
[img-xfwm4-csd]: //cdn.xfce.org/about/tour/4.12/xfwm4-csd.png
[img-xfwm4-tiling-small]: //cdn.xfce.org/about/tour/4.12/xfwm4-tiling-small.png
[img-panel-shown]: //cdn.xfce.org/about/tour/4.12/panel-shown.png
[img-panel-shown-stack]: //cdn.xfce.org/about/tour/4.12/panel-shown-stack.png
[img-panel-hidden]: //cdn.xfce.org/about/tour/4.12/panel-hidden.png
[img-xfdesktop-properties-multiworkspace]: //cdn.xfce.org/about/tour/4.12/xfdesktop-properties-multiworkspace.png
[img-xfce4-display-settings-twoscreens]: //cdn.xfce.org/about/tour/4.12/xfce4-display-settings-twoscreens.png
[img-xfce4-display-layout]: //cdn.xfce.org/about/tour/4.12/xfce4-display-layout.png
[img-xfce4-appearance-settings-style]: //cdn.xfce.org/about/tour/4.12/xfce4-appearance-settings-style.png
[img-xfce4-appearance-settings-icons]: //cdn.xfce.org/about/tour/4.12/xfce4-appearance-settings-icons.png
[img-xfpm-plugin-crop]: //cdn.xfce.org/about/tour/4.12/xfpm-plugin-crop.png
[img-xfpm-prefs-general]: //cdn.xfce.org/about/tour/4.12/xfpm-prefs-general.png
[img-xfpm-prefs-system]: //cdn.xfce.org/about/tour/4.12/xfpm-prefs-system.png
[img-xfpm-prefs-display]: //cdn.xfce.org/about/tour/4.12/xfpm-prefs-display.png
[img-xfpm-prefs-devices]: //cdn.xfce.org/about/tour/4.12/xfpm-prefs-devices.png
[img-xfpm-prefs-security]: //cdn.xfce.org/about/tour/4.12/xfpm-prefs-security.png
[img-thunar-tabs]: //cdn.xfce.org/about/tour/4.12/thunar-tabs.png
[img-thunar-freespace]: //cdn.xfce.org/about/tour/4.12/thunar-freespace.png
[img-thunar-multifiles-props]: //cdn.xfce.org/about/tour/4.12/thunar-multifiles-props.png
[img-whiskermenu-default]: //cdn.xfce.org/about/tour/4.12/whiskermenu-default.png
[img-whiskermenu-search]: //cdn.xfce.org/about/tour/4.12/whiskermenu-search.png
[img-taskman-tree]: //cdn.xfce.org/about/tour/4.12/taskman-tree.png
[img-taskman-filter]: //cdn.xfce.org/about/tour/4.12/taskman-filter.png
[img-parole]: //cdn.xfce.org/about/tour/4.12/parole.png
[img-parole-audio]: //cdn.xfce.org/about/tour/4.12/parole-audio.png
[img-mousepad-prefs]: //cdn.xfce.org/about/tour/4.12/mousepad-prefs.png
