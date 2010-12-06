

<h2>Xfce 4.6 BETA 2 (4.5.92) Changelog</h2>

<h3>Development tools <em>(xfce4-dev-tools)</em>:</h3>
<ul>
    <li>Add support for git (and git-svn) to the xdt-commit script (bug #4491) ?>).</li>
</ul>

<h3>Utility Library <em>(libxfce4util)</em>:</h3>
<ul>
    <li>Increment library version to avoid having a 4.6 library version older then the one in 4.4.</li>
    <li>Place G_GNUC_INTERNAL before function declaration for Sun Studio compatibility (bug #4580) ?>).</li>
    <li>Updated translations: Jari Rahkonen (fi), Abel Martin (es)</li>
</ul>

<h3>Widget Library <em>(libxfcegui4)</em>:</h3>
<ul>
    <li>add libxfce4kbd for keyboard-shortcut support</li>
    <li>Fix format-string vulnerabilities in 'message_dialog' and 'xfce_confirm'</li>
    <li>Improve SessionManagement support</li>
    <li>Update translations (de, es, pt_BR, eu, ku, cs, id, fi, sq, nb_NO)</li>
</ul>

<h3>Extension Library <em>(exo)</em>:</h3>
<ul>
    <li>Make Preferred Applications dialog pluggable into the new settings manager.</li>
</ul>

<h3>Menu Library <em>(libxfce4menu)</em>:</h3>
<ul>
    <li>Updated translations: ca, da, ku, nb_NO, sq, tr.</li>
</ul>

<h3>Window Manager <em>(xfwm4)</em>:</h3>
<ul>
    <li>Add support for restart style SmRestartImmediately.</li>
    <li>Add support for NET_MOVERESIZE_WINDOW.</li>
    <li>Add client windows to save set to avoid loosing all windows in case of crash.</li>
    <li>Rework the window menu to improve consistency with libwnck menu (bug #4531) ?>).</li>
    <li>Simplify management of transients.</li>
    <li>Add support for keyboard shortcuts (bug #4492) ?>).</li>
    <li>Add new option do disable blinking of urgent windows.</li>
    <li>Fix possible crash when the dbl_click_action setting gets unset.</li>
    <li>Fix workspaces names not being set in the workspace settings GUI.</li>
    <li>Do not display warnings for values that are not configurable via xfconf (typically theme settings).</li>
    <li>Draw focus in tabwin to make sure the selection is visible even with themes that do not show selected items.</li>
    <li>Add key shortcut for reverse cycling (bug #2778) ?>)</li>
</ul>

<h3>Desktop Manager <em>(xfdesktop)</em>:</h3>
<ul>
    <li>Display 'Audio' and 'Video' categories in the multimedia submenu.</li>
    <li>Fix multiple image selection in settings dialog file chooser (bug #4522) ?>).</li>
</ul>

<h3>Panel <em>(xfce4-panel)</em>:</h3>
<ul>
    <li>Remove signal disconnect left after the patch of bug #4474.</li>
    <li>Fix xrandr problem so it's possible to change the panel's monitor after a monitor has been removed (bug #3620) ?>).</li>
    <li>Panel does not adhere to 'fullwidth' property when using vertical orientation after restarting (bug #4456) ?>).</li>
    <li>Implement SmRestartImmediately (bug #4516) ?>).</li>
    <li>Reverse the order of the launcher menu when the panel is on the top of the screen (bug #4450) ?>).</li>
    <li>Don't spawn zombies (bug #4490) ?>).</li>
    <li>Quote commands in the launcher when selecting an application (bug #4507 and #4549).</li>
    <li>Restore panel workspace names after panel restart (bug #4589) ?>).</li>
    <li>Update the tooltip of the clock when it is visible.</li>
</ul>

<h3>Session Manager <em>(xfce4-session)</em>:</h3>
<ul>
    <li>Hook up Help button in settings dialog.</li>
    <li>Implement support for the RestartImmediately restart style hint.</li>
    <li>Fix possible crash with uninitialised GError (bug #4202) ?>).</li>
    <li>Link libxfsm against all required libs to avoid link-time errors (bug #4429) ?>).</li>
    <li>Make splash engines store their settings in Xfconf.</li>
    <li>Handle the ProcessID SM property properly.</li>
    <li>Add a session editor to the settings dialog.</li>
    <li>Fix compilation on some Linux systems with a broken linux/ioprio.h header (bug #4515).</li>
    <li>Fix a possible crash on amd64 (bug #4510) ?>).</li>
    <li>Add support for suspend and hibernate via HAL.  Initial patch from Michael Casadevall (bug #2672) ?>).</li>
    <li>When restoring clients on startup, be sure to set their current working directory if the cwd was set as a part of their saved state.</li>
    <li>Add SaveSession kiosk capability (bug #2998) ?>).</li>
    <li>When a client requests interaction, don't continue to kill all other
        clients while it's still interacting.  And then don't ignore it when
        it wants to cancel shutdown.  Also fixes a similar problem when
        interaction is requested during a phase 2 save-yourself (bug #4284) ?>).</li>
</ul>

<h3>Settings Manager <em>(xfce4-settings)</em>:</h3>
<ul>
    <li>Add an option to disable keyboard settings.</li>
    <li>Default to "Rodent" icon theme instead of "hicolor" (bug #4545)</li>
    <li>Use XfcePosixSignalHandler in xfce4-settings-helper to handle
        signals, since calling gtk_main_quit() from a signal handler may
       not be safe.</li>
    <li>Make xfce4-settings-helper connect to the session manager and use
        the SmRestartImmediately facility to make sure it keeps running.
        Disable the autostart .desktop file if we were restored from a
        saved session.  Attempt to acquire an X selection on startup to
        ensure multiple copies of the helper aren't running (bug #4577) ?>).</li>
</ul>

<h3>Configuration Manager <em>(xfconf)</em>:</h3>
<ul>
    <li>Add xfconf_channel_new_with_property_base() to restrict a channel to a subset of the property tree.</li>
    <li>Add a dbus message filter to xfconfd that catches dbus daemon disconnect signals and flushes channels before xfconfd gets killed (bug #4487) ?>).</li>
    <li>Change libxfconf GObject bindings API slightly to use gulong IDs for each binding to be used when removing bindings.  Extend the unbind functions a bit.</li>
    <li>Bump libxfconf interface version due to incompatible change.</li>
    <li>Add libxfconf perl bindings.</li>
    <li>Remove xfconf_channel_remove_property() and xfconf_channel_remove_properties().</li>
    <li>Only treat the XML file under $XDG_CONFIG_HOME as a "user" file, and treat all others as system files.  This fixes the problem where Xfce-installed defaults get read *after* the user's config when Xfce is installed to a user-writable prefix (bug #4592) ?>).</li>
    <li>Fix build on Cygwin and other platforms that actually care about library link order (bug #4559) ?>).</li>
</ul>

<h3>File Manager <em>(thunar)</em>:</h3>
<ul>
    <li>Fix build on MacOS X (bug #4433).</li>
    <li>Don't create Thunar -> thunar symlink on case-insensitive
        filesystems (bug #4430) ?>).</li>
    <li>Add thunar-wallpaper-plugin for setting the wallpaper on 
        xfdesktop >= 4.5.90</li>
</ul>

<h3>Mixer <em>(xfce4-mixer)</em>:</h3>
<ul>
    <li>Use xfconf_channel_reset_property() instead xfconf_channel_remove_property().</li>
    <li>Rename stock icons and install them as application icons to $(pkgdatadir)/icons/hicolor. Remove stock code.</li>
    <li>Change step and page increment size of the panel plugin to 1%.</li>
    <li>Fix license headers to use GPL everywhere.</li>
    <li>Use "multimedia-volume-control" icon in the desktop entry.</li>
    <li>Fix build with GStreamer &lt; 0.10.14.</li>
    <li>Translation updates: Carles Muños Gorriz (ca), Abel Martín (es), 
        Csécsey Károly (hu). Andhika Padmawan (id), Terje Uriansrud (nb_NO) Gökmen Görgen (tr).</li>
</ul>

<h3>Utilities <em>(xfce-utils)</em>:</h3>
<ul>
    <li>Migrate xfce4-session splash settings to xfconf.</li>
    <li>Be sure $XDG_CONFIG_HOME/autostart exists when creating .desktop file to disable xfconf migration script.</li>
    <li>Migrate xfwm4 keyboard shortcuts to new xfconf format.</li>
</ul>

<h3>Application Finder <em>(xfce4-appfinder)</em>:</h3>
<ul>
    <li>Fix runtime warnings and toplevel menu items always being displayed on top of every category.</li>
    <li>Translation updates: Carles Munõz Gorriz (ca), Abel Martín (es), Maximilian Schleiss (fr), Andhika Padmawan (id), Terje Uriansrud (nb_NO)</li>
</ul>
