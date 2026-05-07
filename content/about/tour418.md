---
title: "Xfce 4.18 tour"
layout: "tour"
hasToc: true
---

This tour will introduce you to new major features of Xfce 4.18. It only covers improvements made on the (user-visible) surface.

Check the full [Xfce 4.18 changelog](/download/changelogs/4.18/) for a detailed list of changes.

## Widget Library *(libxfce4ui)*

### Filename Input Dialog

XfceFilenameInput is a comfortable widget for filename input, which was added in order to prevent invalid filenames at an early stage and to give detailed feedback on the concrete problem.

![XfceFilenameInput - trailing whitespaces][img-xfce4ui-new-file-dialog1]

![XfceFilenameInput - slash][img-xfce4ui-new-file-dialog2]

### Generic Shortcut Editor

This widget is a shortcut editor which was introduced in order to have a graphical interface to modify component-specific shortcuts. Currently, it is only used inside Thunar, Xfce4-terminal and Mousepad, though other components might follow.

![XfceShortcutsEditor in Thunar][img-xfce4ui-shortcuts-editor]

## Thumbnail Service *(tumbler)*

Some performance improvements for the pixbuf-thumbnailer and the scheduler were done. As well now there are multiple overwrite options for the desktop-thumbnailer.

There is now support for the thumbnail sizes x-large and xx-large, which are very useful for high resolution displays.

Tumbler and Thunar now support shared thumbnail repositories, like described in the freedesktop.org thumbnail specification. This feature can be used to produce thumbnails for a folder in advance, directly located near the pictures. Like that, the thumbnails don't need to be re-generated for each individual user.

For more information on shared thumbnails, check the [related blog post](http://users.uoa.gr/~sdi1800073/sources/xfce_blog03.html).

## Panel *(xfce4-panel)*

The DateTime and the Clock plugins provided overlapping functionality. In order to prevent parallel development, they have been merged into a single plugin.

![The new 'Clock' panel widget][img-panel-clock1]

The new Clock plugin received a new binary time mode now and provides a sleep monitor. Here's a screenshot of all possible layouts which are: Analog, Binary, Digital, Fuzzy and LCD.

![All possible Clock Modes][img-panel-clock2]

## Desktop Manager *(xfdesktop)*

Like in Thunar, the 'Delete' menu entry in the context menu can now be hidden.

In order to don't mess the desktop by accident on pressing 'rearrange desktop icons', the user is asked for confirmation now.

## Settings Manager *(xfce4-settings)*

The search entry for xfce4-settings-manager was a bit simplified. Now it will always be shown, without any slider or button.

![xfce4-settings-manager - the search entry is always shown][img-settings-main-dialog]

### Display Settings

xfce4-display-settings got some minor improvements and the possibility to decide what to do when new displays are connected.

![xfce4-display-settings - minor improvements][img-settings-display]

### Appearance Settings

On selecting a new theme, there is now the option to automatically set a matching xfwm4 theme, if available.

![xfce4-appearance-settings - toggle to set matching Xfwm4 theme][img-settings-appearance]

## File Manager *(thunar)*

### List View

For directories, the count of containing files can now be displayed in the size column. It is now possible to add a 'file creation date' column, and the 'configure columns' dialog can be opened with a right-click on any column head.

![Thunar - List View - Preferences][img-thunar-listview1]

![Thunar - List View - File count and file creation date][img-thunar-listview2]

### Image Preview

Finally, an image preview side pane has been added to Thunar. No, wait, actually two of them! You can choose to either use the 'embedded' mode which will take no extra space, but hide parts of the left side pane. Or you can go for the 'standalone' mode, which will use a separate pane on the right and display as well some basic information.

![Thunar - Embedded Image Preview][img-thunar-preview1]

![Thunar - Standalone Image Preview][img-thunar-preview2]

### Undo and Redo

It is now possible to undo basic file operations and to redo them. Undo and Redo can be used for 'move', 'rename', 'trash', 'link' and 'create' operations. Per default, a history of the last 10 operations is stored, though the history length is configurable. Whenever an Undo/Redo is triggered, a notification with few details will be shown.

![Thunar - Undo and Redo][img-thunar-undo-redo]

### File Highlight

Files now can be highlighted by setting the background and the filename to different colors. This can be done via an additional tab, located in the 'properties' dialog. The view menu provides a checkbox in order to enable/disable the feature. Once enabled, files now can be shown in all the colors of the rainbow.

![Thunar - File Highlight Options][img-thunar-hightlight1]

![Thunar - Highlighted files in List View][img-thunar-hightlight2]

![Thunar - Highlighted files in Icon View][img-thunar-hightlight3]

For more information on file highlight, check the [related blog post](https://elessar-space.blogspot.com/2022/08/gsoc22-file-highlighting-in-thunar.html).

### Toolbar

It is now possible to customize the toolbar according to your personal needs! An additional dialog has been added for that purpose, on which the visibility and position of specific items can be managed. As well custom actions, which appear for folders can be used in the toolbar.

When the menubar is hidden, an additional toolbar button which can be used to show the menu will be displayed.

![Thunar - Toolbar with all configurable Elements][img-thunar-toolbar1]

![Thunar - Toolbar Configuration Dialog][img-thunar-toolbar2]

![Thunar - Show Menubar button][img-thunar-toolbar3]

For more information on the configurable toolbar, check the [related blog post](http://users.uoa.gr/~sdi1800073/sources/xfce_blog10.html).

### Split View

Thunar now provides the option to use split panes. The pane separator can be moved, and its position will be stored. Via a xfconf setting, it is as well possible to have a vertical split.

![Thunar - Split Panes][img-thunar-splitpanes]

### Statusbar

The status bar style was tweaked and '|' is now used to separate entries. Furthermore, it is now possible to customize it by using the context menu.

![Thunar - Statusbar Customization][img-thunar-statusbar]

### Recursive Search

Thunar has now the possibility to search recursively, directly inside Thunar itself. The search is done in a separate thread and search results are added rapidly into a List View. A new row 'Location' shows where the search results are located, and the context menu provides the option 'Open Item Location' in order to travel there quickly. The preferences dialog provides an option to limit recursive search to local folders, or to disable it.

![Thunar - Recursive Search][img-thunar-search1]

![Thunar - Recursive Search Preferences][img-thunar-search2]

For more information on the recursive search feature, check the [related blog post](http://users.uoa.gr/~sdi1800073/sources/xfce_blog04.html).

### Recently used Files

Recently used files now can be accessed in the side pane. Like for the 'Recursive Search' feature, the new 'Location' row can be used in List View. Additionally, for 'Recent' a new row 'Recency' can be added to sort the files by their latest usage.

![Thunar - Recently Used Files][img-thunar-recent]

For more information on 'Recent' in Thunar check the [related blog post](http://users.uoa.gr/~sdi1800073/sources/xfce_blog02.html).

### Bookmark Menu

In order to keep the 'Go' menu compact, bookmarks have been moved into a separate, new 'Bookmarks' menu. The menu item 'add Bookmark' was rather hidden in the 'send to' menu in Thunar 4.18. As part of the new 'Bookmarks' menu, it is more prominent now.

![Thunar - Bookmarks Menu][img-thunar-bookmarks]

### Trash directory

With the new release, the trash directory provides an info bar which gives easy access to `Empty Trash` and 'Restore' functionality. When using List View, a 'Date Deleted' column will be shown, so that the files can be sorted by deletion date. Via context menu, it is now possible to select 'Restore and Show' in order to automatically open a new tab in the folder of the restored file(s).

![Thunar - Trash Infobar and Date Deleted Column][img-thunar-trash]

### Default Applications

The management to set/unset default applications for specific mime types was improved. The context menu got a dedicated item 'Set Default Application' which will open the 'ApplicationChooserDialog' with 'use as default' preselected. The dialog now has a section 'Default Application' in order to make clear which default application currently is set. If you want to remove applications from the list, right click it and select 'forget association'.

![Thunar - Context Menu Entry to set Default Application][img-thunar-default-application1]

![Thunar - Revamped Application Chooser Dialog][img-thunar-default-application2]

### Custom Actions

It is now possible to arrange custom actions in cascading submenus. Just enter the same submenu name for a custom action in order to place it into the same menu. If you require multiple menu levels, you can achieve that by using '/' in the path of the 'Submenu' entry.

![Thunar - Custom Action Submenu][img-thunar-uca-submenu1]

![Thunar - Custom Action Configuration Dialog][img-thunar-uca-submenu2]

### Preferences

The thumbnail settings in the preferences dialog got grouped together, and meanwhile it is possible to limit the file size for which thumbnails should be generated. That should mitigate possible performance issues by preventing thumbnail generation for huge video files.

![Thunar - Thumbnail Preferences][img-thunar-preferences1]

File transfer operations optionally can use *.partial~ as an intermediate file now. After a transfer operation, there is now the option to verify the file checksums in order to make sure that no single bit got corrupted. Note that the checksum feature will require some extra time during copy when activated.

![Thunar - File Transfer Preferences][img-thunar-preferences2]

For more information on the new file transfer options, check the [related blog post](https://dev.ikx.kr/GSOC-5th/).

A checkbox was added in order to allow running shell scripts. In Thunar 4.18 it only was possible to change that behavior by changing a hidden setting. Use that option with caution!

![Thunar - Script Execution Preferences][img-thunar-preferences3]

There is now the possibility to restore tabs on startup, and to show the full directory path in the tab title.

![Thunar - Tab and Window Preferences][img-thunar-preferences4]

## Application Finder *(xfce4-appfinder)*

### Configuration

Application Finder got support for the 'PrefersNonDefaultGPU' property, which is useful for systems with hybrid graphic cards.

Environment variables are now parsed when passed in collapsed mode.

### Appearance

An option to hide the window decorations was added.

![xfce4-appfinder without window decorations][img-appfinder]

## Window Manager *(xfwm4)*

### Workspaces

Workspace setting will now work as well with other window managers.

### Compositor

The compositor now supports adaptive vsync with GLX.

## General

### Scaling

Improved support for UI scaling and fix for many blurry icons in the core components when scaling is used. This will be particularly useful for Hi DPI screens.

### Window Header Bars

All header bars of Xfce Windows/Dialogs by default will be drawn by the window manager now (Xfwm4). Some dialogs optionally support 'GtkHeaderBar' (CSD) which can be enabled via a xfconf setting.

![xfce-appearance-settings - Preference to enable GtkHeaderBar][img-general-gtkheaderbar]

[img-xfce4ui-new-file-dialog1]: //cdn.xfce.org/about/tour/4.18/xfce4ui-new-file-dialog1.png
[img-xfce4ui-new-file-dialog2]: //cdn.xfce.org/about/tour/4.18/xfce4ui-new-file-dialog2.png
[img-xfce4ui-shortcuts-editor]: //cdn.xfce.org/about/tour/4.18/xfce4ui-shortcuts-editor.png
[img-panel-clock1]: //cdn.xfce.org/about/tour/4.18/panel-clock1.png
[img-panel-clock2]: //cdn.xfce.org/about/tour/4.18/panel-clock2.png
[img-settings-main-dialog]: //cdn.xfce.org/about/tour/4.18/settings-main-dialog.png
[img-settings-display]: //cdn.xfce.org/about/tour/4.18/settings-display.png
[img-settings-appearance]: //cdn.xfce.org/about/tour/4.18/settings-appearance.png
[img-thunar-listview1]: //cdn.xfce.org/about/tour/4.18/thunar-listview1.png
[img-thunar-listview2]: //cdn.xfce.org/about/tour/4.18/thunar-listview2.png
[img-thunar-preview1]: //cdn.xfce.org/about/tour/4.18/thunar-preview1.png
[img-thunar-preview2]: //cdn.xfce.org/about/tour/4.18/thunar-preview2.png
[img-thunar-undo-redo]: //cdn.xfce.org/about/tour/4.18/thunar-undo-redo.png
[img-thunar-hightlight1]: //cdn.xfce.org/about/tour/4.18/thunar-hightlight1.png
[img-thunar-hightlight2]: //cdn.xfce.org/about/tour/4.18/thunar-hightlight2.png
[img-thunar-hightlight3]: //cdn.xfce.org/about/tour/4.18/thunar-hightlight3.png
[img-thunar-toolbar1]: //cdn.xfce.org/about/tour/4.18/thunar-toolbar1.png
[img-thunar-toolbar2]: //cdn.xfce.org/about/tour/4.18/thunar-toolbar2.png
[img-thunar-toolbar3]: //cdn.xfce.org/about/tour/4.18/thunar-toolbar3.png
[img-thunar-splitpanes]: //cdn.xfce.org/about/tour/4.18/thunar-splitpanes.png
[img-thunar-statusbar]: //cdn.xfce.org/about/tour/4.18/thunar-statusbar.png
[img-thunar-search1]: //cdn.xfce.org/about/tour/4.18/thunar-search1.png
[img-thunar-search2]: //cdn.xfce.org/about/tour/4.18/thunar-search2.png
[img-thunar-recent]: //cdn.xfce.org/about/tour/4.18/thunar-recent.png
[img-thunar-bookmarks]: //cdn.xfce.org/about/tour/4.18/thunar-bookmarks.png
[img-thunar-trash]: //cdn.xfce.org/about/tour/4.18/thunar-trash.png
[img-thunar-default-application1]: //cdn.xfce.org/about/tour/4.18/thunar-default-application1.png
[img-thunar-default-application2]: //cdn.xfce.org/about/tour/4.18/thunar-default-application2.png
[img-thunar-uca-submenu1]: //cdn.xfce.org/about/tour/4.18/thunar-uca-submenu1.png
[img-thunar-uca-submenu2]: //cdn.xfce.org/about/tour/4.18/thunar-uca-submenu2.png
[img-thunar-preferences1]: //cdn.xfce.org/about/tour/4.18/thunar-preferences1.png
[img-thunar-preferences2]: //cdn.xfce.org/about/tour/4.18/thunar-preferences2.png
[img-thunar-preferences3]: //cdn.xfce.org/about/tour/4.18/thunar-preferences3.png
[img-thunar-preferences4]: //cdn.xfce.org/about/tour/4.18/thunar-preferences4.png
[img-appfinder]: //cdn.xfce.org/about/tour/4.18/appfinder.png
[img-general-gtkheaderbar]: //cdn.xfce.org/about/tour/4.18/general-gtkheaderbar.png
