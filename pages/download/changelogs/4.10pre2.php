

<h1>Xfce 4.10pre2 Changelog</h1>

<h2>General</h2>
<ul>
  <li>For changes in the 4.10 dependecies, please look at the <a href="/download/changelogs/4.10pre1">4.10pre1</a> ChangeLog.</li>
</ul>

<h2>Development Tools <em>(xfce4-dev-tools)</em></h2>
<ul>
  <li>Fix license.</li>
  <li>Remove the old BM_ macros.</li>
  <li>Use ?_VERSION for special versioned binary detection (bug #8683).</li>
  <li>Never disable checks.</li>
</ul>

<h2>Utility Library <em>(libxfce4util)</em></h2>
<ul>
  <li>Bump glib to 2.24.</li>
  <li>Translation updates: German, Japanese, Korean, Portuguese.</li>
</ul>

<h2>Widget Library <em>(libxfce4ui)</em></h2>
<ul>
  <li>Update translators, week 13 and 14.</li>
  <li>Increase gtk and glib versions.</li>
  <li>Bump 4util dependency.</li>
  <li>Remove unused function prototype.</li>
  <li>Translation updates: German, Greek, Galician, Japanese, Korean, Dutch (Flemish), Polish, Portuguese, Russian, Turkish.</li>
</ul>

<h2>Extension Library <em>(exo)</em></h2>
<ul>
  <li>Enable startup-notify in the exo-open desktop files.</li>
  <li>Use g_file_set_contents on local files.</li>
  <li>Bump gtk to 2.20 and glib to 2.24.</li>
  <li>Don't set invalid startup id.</li>
  <li>Replace deprecated function g_strcasecmp (bug #8647).</li>
  <li>Fix possible segfault in exo_str_looks_like_an_uri.</li>
  <li>Updates licenses.</li>
  <li>Fix saving of desktop files in local dir.</li>
  <li>Translation updates: Arabic, Greek, French, Galician, Japanese, Korean, Dutch (Flemish), Norwegian Nynorsk, Portuguese, Portuguese (Brazilian).</li>
</ul>

<h2>File Manager <em>(thunar)</em></h2>
<ul>
  <li>Support small property for trash panel applet (bug #8391).</li>
  <li>Make uca.xml readable for humans.</li>
  <li>Enable startup-notify in the uca example.</li>
  <li>Hide thumb queue cleanup debug and plug memleak.</li>
  <li>Plug more leaks in thumbnailer.</li>
  <li>Reload ThunarView if job finishes.</li>
  <li>Use macro to get uri where possible.</li>
  <li>Free string in progress view.</li>
  <li>Fix file selection problems.</li>
  <li>Free module list in provider factory.</li>
  <li>Use a normal ExoBinding to avoid mem leak.</li>
  <li>Bump 4util and 4ui dependencies.</li>
  <li>Use macro to search for sed (bug #8686).</li>
  <li>Translation updates: Catalan (Valencian), Czech, Greek, Basque, Finnish, French, Galician, Croatian, Japanese, Korean, Dutch (Flemish), Norwegian Nynorsk, Portuguese, Portuguese (Brazilian), Turkish.</li>
</ul>

<h2>Application Finder <em>(xfce4-appfinder)</em></h2>
<ul>
  <li>Don't use deprecated g_mapped_file_free (bug #8649).</li>
  <li>Bump gtk, glib and xfce dependencies.</li>
  <li>Make launch button translatable.</li>
  <li>Translation updates: Catalan (Valencian), Danish, German, Greek, Basque, Finnish, French, Galician, Croatian, Italian, Japanese, Kazakh, Korean, Lithuanian, Dutch (Flemish), Norwegian Nynorsk, Polish, Portuguese, Portuguese (Brazilian), Russian, Slovak, Turkish, Ukrainian, Chinese (China).</li>
</ul>

<h2>Panel <em>(xfce4-panel)</em></h2>
<ul>
  <li>Launcher: Fix desktop file monitoring on some systems.</li>
  <li>Panel: Improved DnD markers.</li>
  <li>Panel: Fix invalid autohide with socket dialog (bug #8617).</li>
  <li>Panel: Remove duplicated function.</li>
  <li>Panel: Remove duplicated function.</li>
  <li>Actions: Show translated strings (bug #8660).</li>
  <li>Check for sed using a macro.</li>
  <li>Actions: Fix mnemonics conflict (bug #8657).</li>
  <li>Clock: Fix compiler warning (bug #8648).</li>
  <li>Bump version-info of libxfce4panel.</li>
  <li>Translation updates: Arabic, Catalan (Valencian), Czech, Danish, German, Greek, Esperanto, Spanish (Castilian), Estonian, Basque, Persian, Finnish, French, Galician, Hebrew, Croatian, Hungarian, Indonesian, Italian, Japanese, Kazakh, Korean, Lithuanian, Dutch (Flemish), Norwegian Nynorsk, Polish, Portuguese, Portuguese (Brazilian), Russian, Slovak, Telugu, Turkish, Ukrainian, Chinese (China), Chinese (Taiwan).</li>
</ul>

<h2>Session Manager <em>(xfce4-session)</em></h2>
<ul>
  <li>Fix return value of CanSuspend and CanHibernate.</li>
  <li>Make common no-reply error more subtile.</li>
  <li>Bump package dependency versions.</li>
  <li>Remove deprecated or unused code from xinit.</li>
  <li>Use macro to search for sed.</li>
  <li>Fallback to old method for shutdown (bug #8630).</li>
  <li>Improve xflock4 script (bug #3770).</li>
  <li>Drop the sync code because it can segfault on ext2 (bug #7887).</li>
  <li>Always escape name and comment in dialog.</li>
  <li>Translation updates: Catalan (Valencian), Danish, German, Greek, Basque, Finnish, French, Galician, Croatian, Italian, Japanese, Kazakh, Korean, Lithuanian, Dutch (Flemish), Norwegian Nynorsk, Polish, Portuguese, Portuguese (Brazilian), Slovak, Turkish, Ukrainian, Chinese (China).</li>
</ul>

<h2>Settings Manager <em>(xfce4-settings)</em></h2>
<ul>
  <li>Fix display rate matching.</li>
  <li>Bump package dependency versions.</li>
  <li>Fix missing : in Xft.hintstyle.</li>
  <li>Set Xcursor resources too (bug #8673).</li>
  <li>Fix typo in appearance error.</li>
  <li>Add hardcoded fallback if menu is not found.</li>
  <li>Translation updates: Arabic, Asturian, Bengali, Catalan (Valencian), Czech, Danish, German, Greek, English (United Kingdom), Spanish (Castilian), Basque, Finnish, French, Galician, Hebrew, Croatian, Hungarian, Indonesian, Icelandic, Italian, Japanese, Kazakh, Korean, Lithuanian, Latvian, Norwegian Bokmal, Dutch (Flemish), Norwegian Nynorsk, Panjabi (Punjabi), Polish, Portuguese, Portuguese (Brazilian), Romanian, Russian, Sinhala, Slovak, Swedish, Telugu, Turkish, Uyghur, Ukrainian, Urdu, Urdu (Pakistan), Chinese (China), Chinese (Taiwan).</li>
</ul>

<h2>Configuration Manager <em>(xfconf)</em></h2>
<ul>
  <li>Use LT_PREREQ and LT_INIT.</li>
  <li>UTF-8 check xfconf strings.</li>
  <li>Do not dup strings in xfconf_channel_set_string.</li>
  <li>Bump package dependency versions.</li>
  <li>Fix comment in perl package info (bug #8661).</li>
  <li>Don't use deprecated g_value_set_char (bug #8690).</li>
  <li>Translation updates: German, Greek, Japanese, Korean, Dutch (Flemish), Polish, Portuguese, Turkish.</li>
</ul>

<h2>Desktop Manager <em>(xfdesktop)</em></h2>
<ul>
  <li>Fix dependency versions.</li>
  <li>Hide unneeded message on startup.</li>
  <li>Apply single click option on startup (bug #8615).</li>
  <li>Disable the resize grip from the root window (bug #8636).</li>
  <li>Add new background and remove old ones.</li>
  <li>Check for sed with a macro (bug #8687).</li>
  <li>Make string translatable (bug #8655).</li>
  <li>Fix a mnemonic conflict (bug #8654).</li>
  <li>Simplefy the menu reloading.</li>
  <li>Translation updates: Amharic, Arabic, Asturian, Azerbaijani, Belarusian, Bulgarian, Bengali, Bengali (India), Catalan (Valencian), Czech, Danish, German, Dzongkha, Greek, English (United Kingdom), Esperanto, Spanish (Castilian), Estonian, Basque, Persian, Finnish, French, Galician, Gujarati, Hebrew, Hindi, Croatian, Hungarian, Armenian, Indonesian, Icelandic, Italian, Japanese, Georgian, Kazakh, Korean, Lithuanian, Latvian, Macedonian, Marathi, Malay, Norwegian Bokmal, Dutch (Flemish), Norwegian Nynorsk, Panjabi (Punjabi), Polish, Portuguese, Portuguese (Brazilian), Romanian, Russian, Sinhala, Slovak, Albanian, Swedish, Tamil, Telugu, Turkish, Uyghur, Ukrainian, Urdu, Urdu (Pakistan), Vietnamese, Chinese (China), Chinese (Taiwan).</li>
</ul>

<h2>Window Manager <em>(xfwm4)</em></h2>
<ul>
  <li>Improve tiling.</li>
  <li>Reduce tiling distance (bug #8628).</li>
  <li>Keep pointer position relative to the window being moved (bug #8629).</li>
  <li>Set spacing to avoid overlap with some themes (bug #8501).</li>
  <li>Add workspace settings in a notebook.</li>
  <li>Improve workspace dialog subtitle/comment.</li>
  <li>Generate default icon during make dist.</li>
  <li>Update FSF address in settings dialogs.</li>
  <li>Add missing license.</li>
  <li>Restore button press/release mask as removing it breaks switching workspaces with scroll wheel (bug #8656).</li>
  <li>Add UI option to WM tweaks for tiling.</li>
  <li>Resize fullscreen windows on screen size changes (bug #8622).</li>
  <li>Don't use deprecated g_str(n)casecmp (bug #8688).</li>
  <li>Translation updates: Amharic, Arabic, Asturian, Azerbaijani, Belarusian, Bulgarian, Bengali, Bengali (India), Catalan (Valencian), Czech, Danish, German, Dzongkha, Greek, English (United Kingdom), Esperanto, Spanish (Castilian), Estonian, Basque, Persian, Finnish, French, Galician, Gujarati, Hebrew, Hindi, Croatian, Hungarian, Indonesian, Icelandic, Italian, Japanese, Georgian, Kazakh, Korean, Lithuanian, Latvian, Macedonian, Marathi, Malay, Norwegian Bokmal, Dutch (Flemish), Norwegian Nynorsk, Panjabi (Punjabi), Polish, Portuguese, Portuguese (Brazilian), Romanian, Russian, Sinhala, Slovak, Albanian, Swedish, Tamil, Telugu, Turkish, Uyghur, Ukrainian, Urdu, Urdu (Pakistan), Vietnamese, Chinese (China), Chinese (Taiwan).</li>
</ul>

<h2>Theme Engine <em>(gtk-xfce-engine)</em></h2>
<ul>
  <li>Link against libm for floor() and ceil().</li>
  <li>Reduce GtkComboBox padding (bug #8455).</li>
</ul>

<h2>Power Manager <em>(xfce4-power-manager)</em></h2>
<ul>
  <li>Show dialog in settings category.</li>
  <li>Store brightness properties as uint (bug #7791).</li>
  <li>Put traps around X functions (bug #7999).</li>
  <li>Prevent idle being called on removed battery (bug #7851).</li>
  <li>Fix brightness not working with numlock on (bug #6549).</li>
  <li>Translation updates: Greek, French, Japanese, Korean, Dutch (Flemish), Polish, Portuguese, Turkish.</li>
</ul>

<h2>Volume Manager <em>(thunar-volman)</em></h2>
<ul>
  <li>Translation updates: Greek, Finnish, Galician, Croatian, Japanese, Korean, Dutch (Flemish), Polish, Portuguese, Portuguese (Brazilian), Turkish.</li>
</ul>
