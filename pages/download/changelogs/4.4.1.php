<h1>Xfce 4.4.1 Changelog</h1>

<h2>Utilities Library <em>(libxfce4util)</em></h2>
<ul>
  <li>Fix invalid g_slice_free1() in XfceRc code (bug #2854).</li>
  <li>Fix bug when deleting groups.</li>
  <li>Do not use GMemChunk for XfceRc module as that leaks all of its memory starting with GLib 2.10 (bug #2427).</li>
</ul>

<h2>Widget Library <em>(libxfcegui4)</em></h2>
<ul>
  <li>Change 2 GPL headers to LGPL.</li>
  <li>Test for support of -Wall, -Werror and -errwarn=%all (bug #2918).</li>
  <li>Fix aspect ratio of the pager when using viewports, required for window managers such as Beryl that use multiple viewports within one single workspace.</li>
  <li>Many translation updates.</li>
</ul>

<h2>Window Manager <em>(xfwm4)</em></h2>
<ul>
  <li>Treat dialogs and utility windows as transients for group (bug #3102).</li>
  <li>Add support for shape input with XShape extension 1.1 (bug #3092).</li>
  <li>Make the title button in the xfwm4 settings manager dragable (bug #3000).</li>
  <li>Fix a misinterpretation of ICCCM about when to send a synthetic configureNotify event (bug #2977).</li>
  <li>Add new hidden option to instruct xfwm4 not to bring window back on current workspace when activated (bug #2961).</li>
  <li>Place splash screen windows on the normal layer, so that dialogs that get mapped during startup have a chance to be placed above the splash screen.</li>
  <li>Raise focused window on workspace switch (bug #2960).</li>
  <li>Sort Z-order on workspace change (bug #2960).</li>
  <li>Fix the small lag before icon update at first map and when updating all frames at once.</li>
  <li>Use timeout for frame redraw, check actual WM name changes to work around apps that falsely update their WM name property (bug #2810).</li>
  <li>Updated translations: Hungaria, Catalan, Italian, Polish, German, Japanese, Turkish, Ukrainian, Dutch, Chinese (simplified) and French.</li>
  <li>New translations: Albanian (Besnik Bleta), English (Jeff Bailes).</li>
</ul>

<h2>Desktop Manager <em>(xfdesktop)</em></h2>
<ul>
  <li>Fix entries in the menu.xml files that should not have been translated.</li>
  <li>Add support for menu file as argument (bug #2876).</li>
  <li>Remove use of __FUNCTION__ as it breaks sun's compiler (bug #2924).</li>
  <li>Blurry rendering of unscaled backgrounds (bug #2939).</li>
  <li>Fix uri parsing to unescape '%##' stuff in the uri (bug #2942).</li>
  <li>Many translation updates.</li>
</ul>

<h2>Panel <em>(xfce4-panel)</em></h2>
<ul>
  <li>Completely hide the right-click menu when kiosk mode is enabled (bug #2984).</li>
  <li>Show the system tray border in the default layout and increase the top panel size to 30px, so users can actually see the system tray.</li>
  <li>Allow freely movable panels on the screen edges (bug #3039).</li>
  <li>Improve the icon size of the actions plugin and add an option to change the orientation of the buttons (bug #2999).</li>
  <li>Unhide when dragging over the panel (bug #2914).</li>
  <li>Check for NULL pointers in DBG messages to prevent crashes on Solaris, based on patch from William Bonnet (bug #2922).</li>
  <li>Add some checks for valid tree selection (bug #2933).</li>
  <li>Many translation updates.</li>
</ul>

<h2>Settings Manager <em>(xfce-mcs-manager)</em></h2>
<ul>
  <li>Test for support of -Wall, -Werror and -errwarn=%all. (bug #2918).</li>
  <li>Many translation updates.</li>
</ul>

<h2>Settings Manager Plugins <em>(xfce-mcs-plugins)</em></h2>
<ul>
  <li>Test for support of -Wall, -Werror and -errwarn=%all. (bug #2919).</li>
  <li>Add default shortcuts for volume control using aumix.</li>
  <li>Do not include theme without directory or hidden in the icon theme list (bug #2912).</li>
  <li>Many translation updates.</li>
</ul>

<h2>Text Editor <em>(mousepad)</em></h2>
<ul>
  <li>Test for support of -Wall, -Werror and -errwarn=%all. (bug #2921).</li>
</ul>

<h2>Printing Helper <em>(xfprint)</em></h2>
<ul>
  <li>Many translation updates.</li>
</ul>

<h2>Development Tools <em>(xfce4-dev-tools)</em></h2>
<ul>
  <li>Add script for generating commit messages from ChangeLogs on the fly (xdt-commit).</li>
</ul>

<h2>Utilities <em>(xfce-utils)</em></h2>
<ul>
  <li>Update the AUTHORS file.</li>
  <li>Fix syntax error in startxfce script (bug #3089).</li>
  <li>Fix insecure use of temporary file in startup script.</li>
  <li>Put /usr/local/share first (bug #2967).</li>
  <li>Fix an issue with the syntax in startxfce4 script (bug #2967).</li>
  <li>Many translation updates.</li>
</ul>

<h2>Volume Control <em>(xfce4-mixer)</em></h2>
<ul>
  <li>Follow the HIG specifications on the buttons.</li>
  <li>Add test_vc to Makefile.am.</li>
  <li>Many translation updates.</li>
</ul>

<h2>Calendar and Appointments <em>(xfcalendar)</em></h2>
<ul>
  <li>Bug when adding All day event from iCal. All day events were handled wrongly in Orage (bug #3058).</li>
  <li>Recurring events need to happen on ending date also (bug #2937).</li>
  <li>Erroneous warning when adding panel plugin (bug #2863).</li>
  <li>Change field before save so that spin buttons activate always (bug #2811).</li>
  <li>Many translation updates.</li>
</ul>

<h2>Application Finder <em>(xfce4-appfinder)</em></h2>
<ul>
  <li>Many translation updates.</li>
</ul>
