<?php
function bug ($id){
	echo 'bug <a href="http://bugzilla.xfce.org/show_bug.cgi?id='. $id .'" target="_blank">#'. $id .'</a>';
}
?>

<h1>Xfce 4.6 BETA 1 (4.5.91) Changelog</h1>
This document is a stub

<h3>Development tools <em>(xfce4-dev-tools)</em>:</h3>
<ul>
    <li>Don't try to patch intltool-merge.in for intltool 0.40.x: 0.40.4+ has
        a fix for the bug, and 0.40.x earlier than that aren't patchable as they
        run systemwide versions of the scripts.</li>
</ul>

<h3>Utility Library <em>(libxfce4util)</em>:</h3>
<ul>
    <li>Fix typo in i18n code (check for '/' in lang doesnt make sense)</li>
    <li>Updated translations: Og Maciel (pt_BR), Abel Martín (es)</li>
</ul>

<h3>Widget Library <em>(libxfcegui4)</em>:</h3>
<ul>
    <li>Fix compile failure on Darwin due to the 'environ' variable not
        being available (bug 4432).</li>
</ul>

<h3>Extension Library <em>(exo)</em>:</h3>
<ul>
</ul>

<h3>Menu Library <em>(libxfce4menu)</em>:</h3>
<ul>
</ul>

<h3>Window Manager <em>(xfwm4)</em>:</h3>
<ul>
</ul>

<h3>Desktop Manager <em>(xfdesktop)</em>:</h3>
<ul>
</ul>

<h3>Panel <em>(xfce4-panel)</em>:</h3>
<ul>  

</ul>

<h3>Session Manager <em>(xfce4-session)</em>:</h3>
<ul>
</ul>

<h3>Settings Manager <em>(xfce4-settings)</em>:</h3>
<ul>
</ul>

<h3>Configuration Manager <em>(xfconf)</em>:</h3>
<ul>
</ul>

<h3>File Manager <em>(thunar)</em>:</h3>
<ul>
</ul>


<h3>Mixer <em>(xfce4-mixer)</em>:</h3>
<ul>
</ul>

<h3>Printing Helper <em>(xfprint)</em>:</h3>
<ul>
</ul>

<h3>Utilities <em>(xfce-utils)</em>:</h3>
<ul>
</ul>

<h3>Application Finder <em>(xfce4-appfinder)</em>:</h3>
<ul>
    <li>Translations: cs, da, de, el, en_GB, es, fi, fr, gl, id, ja, lv, pl, pt_BR, pt_PT, sq, uk, ur.</li>
</ul>

<h3>Calendar <em>(orage)</em>:</h3>
<ul>
    <li>Man page created for orage and globaltime</li>
    <li>Globaltime added.</li>
    <ul>
        <li>shows several clocks from different timezones</li>
        <li>can be raised and hidden by clicking middle mouse
            button on orage clock panel plugin</li>
        <li>has timetune feature, which makes it easy to see what
            the time is in other clocks on certain time</li>
    </ul>
    <li>All visible dates are now in country native format (strftime (%x))</li>
    <li>All parameters now visible in preferences</li>
    <ul>
        <li>restructured parameter screens</li>
    </ul>
    <li>New appointment types: TODO and JOURNAL</li>
    <ul>
        <li>TODO can be used to remember things that needs to done</li>
        <li>JOURNALs are for notes and things to remember</li>
    </ul>
    <li>Possible to rename Orage calendar files</li>
    <li>External files can be used</li>
    <ul>
        <li>it is possible to add files from other sources
            and Orage keeps track on those.</li>
    </ul>
    <li>Export and import appointments.</li>
    <li>Text search in event list</li>
    <li>Orage is now dependent on local libical.</li>
    <ul>
        <li>standard libical cannot be used due to several fixes
            done to Orage's private copy</li>
    </ul>
    <li>Daylist view</li>
    <ul>
        <li>possible to see calendar in day view format in addition 
            to the old list view.</li>
    </ul>
    <li>New alarms.</li>
    <ul>
        <li>libnotify alarms</li>
        <li>script type alarms</li>
    </ul>
    <li>Possibility to set alarm based on end time also</li>
    <li>Possible to define default alarm</li>
    <li>Persistent alarms</li>
    <ul>
        <li>persistent alarms are raised after Orage is started
            even if your computer or Orage has been turned off when the 
            alarm happened.</li>
    </ul>
    <li>Orage and orageclock now only wake up when needed.</li>
    <ul>
        <li>saves battery in laptops when timer wakes up only when
            needed instead of regularly every second.</li>
    </ul>
    <li>Main calendar now has list of events and todos.</li>
    <li>Better compatibility with evolution ical files</li>
    <li>Categories added</li>
    <ul>
        <li>also possible to give colour to certain category
            and then colour is shown in even list view</li>
    </ul>
</ul>
