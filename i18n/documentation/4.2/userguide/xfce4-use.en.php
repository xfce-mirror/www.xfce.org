  <h1><a name="xfce4-use" id="xfce4-use"></a>Using Xfce4</h1>

  <h2><a name="xfce4-getting-started" id="xfce4-getting-started"></a>Getting started</h2>

  <p>Use <b><tt>startxfce4</tt></b> to start an Xfce session, which
  includes the session manager, the panel, the taskbar, the window
  manager and the desktop manager. All programs (or symbolic links
  to programs) in <tt>~/Desktop/Autostart/</tt> will be run on
  startup (note that this directory does not exist by default and
  you may have to create it).</p>

  <p>By default the Xfce session manager manages the startup of
  applications. It allows you to save your session when you quit
  Xfce, so that the next time you log in, the same applications
  will be started for you automatically.</p>

  <p>To customize the behaviour of <b><tt>startxfce4</tt></b>, copy
  the file <tt>${sysconfdir}/xdg/xfce4/xinitrc</tt> to your
  personal <tt>~/.config/xfce4/</tt> directory and edit that file.
  Depending on your installation method the location of the system
  <tt>xinitrc</tt> file may be different. If you install from
  source, <tt>${sysconfdir}</tt> defaults to
  <tt>/usr/local/etc/</tt>. For binary packages it is often set to
  <tt>/etc/</tt>, <tt>/etc/X11</tt>, <tt>/usr/pkg/etc</tt> or
  <tt>/usr/X11R6/etc</tt>; you can use your package manager to find
  out.</p>

  

  <h3><a name="id2533342" id="id2533342"></a>The Default
  Desktop</h3>

  <p>The Xfce 4 Desktop Environment is not a single entity that
  provides all funtionality, but rather it tries to adhere to the
  old UNIX tradition of small tools that do one job and do it best.
  A default Xfce 4 desktop with no programs running is shown in
  <a href="xfce4-use#default-session-fig" title=
  "Figure 1. Default Xfce 4 session">Figure 1, &quot;Default Xfce 4
  session&quot;</a>.</p>
  <a name="default-session-fig" id=
  "default-session-fig"></a>

  <p><b>Figure 1. Default Xfce 4 session</b></p><img src=
  "/images/documentation/4.2/default-session.png" alt=
  "Shows default Xfce session, with background manager, panel and taskbar. " />

  <p>When you run <b><tt>startxfce4</tt></b> for the first time,
  several applications are started by the Xfce session manager:</p>

  <dl>
    <dt>Taskbar</dt>

    <dd>
      <p>At the top of the screen you will see the taskbar. It
      shows the applications running on the current workspace. You
      can focus the application by clicking on the button in the
      taskbar. Clicking again will hide the application. If you use
      the right mouse button, a menu will appear, allowing you to
      perform several actions on the application window.</p>

      <p>The taskbar can optionally contain a graphical pager
      showing a miniature view of all your workspaces and a
      notification area or system tray.</p>
    </dd>

    <dt>Panel</dt>

    <dd>
      <p>At the bottom of the screen is the Xfce4 panel. It allows
      you to run applications and also contains a graphical pager,
      a clock and a mail checker. Some items have an associated
      panel menu that gives access to more applications. Panel
      menus are opened by pressing the small arrow buttons next to
      the panel item.</p>

      <p>Changing the content of the panel and the properties of
      the items is done by using the right mouse button. Both the
      panel items and the panel move handles have a right-click
      mouse menu from where you can chage the panel configuration.
      For more information look at the <a href="../manuals/xfce4-panel">panel manual</a>.</p>
    </dd>

    <dt>Desktop Manager</dt>

    <dd>
      <p>The desktop manager provides the desktop background image
      and two menus when you click on the desktop background.</p>

      <p>The right mouse button opens a menu that allows you to
      start applications. Look at the <a href="../manuals/xfdesktop">manual</a> to find out how to change the menu
      contents.</p>

      <p>The middle mouse button (or Shift + left click) opens a
      list of all applications that are currently running. You can
      activate an application by clicking on its menu entry.</p>
    </dd>

    <dt>Window Manager</dt>

    <dd>
      <p>The window manager is responsible for placing the windows
      on the screen and provides the window borders and
      decorations. It allows you to move windows around by draggin
      the titlebar and provides title bar buttons, for example to
      close, minimize or maximize a window. Look at the <a href=
      "../manuals/xfwm4">manual</a> for a full explanation
      of the window manager.</p>
    </dd>

    <dt>Settings Manager</dt>

    <dd>
      <p>The settings manager runs in the background and makes sure
      that all Xfce 4 applications update their settings when the
      user changes something in the settings manager dialog (see
      following section) and takes care of reading the
      configuration from disk at startup. Look at the <a href=
      "../manuals/xfce-mcs-manager">Settings Manager</a>
      and <a href="../manuals/xfce-mcs-plugins">Settings
      Plugins</a> manuals for a full explanation of the settings
      manager.</p>
    </dd>
  </dl>

  <h3><a name="id2533998" id="id2533998"></a>Common Tasks</h3>

  <p>This section will explain how to perform several common tasks
  to quickly get you started working with Xfce 4. Because that is
  what Xfce 4 is designed for, to allow you to get work done.</p>

  <h4><a name="id2534007" id="id2534007"></a>Running programs</h4>

  <dl>
    <dt>Xfce 4 panel</dt>

    <dd>
      <p>The panel is designed to allow quick access to the most
      frequently used applications by putting them on the main
      panel. Less often used applications can be put in a panel
      menu.</p>
    </dd>

    <dt>Desktop menu</dt>

    <dd>
      <p>Another method for starting applications is from the
      desktop mouse menu. Read the <a href="../manuals/xfdesktop">Desktop Manager manual</a> for information on how to
      change the menu contents.</p>
    </dd>

    <dt>Run dialog</dt>

    <dd>
      <p>If you know the name of a program and it is not on the
      panel or in the desktop menu you can use the run dialog. To
      open the dialog type <b>Alt+F2</b> or choose the <b>Run
      program...</b> option from the desktop menu.</p>

      <p>The dialog will remeber the 10 last commands that were
      executed successfully.</p>
    </dd>
  </dl>

  <h4><a name="id2534077" id="id2534077"></a>Managing windows and
  workspaces</h4>

  <dl>
    <dt>Basic window operations</dt>

    <dd>
      <p>You can move windows around the screen by dragging their
      title bar. A window can be closed, hidden, maximized, shaded
      and made sticky &#8212; this means it will show up on all
      workspaces &#8212; by using the title bar buttons.</p>

      <p>Right clicking on the title bar will open a menu that
      gives access to all window operations.</p>

      <p>Shading a window, which means collapsing it to only show
      the title bar, can also be accomplished by using the mouse
      wheel over the title bar. Mouse wheel up is shade, mouse
      wheel down is unshade.</p>

      <p>If you want maximized windows to not cover the entire
      screen you can set workspace margins from the settings
      manager dialog (see below).</p>
    </dd>

    <dt>Application management</dt>

    <dd>
      <p>To find out what applications are currently running you
      can look at the taskbar. Clicking on a button in the taskbar
      will focus the associated application. Clicking again will
      hide it.</p>

      <p>When you click with the middle mouse button on the desktop
      background a list of windows is shown, ordered by workspace.
      You can activate the application or change workspaces by
      choosing the appropriate menu entry.</p>

      <p>The <b><tt>xfce4-iconbox</tt></b> application can also be
      used to keep track of running applications.</p>
    </dd>

    <dt>Workspaces</dt>

    <dd>
      <p>You can change workspaces by clicking on them in the
      graphical pager, either on the taskbar or on the panel.
      Pressing <b>Ctrl+Alt+LeftArrow</b> or
      <b>Ctrl+Alt+RightArrow</b> will cycle through the workspaces.
      Using the mousewheel over the pager or the desktop background
      has the same effect.</p>

      <p>To add or remove workspaces you can use the middle click
      desktop menu or the settings dialog (see below).</p>
    </dd>
  </dl>

  <h4><a name="id2534162" id="id2534162"></a>Using the settings
  manager dialog</h4>

  <p>The settings manager dialog provides access to the global
  preferences of many Xfce 4 applications. You can run it by
  pressing its laucher on the panel, from the desktop mouse menu or
  by running <b><tt>xfce-setting-show</tt></b>.</p>

  <p>Dialogs to change many aspects of the Xfce 4 desktop
  environment are available. See the separate manuals of the Xfce 4
  components for more information. It may be interesting to have a
  quick look at all the dialogs to find out what options are
  available that allow you to create the best possible working
  environment.</p>

  <h3><a name="id2534182" id="id2534182"></a>Further reading</h3>

  <p>This user guide has only given a very general overview of the
  Xfce 4 Desktop Environment. More information is available in the
  <a href="../manuals/">manuals</a> of the separate
  components of Xfce 4.</p>
  <hr />
