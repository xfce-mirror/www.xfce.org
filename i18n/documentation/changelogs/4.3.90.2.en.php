<?php
function bug ($id){
	echo 'bug <a href="http://bugzilla.xfce.org/show_bug.cgi?id='. $id .'" target="_blank">#'. $id .'</a>';
}
?>

<h1>Xfce 4.4 beta 2 (4.3.90.2) Changelog</h1>

<h3>Utility Library <em>(libxfce4util)</em>:</h3>
<ul>
    <li>Fix deletion of entries from XfceRc objects.</li>
    <li>Reduce the number of PLT symbols.</li>
    <li>Translatable license texts.</li>
    <li>Plug memory leaks.</li>
</ul>

<h3>Widget Library <em>(libxfcegui4)</em>:</h3>
<ul>
    <li>Fix bug with desktop layout on x86_64.</li>
    <li>Fix bug in system tray with some apps (e.g. krusader, <?php bug ('1836'); ?>).</li>
    <li>New titled dialog widget, to use for the settings dialogs.</li>
</ul>

<h3>Extension Library <em>(exo)</em>:</h3>
<ul>
    <li>See the release notes at <a href="http://thunar.xfce.org/news.html">http://thunar.xfce.org/news.html</a>.</li>
</ul>

<h3>Window Manager <em>(xfwm4)</em>:</h3>
<ul>
    <li>Get rid of libXpm dependency by implementing an XPM loader with color symbol substitution.</li>
    <li>Add support for svg, png, bmp, gif, jpg file formats for themes components.</li>
    <li>Embedded compositor can be enabled/disabled on the fly from the WM tweaks plugin without restarting the WM.</li>
    <li>Transparency of inactive windows configurable through the WM tweaks plugin.</li>
    <li>Automatically unredirect fullscreen override windows, fixing the performance penalty of using unredirected rendering.</li>
    <li>Add host name to window title when running apps from other hosts.</li>
    <li>Rework default theme, add new themes (Moheli, Daloa).</li>
    <li>Clean up modifer code in shortcut editor.</li>
    <li>Lot of optimizations, including in the embedded compositor.</li>
    <li>Lot of bug fixes.</li>
</ul>

<h3>Window Manager Themes <em>(xfwm4-themes)</em>:</h3>
<ul>
    <li>Adjust various themes for the latest xfwm4 version.</li>
</ul>

<h3>Desktop Manager <em>(xfdesktop)</em>:</h3>
<ul>
    <li>Filter out KDE screensaver files from the menu (<?php bug ('1928'); ?>).</li>
    <li>Add a remote launcher to popup panel menu, triggered by a shortcut.</li>
    <li>Cleaned up xfce4-menueditor: Use XfceTitledDialog, fixed DnD, use GObject classes.</li>
    <li>Try to automatically mount unmounted removable volumes when they are openend.</li>
    <li>Fix crashes when removable volumes don't have mount points associated with them.</li>
    <li>XDirectSave target support for the desktop.</li>
    <li>Add support for dropping web links from Firefox (and other browsers) on the desktop.</li>
    <li>Add user feedback when a file already exists (i.e., a &quot;do you want to overwrite?&quot; dialog) instead of just failing silently.</li>
    <li>Tell the session manager to log out if the user tries to &quot;close&quot; the desktop window.</li>
    <li>Transparency for the icon label text background, configurable via GTK style properties.</li>
    <li>Fix menu panel plugin menu positioning when using floating panels.</li>
    <li>Many desktop icon painting performance improvements.</li>
    <li>Use exo-desktop-item-edit to create and edit launchers and links.</li>
    <li>Don't show 'eject' menu item if a removable volume is not really ejectable.</li>
    <li>Attempt to create ~/Desktop/ if it does not exist (only if the user turns on file/launcher icons).</li>
</ul>

<h3>Panel <em>(xfce4-panel)</em>:</h3>
<ul>
    <li>Set NET_WM_STRUT for compatibility with former specs.</li>
</ul>

<h3>Session Manager <em>(xfce4-session)</em>:</h3>
<ul>
    <li>Update dialogs to use the new XfceTitledDialog.</li>
    <li>Properly handle OnlyShowIn and NotShowIn in the autostart editor.</li>
    <li>Run discard command when client terminates unexpectedly.</li>
    <li>Use the new XfceTitledDialog.</li>
</ul>

<h3>Settings Manager <em>(xfce-mcs-manager)</em>:</h3>
<ul>
    <li>Restart xfce-mcs-manager instead of trying to unload/reload plugins when SIGUSR1 is received, to avoid possible crashes.</li>
    <li>Use the new XfceTitledDialog.</li>
</ul>

<h3>Settings Manager Plugins <em>(xfce-mcs-plugins)</em>:</h3>
<ul>
    <li>Keyboard Accessibility (sticky keys, slow keys, bound keys and mouse keys).</li>
    <li>Fix modifiers detection in shortcut editor.</li>
    <li>Use the new XfceTitledDialog.</li>
</ul>

<h3>File Manager <em>(thunar)</em>:</h3>
<ul>
    <li>See the release notes at <a href="http://thunar.xfce.org/news.html">http://thunar.xfce.org/news.html</a>.</li>
</ul>

<h3>Printing Helper <em>(xfprint)</em>:</h3>
<ul>
    <li>Use GtkIconTheme instead of deprecated XfceIconTheme</li>
</ul>

<h3>GTK theme engine <em>(gtk-xfce-engine-2)</em>:</h3>
<ul>
    <li>Change color of active window title.</li>
</ul>

<h3>Utilities <em>(xfce-utils)</em>:</h3>
<ul>
    <li>Set XDG_DATA_DIRS in startup script for people who install Xfce in a different root location from gtk+ itself.</li>
</ul>

<h3>Terminal Emulator <em>(terminal)</em>:</h3>
<ul>
    <li>A few performance improvements.</li>
    <li>Various usability improvements.</li>
</ul>

<h3>Text Editor <em>(mousepad)</em>:</h3>
<ul>
    <li>Fix segfault on file save on x86_64.</li>
    <li>Fix compilation errors.</li>
</ul>

<h3>Archive Manager <em>(xarchiver)</em>:</h3>
<ul>
    <li>First release as part of Xfce.</li>
    <li>Integration with thunar-archive-plugin.</li>
    <li>Increased speed! Xarchiver is faster than ever when opening archives.</li>
    <li>Added Drag and Drop from and to Xarchiver window by using the XDS protocol.</li>
    <li>Added the (in)famous cmd-line switches; see xarchiver -? for details.</li>
    <li>Added a Stop button who cancels the current operation or you can use the ESC key.</li>
    <li>Added the ability to test archives.</li>
    <li>Added an archive properties window showing useful info about the archive and its content.</li>
    <li>Added two menu entries in the Action menu to select or unselect the files in the treeview.</li>
    <li>Added support for ISO images (opening, extract and view only).</li>
    <li>&quot;Row selection while you type&quot; ability. Useful when you have thousand of files inside the archive.</li>
    <li>The extract dialog now &quot;remembers&quot; the last used extraction path.</li>
    <li>The extract dialog automatically sets the destination directory as the archive path.</li>
    <li>The enter key can be also used with the extract dialog.</li>
    <li>You can use accelerators (keyboard shortcuts) for almost the menu entries.</li>
    <li>The Del key can also be used instead of the Delete button on the toolbar.</li>
    <li>Removed the confirmation dialog when opening bzip2 and gzip compressed files.</li>
    <li>Added a confirmation dialog when deleting files from the archive.</li>
    <li>Finally fixed bug randomly causing rar and arj output badly appears.</li>
    <li>Finally fixed bug randomly causing tar.bz2 and tar.gz archives to be corrupted when deleting files from them.</li>
    <li>Fixed some memory leaks but surely someone is left  :).</li>
    <li>Fixed bug causing filenames with spaces inside the archive not being viewed.</li>
    <li>Fixed bug causing filenames with spaces in arj archives appear truncated in Xarchiver window.</li>
    <li>Fixed a bug preventing the file dialog to select more than one file when adding to arj archives.</li>
    <li>Fixed progress bar not appearing when adding only one big file to an archive.</li>
    <li>Fixed a bug causing Xarchiver to hang when opening empty zip archives.</li>
    <li>Fixed a bug causing Xarchiver to exit when opening a not supported archive directly from the command line.</li>
    <li>Fixed a bug preventing Xarchiver to compress files with bzip2 or gzip.</li>
</ul>
