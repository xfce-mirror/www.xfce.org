<?php
function bug ($id){
	echo 'bug <a href="http://bugzilla.xfce.org/show_bug.cgi?id='. $id .'">#'. $id .'</a>';
}
?>

<h1>Xfce 4.6 RC 1 (4.5.99.1) Changelog</h1>

<h3>Utility Library <em>(libxfce4util)</em>:</h3>
<ul>
    <li>Updated translations: da, cs, ja, sv</li>
</ul>

<h3>Widget Library <em>(libxfcegui4)</em>:</h3>
<ul>
    <li>Define libglade_module_path, glade_module_path, glade_catalog_path and glade_pixmap_path variables in the pkg-config file.</li>
    <li>Update translations (ca, da, es, eu, fr, ja, nb_NO, pt_BR, sv, zh_CN)</li>

</ul>

<h3>Extension Library <em>(exo)</em>:</h3>
<ul>
    <li>Updated translations: da , es , fr , id , pt_BR , tr.</li>
</ul>

<h3>Menu Library <em>(libxfce4menu)</em>:</h3>
<ul>
    <li>Add GNU Free Documentation License 1.1 to COPYING.</li>
    <li>Update translations: da, eu, fr, ja, nb_NO, pt_BR, sv, zh_CN.</li>
</ul>

<h3>Window Manager <em>(xfwm4)</em>:</h3>
<ul>
    <li>Fix a crash when removing a monitor with xrandr 1.2.</li>
    <li>Command line option "--daemon" would have no effect when xfwm4 connects to the session manager (Bug #4839).</li>
    <li>Fix settings not being set at startup (Bug #4845).</li>
    <li>Flatten default theme.</li>
    <li>Add support for NET_WM_FULLSCREEN_MONITORS.</li>
    <li>Fix dragging button layout when the dialog is embedded in the settings dialog (Bug #4524).</li>
    <li>Make title alignment and button layout insensitive when not supported by the theme selected.</li>
    <li>Use gtk_selection_data_get_data() only if available (Bug #4855).</li>
</ul>

<h3>Desktop Manager <em>(xfdesktop)</em>:</h3>
<ul>
    <li>Remove the menu editor (which was just a stub anyway).</li>
</ul>

<h3>Panel <em>(xfce4-panel)</em>:</h3>
<ul>
    <li>Remove the menu editor (which was just a stub anyway).</li>
</ul>

<h3>Session Manager <em>(xfce4-session)</em>:</h3>
<ul>
    <li>Translation updates: cs, da, fr, nb_NO, pt_BR, sv, zh_CN.</li>
</ul>

<h3>Settings Manager <em>(xfce4-settings)</em>:</h3>
<ul>
    <li>Properly handle missing RandR extension in xfce4-settings-helper and xfce4-display-settings (bug #4836).</li>
    <li>Fix possible segfault in xfce4-settings-helper (bug #4813).</li>
    <li>Fix xfsettingsd segfault due to strings defaulting to NULL. Patch by Lars-Peter Clausen (bug #4797).</li>
    <li>Translation updates: Brazilian Portuguese, Catalan, Czech, Danish, Finnish, French, Japanese, Simplified Chinese, Spanish and Swedish.</li>
</ul>

<h3>Configuration Manager <em>(xfconf)</em>:</h3>
<ul>
    <li>Updated translations (cs, da, fr, nl, pt_BR, sv, zh_CN)</li>
</ul>

<h3>File Manager <em>(thunar)</em>:</h3>
<ul>
    <li>Optional nano version added to configure.in.in.</li>
    <li>Update Danish, Norwegian Bokmal, Simplified Chinese and Turkish translations.</li>
</ul>

<h3>Mixer <em>(xfce4-mixer)</em>:</h3>
<ul>
    <li>Translation updates: cz, da, eu, fr, nb_NO, pt_BR, zh_CN.</li>
</ul>

<h3>Utilities <em>(xfce-utils)</em>:</h3>
<ul>
    <li>Determine glade paths used by libxfcegui4 and set environment variables like LIBGLADE_MODULE_PATH according to these paths in the xinitrc file.</li>
</ul>

<h3>Application Finder <em>(xfce4-appfinder)</em>:</h3>
<ul>
    <li>Translation updates: da, es, eu, fr, ja, nb_NO, pt_BR, sv, zh_CN</li>
</ul>
