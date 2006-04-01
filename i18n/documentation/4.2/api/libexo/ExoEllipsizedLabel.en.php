<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=US-ASCII">
<title>ExoEllipsizedLabel</title>
<meta name="generator" content="DocBook XSL Stylesheets V1.69.1">
<link rel="start" href="index.html" title="exo Reference Manual">
<link rel="up" href="exo-widgets.html" title="Part&#160;III.&#160;Additional widgets">
<link rel="prev" href="ExoCellRendererEllipsizedText.html" title="ExoCellRendererEllipsizedText">
<link rel="next" href="ExoIconBar.html" title="ExoIconBar">
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
<td><a accesskey="p" href="ExoCellRendererEllipsizedText.html"><img src="left.png" width="24" height="24" border="0" alt="Prev"></a></td>
<td><a accesskey="u" href="exo-widgets.html"><img src="up.png" width="24" height="24" border="0" alt="Up"></a></td>
<td><a accesskey="h" href="index.html"><img src="home.png" width="24" height="24" border="0" alt="Home"></a></td>
<th width="100%" align="center">exo Reference Manual</th>
<td><a accesskey="n" href="ExoIconBar.html"><img src="right.png" width="24" height="24" border="0" alt="Next"></a></td>
</tr></table>
<div class="refentry" lang="en">
<a name="ExoEllipsizedLabel"></a><div class="titlepage"></div>
<div class="refnamediv"><table width="100%"><tr>
<td valign="top">
<h2><span class="refentrytitle">ExoEllipsizedLabel</span></h2>
<p>ExoEllipsizedLabel &#8212; A widget that automatically ellipsizes text</p>
</td>
<td valign="top" align="right"></td>
</tr></table></div>
<div class="refsynopsisdiv">
<h2>Synopsis</h2>
<pre class="synopsis">

#include &lt;exo/exo.h&gt;


            <a href="ExoEllipsizedLabel.html#ExoEllipsizedLabel-struct">ExoEllipsizedLabel</a>;
GtkWidget*  <a href="ExoEllipsizedLabel.html#exo-ellipsized-label-new">exo_ellipsized_label_new</a>        (const gchar *text);
<a href="exo-Extensions-to-Pango.html#ExoPangoEllipsizeMode">ExoPangoEllipsizeMode</a> <a href="ExoEllipsizedLabel.html#exo-ellipsized-label-get-ellipsize">exo_ellipsized_label_get_ellipsize</a>
                                            (<a href="ExoEllipsizedLabel.html" title="ExoEllipsizedLabel">ExoEllipsizedLabel</a> *label);
void        <a href="ExoEllipsizedLabel.html#exo-ellipsized-label-set-ellipsize">exo_ellipsized_label_set_ellipsize</a>
                                            (<a href="ExoEllipsizedLabel.html" title="ExoEllipsizedLabel">ExoEllipsizedLabel</a> *label,
                                             <a href="exo-Extensions-to-Pango.html#ExoPangoEllipsizeMode">ExoPangoEllipsizeMode</a> ellipsize);


</pre>
</div>
<div class="refsect1" lang="en">
<a name="id2620066"></a><h2>Object Hierarchy</h2>
<pre class="synopsis">

  GObject
   +----GtkObject
         +----GtkWidget
               +----GtkMisc
                     +----GtkLabel
                           +----ExoEllipsizedLabel
</pre>
</div>
<div class="refsect1" lang="en">
<a name="id2620924"></a><h2>Implemented Interfaces</h2>
<p>
ExoEllipsizedLabel implements
 AtkImplementorIface.</p>
</div>
<div class="refsect1" lang="en">
<a name="id2620940"></a><h2>Description</h2>
<p>
<a href="ExoEllipsizedLabel.html" title="ExoEllipsizedLabel"><span class="type">ExoEllipsizedLabel</span></a> extends the standard <span class="type">GtkLabel</span> class present in
Gtk+ 2.4 with the ability to automatically ellipsize text with
"...".
</p>
<p>
<a href="ExoEllipsizedLabel.html" title="ExoEllipsizedLabel"><span class="type">ExoEllipsizedLabel</span></a> automatically detects if its running with Gtk+
2.5 or above and uses the native ellipsizing support of Gtk+ 2.5
or above in that case. So its safe to use <a href="ExoEllipsizedLabel.html" title="ExoEllipsizedLabel"><span class="type">ExoEllipsizedLabel</span></a>
with every Gtk+ version above 2.4.
</p>
</div>
<div class="refsect1" lang="en">
<a name="id2621048"></a><h2>Details</h2>
<div class="refsect2" lang="en">
<a name="id2621053"></a><h3>
<a name="ExoEllipsizedLabel-struct"></a>ExoEllipsizedLabel</h3>
<a class="indexterm" name="id2621062"></a><pre class="programlisting">typedef struct _ExoEllipsizedLabel ExoEllipsizedLabel;</pre>
<p>

</p>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2621077"></a><h3>
<a name="exo-ellipsized-label-new"></a>exo_ellipsized_label_new ()</h3>
<a class="indexterm" name="id2621085"></a><pre class="programlisting">GtkWidget*  exo_ellipsized_label_new        (const gchar *text);</pre>
<p>
Creates a new <a href="ExoEllipsizedLabel.html" title="ExoEllipsizedLabel"><span class="type">ExoEllipsizedLabel</span></a> with the given
text inside it. You can pass <code class="literal">NULL</code> to get an
empty label widget.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>text</code></em>&#160;:</span></td>
<td> The text of the label.
</td>
</tr>
<tr>
<td>
<span class="term"><span class="emphasis"><em>Returns</em></span>&#160;:</span></td>
<td> The new <a href="ExoEllipsizedLabel.html" title="ExoEllipsizedLabel"><span class="type">ExoEllipsizedLabel</span></a>.
</td>
</tr>
</tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2621227"></a><h3>
<a name="exo-ellipsized-label-get-ellipsize"></a>exo_ellipsized_label_get_ellipsize ()</h3>
<a class="indexterm" name="id2621239"></a><pre class="programlisting"><a href="exo-Extensions-to-Pango.html#ExoPangoEllipsizeMode">ExoPangoEllipsizeMode</a> exo_ellipsized_label_get_ellipsize
                                            (<a href="ExoEllipsizedLabel.html" title="ExoEllipsizedLabel">ExoEllipsizedLabel</a> *label);</pre>
<p>
Returns the ellipsizing position of the <em class="parameter"><code>label</code></em>.
See <a href="ExoEllipsizedLabel.html#exo-ellipsized-label-set-ellipsize"><code class="function">exo_ellipsized_label_set_ellipsize()</code></a>.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>label</code></em>&#160;:</span></td>
<td> An <a href="ExoEllipsizedLabel.html" title="ExoEllipsizedLabel"><span class="type">ExoEllipsizedLabel</span></a>.
</td>
</tr>
<tr>
<td>
<span class="term"><span class="emphasis"><em>Returns</em></span>&#160;:</span></td>
<td> An <a href="exo-Extensions-to-Pango.html#ExoPangoEllipsizeMode"><span class="type">ExoPangoEllipsizeMode</span></a>.
</td>
</tr>
</tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2621324"></a><h3>
<a name="exo-ellipsized-label-set-ellipsize"></a>exo_ellipsized_label_set_ellipsize ()</h3>
<a class="indexterm" name="id2621336"></a><pre class="programlisting">void        exo_ellipsized_label_set_ellipsize
                                            (<a href="ExoEllipsizedLabel.html" title="ExoEllipsizedLabel">ExoEllipsizedLabel</a> *label,
                                             <a href="exo-Extensions-to-Pango.html#ExoPangoEllipsizeMode">ExoPangoEllipsizeMode</a> ellipsize);</pre>
<p>
Sets the mode used to ellipsize (add an ellipsis: "...") to the
text if there is not enough space to render the entire string.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>label</code></em>&#160;:</span></td>
<td> An <a href="ExoEllipsizedLabel.html" title="ExoEllipsizedLabel"><span class="type">ExoEllipsizedLabel</span></a>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>ellipsize</code></em>&#160;:</span></td>
<td> An <a href="exo-Extensions-to-Pango.html#ExoPangoEllipsizeMode"><span class="type">ExoPangoEllipsizeMode</span></a>.
</td>
</tr>
</tbody>
</table></div>
</div>
</div>
<div class="refsect1" lang="en">
<a name="id2621414"></a><h2>See Also</h2>
<p>
<a href="http://developer.gnome.org/doc/API/2.0/gtk/GtkLabel.html" target="_top">GtkLabel</a>, <a href="exo-Extensions-to-Pango.html" title="Extensions to Pango">Exo
Pango Extensions</a>
</p>
</div>
</div>
<table class="navigation" width="100%" summary="Navigation footer" cellpadding="2" cellspacing="0"><tr valign="middle">
<td align="left"><a accesskey="p" href="ExoCellRendererEllipsizedText.html"><b>&lt;&lt;&#160;ExoCellRendererEllipsizedText</b></a></td>
<td align="right"><a accesskey="n" href="ExoIconBar.html"><b>ExoIconBar&#160;&gt;&gt;</b></a></td>
</tr></table>
</body>
</html>
