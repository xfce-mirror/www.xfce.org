<?php
function bug ($id){
	echo 'bug <a href="http://bugzilla.xfce.org/show_bug.cgi?id='. $id .'" target="_blank">#'. $id .'</a>';
}
?>

<h1>Xfce 4.2.0 Changelog</h1>

<h3>General:</h3>
<ul>
	<li>Minimum required GTK version is 2.2 (2.4 is recommended).</li>
	<li>Overall usability improvements</li>
	<li>Improved Xinerama support.</li>
	<li>Improved support for Cygwin.</li>
	<li>Support for partial struts in xfwm4, xftaskbar4 and xfce4-panel.</li>
	<li>Freedesktop specifications compliance for menu and icons themes.</li>
	<li>New file locations based on the Freedesktop.org <a href="http://freedesktop.org/wiki/Standards/basedir-spec" target="_blank">XDG Basedir Specification</a> (all Xfce settings are now stored under the <tt>~/.config/xfce4/</tt> directory).</li>
	<li>New and updated translations.</li>
	<li>Support for <i>kiosk mode</i>, in which the allowed user actions can be restricted in xfce4-session, xfce4-panel, and xfdesktop (see included doc/README.Kiosk files).</li>
</ul>

<h3>Window Manager <em>(xfwm4)</em>: </h3>
<ul>
	<li>Native multiscreen support (manage all screens from a single window manager process).</li>
	<li>Enhanced support for Xinerama.</li>
	<li>Support for more hints from the Freedesktop.org Extended Window Manager Hints specification version 1.3 and above.</li>
	<li>Supports the <i>Show Desktop</i> protocol.</li>
	<li>Supports KDE context help.</li>
	<li>Support KDE system tray icons.</li>
	<li>Window menu features an <i>Always on top</i> option.</li>
	<li>Graphical keyboard shorcuts editor included in the xfwm settings manager dialog.</li>
	<li>Xfwm4 now has his own optional compositing manager (a manager for the new X Composite extension present in X.org 6.8). This adds a dropshadow to all windows and supports setting window transparency by applications themselves or by using a tool like transset.</li>
	<li>Improved focus management.</li>
	<li>Support for image composition with PNG images layered above the pixmap frame, allowing for gradients or other color effects.</li>
	<li>Completely new default look. Several new themes added.</li>
	<li>Change location of themes to be more in line with gtk, metacity, and others.</li>
	<li>Application's icon and name shown in the <i>Alt+Tab</i> dialog.</li>
</ul>

<h3>Desktop Manager <em>(xfdesktop)</em>:</h3>
<ul>
	<li>Gradient support for background color.</li>
	<li>Brightness adjustment for the backdrop.</li>
	<li>Real multiscreen and Xinerama support.</li>
	<li>Support for icons in window list and applications menu.</li>
	<li>Ability to disable/enable icons in each menu, or the menus entirely.</li>
	<li>Graphical menu editor with DnD support from xfce4-appfinder and .desktop files from Rox, Konqueror, Nautilus, Xffm, etc.</li>
	<li>Add &quot;-menu&quot;, &quot;-windowlist&quot; and &quot;-reload&quot; options for &quot;xfdesktop&quot;, to be used in keybindings.</li>
	<li>Support for 'system' menu, which lists all apps that install <tt>*.desktop</tt> files according to the Freedesktop.org Menu Spec.</li>
	<li>Panel plugin to show the menu (yes, it's a <i>Start button</i>).</li>
	<li>Use a menu cache to improve performance after it has been generated once.</li>
	<li>Kiosk mode support.</li>
</ul>

<h3>Panel <em>(xfce4-panel)</em>:</h3>
<ul>
	<li>New look with smaller move handles and new default icons.</li>
	<li>Uses global icon theme setting (in user interface dialog).</li>
	<li>Improved resizing and moving behaviour; panel is forced to be on the edges of the screen.</li>
	<li>The panel is now a dock type window, which means it will always be on top.</li>
	<li>Improved focus handling; clicking on the panel will not remove the focus from the currently active window.</li>
	<li>There can be only one panel per X screen. Multihead supported when environment is set up properly (DISPLAY variable).</li>
	<li>Support for kiosk mode.</li>
	<li>Unload unused plugins and dynamically update plugin list. Use dialog to add new panel items, instead of a submenu.</li>
	<li>Mail checker now supports mbox, Maildir and POP3.</li>
	<li>Support for dragging applications from xfce4-appfinder to a launcher properties dialog.</li>
	<li>Transparency when the X Composite extension is enabled and the window manager supports it.</li>
	<li>Backward compatibility with the Xfce Goodies plugins available from <a href="http://xfce-goodies.berlios.de/" target="_blank">http://xfce-goodies.berlios.de/</a>.</li>
</ul>

<h3>New Session Manager <em>(xfce4-session)</em>:</h3>
<ul>
	<li>New module in 4.2: manage applications on Xfce startup.</li>
	<li>Themeable splash screen engines.</li>
	<li>System shutdown/reboot support using the <i>sudo</i> mechanism.</li>
	<li>Major performance improvements over the previous snapshot versions.</li>
	<li>GNOME/KDE compatibility.</li>
	<li>Native multihead support (Xinerama and multiscreen).</li>
	<li>Doesn't rely on smproxy (or any rewrite like gnome-smproxy), but provides (partial) session management, even for non-SM or X11R5-SM aware apps.</li>
	<li>Kiosk mode support.</li>
</ul>

<h3>Settings Manager <em>(xfce-mcs-manager)</em>:</h3>
<ul>
	<li>New dialog layout: buttons have a label below icon and are arranged in multiple columns.</li>
	<li>Font rendering setup dialog.</li>
	<li>Merged Desktop Workspaces and Workspace Margins dialogs.</li>
	<li>Display resolution and gamma correction dialog.</li>
	<li>API version was bumped (plugins linked against the old version won't work until you recompile them).</li>
	<li>Customizable icons.</li>
</ul>

<h3>File Manager <em>(xffm)</em>:</h3>
<ul>
	<li>Two independent panes (eliminated confusing behaviour from 4.0.x).</li>
	<li>Completely reworked toolbars and menus.</li>
	<li>Better archiving support (creating tar/tar.gz/tar.bz2 archives).</li>
	<li>Improved trash handling with support for GNOME and KDE trash bins.</li>
	<li>Use global icon theme (user interface dialog).</li>
	<li>Allow user customization of icon themes.</li>
	<li>Improved Samba support (allow mount/unmount, double click, monitor downloads).</li>
	<li>Keeps track of recently and frequently opened files.</li>
	<li>Applications branch is now a toolbar (only available if compiled with &quot;--enable-panel&quot;).</li>
	<li>Ability to change file name, group, owner and mode allowed from inline row editing.</li>
	<li>Dynamic sidebar.</li>
	<li>Improved Asian language support.</li>
	<li>Pastelink option added (i.e., create symlinks to pasteboard elements).</li>
	<li>Recursive scrambling of directories (only available if compiled with &quot;--enable-scrambledir&quot;).</li>
	<li>Mount/unmount of fstab points allowed from outside fstab branch (by popup menu).</li> 
	<li>Mouse selection behaviour configurable by user.</li>
	<li>Verbose/nonverbose diagnostics configurable by user.</li>
	<li>Renaming of bookmark elements allowed.</li>
	<li>Noticeable performance improvements under the hood.</li>
	<li>Search window called directly by invoking xfglob4.</li>
	<li>Files opened directly with associated mimetype application if invoked with &quot;xffm filename&quot; (path to filename can be absolute, relative or relative to homedir).</li> 
</ul>

<h3>Printing Helper <em>(xfprint)</em>:</h3>
<ul>
	<li>Completely rewritten to use a pluggable printing backend system.</li>
	<li>Use either CUPS, BSD-LPR, or a file as the print destination; printers are retrieved from the chosen printing system (no need to add printers to the list manually).</li>
</ul>

<h3>GTK theme engine <em>(gtk-xfce-engine-2)</em>:</h3>
<ul>
	<li>Completely new default theme.</li>
	<li>Improved drawing of control elements to enhance usability.</li>
</ul>

<h3>Utilities <em>(xfce-utils)</em>:</h3>
<ul>
	<li>Configurable taskbar width and height.</li>
	<li>Taskbar has <i>always group tasks</i> option.</li> 
	<li>Taskbar has selectable left/center/right alignment and variable width.</li>
	<li>Taskbar has right-click action menu.</li>
	<li>Call 'xfrun4 filename' to get an 'Open with...' dialog.</li>
	<li>Taskbar has option to show only icons.</li>
	<li>About dialog can be compiled with extra vendor information.</li>
	<li>Run dialog now properly checks if command fails.</li> 
	<li>Updated user guide.</li>
	<li>Small changes to startup script and xfhelp4 script.</li>
</ul>

<h3>Volume Control <em>(xfce4-mixer)</em>:</h3>
<ul>
	<li>Complete rewrite of the mixer with settings manager dialog.</li>
	<li>Mixer profiles.</li> 
	<li>Support for ALSA, OSS and Sun audio.</li>
</ul>

<h3>Calendar and Appointments <em>(xfcalendar)</em>:</h3>
<ul>
	<li>First day of the week option removed (managed through the <i>locale</i> settings in gtk 2.4 and above).</li>
</ul>

<h3>New Application Finder <em>(xfce4-appfinder)</em>:</h3>
<ul>
	<li>New module in Xfce 4.2: find (and run) applications.</li>
	<li>Alternative interface to the application menu.</li>
</ul>

<h3>Icon Box <em>(xfce4-iconbox)</em>:</h3>
<ul>
	<li>Make iconbox a dock type window (always on top), like the panel.</li>
	<li>Make the iconbox transparency configurable when using the X Composite extension.</li>
</ul>

<h3>Icon Theme <em>(xfce4-icon-theme)</em>:</h3>
<ul>
	<li>New module in Xfce 4.2: Freedesktop.org icon theme with special icons for Xfce; it includes both PNG and SVG icons.</li>
</ul>

<h3>Toys <em>(xfce4-toys)</em>:</h3>
<ul>
	<li>Updated tips.</li>
</ul>
