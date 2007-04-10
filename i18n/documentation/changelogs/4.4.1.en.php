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
	<?php bug ('1974') ?>
*/
?>
<h1>Xfce 4.4.1 Changelog</h1>

<h3>Utilities Library <em>(libxfce4util)</em>:</h3>
<ul>
    <li>Fix invalid g_slice_free1() in XfceRc code (<?php bug ('2854') ?>).</li>
    <li>Fix bug when deleting groups.</li>
    <li>Do not use GMemChunk for XfceRc module as that leaks all of its memory starting with GLib 2.10 (<?php bug ('2427') ?>).</li>
</ul>

<h3>Widget Library <em>(libxfcegui4)</em>:</h3>
<ul>
    <li>Change 2 GPL headers to LGPL.</li>
    <li>Test for support of -Wall, -Werror and -errwarn=%all (<?php bug ('2918') ?>).</li>
    <li>Many translation updates.</li>
</ul>

<h3>Window Manager <em>(xfwm4)</em>:</h3>
<ul>
    <li>Treat dialogs and utility windows as transients for group (<?php bug ('3102') ?>).</li>
    <li>Add support for shape input with XShape extension 1.1 (<?php bug ('3092') ?>).</li>
    <li>Make the title button in the xfwm4 settings manager dragable (<?php bug ('3000') ?>).</li>
    <li>Fix a misinterpretation of ICCCM about when to send a synthetic configureNotify event (<?php bug ('2977') ?>).</li>
    <li>Add new hidden option to instruct xfwm4 not to bring window back on current workspace when activated (<?php bug ('2961') ?>).</li>
    <li>Place splash screen windows on the normal layer, so that dialogs that get mapped during startup have a chance to be placed above the splash screen.</li>
    <li>Raise focused window on workspace switch (<?php bug ('2960') ?>).</li>
    <li>Sort Z-order on workspace change (<?php bug ('2960') ?>).</li>
    <li>Fix the small lag before icon update at first map and when updating all frames at once.</li>
    <li>Use timeout for frame redraw, check actual WM name changes to work around apps that falsely update their WM name property (<?php bug ('810') ?>).</li>
    <li>Updated translations: Hungaria, Catalan, Italian, Polish, German, Japanese, Turkish, Ukrainian, Dutch, Chinese (simplified) and French.</li>
    <li>New translations: Albanian (Besnik Bleta), English (Jeff Bailes).</li>
</ul>

<h3>Desktop Manager <em>(xfdesktop)</em>:</h3>
<ul>
    <li>Fix entries in the menu.xml files that should not have been translated.</li>
    <li>Remove use of __FUNCTION__ as it breaks sun's compiler (<?php bug ('2924') ?>).</li>
    <li>Blurry rendering of unscaled backgrounds (<?php bug ('2939') ?>).</li>
    <li>Unescape % characters in the uri (<?php bug ('2942') ?>).</li>
    <li>Many translation updates.</li>
</ul>

<h3>Panel <em>(xfce4-panel)</em>:</h3>
<ul>
    <li>Completely hide the right-click menu when kiosk mode is enabled (<?php bug ('2984') ?>).</li>
    <li>Show the system tray border in the default layout and increase the top panel size to 30px, so users can actually see the system tray.</li>
    <li>Allow freely movable panels on the screen edges (<?php bug ('3039') ?>).</li>
    <li>Improve the icon size of the actions plugin and add an option to change the orientation of the buttons (<?php bug ('2999') ?>).</li>
    <li>Unhide when dragging over the panel (<?php bug ('2914') ?>).</li>
    <li>Check for NULL pointers in DBG messages to prevent crashes on Solaris, based on patch from William Bonnet (<?php bug ('2922') ?>).</li>
    <li>Add some checks for valid tree selection (<?php bug ('2933') ?>).</li>
    <li>Many translation updates.</li>
</ul>

<h3>Settings Manager <em>(xfce-mcs-manager)</em>:</h3>
<ul>
    <li>Test for support of -Wall, -Werror and -errwarn=%all. (<?php bug ('2918') ?>).</li>
    <li>Many translation updates.</li>
</ul>

<h3>Settings Manager Plugins <em>(xfce-mcs-plugins)</em>:</h3>
<ul>
    <li>Test for support of -Wall, -Werror and -errwarn=%all. (<?php bug ('2919') ?>).</li>
    <li>Add default shortcuts for volume control using aumix.</li>
    <li>Do not include theme without directory or hidden in the icon theme list (<?php bug ('2912') ?>).</li>
    <li>Many translation updates.</li>
</ul>

<h3>Text Editor <em>(mousepad)</em>:</h3>
<ul>
    <li>Test for support of -Wall, -Werror and -errwarn=%all. (<?php bug ('2921') ?>).</li>
</ul>

<h3>Printing Helper <em>(xfprint)</em>:</h3>
<ul>
    <li>Many translation updates.</li>
</ul>

<h3>Development Tools <em>(xfce4-dev-tools)</em>:</h3>
<ul>
    <li>Add script for generating commit messages from ChangeLogs on the fly (xdt-commit).</li>
</ul>

<h3>Utilities <em>(xfce-utils)</em>:</h3>
<ul>
    <li>Update the AUTHORS file.</li>
    <li>Fix syntax error in startxfce script (<?php bug ('3089') ?>).</li>
    <li>Fix insecure use of temporary file in startup script.</li>
    <li>Put /usr/local/share first (<?php bug ('2967') ?>).</li>
    <li>Fix an issue with the syntax in startxfce4 script (<?php bug ('2967') ?>).</li>
    <li>Many translation updates.</li>
</ul>

<h3>Volume Control <em>(xfce4-mixer)</em>:</h3>
<ul>
    <li>Follow the HIG specifications on the buttons.</li>
    <li>Add test_vc to Makefile.am.</li>
    <li>Many translation updates.</li>
</ul>

<h3>Calendar and Appointments <em>(xfcalendar)</em>:</h3>
<ul>
    <li>Bug when adding All day event from iCal. All day events were handled wrongly in Orage (<?php bug ('3058') ?>).</li>
    <li>Recurring events need to happen on ending date also (<?php bug ('2937') ?>).</li>
    <li>Erroneous warning when adding panel plugin (<?php bug ('2863') ?>).</li>
    <li>Change field before save so that spin buttons activate always (<?php bug ('2811') ?>).</li>
    <li>Many translation updates.</li>
</ul>

<h3>Application Finder <em>(xfce4-appfinder)</em>:</h3>
<ul>
    <li>Many translation updates.</li>
</ul>
