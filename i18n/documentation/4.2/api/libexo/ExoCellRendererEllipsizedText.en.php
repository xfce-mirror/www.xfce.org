<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=US-ASCII">
<title>ExoCellRendererEllipsizedText</title>
<meta name="generator" content="DocBook XSL Stylesheets V1.69.1">
<link rel="start" href="index.html" title="exo Reference Manual">
<link rel="up" href="exo-widgets.html" title="Part&#160;III.&#160;Additional widgets">
<link rel="prev" href="exo-widgets.html" title="Part&#160;III.&#160;Additional widgets">
<link rel="next" href="ExoEllipsizedLabel.html" title="ExoEllipsizedLabel">
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
<td><a accesskey="p" href="exo-widgets.html"><img src="left.png" width="24" height="24" border="0" alt="Prev"></a></td>
<td><a accesskey="u" href="exo-widgets.html"><img src="up.png" width="24" height="24" border="0" alt="Up"></a></td>
<td><a accesskey="h" href="index.html"><img src="home.png" width="24" height="24" border="0" alt="Home"></a></td>
<th width="100%" align="center">exo Reference Manual</th>
<td><a accesskey="n" href="ExoEllipsizedLabel.html"><img src="right.png" width="24" height="24" border="0" alt="Next"></a></td>
</tr></table>
<div class="refentry" lang="en">
<a name="ExoCellRendererEllipsizedText"></a><div class="titlepage"></div>
<div class="refnamediv"><table width="100%"><tr>
<td valign="top">
<h2><span class="refentrytitle">ExoCellRendererEllipsizedText</span></h2>
<p>ExoCellRendererEllipsizedText &#8212; Renders text in a cell and optionally ellipsizes the text.</p>
</td>
<td valign="top" align="right"></td>
</tr></table></div>
<div class="refsynopsisdiv">
<h2>Synopsis</h2>
<pre class="synopsis">

#include &lt;exo/exo.h&gt;


            <a href="ExoCellRendererEllipsizedText.html#ExoCellRendererEllipsizedText-struct">ExoCellRendererEllipsizedText</a>;
GtkCellRenderer* <a href="ExoCellRendererEllipsizedText.html#exo-cell-renderer-ellipsized-text-new">exo_cell_renderer_ellipsized_text_new</a>
                                            (void);


</pre>
</div>
<div class="refsect1" lang="en">
<a name="id2620089"></a><h2>Object Hierarchy</h2>
<pre class="synopsis">

  GObject
   +----GtkObject
         +----GtkCellRenderer
               +----GtkCellRendererText
                     +----ExoCellRendererEllipsizedText
</pre>
</div>
<div class="refsect1" lang="en">
<a name="id2620123"></a><h2>Description</h2>
<p>
The <a href="ExoCellRendererEllipsizedText.html" title="ExoCellRendererEllipsizedText"><span class="type">ExoCellRendererEllipsizedText</span></a> renders a given text in its
cell, using the font, color and style information provided by
its properties (which are actually inherited from <span class="type">GtkCellRendererText</span>).
The text will be ellipsized if its too long and the "ellipsize"
property allows it.
</p>
<p>
<a href="ExoCellRendererEllipsizedText.html" title="ExoCellRendererEllipsizedText"><span class="type">ExoCellRendererEllipsizedText</span></a> is compatible with Gtk+ 2.5 and
above in that it automatically detects if <span class="type">GtkCellRendererText</span>
has the "ellipsize" property and reuses the built-in functionality
if available. For Gtk+ 2.4, it uses the <a href="exo-Extensions-to-Pango.html" title="Extensions to Pango">Pango Extensions</a> to
ellipsize text properly.
</p>
</div>
<div class="refsect1" lang="en">
<a name="id2620167"></a><h2>Details</h2>
<div class="refsect2" lang="en">
<a name="id2620172"></a><h3>
<a name="ExoCellRendererEllipsizedText-struct"></a>ExoCellRendererEllipsizedText</h3>
<a class="indexterm" name="id2620183"></a><pre class="programlisting">typedef struct _ExoCellRendererEllipsizedText ExoCellRendererEllipsizedText;</pre>
<p>

</p>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2620197"></a><h3>
<a name="exo-cell-renderer-ellipsized-text-new"></a>exo_cell_renderer_ellipsized_text_new ()</h3>
<a class="indexterm" name="id2620209"></a><pre class="programlisting">GtkCellRenderer* exo_cell_renderer_ellipsized_text_new
                                            (void);</pre>
<p>
Creates a new <a href="ExoCellRendererEllipsizedText.html" title="ExoCellRendererEllipsizedText"><span class="type">ExoCellRendererEllipsizedText</span></a>. Adjust how text is
drawn using object properties. Object properties can be set globally
(with <code class="function">g_object_set()</code>). Also, with <span class="type">GtkTreeViewColumn</span>, you can bind a
property to a value in a <span class="type">GtkTreeModel</span>. For example, you can bind the
"text" property on the cell renderer to a string value in the model,
thus rendering a different string in each row of the <span class="type">GtkTreeView</span>.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody><tr>
<td>
<span class="term"><span class="emphasis"><em>Returns</em></span>&#160;:</span></td>
<td> The new cell renderer.
</td>
</tr></tbody>
</table></div>
</div>
</div>
<div class="refsect1" lang="en">
<a name="id2620349"></a><h2>See Also</h2>
<p>
<a href="http://developer.gnome.org/doc/API/2.0/gtk/GtkCellRendererText.html" target="_top">GtkCellRendererText</a>, <a href="exo-Extensions-to-Pango.html" title="Extensions to Pango">Exo Pango Extensions</a>
</p>
</div>
</div>
<table class="navigation" width="100%" summary="Navigation footer" cellpadding="2" cellspacing="0"><tr valign="middle">
<td align="left"><a accesskey="p" href="exo-widgets.html"><b>&lt;&lt;&#160;Part&#160;III.&#160;Additional widgets</b></a></td>
<td align="right"><a accesskey="n" href="ExoEllipsizedLabel.html"><b>ExoEllipsizedLabel&#160;&gt;&gt;</b></a></td>
</tr></table>
</body>
</html>
