<?php
function bug ($id){
	echo 'Bug <a href="http://bugzilla.xfce.org/show_bug.cgi?id='. $id .'" target="_blank">#'. $id .'</a>';
}

/*
	Replace the following characters:
	
	<	= &lt;
	>	= &gt;
	"	= &quot;
	&	= &amp;
*/
?>
<h1>Xfce 4.4.0 Changelog</h1>

<h3>Utilities Library <em>(libxfce4util)</em>:</h3>
<ul>
    <li>Updated translations: Szymon KaÅ‚asz (pl)</li>
    <li>New translations: Geraint Rowlands (cy), Jovan Naumovski (mk)</li>
</ul>

<h3>Widget Library <em>(libxfcegui4)</em>:</h3>
<ul>
    <li>Fix file conflict in xfce4-panel and xfce-mcs-plugins by moving the common icon xfce-filemanager to libxfcegui4 (<?php bug ('2033') ?>).</li>
</ul>

<h3>Settings Manager Library <em>(libxfce4mcs)</em>:</h3>
<ul>
    <li>Fix crashing g_ascii_strup() on 64bit platforms (<?php bug ('2563') ?>).</li>
</ul>

<h3>Extensions Library <em>(exo)</em>:</h3>
<ul>
    <li>Further clean up the ExoIconView code and add several small optimization.</li>
    <li>Import exo-mount utility to drop the dependency on other mount utilities, like pmount and gnome-mount, that don't work reliably, and were often the cause of trouble when mounting in Thunar.</li>
    <li>Add optional mount notify tool, which notifies the user that a device/media is begin unmounted by the system and gives a hint when the device/media can be disconnected/removed.</li>
    <li>Add exo-hal library, which provides several HAL related utility functions that have been deprecated in libhal-storage, but are required by several modules.</li>
    <li>Import ExoMountPoint module, which provides platform independent access to the configured and currently active mount points. This is required by other modules like exo-mount and thunar-vfs (for the trash implementation).</li>
    <li>Fix crash with certain kinds of discs (<?php bug ('2723') ?>).</li>
    <li>Detect complex mailto:-URIs properly (<?php bug ('2530') ?>).</li>
    <li>Fix compilation on amd64 (<?php bug ('2758') ?>).</li>
    <li>Fix a few memory leaks.</li>
    <li>Updated translations: Pau Rul-lan Ferragut (ca), Michal VÃ¡rady (cs), Benedikt Meurer (de), Stavros Giannouris (el), Piarres Beobide (eu), Piotr MaliÅ„ski and Szymon KaÅ‚asz (pl), Andrey Fedoseev (ru), Alexander Toresson (sv).</li>
    <li>New translations: Alexander Nyakhaychyk (be), Geraint Rowlands (cy), Pavle Jonoski (mk), Stephan Arts (nl), Amanpreet Singh Alam (pa).</li>
</ul>

<h3>Window Manager <em>(xfwm4)</em>:</h3>
<ul>
    <li>Use screen from xevent instead of client for keypress (<?php bug ('2749') ?>)</li>
    <li>Raise/focus when using alt+left-click for resize for consistency with move</li>
    <li>Be more permissive toward stick/unstick (<?php bug ('2735') ?>)</li>
    <li>Ignore focus stealing prevention between windows of the same group or between windows that have a transient relationship.</li>
    <li>Rework grab release (<?php bug ('2694') ?>)</li>
    <li>Fix display of ARGB32 windows with compositing enabled but without compositor active (<?php bug ('2710') ?>).</li>
    <li>Apply NET_WM_STATE_DEMANDS_ATTENTION changes (otherwise it breaks xfwm4 demand attention mechanism), but do not obey client state change requests for NET_WM_STATE_DEMANDS_ATTENTION if the client is already focused.</li>
    <li>Apply patch from Mike Massonnet that fixes an error in Stonage decoration theme (<?php bug ('2696') ?>)</li>
    <li>Do not apply NET_WM_STATE_DEMANDS_ATTENTION if client is already focused, as some apps seem to request NET_WM_STATE_DEMANDS_ATTENTION state even while focused (See comment #14 in <?php bug ('2678') ?>)</li>
    <li>Set the demands attention flag with focus prevention enabled only (<?php bug ('2678') ?>)</li>
    <li>Update the NET_WM_STATE when the client requests an update of NET_WM_STATE_DEMANDS_ATTENTION (<?php bug ('2678') ?>)</li>
    <li>Focus the internal fallback window when focus is transfered to a window that doesn't have InputHint set but  still use WM_PROTOCOLS_TAKE_FOCUS (ie, there is no way for the window manager to tell whether or not the client will accept focus in the end since focus is set by the client alone through the 'take focus' mechanism) (Fix <?php bug ('1853') ?> without breaking <?php bug ('2410') ?>)</li>
    <li>Fix redraw problem with compositor</li>
    <li>Update application icon asynchronously to avoid queuing useless icon updates (Ubuntu/Launchpad Bug #61424)</li>
    <li>Fix user focus timetamp being falsely reset to 0 causing some windows to be started un-focused (<?php bug ('2664') ?>), re-add some traces (which compile with -Werror this time), small code/api cleanup.</li>
    <li>Remove shadow on dock-type windows (<?php bug ('2648') ?>)</li>
    <li>Prevent fullscreen windows from beeing maximized (<?php bug ('2663') ?>).</li>
    <li>Use timestamp provided by NET_ACTIVE_WINDOW and NET_CURRENT_DESKTOP messages from EWMH version 1.3 and above, fix focus transition with NET_CURRENT_DESKTOP messages causing either flickering or wrong restacking on workspace switch (<?php bug ('2654') ?>)</li>
    <li>Quit nicely when MANAGE client message is received, so that xfwm4 obeys to ICCCM2 standard (<?php bug ('2374') ?>)</li>
    <li>Fix demands attention being activated when it shouldn't</li>
    <li>Improve focus stealing prevention.</li>
    <li>Auto-maximize regular windows only.</li>
    <li>Be a lot more paranoid about what broken apps set as struts.</li>
    <li>Plug a huge X resources leak in handleMappingNotify () (<?php bug ('2618') ?>)</li>
    <li>Do not prevent stick when skip taskbar is set</li>
    <li>Re-enable focus passing to previously focused window (req. on ML)</li>
    <li>Focus windows that raise themselves if focus stealing prevention is disabled, and set demands attention flag otherwise, that should improve focus prevention.</li>
    <li>Keep focus on sticky windows only for regular windows w/out skip taskbar/pager property (Bug 2603)</li>
    <li>Improve resize (<?php bug ('2597') ?>)</li>
    <li>Be more permissive with resizes towards struts (<?php bug ('2597') ?>, bis), optimize shape use.</li>
    <li>Fix off-by-one causing windows to be moved wrongly via keyboard (patch from Darren Salt (<?php bug ('2594') ?>)</li>
    <li>Enter key doesn't work for &quot;Add keybinding theme&quot; dialog (<?php bug ('2560') ?>, patch by Brian Tarricone</li>
    <li>Use focus pending with with apps that use WM_FLAG_TAKEFOCUS protocol too (<?php bug ('2561') ?>)</li>
    <li>Hide as more windows when showing desktop (<?php bug ('2518') ?>)</li>
    <li>Don't skip windows that have the skip pager/taskbar properties when searching for windows below the pointer (<?php bug ('2550') ?>)</li>
    <li>Fix focus transitionning to root taking into account the pending focus too, so that focus doesn't return to the fallback internal window when it should return to some other client window (like when an application closes with a modal dialog opened).</li>
    <li>Check for valid transient or modal when switching workspaces, to avoid missing windows to unmap (<?php bug ('2518') ?>).</li>
    <li>Use X server time to restore focus when sent to the root window (<?php bug ('2472') ?>)</li>
</ul>

<h3>Panel <em>(xfce4-panel)</em>:</h3>
<ul>
    <li>Many fixes when using the panel in a multiscreen setup</li>
    <li>Update or add blinking for urgent windows in taslist, windowlist and iconbox.</li>
    <li>Move test plugin to Xfce Goodies.</li>
    <li>Several fixes for (re)sizing and positioning behavior.</li>
    <li>Lots of small fixes and polish.</li>
    <li>Update manual.</li>
    <li>Many translation updates.</li>
</ul>

<h3>Session Manager <em>(xfce4-session)</em>:</h3>
<ul>
    <li>Improve the logout dialog (<?php bug ('2653') ?>).</li>
    <li>Fix poweroff on DragonFly BSD (<?php bug ('2567') ?>).</li>
    <li>Use Xrender to fadeout the background if cairo is available.</li>
    <li>Updated translations: Carles MuÃ±oz Gorriz (ca), Fabian Nowak (de), Rudy Godoy (es), Maximilian Schleiss (fr), Andrey Fedoseev (ru)</li>
    <li>New translations: Josip Dzolonga (mk)</li>
</ul>

<h3>Settings Manager <em>(xfce-mcs-manager)</em>:</h3>
<ul>
    <li>Open the settings dialog on the monitor with the pointer.</li>
</ul>

<h3>Settings Manager Plugins <em>(xfce-mcs-plugins)</em>:</h3>
<ul>
    <li>Use GtkFrame instead of XfceFrame in the UI plugin.</li>
    <li>Fix g_ascii_strup() and g_ascii_strdown() with length -1 on FC6/amd64 (<?php bug ('2563') ?>).</li>
    <li>Fix compilation without XKB.</li>
</ul>

<h3>Terminal Emulator <em>(terminal)</em>:</h3>
<ul>
    <li>Add support for real transparency with GTK+ 2.10 and a composition manager (<?php bug ('2671') ?>).</li>
    <li>Do not crash when you the first tab is detached and MiscAlwaysTabs is set to TRUE (<?php bug ('2686') ?>).</li>
    <li>Add support to reorder tabs with GTK+ 2.10 (<?php bug ('1974') ?>).</li>
    <li>Fix installation on case insensitive file systems (<?php bug ('2526') ?>).</li>
    <li>Updated translations: Michal Varady (cs), Benedikt Meurer (de), Stavros Giannouris (el), Piarres Beobide (eu), Jari Rahkonen (fi), Maximilian Schleiss (fr), Szymon KaÅ‚asz (pl), Andrey Fedoseev (ru).</li>
    <li>New translations: Alexander Nyakhaychyk (be), Amanpreet Singh Alam (pa).</li>
</ul>

<h3>Text Editor <em>(mousepad)</em>:</h3>
<ul>
    <li>Add support for the new recently-used database, using the GtkRecent functionality available in GTK+ 2.10 and later.</li>
    <li>Set default response in Open/Save dialogs (<?php bug ('2249') ?>).</li>
    <li>Merge new undo system.</li>
    <li>Updated translations: Carles MuÃ±oz Gorriz (ca), Michal VÃ¡rady (cz), Benedikt Meurer (de), Stavros Giannouris (el), Piarres Beobide (eu), Jari Rahkonen (fi), Maximilian Schleiss (fr), ByungHyun Choi (ko), Piotr MaliÅ„ski (pl), Adriano Winter Bess (pt_BR), Andrey Fedoseev (ru), Alexander Toresson (sv)</li>
    <li>New translations: Alexander Nyakhaychyk (be), Geraint Rowlands (cy), Tome Boshevski (mk), A S Alam (pa)</li>
</ul>

<h3>File Manager <em>(thunar)</em>:</h3>
<ul>
    <li>Add a &quot;Trash&quot; menu entry to the &quot;Go&quot; menu (<?php bug ('2486') ?>).</li>
    <li>Add a drop-down menu to the toolbar-style location bar to enable quick access to the shortcuts even if the classic file manager look'n'feel is being used (<?php bug ('2024') ?>).</li>
    <li>Add support for HAL on FreeBSD. Make HAL the preferred volume manager on FreeBSD.</li>
    <li>Adjust the preferences dialog to match the look of the other Xfce preferences dialogs (<?php bug ('2379') ?>).</li>
    <li>Allow to change the icon of .desktop files (<?php bug ('2150') ?>).</li>
    <li>Allow Thunar extensions to add menu items to the Drag'n'Drop context menu. This is for example used by the thunar-archive-plugin to add an &quot;Extract Here&quot; action, which extracts a dragged archive file at the drop location.</li>
    <li>Display the real mime type as tooltip for the &quot;Kind&quot; label in the properties dialog (<?php bug ('2369') ?>).</li>
    <li>Keep the modification time when copying files (<?php bug ('2244') ?>).</li>
    <li>Make sure emblems don't get too large with SVG icon themes (<?php bug ('2466') ?>).</li>
    <li>Make sure Thunar is restarted prior to xfdesktop, so the trash support in xfdesktop works as expected even if D-Bus autoactivation is not setup properly.</li>
    <li>Place automake options into configure.in.in instead of Makefile.am and add the tar-ustar option to fix building distributions on system where tar defaults to the deprecated V7 format (#2304).</li>
    <li>Place cursor on the first selected file after a new file or folder was created (<?php bug ('2368') ?>).</li>
    <li>Place focus on the main view after changing the current directory (<?php bug ('2367') ?>).</li>
    <li>Properly clean up the path bar when a folder that is currently displayed on the path bar is deleted.</li>
    <li>Properly validate the Name of .desktop files (<?php bug ('2227') ?>).</li>
    <li>Update the icon mime icon lookup to try icon names from Icon Naming Spec first, and fallback to legacy GNOME icon names.</li>
    <li>Use default dbus connection timeout (<?php bug ('2243') ?>).</li>
    <li>Use exo-open for the default &quot;Open Terminal Here&quot; action (<?php bug ('2256') ?>).</li>
    <li>Use the thumbnail database to load SVG icons from the icon theme, because loading SVG is quite slow and takes a lot more memory than loading and scaling PNG icons from the thumbnail database.</li>
    <li>Fix usage of deprecated HAL policy functions (<?php bug ('2475') ?>).</li>
    <li>Fix crash with newer GtkTreeView's if the &quot;row-has-child-toggled&quot; signal is emitted even if the child state of a node did not change (<?php bug ('2372') ?>).</li>
    <li>Fix several race conditions that were introduced over time and prevented the &quot;new-files&quot; job handling from working properly with Gamin and automatic folder reload (<?php bug ('2199') ?>).</li>
    <li>Fix invalid calculation of free space on OpenBSD/amd64 (<?php bug ('2383') ?>).</li>
    <li>Fix crash due to invalid handling of file names with printf(3)-style format arguments (<?php bug ('2468') ?>).</li>
    <li>Fix crash on systems with small per-thread stacks (<?php bug ('2269') ?>).</li>
    <li>Fix installation on Win32 platforms (<?php bug ('2432') ?>).</li>
    <li>Fix build with GLib 2.6.x (<?php bug ('2317') ?>).</li>
    <li>Fix build with latest dbus-glib (<?php bug ('2263') ?>).</li>
    <li>Updated translations: Pau Rul-lan Ferragut (ca), Michal VÃ¡rady (cs), Benedikt Meurer (de), Stavros Giannouris (el), Jarbas Araujo, Antono Vasiljev and Sylvain Vedrenne (eo), Piarres Beobide (eu), Jari Rhkonen (fi), Maximilian Schleiss (fr), Piotr MaliÅ„ski (pl), Adriano Winter Bess (pt_BR), Andrey Fedoseev (ru), Hydonsingore Cia (zh_TW)</li>
    <li>New translations: Sonam Pelden (dz)</li>
</ul>

<h3>Printing Helper <em>(xfprint)</em>:</h3>
<ul>
    <li>Prevent xfprint4 from removing the printed file when the filters aren't applied</li>
    <li>Fix incompatibility with CUPS 1.2 (<?php bug ('2107') ?>)</li>
    <li>Remove pointless warning messages</li>
    <li>Use themable 'printer' icon</li>
    <li>Add shortcuts in printer queue dialog</li>
</ul>

<h3>GTK theme engine <em>(gtk-xfce-engine-2)</em>:</h3>
<ul>
    <li>Several improvements to the default theme.</li>
    <li>Change the engine so that scrollbars show the trough border.</li>
</ul>

<h3>Development Tools <em>(xfce4-dev-tools)</em>:</h3>
<ul>
    <li>Add support for the latest GNU autotools (<?php bug ('2755') ?>).</li>
    <li>Make sure xgettext uses UTF-8 encoding for source files.</li>
</ul>

<h3>Utilities <em>(xfce-utils)</em>:</h3>
<ul>
    <li>Fix menu popup on wrong screen.</li>
    <li>Update the user guide.</li>
    <li>Several new and updated translations.</li>
</ul>

<h3>Volume Control <em>(xfce4-mixer)</em>:</h3>
<ul>
    <li>Several new and updated translations.</li>
</ul>

<h3>Calendar and Appointments <em>(xfcalendar)</em>:</h3>
<ul>
    <li>Fix possible crash in appointment timezone selection.</li>
    <li>Add missing revert/duplicate menu item sensitiviness settings.</li>
    <li>Several new and updated translations.</li>
</ul>

<h3>Application Finder <em>(xfce4-appfinder)</em>:</h3>
<ul>
    <li>Add themed icon support (<?php bug ('2651') ?>).</li>
    <li>Fix potential crash (<?php bug ('1882') ?>).</li>
    <li>Several new and updated translations.</li>
</ul>

<h3>Icon Theme <em>(xfce4-icon-theme)</em>:</h3>
<ul>
    <li>Switched to using xfce4-dev-tools and removed autogenerated files from the CVS repository.</li>
    <li>The index.theme was made translatable using intltool.</li>
    <li>Major icons changes, with new colors, smaller dark borders and some 3D effects.</li>
    <li>Several new icons, previously missing in mimetypes and stock categories.</li>
    <li>All icons have been resized so they let a little more space around them in apps which do not take care of that by themselves, like the Gnome panel/menu/file manager.</li>
</ul>
