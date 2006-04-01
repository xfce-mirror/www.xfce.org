<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=US-ASCII">
<title>ThunarVfsInfo</title>
<meta name="generator" content="DocBook XSL Stylesheets V1.69.1">
<link rel="start" href="index.html" title="Thunar-VFS Reference Manual">
<link rel="up" href="fundamentals.html" title="Part&#160;II.&#160;Fundamentals">
<link rel="prev" href="thunar-vfs-ThunarVfsPath.html" title="ThunarVfsPath">
<link rel="next" href="thunar-vfs-Utility-Functions.html" title="Utility Functions">
<meta name="generator" content="GTK-Doc V1.4 (XML mode)">
<link rel="stylesheet" href="style.css" type="text/css">
<link rel="part" href="introduction.html" title="Part&#160;I.&#160;Introduction">
<link rel="part" href="fundamentals.html" title="Part&#160;II.&#160;Fundamentals">
<link rel="part" href="filesystem-monitoring.html" title="Part&#160;III.&#160;Filesystem Monitoring">
<link rel="part" href="mime-types.html" title="Part&#160;IV.&#160;MIME Types">
<link rel="part" href="users-and-groups-handling.html" title="Part&#160;V.&#160;Users and Groups Handling">
<link rel="part" href="volume-handling.html" title="Part&#160;VI.&#160;Volume Handling">
<link rel="index" href="ix01.html" title="Index">
</head>
<body bgcolor="white" text="black" link="#0000FF" vlink="#840084" alink="#0000FF">
<table class="navigation" width="100%" summary="Navigation header" cellpadding="2" cellspacing="2"><tr valign="middle">
<td><a accesskey="p" href="thunar-vfs-ThunarVfsPath.html"><img src="left.png" width="24" height="24" border="0" alt="Prev"></a></td>
<td><a accesskey="u" href="fundamentals.html"><img src="up.png" width="24" height="24" border="0" alt="Up"></a></td>
<td><a accesskey="h" href="index.html"><img src="home.png" width="24" height="24" border="0" alt="Home"></a></td>
<th width="100%" align="center">Thunar-VFS Reference Manual</th>
<td><a accesskey="n" href="thunar-vfs-Utility-Functions.html"><img src="right.png" width="24" height="24" border="0" alt="Next"></a></td>
</tr></table>
<div class="refentry" lang="en">
<a name="thunar-vfs-ThunarVfsInfo"></a><div class="titlepage"></div>
<div class="refnamediv"><table width="100%"><tr>
<td valign="top">
<h2><span class="refentrytitle">ThunarVfsInfo</span></h2>
<p>ThunarVfsInfo &#8212; Stores information about files.</p>
</td>
<td valign="top" align="right"></td>
</tr></table></div>
<div class="refsynopsisdiv">
<h2>Synopsis</h2>
<pre class="synopsis">

#include &lt;thunar-vfs/thunar-vfs.h&gt;


            <a href="thunar-vfs-ThunarVfsInfo.html#ThunarVfsInfo">ThunarVfsInfo</a>;
<a href="thunar-vfs-ThunarVfsInfo.html#ThunarVfsInfo">ThunarVfsInfo</a>* <a href="thunar-vfs-ThunarVfsInfo.html#thunar-vfs-info-new-for-path">thunar_vfs_info_new_for_path</a> (<a href="thunar-vfs-ThunarVfsPath.html#ThunarVfsPath">ThunarVfsPath</a> *path,
                                             GError **error);
<a href="thunar-vfs-ThunarVfsInfo.html#ThunarVfsInfo">ThunarVfsInfo</a>* <a href="thunar-vfs-ThunarVfsInfo.html#thunar-vfs-info-ref">thunar_vfs_info_ref</a>          (<a href="thunar-vfs-ThunarVfsInfo.html#ThunarVfsInfo">ThunarVfsInfo</a> *info);
void        <a href="thunar-vfs-ThunarVfsInfo.html#thunar-vfs-info-unref">thunar_vfs_info_unref</a>           (<a href="thunar-vfs-ThunarVfsInfo.html#ThunarVfsInfo">ThunarVfsInfo</a> *info);
<a href="thunar-vfs-ThunarVfsInfo.html#ThunarVfsInfo">ThunarVfsInfo</a>* <a href="thunar-vfs-ThunarVfsInfo.html#thunar-vfs-info-copy">thunar_vfs_info_copy</a>         (const <a href="thunar-vfs-ThunarVfsInfo.html#ThunarVfsInfo">ThunarVfsInfo</a> *info);
gboolean    <a href="thunar-vfs-ThunarVfsInfo.html#thunar-vfs-info-get-free-space">thunar_vfs_info_get_free_space</a>  (const <a href="thunar-vfs-ThunarVfsInfo.html#ThunarVfsInfo">ThunarVfsInfo</a> *info,
                                             <a href="thunar-vfs-Basic-Types.html#ThunarVfsFileSize">ThunarVfsFileSize</a> *free_space_return);
const gchar* <a href="thunar-vfs-ThunarVfsInfo.html#thunar-vfs-info-get-custom-icon">thunar_vfs_info_get_custom_icon</a>
                                            (const <a href="thunar-vfs-ThunarVfsInfo.html#ThunarVfsInfo">ThunarVfsInfo</a> *info);
gchar*      <a href="thunar-vfs-ThunarVfsInfo.html#thunar-vfs-info-read-link">thunar_vfs_info_read_link</a>       (const <a href="thunar-vfs-ThunarVfsInfo.html#ThunarVfsInfo">ThunarVfsInfo</a> *info,
                                             GError **error);
gboolean    <a href="thunar-vfs-ThunarVfsInfo.html#thunar-vfs-info-execute">thunar_vfs_info_execute</a>         (const <a href="thunar-vfs-ThunarVfsInfo.html#ThunarVfsInfo">ThunarVfsInfo</a> *info,
                                             GdkScreen *screen,
                                             GList *path_list,
                                             const gchar *working_directory,
                                             GError **error);
gboolean    <a href="thunar-vfs-ThunarVfsInfo.html#thunar-vfs-info-rename">thunar_vfs_info_rename</a>          (<a href="thunar-vfs-ThunarVfsInfo.html#ThunarVfsInfo">ThunarVfsInfo</a> *info,
                                             const gchar *name,
                                             GError **error);
gboolean    <a href="thunar-vfs-ThunarVfsInfo.html#thunar-vfs-info-matches">thunar_vfs_info_matches</a>         (const <a href="thunar-vfs-ThunarVfsInfo.html#ThunarVfsInfo">ThunarVfsInfo</a> *a,
                                             const <a href="thunar-vfs-ThunarVfsInfo.html#ThunarVfsInfo">ThunarVfsInfo</a> *b);
void        <a href="thunar-vfs-ThunarVfsInfo.html#thunar-vfs-info-list-free">thunar_vfs_info_list_free</a>       (GList *info_list);


</pre>
</div>
<div class="refsect1" lang="en">
<a name="id2610726"></a><h2>Description</h2>
<p>

</p>
</div>
<div class="refsect1" lang="en">
<a name="id2610736"></a><h2>Details</h2>
<div class="refsect2" lang="en">
<a name="id2610741"></a><h3>
<a name="ThunarVfsInfo"></a>ThunarVfsInfo</h3>
<a class="indexterm" name="id2610749"></a><pre class="programlisting">typedef struct {
  /* File type */
  ThunarVfsFileType type : 8;

  /* File permissions and special mode flags */
  ThunarVfsFileMode mode : 12;

  /* File flags */
  ThunarVfsFileFlags flags : 12;

  /* Owner's user id */
  ThunarVfsUserId uid;

  /* Owner's group id */
  ThunarVfsGroupId gid;

  /* Size in bytes */
  ThunarVfsFileSize size;

  /* time of last access */
  ThunarVfsFileTime atime;

  /* time of last modification */
  ThunarVfsFileTime mtime;

  /* time of last status change */
  ThunarVfsFileTime ctime;

  /* device id */
  ThunarVfsFileDevice device;

  /* file's mime type */
  ThunarVfsMimeInfo *mime_info;

  /* file's absolute path */
  ThunarVfsPath *path;

  /* file's custom icon (path or themed icon name) */
  gchar *custom_icon;

  /* file's display name (UTF-8) */
  gchar *display_name;
} ThunarVfsInfo;
</pre>
<p>
  The Thunar-VFS equivalent of <code class="function">stat(2)</code>, extended with
  advanced information like display name and mime type.
</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><a href="thunar-vfs-Basic-Types.html#ThunarVfsFileType">ThunarVfsFileType</a>&#160;<em class="structfield"><code>type</code></em>&#160;:&#160;8;</span></td>
<td>the file type.
</td>
</tr>
<tr>
<td>
<span class="term"><a href="thunar-vfs-Basic-Types.html#ThunarVfsFileMode">ThunarVfsFileMode</a>&#160;<em class="structfield"><code>mode</code></em>&#160;:&#160;12;</span></td>
<td>the file permissions and special mode flags.
</td>
</tr>
<tr>
<td>
<span class="term"><a href="thunar-vfs-Basic-Types.html#ThunarVfsFileFlags">ThunarVfsFileFlags</a>&#160;<em class="structfield"><code>flags</code></em>&#160;:&#160;12;</span></td>
<td>the file flags.
</td>
</tr>
<tr>
<td>
<span class="term"><a href="thunar-vfs-Basic-Types.html#ThunarVfsUserId">ThunarVfsUserId</a>&#160;<em class="structfield"><code>uid</code></em>;</span></td>
<td>the owner's user id.
</td>
</tr>
<tr>
<td>
<span class="term"><a href="thunar-vfs-Basic-Types.html#ThunarVfsGroupId">ThunarVfsGroupId</a>&#160;<em class="structfield"><code>gid</code></em>;</span></td>
<td>the owner's group id.
</td>
</tr>
<tr>
<td>
<span class="term"><a href="thunar-vfs-Basic-Types.html#ThunarVfsFileSize">ThunarVfsFileSize</a>&#160;<em class="structfield"><code>size</code></em>;</span></td>
<td>the file size in bytes.
</td>
</tr>
<tr>
<td>
<span class="term"><a href="thunar-vfs-Basic-Types.html#ThunarVfsFileTime">ThunarVfsFileTime</a>&#160;<em class="structfield"><code>atime</code></em>;</span></td>
<td>the time of last access.
</td>
</tr>
<tr>
<td>
<span class="term"><a href="thunar-vfs-Basic-Types.html#ThunarVfsFileTime">ThunarVfsFileTime</a>&#160;<em class="structfield"><code>mtime</code></em>;</span></td>
<td>the time of last modification.
</td>
</tr>
<tr>
<td>
<span class="term"><a href="thunar-vfs-Basic-Types.html#ThunarVfsFileTime">ThunarVfsFileTime</a>&#160;<em class="structfield"><code>ctime</code></em>;</span></td>
<td>the time of last status change.
</td>
</tr>
<tr>
<td>
<span class="term"><a href="thunar-vfs-Basic-Types.html#ThunarVfsFileDevice">ThunarVfsFileDevice</a>&#160;<em class="structfield"><code>device</code></em>;</span></td>
<td>the file's device.
</td>
</tr>
<tr>
<td>
<span class="term"><a href="thunar-vfs-ThunarVfsMimeInfo.html#ThunarVfsMimeInfo">ThunarVfsMimeInfo</a>&#160;*<em class="structfield"><code>mime_info</code></em>;</span></td>
<td>the file's mime type.
</td>
</tr>
<tr>
<td>
<span class="term"><a href="thunar-vfs-ThunarVfsPath.html#ThunarVfsPath">ThunarVfsPath</a>&#160;*<em class="structfield"><code>path</code></em>;</span></td>
<td>the file's path.
</td>
</tr>
<tr>
<td>
<span class="term">gchar&#160;*<em class="structfield"><code>custom_icon</code></em>;</span></td>
<td>a custom icon name or <code class="literal">NULL</code>.
</td>
</tr>
<tr>
<td>
<span class="term">gchar&#160;*<em class="structfield"><code>display_name</code></em>;</span></td>
<td>the file's display name (UTF-8).

</td>
</tr>
</tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2611105"></a><h3>
<a name="thunar-vfs-info-new-for-path"></a>thunar_vfs_info_new_for_path ()</h3>
<a class="indexterm" name="id2611113"></a><pre class="programlisting"><a href="thunar-vfs-ThunarVfsInfo.html#ThunarVfsInfo">ThunarVfsInfo</a>* thunar_vfs_info_new_for_path (<a href="thunar-vfs-ThunarVfsPath.html#ThunarVfsPath">ThunarVfsPath</a> *path,
                                             GError **error);</pre>
<p>
Queries the <a href="thunar-vfs-ThunarVfsInfo.html#ThunarVfsInfo"><span class="type">ThunarVfsInfo</span></a> for the given <em class="parameter"><code>path</code></em>. Returns the
<a href="thunar-vfs-ThunarVfsInfo.html#ThunarVfsInfo"><span class="type">ThunarVfsInfo</span></a> if the operation is successfull, else <code class="literal">NULL</code>.
In the latter case, <em class="parameter"><code>error</code></em> will be set to point to a <span class="type">GError</span>
describing the cause of the failure.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>path</code></em>&#160;:</span></td>
<td> the <a href="thunar-vfs-ThunarVfsPath.html#ThunarVfsPath"><span class="type">ThunarVfsPath</span></a> of the file whose info should be queried.
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
<td> the <a href="thunar-vfs-ThunarVfsInfo.html#ThunarVfsInfo"><span class="type">ThunarVfsInfo</span></a> for <em class="parameter"><code>path</code></em> or <code class="literal">NULL</code>.
</td>
</tr>
</tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2611322"></a><h3>
<a name="thunar-vfs-info-ref"></a>thunar_vfs_info_ref ()</h3>
<a class="indexterm" name="id2611331"></a><pre class="programlisting"><a href="thunar-vfs-ThunarVfsInfo.html#ThunarVfsInfo">ThunarVfsInfo</a>* thunar_vfs_info_ref          (<a href="thunar-vfs-ThunarVfsInfo.html#ThunarVfsInfo">ThunarVfsInfo</a> *info);</pre>
<p>
Increments the reference count on <em class="parameter"><code>info</code></em> by 1 and
returns a pointer to <em class="parameter"><code>info</code></em>.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>info</code></em>&#160;:</span></td>
<td> a <a href="thunar-vfs-ThunarVfsInfo.html#ThunarVfsInfo"><span class="type">ThunarVfsInfo</span></a>.
</td>
</tr>
<tr>
<td>
<span class="term"><span class="emphasis"><em>Returns</em></span>&#160;:</span></td>
<td> a pointer to <em class="parameter"><code>info</code></em>.
</td>
</tr>
</tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2611409"></a><h3>
<a name="thunar-vfs-info-unref"></a>thunar_vfs_info_unref ()</h3>
<a class="indexterm" name="id2611417"></a><pre class="programlisting">void        thunar_vfs_info_unref           (<a href="thunar-vfs-ThunarVfsInfo.html#ThunarVfsInfo">ThunarVfsInfo</a> *info);</pre>
<p>
Decrements the reference count on <em class="parameter"><code>info</code></em> by 1 and if
the reference count drops to zero as a result of this
operation, the <em class="parameter"><code>info</code></em> will be freed completely.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody><tr>
<td>
<span class="term"><em class="parameter"><code>info</code></em>&#160;:</span></td>
<td> a <a href="thunar-vfs-ThunarVfsInfo.html#ThunarVfsInfo"><span class="type">ThunarVfsInfo</span></a>.
</td>
</tr></tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2611480"></a><h3>
<a name="thunar-vfs-info-copy"></a>thunar_vfs_info_copy ()</h3>
<a class="indexterm" name="id2611489"></a><pre class="programlisting"><a href="thunar-vfs-ThunarVfsInfo.html#ThunarVfsInfo">ThunarVfsInfo</a>* thunar_vfs_info_copy         (const <a href="thunar-vfs-ThunarVfsInfo.html#ThunarVfsInfo">ThunarVfsInfo</a> *info);</pre>
<p>
Takes a deep copy of the <em class="parameter"><code>info</code></em> and returns
it.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>info</code></em>&#160;:</span></td>
<td> a <a href="thunar-vfs-ThunarVfsInfo.html#ThunarVfsInfo"><span class="type">ThunarVfsInfo</span></a>.
</td>
</tr>
<tr>
<td>
<span class="term"><span class="emphasis"><em>Returns</em></span>&#160;:</span></td>
<td> a deep copy of <em class="parameter"><code>info</code></em>.
</td>
</tr>
</tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2611560"></a><h3>
<a name="thunar-vfs-info-get-free-space"></a>thunar_vfs_info_get_free_space ()</h3>
<a class="indexterm" name="id2611570"></a><pre class="programlisting">gboolean    thunar_vfs_info_get_free_space  (const <a href="thunar-vfs-ThunarVfsInfo.html#ThunarVfsInfo">ThunarVfsInfo</a> *info,
                                             <a href="thunar-vfs-Basic-Types.html#ThunarVfsFileSize">ThunarVfsFileSize</a> *free_space_return);</pre>
<p>
Determines the amount of free space available on the volume on which the
file to which <em class="parameter"><code>info</code></em> refers resides. If the system is able to determine the
amount of free space, it will be placed into the location to which
<em class="parameter"><code>free_space_return</code></em> points and <code class="literal">TRUE</code> will be returned, else the function
will return <code class="literal">FALSE</code> indicating that the system is unable to determine the
amount of free space.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>info</code></em>&#160;:</span></td>
<td> a <a href="thunar-vfs-ThunarVfsInfo.html#ThunarVfsInfo"><span class="type">ThunarVfsInfo</span></a>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>free_space_return</code></em>&#160;:</span></td>
<td> return location for the amount of free space or <code class="literal">NULL</code>.
</td>
</tr>
<tr>
<td>
<span class="term"><span class="emphasis"><em>Returns</em></span>&#160;:</span></td>
<td> <code class="literal">TRUE</code> if the amount of free space could be determined, else
              <code class="literal">FALSE</code>:
</td>
</tr>
</tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2611689"></a><h3>
<a name="thunar-vfs-info-get-custom-icon"></a>thunar_vfs_info_get_custom_icon ()</h3>
<a class="indexterm" name="id2611699"></a><pre class="programlisting">const gchar* thunar_vfs_info_get_custom_icon
                                            (const <a href="thunar-vfs-ThunarVfsInfo.html#ThunarVfsInfo">ThunarVfsInfo</a> *info);</pre>
<p>
Returns the custom icon for <em class="parameter"><code>info</code></em> if there's
a custom icon, else <code class="literal">NULL</code>.
</p>
<p>
The custom icon can be a themed icon name or
an absolute path to an icon file in the local
file system.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>info</code></em>&#160;:</span></td>
<td> a <a href="thunar-vfs-ThunarVfsInfo.html#ThunarVfsInfo"><span class="type">ThunarVfsInfo</span></a>.
</td>
</tr>
<tr>
<td>
<span class="term"><span class="emphasis"><em>Returns</em></span>&#160;:</span></td>
<td> the custom icon for <em class="parameter"><code>info</code></em> or <code class="literal">NULL</code>.
</td>
</tr>
</tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2611785"></a><h3>
<a name="thunar-vfs-info-read-link"></a>thunar_vfs_info_read_link ()</h3>
<a class="indexterm" name="id2611794"></a><pre class="programlisting">gchar*      thunar_vfs_info_read_link       (const <a href="thunar-vfs-ThunarVfsInfo.html#ThunarVfsInfo">ThunarVfsInfo</a> *info,
                                             GError **error);</pre>
<p>
Reads the contents of the symbolic link to which <em class="parameter"><code>info</code></em> refers to,
like the POSIX <code class="function">readlink()</code> function. The returned string is in the
encoding used for filenames.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>info</code></em>&#160;:</span></td>
<td> a <a href="thunar-vfs-ThunarVfsInfo.html#ThunarVfsInfo"><span class="type">ThunarVfsInfo</span></a>.
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
<td> a newly allocated string with the contents of the
              symbolic link, or <code class="literal">NULL</code> if an error occurred.
</td>
</tr>
</tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2611899"></a><h3>
<a name="thunar-vfs-info-execute"></a>thunar_vfs_info_execute ()</h3>
<a class="indexterm" name="id2611908"></a><pre class="programlisting">gboolean    thunar_vfs_info_execute         (const <a href="thunar-vfs-ThunarVfsInfo.html#ThunarVfsInfo">ThunarVfsInfo</a> *info,
                                             GdkScreen *screen,
                                             GList *path_list,
                                             const gchar *working_directory,
                                             GError **error);</pre>
<p>
Executes the file referred to by <em class="parameter"><code>info</code></em>, given <em class="parameter"><code>path_list</code></em> as parameters,
on the specified <em class="parameter"><code>screen</code></em>. <em class="parameter"><code>info</code></em> may refer to either a regular,
executable file, or a <code class="filename">.desktop</code> file, whose
type is <code class="literal">Application</code>.
</p>
<p>
If <em class="parameter"><code>working_directory</code></em> is <code class="literal">NULL</code>, the directory of the first path in <em class="parameter"><code>path_list</code></em>
will be used as working directory. If <em class="parameter"><code>path_list</code></em> is also <code class="literal">NULL</code>, the directory
of <em class="parameter"><code>info</code></em> will be used.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>info</code></em>&#160;:</span></td>
<td> a <a href="thunar-vfs-ThunarVfsInfo.html#ThunarVfsInfo"><span class="type">ThunarVfsInfo</span></a>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>screen</code></em>&#160;:</span></td>
<td> a <span class="type">GdkScreen</span> or <code class="literal">NULL</code> to use the default <span class="type">GdkScreen</span>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>path_list</code></em>&#160;:</span></td>
<td> the list of <a href="thunar-vfs-ThunarVfsPath.html#ThunarVfsPath"><span class="type">ThunarVfsPath</span></a>s to give as parameters
                     to the file referred to by <em class="parameter"><code>info</code></em> on execution.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>working_directory</code></em>&#160;:</span></td>
<td> the working directory in which to execute <em class="parameter"><code>info</code></em> or <code class="literal">NULL</code>.
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
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2612311"></a><h3>
<a name="thunar-vfs-info-rename"></a>thunar_vfs_info_rename ()</h3>
<a class="indexterm" name="id2612320"></a><pre class="programlisting">gboolean    thunar_vfs_info_rename          (<a href="thunar-vfs-ThunarVfsInfo.html#ThunarVfsInfo">ThunarVfsInfo</a> *info,
                                             const gchar *name,
                                             GError **error);</pre>
<p>
Tries to rename the file referred to by <em class="parameter"><code>info</code></em> to the
new <em class="parameter"><code>name</code></em>.
</p>
<p>
The rename operation is smart in that it checks the
type of <em class="parameter"><code>info</code></em> first, and if <em class="parameter"><code>info</code></em> refers to a
<code class="filename">.desktop</code> file, the file name
won't be touched, but instead the <code class="literal">Name</code>
field of the <code class="filename">.desktop</code> will be
changed to <em class="parameter"><code>name</code></em>. Else, if <em class="parameter"><code>info</code></em> refers to a regular
file or directory, the file will be given a new
name.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>info</code></em>&#160;:</span></td>
<td> a <a href="thunar-vfs-ThunarVfsInfo.html#ThunarVfsInfo"><span class="type">ThunarVfsInfo</span></a>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>name</code></em>&#160;:</span></td>
<td> the new file name in UTF-8 encoding.
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
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2612490"></a><h3>
<a name="thunar-vfs-info-matches"></a>thunar_vfs_info_matches ()</h3>
<a class="indexterm" name="id2612499"></a><pre class="programlisting">gboolean    thunar_vfs_info_matches         (const <a href="thunar-vfs-ThunarVfsInfo.html#ThunarVfsInfo">ThunarVfsInfo</a> *a,
                                             const <a href="thunar-vfs-ThunarVfsInfo.html#ThunarVfsInfo">ThunarVfsInfo</a> *b);</pre>
<p>
Checks whether <em class="parameter"><code>a</code></em> and <em class="parameter"><code>b</code></em> refer to the same file
and share the same properties.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>a</code></em>&#160;:</span></td>
<td> a <a href="thunar-vfs-ThunarVfsInfo.html#ThunarVfsInfo"><span class="type">ThunarVfsInfo</span></a>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>b</code></em>&#160;:</span></td>
<td> a <a href="thunar-vfs-ThunarVfsInfo.html#ThunarVfsInfo"><span class="type">ThunarVfsInfo</span></a>.
</td>
</tr>
<tr>
<td>
<span class="term"><span class="emphasis"><em>Returns</em></span>&#160;:</span></td>
<td> <code class="literal">TRUE</code> if <em class="parameter"><code>a</code></em> and <em class="parameter"><code>b</code></em> match.
</td>
</tr>
</tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2612613"></a><h3>
<a name="thunar-vfs-info-list-free"></a>thunar_vfs_info_list_free ()</h3>
<a class="indexterm" name="id2612621"></a><pre class="programlisting">void        thunar_vfs_info_list_free       (GList *info_list);</pre>
<p>
Unrefs all <a href="thunar-vfs-ThunarVfsInfo.html#ThunarVfsInfo"><span class="type">ThunarVfsInfo</span></a>s in <em class="parameter"><code>info_list</code></em> and
frees the list itself.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody><tr>
<td>
<span class="term"><em class="parameter"><code>info_list</code></em>&#160;:</span></td>
<td> a list of <a href="thunar-vfs-ThunarVfsInfo.html#ThunarVfsInfo"><span class="type">ThunarVfsInfo</span></a>s.
</td>
</tr></tbody>
</table></div>
</div>
</div>
<div class="refsect1" lang="en">
<a name="id2612688"></a><h2>See Also</h2>
<p>
  <a href="thunar-vfs-Basic-Types.html" title="Basic Types">Basic Types</a>
</p>
</div>
</div>
<table class="navigation" width="100%" summary="Navigation footer" cellpadding="2" cellspacing="0"><tr valign="middle">
<td align="left"><a accesskey="p" href="thunar-vfs-ThunarVfsPath.html"><b>&lt;&lt;&#160;ThunarVfsPath</b></a></td>
<td align="right"><a accesskey="n" href="thunar-vfs-Utility-Functions.html"><b>Utility Functions&#160;&gt;&gt;</b></a></td>
</tr></table>
</body>
</html>
