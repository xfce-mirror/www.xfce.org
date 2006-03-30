
  <h1><a name="xfce4-session"></a>Xfce 4 Session Manager</h1>

  <h3>Benedikt Meurer</h3>

  <p><tt>&lt;<a href=
  "mailto:benny@xfce.org">benny@xfce.org</a>&gt;</tt></p>os-cillation<br>

  System development<br>
  Software developer<br>

  <p><span xmlns=
  "http://www.w3.org/TR/xhtml1/transitional">�</span></p>This
  manual describes the <b><tt>xfce4-session</tt></b> package,
  version 4.2.0. Last updated: Jan 2005<br>
  <br>

  <p>Copyright � 2003, 2004 Benedikt Meurer</p><a name=
  "legalnotice"></a>

  <p>This document is provided under the terms of the GNU GPL,
  version 2 or (at your option) any later version.</p>
  <hr>

  <p><b>Table of Contents</b></p>

  <dl>
    <dt><a href="#xfsm-intro">Introduction</a></dt>

    <dt><a href="#xfce4-session-settings">Session Manager
    settings</a></dt>

    <dd>
      <dl>
        <dt><a href="#xfsm-general-settings">General
        preferences</a></dt>

        <dt><a href="#xfsm-advanced%20settings">Advanced
        preferences</a></dt>
      </dl>
    </dd>

    <dt><a href="#xfsm-customize">Customizing the Session
    Manager</a></dt>

    <dd>
      <dl>
        <dt><a href="#xfsm-engines">Splash screen settings</a></dt>

        <dt><a href="#xfsm-shutdown">Shutdown/reboot
        options</a></dt>
      </dl>
    </dd>

    <dt><a href="#xfsm-advanced">Advanced</a></dt>

    <dd>
      <dl>
        <dt><a href="#files-and-env-vars">Files and Environment
        Variables</a></dt>

        <dt><a href="#xfsm-kiosk-mode">Kiosk Mode</a></dt>
      </dl>
    </dd>

    <dt><a href="#xfsm-copyright">About
    <b><tt>xfce4-session</tt></b></a></dt>
  </dl>

  <p>�</p>

  <h2 style="clear: both"><a name=
  "xfsm-intro"></a>Introduction</h2>

  <p><b><tt>xfce4-session</tt></b> is a session manager for Xfce 4.
  Its task is to save the state of your desktop (opened
  applications and their location) and restore it during a next
  startup. You can create several different sessions and choose one
  of them on startup.</p>

  <p><b><tt>xfce4-session</tt></b> provides session management for
  both X11R6 and legacy X11R5 protocols. If you don't need legacy
  session management support, you can disable it at compile time,
  giving --disable-legacy-sm to ./configure. Do <em>NOT EVER</em>
  run <b><tt>smproxy</tt></b> in session that is managed by
  <b><tt>xfce4-session</tt></b>, or weird things will happen. The
  included legacy session management does everything that
  <b><tt>smproxy</tt></b> would do, and besides that, it also
  supports multiscreen display.</p>

  <p>�</p>

  <h2 style="clear: both"><a name=
  "xfce4-session-settings"></a>Session Manager settings</h2>

  <h3><a name="xfsm-general-settings"></a>General
  preferences</h3><a name="xfsm-general-fig"></a>

  <p><b>Figure�1.�<tt>xfce4-session</tt> general
  preferences</b></p><img src="images/xfsm-general.png" alt=
  "Shows the General tab of the xfce4-session settings dialog.">

  <dl>
    <dt>Display chooser on login</dt>

    <dd>
      <p>If set, the session manager will ask you to choose a
      session every time you log in to Xfce.</p>
    </dd>

    <dt>Automatically save session on logout</dt>

    <dd>
      <p>This option instructs the session manager to save the
      current session automatically when you log out. If you don't
      select this option you'll be prompted whether you want to
      save the current session on each logout.</p>
    </dd>

    <dt>Prompt on logout</dt>

    <dd>
      <p>This option disables the logout confirmation dialog.
      Whether the session will be saved or not depends on whether
      you enabled the automatic saving of sessions on logout or
      not.</p>
    </dd>
  </dl>

  <h3><a name="xfsm-advanced settings"></a>Advanced
  preferences</h3><a name="xfsm-advanced-fig"></a>

  <p><b>Figure�2.�<tt>xfce4-session</tt> advanced
  preferences</b></p><img src="images/xfsm-advanced.png" alt=
  "Shows Advanced tab of the xfce4-session settings dialog.">

  <dl>
    <dt>Launch Gnome services on startup</dt>

    <dd>
      <p>Enable this option if you need the GNOME keyring daemon to
      be run on startup. This option also instructs
      <b><tt>xfce4-session</tt></b> to bring up the GNOME assistive
      technologies at startup (if enabled in the GNOME control
      center). See the GNOME documentation for more information on
      this topic.</p>
    </dd>

    <dt>Launch KDE services on startup</dt>

    <dd>
      <p>Enable this option if you plan to run KDE applications as
      part of your Xfce Desktop session. This will notably increase
      the startup time, but on the other hand, KDE applications
      will startup faster. Some KDE applications may not work at
      all if you don't enable this option.</p>
    </dd>

    <dt>Manage remote applications</dt>

    <dd>
      <p>Allow the session manager to manage applications running
      on remote hosts. Since this option may constitute a security
      risk, by listening to a TCP port on your system, do not
      enable it unless you know what you are doing.</p>

      <p>System administrators may want to disable this option
      globally using the session managers <a href=
      "#xfsm-kiosk-mode" target="_top">KIOSK capabilities</a>.</p>
    </dd>
  </dl>

  <p>�</p>

  <h2 style="clear: both"><a name="xfsm-customize"></a>Customizing
  the Session Manager</h2>

  <p>You can customize the splash-screen that
  <b><tt>xfce4-session</tt></b> will use when you log in to Xfce 4.
  There is a dedicated dialog available from the <em>Xfce 4
  Settings Manager</em>.</p>

  <h3><a name="xfsm-engines"></a>Splash screen
  settings</h3><a name="splash-screen-settings-fig"></a>

  <p><b>Figure�3.�Splash screen settings dialog</b></p><img src=
  "images/xfsm-splash.png" alt=
  "Shows the xfce4-session splash screen settings dialog.">

  <p>On the left, the dialog shows a list of all installed engines.
  Select an engine, and you will see, if available, a preview and
  information about it. You can click on the <b>Test</b> button to
  see a demonstration of the selected splash screen engine.</p>

  <p><b><tt>xfce4-session</tt></b> provides three Splash themes
  engines by default. Their respective configuration options - if
  any - are available from the <b>Configure</b> button.</p>

  <h3><a name="xfsm-shutdown"></a>Shutdown/reboot options</h3>

  <p><b><tt>xfce4-session</tt></b> supports shutting down your
  computer when you log out of your desktop session. To be able to
  shutdown the computer, you have to be listed in the systems
  <tt>sudoers</tt> file, in particular, you must be allowed to
  execute the command <tt>${libexecdir}/xfsm-shutdown-helper</tt>
  (<tt>/usr/sbin/xfsm-shutdown-helper</tt> on Debian GNU/Linux) as
  user root (where <tt>${libexecdir}</tt> is the <tt>libexec</tt>
  sub directory in the prefix you installed
  <b><tt>xfce4-session</tt></b>, for example
  <tt>/usr/local/libexec</tt>).</p>

  <p>For example, lets say, you installed
  <b><tt>xfce4-session</tt></b> into <tt>/usr/local</tt>, your
  hostname is <em>myhost</em> and your user account is named
  <em>myuser</em>, then you would have to add the following line to
  your <tt>sudoers</tt> file (remember to use
  <b><tt>visudo</tt></b> to edit that file):</p>

  <table border="0" bgcolor="#F3F4F8" width="100%">
    <tr>
      <td>
        <pre>
myuser myhost=/usr/local/libexec/xfsm-shutdown-helper
</pre>
      </td>
    </tr>
  </table>

  <p>�</p>

  <h2 style="clear: both"><a name="xfsm-advanced"></a>Advanced</h2>

  <h3><a name="files-and-env-vars"></a>Files and Environment
  Variables</h3>

  <p>Xfce now uses the Basedir Specification as defined on <a href=
  "http://freedesktop.org/" target="_top">Freedesktop.org</a> to
  locate its data and configuration files. This means that file
  locations will be specified as a path relative to the directories
  described in the specification.</p>

  <dl>
    <dt>${XDG_CONFIG_HOME}</dt>

    <dd>
      <p>The first base directory to look for configuration files.
      By default this is set to <tt>~/.config/</tt>.</p>
    </dd>

    <dt>${XDG_CONFIG_DIRS}</dt>

    <dd>
      <p>A list of system directories that contain configuration
      data. By default the panel will look in
      <tt>${sysconfdir}/xdg/</tt> and <tt>/etc/xdg/</tt>. The value
      of ${sysconfdir} depends on how the program was build and
      will often be <tt>/etc/</tt> for binary packages.</p>
    </dd>

    <dt>${XDG_CACHE_HOME}</dt>

    <dd>
      <p>Specifies the root for all user-specific cache data. If
      this environment variable is unset, it defaults to
      <tt>~/.cache</tt>.</p>
    </dd>

    <dt>${XDG_CONFIG_DIRS}/xfce4-session/xfce4-session.rc</dt>

    <dd>
      <p>This is the location of the configuration file that
      includes the various settings for
      <b><tt>xfce4-session</tt></b>, which can be changed from the
      settings dialog.</p>
    </dd>

    <dt>${XDG_CONFIG_DIRS}/xfce4-session/xfce4-splash.rc</dt>

    <dd>
      <p>This is the location of the configuration file that
      includes the configuration for the splash screen, which can
      be changed from the settings dialog.</p>
    </dd>

    <dt>${XDG_CACHE_HOME}/sessions/</dt>

    <dd>
      <p>The directory where <b><tt>xfce4-session</tt></b> and
      <b><tt>xfwm4</tt></b> store the session data to.</p>
    </dd>

    <dt>${sysconfdir}/xdg/xfce4/kiosk/kioskrc</dt>

    <dd>
      <p>Kiosk mode configuration file. See <a href=
      "#xfsm-kiosk-mode" target="_top">next section</a> for an
      explanation.</p>
    </dd>
  </dl>

  <p>None of the configuration files, except the <tt>kioskrc</tt>,
  are designed to be edited by hand during a Xfce session; in fact,
  the changes will be overwritten if you edit them while the
  session manager or the settings managers are running.</p>

  <p>System administrators might want to customize the file
  <tt>${sysconfdir}/xdg/xfce4-session/xfce4-session.rc</tt> to
  change the default applications that are run on Xfce startup. For
  example, if you want to start the <b><tt>xfce4-iconbox</tt></b>
  instead of the <b><tt>xftaskbar4</tt></b>, you would change the
  <em>[Failsafe Session]</em> section like to something like
  this:</p>

  <table border="0" bgcolor="#F3F4F8" width="100%">
    <tr>
      <td>
        <pre>
[Failsafe Session]
Count=4
Client0_Command=xfwm4
Client0_PerScreen=False
Client1_Command=xfce4-panel
Client1_PerScreen=True
Client2_Command=xfce4-iconbox
Client2_PerScreen=True
Client3_Command=xfdesktop
Client3_PerScreen=False
</pre>
      </td>
    </tr>
  </table>

  <h3><a name="xfsm-kiosk-mode"></a>Kiosk Mode</h3>

  <p>The session manager offers support for the Kiosk Mode, that
  helps to prevent users from making changes to their session
  settings. To use it you have to edit or create the file
  <tt>${sysconfdir}/xdg/xfce4/kiosk/kioskrc</tt>.</p>

  <p>The way to explain the format of this file is by using an
  example. The xfce4-session section of your <tt>kioskrc</tt> might
  look like this:</p>

  <table border="0" bgcolor="#F3F4F8" width="100%">
    <tr>
      <td>
        <pre>
[xfce4-session]
CustomizeSplash=ALL
CustomizeChooser=ALL
CustomizeLogout=ALL
CustomizeCompatibility=%wheel
Shutdown=%wheel
CustomizeSecurity=NONE
</pre>
      </td>
    </tr>
  </table>

  <p>This allows all users to change their splash, chooser and
  logout settings, but allows only users in the group
  <em>wheel</em> to customize the compatibility settings and
  shutdown the system. No one will be allowed to adjust the
  security settings.</p>

  <p>The session manager supports the following KIOSK
  capabilities:</p>

  <dl>
    <dt>CustomizeSplash</dt>

    <dd>
      <p>Whether or not the user is allowed to customize the splash
      screen.</p>
    </dd>

    <dt>CustomizeChooser</dt>

    <dd>
      <p>Whether or not the user is allowed to customize the
      session chooser settings.</p>
    </dd>

    <dt>CustomizeLogout</dt>

    <dd>
      <p>Whether or not the user is allowed to customize the logout
      settings.</p>
    </dd>

    <dt>CustomizeCompatibility</dt>

    <dd>
      <p>Whether or not the user is allowed to customize the
      compatibility settings (KDE/Gnome compat)</p>
    </dd>

    <dt>CustomizeSecurity</dt>

    <dd>
      <p>Whether or not the user is allowed to customize the
      security settings. This is one of the most <em>IMPORTANT</em>
      settings, since it prevents users (actually <tt>libICE</tt>)
      from binding to a TCP port.</p>
    </dd>

    <dt>Shutdown</dt>

    <dd>
      <p>Whether or not the user is allowed to shutdown (reboot or
      poweroff) the system. If a user lacks this capability the
      reboot and poweroff options in the shutdown dialog will be
      greyed out.</p>
    </dd>
  </dl>

  <p>�</p>

  <h2 style="clear: both"><a name="xfsm-copyright"></a>About
  <b><tt>xfce4-session</tt></b></h2>

  <p><b><tt>xfce4-session</tt></b> was written by Benedikt Meurer
  (<tt>&lt;<a href=
  "mailto:benny@xfce.org">benny@xfce.org</a>&gt;</tt>). To find
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
