
  <h1><a name="xffm"></a>XFce 4 Filemanager</h1>

  <p><strong>Edscott Wilson Garcia</strong> &lt;edcott@xfce.org&gt;</p>

  <h3>This manual describes xffm version 4.2.0. Last updated: Jan 2005.</h3>

  <p>Copyright &copy; 2004 Edscott Wilson Garcia</p>
  <hr />

  <p><b>Table of Contents</b></p>

  <dl>
    <dt><a href="#introduction">Introduction</a></dt>

    <dt><a href="#xffm-getting-started">Getting Started</a></dt>

    <dt><a href="#xffm-tree-types">File manager root
    branches</a></dt>

    <dd>
      <dl>
        <dt><a href="#xftree">Xftree</a></dt>

        <dt><a href="#xfsamba">Xfsamba</a></dt>

        <dt><a href="#xfbook">Xfbook</a></dt>

        <dt><a href="#xfglob">Xfglob</a></dt>

        <dt><a href="#xffrequent">Xffrequent</a></dt>

        <dt><a href="#xfrecent">Xfrecent</a></dt>

        <dt><a href="#xffstab">Xffstab</a></dt>

        <dt><a href="#xftrash">Xftrash</a></dt>
      </dl>
    </dd>

    <dt><a href="#xffm-menus">The menus</a></dt>

    <dd>
      <dl>
        <dt><a href="#main-menu">The main menu</a></dt>

        <dt><a href="#xffm-popupmenus">The popup menus</a></dt>
      </dl>
    </dd>

    <dt><a href="#Toolbar">The toolbars</a></dt>

    <dd>
      <dl>
        <dt><a href="#standard_toolbar">The standard
        toolbar</a></dt>

        <dt><a href="#menu_toolbar">The menu toolbar</a></dt>

        <dt><a href="#Sidebars">The sidebars</a></dt>
      </dl>
    </dd>

    <dt><a href="#xffm-settings">The xfce-mcs-manager</a></dt>

    <dt><a href="#diagnostics">The diagnostics window</a></dt>

    <dt><a href="#FAQ">FAQ</a></dt>

    <dd>
      <dl>
        <dt><a href="#FAQ1">Is there an icon view?</a></dt>

        <dt><a href="#FAQ2">How can I customize the icons?</a></dt>

        <dt><a href="#FAQ3">Can I use the find utility without GUI
        input/output?</a></dt>

        <dt><a href="#FAQ4">Can I execute the differences window
        from other filemanagers?</a></dt>

        <dt><a href="#FAQ5">Can I scramble/unscramble from the
        command line?</a></dt>

        <dt><a href="#FAQ6">What happens to Xfsamba with SMB
        servers on remote subnets?</a></dt>

        <dt><a href="#FAQ7">What can Xfsamba do if there is no
        domain master on the remote subnet?</a></dt>

        <dt><a href="#FAQ8">What's the Xfsamba problem with
        non-ascii characters?</a></dt>

        <dt><a href="#FAQ9">How can I make the sidebar go
        away?</a></dt>

        <dt><a href="#FAQ10">How can I make the sidebar come
        back?</a></dt>

        <dt><a href="#FAQ11">What do the F-keys do?</a></dt>

        <dt><a href="#FAQ12">Why does the xftree file monitor
        refuse to watch out for changes on some
        directories?</a></dt>

        <dt><a href="#FAQ13">How do I burn a CDRW?</a></dt>

        <dt><a href="#FAQ14">What's the command used for burning a
        CDRW?</a></dt>

        <dt><a href="#FAQ15">What criteria is used for
        autocompletion?</a></dt>

        <dt><a href="#FAQ16">How do I register a new application
        for a specific mimetype?</a></dt>

        <dt><a href="#FAQ17">What's the &quot;hold&quot; checkbutton on
        execute good for?</a></dt>

        <dt><a href="#FAQ18">How can you scroll down quickly with
        the keyboard?</a></dt>

        <dt><a href="#FAQ19">How can you double click with the
        keyboard?</a></dt>

        <dt><a href="#FAQ20">How can you switch between right and
        left window panes using the keyboard?</a></dt>

        <dt><a href="#FAQ21">How can you close a branch using the
        keyboard?</a></dt>
      </dl>
    </dd>
  </dl>

  

  <h2><a name=
  "introduction"></a>Introduction</h2>

  <p>This document describes the basic function and behaviour of
  Xffm, the <a href="http://www.xfce.org">Xfce 4
  Desktop Environment</a> fast file manager.</p>

  <p>This file manager is treeview designed. Each main branch of
  the tree is a separate plugin which need not be loaded if not
  requested. With this file manager you may launch programs,
  examine contents of directories, manage the contents of trash
  bins, examine SMB (Wind*ws) network, keep bookmarks, view
  differences between files, find files, password encrypt files,
  and move, copy, rename, duplicate, delete or symlink files. You
  can also create, examine or extract directories to and from
  compressed tar files, iso file systems, and burn CD rom images.
  Mounting and unmounting remote SMB shares, local filesystems or
  removable media is also available with a double click.</p>

  <p>Besides the above, the Xfce fast file manager has a
  sophisticated DBH-based mechanism to keep score on frequently
  used programs, visited sites, and a tab completion system which
  shows you the options instead of having you guess what they may
  be. You can rename files, change user or group information or
  file protection by simple select and edit the field. You can use
  drag and drop or cut and paste to move or copy files with other
  filemanagers or to download and upload files from remote SMB
  servers.</p>

  

  <h2><a name=
  "xffm-getting-started"></a>Getting Started</h2>

  <p>You will usually start the filemanager by selecting the
  corresponding entry from the Xfce-panel, the Xfce-desktop menu or
  by typing in a directory (absolute path or relative to homedir)
  at the xfrun4 prompt dialog. You can also type xffm at a terminal
  window or xfrun4 prompt.</p>

  <p>When you start the filemanager for the first time you will a
  window on your screen, looking like this:</p><a name=
  "xffm-default-fig"></a>

  <p><b>Figure 1. Default Xffm window</b></p><img src=
  "/images/documentation/4.2/xffm_default.png" alt=
  "The default Xffm configuration: One main menu, one toolbar, one sidebar, one window-pane with a local branch and all columns active, and a smaller window pane with all root branches active and no columns active. " />

  

  <h2><a name="xffm-tree-types"></a>File
  manager root branches</h2>

  <p>Currently there are the following root level branches. You can
  any combination of them in either window pane.</p>

  <h3><a name="xftree"></a>Xftree</h3><em>Local files</em>

  <p>The local files branch is the traditional tree where files on
  the local computer are displayed. The tree can be opened to any
  level of nesting, and the top level can be relocatable to any
  directory on the local computer. To invoke the filemanager with
  only the local files branch activated, use
  <b><tt>xftree4</tt></b> as the command line.</p>

  <h3><a name="xfsamba"></a>Xfsamba</h3><em>SMB Network</em>

  <p>The SMB network branch is the way to navigate through a SMB
  network using the samba suite programs. To invoke the filemanager
  with only the SMB network branch active, use
  <b><tt>xfsamba4</tt></b> as the command line.</p>

  <h3><a name="xfbook"></a>Xfbook</h3><em>Bookmarks</em>

  <p>The bookmarks branch is a way to create virtual directories
  with local files and remote SMB network files or shares. Multiple
  bookmark configurations can be used and toggled using ctrl-B. To
  invoke the filemanager with only the bookmark branch active, use
  <b><tt>xfbook4</tt></b> as the command line.</p>

  <h3><a name="xfglob"></a>Xfglob</h3><em>Find results</em>

  <p>The find results branch is where the results of find queries
  are displayed. Full filemanager operations are enabled on the
  results. To invoke the filemanager with only the find branch
  active, use <b><tt>xfglob4</tt></b> as the command line.</p>

  <h3><a name="xffrequent"></a>Xffrequent</h3><em>Frequent
  files</em>

  <p>The frequent files branch contains a tree structure with those
  files or directories which are frequently accessed via the
  filemanager. The default frequency threshold is set at 13 hits,
  but may be changed by means of the main menu. To invoke the
  filemanager with only the recent branch active, use
  <b><tt>xfapps4</tt></b> as the command line.</p>

  <h3><a name="xfrecent"></a>Xfrecent</h3><em>Recent files</em>

  <p>The recent files branch contains a tree structure with those
  files or directories which have been accessed recently via the
  filemanager. The default recent threshold is set at 3 days, but
  may be changed by means of the main menu. To invoke the
  filemanager with only the recent branch active, use
  <b><tt>xfapps4</tt></b> as the command line.</p>

  <h3><a name="xffstab"></a>Xffstab</h3><em>Fstab mount points</em>

  <p>The fstab branch is a alternate way of viewing the filesystem,
  where the physical devices are listed by mount point. This
  enables easy mount/unmount operations with the keyboard RIGHT and
  LEFT cursor, mouse double-click, or menu selection. To invoke the
  file manager with only the fstab branch active, use
  <b><tt>xffstab4</tt></b> as the command line.</p>

  <h3><a name="xftrash"></a>Xftrash</h3><em>Trashcan</em>

  <p>The trashcan branch is a collection of trash bins. These may
  include Xffm wastebaskets or GNOME and KDE trash bins. This
  branch is a means of managing trash which is generated in
  different parts of the filesystem. You can collect trash bins
  belonging to other users among other functions available. To
  invoke the file manager with only the trash branch active, use
  <b><tt>xftrash4</tt></b> as the command line.</p>

  

  <h2><a name="xffm-menus"></a>The menus</h2>

  <p>The key to working with the filemanager is understanding the
  menus. There are exactly two menus to deal with: the main and the
  popup. Since this is a keyboard friendly filemanager, to see what
  keyboard shortcuts are available, you should examine the menus.
  All the toolbar and sidebar buttons also have a corresponding
  menu element.</p>

  <h3><a name="main-menu"></a>The main menu</h3><a name=
  "main-menu-fig"></a>

  <p><b>Figure 2. </b></p><img src="/images/documentation/4.2/main_menu.png" alt=
  "The main menu. " />

  <p>In the figure is the main menu. This can be called by right or
  left clicking on the main menu bar, or by pressing function key
  F10.</p>

  <p>The main menu consists of four submenus:</p>

  <ul type="disc">
    <li><em>Tools</em></li>

    <li><em>Open</em></li>

    <li><em>Go</em></li>

    <li><em>Options</em></li>
  </ul>

  <p>The <em>Go</em> menu may be greyed out if there is ambiguity
  as to which window pane the functions should apply to. If you
  have anything selected, or only have one window pane visible,
  there is no ambiguity. Check it out ;-)</p><a name=
  "tools-menu-fig"></a>

  <p><b>Figure 3. The tools menu</b></p><img src=
  "/images/documentation/4.2/tools_menu.png" alt="The tools menu. " />

  <p>The <em>tools</em> menu can be displayed from the main menu or
  by using F3, and has the following entries:</p>

  <ul type="disc">
    <li>
      <em>Terminal</em>: Opens a terminal in the currently selected
      directory. The terminal which is opened is determined in
      order of preference:

      <ul type="circle">
        <li>TERMCMD set from <b><tt>xfce-setting-show</tt></b></li>

        <li><b><tt>xfce4-terminal</tt></b></li>

        <li><b><tt>xterm</tt></b></li>
      </ul>
    </li>

    <li><em>Find</em>: Opens a find dialog window. Results are
    displayed in a find results branch of the filemanager.</li>

    <li><em>Differences</em>: Opens a difference window between two
    selected files. If no files are selected, you can drag and drop
    them in later.</li>

    <li><em>Printer configuration</em>: opens a dialog to configure
    your printers.</li>

    <li><em>List pasteboard</em>: outputs the content of the
    current pasteboard to the diagnostics window.</li>

    <li><em>Clear pasteboard</em>: Clears the contents of the
    current pasteboard (the filesystem is untouched by this
    operation).</li>
  </ul><a name="open-menu-fig"></a>

  <p><b>Figure 4. The open menu</b></p><img src=
  "/images/documentation/4.2/open_menu.png" alt="The open menu. " />

  <p>The <em>open</em> menu can be displayed from the main menu or
  by using F4, and has the following entries:</p>

  <ul type="disc">
    <li><em>Run</em>: Queries for a program to be run.</li>

    <li><em>xftree4</em>: Queries for a directory path and opens a
    new filemanager window there. Equivalent to executing
    <b><tt>xftree4 directory_path</tt></b> from a command line.
    Absolute path or relative path (to homedir) is acceptable.</li>

    <li><em>xfsamba4</em>: Equivalent to executing
    <b><tt>xfsamba4</tt></b> from a command line.</li>

    <li><em>xffstab</em>: Equivalent to executing
    <b><tt>xffstab4</tt></b> from a command line.</li>

    <li><em>xfbook</em>: Queries for a bookmarks file and opens the
    filemanager there. Equivalent to executing <b><tt>xfbook4
    bookname</tt></b> from a command line.</li>

    <li><em>xftrash4</em>: Equivalent to executing
    <b><tt>xftrash4</tt></b> from a command line.</li>

    <li><em>xfrecent</em>: Equivalent to executing
    <b><tt>xfrecent4</tt></b> from a command line.</li>

    <li><em>xffrequent</em>: Equivalent to executing
    <b><tt>xffrequent4</tt></b> from a command line.</li>
  </ul><a name="go-menu-fig"></a>

  <p><b>Figure 5. The go menu</b></p><img src="/images/documentation/4.2/go_menu.png"
  alt="The go menu. " />

  <p>The <em>go</em> menu can be displayed from the main menu or by
  using F5, has the following entries:</p>

  <ul type="disc">
    <li><em>Go to</em>: Opens a query where you can specify where
    you want to go to. Paths preceeded by double slash (//) are
    interpreted as remote SMB servers.</li>

    <li><em>Home</em>: Go to your home directory, or to XFFM_HOME
    if defined with the xfce-mcs-manager.</li>

    <li><em>Back</em>: Goes to the previous location.</li>

    <li><em>Forward</em>: Goes forward (after a go-back, of
    course).</li>

    <li><em>Up</em>: Goes up in the directory file structure.</li>
  </ul><a name="options-menu-fig"></a>

  <p><b>Figure 6. The options menu</b></p><img src=
  "/images/documentation/4.2/options_menu.png" alt="The options menu. " />

  <p>The <em>options</em> menu can be displayed from the main menu
  or by using F6, has the following entries:</p>

  <ul type="disc">
    <li><em>Preferences</em>: opens the preferences submenu.</li>

    <li><em>Edit themes</em>: runs the <b><tt>xfmime-edit</tt></b>
    program which allows you to customize the icon settings.</li>

    <li><em>Set frequency threshold</em>: allows you to change the
    frequency threshold from its default value of 13 hits.</li>

    <li><em>Set recent threshold</em>: allows you to change the
    recent threshold from its default value of 3 days.</li>

    <li><em>Enlarge icons</em>: enlarges icons.</li>

    <li><em>Shrink icons</em>: shrinks icons.</li>

    <li><em>xfce-setting-show</em>: Launches the
    <b><tt>xfce-setting-show</tt></b> program which allows you to
    move the mcs manager settings.</li>
  </ul><a name="preferences-menu-fig"></a>

  <p><b>Figure 7. The preferences menu</b></p><img src=
  "/images/documentation/4.2/preferences_menu.png" alt="The preferences menu. " />

  <p>The <em>preferences</em> submenu can be displayed from the
  main menu or by using F7, and has the following checkboxes:</p>

  <ul type="disc">
    <li><em>Autoscroll</em>: This makes the treeview scroll
    automatically when you open a folder.</li>

    <li><em>Text headers</em>: This option is no longer
    available.</li>

    <li><em>Copy on drag</em>: If this is checked, the default
    drag-n-drop action will be to copy, if unchecked, the default
    is to move.</li>

    <li><em>Show hidden</em>: Controls whether hidden files are
    shown or not.</li>

    <li><em>Image auto-previews</em>: Controls whether previews of
    graphic files are automatically generated on opening
    folders.</li>

    <li><em>Monitor enabled</em>: Whether changes in the filesystem
    should be monitored to do automatic updates.</li>

    <li><em>Default GTK mouse selection</em>: Whether to use the
    default GTK treeview selection, or the custom mouse selection
    introduced in 4.0.x.</li>

    <li><em>Resize fonts to match icons</em>: Whether font sizes
    should be scaled up or down when icon size changes.</li>

    <li><em>Disable autotrash collection</em>: By default, trash is
    automatically collected in the trash branch. If you prefer to
    manually collect trash, turn this off.</li>

    <li><em>Disable text colors</em>: Use plain black and white for
    listings instead of funky colors.</li>

    <li><em>Disable cell editing</em>: Disallow renaming,
    user/group changes, or mode modifications by direct inline
    editing.</li>

    <li><em>Invisible wastebaskets</em>: If you do not like to see
    whether trash exists for directory when you open the folder,
    check this item.</li>

    <li><em>rcp before scp</em>: When a xffm receives a drop from
    another xffm window on the same display, but running on a
    different host, should the files be copied by rcp or scp? In
    secure cluster configurations this should be rcp, but otherwise
    scp.</li>

    <li><em>Verbose diagnostics</em>: If this is checked, the
    amount of processing information which appears in the
    diagnostics window will be enhanced.</li>
  </ul>

  <h3><a name="xffm-popupmenus"></a>The popup menus</h3>

  <p>The popup menu is dynamically configured, depending on what is
  selected when the popup appears. In the following paragraphs we
  shall examine the most common scenarios. The popup menu can be
  shown by right clicking with the mouse or pressing F9</p><a name=
  "book-menu-fig"></a>

  <p><b>Figure 8. The book popup menu</b></p><img src=
  "/images/documentation/4.2/book_popup.png" alt="The menu. " />

  <p>Aside from the normal operations, from this popup menu you can
  also open a named book, open the default book, list all named
  books, create a new book, and save the current book with a new
  name.</p><a name="frequent-menu-fig"></a>

  <p><b>Figure 9. The frequent popup menu</b></p><img src=
  "/images/documentation/4.2/frequent_popup.png" alt="The menu. " />

  <p>Aside from the normal operations, from this popup menu you can
  reset the frequency threshold from the default value of 13
  hits.</p><a name="recent-menu-fig"></a>

  <p><b>Figure 10. The recent popup menu</b></p><img src=
  "/images/documentation/4.2/recent_popup.png" alt="The menu. " />

  <p>Aside from the normal operations, from this popup menu you can
  reset the recent threshold from the default value of 3
  days.</p><a name="fstab-mount-fig"></a>

  <p><b>Figure 11. The fstab popup menu
  (mount/unmount)</b></p><img src="/images/documentation/4.2/fstab_popup_mount.png"
  alt="The menu. " />

  <p>Aside from the normal operations, from this popup menu you can
  either mount or unmount volumes which are listed in the fstab
  file information (they may be SMB shares, NFS volumes or local
  filesystems).</p><a name="trash-menu-fig"></a>

  <p><b>Figure 12. The trash popup menu</b></p><img src=
  "/images/documentation/4.2/trash_popup.png" alt="The menu. " />

  <p>Aside from the normal operations, from this popup menu you can
  permanently delete all the collected trash from the filesystem.
  You can also clear the contents of the trash, in which case you
  would have to collect trash from the directory popup to make it
  appear again.</p><a name="directory-menu-fig"></a>

  <p><b>Figure 13. The directory popup menu</b></p><img src=
  "/images/documentation/4.2/directory_popup.png" alt="The menu. " />

  <p>Aside from the normal operations, from this popup menu you can
  create gzipped or bzipped tarballs. You can also create iso
  filesystem files to directly burn CD-RW volumes.</p><a name=
  "directory-menu-unmount-fig"></a>

  <p><b>Figure 14. The directory popup menu
  (unmount)</b></p><img src="/images/documentation/4.2/directory_popup_unmount.png"
  alt="The menu. " />

  <p>In the case where a directory is also listed in the fstab file
  as a mount point, you can mount/unmount volumes from this
  popup.</p><a name="file-popup-fig"></a>

  <p><b>Figure 15. The file popup menu</b></p><img src=
  "/images/documentation/4.2/file_popup.png" alt="The menu. " />

  <p>The file popup has all the operations normally performed on
  files. Depending on the mimetype of the selected file, you may
  get several options with which to open the file. These options
  are constructed from the system wide mimetype applications, the
  user mimetype applications (constructed by clicking
  <em>remember</em> when the <em>open with</em> function is used),
  and the last application used to open the file (whether
  <em>remember</em> was checked or not). Thus in the above figure
  you can observe that the TeX file selected has several option
  with which to open it with.</p>

  <p>Further file operations are included in the file submenu,
  described below and which may be quickly accessed with
  F8.</p><a name="file-submenu-fig"></a>

  <p><b>Figure 16. The file popup submenu</b></p><img src=
  "/images/documentation/4.2/file_subpopup.png" alt="The menu. " />

  <p>The file submenu which may be quickly accessed with F8,
  contains the basic operations normally done to the
  filesystem:</p>

  <ul type="disc">
    <li><em>Properties</em>: Modify the file's user/group or mode
    information (also may be done by inline editing of the
    fields).</li>

    <li><em>New file</em>: Creates a new file in the selected
    directory.</li>

    <li><em>New directory</em>: Creates a new directory within the
    selected directory.</li>

    <li><em>Print</em>: Prints the selected file using
    <b><tt>xfprint4</tt></b></li>

    <li><em>Duplicate</em>: Creates a duplicate of the selected
    file or directory.</li>

    <li><em>Symlink</em>: Creates a symlink of the selected
    directory or file (also available by ctl-shift dragging or
    paste-linking the pasteboard).</li>

    <li><em>Touch</em>: Touch the file or directory.</li>

    <li><em>Rename</em>: Rename the file or directory (also
    available via inline editing.</li>

    <li><em>Scramble</em>: Password scrambles the file. If the
    filemanager is compiled with the --enable-scrambledir option,
    then this item will not be greyed out for directories and the
    whole directory can be recursively scrambled with the same
    password.</li>

    <li><em>Unscramble</em>: Unscrambles the file. The mimetype
    extension for scrambled files is .cyt, so that this option is
    grayed out if the selected file is not of the scrambled type.
    If recursive scambling of directories is enabled at compile
    time, this option will also be active for directories.</li>
  </ul><a name="netfile-menu-fig"></a>

  <p><b>Figure 17. The netfile popup menu</b></p><img src=
  "/images/documentation/4.2/netfile_popup.png" alt="The menu. " />

  <p>The popup for SMB network files is similar to the one for
  local files, but does not contain the file submenu.</p><a name=
  "columns-menu-fig"></a>

  <p><b>Figure 18. The columns popup menu</b></p><img src=
  "/images/documentation/4.2/column_titles_popup.png" alt="The menu. " />

  <p>If you right click over the titles of the columns, you get the
  <em>columns popup</em>. With this popup you can toggle which
  columns you wish to be visible or not. By default configuration,
  the right pane has all optional columns visible, and the left
  column has none of the optional columns visible.</p><a name=
  "icon-title-smartbutton-fig"></a>

  <p><b>Figure 19. The icon title smart button</b></p><img src=
  "/images/documentation/4.2/icon_title_smartbutton.png" alt="The menu. " />

  <p>This is the popup for the icon column title. By keeping
  pressed you make a popup of buttons appear. Release on any button
  determines which one gets the click. These buttons are used to
  toggle main branches on and off. If you want to see the fstab
  branch, click on the fstab symbol. If you want to hide the local
  branch, click on the local branch symbol.</p><a name=
  "sort-popup-fig"></a>

  <p><b>Figure 20. The sort popup submenu</b></p><img src=
  "/images/documentation/4.2/sort_subpopup.png" alt="The menu. " />

  <p>The sort submenu allows you to toggle the set sorting method
  for the treeview. The <em>unsorted</em> method implies a sorting
  by name and subsorted by filetype. You may also toggle the
  sorting method by clicking on the column titles. The purpose of
  this menu is to make a sort method toggle available from the
  keyboard.</p>

  

  <h2><a name="Toolbar"></a>The toolbars</h2>

  <h3><a name="standard_toolbar"></a>The standard
  toolbar</h3><a name="toolbar-fig"></a>

  <p><b>Figure 21. </b></p><img src="/images/documentation/4.2/toolbar.png" alt=
  "The toolbar. " />

  <p>The standard toolbar is a shortcut to many menu functions. By
  right clicking on any button with a down arrow, you can appear or
  dissappear the corresponding side bar. You can also bring up a
  popup with the sidebar elements by pressing with the button and
  not releasing. You then release on the popup element you desire
  to click. The last clicked element of the group becomes the top
  button visible in the toolbar.</p>

  <h3><a name="menu_toolbar"></a>The menu toolbar</h3>

  <p>The menu toolbar consists of the following
  elements:</p><a name="filter-fig"></a>

  <p><b>Figure 22. The filter box</b></p><img src=
  "/images/documentation/4.2/filter_box.png" alt="The menu. " />

  <p>This allows you to filter the contents of a directory before
  being inserted into the treeview. Regular expressions such as
  that shown in the figure are also acceptable (besides classic
  filters like <em>*.c</em>). After changing the filter string,
  refresh the view. If the treeview is hidden, nothing is
  filtered.</p><a name="hide-show-buttons-fig"></a>

  <p><b>Figure 23. The hide/show buttons</b></p><img src=
  "/images/documentation/4.2/hide_show_buttons.png" alt="The menu. " />

  <p>In the menu toolbar, you have buttons for showing only the
  right treeview (also with F12), the left treeview (also with
  F11), viewing both treeviews (either F11 or F12 twice), and
  hiding and showing the filter box and the standard toolbar. (If
  you compiled with --enable-panel, you will have a second toolbar
  reflectiong your xfce4-panel configuration, complete with hide
  and unhide buttons, replacing the applications root branch from
  <b><tt>xffm-4.0).</tt></b></p>

  <h3><a name="Sidebars"></a>The sidebars</h3>

  <p>There are several sidebars available in the default
  configuration.</p><a name="file-submenu-sidebar-fig"></a>

  <p><b>Figure 24. The file submenu sidebar</b></p><img src=
  "/images/documentation/4.2/sidebar_filesubmenu.png" alt="The menu. " />

  <p>See &quot;<a href="#file-submenu-fig">File
  submenu</a>&quot; for an explanation of the available options. Exactly
  one item must be selected from the treeview for this sidebar to
  be active.</p><a name="go-sidebar-fig"></a>

  <p><b>Figure 25. The go sidebar</b></p><img src=
  "/images/documentation/4.2/sidebar_go.png" alt="The menu. " />

  <p>See &quot;<a href="#go-menu-fig">go menu</a>&quot; for an
  explanation of the available options.</p><a name=
  "multiple-select-sidebar-fig"></a>

  <p><b>Figure 26. The multiple_select sidebar</b></p><img src=
  "/images/documentation/4.2/sidebar_multiple_select.png" alt="The menu. " />

  <p>You can create a new file or directory or open the properties
  dialog from here. At least one item must be selected from the
  treeview for this to be active. See &quot;<a href="#file-submenu-fig"
 >File submenu</a>&quot; for an explanation of the
  available options.</p><a name="open-sidebar-fig"></a>

  <p><b>Figure 27. The open sidebar</b></p><img src=
  "/images/documentation/4.2/sidebar_open.png" alt="The menu. " />

  <p>See &quot;<a href="#open-menu-fig">open menu</a>&quot; for
  an explanation of the available options.</p><a name=
  "options-sidebar-fig"></a>

  <p><b>Figure 28. The options sidebar</b></p><img src=
  "/images/documentation/4.2/sidebar_options.png" alt="The menu. " />

  <p>See &quot;<a href="#options-menu-fig">options
  menu</a>&quot; for an explanation of the available
  options.</p><a name="paste-sidebar-fig"></a>

  <p><b>Figure 29. The paste sidebar</b></p><img src=
  "/images/documentation/4.2/sidebar_paste.png" alt="The menu. " />

  <p>You can paste the contents of the pasteboard, or paste-link
  the contents of the pasteboard. The paste-link function creates
  symlinks of the files referenced in the pasteboard.</p><a name=
  "tools-sidebar-fig"></a>

  <p><b>Figure 30. The tools sidebar</b></p><img src=
  "/images/documentation/4.2/sidebar_tools.png" alt="The menu. " />

  <p>See &quot;<a href="#tools-menu-fig">tools menu</a>&quot;
  for an explanation of the available options.</p>

  

  <h2><a name="xffm-settings"></a>The
  xfce-mcs-manager</h2><a name="mcs-plugin-fig"></a>

  <p><b>Figure 31. The mcs plugin</b></p><img src=
  "/images/documentation/4.2/mcs-plugin.png" alt="The menu. " />

  <p>Certain functions perform better if configured with the mcs
  manager plugin.</p>

  <p>On deleting a file, the confirmation dialog will default to
  one of three buttons: cancel, wastebasket or unlink. Choose
  whatever you prefer here.</p>

  <p>If you don't want any output at all to the diagnostics window,
  check the <em>Disable diagnostics</em> option</p>

  <p>If want to hold the output of xterms or xfce4-terminals opened
  by the filemanager, check the <em>Hold xterms</em> option</p>

  <p>If want to take full advantage of the the mount/unmount
  functions provided by the filemanager, it is best you install
  <b><tt>sudo</tt></b> and have it properly configured to allow
  mount/unmount. If <b><tt>sudo</tt></b> requires a password, the
  filemanager will prompt you accordingly. Check the <em>Mount with
  sudo</em> option for this.</p>

  <p>The last part of the mcs plugin allows you to set environment
  variables on the fly:</p>

  <ul type="disc">
    <li><em>TERMCMD</em>: The command used for opening
    terminals.</li>

    <li><em>LANG</em>: The environment variable LANG passed on by
    the filemanager to the applications it opens. You only need to
    change this if you want this variable to be different from that
    which is used for the filemanager.</li>

    <li><em>XFFM_HOME</em>: The path that the filemanager goes to
    when the <em>Go home</em> function is selected.</li>

    <li><em>SMB_USER</em>: The default username%password used for
    SMB network queries.</li>

    <li><em>SMB_CODESET</em>: Code set used to interpret non-ascii
    characters on remote SMB servers.</li>

    <li><em>XFFM_STATUS_LINE_LENGTH</em>: Defines the maximum
    length of the strings which appear in the status line. This
    option is provided to avoid the width of the filemanager window
    to grow beyond the user's choice.</li>

    <li><em>XFFM_MAX_PREVIEW_SIZE</em>: This environment variable
    defines the maximum size for image preview (by default set at
    256 KB). Note that some previews may not be generated if they
    are too thin or too wide. To view these, install image-magick
    and use double click to view these these files.</li>
  </ul>

  

  <h2><a name="diagnostics"></a>The diagnostics
  window</h2><a name="diagnostics-window-fig"></a>

  <p><b>Figure 32. The diagnostics window</b></p><img src=
  "/images/documentation/4.2/diagnostics_window.png" alt="The menu. " />

  <p>This is the window where output from commands performed by the
  filemanager is displayed. If you wish to increase the verbosity,
  use the <em>verbose</em> <a href="#preferences-menu-fig"
  >preference</a>, and if you want to disable the output
  altogether, use the <a href="#mcs-plugin-fig">mcs
  plugin</a>.</p>

  

  <h2><a name="FAQ"></a>FAQ</h2>

  <h3><a name="FAQ1"></a>Is there an icon view?</h3>

  <p>This will probably appear in version 4.4</p>

  <h3><a name="FAQ2"></a>How can I customize the icons?</h3>

  <p>Use the <b><tt>xfmime-edit</tt></b> program (in options menu).
  This program works with drag and drop or inline editing. Upon
  saving, you will create the necessary mime.xml file in
  $HOME/.themes directory. You can also invoke
  <b><tt>xfmime-edit</tt></b> from a terminal command line. The
  iconset used will be that selected from xfce-setting-show (user
  interface).</p>

  <h3><a name="FAQ3"></a>Can I use the find utility without GUI
  input/output?</h3>

  <p>Yes. From command line execute <b><tt>fgr</tt></b>.</p>

  <h3><a name="FAQ4"></a>Can I execute the differences window from
  other filemanagers?</h3>

  <p>Sure. Just open the selected files with xfdiff4.</p>

  <h3><a name="FAQ5"></a>Can I scramble/unscramble from the command
  line?</h3>

  <p>Yes. Just use the <b><tt>scramble</tt></b> program from a
  terminal. This program will act recursively on directories.</p>

  <h3><a name="FAQ6"></a>What happens to Xfsamba with SMB servers
  on remote subnets?</h3>

  <p>If you want to see servers on a remote subnet (beyond a
  router), then you <em>must</em> have a domain master on each
  subnet. You can define your local host to be a domain master with
  the samba configuration file.</p>

  <h3><a name="FAQ7"></a>What can Xfsamba do if there is no domain
  master on the remote subnet?</h3>

  <p>If there is no domain master on the remote subnet, you can
  still connect to a server if you know its BIOS name. Just use the
  <em>go to</em> function and preceed the server name with a double
  slash, i.e., <em>//server</em>. In order for this to work, both
  your local machine and the remote server <em>must</em> be
  configured to use the same WINS server.</p>

  <h3><a name="FAQ8"></a>What's the Xfsamba problem with non-ascii
  characters?</h3>

  <p>The character set which is used by the remote server is
  determined by the remote server. And this varies according to the
  operating system. The result: a mess. Xfsamba tries its best to
  guess what's right and you can help by defining the SMB_CODESET
  with the <a href="#xffm-settings">MCS manager</a>.
  YMMV. If you have problems with transferring files with non-ascii
  embedded characters, use the popup menu to mount the remote share
  as a local file system.</p>

  <h3><a name="FAQ9"></a>How can I make the sidebar go away?</h3>

  <p>Click on it with button 3.</p>

  <h3><a name="FAQ10"></a>How can I make the sidebar come
  back?</h3>

  <p>Click with button 3 on any toolbar that has a dropdown
  arrow.</p>

  <h3><a name="FAQ11"></a>What do the F-keys do?</h3>

  <p>Press on F1 to find out.</p>

  <h3><a name="FAQ12"></a>Why does the xftree file monitor refuse
  to watch out for changes on some directories?</h3>

  <p>If a directory takes longer than a certain amount of time to
  reload (non-configurable option), then xftree will not reload
  automatically when changes are detected. Use the reload button,
  or CTRL-Z, to refresh.</p>

  <h3><a name="FAQ13"></a>How do I burn a CDRW?</h3>

  <p>Select the directory. Then with the popup menu, select
  <em>Create isofs</em>. Choose an output directory and wait until
  completion. Then select the newly created isofs file and bring up
  the popup menu. Select <em>cdrecord</em> (or <em>burncd</em> on
  systems which use this program instead). Wait for burn to
  finish.</p>

  <h3><a name="FAQ14"></a>What's the command used for burning a
  CDRW?</h3>

  <p>Depending on whether <b><tt>sudo</tt></b> and
  <b><tt>cdrecord</tt></b> or <b><tt>burncd</tt></b> is installed,
  you will have the following commands to burn a CDRW:</p>

  <ul type="disc">
    <li><b><tt>burncd -f /dev/acd0 -s max data %s
    fixate</tt></b></li>

    <li><b><tt>cdrecord -v dev=ATAPI:0,0,0 &quot;,&quot;cdrecord
    %s</tt></b></li>

    <li><b><tt>sudo burncd -f /dev/acd0 -s max data %s
    fixate</tt></b></li>

    <li><b><tt>sudo cdrecord -v dev=ATAPI:0,0,0 &quot;,&quot;cdrecord
    %s</tt></b></li>
  </ul>

  <p>You should be able to select the isofs file and use the
  <em>open with</em> function to use your own custom command if
  these defaults are not appropriate.</p>

  <h3><a name="FAQ15"></a>What criteria is used for
  autocompletion?</h3>

  <p>Last used string has top score. Otherwise the autocompletion
  strings are sorted with the most frequently used entries at the
  top.</p>

  <h3><a name="FAQ16"></a>How do I register a new application for a
  specific mimetype?</h3>

  <p>Use the popup menu and select the <em>open with</em> function.
  Write in the string to be used to open the program. You can use
  &quot;%s&quot; to place the selected file path in a place other than the
  end. Check the <em>Remember</em> box. If the command fails to
  execute, nothing will be registered.</p>

  <h3><a name="FAQ17"></a>What's the &quot;hold&quot; checkbutton on execute
  good for?</h3>

  <p>Say you want to execute a terminal command with output to
  STDOUT, like <b><tt>ls /tmp</tt></b>. In order to keep the
  terminal window open so you can see what was output, use the hold
  command. Once the output is no longer needed, you must manually
  destroy the terminal window. If the <em>Hold xterms</em> is
  selected in the <a href="#xffm-settings">MCS
  manager</a>, then all xterms are <em>held</em> and the checkbox
  will be grayed out.</p>

  <h3><a name="FAQ18"></a>How can you scroll down quickly with the
  keyboard?</h3>

  <p>Typing any letter will scroll you down to the first row
  starting with that letter (at current selected level). If you
  want to scroll backwards, use SHIFT-letter. There is no
  distinguishing between lower and upper case.</p>

  <h3><a name="FAQ19"></a>How can you double click with the
  keyboard?</h3>

  <p>Press <em>return</em> (and in some cases,
  <em>right-arrow</em>).</p>

  <h3><a name="FAQ20"></a>How can you switch between right and left
  window panes using the keyboard?</h3>

  <p>Press <em>tab</em>.</p>

  <h3><a name="FAQ21"></a>How can you close a branch using the
  keyboard?</h3>

  <p>Press <em>left-arrow</em>.</p>

