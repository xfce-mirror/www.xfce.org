

<h1>Xfce 4.6 BETA 3 (4.5.93) Changelog</h1>

<h2>Development tools <em>(xfce4-dev-tools)</em>:</h2>
<ul>
  <li>Remove unreliable and not really needed intltool auto-patch.</li>
</ul>

<h2>Utility Library <em>(libxfce4util)</em>:</h2>
<ul>
  <li>Updated translations: Og Maciel (pt_BR), Abel Martin (es),
  Maxamilian Schleiss (fr), Daniel Nylander (sv), Masato Hashimoto (jp)</li>
</ul>

<h2>Widget Library <em>(libxfcegui4)</em>:</h2>
<ul>
  <li>Review strings and fix markup issues in libxfce4kbd-private.</li>
  <li>Improve the layout of XfceShortcutDialog.</li>
  <li>Add more default shortcuts especially for xfwm4.</li>
  <li>Process primary_text with g_markup_escape_text() in message dialogs.</li>
  <li>Update translations (be, cz, da, es, fi, fr, gl, hu, ja, nb_NO, sq, sv, tr, uk, zh_CN).</li>
</ul>

<h2>Extension Library <em>(exo)</em>:</h2>
<ul>
  <li>Don't setup bindings for <Shift>n and <Shift>p in ExoIconView so that
  type-ahead search works as expected (bug #4633).</li>
  <li>Remove GenericName and "Xfce 4" prefix from
  exo-preferred-applications.desktop.</li>
  <li>Stop startup notification once the plug is created and the helper
  settings dialog content has been moved into the plug.</li>
  <li>Use -V instead of -v as short parameter for --version.</li>
  <li>Improve handling of URIs in exo-open (bug #4627).</li>
  <li>Updated translations: ca (Carles Muños Gorriz), cs (Michal Varady),
  de (Fabian Nowak, Jannis Pohlmann), es (Abel Martín), eu (Piarres
  Beobide), fi (Jari Rahkonen), fr (Maximilian Schleiss), hu (Szervác
  Attila), id (Andhika Padmawan), ja (Nobuhiro Iwamatsu), nb_NO (Terje
  Uriansrud), pt_BR (Og Maciel), sq (Besnik Bleta), sv (Daniel
  Nylander), tr (Eren Turkay).</li>
</ul>

<h2>Menu Library <em>(libxfce4menu)</em>:</h2>
<ul>
  <li>Add weak pointers to the XfceMenuItemCache and XfceMenuSeparator objects
  so you can run xfce_menu_init() and xfce_menu_shutdown() multiple times.</li>
  <li>Always using xfce_menu_get_element() when comparing two menu elements
  instead of comparing menus and items in different ways.</li>
  <li>Review strings.</li>
  <li>Updated translations: cs, es, eu, fi, hu, ja, pt_BR, sq, sv.</li>
</ul>

<h2>Window Manager <em>(xfwm4)</em>:</h2>
<ul>
  <li>Work around a problem affecting the use of the "Super" key as modifier for
  moving windows (bug #4632).</li>
  <li>Fix smart placement not working for windows with height or width larger than
  actual screen size (Bug# 3126).</li>
  <li>Remove maximization if a client updates its size max size hint (bug #4706).</li>
  <li>String review by Josh Saddler <nightmorph@gentoo.org> (bug #4703).</li>
  <li>Fix fill horizontally and vertically not working as expected (bug #4712).</li>
  <li>Prevent "fill" from expanding beyond physical monitor.</li>
  <li>Do not mark gtk+ stock labels as translatable (bug #4722).</li>
  <li>Change default shadow radius and position.</li>
  <li>Fix some controls not being localized (bug #4740).</li>
  <li>Remove markup not supported by xfce_message_dialog() (bug #4786).</li>
  <li>Avoid placing unfocused windows on top of the current focused window when not
  focusing new windows (bug #4795).</li>
</ul>

<h2>Desktop Manager <em>(xfdesktop)</em>:</h2>
<ul>
   <li>Avoid an infinite loop if all files in a backdrop list are invalid.</li>
</ul>

<h2>Panel <em>(xfce4-panel)</em>:</h2>
<ul>
  <li>Cache tooltip icons. Since gtk queries it a lot, resulting in too many
  open()'s for loading the pixbuf (bug #4614).</li>
  <li>Rebuild the plugin if the properties dialog is cancelled (bug #4612).</li>
  <li>Set DISPLAY variable so the launcher launches on the correct screen
  (bug #4654 and #4693)).</li>
  <li>Add missing functions in the symbols file (bug #4700).</li>
  <li>Added a libxfce4panel.h header that includes all other headers for
  plugin writers.</li>
  <li>Use -V for version information.</li>
  <li>Fix broken actions button when the panel orientation is changed (bug #4544).</li>
  <li>Fix a lot of compiler warnings with -Werror.</li>
  <li>Make all the labels mnemonic when possible.</li>
  <li>Lot of dialog tweaks when it comes to strings and spacing.</li>
  <li>New xfce4-panel icons.</li>
  <li>Use a location selector for the launcher dialog's working directory.</li>
  <li>Rename Pager to Workspace Switcher and Systray to Notification Area.</li>
</ul>

<h2>Session Manager <em>(xfce4-session)</em>:</h2>
<ul>
  <li>Don't let autostart get run twice when using the failsafe session (bug 4486).</li>
  <li>Display username in logout dialog (bug 3083).</li>
  <li>Ignore DBUS_GERROR_NO_REPLY errors on suspend/hibernate (bug 4629).</li>
  <li>Use xfce_message_dialog() instead of xfce_err() for the Balou config dialog.</li>
  <li>Check for the existence of pwd.h and getpwuid().</li>
  <li>Display the currently logged-in user in the shutdown dialog.</li>
  <li>Properly signal that startup is complete when using the failsafe session.</li>
  <li>Translation updates: ca, cs, de, es, eu, fi, fr, hu, id, ja, nb_BO, pt_BR, sq, sv, uk, tr.</li>
</ul>

<h2>Settings Manager <em>(xfce4-settings)</em>:</h2>
<ul>
  <li>Allow the settings manager window to be minimized (bug #4596).</li>
  <li>Fix xfce4-settings-helper not setting workspace count.</li>
  <li>Improve the UI of the shortcut command dialog and
  xfce4-settings-editor a bit.</li>
  <li>Fix label wrapping in the settings manager icon view (bug #4743).</li>
  <li>Make workspaces helper multi-screen aware.</li>
  <li>Set SmRestartIfRunning if started in debug mode.</li>
  <li>Add XfceTextRenderer for prelit/follow-state and keyboard navigation
  support in the settings manager dialog.</li>
  <li>Add --dialog=&lt;dialog name&gt; command line parameter to
  xfce4-settings-manager so that one can make it show any of its
  children at startup.</li>
  <li>Review strings.</li>
  <li>Fully update the appearance dialog when the settings are changed in
  another dialog or with xfconf-query.</li>
  <li>Set a DPI size based on a calculation when a custom DPI is disabled,
  this instead of the hard-coded 96 DPI.</li>
  <li>Translation updates: Basque, Brazilian Portuguese, Catalan, Czech,
  Finnish, French, German, Greek, Hungarian, Indonesian, Japanese,
  Norwegian Bokmal, Spanish, Swedish, Turkish, Ukrainian.</li>
</ul>

<h2>Configuration Manager <em>(xfconf)</em>:</h2>
<ul>
  <li>Install xfconfd to $(libexecdir) instead of $(bindir).</li>
  <li>Fix perl bindings link order on Cygwin (bug 4735).</li>
  <li> Allow passing arbitrary options to the perl bindings' Makefile.PL
    generation script (bug 4735).</li>
  <li> Updated translations: Michal Várady (cs), SZERVÁC Attila (hu),
    Daniel Nylander (sv), Terje Uriansrud (nb), Carles Muñoz Gorriz (ca),
    Abel Martín (es), Maximilian Schleiss (fr), Og Maciel (pt_BR),
    Eren Turkay (tr)</li>
</ul>

<h2>File Manager <em>(thunar)</em>:</h2>
<ul>
  <li>Fix crash in the tree side pane when hidden files are toggled (bug #2502).</li>
  <li>Always show an error dialog if one of the files passed via the command
  line cannot be opened.</li>
  <li>Only show eject option for devices when requires_eject is TRUE (bug #3978).</li>
  <li>Fix crash when cd drive is ejected (bug #4257).</li>
  <li>Use posix_fadvise() for copying large files.</li>
  <li>Use -V for version information.</li>
  <li>Restore the selection after deleting a file (bug #3884).</li>
  <li>Fix completion in the path bar when ~/ is used (bug #2973).</li>
  <li>Change the tooltip of the trash plugin from "Trash is full" to
  "Trash contains files" (bug #3266).</li>
  <li>Popup the location selector when the dead tilde is pressed. This allows
  people with dead keys to use the location selector.</li>
  <li>Unload folders in the tree side pane when they are collapsed (bug #4051).</li>
  <li>Don't monitor /proc and /dev on Linux systems.</li>
  <li>Implement window groups so modal dialogs don't block other Thunar
  windows (bug #3586).</li>
  <li>Open a question dialog before removing a custom action (bug #3838).</li>
  <li>Make the first alpha numeric character upper-case in the case renamer
  (bug #3559).</li>
  <li>Update links to the Glib reference manual in the docs (bug #4555).</li>
  <li>Only respond to the predefined key bindings for deleting files when
  the user has not set a custom accelerator (bug #4173).</li>
  <li>Implement menu providers in the side pane popup menus (bug #2740).</li>
  <li>Unmounted volumes are 50% translucent so give some visual feedback.</li>
  <li>Add rename option to the tree side pane popup menu.</li>
  <li>Don't go back in the history anymore if the new directory is the first
  one in the backward history (bug #4661).</li>
  <li>Implement reorder, positioned drag and drop and rubberbanding in the
  renamer dialog (bug #3325).</li>
  <li>Change Name value of the desktop entry to "Thunar File Manager".</li>
  <li>Go back and forward using the 8th and 9th button on the mouse (bug #4687).</li>
  <li>Various compilers warnings were fixed, some performace improvements
  and less memory allocations.</li>
  <li>Update Albanian, Basque, Belarusian, Brazilian Portuguese, Catalan, Czech,
  Danish, Finnish, French, Galician, German, Hungarian, Indonesian, Japanese,
  Norwegian Bokmal, Polish, Simplified Chinese, Spanish, Swedish, Turkish and
  Ukrainian translations.</li>
</ul>

<h2>Mixer <em>(xfce4-mixer)</em>:</h2>
<ul>
  <li>Change plugin volume step size from 1% to 5%.</li>
  <li>Use "multimedia-volume-control" icon as the default window icon
  instead of "xfce4-mixer".</li>
  <li>Review strings.</li>
  <li>Translation updates: cs (Michal Varady), de (Fabian Nowak), es (Abel
  Martín), eu (Piarres Beobide), fi (Jari Rahkonen), fr (Maximilian
  Schleiss), gl (Leandro Regueiro), hu (Szervác Attila), ja (Nobohiro
  Iwamatsu), sv (Daniel Nylander), uk (Dmitry Nikitin)</li>
</ul>

<h2>Utilities <em>(xfce-utils)</em>:</h2>
<ul>
  <li>Add --xfce-version option to print the Xfce release version (bug 3754).</li>
</ul>

<h2>Application Finder <em>(xfce4-appfinder)</em>:</h2>
<ul>
  <li>Assume "All" category if the current category string is empty (bug #4613).</li>
  <li>Review strings.</li>
  <li>Translation updates: be (Alexander Nyakhaychyk), ca (Carles Muños Gorriz),
  cs (Michal Varady), da (Lars Nielsen), de (Fabian Nowak, Jannis Pohlmann),
  el (Stavros Giannouris), es (Abel Martín), eu (Piarres Beobide), fi (Jari
  Rahkonen), gl (Leandro Regueiro), ja (Nobuhiro Iwamatsu), sv (Daniel
  Nylander), tr (Eren Turkay), uk (Dimitry Nikitin), zh_CN (Hunt Xu).</li>
</ul>
