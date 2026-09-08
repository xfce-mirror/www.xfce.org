---
title: "Xfce 4.6 tour"
layout: "tour"
hasToc: true
---

The long awaited 4.6.0 version of the Xfce Desktop Environment is finally available. We will try to highlight some of the new features which have been added since the last stable release.

## Desktop Manager *(xfdesktop)*

Since desktop icons have been introduced in Xfce 4.4, people have expressed the need to allow the selection of multiple icons (rubber banding). With **Xfce 4.6**, the **Xfdesktop** manager finally implements this feature: you can select multiple icons, remove them, etcetera...

![Multiple icons selection][img-xfdesktop-rubberbanding]

**Xfce 4.6** features a brand new desktop menu which allows you to manipulate files as with the **Thunar** filemanager contextual menu, but also to open applications, exit your session, or access the help documentation.

![New desktop menu][img-xfdesktop-menu]

## Panel *(xfce4-panel)*

A lot of long standing bugs have been fixed in **Xfce4 Panel**, particularly for multiple screen setups, but this new release also brings an improved set of panel plugins.

![New binary clock][img-xfce4-panel-clock]

The **clock plugin** has been rewritten to consume fewer system resources and to fix some display bugs, but there is also a new clock mode for the geek in you: binary clock! The new **notification area plugin** allows you to hide selected notification icons to keep your notification area clean and readable.

## Sound Mixer *(xfce4-mixer)*

**Xfce4 Mixer** has been rewritten from scratch to use [Gstreamer](https://gstreamer.freedesktop.org/). This allows us to more easily support multiple sound systems, the user interface is more polished, and you can manage several different sound cards. Additionally, a panel plugin allows you to set the system sound quickly using the mouse scroll wheel.

![New sound mixer][img-xfce4-mixer]

## Session Manager *(xfce4-session)*

**Xfce 4.6** comes with an enhanced session manager: your session should be started faster, and the settings dialog has been reworked to ease the management of session-aware applications. Additionally, the session manager will now automatically restart session applications which crashed so that you are not left without a desktop, panel, window manager, etcetera, if a crash occurs.

![Session settings dialog][img-xfce4-session-settings]

The session manager also includes a new long-awaited feature: support for **suspend** and **hibernate** "out of the box." The logout dialog now has two additional buttons which offer to suspend or hibernate your computer.

![Session logout dialog][img-xfce4-session-logout]

## Window Manager *(xfwm4)*

As usual, **Xfwm4** has matured quite a bit during this release cycle: many bugs have been fixed, support for multiple displays has been added, and overall performance has been improved.

In addition to some other new features, **Xfwm4** is now able to detect windows that do not respond and offer to terminate them.

![Dialog to terminate busy applications][img-xfwm4-net-ping]

There is also a new **actions menu** which allows you to quickly move and resize windows, put them above or below other windows, or fullscreen them.

![New actions menu][img-xfwm4-new-menu]

A new **fill** operation has been implemented; it expands a given window to the available space without overlapping other adjacent windows.

![Fill operation][img-xfwm4-fill-operation]

The **compositor** has been optimized to reduce window flickering during resize operations.

![Flicker free resizing][img-xfwm4-resize]

Some **tweakable options** have also been added: for example, you can now disable the blinking of windows when they receive an urgency hint.

![New tweakable options][img-xfwm4-new-tweaks]

## File Manager *(thunar)*

There have been many bug fixes and performance improvements in **Thunar**. It can use the mouse forward and backward buttons (if available) to navigate, and it includes a new plugin that allows you to set an image as wallpaper from the context menu.

![Set an image in a Thunar folder as wallpaper][img-thunar-wallpaper-plugin]

**Thunar** now follows the [XDG user directories](https://freedesktop.org/wiki/Software/xdg-user-dirs) specification; this allows you to have themed and localized user folders to store your music, documents, videos, templates, etcetera...

![Thunar menu for user directories][img-thunar-xdg-user-dirs]

**Thunar** will now display a translucent icon for drives or volumes that are not mounted, so that you can distinguish them from the mounted ones.

![Translucent icons for unmounted drives and volumes][img-thunar-mounting]

Last, but not least, **Thunar** now supports encrypted devices!

![Thunar support for encrypted devices][img-thunar-encrypted]

## Settings *(xfce4-settings)*

Xfce 4.6 features a new settings interface, **Xfce Settings Manager**, which allows you to configure your desktop environment much more easily than before. The dialogs which are accessible by single clicking on the icons have been designed to be more compact and to allow you to customize your desktop quickly and in a more intuitive way.

![Xfce4 Settings Manager][img-xfce4-settings-manager]

### Accessibility settings

![Accessibility settings dialog][img-xfce4-accessibility-settings]

The **Accessibility settings** dialog allows you to set the accessibility related mouse and keyboard options, such as sticky keys, bounce keys, or mouse emulation.

### Appearance settings

![Appearance settings dialog][img-xfce4-appearance-settings]

The **Appearance settings** dialog allows you to set the widget style, the icon theme, and font, toolbar and menu options.

### Display settings

![Display settings dialog][img-xfce4-display-settings]

The **Display settings** dialog allows you to set the resolution, refresh rate, and the rotation for each screen that is connected.

### Keyboard settings

![Keyboard settings dialog, layout tab][img-xfce4-keyboard-settings-layout]

The **Keyboard settings** dialog allows you to set keyboard preferences such as key repeating, keyboard shortcuts, and your keyboard layout.

![Keyboard settings dialog, shortcuts tab][img-xfce4-keyboard-settings-shortcuts]

You can now configure shortcuts more simply, and any shortcut conflicts are automatically detected.

### Mouse settings

![Mouse settings dialog][img-xfce4-mouse-settings]

The **Mouse settings** dialog allows you to configure the different mice connected to your computer: button order, acceleration, double-click speed, mouse cursor theme, etcetera...

### Desktop settings

![Desktop settings dialog][img-xfdesktop-settings]

The **Desktop settings** dialog is now much more compact; it allows you to configure per-screen settings: wallpaper, brightness, desktop menu, displayed icons, etcetera...

## Application Finder *(xfce4-appfinder)*

**Xfce 4.6** also comes with a brand new application finder which features a cleaner user interface. It is also easier to use it with the keyboard, and it monitors installed applications to update the list "on the fly." It also allows you to create panel launchers quickly by dragging an application icon to the launcher creation window.

![New application finder][img-xfce4-appfinder]

## Links

- [Xfce website](https://xfce.org/)
- [Thunar website](https://xfce.org/projects/thunar)

## Credits

- Written by Jérôme Guelfucci (February 2009)
- Screenshots by Jannis Pohlmann

[img-xfdesktop-rubberbanding]: //cdn.xfce.org/about/tour/4.6/xfdesktop-rubberbanding.png
[img-xfdesktop-menu]: //cdn.xfce.org/about/tour/4.6/xfdesktop-menu.png
[img-xfce4-panel-clock]: //cdn.xfce.org/about/tour/4.6/xfce4-panel-clock.png
[img-xfce4-mixer]: //cdn.xfce.org/about/tour/4.6/xfce4-mixer.png
[img-xfce4-session-settings]: //cdn.xfce.org/about/tour/4.6/xfce4-session-settings.png
[img-xfce4-session-logout]: //cdn.xfce.org/about/tour/4.6/xfce4-session-logout.png
[img-xfwm4-net-ping]: //cdn.xfce.org/about/tour/4.6/xfwm4-net-ping.png
[img-xfwm4-new-menu]: //cdn.xfce.org/about/tour/4.6/xfwm4-new-menu.png
[img-xfwm4-fill-operation]: //cdn.xfce.org/about/tour/4.6/xfwm4-fill-operation.png
[img-xfwm4-resize]: //cdn.xfce.org/about/tour/4.6/xfwm4-resize.png
[img-xfwm4-new-tweaks]: //cdn.xfce.org/about/tour/4.6/xfwm4-new-tweaks.png
[img-thunar-wallpaper-plugin]: //cdn.xfce.org/about/tour/4.6/thunar-wallpaper-plugin.png
[img-thunar-xdg-user-dirs]: //cdn.xfce.org/about/tour/4.6/thunar-xdg-user-dirs.png
[img-thunar-mounting]: //cdn.xfce.org/about/tour/4.6/thunar-mounting.png
[img-thunar-encrypted]: //cdn.xfce.org/about/tour/4.6/thunar-encrypted.png
[img-xfce4-settings-manager]: //cdn.xfce.org/about/tour/4.6/xfce4-settings-manager.png
[img-xfce4-accessibility-settings]: //cdn.xfce.org/about/tour/4.6/xfce4-accessibility-settings.png
[img-xfce4-appearance-settings]: //cdn.xfce.org/about/tour/4.6/xfce4-appearance-settings.png
[img-xfce4-display-settings]: //cdn.xfce.org/about/tour/4.6/xfce4-display-settings.png
[img-xfce4-keyboard-settings-layout]: //cdn.xfce.org/about/tour/4.6/xfce4-keyboard-settings-layout.png
[img-xfce4-keyboard-settings-shortcuts]: //cdn.xfce.org/about/tour/4.6/xfce4-keyboard-settings-shortcuts.png
[img-xfce4-mouse-settings]: //cdn.xfce.org/about/tour/4.6/xfce4-mouse-settings.png
[img-xfdesktop-settings]: //cdn.xfce.org/about/tour/4.6/xfdesktop-settings.png
[img-xfce4-appfinder]: //cdn.xfce.org/about/tour/4.6/xfce4-appfinder.png
