
  <h1><a name="xfwm4"></a>Xfce 4 Window Manager</h1>

  <h3>Fran�ois Le Clainche</h3>

  <p><tt>&lt;<a href=
  "mailto:fleclainche@wanadoo.fr">fleclainche@wanadoo.fr</a>&gt;</tt></p><span xmlns="http://www.w3.org/TR/xhtml1/transitional">This
  manual describes <b><tt>xfwm4</tt></b> version 4.2.0<br>
  <br></span>

  <p><span xmlns=
  "http://www.w3.org/TR/xhtml1/transitional">Copyright � 2004
  Fran�ois Le Clainche</span></p>

  <p>Copyright � 2004 Jasper Huijsmans</p>
  <hr>

  <p><b>Table of Contents</b></p>

  <dl>
    <dt><a href="#wm-intro">Introduction</a></dt>

    <dt><a href="#wm-using">Using <b><tt>xfwm4</tt></b></a></dt>

    <dd>
      <dl>
        <dt><a href="#wm-windows">Manage windows</a></dt>
      </dl>
    </dd>

    <dt><a href="#wm-settings">Customizing
    <b><tt>xfwm4</tt></b></a></dt>

    <dd>
      <dl>
        <dt><a href="#wm-style">Decoration style</a></dt>

        <dt><a href="#keyboard_shortcuts">Keyboard
        shortcuts</a></dt>

        <dt><a href="#focus">Focus preferences</a></dt>

        <dt><a href="#wm_advanced">Advanced settings</a></dt>

        <dt><a href="#hidden_options">Hidden options</a></dt>
      </dl>
    </dd>

    <dt><a href="#workspaces">Managing workspaces</a></dt>

    <dd>
      <dl>
        <dt><a href="#id2597233">Workspaces settings</a></dt>

        <dt><a href="#workspace-margins">Workspaces
        margins</a></dt>
      </dl>
    </dd>

    <dt><a href="#wm-copyright">About
    <b><tt>xfwm4</tt></b></a></dt>
  </dl>

  <p>�</p>

  <h2 style="clear: both"><a name="wm-intro"></a>Introduction</h2>

  <p>The Xfce 4 Window Manager is part of the <a href=
  "http://www.xfce.org" target="_top">Xfce Desktop Environment</a>.
  The actual command to run is <b><tt>xfwm4</tt></b>. To run it in
  the background use <b><tt>xfwm4</tt> --daemon</b>. The window
  manager is responsible for the placement of windows on the
  screen, provides the window decorations and allows you for
  instance to move, resize or close them.</p>

  <p><b><tt>xfwm4</tt></b> adheres strongly to the standards
  defined on <a href="http://www.freedesktop.org" target=
  "_top">freedesktop.org</a>. Consequently, special features such
  as making windows borderless, or providing an icon for the
  application must now be implemented in the application; you can
  no longer use the window manager to force different behaviour.
  One of the great features of <b><tt>xfwm4</tt></b> is its
  themeability. The window decorations (borders, title bar and
  window buttons) can be configured by using window manager
  themes.</p>

  <p><b><tt>xfwm4</tt></b> offers multihead support, for both
  xinerama and real multiscreen modes, useful when you have more
  than one monitor connected to your computer.</p>

  <p><b><tt>xfwm4</tt></b> can be run stand-alone, but if you use
  it this way, you will need the <a href="xfce-mcs-manager.html"
  target="_top">Xfce 4 Settings Manager</a> if you want GUI
  settings management. Tasks other than managing windows, like
  setting a background image or launching programs, need to be
  performed by other programs.</p>

  <p><b><tt>xfwm4</tt></b> includes its own compositing manager,
  which takes advantage of the new <a href=
  "http://freedesktop.org/Software/xorg" target="_top">X.org</a>'s
  server extensions. The compositor is like a WM on its own, it
  manages a stack of all windows, monitor all kinds on X event and
  reacts accordingly. Having the compositing manager embedded in
  the window manager also helps keeping the various visual effects
  in sync with window events. If you want to use the compositor,
  you have to build <b><tt>xfwm4</tt></b> using the
  --enable-compositor configure option. In any case, you can
  disable the compositor on <b><tt>xfwm4</tt></b> startup using the
  '--compositor=off' argument.</p>

  <p>�</p>

  <h2 style="clear: both"><a name="wm-using"></a>Using
  <b><tt>xfwm4</tt></b></h2>

  <h3><a name="wm-windows"></a>Manage windows</h3>

  <p>The window manager provides borders, a title bar and window
  buttons to application windows. The look is defined by the window
  manager theme.</p>

  <p>In the default theme <b><tt>xfwm4</tt></b> shows six buttons
  and a title on regular application windows. The six buttons
  perform these basic functions:</p><a name="titlebar-fig"></a>

  <p><b>Figure�1.�<tt>xfwm4</tt> title bar buttons</b></p><img src=
  "images/titlebar.png" alt=
  "xfwm4 title bar buttons and functions">

  <p>You can open the window menu with a left-click on the menu
  button on the title bar, or with a right-click on the window
  title area itself.</p>

  <p>If you use <b><tt>xftaskbar4</tt></b>, you can open an action
  menu with a right-click on one of the taskbar entries; it
  includes several items among those available in the window
  menu.</p>

  <p>�</p>

  <dl>
    <dt>Give focus to a window</dt>

    <dd>
      <p>You need to give the focus to a window if you want it to
      receive keyboard and mouse input. Window decorations colors
      will change, following the focus. To obtain more details
      about focus options, please refer to the <a href="#focus"
      target="_top">corresponding section</a> below.</p>

      <p>A keyboard shortcut allows to switch the focus from a
      window to others : Hold Alt and then you can press Tab
      repeatedly untill you get to the window you want to focus. If
      you use it, you will see a small popup showing the
      application name, its icon and the window title. Also
      <b><tt>xfwm4</tt></b> will highlight the outline of the
      window that will receive the focus.</p>

      <p>NOTE: the use of a keyboard shortcut in an application
      needs the application window to have the focus :)</p>
    </dd>

    <dt>Maximize / unmaximize windows</dt>

    <dd>
      <p>If you maximize a window, it will expand on your display
      and use all avaible space (as it is defined by <a href=
      "xfdesktop.html#xfdesktop-workspace" target="_top">workspace
      settings</a>). Moreover, you can maximize a window only
      vertically or horizontally.</p>

      <p>To maximize a window, perform one of those actions:</p>

      <ul type="disc">
        <li>click the maximize button of the title bar</li>

        <li>open the window menu from the title bar and choose the
        "maximize" item</li>

        <li>use Alt + F5 keyboard shortcut</li>
      </ul>

      <p>You can make any window appear in fullscreen mode (it will
      then use all the size of your screen without showing the
      window borders) by using the customizable Alt + F11 keyboard
      shortcut.</p>

      <p>To maximize a window vertically :</p>

      <ul type="disc">
        <li>middle-click the maximize button of the title bar</li>

        <li>use Alt + F6 keyboard shortcut</li>
      </ul>

      <p>To maximize a window horizontally :</p>

      <ul type="disc">
        <li>right-click the maximize button of the title bar</li>

        <li>use Alt + F7 keyboard shortcut</li>
      </ul>

      <p>When a window has been maximized in a way or another, it
      can be restored to its previous size doing one of these
      actions :</p>

      <ul type="disc">
        <li>click the unmaximize button of the title bar</li>

        <li>use the same keyboard shortcut once again</li>

        <li>choose the "Unmaximize" item in the window menu</li>
      </ul>

      <p>�</p>
    </dd>

    <dt>Resize windows</dt>

    <dd>
      <p>Although certain special windows can not be resized, you
      are able to resize most of them to fit your needs.</p>

      <ul type="disc">
        <li>you can use the edges and corners of the window frame
        to modify its size, dragging them with the mouse</li>

        <li>you can use the Alt + right click shortcut while you
        hold the mouse pointer anywhere over the window frame; it
        will act as if you were dragging the bottom-right corner of
        the window</li>

        <li>you can use practical keyboard shortcuts : Shift + Alt
        + (up, down, right or left) Arrow</li>
      </ul>

      <p>�</p>
    </dd>

    <dt>Hide / unhide windows</dt>

    <dd>
      <p>You can hide a window performing one of these actions
      :</p>

      <ul type="disc">
        <li>click the hide button of the title bar</li>

        <li>open the window menu from the title bar and choose the
        "Hide" item</li>

        <li>use Alt + F8 keyboard shortcut</li>
      </ul>

      <p>Alternatively, you can hide all windows of current
      workspace, excepted the one you are using, in only one action
      : click the menu button of the title bar and choose "Hide all
      others".</p>

      <p>To "unhide" a window, you will have to select its name or
      its icon in one of those Xfce 4 components :</p>

      <ul type="disc">
        <li><b><tt>xftaskbar4</tt></b></li>

        <li>the list of windows, accessible with a middle-click on
        the desktop background. This list shows all opened windows,
        classified by workspaces. Windows that are currently hidden
        are marked between [ ].</li>

        <li>the <b><tt>xfce4-iconbox</tt></b></li>
      </ul>

      <p>�</p>
    </dd>

    <dt>Shade / unshade windows</dt>

    <dd>
      <p>If you "shade" a window, it will be reduced to the size of
      its title bar. The same repeated action makes a window to
      shade/unshade :</p>

      <ul type="disc">
        <li>click the shade/unshade button of the title bar</li>

        <li>open the window menu from the title bar and choose
        "Shade" or "Unshade" item</li>

        <li>use the mouse scrollwheel while you hold the pointer
        over the title bar</li>

        <li>use the Alt + F9 keyboard shortcut</li>
      </ul>

      <p>�</p>
    </dd>

    <dt>Stick / unstick windows</dt>

    <dd>
      <p>If you "stick" a window, it will be visible at the same
      place on all your workspaces. The same repeated action make a
      window to stick/unstick :</p>

      <ul type="disc">
        <li>click the stick/unstick button of the title bar</li>

        <li>open the window menu button from the title bar and
        choose "Stick" or "Unstick" item</li>

        <li>use the Alt + F10 keyboard shortcut</li>
      </ul>

      <p>�</p>
    </dd>

    <dt>Raise / lower windows</dt>

    <dd>
      <p>The "raise window" function makes a window frame appear
      above all the other frames. To raise a window, you can :</p>

      <ul type="disc">
        <li>left click on its titlebar</li>

        <li>give the focus to the window, if the corresponding
        option is selected in the <a href="xfwm4.html#wm-focus"
        target="_top">Keyboard and focus preferences
        dialog</a></li>

        <li>left click anywhere on its frame, if the corresponding
        option is selected in the <a href="xfwm4.html#wm-focus"
        target="_top">Keyboard and focus preferences
        dialog</a></li>

        <li>click on its label in the taskbar or the iconbox</li>

        <li>use the Shift + Alt + Page_Up keyboard shortcut (if the
        window is already focused)</li>
      </ul>

      <p>You can make a window frame to always stay above all other
      windows by opening the window menu and selecting the "always
      on top" item.</p>

      <p>The "lower" function sends a window frame below all other
      frames. To "lower" a window, you can :</p>

      <ul type="disc">
        <li>middle-click on its title bar</li>

        <li>use the Shift + Alt + Page_Down keyboard shortcut (if
        the window is focused)</li>
      </ul>

      <p>�</p>
    </dd>

    <dt>Move windows</dt>

    <dd>
      <p>There are several ways to move windows :</p>

      <ul type="disc">
        <li>left or right click on the title bar of the window and
        drag it</li>

        <li>use Alt + left click while the pointer is anywhere over
        the window frame and move the mouse</li>

        <li>use Control + Alt + Shift + (up, down, left or right)
        Arrow keyboard shortcut</li>
      </ul>

      <p>�</p>
    </dd>

    <dt>Move a window to another workspace</dt>

    <dd>
      <p>You can send a window to another workspace by performing
      one of these actions :</p>

      <ul type="disc">
        <li>stick the window, move to another workspace, then
        unstick the window.</li>

        <li>use the window menu and choose one of the "Send to"
        submenu items.</li>

        <li>left or right click on the title bar of the window,
        drag it to the screen edge : the pointer will then go to
        the next workspace, still holding the window. Corresponding
        option needs to be selected in the <a href=
        "xfwm4.html#wm_misc" target="_top">Window Manager
        Preferences dialog</a>.</li>

        <li>use keyboard shortcuts :

          <ul type="circle">
            <li>Alt + Control + End will move a window to the next
            workspace</li>

            <li>Alt + Control + Home will move a window to the
            previous workspace</li>

            <li>Alt + Control + Keypad-Number will move the current
            window to corresponding workspace</li>
          </ul>
        </li>

        <li>use the <a href="xfce4-panel.html#switcher-item"
        target="_top">graphical pager</a> by clicking on the
        representation of the window, and move it to the desired
        workspace.</li>
      </ul>

      <p>�</p>
    </dd>

    <dt>Close a window</dt>

    <dd>
      <p>To close a window :</p>

      <ul type="disc">
        <li>click the close button of the title bar</li>

        <li>Open the window menu from the title bar and choose the
        "Close" item</li>

        <li>or use Alt + F4 keyboard shortcut</li>
      </ul>
    </dd>
  </dl>

  <p>�</p>

  <h2 style="clear: both"><a name="wm-settings"></a>Customizing
  <b><tt>xfwm4</tt></b></h2>

  <p>To open the Window Manager preferences dialog, click the
  button labelled "Window Manager" in the <a href=
  "xfce-mcs-manager.html#manager-dialog" target="_top">Xfce 4
  Settings manager</a>. The dialog shows four tabs : Style,
  Keyboard, Focus, Advanced. All modifications will have an
  immediate effect on the behaviour of the selected module.</p>

  <h3><a name="wm-style"></a>Decoration style</h3><a name=
  "wm_decoration_style-fig"></a>

  <p><b>Figure�2.�Decoration style preferences</b></p><img src=
  "images/decoration_style.png" alt="The decoration style tab">

  <dl>
    <dt>Window style</dt>

    <dd>
      <p>The list on the left side of the dialog shows all avaible
      window decorations. The xfwm 4 module offers the choice
      between 4 different themes, but there are more than 60
      supplementary themes avaible in xfwm4-themes extra
      package.</p>
    </dd>

    <dt>Title font</dt>

    <dd>
      <p>The "Font select" button shows the family font currently
      in use for the window title appearance. Click this button if
      you want to change it, and a "Font selection" dialog will
      appear. It works like the font selection dialog of the
      <a href="xfce-mcs-plugins.html#id2811474" target="_top">user
      interface settings manager plugin</a>.</p>
    </dd>

    <dt>Title alignment</dt>

    <dd>
      <p>Whatever the buttons layout is, you can choose the
      alignment of the title inside the title bar, selecting one of
      those simple options : align it to the left, center or
      right.</p>
    </dd>

    <dt>Button layout</dt>

    <dd>
      <p>The button layout configuration uses an easy drag and drop
      tool. Click and drag the buttons to change the layout. Drop a
      button in the "Hidden" area to remove a button from the
      titlebar. All modifications will have an immediate effect on
      the title bar buttons position.</p>
    </dd>
  </dl>

  <h3><a name="keyboard_shortcuts"></a>Keyboard
  shortcuts</h3><a name="keyboard_shortcuts-fig"></a>

  <p><b>Figure�3.�Keyboard shortcuts preferences</b></p><img src=
  "images/keyboard_shortcuts.png" alt="The keyboard shortcuts tab">

  <dl>
    <dt>Keyboard Shortcuts</dt>

    <dd>
      <p>The list on the left side of the dialog shows all avaible
      shortcuts themes, using the name of directories that contain
      a keythemerc file.</p>

      <p>By default, there's only one theme :
      $(datadir)/themes/Default/xfwm4/keythemerc</p>

      <p>In the default configuration the following keybindings are
      defined:</p>

      <ul type="disc">
        <li>close window : Alt + F4</li>

        <li>Maximize window : Alt + F5</li>

        <li>Maximize vertically : Alt + F6</li>

        <li>Maximize horizontally : Alt + F7</li>

        <li>Hide window : Alt + F8</li>

        <li>Shade window : Alt + F9</li>

        <li>Stick window : Alt + F10</li>

        <li>Cycle windows focus : Alt + Tab</li>

        <li>Move window : Control + Shift + Alt + Arrow (up, down,
        left, or right)</li>

        <li>Resize window : Shift + Alt + Arrow (up, down, left, or
        right)</li>

        <li>Raise window : Shift + Alt + Page_Up</li>

        <li>Lower window : Shift + Alt + Page_Down</li>

        <li>Toggle fullscreen : Alt + F11</li>

        <li>Next workspace : Control + Alt + Arrow right arrow</li>

        <li>Previous workspace : Control + Alt + Arrow left</li>

        <li>Add a workspace : Alt + Insert</li>

        <li>Delete a workspace : Alt + Delete</li>

        <li>Go to workspace number N (1-9) : Control + F(N)</li>

        <li>Move the window to previous|next workspace : Alt +
        Control + Home|End</li>

        <li>Move a window to workspace number N (1-9) : Alt +
        Control + keypad key number N</li>

        <li>Start xfhelp4 : Alt + F1</li>

        <li>Start xfrun4 : Alt + F2</li>

        <li>Lock the screen : Alt + Control + Delete</li>
      </ul>

      <p>There are two lists on the right side of the dialog. The
      "Windows shortcuts" list shows the keyboard shortcuts which
      are used to drive the window manager. The "Command shortcuts"
      list shows the keyboard shortcuts which are aimed at
      launching applications. To modify one of the shortcuts, you
      have to double-click on it in the list, using the left button
      of your mouse, and compose your new shortcut when the
      "Compose shortcut" popup window appears.</p><a name=
      "compose_shortcut-fig"></a>

      <p><b>Figure�4.�The compose shortcut popup</b></p><img src=
      "images/compose_shortcut.png" alt=
      "The compose shortcut popup">

      <p>If you want to create a new theme, create a directory like
      this one, for instance :
      $HOME/.themes/Custom/xfwm4/keythemerc, then select it in the
      list of available themes.</p>

      <p>If you do not know the names of your keyboard modifier
      keys, you can launch the "xev" application from a terminal
      and test them.</p>
    </dd>
  </dl>

  <h3><a name="focus"></a>Focus preferences</h3><a name=
  "focus-fig"></a>

  <p><b>Figure�5.�Focus preferences</b></p><img src=
  "images/focus.png" alt="The Focus tab">

  <dl>
    <dt>Focus model</dt>

    <dd>
      <p>A focused window receives the keyboard and mouse input.
      You have the choice between two focus models :</p>

      <ul type="disc">
        <li>Click to focus : select this option if you want a
        window to receive the focus only when you click anywhere on
        its frame.</li>

        <li>Focus follow mouse : select this option if you want a
        window to receive the focus as soon as the mouse pointer is
        over its frame.</li>
      </ul>

      <p>�</p>
    </dd>

    <dt>New window focus</dt>

    <dd>
      <p>Selecting this option will automatically give the focus to
      newly created windows, without the need to click or move the
      mouse pointer.</p>
    </dd>

    <dt>Raise on focus</dt>

    <dd>
      <p>If this option is selected, the frame of a newly focused
      window will automatically appear over all other frames, after
      an amount of time that you can adjust with the "delay"
      slider.</p>
    </dd>

    <dt>Raise on click</dt>

    <dd>
      <p>Choose this option if you want a window to pass over the
      others when you click anywhere on its frame. If this option
      is not selected, you will have to click somewhere on its
      decorations (title bar, borders or corners) to raise it.</p>
    </dd>
  </dl>

  <h3><a name="wm_advanced"></a>Advanced settings</h3><a name=
  "misc_wm_prefs-fig"></a>

  <p><b>Figure�6.�Advanced preferences</b></p><img src=
  "images/misc_wm_prefs.png" alt="Advanced tab">

  <dl>
    <dt>Windows snapping</dt>

    <dd>
      <p>You can choose the windows borders to be attracted by the
      borders of other windows, or by the screen edges, when they
      are moved. The distance from which this effect will be
      applied can be specified with the "Distance" slider.</p>
    </dd>

    <dt>Wrap workspaces</dt>

    <dd>
      <p>Select the first option if you want to switch to the next
      workspace when the mouse pointer reaches the screen edges.
      Select the second one if you want the same behaviour while
      dragging a window. You can specify the screen edges
      resistance using the corresponding slider.</p>
    </dd>

    <dt>Opaque move and resize</dt>

    <dd>
      <p>Two options allow you to choose if the content of a window
      will appear or not, when you move or resize it (not
      displaying the content will save some system resources).</p>
    </dd>

    <dt>Double click action</dt>

    <dd>
      <p>Select what must be the behaviour of the window manager
      when you double-click on the title bar of a window : shade
      window, hide window, maximize window or none.</p>
    </dd>
  </dl>

  <h3><a name="hidden_options"></a>Hidden options</h3>

  <p>Some hidden options allow you to customize
  <b><tt>xfwm4</tt></b> behaviour. They have to be added by hand to
  your HOME/.config/xfce4/xfwm4/xfwm4rc file. You may have to
  create this file.</p>

  <dl>
    <dt>cycle_minimum=false</dt>

    <dd>
      <p>Add this line to your xfwm4rc file if you want apps that
      do not appear in the taskbar to be included when you switch
      the focus using the Alt+Tab shortcut.</p>
    </dd>

    <dt>cycle_hidden=false</dt>

    <dd>
      <p>Add this line to your xfwm4rc file if you want to exclude
      hidden windows from the list presented when using the Alt+Tab
      shortcut.</p>
    </dd>

    <dt>easy_click=false</dt>

    <dd>
      <p>Add this line to your xfwm4rc file if you want to disable
      the ability to move and resize windows using the Alt button +
      mouse click shortcut.</p>
    </dd>

    <dt>focus_hint=false</dt>

    <dd>
      <p>Add this line to your xfwm4rc file to instruct xfwm4 to
      ignore the focus hint provided by the applications.</p>
    </dd>

    <dt>prevent_focus_stealing=true</dt>

    <dd>
      <p>Add this line to your xfwm4rc file to prevent windows from
      stealing focus.</p>
    </dd>

    <dt>raise_with_any_button=false</dt>

    <dd>
      <p>Add this line to your xfwm4rc file if you want to raise a
      window only when clicked with the left mouse button.</p>
    </dd>

    <dt>move_opacity=100</dt>

    <dd>
      <p>Set the window opacity while being moved. Opacity is an
      integer value between 0 and 100; 100 being opaque, 0 totally
      invisible.</p>

      <p>That option has no effect if the compositing manager is
      not enabled.</p>
    </dd>

    <dt>resize_opacity=100</dt>

    <dd>
      <p>Set the window opacity while being resized. Opacity is an
      integer value between 0 and 100; 100 being opaque, 0 totally
      invisible.</p>

      <p>That option has no effect if the compositing manager is
      not enabled.</p>
    </dd>

    <dt>toggle_workspaces=true</dt>

    <dd>
      <p>Add this line to your xfwm4rc file if you want the
      Control+F(N) keyboard shortcut to remember the previous
      workspace.</p>
    </dd>

    <dt>wrap_layout=true</dt>

    <dd>
      <p>wrap workspaces depending on the actual desktop
      layout.</p>
    </dd>

    <dt>wrap_cycle=true</dt>

    <dd>
      <p>wrap workspaces when the first or last workspace is
      reached.</p>
    </dd>
  </dl>

  <p>�</p>

  <h2 style="clear: both"><a name="workspaces"></a>Managing
  workspaces</h2>

  <p><b><tt>xfwm4</tt></b> also manages workspaces. There is a
  special settings dialog to change the workspace properties. You
  can start it by choosing <em>Workspaces and Margins</em> from the
  the <a href="xfce-mcs-manager.html#manager-dialog" target=
  "_top">settings manager dialog</a>. The dialog contains two tab
  folders where you can change workspace settings and desktop
  margins.</p>

  <h3><a name="id2597233"></a>Workspaces settings</h3><a name=
  "xfwm-workspace-fig"></a>

  <p><b>Figure�7.�Workspace Settings</b></p><img src=
  "images/xfwm_workspaces.png" alt=
  "Shows workspace settings tab folder. ">

  <dl>
    <dt>Workspaces</dt>

    <dd>
      <p>This option allows you too choose the number of workspaces
      you want to use (between 1 and 32).</p>
    </dd>

    <dt>Worspace names</dt>

    <dd>
      <p>This field shows the list of avaible workspaces. If you
      want to edit the name of one of them, click its number and a
      fill the entry of the dialog that will then appear. When it's
      done, click the "Apply" button, or just press the Enter key,
      to return to the list.</p>
    </dd>
  </dl>

  <h3><a name="workspace-margins"></a>Workspaces
  margins</h3><a name="workspace_margins-fig"></a>

  <p><b>Figure�8.�The workspace margins dialog</b></p><img src=
  "images/workspace_margins.png" alt=
  "The workspace margins tab folder">

  <p>To open the Workspace Margins dialog, click the button
  labelled "Workspaces and Margins" in the <a href=
  "xfce-mcs-manager.html#manager-dialog" target="_top">settings
  manager dialog</a> and choose the tab labelled "Margins".</p>

  <p>Margins are areas on the edges of the screen that maximized
  windows won't cover. You can adjust the size, in pixels, of all
  margins (left, right, top and bottom). Use this feature, for
  example, if you do not want maximized windows to overlap panel or
  iconbox frames.</p>

  <p>�</p>

  <h2 style="clear: both"><a name="wm-copyright"></a>About
  <b><tt>xfwm4</tt></b></h2>

  <p><b><tt>xfwm4</tt></b> was written Olivier Fourdan
  (<tt>&lt;<a href=
  "mailto:fourdan@xfce.org">fourdan@xfce.org</a>&gt;</tt>). To find
  more information, please visit the <a href="http://www.xfce.org"
  target="_top">Xfce web site</a>.</p>

  <p>To report a bug or make a suggestion regarding this
  application or this manual, use the bug tracking system at
  <a href="http://bugzilla.xfce.org/" target=
  "_top">http://bugzilla.xfce.org/</a>.</p>

  <p>If you have questions about the use or installation of this
  package, please ask on the <a href=
  "http://lunar-linux.org/mailman/listinfo/xfce" target=
  "_top">xfce</a> mailing list. Development discussion takes place
  on the <a href=
  "http://lunar-linux.org/mailman/listinfo/xfce4-dev" target=
  "_top">xfce4-dev</a> mailing list.</p>

  <p>This program is distributed under the terms of the GNU General
  Public License as published by the Free Software Foundation;
  either version 2 of the License, or (at your option) any later
  version.</p>

  <p>You should have received a copy of the GNU General Public
  License along with this program; if not, write to the Free
  Software Foundation, Inc., 59 Temple Place - Suite 330, Boston,
  MA 02111-1307, USA.</p>

