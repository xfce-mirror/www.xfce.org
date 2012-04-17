

<h1>Xfce 4.6.2 Changelog</h1>

<h2>Utility Library <em>(libxfce4util)</em>:</h2>
<ul>
  <li>Fix broken translations in applications using libxfce4util.</li>
  <li>Build fixes for GIT.</li>
  <li>Fix make distcheck.</li>
  <li>Translation updates (es, sl, pl, gl, lv, ur, ur_PK, ro, hu, ast, ru, da, ca, pt, nl, fr, uk, kk, zh_CN, ug, cs, eu, fi, id, de, es).</li>
</ul>

<h2>Widget Library <em>(libxfcegui4)</em>:</h2>
<p>Note that there have been <a href="http://git.xfce.org/xfce/libxfcegui4/plain/NEWS?h=xfce-4.6">standalone releases</a>
   of this packages after 4.6.1, hence the version number 4.6.4 in Xfce 4.6.2.</p>
<ul>
  <li>Build fixes for GIT.</li>
  <li>Fix make distcheck.</li>
  <li>Translation updates (nl, it, sk, ug).</li>
</ul>

<h2>Extension Library <em>(exo)</em>:</h2>
<p>Note that there have been <a href="http://git.xfce.org/xfce/exo/plain/NEWS?h=xfce-4.6">standalone releases</a>
   for this packages after 4.6.1, hence the version number 0.3.107 in Xfce 4.6.2.</p>
<ul>
  <li>Make the treeview work again with gtk 2.20 (bug #6230).</li>
  <li>Fix compilation error (bug #6421).</li>
  <li>Build ChangeLog from GIT.</li>
  <li>Translation updates (pt, nl, it, am, bn, kk, ug, ru, ja).</li>
</ul>

<h2>Menu Library <em>(libxfce4menu)</em>:</h2>
<ul>
  <li>Build fixes for GIT.</li>
  <li>Fix make distcheck and compiler warnings.</li>
  <li>Translation updates (lv, ur_PK, ur, ro, hu, ast, pa, nn, nl, am, ug).</li>
</ul>

<h2>Window Manager <em>(xfwm4)</em>:</h2>
<ul>
  <li>Build fixes for GIT.</li>
  <li>Fix mixed RTL/LTR text not rendering properly in title and tabwin.</li>
  <li>Place windows on top of stack even when not focused in focus follow mouse (bug #5479).</li>
  <li>Increase menu button height and redice width bug #5567).</li>
  <li>Place windows on top of stack even when not focused in focus follow mouse.</li>
  <li>Do not set the "demand attention" flag when the window is already focused.</li>
  <li>Keep windows entirely visible on screen change (bug #5795).</li>
  <li>Various compilation warnings fixed.</li>
  <li>Compute screen size based on each monitor size and layout and avoid using reported size (bug #5795).</li>
  <li>Reloading settings on keys-changed signal is a huge overhead and complete nonsense (bug #5964).</li>
  <li>Recent Xorg drivers disable the output when the lid is closed, leaving no active monitor, in that case simply ignore the event to avoid messing with windows' positions (bug #6209).</li>
  <li>Add linkage to libm when compositor is used (bug #6231).</li>
  <li>Check for invalid type for GValue to avoid a crash (bug #6195).</li>
  <li>Allow only regular windows to be placed either above or below.</li>
  <li>Translation updates (cs, el, es, gl, it, pl, pt, sv, tr, uk, lv, ur, ur_PK, ro, ru, nl, ug).</li>
</ul>

<h2>Desktop Manager <em>(xfdesktop)</em>:</h2>
<ul>
  <li>Build fixes for GIT.</li>
  <li>Rebuild doc directory.</li>
  <li>Add libexo to CFLAGS and LIBS for panel plugin.</li>
  <li>Fix detection of rename/delete ability.</li>
  <li>Fix compilation when libexo isn't present.</li>
  <li>Update system font size when style changes.</li>
  <li>Set mnemonic widget properly for icon type/size labels (bug #5555).</li>
  <li>Never show 'umount' when ejectable, always show 'eject' if ejectable (bug #5343).</li>
  <li>Use GtkBindingSet for keyboard handling on desktop.</li>
  <li>Only register menu with panel if popup succeeded (bug #5792).</li>
  <li>Don't misuse the g_return_(val_)?if_fail() macros as much (bug #5791).</li>
  <li>Translation updates (el, es, gl, it, pl, pt, ru, tr, ro, lv, ca, ur, ur_PK, hu, ast, da, sk, nn, nl, si, am, kk, ja, ug, fr).</li>
</ul>

<h2>Panel <em>(xfce4-panel)</em>:</h2>
<p>Note that there have been <a href="http://git.xfce.org/xfce/xfce4-panel/plain/NEWS?h=xfce-4.6">standalone releases</a>
   for this packages after 4.6.1, hence the version number 4.6.4 in Xfce 4.6.2.</p>
<ul>
  <li>Destroy windowlist menu in an idle (bug #3853).</li>
  <li>Link directly to libm (bug #6233).</li>
  <li>Allow compilation with exo-1 too.</li>
  <li>Translation updates (ru, ta, pr_BR, hu, gl, fi, it, si, uk, id, ug).</li>
</ul>

<h2>Session Manager <em>(xfce4-session)</em>:</h2>
<ul>
  <li>Build fixes for GIT.</li>
  <li>Add timing information to verbose output.</li>
  <li>If it looks like the helper got killed, just return success (bug #4849).</li>
  <li>Translation updates (de, es, gl, hu, id, pl, pt, ru, tr, uk, ro, lv, ur, ur_PK, ast, sk, nl, it, kk).</li>
</ul>

<h2>Settings Manager <em>(xfce4-settings)</em>:</h2>
<p>Note that there have been <a href="http://git.xfce.org/xfce/xfce4-settings/plain/NEWS?h=xfce-4.6">standalone releases</a>
   for this packages after 4.6.1, hence the version number 4.6.5 in Xfce 4.6.2.</p>
<ul>
  <li>Port to libxklavier 5.0 API.</li>
  <li>Fix linking issues (bug #6236).</li>
  <li>Translation updates (pt, nl, it, am, kk, hu).</li>
</ul>

<h2>Configuration Manager <em>(xfconf)</em>:</h2>
<ul>
  <li>Fix compilation with Sun cc (bug #5477).</li>
  <li>Build fixes for GIT.</li>
  <li>Fix make distcheck.</li>
  <li>Merge xml files in reversed order (bug #6079).</li>
  <li>Fix test framework.</li>
  <li>Translation updates (gl, lv, ur, ur_PK, ro, hu, ast, da, pt, cs, nl, uk, eu, it, kk, zh_CN, ca, ja, pr_BR, id, fi, de, ru).</li>
</ul>

<h2>File Manager <em>(thunar)</em>:</h2>
<p>Note that there has been an <a href="http://git.xfce.org/xfce/thunar/plain/NEWS?h=xfce-4.6">individual release</a>
   for this packages after 4.6.1, hence the version number 1.0.2 in Xfce 4.6.2.</p>
<ul>
  <li>Build fixes for GIT and some cleanups.</li>
  <li>Fix make distcheck.</li>
  <li>Work around png 1.4 API change.</li>
  <li>Umask &lt; 0022 not honoured (bug #5813 and bug #3532).</li>
  <li>Translation updates (el, es, it, gl, pl, ru, tr, ro, lv, ur, ur_PK, ast, hu, kk, nn, nl, am, bn, sk, ug).</li>
</ul>

<h2>Utilities <em>(xfce-utils)</em>:</h2>
<ul>
  <li>Build fixes for GIT.</li>
  <li>Fix make distcheck.</li>
  <li>Translation updates (es, gl, pl, ro, lv, ur, ur_PK, hu, ast, ru, it, ta, nl, kk, nb_IN, sk, ug).</li>
</ul>

<h2>Application Finder <em>(xfce4-appfinder)</em>:</h2>
<ul>
  <li>Build fixes for GIT.</li>
  <li>Properly propagate the focus-in-event of the search entry (bug #5883).</li>
  <li>Translation updates (es, gl, hu, id, it, pl, pt, tr, lv, ur, ur_PK, ro, sq, sk, nl, kk, ug).</li>
</ul>
