<?php
function bug ($id){
	echo 'bug <a href="http://bugzilla.xfce.org/show_bug.cgi?id='. $id .'" target="_blank">#'. $id .'</a>';
}
?>

<h1>Xfce 4.2.2 Changelog</h1>

<h3>General:</h3>
<ul>
	<li>New and updated translations: bn_IN, ca, cs, el, el_GR, eo, eu, fi, hu, ja, ko, mr, pl, ro, vi.</li>
	<li>New french documentation.</li>
</ul>

<h3>Libraries<em> (lib*)</em>:</h3>
<ul>
	<li>Libxfcegui4: Check <code>~/.local/share/pixmaps/</code> as a fallback (<?php bug ('731') ?>).</li>
</ul>

<h3>Window Manager <em>(xfwm4)</em>:</h3>
<ul>
	<li>Fix mouse buttons being left ungrabbed when focus was transfered to an unmanaged window.</li>
	<li>Document hidden option &quot;workspace_scroll&quot; (<?php bug ('948') ?>).</li>
	<li>Various focus issues (<?php bug ('759') ?>, <?php bug ('869') ?>, <?php bug ('899') ?>, <?php bug ('905') ?>, <?php bug ('924') ?>, <?php bug ('931') ?>).</li>
	<li>Fix pixmap depth not being properly set (<?php bug ('895') ?>).</li>
	<li>Refresh frame when &quot;skip taskbar&quot; state changes (<?php bug ('898') ?>).</li>
	<li>Allow seemless windows to be hidden from kbd shortcuts.</li>
	<li>Code cleanup.</li>
</ul>

<h3>Desktop Manager <em>(xfdesktop)</em>:</h3>
<ul>
	<li>Fix translation problems with menu panel plugin.</li>
	<li>Fix bug where binding 'xfdesktop -menu' only works sporadically (<?php bug ('441') ?>).</li>
	<li>Fix unresolved symbol problem with menu module.</li>
</ul>

<h3>Session Manager <em>(xfce4-session)</em>:</h3>
<ul>
	<li>Fix a crash with the MCS plugin.</li>
</ul>

<h3>File Manager <em>(xffm)</em>:</h3>
<ul>
	<li>Fix property dialog crahsing on FreeBSD (<?php bug ('945') ?>).</li>
	<li>Fix library version info not set on the properties module (<?php bug ('882') ?>, <?php bug ('249') ?>).</li>
	<li>Fix fstab parsing (<?php bug ('524') ?>).</li>
	<li>Fix compilation issues with ansi compiler and gcc4 (<?php bug ('862') ?>).</li>
</ul>

<h3>Printing Helper <em>(xfprint)</em>:</h3>
<ul>
	<li>Make bsdlpr plugin compile.</li>
	<li>Change CUPS detection code.</li>
	<li>Set correct ld flags (<?php bug ('871') ?>).</li>
	<li>Add support for printcap aliases (<?php bug ('821') ?>).</li>
	<li>Fix MCS plugin.</li>
</ul>

<h3>GTK theme engine <em>(gtk-xfce-engine-2)</em>:</h3>
<ul>
	<li>Fix various colors issues with ExoIconBar, prelight colors for treeview, Adobe&reg; Acrobat<small><sup>tm</sup></small> 7, progress bar, combo box, gtk scales (<?php bug ('848') ?>).</li>
</ul>

<h3>Utilities <em>(xfce-utils)</em>:</h3>
<ul>
	<li>Taskbar: Add a command option &quot;--monitor=x&quot; to allow specifying which monitor to use in Xinerama mode.</li>
</ul>

<h3>Volume Control <em>(xfce4-mixer)</em>:</h3>
<ul>
	<li>Fix a bug with ALSA.</li>
</ul>

<h3>Calendar and Appointments <em>(xfcalendar)</em>:</h3>
<ul>
	<li>Fix compiling with --enable-debug=full (<?php bug ('843') ?>).</li>
	<li>Remove C99 variable declaration and C++ comments.</li>
</ul>
