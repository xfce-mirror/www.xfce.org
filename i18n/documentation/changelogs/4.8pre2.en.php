<?php
function bug ($id){
    echo 'bug <a href="http://bugzilla.xfce.org/show_bug.cgi?id='. $id .'">#'. $id .'</a>';
}
?>

<h2>Xfce 4.8pre1 Changelog</h2>

<h3>Extension Library <em>(exo)</em>:</h3>

<ul>
  <li>Fix opening of URIs with spaces in claws-mail and sylpheed.</li>
  <li>Fix two @libexecdir@ -> @HELPERDIR@ replacements.</li>
  <li>Add Icedove helper.</li>
  <li>Fix Opera helper with Opera newer as 10.60.</li>
  <li>Add mime types to the exo-open desktop files (<?php bug('6800') ?>).</li>
  <li>Store preferred application in mimeapps.list (<?php bug('6800') ?>).</li>
  <li>Don't build the GIO module after glib 2.27 (<?php bug('6800') ?>).</li>
  <li>Make exo-open more standalone (<?php bug('6573') ?>).</li>
  <li>Translation updates (ug, gl, zh_TW, ru, sk, ja, el, sv, es, eu, hu, pt, kk, it, ja, he, uk, ca, da, id).</li>
</ul>

<h3>Widget Library <em>(libxfce4ui)</em>:</h3>

<ul>
  <li>Also request an interact for save-state-extended.</li>
  <li>Return a NULL state file is the sm-client is disabled.</li>
  <li>Fix the save-state signal.</li>
  <li>Translation updates (pt).</li>
</ul>

<h3>Utility Library <em>(libxfce4util)</em>:</h3>

<ul>
  <li>Fix wrong capitalization of Xfce.</li>
  <li>Fix stdarg.h include (<?php bug('6897') ?>).</li>
  <li>Translation updates (pt).</li>
</ul>

<h3>File Manager <em>(thunar)</em>:</h3>

<ul>
  <li>Make .desktop entries installed by Thunar validate against desktop-file-utils 0.16 (<?php bug('6655') ?>). Patch by Samuli Suominen.</li>
  <li>Fix missing instruction to load the sendto model (<?php bug('6762') ?>).</li>
  <li>Allow scrolling in the 'Open With' combo box of the file properties dialog (<?php bug('3055') ?>).</li>
  <li>Expand filenames starting with './' based on the current working directory instead of home (<?php bug('3451') ?>).</li>
  <li>Print an error if thunar-settings fails to contact the file manager service (<?php bug('6547') ?>).</li>
  <li>Permanently delete files if at least one of them cannot be trashed (<?php bug('6748') ?>).</li>
  <li>Fix a typo in configure.in.in (<?php bug('6724') ?>).</li>
  <li>Use GTK_STOCK_FILE as the fallback icon for files (<?php bug('6662') ?>).</li>
  <li>Use Name field as display name of desktop entries (<?php bug('6860') ?>).</li>
</ul>

<h3>Utilities <em>(xfce-utils)</em>:</h3>

<ul>
  <li>Return support for vendor information.</li>
  <li>Hookup the help button in xfce4-about.</li>
  <li>Fix typo in xfce4-about --help.</li>
  <li>Fix some wrong capitalizations of Xfce.</li>
  <li>Translation updates (id, zh_TW, kk, it, fi, gl, da, ca, pt, uk, eu, sk, de, hu).</li>
</ul>

<h3>Application Finder <em>(xfce4-appfinder)</em>:</h3>

<ul>

</ul>

<h3>Panel <em>(xfce4-panel)</em>:</h3>

<ul>
  <li>Don't destroy the about dialog.</li>
  <li>Allow using enter in the launcher treeviews.</li>
  <li>Fix crash in always group mode (<?php bug('6792') ?>).</li>
  <li>Drop the automatic grouping option from tasklist; not implemented yet.</li>
  <li>Fix Gdk key macro names.</li>
  <li>Fix confustion with panel opacity (<?php bug('6827') ?>).</li>
  <li>Make miniature view the default in the pager (<?php bug('6825') ?>).</li>
  <li>Fix wrong capitalization of Xfce.</li>
  <li>Fix issue in systray size allocation with 1 row (<?php bug('6809') ?>).</li>
  <li>Fix 'add launcher' desktop file.</li>
  <li>Improve debugging output for display changes.</li>
  <li>Restore shadow of spin button in systray dialog.</li>
  <li>Add function to return the Xfconf panel name.</li>
  <li>Warning why # pager rows does not apply (<?php bug('6555') ?>).</li>
  <li>Gracefully handle abort signal (<?php bug('6563') ?>).</li>
  <li>Restart the panel if we receive SIGUSR1.</li>
  <li>Fix format of 12-hour clock.</li>
  <li>Add option to not rotate buttons in vertical panel (<?php bug('6687') ?>).</li>
  <li>Propertly handle insensitive clock colors.</li>
  <li>Set correct session priority.</li>
  <li>Improve support for a menu editor (alacarte) in the applications menu.</li>
  <li>Don't destroy the application menu under the users' cursor on reload.</li>
  <li>Add window DND to the pager in tasklist.</li>
  <li>Make viewports work in the tasklist (<?php bug('6898') ?> and <?php bug('6665') ?>).</li>
  <li>Support viewports in button pager.</li>
  <li>Translation updates (be, ca, da, de, eu, fi, gl, hu, id, it, ja, kk, nl, pt, sk, ta, uk, zh_CN, zh_TW).</li>
</ul>

<h3>Session Manager <em>(xfce4-session)</em>:</h3>

<ul>
<li>Do not try "unix-session" authorization with PolicyKit as this seems to be either broken or not implemented in PolicyKit (<?php bug('6817') ?>). This fixes suspend/hibernate in xfce4-session-logout.</li>
  <li>Fix possibly shadowed variables.</li>
  <li>Fix compilation on FreeBSD with polkit (<?php bug('6870') ?>).</li>
  <li>Restore splash screen functionality (<?php bug('6831') ?>).</li>
  <li>Fix logout with sudo.</li>
  <li>Translation updates (de, pt_BR, zh_CN, el, uk, it, id, ja, kk, pt).</li>
</ul>

<h3>Settings Manager <em>(xfce4-settings)</em>:</h3>

<ul>
  <li>Use xfconf_channel_get instead of xfconf_channel_new.</li>
  <li>Don't activate numlock on first launch.</li>
  <li>Fix wrong capitalizations of Xfce.</li>
  <li>Fix compiler warnings.</li>
  <li>Drop Xfce from the settings manager .desktop name.</li>
  <li>Fix free of invalid memory (<?php bug('6909') ?>).</li>
  <li>Translations updates (hu, zh_CN, he, pt, gl).</li>
</ul>

<h3>Configuration Manager <em>(xfconf)</em>:</h3>

<ul>
<li>Don't enable options with --disable-$option (<?php bug('6820') ?>).</li>
  <li>Use G_GSIZE_FORMAT in the DBG message.</li>
  <li>Add doc module to fixxref options (<?php bug('6304') ?>).</li>
  <li>Link the gtkdoc scanner to GObject and Glib (<?php bug('6407') ?>).</li>
  <li>Check for perl outside bindings option for alias script (<?php bug('6481') ?>).</li>
  <li>Move xfconfd from $libexecdir to $libdir.</li>
  <li>Updated translations: kk, bn, uk, si, it, sk, fr, id, zh_TW, de, pt, ug.</li>
</ul>

<h3>Desktop Manager <em>(xfdesktop)</em>:</h3>

<ul>
  <li>Fix a crash caused by accessing the wrong variable when adding items to the right-click menu.</li>
  <li>Select the correct icon style in the desktop settings on first start (<?php bug('6798') ?>).</li>
  <li>Depend on libwnck newer as 2.22 so we no longer have to implement hacks for the two different "active-workspace-changed" signal variants in libwnck (<?php bug('6638') ?>).</li>
  <li>Add menu item monitoring.</li>
  <li>Fix critical when session manager is not running (<?php bug('6822') ?>).</li>
  <li>Remove checks for older GLib/GTK+ versions that are no longer needed.</li>
  <li>Allow workspace names that start with a number (<?php bug('6318') ?>).</li>
  <li>Delay notification initialization until we show one.</li>
  <li>Set the correct session priority.</li>
  <li>Do not call gtk_widget_show() on menus (<?php bug('6198') ?>).</li>
  <li>Translation updates: gl, ca, de, it, kk, fi, sk, pt, uk, el, zh_TW, da, id, eu, hu, lt.</li>
</ul>

<h3>Window Manager <em>(xfwm4)</em>:</h3>



