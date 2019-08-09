<?php $head['title'] = 'Xfce 4.14 Changelog'; ?>

<h1>Xfce 4.14 Changelog</h1>

<p>Note: the changelogs shown here are since the version of the components that shipped with Xfce 4.12.</p>

<h2>Dependency changes</h2>
<ul>
  <li>GTK+ dependency &gt;= 3.22, GLib &gt;= 2.42 and GDBus.</li>
  <li>Libxfce4ui has an optional dependency on GTK2.</li>
  <li>Xfce4-panel has an optional dependency on GTK2.</li>
</ul>

<h2>Development Tools <em>(xfce4-dev-tools)</em></h2>
<ul>
  <li>Remove svn support in xdt-autogen</li>
  <li>Update xdt-csource with latest exo-csource modifications</li>
  <li>No -Wshadow flag for enable_debug=full (bug #11637)</li>
</ul>

<h2>Utility Library <em>(libxfce4util)</em></h2>
<ul>
  <li>Better documentation processing</li>
  <li>Fix GObject Introspection language bindings</li>
  <li>Add support for rc files as symlinks</li>
  <li>Avoid excessive type-casting</li>
  <li>Fix documentation warnings</li>
  <li>Fix some gtk-doc warnings</li>
  <li>Migrate away from sgml templates for documentation</li>
  <li>Fix abicheck to handle ppc64 architecture</li>
  <li>Add a super basic python example</li>
  <li>Make sure introspection users find the header file in the correct spot.</li>
  <li>Make sure our gir/vapi gets the Xfce namespace, and not 'xfce'.</li>
  <li>Add VAPIGEN for vala binding generation.</li>
  <li>Add xfce_kiosk_get_type to abi symbols</li>
  <li>Fix some autotools warnings, default debug to yes</li>
  <li>Add support for GOBJECT-INTROSPECTION (Bug #12159)</li>
  <li>Allow everyone to build introspection files (Bug #13638)</li>
  <li>Allow language-specific keys before language-neutral ones (Bug #13979)</li>
  <li>Translation updates: Albanian, Arabic, Asturian, Basque, Belarusian, Bengali, Bulgarian, Catalan, Chinese (China), Chinese (Hong Kong), Chinese (Taiwan), Croatian, Czech, Danish, Dutch (Flemish), English (Australia), English (Great Britain), Estonian, Finnish, French, Galician, German, Greek, Hebrew, Hungarian, Icelandic, Indonesian, Italian, Japanese, Kazakh, Korean, Latvian, Lithuanian, Malay, Norwegian Bokmål, Norwegian Nynorsk, Occitan, Panjabi, Polish, Portuguese, Portuguese (Brazilian), Romanian, Russian, Serbian, Slovak, Slovenian, Spanish, Swedish, Telugu, Thai, Turkish, Ukrainian, Urdu, Urdu (Pakistan), Uyghur, Vietnamese.</li>
</ul>

<h2>Widget Library <em>(libxfce4ui)</em></h2>
<ul>
  <li>Add garcon to the list of components</li>
  <li>Add api indices in gtk-doc</li>
  <li>feat: Switch to Gtk3 default, Gtk2 Optional</li>
  <li>Better documentation processing</li>
  <li>Fix the dialog widget placement in Gtk3</li>
  <li>Export the glade catalog for Gtk3</li>
  <li>Set the XfceHeading style class to enable theming in Gtk3.20</li>
  <li>Fix build error with –disable-gtk3 (Bug #12648)</li>
  <li>Remove exo dependancy (Bug #13326)</li>
  <li>Let autotools find and invoke glib-compile-resources (Bug #13326)</li>
  <li>fix: add libxfce4ui_get_resource to abi check symbols (Bug #13326)</li>
  <li>Add support for GOBJECT-INTROSPECTION (Bug #13461)</li>
  <li>Attempt to fix missing gresource file (Bug #13705)</li>
  <li>Fix gladeui2 path detection (Bug #13944)</li>
  <li>Add Ctrl + Alt + t as default shortcut for terminal (Bug #14510)</li>
  <li>Add PrintScreen as shortcut for xfce4-screenshooter (Bug #14524)</li>
  <li>Remove styling of emails in about dialog (Bug #14638)</li>
  <li>Install icons when gladeui2 is set (Bug #15207)</li>
  <li>Translation updates: Albanian, Arabic, Asturian, Basque, Belarusian, Bengali, Bulgarian, Catalan, Chinese (China), Chinese (Hong Kong), Chinese (Taiwan), Croatian, Czech, Danish, Dutch (Flemish), English (Australia), English (Great Britain), Finnish, French, Galician, German, Greek, Hebrew, Hungarian, Icelandic, Indonesian, Italian, Japanese, Kazakh, Korean, Latvian, Lithuanian, Malay, Norwegian Bokmål, Norwegian Nynorsk, Occitan, Polish, Portuguese, Portuguese (Brazilian), Romanian, Russian, Serbian, Slovak, Slovenian, Spanish, Swedish, Telugu, Thai, Turkish, Ukrainian, Urdu, Urdu (Pakistan), Uyghur.</li>
</ul>

<h2>Extension Library <em>(exo)</em></h2>
<ul>
  <li>Appearance: Improved spacing and alignment in the Preferred Applications dialog</li>
  <li>ExoIconChooserDialog: Dropped deprecated International icon context, add Stock icon context</li>
  <li>ExoIconChooserDialog: Increased icon chooser context title length to support long translations</li>
  <li>ExoIconChooserDialog: Skip symbolic icons to boost performance</li>
  <li>Feature: exo-csource: Add --output flag to write output to a file (Bug #12901)</li>
  <li>Feature: exo-helper: Add --query flag to query the preferred application (Bug #8579)</li>
  <li>Feature: exo-helper: Enable dismissal of "Failed to open default" dialogs</li>
  <li>Feature: ExoString: Added new exo_str_is_flag</li>
  <li>Feature: GTK Extensions: Added new exo_gtk_dialog_get_action_area and exo_gtk_dialog_add_secondary_button</li>
  <li>Fix: Add google-chrome-stable binary for the google-chrome helper (Bug #13876)</li>
  <li>Fix: Discard preferred application selection if dialog is canceled (Bug #8802)</li>
  <li>Fix: exo-helper: Use full custom command path (Bug #4093)</li>
  <li>Fix: exo-launch: Pass flags to preferred application (Bug #9427)</li>
  <li>Fix: Hide exo launchers from GNOME Software to prevent accidental uninstallation (Bug #14588)</li>
  <li>Fix: Improved handling of mimeapps.list (Bugs #15046, #15087, #15238)</li>
  <li>Fix: Synchronize default applications to gio-mime (Bug #14633)</li>
  <li>Fix: Use the standard shared thumbnails directory (Bug #14799)</li>
  <li>Icons: Replaced gnome-*, internet-mail, missing-image, user-bookmarks icons with FreeDesktop.org standard icons</li>
  <li>Icons: Stopped shipping generic category icons, these are now standard (Bug #9992)</li>
  <li>Helpers (File Manager): Added PCManFM-Qt</li>
  <li>Helpers (Mail Reader): Added Geary; Dropped Opera Mail</li>
  <li>Helpers (Terminal Emulator): Added Terminator</li>
  <li>Helpers (Web Browser): Added Brave, Google Chrome</li>
  <li>Translation updates: Albanian, Amharic, Arabic, Armenian, Armenian (Armenia), Asturian, Basque, Belarusian, Bengali, Bulgarian, Catalan, Chinese (China), Chinese (Hong Kong), Chinese (Taiwan), Croatian, Czech, Danish, Dutch, English (Australia), English (United Kingdom), Estonian, Finnish, French, Galician, German, Greek, Hebrew, Hungarian, Icelandic, Indonesian, Interlingue, Italian, Japanese, Kannada, Kazakh, Korean, Latvian, Lithuanian, Malay, Norwegian Bokmål, Norwegian Nynorsk, Occitan, Occitan (post 1500), Panjabi, Panjabi (Punjabi), Polish, Portuguese, Portuguese (Brazil), Romanian, Russian, Serbian, Sinhala, Slovak, Slovenian, Spanish, Swedish, Telugu, Thai, Turkish, Uighur, Ukrainian, Urdu, Urdu (Pakistan), Vietnamese.</li>
</ul>

<h2>Menu Library <em>(garcon)</em></h2>
<ul>

</ul>

<h2>File Manager <em>(thunar)</em></h2>
<ul>

</ul>

<h2>Application Finder <em>(xfce4-appfinder)</em></h2>
<ul>

</ul>

<h2>Panel <em>(xfce4-panel)</em></h2>
<ul>

</ul>

<h2>Session Manager <em>(xfce4-session)</em></h2>
<ul>

</ul>

<h2>Settings Manager <em>(xfce4-settings)</em></h2>
<ul>

</ul>

<h2>Configuration Manager <em>(xfconf)</em></h2>
<ul>

</ul>

<h2>Desktop Manager <em>(xfdesktop)</em></h2>
<ul>

</ul>

<h2>Window Manager <em>(xfwm4)</em></h2>
<ul>

</ul>

<h2>Theme Engine <em>(gtk-xfce-engine)</em></h2>
<ul>
  <li>The gtk-xfce-engine has been deprecated and archived.</li>
</ul>

<h2>Power Manager <em>(xfce4-power-manager)</em></h2>
<ul>

</ul>

<h2>Thumbnail Generator <em>(tumbler)</em></h2>

<ul>

</ul>
<!--
<h2>Volume Manager <em>(thunar-volman)</em></h2>
<ul>
</ul>
-->
