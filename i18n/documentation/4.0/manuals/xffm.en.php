
<h1><a name="xffm"></a>XFce 4 Filemanager</h1>

<h3>Edscott Wilson Garcia</h3>

<p><tt>&lt;<a href=
"mailto:edcott@imp.mx">edcott@imp.mx</a>&gt;</tt></p><span xmlns=
"http://www.w3.org/TR/xhtml1/transitional">This manual describes
<b><tt>xffm</tt></b> version 4.0<br>
<br></span>

<p><span xmlns=
"http://www.w3.org/TR/xhtml1/transitional">Copyright &#169; 2003
Edscott Wilson Garcia</span></p>
<hr>

<p><b>Table of Contents</b></p>

<dl>
<dt><a href="#xffm-tree-types">File manager tree types</a></dt>

<dt><a href="#xffm-operations">File manager operations</a></dt>

<dt><a href="#xffm-commands">File manager commands</a></dt>

<dt><a href="#xffm-settings">The xfce-mcs-manager</a></dt>

<dt><a href="#xffm-themes">The icon themes</a></dt>

<dt><a href="#xffm-wastebaskets">The wastebasket story</a></dt>

<dt><a href="#xffm-filter-find">The filter and find
story</a></dt>

<dt><a href="#xffm-samba">The samba story</a></dt>

<dt><a href="#xffm-copyright">About xffm</a></dt>
</dl>

<p>&nbsp;</p>

<h2 style="clear: both"><a name="xffm-tree-types"></a>File
manager tree types</h2>

<p>Currently there are seven different types of root level branch
types:</p>

<dl>
<dt>Local files</dt>

<dd>
<p>The local files branch is the traditional tree where files
on the local computer are displayed. The tree can be opened
to any level of nesting, and the top level can be relocatable
to any directory on the local computer. To call xffm with
only the local files branch activated, use
<b><tt>xftree4</tt></b> as the command line.</p>
</dd>

<dt>Bookmarks</dt>

<dd>
<p>The bookmarks branch is a way to create virtual
directories with local files and remote SMB network files or
shares. Multiple bookmark configurations can be used and
toggled using ctrl-B. To invoke xffm with only the bookmark
branch active, use <b><tt>xfbook4</tt></b> as the command
line.</p>
</dd>

<dt>SMB Network</dt>

<dd>
<p>The SMB network branch is the way to navigate through a
SMB network using the samba suite programs. To invoke xffm
with only the SMB network branch active, use
<b><tt>xfsamba4</tt></b> as the command line.</p>
</dd>

<dt>Find results</dt>

<dd>
<p>The find results branch is where the results of find
queries are displayed. Full filemanager operations are
enabled on the results. To invoke xffm with only the find
branch active, use <b><tt>xfglob4</tt></b> as the command
line.</p>
</dd>

<dt>Xfce4 panel applications</dt>

<dd>
<p>The applications branch is an alternate way to access
programs which have been configured for launch with the xfce4
panel. It is most usefull when xffm is being executed on a
remote machine. To invoke xffm with only the panel
applications branch active, use <b><tt>xfapps4</tt></b> as
the command line.</p>
</dd>

<dt>Fstab mount points</dt>

<dd>
<p>The fstab branch is a alternate way of viewing the
filesystem, where the physical devices are listed by mount
point. This enables easy mount/unmount operations with the
keyboard RIGHT and LEFT cursor, mouse double-click, or menu
selection. To invoke xffm with only the fstab branch active,
use <b><tt>xffstab4</tt></b> as the command line.</p>
</dd>

<dt>Trashcan</dt>

<dd>
<p>The trashcan branch is a database (DBHashtable) listing
the files which have been moved to wastebaskets. Being a
database, files need not be moved or copied to be collected
or uncollected into the trashcan. Files will remain in the
wastebasket they belong to; this may be a xffm wastebasket, a
GNOME wastebasket or a KDE wastebasket among others. More
information about the way it works can be found in the
<a href="#xffm-wastebaskets" target="_top">wastebasket
story</a> below. To invoke xffm with only the trashcan branch
active, use <b><tt>xftrash4</tt></b> as the command line.</p>
</dd>
</dl>

<p>&nbsp;</p>

<h2 style="clear: both"><a name="xffm-operations"></a>File
manager operations</h2>

<p>The following table lists the filemanager operations and their
availability.</p>

<p><em>Legend:</em></p>

<p>T=toolbar</p>

<p>M=main menu</p>

<p>P=popup menu (button 3)</p>

<p>K=keyboard access</p>

<p>D=drag and drop</p>

<p>X=X pasteboard</p>

<p>C=doubleclick</p>

<p>* loses mountpoint status</p>

<p>** loses trashed status</p>

<table xmlns="http://www.w3.org/TR/xhtml1/transitional" bgcolor=
"#E0E0E0" cellspacing="0" cellpadding="4" border="1">
<colgroup>
<col>
<col>
<col>
<col>
<col>
<col>
<col>
<col>
<col>
<col>
<col>
</colgroup>

<thead>
<tr>
<th align="left">Operation</th>

<th align="left">Keyboard shortcut</th>

<th align="left">Local files</th>

<th align="left">Local directories</th>

<th align="left">Smb files</th>

<th align="left">Smb directories</th>

<th align="left">Smb shares</th>

<th align="left">Smb servers</th>

<th align="left">Application</th>

<th align="left">Fstab mount point</th>

<th align="left">Trash files</th>
</tr>
</thead>

<tbody>
<tr>
<td align="left">remove</td>

<td align="left">delete</td>

<td align="left">TMPK</td>

<td align="left">TMPK</td>

<td align="left">TMPK</td>

<td align="left">TMPK</td>

<td align="left">-</td>

<td align="left">-</td>

<td align="left">TMPK</td>

<td align="left">-</td>

<td align="left">TMPK</td>
</tr>

<tr>
<td align="left">move-to-trash</td>

<td align="left">delete</td>

<td align="left">TMPK</td>

<td align="left">TMPK</td>

<td align="left">-</td>

<td align="left">-</td>

<td align="left">-</td>

<td align="left">-</td>

<td align="left">-</td>

<td align="left">-</td>

<td align="left">-</td>
</tr>

<tr>
<td align="left">move</td>

<td align="left">-</td>

<td align="left">DX</td>

<td align="left">DX</td>

<td align="left">-</td>

<td align="left">-</td>

<td align="left">-</td>

<td align="left">-</td>

<td align="left">-</td>

<td align="left">-</td>

<td align="left">-</td>
</tr>

<tr>
<td align="left">copy</td>

<td align="left">-</td>

<td align="left">DX</td>

<td align="left">DX</td>

<td align="left">DX</td>

<td align="left">DX</td>

<td align="left">-</td>

<td align="left">-</td>

<td align="left">-</td>

<td align="left">-</td>

<td align="left">-</td>
</tr>

<tr>
<td align="left">touch</td>

<td align="left">ctrl-M</td>

<td align="left">MPK</td>

<td align="left">-</td>

<td align="left">-</td>

<td align="left">-</td>

<td align="left">-</td>

<td align="left">-</td>

<td align="left">MPK</td>

<td align="left">-</td>

<td align="left">MPK</td>
</tr>

<tr>
<td align="left">symlink</td>

<td align="left">ctrl-S</td>

<td align="left">MPK</td>

<td align="left">MPK</td>

<td align="left">-</td>

<td align="left">-</td>

<td align="left">-</td>

<td align="left">-</td>

<td align="left">MPK</td>

<td align="left">MPK*</td>

<td align="left">MPK</td>
</tr>

<tr>
<td align="left">duplicate</td>

<td align="left">ctrl-D</td>

<td align="left">MPK</td>

<td align="left">MPK</td>

<td align="left">-</td>

<td align="left">-</td>

<td align="left">-</td>

<td align="left">-</td>

<td align="left">MPK</td>

<td align="left">MPK*</td>

<td align="left">MPK</td>
</tr>

<tr>
<td align="left">rename</td>

<td align="left">ctrl-R</td>

<td align="left">MPK</td>

<td align="left">MPK</td>

<td align="left">-</td>

<td align="left">-</td>

<td align="left">-</td>

<td align="left">-</td>

<td align="left">MPK</td>

<td align="left">MPK*</td>

<td align="left">MPK**</td>
</tr>

<tr>
<td align="left">print</td>

<td align="left">ctrl-P</td>

<td align="left">TMPK</td>

<td align="left">TMPK</td>

<td align="left">-</td>

<td align="left">-</td>

<td align="left">-</td>

<td align="left">-</td>

<td align="left">TMPK</td>

<td align="left">-</td>

<td align="left">TMPK</td>
</tr>

<tr>
<td align="left">open</td>

<td align="left">ctrl-O</td>

<td align="left">MPKC</td>

<td align="left">MPKC</td>

<td align="left">-</td>

<td align="left">-</td>

<td align="left">-</td>

<td align="left">-</td>

<td align="left">MPKC</td>

<td align="left">MPKC</td>

<td align="left">MPKC</td>
</tr>

<tr>
<td align="left">bookmark</td>

<td align="left">-</td>

<td align="left">DX</td>

<td align="left">DX</td>

<td align="left">DX</td>

<td align="left">DX</td>

<td align="left">DX</td>

<td align="left">DX</td>

<td align="left">DX</td>

<td align="left">DX*</td>

<td align="left">DX</td>
</tr>
</tbody>
</table>

<p>&nbsp;</p>

<h2 style="clear: both"><a name="xffm-commands"></a>File manager
commands</h2>

<p>The following table lists the filemanager commands and their
availability.</p>

<p>* applies to selected branch only</p>

<table xmlns="http://www.w3.org/TR/xhtml1/transitional" bgcolor=
"#E0E0E0" cellspacing="0" cellpadding="4" border="1">
<colgroup>
<col>
<col>
<col>
<col>
<col>
<col>
</colgroup>

<thead>
<tr>
<th>&nbsp;</th>

<th>Command</th>

<th>Key</th>

<th>Toolbar</th>

<th>Main menu</th>

<th>Popup menu</th>
</tr>
</thead>

<tbody>
<tr>
<td>&nbsp;</td>

<td>Refresh</td>

<td>ctrl-Z</td>

<td>Yes</td>

<td>Yes</td>

<td>Yes</td>
</tr>

<tr>
<td>&nbsp;</td>

<td>Properties</td>

<td>ctrl-I</td>

<td>Yes</td>

<td>Yes</td>

<td>Yes</td>
</tr>

<tr>
<td>&nbsp;</td>

<td>zoom in</td>

<td>alt-cursor_right</td>

<td>Yes</td>

<td>Yes</td>

<td>Yes</td>
</tr>

<tr>
<td>&nbsp;</td>

<td>zoom out</td>

<td>alt-cursor_left</td>

<td>Yes</td>

<td>Yes</td>

<td>Yes</td>
</tr>

<tr>
<td>&nbsp;</td>

<td>sort by name</td>

<td>-</td>

<td>Yes</td>

<td>-</td>

<td>Yes</td>
</tr>

<tr>
<td>&nbsp;</td>

<td>sort by size</td>

<td>-</td>

<td>Yes</td>

<td>-</td>

<td>Yes</td>
</tr>

<tr>
<td>&nbsp;</td>

<td>sort by date</td>

<td>-</td>

<td>Yes</td>

<td>-</td>

<td>Yes</td>
</tr>

<tr>
<td>&nbsp;</td>

<td>sort by owner</td>

<td>-</td>

<td>Yes</td>

<td>-</td>

<td>Yes</td>
</tr>

<tr>
<td>&nbsp;</td>

<td>sort by group</td>

<td>-</td>

<td>Yes</td>

<td>-</td>

<td>Yes</td>
</tr>

<tr>
<td>&nbsp;</td>

<td>subsort by filetype</td>

<td>shift-ctrl-F</td>

<td>-</td>

<td>Yes</td>

<td>Yes</td>
</tr>

<tr>
<td>&nbsp;</td>

<td>invisible wastebaskets</td>

<td>shift-ctrl-W</td>

<td>-</td>

<td>Yes</td>

<td>-</td>
</tr>

<tr>
<td>&nbsp;</td>

<td>Detailed view</td>

<td>-</td>

<td>Yes</td>

<td>Yes</td>

<td>-</td>
</tr>

<tr>
<td>&nbsp;</td>

<td>small view</td>

<td>-</td>

<td>Yes</td>

<td>Yes</td>

<td>-</td>
</tr>

<tr>
<td>&nbsp;</td>

<td>default view</td>

<td>-</td>

<td>Yes</td>

<td>Yes</td>

<td>-</td>
</tr>

<tr>
<td>&nbsp;</td>

<td>icon view</td>

<td>-</td>

<td>Yes</td>

<td>Yes</td>

<td>-</td>
</tr>

<tr>
<td>&nbsp;</td>

<td>show hidden files</td>

<td>sift-ctrl-H</td>

<td>-</td>

<td>Yes</td>

<td>Yes*</td>
</tr>

<tr>
<td>&nbsp;</td>

<td>show main menu</td>

<td>F1</td>

<td>Yes</td>

<td>-</td>

<td>-</td>
</tr>

<tr>
<td>&nbsp;</td>

<td>show navigation toolbar</td>

<td>F2</td>

<td>Yes</td>

<td>-</td>

<td>-</td>
</tr>

<tr>
<td>&nbsp;</td>

<td>show file toolbar</td>

<td>F3</td>

<td>Yes</td>

<td>-</td>

<td>-</td>
</tr>

<tr>
<td>&nbsp;</td>

<td>show filter</td>

<td>F4</td>

<td>Yes</td>

<td>-</td>

<td>-</td>
</tr>

<tr>
<td>&nbsp;</td>

<td>show column titles</td>

<td>F5</td>

<td>Yes</td>

<td>-</td>

<td>-</td>
</tr>

<tr>
<td>&nbsp;</td>

<td>show sizes</td>

<td>F6</td>

<td>-</td>

<td>-</td>

<td>-</td>
</tr>

<tr>
<td>&nbsp;</td>

<td>show dates</td>

<td>F7</td>

<td>-</td>

<td>-</td>

<td>-</td>
</tr>

<tr>
<td>&nbsp;</td>

<td>show owner</td>

<td>F8</td>

<td>-</td>

<td>-</td>

<td>-</td>
</tr>

<tr>
<td>&nbsp;</td>

<td>show group</td>

<td>F9</td>

<td>-</td>

<td>-</td>

<td>-</td>
</tr>

<tr>
<td>&nbsp;</td>

<td>activate main menu</td>

<td>F10</td>

<td>-</td>

<td>-</td>

<td>-</td>
</tr>

<tr>
<td>&nbsp;</td>

<td>show permissions</td>

<td>F11</td>

<td>-</td>

<td>-</td>

<td>-</td>
</tr>

<tr>
<td>&nbsp;</td>

<td>show popup menu</td>

<td>F12</td>

<td>-</td>

<td>-</td>

<td>-</td>
</tr>

<tr>
<td>images:</td>

<td>Preview image</td>

<td>-</td>

<td>-</td>

<td>-</td>

<td>Yes</td>
</tr>

<tr>
<td>Root level:</td>

<td>Hide branch</td>

<td>-</td>

<td>-</td>

<td>-</td>

<td>Yes</td>
</tr>

<tr>
<td>&nbsp;</td>

<td>activate branch</td>

<td>-</td>

<td>-</td>

<td>Yes</td>

<td>-</td>
</tr>

<tr>
<td>Other options:</td>

<td>Collect trash</td>

<td>-</td>

<td>-</td>

<td>-</td>

<td>Yes*</td>
</tr>

<tr>
<td>&nbsp;</td>

<td>Preview images</td>

<td>-</td>

<td>-</td>

<td>-</td>

<td>Yes*</td>
</tr>

<tr>
<td>&nbsp;</td>

<td>Select all</td>

<td>ctrl-A</td>

<td>-</td>

<td>Yes</td>

<td>Yes</td>
</tr>

<tr>
<td>&nbsp;</td>

<td>Unselect</td>

<td>ctrl-U</td>

<td>-</td>

<td>Yes</td>

<td>-</td>
</tr>

<tr>
<td>&nbsp;</td>

<td>Find</td>

<td>Ctrl-F</td>

<td>Yes</td>

<td>Yes</td>

<td>Yes</td>
</tr>

<tr>
<td>&nbsp;</td>

<td>Execute</td>

<td>ctrl-E</td>

<td>Yes</td>

<td>Yes</td>

<td>Yes</td>
</tr>

<tr>
<td>&nbsp;</td>

<td>Differences</td>

<td>ctrl-J</td>

<td>Yes</td>

<td>Yes</td>

<td>Yes</td>
</tr>

<tr>
<td>&nbsp;</td>

<td>scramble</td>

<td>ctrl-alt-S</td>

<td>-</td>

<td>Yes</td>

<td>Yes</td>
</tr>

<tr>
<td>&nbsp;</td>

<td>unscramble</td>

<td>ctrl-alt-U</td>

<td>-</td>

<td>Yes</td>

<td>Yes</td>
</tr>

<tr>
<td>&nbsp;</td>

<td>Delete all trash</td>

<td>-</td>

<td>-</td>

<td>Yes</td>

<td>Yes</td>
</tr>

<tr>
<td>&nbsp;</td>

<td>Uncollect trash</td>

<td>-</td>

<td>-</td>

<td>Yes</td>

<td>Yes</td>
</tr>

<tr>
<td>&nbsp;</td>

<td>Clear find results</td>

<td>-</td>

<td>-</td>

<td>Yes</td>

<td>Yes</td>
</tr>

<tr>
<td>&nbsp;</td>

<td>Clear bookmarks</td>

<td>-</td>

<td>-</td>

<td>Yes</td>

<td>Yes</td>
</tr>

<tr>
<td>&nbsp;</td>

<td>Open bookmark file</td>

<td>ctrl-B</td>

<td>-</td>

<td>Yes</td>

<td>-</td>
</tr>

<tr>
<td>&nbsp;</td>

<td>New bookmark file</td>

<td>-</td>

<td>-</td>

<td>Yes</td>

<td>-</td>
</tr>

<tr>
<td>&nbsp;</td>

<td>New file</td>

<td>insert</td>

<td>Yes</td>

<td>Yes</td>

<td>Yes</td>
</tr>

<tr>
<td>&nbsp;</td>

<td>New Directory</td>

<td>insert</td>

<td>Yes</td>

<td>Yes</td>

<td>Yes</td>
</tr>

<tr>
<td>&nbsp;</td>

<td>Open in terminal</td>

<td>ctrl-T</td>

<td>Yes</td>

<td>Yes</td>

<td>Yes</td>
</tr>

<tr>
<td>&nbsp;</td>

<td>Open in xffm</td>

<td>ctrl-N</td>

<td>Yes</td>

<td>Yes</td>

<td>Yes</td>
</tr>

<tr>
<td>&nbsp;</td>

<td>Open with</td>

<td>ctrl-O</td>

<td>Yes</td>

<td>Yes</td>

<td>Yes</td>
</tr>

<tr>
<td>&nbsp;</td>

<td>print file</td>

<td>ctrl-P</td>

<td>Yes</td>

<td>Yes</td>

<td>Yes</td>
</tr>

<tr>
<td>&nbsp;</td>

<td>printer configuration</td>

<td>-</td>

<td>-</td>

<td>Yes</td>

<td>Yes</td>
</tr>

<tr>
<td>&nbsp;</td>

<td>Quit</td>

<td>ctrl-Q</td>

<td>-</td>

<td>Yes</td>

<td>-</td>
</tr>

<tr>
<td>&nbsp;</td>

<td>cut</td>

<td>ctrl-X</td>

<td>Yes</td>

<td>Yes</td>

<td>Yes</td>
</tr>

<tr>
<td>&nbsp;</td>

<td>copy</td>

<td>ctrl-C</td>

<td>Yes</td>

<td>Yes</td>

<td>Yes</td>
</tr>

<tr>
<td>&nbsp;</td>

<td>paste</td>

<td>ctrl-V</td>

<td>Yes</td>

<td>Yes</td>

<td>Yes</td>
</tr>

<tr>
<td>&nbsp;</td>

<td>list pasteboard</td>

<td>ctrl-L</td>

<td>-</td>

<td>Yes</td>

<td>-</td>
</tr>

<tr>
<td>&nbsp;</td>

<td>clear pasteboard</td>

<td>ctrl-K</td>

<td>-</td>

<td>Yes</td>

<td>-</td>
</tr>

<tr>
<td>&nbsp;</td>

<td>go home</td>

<td>ctrl-HOME</td>

<td>Yes</td>

<td>Yes</td>

<td>-</td>
</tr>

<tr>
<td>&nbsp;</td>

<td>go to</td>

<td>ctrl-DOWN</td>

<td>Yes</td>

<td>Yes</td>

<td>-</td>
</tr>

<tr>
<td>&nbsp;</td>

<td>go back</td>

<td>ctrl-LEFT</td>

<td>Yes</td>

<td>Yes</td>

<td>-</td>
</tr>

<tr>
<td>&nbsp;</td>

<td>go forward</td>

<td>ctrl-RIGHT</td>

<td>Yes</td>

<td>Yes</td>

<td>-</td>
</tr>

<tr>
<td>&nbsp;</td>

<td>go up</td>

<td>ctrl-UP</td>

<td>Yes</td>

<td>Yes</td>

<td>-</td>
</tr>

<tr>
<td>&nbsp;</td>

<td>autoscroll</td>

<td>shift-ctrl-A</td>

<td>-</td>

<td>Yes</td>

<td>-</td>
</tr>

<tr>
<td>&nbsp;</td>

<td>copy on drag</td>

<td>shift-ctrl-C</td>

<td>-</td>

<td>Yes</td>

<td>-</td>
</tr>

<tr>
<td>&nbsp;</td>

<td>image auto-previews</td>

<td>shift-ctrl-I</td>

<td>-</td>

<td>Yes</td>

<td>-</td>
</tr>

<tr>
<td>&nbsp;</td>

<td>Local file monitor</td>

<td>shift-ctrl-M</td>

<td>-</td>

<td>Yes</td>

<td>-</td>
</tr>

<tr>
<td>&nbsp;</td>

<td>auto trash collection</td>

<td>shift-ctrl-T</td>

<td>-</td>

<td>Yes</td>

<td>-</td>
</tr>

<tr>
<td>&nbsp;</td>

<td>rsh before ssh</td>

<td>shift-ctrl-R</td>

<td>-</td>

<td>Yes</td>

<td>-</td>
</tr>

<tr>
<td>&nbsp;</td>

<td>scp before rsync</td>

<td>shift-ctrl-S</td>

<td>-</td>

<td>Yes</td>

<td>-</td>
</tr>
</tbody>
</table>

<p>&nbsp;</p>

<h2 style="clear: both"><a name="xffm-settings"></a>The
xfce-mcs-manager</h2>

<p>If you wish to enable a certain configuration of which
branches are shown and which are not when xffm is invoked as
<b><tt>xffm</tt></b>, you must use the <em>XFce4 Settings
Manager</em> (packaged separately) to set the environment
variables on the fly. Set any of the following environment
variables:</p>

<ul type="disc">
<li>XFFM_HIDE_BOOK</li>

<li>XFFM_HIDE_LOCAL</li>

<li>XFFM_HIDE_NETWORK</li>

<li>XFFM_HIDE_APPS</li>

<li>XFFM_HIDE_FIND</li>

<li>XFFM_HIDE_TRASH</li>

<li>XFFM_HIDE_FSTAB</li>
</ul>

<p>This will hide the respective branch. Don't worry if it's
hidden, you can always activate any branch on demand with the
main menu in xffm. You can also set other options:</p>

<ul type="disc">
<li>TERM to set what terminal command to use, default:
xterm.</li>

<li>XFFM_HOLD_XTERM to instruct xffm to hold output of xterms,
default: off. Only applies to xterm.</li>

<li>XFFM_HOME to set the home directory for local files,
default: $HOME.</li>

<li>XFFM_STATUS_LINE_LENGTH to set the cutoff length of status
line messages, default 48 characters.</li>

<li>XFFM_MAX_PREVIEW_SIZE to set the maximum size of images to
preview, default 256KB.</li>

<li>XFFM_APPEND_FILES to instruct the xffm monitor to place new
files at the bottom of folder. Otherwise, the xffm monitor will
place them at the top.</li>
</ul>

<p>&nbsp;</p>

<h2 style="clear: both"><a name="xffm-themes"></a>The icon
themes</h2>

<p>If you like cute icons, xffm has several sets to choose from.
Most of them are available from a separate xffm-icons
package.</p>

<ul type="disc">
<li><em>Plain</em>: nice looking icons from very old releases
of KDE.</li>

<li><em>Xfce</em>: dull colored icons from the CDE environment,
suitable if you get dizzy with too many bright colors
(xffm-icons package).</li>

<li><em>Gnome</em>: icons from the GNOME environment
(xffm-icons package).</li>

<li><em>Noia</em>: funny icons prepared for the KDE environment
(xffm-icons package).</li>

<li><em>Crystal</em>: soft looking icons prepared for the KDE
environment (xffm-icons package).</li>

<li><em>FreeIcons</em>: elaborate icons prepared for the KDE
environment (xffm-icons package).</li>
</ul>

<p>And you can also choose <em>no_icons</em> if you're not an
icon guy or gal.</p>

<p>&nbsp;</p>

<h2 style="clear: both"><a name="xffm-wastebaskets"></a>The
wastebasket story</h2>

<p>Once upon a time, in a far away land, there was a prince who
kept all the kingdom's important information in his computer. In
this manner he helped the king and prepared for the day when he
would inherit the throne. One day he inadvertedly erased an
important file and was strucken aghast. But he quickly found the
the file had not really been erased but moved to a wastebasket.
This saved the day, but also made the prince bolder. He no longer
worried about erasing important files, since they would appear in
the wastebasket. This happened until the moment he realized he
had erased several important files weeks earlier. He searched the
wastebasket but could not find them, so he summoned all the wise
men of the kingdom to help him.</p>

<p>After examining the computer disk, the wisest man met him with
a dire face.</p>

<p>&#8212; We are very sorry, your majesty, but we cannot find
the files in the wastebasket.</p>

<p>&#8212; Why not?</p>

<p>&#8212; Because all erased files are placed in the same
wastebasket, and this causes older files with the same name to be
overwritten.</p>

<p>The prince became very angry. He then commisioned the group of
wise men to come up with a better formula for the wastebasket.
The solution they came up with was as follows.</p>

<p>Instead of moving and copying files to the wastebasket, which
may be a lengthy operation when the wastebasket is in a different
device, a wastebasket would be created in every directory where
needed. The contents of wastebasket files would be version
controlled so that older files would not be overwritten by
mistake. There would also be a general trashcan where pointers to
all files could be collected, either automatically or on demand.
This general trashcan would provide access to all wastebaskets,
especially usefull to empty all of them with a single click. If
not all wastebaskets required to be deleted, a selective trash
collection could be performed. And if GNOME or KDE trash
directories were encounted during such collection, their contents
would also be databased. This would allow the prince to organise
his computer trash. The prince was so happy with the idea that he
paid a software team their weight in gold to create the code.
Thus the xffm wastebasket scheme was born.</p>

<p>&nbsp;</p>

<h2 style="clear: both"><a name="xffm-filter-find"></a>The filter
and find story</h2>

<p>Some time later, the prince found that his directories,
especially the trash can was excessively large and he still could
not find what he was looking for. He again called in his wise men
for an answer.</p>

<p>&#8212; The solution is simple, your majesty, &#8212; said one
of the gray bearded wisemen &#8212;. The file manager must enable
a filter box so that the displayed files can be reduced in
number. In order to be of any real use, the filter must use
regular expressions so that combinations such as <tt>c$|h$</tt>
would work. But the easy to remember shell expansions like
<tt>*.c</tt> should also work.</p>

<p>The prince snapped his fingers and the software team set to
work. Once the filter option was presented to the prince, the
programmers also threw in the find option, which would allow the
prince to filter the files according to content as well. He was
so pleased that he knighted every one of the programmers.</p>

<p>&nbsp;</p>

<h2 style="clear: both"><a name="xffm-samba"></a>The samba
story</h2>

<p>Finally, the prince was dissappointed that most of the people
in his kingdom where using a different computer system which was
not as good as his. The wise men explained to him that
intelligent people are always a minority, so the best software
was used only by a minority.</p>

<p>&#8212; I still need to share files with these subjects. I
want to see their network shared files.</p>

<p>&#8212; We shall instruct the programmers to use the samba
suite in a transparent fashion, if so please your Majesty.</p>

<p>&#8212; If it is not ready by to-morrow, I shall have their
heads lopped off!</p>

<p>And so, the xfsamba4 branch was to be included in the first
release of xffm.</p>

<p>&nbsp;</p>

<h2 style="clear: both"><a name="xffm-copyright"></a>About
xffm</h2>

<p><b><tt>xffm</tt></b> was written by Edscott Wilson Garcia
(<tt>&lt;<a href=
"mailto:edscott@imp.mx">edscott@imp.mx</a>&gt;</tt>). To find
more information, please visit the <a href="http://www.xfce.org"
target="_top">XFce web site</a>.</p>

<p>To report a bug or make a suggestion regarding this
application or this manual, send an email to the <a href=
"http://www.moongroup.com/mailman/listinfo/xfce4-dev/" target=
"_top">xfce4-dev</a> mailing list &#8212; this is the preferred
method &#8212; or use the bug tracking system at the <a href=
"http://sourceforge.net/projects/xfce" target="_top">XFce
SourceForge project site</a>. If you have questions about the use
or installation of this package, please ask on the <a href=
"http://www.moongroup.com/mailman/listinfo/xfce/" target=
"_top">xfce</a> mailing list.</p>

<p>This program is distributed under the terms of the GNU General
Public License as published by the Free Software Foundation;
either version 2 of the License, or (at your option) any later
version.</p>

<p>You should have received a copy of the GNU General Public
License along with this program; if not, write to the Free
Software Foundation, Inc., 59 Temple Place - Suite 330, Boston,
MA 02111-1307, USA.</p>


