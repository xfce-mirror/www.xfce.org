

<h1>Xfce 4.2.1 Changelog</h1>

<h2>General</h2>
<ul>   
  <li>Don't use <tt>G_INLINE_FUNC</tt> in the source code, which fixes several weird build errors.</li> 
</ul>

<h2>Libraries<em> (lib*)</em></h2>
<ul>   
  <li>Libxfce4util: Fix a problem with NFS mounted home directories in Solaris (bug #724)</li>
</ul> 

<h2>Window Manager <em>(xfwm4)</em></h2>
<ul>
  <li>Speed improvement with GLX applications</li>
  <li>Fix Alt-Tab not focusing a window alone on a desktop (bug #700)</li>
  <li>Kbd shortcuts don't work when caps lock is enabled (bug #689)</li>
  <li>Window not showing when compositor is enabled (bug #694)</li>
  <li>Documentation on command line option to enable/disable xfwm4 compositor (bug #611)</li>
  <li>Improve caching of frame elements</li>
  <li>Fix default theme for dark gtk themes (such as Xfce-dusk)</li>
  <li>Various focusing issues fixed</li>
  <li>Optimizations of move/resize operations (bug #761)</li>
  <li>Auto maximize windows larger that screen size.</li>
  <li>Be more tolerant with apps manipulating frameless windows.</li>
  <li>Focus window on top of stack on workspace switch if no other window is eligible for focus.</li>
  <li>Fix uninitialized default layer for fullscreen legacy apps.</li>
  <li>Updated translations : he, ja, pt_br, zh_CN, fi, lt, ko</li>
</ul>

<h2>Desktop Manager <em>(xfdesktop)</em></h2>
<ul>
  <li>Fix handling of quoted commands in the desktop menu (bug #776)</li>
  <li>Fix handling of .desktop files with no Categories list (bug #776)</li>
  <li>Add &quot;edit menu&quot; button to panel plugin prefs (bug #554), and ability to  change the button tooltip (bug #764)</li>
  <li>Fix broken panel plugin behavior when trying to track the default desktop menu. there's a new option to either follow the default menu, or use a static menu file (bug #778)</li>
  <li>Fix bug where xfdesktop would crash if the windowlist was opened, then a window was destroyed, and then that window was selected from the list (bug #672)</li>
  <li>Fix &quot;unique&quot; attribute of system menu inclusion</li>
</ul> 

<h2>Panel <em>(xfce4-panel)</em></h2>
<ul>
  <li>Save configuration file only on exit</li>
  <li>Fix double click on inactive item in dialog (bug #739)</li>
  <li>64bit fix</li>
  <li>Clock applet tweak (bug #716, hopefully)</li>
</ul>

<h2>Settings Manager <em>(xfce-mcs-manager)</em></h2>
<ul>
  <li>Fix RedHat shutdown code (bug #703)</li>
</ul>

<h2>File Manager <em>(xffm)</em></h2>
<ul>
  <li>Ensure posix.1-1996 compatibility (bug #695)</li>
  <li>Fix for crash on opening fstab on solaris (bug #726)</li>
  <li>Avoid a showstopper gtk-2.4 bug (scaling gdkpixbufs from svg images). This is bugzilla bug #751 report. Not all gtk showstopper bugs from svg can be avoided. In particular with office/mobile_phone_01.svg. This file will also crash rox</li>
  <li>Allow relative paths for icon resolution (xfce4-modules)</li>
  <li>Validate utf error messages (bug #737)</li>
  <li>Don't quote paths that are already quoted.</li>
  <li>Change smb-share icon to proper icon</li>
  <li>Fix borked overwrite warning dialog message</li>
  <li>Bug fixes for keyboardnavigation to close bug #795</li>
  <li>Separate remove and paste button in toolbar to avoid confusing the remove confirmation dialog with the overwrite confirmation dialog</li>
  <li>Fix translation problems in several languages, including brazilian-portuguese</li>
  <li>Fill in some missing spanish translation strings</li>
  <li>Fix for bug #524 (crashing xffm by mounting cdrom and trying to open it in the other treeview before mount is complete)</li> 
</ul>

<h2>Printing Helper <em>(xfprint)</em></h2>
<ul>
  <li>Remove FILE backend and add a print-to-file entry in the printing dialog</li>
  <li>Multiple bugfixes (bug #816, bug #817, bug #818, bug #820) in the BSD-LPR backend (thanks to Jason Keltz for pointing them out)</li>
</ul>

<h2>GTK theme engine <em>(gtk-xfce-engine-2)</em></h2>
<ul>
  <li>Add new dark theme &quot;Xfce-dusk&quot; contributed by James Golden</li>
  <li>Improve default theme, enhance contrasts.</li>
  <li>Rework progress bar drawing.</li>
</ul>

<h2>Calendar and Appointments <em>(xfcalendar)</em></h2>
<ul>
  <li>Remembering of its position (bug #691 and  bug #789)</li>
  <li>Warning box for preventing users to loose their changes (bug #714 and bug #738)</li>
  <li>Possibility to show/hide xfcalendar in taskbar, pager and systray (bug #719)</li>
  <li>possibility to choose to either show or hide the calendar window when xfcalendar is launched (it remembered before the status when leaving)</li>
</ul>
