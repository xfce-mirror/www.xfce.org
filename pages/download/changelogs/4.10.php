

<h1>Xfce 4.10 Changelog</h1>

<h2>General</h2>
<ul>
  <li>For changes in the 4.10 dependecies, please look at the <a href="/download/changelogs/4.10pre1">4.10pre1</a> ChangeLog.</li>
  <li>See also the <a href="/download/changelogs/4.10pre1">4.10pre1</a> and <a href="/download/changelogs/4.10pre2">4.10pre2</a> ChangeLog for major changes in the 4.10 release.</li>
</ul>

<h2>Development Tools <em>(xfce4-dev-tools)</em></h2>
<ul>
  <li>Bump glib dependency to 2.24.</li>
</ul>

<h2>Utility Library <em>(libxfce4util)</em></h2>
<ul>
  <li>Translation updates: Romanian, Chinese (China).</li>
</ul>

<h2>Widget Library <em>(libxfce4ui)</em></h2>
<ul>
  <li>Update contributor credits.</li>
  <li>Update translators, week 15 and 16.</li>
  <li>Enable startup notification in xfce4-appfinder shortcuts.</li>
  <li>Check abicheck.sh to be more portable (bug #8702).</li>
  <li>Translation updates: English (United Kingdom), Spanish (Castilian), Galician, Japanese, Kazakh, Korean, Dutch (Flemish), Portuguese, Portuguese (Brazilian), Chinese (China).</li>
</ul>

<h2>Extension Library <em>(exo)</em></h2>
<ul>
  <li>Rename "Novell Evolution" to "Evolution" (bug #8703).</li>
  <li>Add Iceweasel helper (bug #8704).</li>
  <li>Translation updates: Arabic, Asturian, Belarusian, Bulgarian, Bengali, Catalan (Valencian), Czech, Welsh, Danish, German, Dzongkha, Greek, English (United Kingdom), Spanish (Castilian), Estonian, Basque, Finnish, French, Galician, Hebrew, Croatian, Hungarian, Indonesian, Icelandic, Italian, Japanese, Georgian, Kazakh, Korean, Kurdish, Lithuanian, Latvian, Macedonian, Norwegian Bokmal, Dutch (Flemish), Norwegian Nynorsk, Panjabi (Punjabi), Polish, Portuguese, Portuguese (Brazilian), Romanian, Russian, Sinhala, Slovak, Slovenian, Albanian, Swedish, Tagalog (Philippines), Turkish, Uyghur, Ukrainian, Urdu, Urdu (Pakistan), Chinese (China), Chinese (Taiwan).</li>
</ul>

<h2>Menu Library <em>(garcon)</em></h2>
<ul>
  <li>Updates for xfce4-run.desktop.</li>
  <li>Remove xfhelp4.desktop from the menu.</li>
  <li>Add debugging for file monitoring and reloading.</li>
  <li>Reduce signal emission on delete events (bug #8671).</li>
  <li>Translation updates: English (United Kingdom), Croatian, Hungarian, Japanese, Korean, Dutch (Flemish), Romanian, Chinese (China).</li>
</ul>

<h2>File Manager <em>(thunar)</em></h2>
<ul>
  <li>Add a 64x64 and 128x128 icon for Thunar.</li>
  <li>Move away from the hard-coded size of window icons (bug #8626).</li>
  <li>Link against gmodule (bug #8467).</li>
  <li>Don't use deprecated g_format_size_for_display.</li>
  <li>Don't use g_atexit anymore.</li>
  <li>Use mount operations with eject and unmount.</li>
  <li>Unref mount operation from sendto menu.</li>
  <li>Fix invalid replacement from previous commit (bug #8779).</li>
  <li>Translation updates: German, English (United Kingdom), Croatian, Hungarian, Japanese, Kazakh, Korean, Dutch (Flemish), Polish, Portuguese (Brazilian), Romanian, Chinese (China).</li>
</ul>

<h2>Application Finder <em>(xfce4-appfinder)</em></h2>
<ul>
  <li>Add a valid category to xfce4-run.desktop.</li>
  <li>Fix property-changed matching.</li>
  <li>Avoid a single category if the root menu has a directory.</li>
  <li>Avoid segfault when right-clicking a custom command.</li>
  <li>Only focus view if an item is selected on entry active.</li>
  <li>Try to spwan a custom command in expanded view as well.</li>
  <li>Translation updates: Czech, German, English (United Kingdom), Spanish (Castilian), Galician, Hungarian, Japanese, Korean, Dutch (Flemish), Portuguese (Brazilian), Romanian, Turkish, Chinese (China), Chinese (Taiwan).</li>
</ul>

<h2>Panel <em>(xfce4-panel)</em></h2>
<ul>
  <li>Use correct LGPL licenses in the libs.</li>
  <li>Restore child properties when moving a plugin.</li>
  <li>Migrate: Use correct pointer for action migrate (bug #8781).</li>
  <li>Migrate: Don't try to migrate already migrated plugin (bug #8778).</li>
  <li>Translation updates: German, English (United Kingdom), Spanish (Castilian), French, Galician, Hungarian, Japanese, Korean, Dutch (Flemish), Polish, Portuguese, Portuguese (Brazilian), Romanian, Chinese (China).</li>
</ul>

<h2>Session Manager <em>(xfce4-session)</em></h2>
<ul>
  <li>Make the buttons sensitive when using sudo (bug #8708).</li>
  <li>Restore ssh and gpg agent starting (bug #7018).</li>
  <li>Remove remaining code to shutdown gconf.</li>
  <li>Skip gpg/ssh-agent if GNOME compat is enabled and gnome-keyring found.</li>
  <li>Replace mkdirhier with mkdir (bug #8776).</li>
  <li>Translation updates: Czech, German, English (United Kingdom),, Spanish (Castilian), Croatian, Galician, Hungarian, Japanese, Kazakh, Korean, Dutch (Flemish), Portuguese, Romanian, Russian, Turkish, Chinese (China), Chinese (Taiwan).</li>
</ul>

<h2>Settings Manager <em>(xfce4-settings)</em></h2>
<ul>
  <li>Use the more generic application-x-executable icon for MIME editor.</li>
  <li>Xsettings ix an alignment problem seen on PPC.</li>
  <li>Translation updates: English (United Kingdom), Spanish (Castilian), French, Galician, Croatian, Hungarian, Japanese, Kazakh, Korean, Lithuanian, Dutch (Flemish), Portuguese, Romanian, Chinese (China).</li>
</ul>

<h2>Configuration Manager <em>(xfconf)</em></h2>
<ul>
  <li>Don't emit property-changed on canceled calls.</li>
  <li>Accept NULL as a string value (bug #8726).</li>
  <li>Check abicheck.sh to be more portable (bug #8702).</li>
  <li>Fix more deprecated g_value_set_char (bug #8690).</li>
  <li>Explicitly link against gthread (bug #8713).</li>
  <li>Drop deprecated g_mapped_file_free.</li>
  <li>Translation updates: English (United Kingdom), Korean, Dutch (Flemish), Portuguese, Romanian, Turkish, Chinese (China).</li>
</ul>

<h2>Desktop Manager <em>(xfdesktop)</em></h2>
<ul>
  <li>Use the correct default value for the &amp;show thumbnails&amp; checkbox.</li>
  <li>Remove deprecated glib/gio functions (bug #8710).</li>
  <li>Translation updates: Catalan (Valencian), Czech, Danish, German, English (United Kingdom), Spanish (Castilian), Basque, Finnish, French, Galician, Croatian, Hungarian, Japanese, Kazakh, Korean, Lithuanian, Dutch (Flemish), Norwegian Nynorsk, Portuguese, Romanian, Russian, Slovak, Ukrainian, Chinese (China), Chinese (Taiwan).</li>
</ul>

<h2>Window Manager <em>(xfwm4)</em></h2>
<ul>
  <li>Translation updates: Czech, English (United Kingdom), Spanish (Castilian), French, Galician, Croatian, Hungarian, Italian, Kazakh, Korean, Dutch (Flemish), Portuguese, Romanian, Russian, Slovak, Chinese (China), Chinese (Taiwan).</li>
</ul>

<h2>Theme Engine <em>(gtk-xfce-engine)</em></h2>
<ul>
  <li>Added px for border sizes.</li>
  <li>Corrected DETAIL names.</li>
  <li>Use the correct colors for options and checks.</li>
  <li>More consistent extension rendering.</li>
  <li>Corrected class matching and alignments.</li>
  <li>Require Gtk 3.2.</li>
  <li>Tuned default theme for Gtk 3.2.</li>
  <li>Added Gtk 3.4 support to the engine.</li>
  <li>Default themes don't support Gtk+-3.4.</li>
</ul>

<h2>Power Manager <em>(xfce4-power-manager)</em></h2>
<ul>
  <li>Fix compilation without dpms.</li>
  <li>Fix incorrect dialog message and error.</li>
  <li>Plug memory leak.</li>
  <li>Use valid printf string.</li>
  <li>Fix compilation with polkit in freebsd (bug #8712).</li>
  <li>Translation updates: Czech, Danish, German, English (United Kingdom), Spanish (Castilian), Basque, Finnish, French, Galician, Croatian, Hungarian, Italian, Japanese, Kazakh, Korean, Lithuanian, Dutch (Flemish), Norwegian Nynorsk, Portuguese, Portuguese (Brazilian), Romanian, Russian, Slovak, Ukrainian, Chinese (China), Chinese (Taiwan).</li>
</ul>

<h2>Volume Manager <em>(thunar-volman)</em></h2>
<ul>
  <li>Translation updates: English (United Kingdom), Japanese, Korean, Dutch (Flemish), Portuguese (Brazilian), Romanian, Chinese (China).</li>
</ul>
