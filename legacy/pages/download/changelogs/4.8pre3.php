<?php $head['title'] = 'Xfce 4.8pre3 Changelog'; ?>

<h1>Xfce 4.8pre3 Changelog</h1>

<h2>Extension Library <em>(exo)</em></h2>

<ul>
  <li>Set application name for Thunar loop detection.</li>
  <li>Fix ABI check on ppc (bug #7008).</li>
  <li>Quote filenames with a space in the desktop editor (bug #6951).</li>
  <li>Translation updates (zh_CN, pt_BR, de, hu, pt, de, cs, en_GB, nb, sv, ar).</li>
</ul>

<h2>Widget Library <em>(libxfce4ui)</em></h2>

<ul>
  <li>Fix ABI check in ppc (bug #7005).</li>
  <li>Update default shortcuts for xfce4-display-settings (bug #7036).</li>
  <li>Translation updates (pt, he, cs, en_BG, nb, ar).</li>
</ul>

<h2>Utility Library <em>(libxfce4util)</em></h2>

<ul>
  <li>Fix ABI check on ppc (bug #7004).</li>
  <li>Translation updates (en_BG).</li>
</ul>

<h2>File Manager <em>(thunar)</em></h2>

<ul>
  <li>Fix unused variable warning when building with GLib &lt; 2.20.</li>
  <li>Fix file operation status icon not disappearing by hiding the icon prior to destroying it (bug #6891). Patch by Xavier D.</li>
  <li>Fix Gtk 2.16 function.</li>
  <li>Fix twp plugin for images with a quote in file name (bug #5056).</li>
  <li>Bump copyrights to 2011.</li>
  <li>Translation updates (zh_TW, de, cs, fi, uk, pt, ru, nb, ja, de, en_GB, sv, id, hr, ar).</li>
</ul>

<h2>Utilities <em>(xfce-utils)</em></h2>

<ul>
  <li>Send the xfrun4 caller environ over dbus (bug #6927).</li>
  <li>Don't show popup completion if there is a single match.</li>
  <li>Add an icon to the xfrun4 window.</li>
  <li>Append Xfce path to XDG_DATA_DIRS (bug #7040).</li>
  <li>Translation updates (he, de, zh_TW, sk, ru, pt, cs, ja, en_GB, sv, id, ug).</li>
</ul>

<h2>Application Finder <em>(xfce4-appfinder)</em></h2>

<ul>
  <li>Translation updates (pt, ja, he, lt, zh_CN, pt_BR, sk, cs, en_GB, nb, hr, pl, ar).</li>
</ul>

<h2>Panel <em>(xfce4-panel)</em></h2>

<ul>
  <li>Bind panel translation domain for external plugins (bug #6932).</li>
  <li>Allow reordering plugins in preferences with dnd.</li>
  <li>Open plugin preferences on double-click (bug #6975).</li>
  <li>Change launcher dnd code for plugin moving.</li>
  <li>Send drag motion event to parent widgets.</li>
  <li>Do not make the itembar insensitive (bug #6818).</li>
  <li>Fix some prototype variable names.</li>
  <li>Fix warning when removing a panel with a 4.6 plugin.</li>
  <li>Fix order of menu items based on screen position (bug #6978).</li>
  <li>Drop too-new Gtk API.</li>
  <li>Various improvements in the launcher dialog.</li>
  <li>Don't use the session manager in action plugin.</li>
  <li>Add option to filter tasklist window by monitor (bug #5199).</li>
  <li>Remove plugin when dropping in items dialog (bug #6976).</li>
  <li>Bump copyright to 2010 and fix licenses.</li>
  <li>Also load desktop files from xfce4/panel/plugins (bug #7013).</li>
  <li>Install desktop files in xfce4/plugins/actions (bug #7013).</li>
  <li>Make vertical clock rotation optional (bug #7002).</li>
  <li>Fix various size allocation issues in clock (bug #5219, bug #3960).</li>
  <li>Fix plugin dnd with locked panel and outside itembar.</li>
  <li>Add missing function to libxfce4panel.symbols.</li>
  <li>Fix ABI check on ppc (bug #7009).</li>
  <li>Fix typo in function name.</li>
  <li>Add application menu in default layout.</li>
  <li>Fix invalid unref.</li>
  <li>Make sure launchers are properly removed and saved.</li>
  <li>Fix vertical tasklist buttons in non-vertical mode.</li>
  <li>Fix thinko in screen handling (bug #6830).</li>
  <li>Workaround un nusable plugin when moving to other window.</li>
  <li>Add xfce_panel_pixbuf_from_source().</li>
  <li>Use xfce_panel_pixbuf_from_source() in XfcePanelImage.</li>
  <li>Use XfcePanelImage in the launcher menu.</li>
  <li>Use xfce_panel_pixbuf_from_source in launcher dialogs.</li>
  <li>Optimize loading icons from absolute paths.</li>
  <li>Fix some compiler warnings.</li>
  <li>Move hidden name handling to plugin.</li>
  <li>Use foreach to add application to store.</li>
  <li>Move arrow button to plugin widget (bug #6694).</li>
  <li>Only use orientation in systray box.</li>
  <li>Remove unused variables in box structures.</li>
  <li>Drop child structure from box and only use widgets.</li>
  <li>Improve sort function a bit + other tiny changes.</li>
  <li>Move composited child function to plugin.</li>
  <li>Use xfce_panel_pixbuf_from_source() to load known apps.</li>
  <li>Add some known tray application names.</li>
  <li>Try WM_NAME(STRING) too for tray application name.</li>
  <li>Redo icon positioning (bug #5565, bug #9650 and more).</li>
  <li>Drop some unused systray code.</li>
  <li>Block grabs from outside the panel.</li>
  <li>1x1 invisible icons doesn't seem to be true (bug #7044).</li>
  <li>Bump copyrights to 2011.</li>
  <li>Translation updates (ca, cs, da, de, en_GB, fi, gl, he, hr, hu, id, it, ja, kk, nb, pl, pt, pt_BR ru, sk, sv, uk, zh_TW).</li>
</ul>

<h2>Session Manager <em>(xfce4-session)</em></h2>

<ul>
  <li>Fix missing include.</li>
  <li>Do not register to menu else the panel never hides (bug #7020).</li>
  <li>Fix xfce4-session-logout --halt and --reboot (bug #5032).</li>
  <li>Translation updates (nb, cs, en_GB, sv, hr, pt).</li>
</ul>

<h2>Settings Manager <em>(xfce4-settings)</em></h2>

<ul>
  <li>Remove duplicated terminal entry in xfce4-settings-helper autostart desktop file (bug #6919).</li>
  <li>Set sensitivity of the corrent sound checkbox.</li>
  <li>Drop Glib 2.22 functions.</li>
  <li>Get adjustments from builder directly.</li>
  <li>Make sure default values are applied in dialogs.</li>
  <li>Don't use xrdb to update xft and cursor settings (bug #7014).</li>
  <li>Translations updates (de, cs, el, en_GB, nb, sv).</li>
</ul>

<h2>Configuration Manager <em>(xfconf)</em></h2>

<ul>
  <li>Updated translations: he, nb, en_GB, pt, ar.</li>
</ul>

<h2>Desktop Manager <em>(xfdesktop)</em></h2>

<ul>
  <li>Work around Gtk 2.16 function (bug #6883).</li>
  <li>Translation updates: sk, ru, cs, en_GB, lt, sv, nb, ar, pt).</li>
</ul>

<h2>Window Manager <em>(xfwm4)</em></h2>

<ul>
  <li>Fix bug #6651 Shape Mask Changes not Immediately Recognized by Xfwm4.</li>
  <li>Use Xsettings standard double-click-distance (bug #6334).</li>
  <li>Fix bug #6334.</li>
  <li>Fix bug #6334: Use lower prio for double click timeout.</li>
  <li>Thinner bottom frame.</li>
  <li>Double-click on edges trigger window fill in any given direction.</li>
  <li>Fix bug #6989.</li>
  <li>Fix bug #6589.</li>
  <li>Fix bug #6902.</li>
  <li>Fix application cycling.</li>
  <li>Translation updates (zh_TW, fi, uk, ca, nb, cs, ja, el, de, en_GB, sv, id, pt).</li>
</ul>
