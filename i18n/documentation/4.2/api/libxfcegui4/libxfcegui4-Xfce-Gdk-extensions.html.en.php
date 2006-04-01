<html><head><meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"><title>Xfce Gdk extensions</title><meta name="generator" content="DocBook XSL Stylesheets V1.66.1"><link rel="start" href="index.html" title="libxfcegui4 Reference Manual"><link rel="up" href="libxfcegui4-fundamentals.html" title="Xfce GUI Fundamentals"><link rel="prev" href="libxfcegui4-xfce-exec.html" title="xfce-exec"><link rel="next" href="libxfcegui4-Xfce-Gtk+-extensions.html" title="Xfce Gtk+ extensions"><meta name="generator" content="GTK-Doc V1.2 (XML mode)"><style type="text/css">
        .synopsis, .classsynopsis {
            background: #eeeeee;
            border: solid 1px #aaaaaa;
            padding: 0.5em;
        }
        .programlisting {
            background: #eeeeff;
            border: solid 1px #aaaaff;
            padding: 0.5em;
        }
        .variablelist {
            padding: 4px;
            margin-left: 3em;
        }
        .navigation {
            background: #ffeeee;
            border: solid 1px #ffaaaa;
            margin-top: 0.5em;
            margin-bottom: 0.5em;
        }
        .navigation a {
            color: #770000;
        }
        .navigation a:visited {
            color: #550000;
        }
        .navigation .title {
            font-size: 200%;
        }
      </style></head><body bgcolor="white" text="black" link="#0000FF" vlink="#840084" alink="#0000FF"><table class="navigation" width="100%" summary="Navigation header" cellpadding="2" cellspacing="2"><tr valign="middle"><td><a accesskey="p" href="libxfcegui4-xfce-exec.html"><img src="left.png" width="24" height="24" border="0" alt="Prev"></a></td><td><a accesskey="u" href="libxfcegui4-fundamentals.html"><img src="up.png" width="24" height="24" border="0" alt="Up"></a></td><td><a accesskey="h" href="index.html"><img src="home.png" width="24" height="24" border="0" alt="Home"></a></td><th width="100%" align="center">libxfcegui4 Reference Manual</th><td><a accesskey="n" href="libxfcegui4-Xfce-Gtk+-extensions.html"><img src="right.png" width="24" height="24" border="0" alt="Next"></a></td></tr></table><div class="refentry" lang="en"><a name="libxfcegui4-Xfce-Gdk-extensions"></a><div class="titlepage"></div><div class="refnamediv"><h2><span class="refentrytitle">Xfce Gdk extensions</span></h2><p>Xfce Gdk extensions &#8212; Additional Gdk related functions.</p></div><div class="refsynopsisdiv"><h2>Synopsis</h2><pre class="synopsis">

#include &lt;libxfcegui4/libxfcegui4.h&gt;


gchar*      <a href="libxfcegui4-Xfce-Gdk-extensions.html#xfce-gdk-display-get-fullname">xfce_gdk_display_get_fullname</a>   (GdkDisplay *display);
GdkScreen*  <a href="libxfcegui4-Xfce-Gdk-extensions.html#xfce-gdk-display-locate-monitor-with-pointer">xfce_gdk_display_locate_monitor_with_pointer</a>
                                            (GdkDisplay *display,
                                             gint *monitor_return);
gchar*      <a href="libxfcegui4-Xfce-Gdk-extensions.html#xfce-gdk-screen-get-fullname">xfce_gdk_screen_get_fullname</a>    (GdkScreen *screen);
gboolean    <a href="libxfcegui4-Xfce-Gdk-extensions.html#xfce-gdk-spawn-on-screen">xfce_gdk_spawn_on_screen</a>        (GdkScreen *screen,
                                             const gchar *working_directory,
                                             gchar **argv,
                                             gchar **envp,
                                             GSpawnFlags flags,
                                             GSpawnChildSetupFunc child_setup,
                                             gpointer user_data,
                                             gint *child_pid,
                                             GError **error);
gboolean    <a href="libxfcegui4-Xfce-Gdk-extensions.html#xfce-gdk-spawn-on-screen-with-pipes">xfce_gdk_spawn_on_screen_with_pipes</a>
                                            (GdkScreen *screen,
                                             const gchar *working_directory,
                                             gchar **argv,
                                             gchar **envp,
                                             GSpawnFlags flags,
                                             GSpawnChildSetupFunc child_setup,
                                             gpointer user_data,
                                             gint *child_pid,
                                             gint *standard_input,
                                             gint *standard_output,
                                             gint *standard_error,
                                             GError **error);
gboolean    <a href="libxfcegui4-Xfce-Gdk-extensions.html#xfce-gdk-spawn-command-line-on-screen">xfce_gdk_spawn_command_line_on_screen</a>
                                            (GdkScreen *screen,
                                             const gchar *command_line,
                                             GError **error);
</pre></div><div class="refsect1" lang="en"><a name="id2527379"></a><h2>Description</h2><p>

</p></div><div class="refsect1" lang="en"><a name="id2527389"></a><h2>Details</h2><div class="refsect2" lang="en"><a name="id2527394"></a><h3><a name="xfce-gdk-display-get-fullname"></a>xfce_gdk_display_get_fullname ()</h3><a class="indexterm" name="id2527406"></a><pre class="programlisting">gchar*      xfce_gdk_display_get_fullname   (GdkDisplay *display);</pre><p>
Determines the full qualified name of <i class="parameter"><tt>display</tt></i>. The full name includes
both the hostname of the Xserver node and the display number
of the Xserver.</p><p>

</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term"><i class="parameter"><tt>display</tt></i> :</span></td><td> A valid Gdk display.
</td></tr><tr><td><span class="term"><span class="emphasis"><em>Returns</em></span> :</span></td><td> The full qualified name of <i class="parameter"><tt>display</tt></i>.

</td></tr></tbody></table></div><p>Since  4.2
</p></div><hr><div class="refsect2" lang="en"><a name="id2527483"></a><h3><a name="xfce-gdk-display-locate-monitor-with-pointer"></a>xfce_gdk_display_locate_monitor_with_pointer ()</h3><a class="indexterm" name="id2527496"></a><pre class="programlisting">GdkScreen*  xfce_gdk_display_locate_monitor_with_pointer
                                            (GdkDisplay *display,
                                             gint *monitor_return);</pre><p>
Locates the monitor and the screen which contains the pointer. If
it is not possible to determine the current pointer position, <tt class="literal">NULL</tt>
is returned.</p><p>

</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term"><i class="parameter"><tt>display</tt></i> :</span></td><td> A Gdk display or <tt class="literal">NULL</tt> to choose the default display.
</td></tr><tr><td><span class="term"><i class="parameter"><tt>monitor_return</tt></i> :</span></td><td> Address to store the monitor number to or <tt class="literal">NULL</tt>.
</td></tr><tr><td><span class="term"><span class="emphasis"><em>Returns</em></span> :</span></td><td> The screen that contains the pointer.

</td></tr></tbody></table></div><p>Since  4.2
</p></div><hr><div class="refsect2" lang="en"><a name="id2527602"></a><h3><a name="xfce-gdk-screen-get-fullname"></a>xfce_gdk_screen_get_fullname ()</h3><a class="indexterm" name="id2527614"></a><pre class="programlisting">gchar*      xfce_gdk_screen_get_fullname    (GdkScreen *screen);</pre><p>
Like <a href="libxfcegui4-Xfce-Gdk-extensions.html#xfce-gdk-display-get-fullname"><tt class="function">xfce_gdk_display_get_fullname()</tt></a>, but also includes the screen
number.</p><p>

</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term"><i class="parameter"><tt>screen</tt></i> :</span></td><td> A Gdk screen.
</td></tr><tr><td><span class="term"><span class="emphasis"><em>Returns</em></span> :</span></td><td> The full qualified name of <i class="parameter"><tt>screen</tt></i>.

</td></tr></tbody></table></div><p>Since  4.2
</p></div><hr><div class="refsect2" lang="en"><a name="id2527695"></a><h3><a name="xfce-gdk-spawn-on-screen"></a>xfce_gdk_spawn_on_screen ()</h3><a class="indexterm" name="id2527706"></a><pre class="programlisting">gboolean    xfce_gdk_spawn_on_screen        (GdkScreen *screen,
                                             const gchar *working_directory,
                                             gchar **argv,
                                             gchar **envp,
                                             GSpawnFlags flags,
                                             GSpawnChildSetupFunc child_setup,
                                             gpointer user_data,
                                             gint *child_pid,
                                             GError **error);</pre><p>
Like <tt class="function">g_spawn_async()</tt>, except the child process is spawned in such
an environment that on calling <tt class="function">gdk_display_open()</tt> it would be
returned a <span class="type">GdkDisplay</span> with <i class="parameter"><tt>screen</tt></i> as the default screen.
</p><p>
This is useful for applications which wish to launch an application
on a specific screen.</p><p>

</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term"><i class="parameter"><tt>screen</tt></i> :</span></td><td> a <span class="type">GdkScreen</span>
</td></tr><tr><td><span class="term"><i class="parameter"><tt>working_directory</tt></i> :</span></td><td> child's current working directory, or <tt class="literal">NULL</tt> to 
                     inherit parent's
</td></tr><tr><td><span class="term"><i class="parameter"><tt>argv</tt></i> :</span></td><td> child's argument vector
</td></tr><tr><td><span class="term"><i class="parameter"><tt>envp</tt></i> :</span></td><td> child's environment, or <tt class="literal">NULL</tt> to inherit parent's
</td></tr><tr><td><span class="term"><i class="parameter"><tt>flags</tt></i> :</span></td><td> flags from <span class="type">GSpawnFlags</span>
</td></tr><tr><td><span class="term"><i class="parameter"><tt>child_setup</tt></i> :</span></td><td> function to run in the child just before <tt class="function">exec()</tt>
</td></tr><tr><td><span class="term"><i class="parameter"><tt>user_data</tt></i> :</span></td><td> user data for <i class="parameter"><tt>child_setup</tt></i>
</td></tr><tr><td><span class="term"><i class="parameter"><tt>child_pid</tt></i> :</span></td><td> return location for child process ID, or <tt class="literal">NULL</tt>
</td></tr><tr><td><span class="term"><i class="parameter"><tt>error</tt></i> :</span></td><td> return location for error
</td></tr><tr><td><span class="term"><span class="emphasis"><em>Returns</em></span> :</span></td><td> <tt class="literal">TRUE</tt> on success, <tt class="literal">FALSE</tt> if error is set

</td></tr></tbody></table></div><p>Since  4.2
</p></div><hr><div class="refsect2" lang="en"><a name="id2528050"></a><h3><a name="xfce-gdk-spawn-on-screen-with-pipes"></a>xfce_gdk_spawn_on_screen_with_pipes ()</h3><a class="indexterm" name="id2528062"></a><pre class="programlisting">gboolean    xfce_gdk_spawn_on_screen_with_pipes
                                            (GdkScreen *screen,
                                             const gchar *working_directory,
                                             gchar **argv,
                                             gchar **envp,
                                             GSpawnFlags flags,
                                             GSpawnChildSetupFunc child_setup,
                                             gpointer user_data,
                                             gint *child_pid,
                                             gint *standard_input,
                                             gint *standard_output,
                                             gint *standard_error,
                                             GError **error);</pre><p>
Like <tt class="function">g_spawn_async_with_pipes()</tt>, except the child process is
spawned in such an environment that on calling <tt class="function">gdk_display_open()</tt>
it would be returned a <span class="type">GdkDisplay</span> with <i class="parameter"><tt>screen</tt></i> as the default
screen.
</p><p>
This is useful for applications which wish to launch an application
on a specific screen.</p><p>

</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term"><i class="parameter"><tt>screen</tt></i> :</span></td><td> a <span class="type">GdkScreen</span>
</td></tr><tr><td><span class="term"><i class="parameter"><tt>working_directory</tt></i> :</span></td><td> child's current working directory, or <tt class="literal">NULL</tt> to 
                     inherit parent's
</td></tr><tr><td><span class="term"><i class="parameter"><tt>argv</tt></i> :</span></td><td> child's argument vector
</td></tr><tr><td><span class="term"><i class="parameter"><tt>envp</tt></i> :</span></td><td> child's environment, or <tt class="literal">NULL</tt> to inherit parent's
</td></tr><tr><td><span class="term"><i class="parameter"><tt>flags</tt></i> :</span></td><td> flags from <span class="type">GSpawnFlags</span>
</td></tr><tr><td><span class="term"><i class="parameter"><tt>child_setup</tt></i> :</span></td><td> function to run in the child just before <tt class="function">exec()</tt>
</td></tr><tr><td><span class="term"><i class="parameter"><tt>user_data</tt></i> :</span></td><td> user data for <i class="parameter"><tt>child_setup</tt></i>
</td></tr><tr><td><span class="term"><i class="parameter"><tt>child_pid</tt></i> :</span></td><td> return location for child process ID, or <tt class="literal">NULL</tt>
</td></tr><tr><td><span class="term"><i class="parameter"><tt>standard_input</tt></i> :</span></td><td> return location for file descriptor to write to 
                     child's stdin, or <tt class="literal">NULL</tt>
</td></tr><tr><td><span class="term"><i class="parameter"><tt>standard_output</tt></i> :</span></td><td> return location for file descriptor to read child's 
                     stdout, or <tt class="literal">NULL</tt>
</td></tr><tr><td><span class="term"><i class="parameter"><tt>standard_error</tt></i> :</span></td><td> return location for file descriptor to read child's 
                     stderr, or <tt class="literal">NULL</tt>
</td></tr><tr><td><span class="term"><i class="parameter"><tt>error</tt></i> :</span></td><td> return location for error
</td></tr><tr><td><span class="term"><span class="emphasis"><em>Returns</em></span> :</span></td><td> <tt class="literal">TRUE</tt> on success, <tt class="literal">FALSE</tt> if an error was set

</td></tr></tbody></table></div><p>Since  4.2
</p></div><hr><div class="refsect2" lang="en"><a name="id2528492"></a><h3><a name="xfce-gdk-spawn-command-line-on-screen"></a>xfce_gdk_spawn_command_line_on_screen ()</h3><a class="indexterm" name="id2528504"></a><pre class="programlisting">gboolean    xfce_gdk_spawn_command_line_on_screen
                                            (GdkScreen *screen,
                                             const gchar *command_line,
                                             GError **error);</pre><p>
Like <tt class="function">g_spawn_command_line_async()</tt>, except the child process is
spawned in such an environment that on calling <tt class="function">gdk_display_open()</tt>
it would be returned a <span class="type">GdkDisplay</span> with <i class="parameter"><tt>screen</tt></i> as the default
screen.
</p><p>
This is useful for applications which wish to launch an application
on a specific screen.</p><p>

</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term"><i class="parameter"><tt>screen</tt></i> :</span></td><td> a <span class="type">GdkScreen</span>
</td></tr><tr><td><span class="term"><i class="parameter"><tt>command_line</tt></i> :</span></td><td> a command line
</td></tr><tr><td><span class="term"><i class="parameter"><tt>error</tt></i> :</span></td><td> return location for errors
</td></tr><tr><td><span class="term"><span class="emphasis"><em>Returns</em></span> :</span></td><td> <tt class="literal">TRUE</tt> on success, <tt class="literal">FALSE</tt> if error is set.

</td></tr></tbody></table></div><p>Since  4.2
</p></div></div><div class="refsect1" lang="en"><a name="id2528675"></a><h2>See Also</h2><p>
<a href="http://developer.gnome.org/doc/API/2.0/gdk/" target="_top">Gdk reference manual</a>
</p></div></div><table class="navigation" width="100%" summary="Navigation footer" cellpadding="2" cellspacing="0"><tr valign="middle"><td align="left"><a accesskey="p" href="libxfcegui4-xfce-exec.html"><b>&lt;&lt; xfce-exec</b></a></td><td align="right"><a accesskey="n" href="libxfcegui4-Xfce-Gtk+-extensions.html"><b>Xfce Gtk+ extensions &gt;&gt;</b></a></td></tr></table></body></html>
