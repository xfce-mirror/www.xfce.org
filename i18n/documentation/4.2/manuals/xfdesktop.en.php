
  <h1><a name="xfdesktop"></a>Xfce 4 Desktop Manager</h1>

  <p>
  <strong>Jasper Huijsmans</strong> &lt;jasper@xfce.org&gt;<br />
  <strong>Fran&ccedil;ois Le Clainche</strong> &lt;fleclainche@wanadoo.fr&gt;<br />
  <strong>Brian Tarricone</strong> &lt;kelnos@xfce.org&gt;
  </p>

  <h3>This manual describes xfdesktop version 4.2.0.</h3>

  <p>
  Copyright &copy; 2004 Jasper Huijsmans<br />
  Copyright &copy; 2004 Fran&ccedil;ois Le Clainche<br />
  Copyright &copy; 2004 Brian Tarricone
  </p>
  <hr />

  <p><b>Table of Contents</b></p>

  <dl>
    <dt><a href="#xfdesktop-intro">Introduction</a></dt>

    <dt><a href="#xfdesktop-background">Backdrops</a></dt>

    <dt><a href="#xfdesktop-menu"><b><tt>xfdesktop</tt></b> root
    menu</a></dt>

    <dt><a href="#xfdesktop-copyright">About xfdesktop</a></dt>
  </dl>

  <h2><a name=
  "xfdesktop-intro"></a>Introduction</h2>

  <p>The <b><tt>xfdesktop</tt></b> application manages the desktop
  backdrop. It sets a backdrop image and/or color and it can pop up
  an applications menu and a list of all running applications when
  you click on the desktop with the right or middle mouse button
  respectively.</p>

  <p>The <b><tt>xfdesktop</tt></b> package installs a settings
  dialog for use with the <em>Xfce 4 Settings Manager</em>. From
  this dialog you can change the backdrop image and color and
  change settings for the menu and the window list.</p>

  <h2><a name=
  "xfdesktop-background"></a>Backdrops</h2>

  <p>You can start the Desktop settings dialog by clicking on the
  &quot;Desktop&quot; button in the <a href=
  "xfce-mcs-manager.html#manager-dialog" target="_top">Xfce
  Settings Manager</a>.</p><a name="xfdesktop-background-fig"></a>

  <p><b>Figure 1. Backdrop Settings</b></p><img src=
  "/images/manual/4.2/xfdesktop-background.png" alt=
  "Shows backdrop settings dialog. " />

  <dl>
    <dt>Color</dt>

    <dd>
      <p>This dialog allows you to select a color style for your
      desktop backdrop: solid color, horizontal gradient or
      vertical gradient. Depending on your choice, you will be able
      to choose one or two colors, using &quot;First Color&quot; and &quot;Second
      Color&quot; buttons. These buttons open a color chooser
      dialog:</p><a name="select_bg_color-fig"></a>

      <p><b>Figure 2. Select backdrop color</b></p><img src=
      "/images/manual/4.2/select_bg_color.png" alt=
      "Shows the Select backdrop color dialog">

      

      <ul type="disc">
        <li>You can use the colored ring with a triangle inside:
        select the color you want from the outer ring, then select
        the darkness or lightness of that color using the inner
        triangle. Corresponding values of brightness, deepness, and
        amount of red, green and blue light in the color appear
        through the entries on the right side of the window.</li>

        <li>You can click the eyedropper, then click anywhere on
        your screen to select the color.</li>

        <li>You can enter an HTML-style hexadecimal color value, or
        simply a color name, in the &quot;Color Name&quot; entry.</li>
      </ul>

      <p>The selected colors will fill the entire root window, and
      will remain visible through a transparent backdrop image.</p>
    </dd>

    <dt>Image</dt>

    <dd>
      <p>Unselect the &quot;Show Image&quot; option if you want
      <b><tt>xfdesktop</tt></b> to ignore the backdrop image and
      only use the previously selected colors.</p>

      <p>The &quot;File&quot; entry shows the path to the currently selected
      backdrop image. If you want to change it, just drop and image
      on the path field, or edit the path, or click the browse
      button, and a classic file-browsing dialog will appear.</p>

      <p>You can create a list of backdrop images that will be
      randomly used at startup. Click the &quot;New list&quot; button to open
      the list editing dialog:</p><a name="xfdesktop-list-fig"></a>

      <p><b>Figure 3. Backdrop List</b></p><img src=
      "/images/manual/4.2/xfdesktop-list.png" alt=
      "Shows backdrop list manager.">

      <p>You may want to change the default path and name of your
      custom list of backdrops in the &quot;List file&quot; entry.</p>

      <p>You can easily add an image file by clicking the &quot;plus&quot;
      button. That action will open a file-browsing window. You can
      remove a file, if you select it in the list and click the
      &quot;minus&quot; button. When your list is complete, click the &quot;Save&quot;
      button to save it. If you want to modify its content later,
      use the &quot;Edit list&quot; button of the Backdrop settings
      manager.</p>

      <p>You can recover an older list by dropping its name.list
      file on the backdrop settings dialog from a file manager.</p>

      <p>To refresh the backdrop with a new random image from the
      list just run the <b><tt>xfdesktop</tt></b> command again,
      e.g. from a terminal or the run dialog, or
      <b><tt>xfdesktop</tt></b> [-reload].</p>

      <p>Four Style options (Tiled, Scaled, Centered and Stretched)
      are available to specify the fitting of the backdrop image on
      the screen, depending on its size. You can also select the
      &quot;Auto&quot; item if you want to let <b><tt>xfdesktop</tt></b> take
      care of this setting.</p>

      <p>The slider at the bottom of the dialog allows you to
      adjust the brightness of the backdrop image and/or color.</p>

      <p>xfdesktop supports xinerama and multiscreen modes. In
      multiscreen mode, the &quot;Backdrops&quot; dialog shows one tab per
      screen.</p>
    </dd>
  </dl>

  <h2><a name=
  "xfdesktop-menu"></a><b><tt>xfdesktop</tt></b> root menu</h2>

  <p><b><tt>xfdesktop</tt></b> provides an applications menu and a
  windowlist menu that appear when you click on the desktop with
  your right or middle mouse button.</p>

  <p>The Menu tab of the Desktop settings dialog allows you to
  configure the menu behaviour.</p><a name=
  "xfdesktop-menu-tab-fig"></a>

  <p><b>Figure 4. Menu tab</b></p><img src=
  "/images/manual/4.2/xfdesktop-menu-tab.png" alt=
  "Shows the menu tab of the Desktop settings dialog." />

  <p>If you want to use the root menu and/or the window list, the
  corresponding options have to be selected in the settings
  dialog.</p>

  <p>A right-click on the desktop backdrop opens a menu that allows
  you to start some applications. Its configuration file,
  <tt>menu.xml</tt>, can be found under the path
  <tt>$sysconfdir/xdg/xfce4/menu.xml</tt>. For binary packages,
  $sysconfdir is often <tt>/etc</tt> and for source compiles, it
  defaults to <tt>/usr/local/etc</tt>.</p>

  <p>While it is possible to edit the file manually, the
  recommended method for editing the <tt>menu.xml</tt> file is via
  the Xfce 4 Menu Editor, which can be started by running
  <b><tt>xfce4-menueditor</tt></b>, or using the &quot;Edit desktop
  menu&quot; button available from the Menu tab of the Desktop settings
  dialog. The menu editor also supports drag'n'drop from a file
  manager.</p>

  <p>If you've edited the menu via
  <b><tt>xfce4-menueditor</tt></b>, the user-customized menu file
  will be saved to
  <tt>$XDG_CONFIG_HOME/xfce4/desktop/menu.xml</tt>.
  $XDG_CONFIG_HOME usually defaults to <tt>~/.config</tt>. If
  editing the file manually, copying it to this location first is
  the preferred method.</p><a name="xfdesktop-editor-fig"></a>

  <p><b>Figure 5. <tt>xfdesktop</tt> menu editor</b></p><img src=
  "/images/manual/4.2/xfdesktop-editor.png" alt=
  "Shows xfdesktop menu editor. " />

  <p>NOTE: If you choose to edit the file manually,
  <tt>menu.xml</tt> has to be in UTF-8 encoding for the toolkit to
  be able to display accented or other non-ASCII characters.
  Therefore, you need an editor that supports UTF-8, like
  <b><tt>gedit</tt></b>.</p><a name="root-menu-fig"></a>

  <p><b>Figure 6. <tt>xfdesktop</tt> right-click mouse
  menu</b></p><img src="/images/manual/4.2/root_menu.png" alt=
  "Shows xfdesktop right-click mouse menu. " />

  <p>A middle-click on the desktop backdrop shows a list of all
  opened windows ordered by workspace. It also allows you to add or
  remove a workspace.</p><a name="root-menu2-fig"></a>

  <p><b>Figure 7. <tt>xfdesktop</tt> middle-click mouse
  menu</b></p><img src="/images/manual/4.2/root_menu2.png" alt=
  "Shows xfdesktop middle-click mouse menu. " />

  <p>In order to lower the hardware requirements to run xfdesktop,
  you can disable the usage of icons in the desktop menu and the
  window list menu from the settings dialog.</p>

  <p>You can open the menu or window list from the commandline as
  well. This can be useful for keyboard shortcuts. To open the menu
  run the command <b><tt>xfdesktop</tt></b> <b><tt>-menu</tt></b>,
  and for the windowlist use <b><tt>xfdesktop</tt></b>
  <b><tt>-windowlist</tt></b>.</p>

  <h2><a name="xfdesktop-copyright"></a>About
  xfdesktop</h2>

  <p><b><tt>xfdesktop</tt></b> was written by Brian Tarricone
  (<tt>&lt;<a href=
  "mailto:kelnos@xfce.org">kelnos@xfce.org</a>&gt;</tt>) and Jasper
  Huijsmans (<tt>&lt;<a href=
  "mailto:jasper@xfce.org">jasper@xfce.org</a>&gt;</tt>), Benedikt
  Meurer (<tt>&lt;<a href=
  "mailto:benny@xfce.org">benny@xfce.org</a>&gt;</tt>). For more
  information, please visit the <a href="http://www.xfce.org"
  target="_top">Xfce website</a>.</p>

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

