---
title: "Xfce 4.4 tour"
layout: "tour"
hasToc: true
---

As of today, the long awaited version 4.4.0 of the Xfce Desktop Environment is finally available. I will try to highlight some of the new features which have been added since the last stable release.

## Desktop Icons

One of the most often requested features during the 4.0 and 4.2 was support for icons on the desktop. Now, with Xfce 4.4.0, this feature was finally added to the desktop manager **Xfdesktop**.

![Desktop Icons][img-desktop-icons]

The desktop manager utilizes **Thunar**'s libraries to handle application launchers and regular files/folders on the desktop. The desktop manager is also able to display icons for minimized windows on the desktop, which is quite a popular feature from the CDE world. Of course, you can disable the desktop icons altogether if you prefer a clean desktop.

![Desktop Settings][img-desktop-settings]

**Xfdesktop** also continues to provide access to the applications menu, as it did in the previous Xfce releases.

## File Manager

The desktop icon support goes hand in hand with the new file manager [Thunar](http://thunar.xfce.org/) which replaces the previous file manager **Xffm**.

![Thunar File Manager][img-thunar]

**Thunar** was written from scratch to provide an easy to use, but still very lightweight file manager for Xfce. Its user interface was designed to look similar to the file chooser which was introduced with GTK+ 2.4, and other file managers such as **Nautilus** and **pcmanfm** already picked up that idea as well.

**Thunar** supports all the file management functionality which users will expect, and also several advanced features. For example, a so-called *Bulk Renamer* is included which allows users to rename multiple files at once using a certain criterion.

![Thunar Bulk Rename][img-thunar-bulk-rename]

## Removable Drives and Media

Xfce 4.4.0 provides easy access to data on removable drives and media. Just insert the media into the drive or plug the new drive in to the computer and an icon representing the removable volume will appear on the desktop and in **Thunar**'s side pane.

![Removable Volumes][img-removable-volumes]

Click on the icon to automatically mount the volume. Right-click the icon to unmount the drive or eject the media from the drive. Note however that this feature requires [HAL](https://freedesktop.org/wiki/Software_2fhal) and is therefore only available for Linux 2.6.x and FreeBSD 6.x and above at the time of this writing (there is limited removable media support for FreeBSD 4.x and 5.x which does not require HAL).

## Text Editor

The new text editor **MousePad** is included with this release. **MousePad** provides all the basic editor functionality, nothing more, nothing less.

![MousePad][img-mousepad]

You can think of **MousePad** as the equivalent to **NotePad** on Windows. It starts up very fast, usually in less than one second, even on older systems.

## Window Manager

**Xfwm4** continues to be the window manager of the hearts.

![Xfwm4 ARGB32][img-xfwm4-argb32]

This release features an enhanced compositor, supporting transparent ARGB windows, shadows, window frame transparency and much more.

![Xfwm4 Switcher][img-xfwm4-switcher]

**Xfwm4** also includes a brand new application switcher, as shown in the screenshot above, which displays all windows from the current workspace with icons and window titles.

![Xfwm4 Themes][img-xfwm4-themes]

Further on support for multiple image formats for window decoration themes was added, including `PNG`, `GIF` and `SVG` images.

![Xfwm4 Tweaks][img-xfwm4-tweaks]

Advanced controls for the window manager were also added, allowing thorough tweaking of window behavior.

## Panel

The **Xfce4-panel** was completely rewritten for the Xfce 4.4 release. Multiple panels are supported *out of the box* now and can easily be configured using the new **Panel Manager** shown in the screenshot below.

![Panel Manager][img-panel-manager]

One of the major problems in previous Xfce releases was that every plugin had to be run in the same process as the panel, and hence every plugin was able to crash the whole panel. To address this issue, support for external plugins was added to the panel.

![Panel Add Item Dialog][img-panel-additem]

Developers of panel plugins can now decide whether the plugin should run as external process or as part of the panel process, depending on the stability of the plugin.

![Panel Icon Box Plugin][img-panel-iconbox]

Since there is now support for multiple panels, the separate **Xftaskbar4** and **Xfce4-iconbox** utilities are no longer required. Instead, both the taskbar and the iconbox are available as panel plugins now.

Most of the additional panel plugins, available via the [Xfce Goodies Project](https://goodies.xfce.org/), have been updated for the new panel, and several new plugins were added. For example, the brand new **xfce4-xfapplet-plugin** allows users to add GNOME panel applets to the Xfce panel.

## Time Management

The new time management application **Orage** replaces the **Xfcalendar**, which was introduced with Xfce 4.2.0. **Orage** provides several features to efficiently manage your time.

![Orage][img-orage]

While **Orage** is very lightweight and easy to use, it supports all the important features found in larger calendar applications like **Outlook** or **Evolution**. While **Xfcalendar** used the custom `dbh` format in the past to store your settings, **Orage** is based on `ical` and therefore compatible with other calendar applications.

## Terminal Emulator

While **Terminal** was already available during the 4.2 days, it was not mature enough at that time to be part of the core. With this major release, it was moved into the core desktop.

![Terminal][img-terminal]

Besides the basic features which you might expect from a terminal emulator, it includes some nice additional features, like multiple tabs per window, customizable toolbars and the ability to configure nearly every aspect of the application via *hidden options*. As can be seen in the screenshot above, this release also supports real transparency using **Xfwm4**'s integrated composition manager.

## Printing

**Xfprint**, the Xfce printing management application, saw several small improvements with this release. First, the `a2ps` converter is not mandatory anymore, whilst still recommended. Support for `CUPS` 1.2 was added and **Xfprint** is now able to display the printer state with the `CUPS`-backend.

![Xfce Printing][img-xfprint]

**Xfprint** also integrates with **MousePad** to provide generic printing support for different kinds of text documents using the `a2ps` converter.

![Xfce Print Dialog][img-xfprint-dialog]

As you can see the print dialog still looks relatively similar to that of Xfce 4.2, but the internal workings of the printing support were improved, especially the `CUPS` support. Besides that, the printing management functionality was moved to a library, so other applications can use the API to access the printer configuration.

## Autostart

Xfce 4.4.0 implements the new [Autostart Specification](https://freedesktop.org/wiki/Standards_2fautostart_2dspec) - actually Xfce was the first desktop to implement said feature, but the others were faster to release. ;-)

![Xfce Autostart Editor][img-autostart]

The specification consists of two parts, the *Autostart of Applications During Startup*, which is implemented in **xfce4-session** and the *Autostart Of Applications After Mount* which is implemented in [thunar-volman](http://foo-projects.org/~benny/projects/thunar-volman/index.html). This release also includes the **xfce4-autostart-editor**, shown in the screenshot above, which allows users to easily add, remove or disable autostarted applications.

## Settings

This release introduces new options to customize the desktop to your needs. Some examples of new settings dialogs were already shown in the sections above.

![Preferred Applications][img-preferences-applications]

The preferred applications framework, which was previously only available in **Terminal**, was imported into Xfce, so users no longer need to edit shell profiles to specify which browser and terminal emulator should be used by Xfce applications. The goal was to make it as easy as possible to change an application for a certain category (GNOME users may have already noticed that GNOME adopted this approach, because it is such simple).

![Keyboard Shortcuts][img-preferences-keyboard]

And then there was the problem with the keyboard shortcuts in Xfce 4.2... Xfce 4.2 limited the number of freely available keyboard shortcuts, while people wanted to assign any number of keyboard shortcuts. With Xfce 4.4 this limitation is history and the application shortcuts are now separated from the window manager shortcuts.

## Feedback

Please post comments on this article in my [blog](http://xfce-diary.blogspot.com/2007/01/visual-tour-of-xfce-440.html) and use the [xfce](/community/lists) mailinglist if you have questions about Xfce 4.4.0 or trouble with the installation.

## Links

- [Xfce website](https://xfce.org/)
- [Thunar website](http://thunar.xfce.org/)

## Credits

Written by Benedikt Meurer, 21 Jan 2007

[img-desktop-icons]: //cdn.xfce.org/about/tour/4.4/desktop-icons.png
[img-desktop-settings]: //cdn.xfce.org/about/tour/4.4/desktop-settings.png
[img-thunar]: //cdn.xfce.org/about/tour/4.4/thunar.png
[img-thunar-bulk-rename]: //cdn.xfce.org/about/tour/4.4/thunar-bulk-rename.png
[img-removable-volumes]: //cdn.xfce.org/about/tour/4.4/removable-volumes.png
[img-mousepad]: //cdn.xfce.org/about/tour/4.4/mousepad.png
[img-xfwm4-argb32]: //cdn.xfce.org/about/tour/4.4/xfwm4-argb32.png
[img-xfwm4-switcher]: //cdn.xfce.org/about/tour/4.4/xfwm4-switcher.png
[img-xfwm4-themes]: //cdn.xfce.org/about/tour/4.4/xfwm4-themes.png
[img-xfwm4-tweaks]: //cdn.xfce.org/about/tour/4.4/xfwm4-tweaks.png
[img-panel-manager]: //cdn.xfce.org/about/tour/4.4/panel-manager.png
[img-panel-additem]: //cdn.xfce.org/about/tour/4.4/panel-additem.png
[img-panel-iconbox]: //cdn.xfce.org/about/tour/4.4/panel-iconbox.png
[img-orage]: //cdn.xfce.org/about/tour/4.4/orage.png
[img-terminal]: //cdn.xfce.org/about/tour/4.4/terminal.png
[img-xfprint]: //cdn.xfce.org/about/tour/4.4/xfprint.png
[img-xfprint-dialog]: //cdn.xfce.org/about/tour/4.4/xfprint-dialog.png
[img-autostart]: //cdn.xfce.org/about/tour/4.4/autostart.png
[img-preferences-applications]: //cdn.xfce.org/about/tour/4.4/preferences-applications.png
[img-preferences-keyboard]: //cdn.xfce.org/about/tour/4.4/preferences-keyboard.png
