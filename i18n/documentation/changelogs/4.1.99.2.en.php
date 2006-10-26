<?php
function bug ($id){
	echo 'bug <a href="http://bugzilla.xfce.org/show_bug.cgi?id='. $id .'">#'. $id .'</a>';
}
?>

<h1>Xfce 4.2 RC2 Changelog:</h1>

<h3>General:</h3>
<ul>
	<li>Updated Portuguese translation (thanks to Adriano winter Bess)</li>
	<li>Numerous documentation fixes</li>
</ul>

<h3>Window Manager <em>(xfwm4)</em>:</h3>
<ul>
	<li>Opacity is properly restored after a move/resize</li>
	<li>Wrap workspaces now works when compositor is enabled</li>
	<li>Solaris fixes</li>
</ul>

<h3>Desktop Manager <em>(xfdesktop)</em>:</h3>
<ul>
	<li>Fix bug where sticky windows aren't shown in the window list</li>
	<li>Removed the add/remove workspace option for stability reasons</li>
</ul>

<h3>Panel <em>(xfce4-panel)</em>:</h3>
<ul>
	<li>Fix text selection being lost when validating icon in item dialog</li>
</ul>

<h3>File Manager <em>(xffm)</em>:</h3>
<ul>
	<li>A fix for the problem with toggling hidden files on/off</li>
</ul>

<h3>Volume Control <em>(xfce4-mixer)</em>:</h3>
<ul>
	<li>Solaris fixes</li>
</ul>

<h3>Taskbar <em>(xftaskbar)</em>:</h3>
<ul>
	<li>Fixed updating position and alignment bug</li>
</ul>
