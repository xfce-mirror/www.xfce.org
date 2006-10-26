<?php
function bug ($id){
	echo 'bug <a href="http://bugzilla.xfce.org/show_bug.cgi?id='. $id .'" target="_blank">#'. $id .'</a>';
}
?>

<h1>Xfce 4.2.1 Changelog</h1>

<h3>General:</h3>
<ul>   
	<li>Don't use <tt>G_INLINE_FUNC</tt> in the source code, which fixes several weird build errors.</li> 
</ul>

<h3>Libraries<em> (lib*)</em>:</h3>
<ul>   
	<li>Libxfce4util: Fix a problem with NFS mounted home directories in Solaris (<?php bug ('724') ?>)</li>
</ul> 

<h3>Window Manager <em>(xfwm4)</em>:</h3>
<ul>
	<li>Speed improvement with GLX applications</li>
	<li>Fix Alt-Tab not focusing a window alone on a desktop (<?php bug ('700') ?>)</li>
	<li>Kbd shortcuts don't work when caps lock is enabled (<?php bug ('689') ?>)</li>
	<li>Window not showing when compositor is enabled (<?php bug ('694') ?>)</li>
	<li>Documentation on command line option to enable/disable xfwm4 compositor (<?php bug ('611') ?>)</li>
	<li>Improve caching of frame elements</li>
	<li>Fix default theme for dark gtk themes (such as Xfce-dusk)</li>
	<li>Various focusing issues fixed</li>
	<li>Optimizations of move/resize operations (<?php bug ('761') ?>)</li>
	<li>Auto maximize windows larger that screen size.</li>
	<li>Be more tolerant with apps manipulating frameless windows.</li>
	<li>Focus window on top of stack on workspace switch if no other window is eligible for focus.</li>
	<li>Fix uninitialized default layer for fullscreen legacy apps.</li>
	<li>Updated translations : he, ja, pt_br, zh_CN, fi, lt, ko</li>
</ul>

<h3>Desktop Manager <em>(xfdesktop)</em>:</h3>
<ul>
	<li>Fix handling of quoted commands in the desktop menu (<?php bug ('776') ?>)</li>
	<li>Fix handling of .desktop files with no Categories list (<?php bug ('776') ?>)</li>
	<li>Add &quot;edit menu&quot; button to panel plugin prefs (<?php bug ('554') ?>), and ability to  change the button tooltip (<?php bug ('764') ?>)</li>
	<li>Fix broken panel plugin behavior when trying to track the default desktop menu. there's a new option to either follow the default menu, or use a static menu file (<?php bug ('778') ?>)</li>
	<li>Fix bug where xfdesktop would crash if the windowlist was opened, then a window was destroyed, and then that window was selected from the list (<?php bug ('672') ?>)</li>
	<li>Fix &quot;unique&quot; attribute of system menu inclusion</li>
</ul> 

<h3>Panel <em>(xfce4-panel)</em>:</h3>
<ul>
	<li>Save configuration file only on exit</li>
	<li>Fix double click on inactive item in dialog (<?php bug ('739') ?>)</li>
	<li>64bit fix</li>
	<li>Clock applet tweak (<?php bug ('716') ?>, hopefully)</li>
</ul>

<h3>Settings Manager <em>(xfce-mcs-manager)</em>:</h3>
<ul>
	<li>Fix RedHat shutdown code (<?php bug ('703') ?>)</li>
</ul>

<h3>File Manager <em>(xffm)</em>:</h3>
<ul>
	<li>Ensure posix.1-1996 compatibility (<?php bug ('695') ?>)</li>
	<li>Fix for crash on opening fstab on solaris (<?php bug ('726') ?>)</li>
	<li>Avoid a showstopper gtk-2.4 bug (scaling gdkpixbufs from svg images). This is bugzilla <?php bug ('751') ?> report. Not all gtk showstopper bugs from svg can be avoided. In particular with office/mobile_phone_01.svg. This file will also crash rox</li>
	<li>Allow relative paths for icon resolution (xfce4-modules)</li>
	<li>Validate utf error messages (<?php bug ('737') ?>)</li>
	<li>Don't quote paths that are already quoted.</li>
	<li>Change smb-share icon to proper icon</li>
	<li>Fix borked overwrite warning dialog message</li>
	<li>Bug fixes for keyboardnavigation to close <?php bug ('795') ?></li>
	<li>Separate remove and paste button in toolbar to avoid confusing the remove confirmation dialog with the overwrite confirmation dialog</li>
	<li>Fix translation problems in several languages, including brazilian-portuguese</li>
	<li>Fill in some missing spanish translation strings</li>
	<li>Fix for <?php bug ('524') ?> (crashing xffm by mounting cdrom and trying to open it in the other treeview before mount is complete)</li> 
</ul>

<h3>Printing Helper <em>(xfprint)</em>:</h3>
<ul>
	<li>Remove FILE backend and add a print-to-file entry in the printing dialog</li>
	<li>Multiple bugfixes (<?php bug ('816') ?>, <?php bug ('817') ?>, <?php bug ('818') ?>, <?php bug ('820') ?>) in the BSD-LPR backend (thanks to Jason Keltz for pointing them out)</li>
</ul>

<h3>GTK theme engine <em>(gtk-xfce-engine-2)</em>:</h3>
<ul>
	<li>Add new dark theme &quot;Xfce-dusk&quot; contributed by James Golden</li>
	<li>Improve default theme, enhance contrasts.</li>
	<li>Rework progress bar drawing.</li>
</ul>

<h3>Calendar and Appointments <em>(xfcalendar)</em>:</h3>
<ul>
	<li>Remembering of its position (<?php bug ('691') ?> and  <?php bug ('789') ?>)</li>
	<li>Warning box for preventing users to loose their changes (<?php bug ('714') ?> and <?php bug ('738') ?>)</li>
	<li>Possibility to show/hide xfcalendar in taskbar, pager and systray (<?php bug ('719') ?>)</li>
	<li>possibility to choose to either show or hide the calendar window when xfcalendar is launched (it remembered before the status when leaving)</li>
</ul>
