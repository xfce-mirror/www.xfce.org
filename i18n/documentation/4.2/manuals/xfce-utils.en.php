
  <h1><a name="xfce-utils"></a>Xfce 4 Utilities and Scripts</h1>

  <p>
  <strong>Jasper Huijsmans</strong> &lt;jasper@xfce.org&gt;<br  />
  <strong>Benedikt Meurer</strong> &lt;benny@xfce.org&gt;
  </p>

  <h3>This manual describes the xfce-utils package, version 4.2.0.</h3>

  <p>
  Copyright &copy; 2004 Jasper Huijsmans<br />
  Copyright &copy; 2004 Benedikt Meurer
  </p>
  
  <hr />

  <p><b>Table of Contents</b></p>

  <dl>
    <dt><a href="#utils-intro">Introduction</a></dt>

    <dt><a href="#utils-taskbar">Taskbar</a></dt>

    <dt><a href="#utils-run">Run Dialog</a></dt>

    <dt><a href="#utils-about">About Dialog</a></dt>

    <dt><a href="#utils-scripts">Scripts</a></dt>

    <dt><a href="#utils-copyright">About xfce-utils</a></dt>
  </dl>

  

  <h2><a name=
  "utils-intro"></a>Introduction</h2>

  <p>The <b><tt>xfce-utils</tt></b> package provides a taskbar, the
  about dialog for Xfce 4, a run dialog and several useful scripts
  that are also used by other Xfce 4 components such as the panel
  and the desktop menu.</p>

  

  <h2><a name="utils-taskbar"></a>Taskbar</h2>

  <p>The taskbar shows all running programs. The behaviour of the
  taskbar can be changed from the settings manager. Run
  <b>xfce-setting-show taskbar</b>, or start the settings manager
  from the panel.</p><a name="taskbar-settings-fig"></a>

  <p><b>Figure 1. Taskbar settings dialog</b></p><img src=
  "/images/documentation/4.2/taskbar_settings.png" alt=
  "Shows the taskbar settings dialog. " />

  <p>From the settings dialog, your can select the taskbar
  position, either at the top or at the bottom of the screen. You
  can set the height and width of the taskbar using the two
  sliders, and select a left, centered or right alignment, if the
  width of the taskbar is smaller than your screen. Another option
  allows you to use the &quot;Auto hide&quot; feature.</p>

  <p>The &quot;Tasks&quot; options allow you to customize the behaviour of
  the taskbar regarding the management of the opened applications.
  You can choose to show the tasks from all workspaces or only the
  current one, to always group tasks or only group tasks when the
  taskbar gets crowded, and to show applications names or only
  their icons.</p>

  <p>In addition to the tasklist, the taskbar also features a
  simple graphical pager and a notification area (also known as the
  system tray). Both can be disabled from the settings dialog.</p>

  

  <h2><a name="utils-run"></a>Run
  Dialog</h2><a name="run-dialog-fig"></a>

  <p><b>Figure 2. Run dialog</b></p><img src=
  "/images/documentation/4.2/run-dialog.png" alt="Shows the run dialog." />

  <p>The run dialog allows the user to launch applications.
  Applications can be run in a Terminal emulator (xterm by default,
  see xfterm4 script below). In a default Xfce 4 environment, the
  Alt+F2 key combination will open the run dialog.</p>

  

  <h2><a name="utils-about"></a>About
  Dialog</h2><a name="about-dialog-fig"></a>

  <p><b>Figure 3. About dialog</b></p><img src=
  "/images/documentation/4.2/about-dialog.png" alt=
  "Shows the About Dialog displaying the credits page. " />

  <p>The About Dialog is used to display information about Xfce 4,
  including a list of components, a credits page for all people who
  helped to create Xfce 4 and license information.</p>

  

  <h2><a name="utils-scripts"></a>Scripts</h2>

  <dl>
    <dt>startxfce4</dt>

    <dd>
      <p>The <b><tt>startxfce4</tt></b> is a convenient script to
      start an Xfce 4 session from the console. It will give you a
      session with a taskbar and a panel and with the desktop
      manager and window manager running.</p>

      <p>All programs, or symbolic links to programs, in
      <tt>~/Desktop/Autostart/</tt> will be run by
      <b><tt>startxfce4</tt></b> on startup.</p>

      <p>To customize the behaviour of <b><tt>startxfce4</tt></b>,
      copy the file <tt>${sysconfdir}/xfce4/xinitrc</tt> to your
      personal <tt>~/.config/xfce4/</tt> directory and edit that
      file. If you install from source, <tt>${sysconfdir}</tt>
      defaults to <tt>/usr/local/etc</tt>; for binary packages it
      is often set to <tt>/etc</tt>.</p>

      <p>With the inclusion of a session manager in Xfce 4.2, the
      preferred way to change startup behaviour is by using the
      &quot;Save session&quot; option in the logout dialog.</p>
    </dd>

    <dt>xfhelp4</dt>

    <dd>
      <p>This script is used to open the local Xfce 4 documentation
      in a browser. By default it will try a number of well-known
      browsers, like firefox, galeon or konqueror, but you can
      change that by setting the $BROWSER environmental variable.
      For instance in your <tt>~/.bash_profile</tt> put the
      following line:</p>

      <table border="0" bgcolor="#F3F4F8" width="100%">
        <tr>
          <td>
            <pre>
export BROWSER=&quot;galeon -w&quot;
</pre>
          </td>
        </tr>
      </table>

      <p>You will need to log out of your shell and log back in to
      make this work.</p>

      <p>If there is documentation installed in the language of
      your current locale, xfhelp4 will open that instead of the
      default English documentation.</p>
    </dd>

    <dt>xflock4</dt>

    <dd>
      <p>This script is used by the panel to lock the screen using
      xscreensaver if available and falling back to xlock.</p>
    </dd>

    <dt>xfmountdev4</dt>

    <dd>
      <p><b>xfmountdev4 <tt>/dev/mountpoint</tt></b> will mount the
      given mountpoint and open xffm in that location. When you
      close the xffm window the filesystem will be unmounted. Note
      that you can use <b><tt>xffstab4</tt></b> provided with xffm
      for the same purpose.</p>
    </dd>

    <dt>xfterm4</dt>

    <dd>
      <p>This is a convenient terminal script. It uses the $TERMCMD
      environmental variable as terminal command if available and
      falls back to using xterm. Especially useful in the panel
      where you can drag file or directories to it that will be
      viewed by the appropriate console application (less for text
      files, lynx for html).</p>
    </dd>
  </dl>

  

  <h2><a name="utils-copyright"></a>About
  xfce-utils</h2>

  <p><b><tt>xfce-utils</tt></b> was written by Jasper Huijsmans
  (<tt>&lt;<a href=
  "mailto:jasper@xfce.org">jasper@xfce.org</a>&gt;</tt>), Olivier
  Fourdan (<tt>&lt;<a href=
  "mailto:fourdan@xfce.org">fourdan@xfce.org</a>&gt;</tt>) and
  Benedikt Meurer (<tt>&lt;<a href=
  "mailto:benny@xfce.org">benny@xfce.org</a>&gt;</tt>). To find
  more information, please visit the <a href="http://www.xfce.org"
 >Xfce web site</a>.</p>

  <p>To report a bug or make a suggestion regarding this
  application or this manual, use the bug tracking system at
  <a href="http://bugzilla.xfce.org/"
  >http://bugzilla.xfce.org/</a>.</p>

  <p>If you have questions about the use or installation of this
  package, please ask on the <a href=
  "http://lunar-linux.org/mailman/listinfo/xfce"
  >xfce</a> mailing list. Development discussion takes place
  on the <a href=
  "http://lunar-linux.org/mailman/listinfo/xfce4-dev"
  >xfce4-dev</a> mailing list.</p>

  <p>This program is distributed under the terms of the GNU General
  Public License as published by the Free Software Foundation;
  either version 2 of the License, or (at your option) any later
  version.</p>

  <p>You should have received a copy of the GNU General Public
  License along with this program; if not, write to the Free
  Software Foundation, Inc., 59 Temple Place - Suite 330, Boston,
  MA 02111-1307, USA.</p>

