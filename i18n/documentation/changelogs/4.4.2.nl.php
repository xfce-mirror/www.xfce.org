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
<h1>Xfce 4.4.2 Changelog</h1>

<h3>Utilities Library <em>(libxfce4util)</em>:</h3>
<ul>
    <li>Mogelijke buffer overflow opgelost (gerapporteerd door Vegard Nosum op de mailing-lijst).</li>
    <li>Haakjes van AC_INIT versie informatie verwijderd om rond een bug te werken in intltool 0.35.x en 0.36.x.</li>
    <li>Bijgewerkte vertalingen: Maximilian Schleiss (nl), Dimitri Gogelia (ka),
        Pablo Vieira and Jose Vitor Lopes e Silva (pt_BR).</li>
    <li>Nieuwe vertalingen: Terje Uriansrud (nb_NO), Nuno Miguel (pt_PT),
        Manatsawin (th), Tegegne Tefera (am), RPrieditis (lv).</li>
</ul>

<h3>Widget Library <em>(libxfcegui4)</em>:</h3>
<ul>
    <li>Free list returned by gtk_container_get_children().</li>
<!-- -->
    <li>Haakjes van AC_INIT versie informatie verwijderd om rond een bug te werken in intltool 0.35.x en 0.36.x.</li>
<!-- -->
    <li>Allocate a copy of passed cliend id, program name and working directory
        in session management, in case the application frees the data.</li>
    <li>Properly deal with %-starting 'field codes' in commands from .desktop files</li>
<!-- -->
    <li>Bijgewerkte vertalingen: Maximilian Schleiss (nl), Dimitri Gogelia (ka),
        Pablo Vieira and Jose Vitor Lopes e Silva (pt_BR).</li>
    <li>Nieuwe vertalingen: Terje Uriansrud (nb_NO), Nuno Miguel (pt_PT),
        Tegegne Tefera (am), Manatsawin (th), RPrieditis (lv).</li>
</ul>

<h3>Window Manager <em>(xfwm4)</em>:</h3>
<ul>
    <li>Be more relax with transients, allow transients to be sticky independently
        of their parent window (<?php bug ('3296') ?>)</li>
    <li>Fix xfwm4 hanging with gtk+-2.11.x (<?php bug ('3346') ?>)</li>
<!-- -->
    <li>Stop een lek in muis-knop grijper wanneer het thema wordt veranderd.</li>
<!-- -->
    <li>Fix dialogs and modals without parents not being automatically
        centered like before (<?php bug ('3278') ?>)</li>
    <li>Fix modifier mask not working with all keymaps (<?php bug ('3194') ?>)</li>
    <li>Fix wrong count of key shortcuts causing switch to last workspace
        on modifier key press if no window is focused (<?php bug ('3191') ?>)</li>
    <li>Fix spec file missing from the tar ball causing 'make dist' to fail</li>
    <li>Fix strict bound checking causing wrong window to be focused in focus
        follow mouse (<?php bug ('2781') ?>)</li>
    <li>Transients for group shouldn't apply to other transients, or it breaks
        stacking for some apps, noticeably mozilla "save as" dialog...</li>
    <li>Fix typo breaking compilation on systems without XShape 1.1 support</li>
</ul>

<h3>Desktop Manager <em>(xfdesktop)</em>:</h3>
<ul>
    <li>Fixed the Italian xfdesktop menu causing a crash.</li>
    <li>Fix missing xfce_rc_close() causing memleak and too many open file
        descriptors (<?php bug ('3065') ?>).</li>
    <li>Always use button 0 in gtk_menu_popup() as GTK+ 2.11+ expects the
        same button to be pressed or it doesn't activate the entry (<?php bug ('3359') ?>).</li>
    <li>Fix menu sometimes not popping up when using the keyboard shortcut,
        again.  Timeout waiting for grab is now 0.25s (<?php bug('441') ?>).</li>
    <li>Fix desktop settings only getting applied to the first screen in
        non-Xinerama dualhead setups (<?php bug('3467') ?>).</li>
    <li>Fix spurious drag when double-clicking a volume icon that fails to
        mount (<?php bug('3426') ?>).
    <li>Clean out stale entries in file icon position file
        (<?php bug('3267') ?>).</li>
    <li>Some minor memory leak fixes (some still remain, likely).</li>
    <li>Fix --disable-menu-editor configure option.</li>
</ul>

<h3>Panel <em>(xfce4-panel)</em>:</h3>
<ul>
    <li>Fix window manager hints reporting width 1 pixel too wide (<?php bug ('3402') ?>).</li>
    <li>Improve MCS plugin code.</li>
    <li>Fix expansion of items a non-full-width panel.</li>
    <li>Make sure tooltips are set for more than 1 clock instance (<?php bug ('3109') ?>).</li>
    <li>Fix area that is off-limits to other windows (_NET_WM_STRUT hints) for a
        Xinerama setup with differently sized monitors (<?php bug ('3097') ?>).</li>
    <li>Fix loading internal plugins if a similar file exists in the start directory
        (<?php bug ('3279') ?>).</li>
    <li>Only update the clock once a minute when seconds are disabled. The
        digital clock is also set in the default layout to minimize the amount
        of screen updates.</li>
    <li>Fix possible buffer overflow in launcher tooltips (<?php bug ('3324') ?>).</li>
    <li>Use exo-open --launch TerminalEmulator in the default configuration
        (<?php bug ('3384') ?>).</li>
    <li>Fix crash when removing a panel in Gtk+ 2.11.x (<?php bug ('3496') ?>).</li>
<!-- -->
    <li>Haakjes van AC_INIT versie informatie verwijderd om rond een bug te werken in intltool 0.35.x en 0.36.x.</li>
    <li>Bijgewerkte vertalingen: Pau Rul-lan Ferragut (ca), Fabio Riga (it),
        Terje Uriansrud (nb_NO), Nuno Miguel (pt_PT), Vincent Tunru (nl),
        Dimitri Gogelia (ka), Ivan Masár (sk), Fábio Nogueira (pt_BR).</li>
    <li>Nieuwe vertalingen: Tegegne Tefera (am), RPrieditis (lv).</li>
</ul>

<h3>Settings Manager <em>(xfce-mcs-manager)</em>:</h3>
<ul>
    <li>Remove the half-second signal-check timeout in favor of of a signal-check
        pipe that's watched by the glib main loop. Helps reduce CPU wakeups that
        hurt laptop battery performance.</li>
<!-- -->
    <li>Bijgewerkte vertalingen: Terje Uriansrud (nb_NO), European Portuguese (pt_PT),
        Vincent Tunru (nl), Dimitri Gogelia (ka), Ivan Masar (sk), Vladimir Melo (pt_BR),
        Terje Uriansrud (nb_NO), Nuno Miguel (pt_PT).</li>
    <li>Nieuwe vertalingen: Tegegne Tefera (am), RPrieditis (lv).</li>
</ul>

<h3>Settings Manager Plugins <em>(xfce-mcs-plugins)</em>:</h3>
<ul>
    <li>Make the theme list expand for more natural resize (<?php bug ('3659') ?>).</li>
    <li>Font DPI is now configurable in the User Interface Settings (<?php bug ('3164') ?>).</li>
    <li>Fix modifier mask not working with all keymaps (<?php bug ('3194') ?>)</li>
    <li>Add support for xinput devices when setting left/right handed mouse.</li>
<!-- -->
    <li>Bijgewerkte vertalingen: Fabio Riga (it), Nuno Miguel (pt_PT),
        Tegegne Tefera (am), Vincent Tunru (nl), Dimitri Gogelia (ka),
        Vladimir Melo (ka), Alexander Nyakhaychyk (be), Jari Rahkonen (fi),
        Nico Schümann (de), Mike Massonnet (fr), Jeff Bailes (en_GB),
        Terje Uriansrud (nb_NO), Stavros Giannouris (el), Fabio Riga (it),
        Luiz Armesto (pt_BR), Stephan Arts (nl).</li>
    <li>Nieuwe vertalingen: Terje Uriansrud (nb_NO), RPrieditis (lv).</li>
</ul>

<h3>Textverwerker <em>(mousepad)</em>:</h3>
<ul>
    <li>Test voor ondersteuning van -Wall, -Werror en -errwarn=%all (<?php bug ('2921') ?>).</li>
    <li>Haakjes van AC_INIT versie informatie verwijderd om rond een bug te
        werken in intltool 0.35.x en 0.36.x.</li>
    <li>Bijgewerkte vertalingen: Maximilian Schleiss (fr), Szymon Kałasz (pl),
        Pau Rul-lan Ferragut (ca), Stavros Giannouris (el), ByungHyun Choi (ko),
        Piarres Beobide (eu), Maxim Dziumanenko (uk), Stephan Arts (nl),
        Nico Schümann (de), Jeff Bailes (en_GB), Daichi Kawahata (ja),
        Fabio Riga (it), Dimitri Gogelia (ka), Pablo Vieira (pt_BR),
        Og Maciel (pt_BR).</li>
    <li>Nieuwe vertalingen: Besnik Bleta (sq), Terje Uriansrud (nb_NO),
        Nuno Miguel (pt_PT), Tegegne Tefera (am), Manatsawin (th),
        RPrieditis (lv).</li>
</ul>

<h3>Sessie Beheerder<em>(xfce4-session)</em>:</h3>
<ul>
    <li>Bijgewerkte vertalingen: Pau Rul-lan Ferragut (ca), Fabio Riga (it),
        Terje Uriansrud (nb_NO), Nuno Miguel (pt_PT), Tegegne Tefera (am),
        Vincent Tunru (nl), Ivan Masár (sk), Luiz Armesto (pt_BR).</li>
    <li>Nieuwe vertalingen: RPrieditis (lv).</li>
</ul>

<h3>Printing Helper <em>(xfprint)</em>:</h3>
<ul>
    <li>Bijgewerkte vertalingen: Stephan Arts (nl), Fabio Riga (it),
        Terje Uriansrud (nb_NO), Nuno Miguel (pt_PT), Tegegne Tefera (am),
        Ivan Masár (sk), Fábio Nogueira (pt_BR).</li>
    <li>Nieuwe vertalingen: Denizo Priskorn (eo), RPrieditis (lv).</li>
</ul>

<h3>Development Tools <em>(xfce4-dev-tools)</em>:</h3>
<ul>
    <li>Add script (xdt-commit) for generating commit messages from ChangeLogs
        on the fly.</li>
<!-- -->
    <li>Haakjes van AC_INIT versie informatie verwijderd om rond een bug te
        werken in intltool 0.35.x en 0.36.x.</li>
</ul>

<h3>Utilities <em>(xfce-utils)</em>:</h3>
<ul>
    <li>Put back a default DPI value as Xorg (<?php bug ('3164') ?>, <?php bug ('3158') ?>)</li>
<!-- -->
    <li>Gebruik gnome-screensaver als xscreensaver niet beschikbaar is (<?php bug ('3131') ?>)</li>
    <li>Tiepfout in de XDG_DATA_DIRS pad definitie (<?php bug ('2967') ?>).</li>
    <li>Bijgewerkt dankwoord in het 'over xfce4' dialoog venster.</li>
    <li>Bijgewerkte vertalingen: Fabio Riga (it), Nuno Miguel (pt_PT),
        Dimitri Gogelia (ka), Ivan Masar (sk), Vladimir Melo (pt_BR).</li>
    <li>Nieuwe vertalingen: Terje Uriansrud (nb_NO), Tegegne Tefera (am),
        RPrieditis (lv).</li>
</ul>

<h3>Volume Control <em>(xfce4-mixer)</em>:</h3>
<ul>
    <li>Fix parallel build of xfce4-mixer (<?php bug ('2892') ?>)</li>
<!-- -->
    <li>Bijgewerkte vertalingen: Stephan Arts (nl), Fabio Riga (it),
        Terje Uriansrud (nb_NO), Nuno Miguel (pt_PT), Dimitri Gogelia (ka),
        Luiz Armesto (pt_BR).</li>
    <li>Nieuwe vertalingen: Tegegne Tefera (am), RPrieditis (lv).</li>
</ul>

<h3>Calender and Afspraken <em>(xfcalendar)</em>:</h3>
<ul>
    <li>Recurrence not recurring at the limit date. Missing fix: convert
        time back to UTC when reading. Caused day to be incremented for
        -GMT timezones (<?php bug ('2937') ?>).</li>
    <li>Added missing last update time (<?php bug ('3431') ?>).</li>
    <li>Orage clock now wakes up only when needed. This fix sacrifies a little
        of accuracy to save wakeups. If seconds are not visible clock wakes up
        only once per minute (<?php bug ('3363') ?>).</li>
<!-- -->
    <li>Bijgewerkte vertalingen: Fabio Riga (it), Pau Rul-lan Ferragut (ca),
        Daichi Kawahata (ja), Terje Uriansrud (nb_NO), Nuno Miguel (pt_PT),
        Tegegne Tefera (am), Dimitri Gogelia (ka), Vincent Tunru (nl),
        Pablo Vieira (pt_PT), Fábio Nogueira (pt_PT).</li>
    <li>Nieuwe vertaling: RPrieditis (lv).</li>
</li>
</ul>

<h3>GTK theme engine <em>(gtk-xfce-engine-2)</em>:</h3>
<ul>
    <li>Voeg geen iconrc bestand toe aan gtkrc.</li>
</ul>

<h3>Programma zoeker<em>(xfce4-appfinder)</em>:</h3>
<ul>
    <li>Haakjes van AC_INIT versie informatie verwijderd om rond een bug te
        werken in intltool 0.35.x en 0.36.x.</li>
    <li>Bijgewerkte vertalingen: Nuno Miguel (pt_PT), Dimitri Gogelia (ka),
        Pablo Vieira (pt_PT), Vladimir Melo (pt_BR).</li>
    <li>Nieuwe vertalingen: Terje Uriansrud (nb_NO), Tegegne Tefera (am),
        RPrieditis (lv).</li>
</ul>
