<?php $head['title'] = R_('Xfce 4.18 tour'); ?>

<h1><?php echo $head['title'] ?></h1>

  <p><?php E_("This tour will introduce you to new major features of Xfce 4.18. It only covers improvements made on the (user-visible) surface.") ?></p>
  <p><?php E_("Check the full <a href=\"/download/changelogs/4.18/\">Xfce 4.18 changelog</a> for a detailed list of changes.") ?></p>

<h2><?php E_("Widget Library") ?> <em>(libxfce4ui)</em></h2>
  <h3><?php E_("Filename Input Dialog") ?></h3>
    <p><?php E_("XfceFilenameInput is a comfortable widget for filename input, which was added in order to prevent invalid filenames at an early stage and to give detailed feedback on the concrete problem.") ?></p>
       <?php print_figure ("about/tour/4.18/xfce4ui-new-file-dialog1.png", R_("XfceFilenameInput - trailing whitespaces")) ?>
       <?php print_figure ("about/tour/4.18/xfce4ui-new-file-dialog2.png", R_("XfceFilenameInput - slash")) ?>
  <h3><?php E_("Generic Shortcut Editor") ?></h3>
    <p><?php E_("This widget is a shortcut editor which was introduced in order to have a graphical interface to modify component-specific shortcuts. Currently, it is only used inside Thunar, Xfce4-terminal and Mousepad, though other components might follow.") ?></p>
       <?php print_figure ("about/tour/4.18/xfce4ui-shortcuts-editor.png", R_("XfceShortcutsEditor in Thunar")) ?>

<h2><?php E_("Thumbnail Service") ?> <em>(tumbler)</em></h2>
  <p><?php E_("Some performance improvements for the pixbuf-thumbnailer and the scheduler were done. As well now there are multiple overwrite options for the desktop-thumbnailer.") ?></p>
  <p><?php E_("There is now support for the thumbnail sizes x-large and xx-large, which are very useful for high resolution displays.") ?></p>
  <p><?php E_("Tumbler and Thunar now support shared thumbnail repositories, like described in the freedesktop.org thumbnail specification. This feature can be used to produce thumbnails for a folder in advance, directly located near the pictures. Like that, the thumbnails don't need to be re-generated for each individual user.") ?></p>
  <p><?php E_("For more information on shared thumbnails, check the <a href=\"http://users.uoa.gr/~sdi1800073/sources/xfce_blog03.html\">related blog post</a>.") ?></p>

<h2><?php E_("Panel") ?> <em>(xfce4-panel)</em></h2>
  <p><?php E_("The DateTime and the Clock plugins provided overlapping functionality. In order to prevent parallel development, they have been merged into a single plugin.") ?></p>
     <?php print_figure ("about/tour/4.18/panel-clock1.png", R_("The new 'Clock' panel widget")) ?>
  <p><?php E_("The new Clock plugin received a new binary time mode now and provides a sleep monitor. Here's a screenshot of all possible layouts which are: Analog, Binary, Digital, Fuzzy and LCD.") ?></p>
     <?php print_figure ("about/tour/4.18/panel-clock2.png", R_("All possible Clock Modes")) ?>

<h2><?php E_("Desktop Manager") ?> <em>(xfdesktop)</em></h2>
  <p><?php E_("Like in Thunar, the 'Delete' menu entry in the context menu can now be hidden.") ?></p>
  <p><?php E_("In order to don't mess the desktop by accident on pressing 'rearrange desktop icons', the user is asked for confirmation now.") ?></p>

<h2><?php E_("Settings Manager") ?> <em>(xfce4-settings)</em></h2>
  <p><?php E_("The search entry for xfce4-settings-manager was a bit simplified. Now it will always be shown, without any slider or button.") ?></p>
     <?php print_figure ("about/tour/4.18/settings-main-dialog.png", R_("xfce4-settings-manager - the search entry is always shown")) ?>
  <h3><?php E_("Display Settings") ?></h3>
    <p><?php E_("xfce4-display-settings got some minor improvements and the possibility to decide what to do when new displays are connected.") ?></p>
       <?php print_figure ("about/tour/4.18/settings-display.png", R_("xfce4-display-settings - minor improvements")) ?>
  <h3><?php E_("Appearance Settings") ?></h3>
    <p><?php E_("On selecting a new theme, there is now the option to automatically set a matching xfwm4 theme, if available.") ?></p>
       <?php print_figure ("about/tour/4.18/settings-appearance.png", R_("xfce4-appearance-settings - toggle to set matching Xfwm4 theme")) ?>

<h2><?php E_("File Manager") ?> <em>(thunar)</em></h2>
<h3><?php E_("List View") ?></h3>
  <p><?php E_("For directories, the count of containing files can now be displayed in the size column. It is now possible to add a 'file creation date' column, and the 'configure columns' dialog can be opened with a right-click on any column head.") ?></p>
     <?php print_figure ("about/tour/4.18/thunar-listview1.png", R_("Thunar - List View - Preferences")) ?>
     <?php print_figure ("about/tour/4.18/thunar-listview2.png", R_("Thunar - List View - File count and file creation date")) ?>
<h3><?php E_("Image Preview") ?></h3>
  <p><?php E_("Finally, an image preview side pane has been added to Thunar. No, wait, actually two of them! You can choose to either use the 'embedded' mode which will take no extra space, but hide parts of the left side pane. Or you can go for the 'standalone' mode, which will use a separate pane on the right and display as well some basic information.") ?></p>
     <?php print_figure ("about/tour/4.18/thunar-preview1.png", R_("Thunar - Embedded Image Preview")) ?>
     <?php print_figure ("about/tour/4.18/thunar-preview2.png", R_("Thunar - Standalone Image Preview")) ?>
<h3><?php E_("Undo and Redo") ?></h3>
  <p><?php E_("It is now possible to undo basic file operations and to redo them. Undo and Redo can be used for 'move', 'rename', 'trash', 'link' and 'create' operations. Per default, a history of the last 10 operations is stored, though the history length is configurable. Whenever an Undo/Redo is triggered, a notification with few details will be shown.") ?></p>
     <?php print_figure ("about/tour/4.18/thunar-undo-redo.png", R_("Thunar - Undo and Redo")) ?>
<h3><?php E_("File Highlight") ?></h3>
  <p><?php E_("Files now can be highlighted by setting the background and the filename to different colors. This can be done via an additional tab, located in the 'properties' dialog. The view menu provides a checkbox in order to enable/disable the feature. Once enabled, files now can be shown in all the colors of the rainbow.") ?></p>
     <?php print_figure ("about/tour/4.18/thunar-hightlight1.png", R_("Thunar - File Highlight Options")) ?>
     <?php print_figure ("about/tour/4.18/thunar-hightlight2.png", R_("Thunar - Highlighted files in List View")) ?>
     <?php print_figure ("about/tour/4.18/thunar-hightlight3.png", R_("Thunar - Hightighted files in Icon View")) ?>
  <p><?php E_("For more information on file highlight, check the <a href=\"https://elessar-space.blogspot.com/2022/08/gsoc22-file-highlighting-in-thunar.html\">related blog post</a>.") ?></p>
<h3><?php E_("Toolbar") ?></h3>
  <p><?php E_("It is now possible to customize the toolbar according to your personal needs! An additional dialog has been added for that purpose, on which the visibility and position of specific items can be managed. As well custom actions, which appear for folders can be used in the toolbar.") ?></p>
  <p><?php E_("When the menubar is hidden, an additional toolbar button which can be used to show the menu will be displayed.") ?></p>
     <?php print_figure ("about/tour/4.18/thunar-toolbar1.png", R_("Thunar - Toolbar with all configurable Elements")) ?>
     <?php print_figure ("about/tour/4.18/thunar-toolbar2.png", R_("Thunar - Toolbar Configuration Dialog")) ?>
     <?php print_figure ("about/tour/4.18/thunar-toolbar3.png", R_("Thunar - Show Menubar button")) ?>
  <p><?php E_("For more information on the configurable toolbar, check the <a href=\"http://users.uoa.gr/~sdi1800073/sources/xfce_blog10.html\">related blog post</a>.") ?></p>
<h3><?php E_("Split View") ?></h3>
  <p><?php E_("Thunar now provides the option to use split panes. The pane separator can be moved, and its position will be stored. Via a xfconf setting, it is as well possible to have a vertical split. ") ?></p>
     <?php print_figure ("about/tour/4.18/thunar-splitpanes.png", R_("Thunar - Split Panes")) ?>
<h3><?php E_("Statusbar") ?></h3>
  <p><?php E_("The status bar style was tweaked and '|' is now used to separate entries. Furthermore, it is now possible to customize it by using the context menu.") ?></p>
     <?php print_figure ("about/tour/4.18/thunar-statusbar.png", R_("Thunar - Statusbar Customization")) ?>
<h3><?php E_("Recursive Search") ?></h3>
  <p><?php E_("Thunar has now the possibility to search recursively, directly inside Thunar itself. The search is done in a separate thread and search results are added rapidly into a List View. A new row 'Location' shows where the search results are located, and the context menu provides the option 'Open Item Location' in order to travel there quickly. The preferences dialog provides an option to limit recursive search to local folders, or to disable it. ") ?></p>
     <?php print_figure ("about/tour/4.18/thunar-search1.png", R_("Thunar - Recursive Search")) ?>
     <?php print_figure ("about/tour/4.18/thunar-search2.png", R_("Thunar - Recursive Search Preferences")) ?>
  <p><?php E_("For more information on the recursive search feature, check the <a href=\"http://users.uoa.gr/~sdi1800073/sources/xfce_blog04.html\">related blog post</a>.") ?></p>
<h3><?php E_("Recently used Files") ?></h3>
  <p><?php E_("Recently used files now can be accessed in the side pane. Like for the 'Recursive Search' feature, the new 'Location' row can be used in List View. Additionally, for 'Recent' a new row 'Recency' can be added to sort the files by their latest usage. ") ?></p>
     <?php print_figure ("about/tour/4.18/thunar-recent.png", R_("Thunar - Recently Used Files")) ?>
  <p><?php E_("For more information on 'Recent' in Thunar check the <a href=\"http://users.uoa.gr/~sdi1800073/sources/xfce_blog02.html\">related blog post</a>.") ?></p>
<h3><?php E_("Bookmark Menu") ?></h3>
  <p><?php E_("In order to keep the 'Go' menu compact, bookmarks have been moved into a separate, new 'Bookmarks' menu. The menu item 'add Bookmark' was rather hidden in the 'send to' menu in Thunar 4.18. As part of the new 'Bookmarks' menu, it is more prominent now.") ?></p>
     <?php print_figure ("about/tour/4.18/thunar-bookmarks.png", R_("Thunar - Bookmarks Menu")) ?>
<h3><?php E_("Trash directory") ?></h3>
  <p><?php E_("With the new release, the trash directory provides an info bar which gives easy access to `Empty Trash` and 'Restore' functionality. When using List View, a 'Date Deleted' column will be shown, so that the files can be sorted by deletion date. Via context menu, it is now possible to select 'Restore and Show' in order to automatically open a new tab in the folder of the restored file(s).") ?></p>
     <?php print_figure ("about/tour/4.18/thunar-trash.png", R_("Thunar - Trash Infobar and Date Deleted Column")) ?>
<h3><?php E_("Default Applications") ?></h3>
  <p><?php E_("The management to set/unset default applications for specific mime types was improved. The context menu got a dedicated item 'Set Default Application' which will open the 'ApplicationChooserDialog' with 'use as default' preselected. The dialog now has a section 'Default Application' in order to make clear which default application currently is set. If you want to remove applications from the list, right click it and select 'forget association'.") ?></p>
     <?php print_figure ("about/tour/4.18/thunar-default-application1.png", R_("Thunar - Context Menu Entry to set Default Application")) ?>
     <?php print_figure ("about/tour/4.18/thunar-default-application2.png", R_("Thunar - Revamped Application Chooser Dialog")) ?>
<h3><?php E_("Custom Actions") ?></h3>
  <p><?php E_("It is now possible to arrange custom actions in cascading submenus. Just enter the same submenu name for a custom action in order to place it into the same menu. If you require multiple menu levels, you can achieve that by using '/' in the path of the 'Submenu' entry.") ?></p>
     <?php print_figure ("about/tour/4.18/thunar-uca-submenu1.png", R_("Thunar - Custom Action Submenu")) ?>
     <?php print_figure ("about/tour/4.18/thunar-uca-submenu2.png", R_("Thunar - Custom Action Configuration Dialog")) ?>
<h3><?php E_("Preferences") ?></h3>
  <p><?php E_("The thumbnail settings in the preferences dialog got grouped together, and meanwhile it is possible to limit the file size for which thumbnails should be generated. That should mitigate possible performance issues by preventing thumbnail generation for huge video files.") ?></p>
     <?php print_figure ("about/tour/4.18/thunar-preferences1.png", R_("Thunar - Thumbnail Preferences")) ?>
  <p><?php E_("File transfer operations optionally can use *.partial~ as an intermediate file now. After a transfer operation, there is now the option to verify the file checksums in order to make sure that no single bit got corrupted. Note that the checksum feature will require some extra time during copy when activated.") ?></p>
     <?php print_figure ("about/tour/4.18/thunar-preferences2.png", R_("Thunar - File Transfer Preferences")) ?>
  <p><?php E_("For more information on the new file transfer options, check the <a href=\"https://dev.ikx.kr/GSOC-5th/\">related blog post</a>.") ?></p>
  <p><?php E_("A checkbox was added in order to allow running shell scripts. In Thunar 4.18 it only was possible to change that behavior by changing a hidden setting. Use that option with caution!") ?></p>
     <?php print_figure ("about/tour/4.18/thunar-preferences3.png", R_("Thunar - Script Execution Preferences")) ?>
  <p><?php E_("There is now the possibility to restore tabs on startup, and to show the full directory path in the tab title.") ?></p>
     <?php print_figure ("about/tour/4.18/thunar-preferences4.png", R_("Thunar - Tab and Window Preferences")) ?>

<h2><?php E_("Application Finder") ?> <em>(xfce4-appfinder)</em></h2>
  <h3><?php E_("Configuration") ?></h3>
    <p><?php E_("Appfinder got support for the 'PrefersNonDefaultGPU' property, which is useful for systems with hybrid graphic cards.") ?></p>
    <p><?php E_("Environment variables are now parsed when passed in collapsed mode.") ?></p>
  <h3><?php E_("Appearance") ?></h3>
    <p><?php E_("An option to hide the window decorations was added.") ?></p>
       <?php print_figure ("about/tour/4.18/appfinder.png", R_("xfce4-appfinder without window decorations")) ?>

<h2><?php E_("Window Manager") ?> <em>(xfwm4)</em></h2>
  <h3><?php E_("Workspaces") ?></h3>
    <p><?php E_("Workspace setting will now work as well with other window managers.") ?></p>
  <h3><?php E_("Compositor") ?></h3>
    <p><?php E_("The compositor now supports adaptive vsync with GLX.") ?></p>

<h2><?php E_("General") ?></h2>
  <h3><?php E_("Scaling") ?></h3>
    <p><?php E_("Improved support for UI scaling and fix for many blurry icons in the core components when scaling is used. This will be particularly useful for Hi DPI screens.") ?></p>
  <h3><?php E_("Window Header Bars") ?></h3>
    <p><?php E_("All header bars of Xfce Windows/Dialogs by default will be drawn by the window manager now (Xfwm4). Some dialogs optionally support 'GtkHeaderBar' (CSD) which can be enabled via a xfconf setting.") ?></p>
       <?php print_figure ("about/tour/4.18/general-gtkheaderbar.png", R_("xfce-appearance-settings - Preference to enable GtkHeaderBar")) ?>
