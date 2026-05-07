<?php $head['title'] = 'Xfce 4.2.2 Changelog'; ?>

<h1>Xfce 4.2.2 Changelog</h1>

<h2>General</h2>
<ul>
  <li>New and updated translations: bn_IN, ca, cs, el, el_GR, eo, eu, fi, hu, ja, ko, mr, pl, ro, vi.</li>
  <li>New french documentation.</li>
</ul>

<h2>Libraries<em> (lib*)</em></h2>
<ul>
  <li>Libxfcegui4: Check <code>~/.local/share/pixmaps/</code> as a fallback (bug #731).</li>
</ul>

<h2>Window Manager <em>(xfwm4)</em></h2>
<ul>
  <li>Fix mouse buttons being left ungrabbed when focus was transfered to an unmanaged window.</li>
  <li>Document hidden option &quot;workspace_scroll&quot; (bug #948).</li>
  <li>Various focus issues (bug #759, bug #869, bug #899, bug #905, bug #924, bug #931).</li>
  <li>Fix pixmap depth not being properly set (bug #895).</li>
  <li>Refresh frame when &quot;skip taskbar&quot; state changes (bug #898).</li>
  <li>Allow seemless windows to be hidden from kbd shortcuts.</li>
  <li>Code cleanup.</li>
</ul>

<h2>Desktop Manager <em>(xfdesktop)</em></h2>
<ul>
  <li>Fix translation problems with menu panel plugin.</li>
  <li>Fix bug where binding 'xfdesktop -menu' only works sporadically (bug #441).</li>
  <li>Fix unresolved symbol problem with menu module.</li>
</ul>

<h2>Session Manager <em>(xfce4-session)</em></h2>
<ul>
  <li>Fix a crash with the MCS plugin.</li>
</ul>

<h2>File Manager <em>(xffm)</em></h2>
<ul>
  <li>Fix property dialog crahsing on FreeBSD (bug #945).</li>
  <li>Fix library version info not set on the properties module (bug #882, bug #249).</li>
  <li>Fix fstab parsing (bug #524).</li>
  <li>Fix compilation issues with ansi compiler and gcc4 (bug #862).</li>
</ul>

<h2>Printing Helper <em>(xfprint)</em></h2>
<ul>
  <li>Make bsdlpr plugin compile.</li>
  <li>Change CUPS detection code.</li>
  <li>Set correct ld flags (bug #871).</li>
  <li>Add support for printcap aliases (bug #821).</li>
  <li>Fix MCS plugin.</li>
</ul>

<h2>GTK theme engine <em>(gtk-xfce-engine-2)</em></h2>
<ul>
  <li>Fix various colors issues with ExoIconBar, prelight colors for treeview, Adobe&reg; Acrobat<small><sup>tm</sup></small> 7, progress bar, combo box, gtk scales (bug #848).</li>
</ul>

<h2>Utilities <em>(xfce-utils)</em></h2>
<ul>
  <li>Taskbar: Add a command option &quot;--monitor=x&quot; to allow specifying which monitor to use in Xinerama mode.</li>
</ul>

<h2>Volume Control <em>(xfce4-mixer)</em></h2>
<ul>
  <li>Fix a bug with ALSA.</li>
</ul>

<h2>Calendar and Appointments <em>(xfcalendar)</em></h2>
<ul>
  <li>Fix compiling with --enable-debug=full (bug #843).</li>
  <li>Remove C99 variable declaration and C++ comments.</li>
</ul>
