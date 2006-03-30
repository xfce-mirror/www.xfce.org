<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=US-ASCII">
<title>Executing Applications</title>
<meta name="generator" content="DocBook XSL Stylesheets V1.69.1">
<link rel="start" href="index.html" title="exo Reference Manual">
<link rel="up" href="exo-miscelleanous.html" title="Part&#160;V.&#160;Miscelleanous">
<link rel="prev" href="exo-Binding-Properties-Functions.html" title="Binding Properties Functions">
<link rel="next" href="exo-MD5-functions.html" title="MD5 Functions">
<meta name="generator" content="GTK-Doc V1.4 (XML mode)">
<link rel="stylesheet" href="style.css" type="text/css">
<link rel="part" href="exo-overview.html" title="Part&#160;I.&#160;Overview">
<link rel="part" href="exo-toolbars.html" title="Part&#160;II.&#160;Editable Toolbars">
<link rel="part" href="exo-widgets.html" title="Part&#160;III.&#160;Additional widgets">
<link rel="part" href="exo-extensions.html" title="Part&#160;IV.&#160;Extensions to existing frameworks">
<link rel="part" href="exo-miscelleanous.html" title="Part&#160;V.&#160;Miscelleanous">
<link rel="part" href="exo-tools.html" title="Part&#160;VI.&#160;Tools">
<link rel="index" href="ix01.html" title="Index">
</head>
<body bgcolor="white" text="black" link="#0000FF" vlink="#840084" alink="#0000FF">
<table class="navigation" width="100%" summary="Navigation header" cellpadding="2" cellspacing="2"><tr valign="middle">
<td><a accesskey="p" href="exo-Binding-Properties-Functions.html"><img src="left.png" width="24" height="24" border="0" alt="Prev"></a></td>
<td><a accesskey="u" href="exo-miscelleanous.html"><img src="up.png" width="24" height="24" border="0" alt="Up"></a></td>
<td><a accesskey="h" href="index.html"><img src="home.png" width="24" height="24" border="0" alt="Home"></a></td>
<th width="100%" align="center">exo Reference Manual</th>
<td><a accesskey="n" href="exo-MD5-functions.html"><img src="right.png" width="24" height="24" border="0" alt="Next"></a></td>
</tr></table>
<div class="refentry" lang="en">
<a name="exo-Executing-Applications"></a><div class="titlepage"></div>
<div class="refnamediv"><table width="100%"><tr>
<td valign="top">
<h2><span class="refentrytitle">Executing Applications</span></h2>
<p>Executing Applications &#8212; Execute preferred applications.</p>
</td>
<td valign="top" align="right"></td>
</tr></table></div>
<div class="refsect1" lang="en">
<a name="id2669027"></a><h2>Stability Level</h2>
Stable, unless otherwise indicated
</div>
<div class="refsynopsisdiv">
<h2>Synopsis</h2>
<pre class="synopsis">

#include &lt;exo/exo.h&gt;


gboolean    <a href="exo-Executing-Applications.html#exo-execute-preferred-application">exo_execute_preferred_application</a>
                                            (const gchar *category,
                                             const gchar *parameter,
                                             const gchar *working_directory,
                                             gchar **envp,
                                             GError **error);
gboolean    <a href="exo-Executing-Applications.html#exo-execute-preferred-application-on-screen">exo_execute_preferred_application_on_screen</a>
                                            (const gchar *category,
                                             const gchar *parameter,
                                             const gchar *working_directory,
                                             gchar **envp,
                                             GdkScreen *screen,
                                             GError **error);
gboolean    <a href="exo-Executing-Applications.html#exo-execute-terminal-shell">exo_execute_terminal_shell</a>      (const gchar *command_line,
                                             const gchar *working_directory,
                                             gchar **envp,
                                             GError **error);
gboolean    <a href="exo-Executing-Applications.html#exo-execute-terminal-shell-on-screen">exo_execute_terminal_shell_on_screen</a>
                                            (const gchar *command_line,
                                             const gchar *working_directory,
                                             gchar **envp,
                                             GdkScreen *screen,
                                             GError **error);
</pre>
</div>
<div class="refsect1" lang="en">
<a name="id2669284"></a><h2>Description</h2>
<p>
  This module provides functions to execute certain kinds of applications,
  for which users can select their preferred ones. For example, whenever
  you need to run a command in a terminal emulator from within your
  application you should use <a href="exo-Executing-Applications.html#exo-execute-terminal-shell"><code class="function">exo_execute_terminal_shell()</code></a> or
  <a href="exo-Executing-Applications.html#exo-execute-terminal-shell-on-screen"><code class="function">exo_execute_terminal_shell_on_screen()</code></a> to make sure you run the user's
  preferred terminal emulator.
</p>
<p>
  On the other hand if you need to display an URL (i.e. you want to point
  the user to the website of your application), you should use <a href="exo-Opening-URLs.html#exo-url-show"><code class="function">exo_url_show()</code></a>
  or <a href="exo-Opening-URLs.html#exo-url-show-on-screen"><code class="function">exo_url_show_on_screen()</code></a> from the <a href="exo-Opening-URLs.html" title="Opening URLs">exo-url</a> module instead, as they will
  try to automatically determine the appropriate viewer for a given URL.
</p>
</div>
<div class="refsect1" lang="en">
<a name="id2669339"></a><h2>Details</h2>
<div class="refsect2" lang="en">
<a name="id2669345"></a><h3>
<a name="exo-execute-preferred-application"></a>exo_execute_preferred_application ()</h3>
<a class="indexterm" name="id2669356"></a><pre class="programlisting">gboolean    exo_execute_preferred_application
                                            (const gchar *category,
                                             const gchar *parameter,
                                             const gchar *working_directory,
                                             gchar **envp,
                                             GError **error);</pre>
<p>
Convenience wrapper to <a href="exo-Executing-Applications.html#exo-execute-preferred-application-on-screen"><code class="function">exo_execute_preferred_application_on_screen()</code></a>, which
runs the preferred application for <em class="parameter"><code>category</code></em> on the default <span class="type">GdkScreen</span>.
</p>
<p>
Note that even if this method returns <code class="literal">TRUE</code> there's no warranty that
the preferred application for <em class="parameter"><code>category</code></em> was run successfully, because
of the way the helper framework is implemented. But you can be sure
that if the execution fails at a later stage, the library will popup
an error dialog to inform the user that the execution failed.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>category</code></em>&#160;:</span></td>
<td> the category of the preferred application to launch.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>parameter</code></em>&#160;:</span></td>
<td> additional parameter to pass to the preferred application
                     (i.e. an URL to pass to the preferred browser) or <code class="literal">NULL</code>
                     to pass no parameter.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>working_directory</code></em>&#160;:</span></td>
<td> path to the directory in which to execute the
                     preferred application for <em class="parameter"><code>category</code></em>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>envp</code></em>&#160;:</span></td>
<td> child's environment, or <code class="literal">NULL</code> to inherit parent's.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>error</code></em>&#160;:</span></td>
<td> return location for errors or <code class="literal">NULL</code>.
</td>
</tr>
<tr>
<td>
<span class="term"><span class="emphasis"><em>Returns</em></span>&#160;:</span></td>
<td> <code class="literal">TRUE</code> on success, else <code class="literal">FALSE</code>.

</td>
</tr>
</tbody>
</table></div>
<p>Since  0.3.1.3
</p>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2669633"></a><h3>
<a name="exo-execute-preferred-application-on-screen"></a>exo_execute_preferred_application_on_screen ()</h3>
<a class="indexterm" name="id2669644"></a><pre class="programlisting">gboolean    exo_execute_preferred_application_on_screen
                                            (const gchar *category,
                                             const gchar *parameter,
                                             const gchar *working_directory,
                                             gchar **envp,
                                             GdkScreen *screen,
                                             GError **error);</pre>
<p>
Launches the preferred application for the given <em class="parameter"><code>category</code></em> with the
<em class="parameter"><code>parameter</code></em> on <em class="parameter"><code>screen</code></em> in the specified <em class="parameter"><code>working_directory</code></em>.
</p>
<p>
libexo currently supports the following categories: %"WebBrowser",
%"MailReader" and %"TerminalEmulator". If you specify an invalid
<em class="parameter"><code>category</code></em> here, the execution will fail at a later stage and the
user will be presented with an error dialog.
</p>
<p>
Note that even if this method returns <code class="literal">TRUE</code> there's no warranty that
the preferred application for <em class="parameter"><code>category</code></em> was run successfully, because
of the way the helper framework is implemented. But you can be sure
that if the execution fails at a later stage, the library will popup
an error dialog to inform the user that the execution failed.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>category</code></em>&#160;:</span></td>
<td> the category of the preferred application to launch.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>parameter</code></em>&#160;:</span></td>
<td> additional parameter to pass to the preferred application
                     (i.e. an URL to pass to the preferred browser) or <code class="literal">NULL</code>
                     to pass no parameter.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>working_directory</code></em>&#160;:</span></td>
<td> path to the directory in which to execute the
                     preferred application for <em class="parameter"><code>category</code></em>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>envp</code></em>&#160;:</span></td>
<td> child's environment, or <code class="literal">NULL</code> to inherit parent's.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>screen</code></em>&#160;:</span></td>
<td> the <span class="type">GdkScreen</span> on which to run the preferred
                     application for <em class="parameter"><code>category</code></em>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>error</code></em>&#160;:</span></td>
<td> return location for errors or <code class="literal">NULL</code>.
</td>
</tr>
<tr>
<td>
<span class="term"><span class="emphasis"><em>Returns</em></span>&#160;:</span></td>
<td> <code class="literal">TRUE</code> on success, else <code class="literal">FALSE</code>.

</td>
</tr>
</tbody>
</table></div>
<p>Since  0.3.1.3
</p>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2669958"></a><h3>
<a name="exo-execute-terminal-shell"></a>exo_execute_terminal_shell ()</h3>
<a class="indexterm" name="id2669966"></a><pre class="programlisting">gboolean    exo_execute_terminal_shell      (const gchar *command_line,
                                             const gchar *working_directory,
                                             gchar **envp,
                                             GError **error);</pre>
<p>
Convenience wrapper to <a href="exo-Executing-Applications.html#exo-execute-terminal-shell-on-screen"><code class="function">exo_execute_terminal_shell_on_screen()</code></a>, which
executes the <em class="parameter"><code>command_line</code></em> on the default <span class="type">GdkScreen</span>.
</p>
<p>
Note that even if this method returns <code class="literal">TRUE</code> there's no warranty that
the <em class="parameter"><code>command_line</code></em> was run successfully, because of the way the helper
framework is implemented. But you can be sure that if the execution
fails at a later stage, the library will popup an error dialog to
inform the user that the execution failed.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>command_line</code></em>&#160;:</span></td>
<td> shell command line to execute.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>working_directory</code></em>&#160;:</span></td>
<td> path to the directory in which to execute <em class="parameter"><code>command_line</code></em>
                     or <code class="literal">NULL</code> to use the current working directory.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>envp</code></em>&#160;:</span></td>
<td> child's environment, or <code class="literal">NULL</code> to inherit parent's.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>error</code></em>&#160;:</span></td>
<td> return location for errors or <code class="literal">NULL</code>.
</td>
</tr>
<tr>
<td>
<span class="term"><span class="emphasis"><em>Returns</em></span>&#160;:</span></td>
<td> <code class="literal">TRUE</code> on success, else <code class="literal">FALSE</code>.

</td>
</tr>
</tbody>
</table></div>
<p>Since  0.3.1.3
</p>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2670222"></a><h3>
<a name="exo-execute-terminal-shell-on-screen"></a>exo_execute_terminal_shell_on_screen ()</h3>
<a class="indexterm" name="id2670234"></a><pre class="programlisting">gboolean    exo_execute_terminal_shell_on_screen
                                            (const gchar *command_line,
                                             const gchar *working_directory,
                                             gchar **envp,
                                             GdkScreen *screen,
                                             GError **error);</pre>
<p>
Executes <em class="parameter"><code>command_line</code></em> in the default terminal emulator on the specified
<em class="parameter"><code>screen</code></em>.
</p>
<p>
If no preferred terminal emulator was chosen by the user so far and
no sane fallback could be located, the user will be presented with
the preferred application chooser dialog, which prompts to choose
a default terminal emulator, and the <em class="parameter"><code>command_line</code></em> will be run
afterwards using the new default.
</p>
<p>
Note that even if this method returns <code class="literal">TRUE</code> there's no warranty that
the <em class="parameter"><code>command_line</code></em> was run successfully, because of the way the helper
framework is implemented. But you can be sure that if the execution
fails at a later stage, the library will popup an error dialog to
inform the user that the execution failed.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>command_line</code></em>&#160;:</span></td>
<td> shell command line to execute.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>working_directory</code></em>&#160;:</span></td>
<td> path to the directory in which to execute <em class="parameter"><code>command_line</code></em>
                     or <code class="literal">NULL</code> to use the current working directory.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>envp</code></em>&#160;:</span></td>
<td> child's environment, or <code class="literal">NULL</code> to inherit parent's.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>screen</code></em>&#160;:</span></td>
<td> the <span class="type">GdkScreen</span> on which to run the <em class="parameter"><code>command_line</code></em>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>error</code></em>&#160;:</span></td>
<td> return location for errors or <code class="literal">NULL</code>.
</td>
</tr>
<tr>
<td>
<span class="term"><span class="emphasis"><em>Returns</em></span>&#160;:</span></td>
<td> <code class="literal">TRUE</code> on success, else <code class="literal">FALSE</code>.

</td>
</tr>
</tbody>
</table></div>
<p>Since  0.3.1.3
</p>
</div>
</div>
<div class="refsect1" lang="en">
<a name="id2670452"></a><h2>See Also</h2>
<p>
  <a href="exo-Opening-URLs.html" title="Opening URLs">Opening URLs</a>
</p>
</div>
</div>
<table class="navigation" width="100%" summary="Navigation footer" cellpadding="2" cellspacing="0"><tr valign="middle">
<td align="left"><a accesskey="p" href="exo-Binding-Properties-Functions.html"><b>&lt;&lt;&#160;Binding Properties Functions</b></a></td>
<td align="right"><a accesskey="n" href="exo-MD5-functions.html"><b>MD5 Functions&#160;&gt;&gt;</b></a></td>
</tr></table>
</body>
</html>
