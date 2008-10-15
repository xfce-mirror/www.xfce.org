<?php
function bug ($id){
	echo 'bug <a href="http://bugzilla.xfce.org/show_bug.cgi?id='. $id .'" target="_blank">#'. $id .'</a>';
}
?>

<h1>Xfce 4.6 BETA 1 (4.5.91) Changelog</h1>

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
        being available (<?php bug(4432) ?>).</li>
</ul>

<h3>Extension Library <em>(exo)</em>:</h3>
<ul>
    <li>Add midori helper (<?php bug(4446) ?>)</li>
    <li>Updated translations: Carles Muñoz Gorriz (ca), Fabian Nowak (de),
  Stavros Giannouris (el), Abel Martín (es), Kristjan Siimson (et),
  Leandro Regueiro (gl), Andhika Padmawan (id), Nobuhiro Iwamatsu (ja),
  Erdal Ronahi (ku), Rihards Priedītis (lv), Piotr Maliński (pl),
  Og Maciel (pt_BR), Nuno Miguel (pt_PT), NIkitaBelobrov (ru),
  Chao Sye (zh_CN)</li>
</ul>

<h3>Menu Library <em>(libxfce4menu)</em>:</h3>
<ul>
    <li>Translations: cs, da, de, el, en_GB, es, fi, fr, gl, id, ja, lv, pl, pt_BR, pt_PT, sq, uk, ur.</li>
</ul>

<h3>Window Manager <em>(xfwm4)</em>:</h3>
<ul>
    <li>Add support for NET_WM_PING protocol.</li>
    <li>Add support for NET_WM_PID to be able to kill apps (when not responding to NET_WM_PING).</li>
    <li>Make shadow opacity configurable (<?php bug(4447) ?>).</li>
    <li>Make wireframe while cycling user configurable (Bug #4443).</li>
    <li>Rework visual depth selection of the frame window (Bug #4452).</li>
    <li>Add new user option to set/unset repeat blinking of urgent windows (Bug #4440).</li>
    <li>Add margins configuration in workspace settings (Bug #4438).</li>
    <li>Loosen the rule that prevents an application from iconifying itself when skip_taskbar is set (Bug #4434).</li>
    <li>Fix NET_WM_STATE claiming maximization vertical and horizontal even if only horizontal of vertical is actually set (Bug #3969).</li>
    <li>Add an option to set default window placement w/out smart placement missing from the wmtweaks GUI.</li>
    <li>Allow any modifier to be used for easy move, including disabling the functionality entirely.</li>
    <li>Add embedding support to all xfwm4 settings dialogs.</li>
    <li>Sort theme alphabetically (Bug #4318).</li>
    <li>Implement workspace name changing.</li>
    <li>Do not allocate window extents if the window is not visible (Bug #4363).</li>
    <li>Improve centering of windows with Xinerama.</li>
    <li>Lot of settings dialogs fixes and enhancements</li>
    <li>Update Basque, German, Korean and Slovene translations</li>
</ul>

<h3>Desktop Manager <em>(xfdesktop)</em>:</h3>
<ul>
    <li>Bring back the "show icons in menu" preferences for the desktop
    menu and window list menu.</li>
    <li>Add support for XDG user dirs for the Desktop and Templates
    directories.  Patch from Andrea Santilli <yawara@quipo.it> (<?php bug(4365) ?>).</li>
    <li>Fix xfdesktop/xfce menu crashing when installing new applications that
    install .desktop files and icons (<?php bug(3615) ?>).</li>
    <li>Fix occasional "double menu" after menu/icon files change on disk
    (<?php bug(4342) ?>).</li>
    <li>Implement "rubber banding" for the desktop icon view (<?php bug(3245) ?>).</li>
    <li>Honor the Hidden=, OnlyShowIn=, and NeverShowIn= keys in .desktop
    files in the desktop folder (<?php bug(4022) ?>).</li>
    <li>Fix window menu popping up even after last window icon was
    de-selected when using minimized app icons.</li>
    <li>Display 'Eject' in the context menu for removable drives that
    support eject, not just optical discs (<?php bug(3738) ?>).</li>
    <li>Fix memory leak (not freeing result of gtk_container_get_children()
    in the desktop menu code).</li>
    <li>Fix memory/X window leak (not destroying menu in panel plugin after
    it's closed; old menu didn't require it, but new one does).</li>
    <li>Use GtkFileChooserButtons in the panel plugin config dialog instead
    of entry box + button, and remove the 'Edit menu' button/menu item
    since we don't have a menu editor anymore.</li>
    <li>Add cell-spacing, cell-padding, and cell-text-width-proportion
    stlye properties to XfdesktopIconView to control spacing/sizing of
    the icon grid (<?php bug(2886) ?>).  Patch from Giacomo Lozito.</li>
    <li>Add the ellipsize-icon-labels style property  to control whether
    or not unselected icons get their labels truncated (<?php bug(2886) ?>).
    Patch from Daniel Gibson.</li>
    <li>Add style properties to enable painting a text shadow 'under' 
    the desktop icon text labels (<?php bug(4412) ?>).  Patch from Andrea Santilli.</li>
    <li>Add backdrop image preview to settings dialog.</li>
    <li>Make settings dialog pluggable into the Xfce Settings Manager.</li>
    <li>Make the Help button in the settings dialog do something.</li>
</ul>

<h3>Panel <em>(xfce4-panel)</em>:</h3>
<ul>  
    <li>Remove MCS plugin, MCS is deprecated.</li>
</ul>

<h3>Session Manager <em>(xfce4-session)</em>:</h3>
<ul>
    <li>Start up session in parallel to greatly shorten startup time (<?php bug(4312) ?>).</li>
    <li>Add a D-Bus interface for some limited amount of remote control.</li>
    <li>Implement support for the ShutdownCommand SM property when a
        client has RestartAnyway set as its restart style hint.</li>
    <li>Implement support for the RestartNever restart style hint.</li>
    <li>sync() disks early in the shutdown process if on Linux and
        ioprio_set() is available (<?php bug(4313) ?>).  Otherwise sync() right before
        quit as before (<?php bug(4313) ?>).</li>
    <li>Check for a running gnome-keyring instance before launching
        a new one (<?php bug(3007) ?>).</li>
</ul>

<h3>Settings Manager <em>(xfce4-settings)</em>:</h3>
<ul>
    <li>Add workspace name handling to xfce4-settings-helper.</li>
    <li>Add support for embedding dialogs into xfce4-settings-manager (based
    on the X-XfcePluggable and X-XfceHelpFile desktop file keys).</li>
    <li>Add embedding support to the accessibility, appearance, mouse and
    keyboard settings dialogs.</li>
    <li>Don't use g_hash_table_get_keys() which requires GLib 2.14 (bug 
    #4377).</li>
    <li>Move xfsettingsd from xfconf into xfce4-settings.</li>
    <li>Rework the way keyboard shortcuts are organized. Support default
    shortcuts using /default and /custom base properties.</li>
    <li>Add optional UI options to enable/disable sounds in Canberra (bug
    #4367).</li>
    <li>Add GUI for selecting/changing the keyboard layout.</li>
    <li>Translation updates: Dutch, Finnish, German.</li>
</ul>

<h3>Configuration Manager <em>(xfconf)</em>:</h3>
<ul>
    <li>Remove xfsettingsd (moved to xfce4-settings package).  This removes
        xfconf's gtk+ dependency entirely.</li>
    <li>Add xfconf_channel_get() which returns an XfconfChannel singleton
        object that lives until calling xfconf_shutdown().</li>
    <li>Add xfconf_channel_reset_property(), which is a replacement for the
        'remove' functions.  This more accurately describes what 'remove'
        actually does in the presence of locked properties and/or properties
        that have system-wide defaults.</li>
    <li>Deprecate xfconf_channel_remove_property() and
        xfconf_channel_remove_properties().</li>
    <li>Change D-Bus interface to reflect above two changes.</li>
    <li>Add IsPropertyLocked() to the D-Bus interface, as well as a
        corresponding xfconf_channel_is_property_locked() libxfconf function,
        which allows clients to query whether or not a property can be
        modified.</li>
    <li>Don't send out a PropertyChange signal if a property is set to the
        value it already held.</li>
    <li>Fix daemon crash when resetting properties recursively.</li>
    <li>Fix daemon sending incorrect property names in the PropertyRemoved
        signal when removing multiple properties at once.</li>
    <li>For GObject property bindings, if the bound xfconf property is
        removed from the config store, try to reset the GObject property
        to the default value specified in its GParamSpec.</li>
    <li>Add -R option to xfconf-query which causes the -r option (reset) to
        operate recursively to include all properties under the specified
        property.</li>
    <li>Add -a option to xfconf-query which forces setting a property as an
        array even if the array only has one element.</li>
    <li>Fix xfconf_channel_get_property() so it properly converts the value
        fetched from the config store into the type that the caller
        requested (if any).</li>
</ul>

<h3>File Manager <em>(thunar)</em>:</h3>
<ul>
    <li>Update  Basque, French and Spanish translations</li>
</ul>


<h3>Mixer <em>(xfce4-mixer)</em>:</h3>
<ul>
    <li>Remove XfceMixerCard abstraction over GstMixer.</li>
    <li>Use a single GstBus for all GstMixer notifications.</li>
    <li>Use 'multimedia-volume-control' icon instead of 'xfce4-mixer'.</li>
    <li>Improve panel plugin icons, add another icon for volume between 0% 
        and 15%.</li>
    <li>Panel plugin now refreshes properly after using the plugin properties
        dialog (fixes <?php bug(4370) ?>).</li>
    <li>Improve .desktop file: add the mixer to the "Audio" and "X-XFCE"
        categories, and add StartupNotify=true and Terminal=false.</li>
    <li>Add DEBUG define to make the DBG macro work.</li>
    <li>Translation updates: Brazilian Portuguese, Czech, Finnish, French, 
        German, Hungarian, Indonesian, Japanese, Sinhalese, Spanish.</li>
</ul>

<h3>Printing Helper <em>(xfprint)</em>:</h3>
<ul>
    <li>Update Japanese, Sinhalese, Spanish and Danish translations</li>
</ul>

<h3>Utilities <em>(xfce-utils)</em>:</h3>
<ul>
    <li>Fix migrating shortcut keys in the xfconf settings migration script.
        Previously keys that had more than one char in the keysym name were
        getting parsed incorrectly.</li>
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
