<?php
function bug ($id){
	echo '<a href="http://bugzilla.xfce.org/show_bug.cgi?id='. $id .'">#'. $id .'</a>';
}

/*
	Replace the following characters:
	
	<	= &lt;
	>	= &gt;
	"	= &quot;
	&	= &amp;
*/
?>

<h1>Xfce 4.2 RC3 Changelog:</h1>

<h3>General:</h3>
<ul>
	<li>Updated translations</li>
	<li>Updated screenshots for documentation</li>
</ul>

<h3>Libraries<em> (lib*)</em>:</h3>
<ul>
	<li>Improve icon theme handling; make sure to always find default icons, properly escape settings values when saving to XML</li>
</ul>

<h3>Window Manager <em>(xfwm4)</em>:</h3>
<ul>
	<li>Updated default theme</li>
	<li>KDE system tray support fixed (bug <?php bug ('577'); ?>, <?php bug ('596'); ?> and <?php bug ('597'); ?>)</li>
	<li>Improvements and fixes to the compositing manager (bug <?php bug ('552'); ?>)</li>
	<li>Fixes for gtk+-2.6 in setting plugin</li>
	<li>Various fixes</li>
</ul>

<h3>Desktop Manager <em>(xfdesktop)</em>:</h3>
<ul>
	<li>Fixes for gtk 2.6</li>
	<li>Improve menu cache handling</li>
	<li>Add back to window list menu the options to add or remove workspaces</li>
</ul>

<h3>Panel <em>(xfce4-panel)</em>:</h3>
<ul>
	<li>Fix type mismatch when writing backup files (fixes infinite loop on non-x86; patch by Michele Baldessari)</li>
	<li>Fix edge snapping for very big panels</li>
	<li>Properly set dock type hint</li>
</ul>

<h3>Settings Manager <em>(xfce-mcs-manager)</em>:</h3>
<ul>
	<li>Fixes for gtk 2.6</li>
</ul>

<h3>File Manager <em>(xffm)</em>:</h3>
<ul>
	<li>Improved history handling</li>
</ul>

<h3>Printing Helper <em>(xfprint)</em>:</h3>
<ul>
	<li>Fixed display of jobs for CUPS backend</li>
	<li>Add queueing support for bsd-lpr backend</li>
</ul>

<h1>Xfce 4.2-RC2 bugfixes include:</h1>

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