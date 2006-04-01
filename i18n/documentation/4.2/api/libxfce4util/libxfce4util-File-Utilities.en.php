<html><head><meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"><title>File Utilities</title><meta name="generator" content="DocBook XSL Stylesheets V1.66.1"><link rel="start" href="index.html" title="libxfce4util Reference Manual"><link rel="up" href="libxfce4util-utilities.html" title="Xfce Utilities"><link rel="prev" href="libxfce4util-Resource-Config-File-Support.html" title="Resource Config File Support"><link rel="next" href="libxfce4util-Miscellaneous-Utilities.html" title="Miscellaneous Utilities"><meta name="generator" content="GTK-Doc V1.2 (XML mode)"><style type="text/css">
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
      </style></head><body bgcolor="white" text="black" link="#0000FF" vlink="#840084" alink="#0000FF"><table class="navigation" width="100%" summary="Navigation header" cellpadding="2" cellspacing="2"><tr valign="middle"><td><a accesskey="p" href="libxfce4util-Resource-Config-File-Support.html"><img src="left.png" width="24" height="24" border="0" alt="Prev"></a></td><td><a accesskey="u" href="libxfce4util-utilities.html"><img src="up.png" width="24" height="24" border="0" alt="Up"></a></td><td><a accesskey="h" href="index.html"><img src="home.png" width="24" height="24" border="0" alt="Home"></a></td><th width="100%" align="center">libxfce4util Reference Manual</th><td><a accesskey="n" href="libxfce4util-Miscellaneous-Utilities.html"><img src="right.png" width="24" height="24" border="0" alt="Next"></a></td></tr></table><div class="refentry" lang="en"><a name="libxfce4util-File-Utilities"></a><div class="titlepage"></div><div class="refnamediv"><h2><span class="refentrytitle">File Utilities</span></h2><p>File Utilities &#8212; miscellaneous file-related utility functions.</p></div><div class="refsynopsisdiv"><h2>Synopsis</h2><pre class="synopsis">

#include &lt;libxfce4util/libxfce4util.h&gt;


gboolean    <a href="libxfce4util-File-Utilities.html#xfce-mkdirhier">xfce_mkdirhier</a>                  (const gchar *whole_path,
                                             unsigned long  mode,
                                             GError **error);
</pre></div><div class="refsect1" lang="en"><a name="id2545082"></a><h2>Description</h2><p>

</p></div><div class="refsect1" lang="en"><a name="id2545092"></a><h2>Details</h2><div class="refsect2" lang="en"><a name="id2545098"></a><h3><a name="xfce-mkdirhier"></a>xfce_mkdirhier ()</h3><a class="indexterm" name="id2545108"></a><pre class="programlisting">gboolean    xfce_mkdirhier                  (const gchar *whole_path,
                                             unsigned long  mode,
                                             GError **error);</pre><p>
Creates the specified directory <i class="parameter"><tt>whole_path</tt></i>, but unlike the <tt class="function">mkdir()</tt>
function from the standard C library, if any of the parent directories
of the <i class="parameter"><tt>whole_path</tt></i> do not exists, they are created as well.
</p><p>
If the directory specified by <i class="parameter"><tt>whole_path</tt></i> already exists, this function
performs no operation and simply returns <tt class="literal">TRUE</tt>.</p><p>

</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term"><i class="parameter"><tt>whole_path</tt></i> :</span></td><td> path to the directory to create.
</td></tr><tr><td><span class="term"><i class="parameter"><tt>Param2</tt></i> :</span></td><td>
</td></tr><tr><td><span class="term"><i class="parameter"><tt>error</tt></i> :</span></td><td> location where to store GError object to, error are returned
              in the <tt class="literal">G_FILE_ERROR</tt> domain.
</td></tr><tr><td><span class="term"><span class="emphasis"><em>Returns</em></span> :</span></td><td> <tt class="literal">TRUE</tt> on success, else <tt class="literal">FALSE</tt>.

</td></tr></tbody></table></div><p>Since  4.2
</p></div></div><div class="refsect1" lang="en"><a name="id2545276"></a><h2>See Also</h2><p>
<a href="http://developer.gnome.org/doc/API/2.0/glib/glib-File-Utilities.html" target="_top">GLib File Utilities</a>
</p></div></div><table class="navigation" width="100%" summary="Navigation footer" cellpadding="2" cellspacing="0"><tr valign="middle"><td align="left"><a accesskey="p" href="libxfce4util-Resource-Config-File-Support.html"><b>&lt;&lt; Resource Config File Support</b></a></td><td align="right"><a accesskey="n" href="libxfce4util-Miscellaneous-Utilities.html"><b>Miscellaneous Utilities &gt;&gt;</b></a></td></tr></table></body></html>
