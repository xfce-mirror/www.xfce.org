<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=US-ASCII">
<title>Extensions to Gtk</title>
<meta name="generator" content="DocBook XSL Stylesheets V1.69.1">
<link rel="start" href="index.html" title="exo Reference Manual">
<link rel="up" href="exo-extensions.html" title="Part&#160;IV.&#160;Extensions to existing frameworks">
<link rel="prev" href="exo-Extensions-to-GObject.html" title="Extensions to GObject">
<link rel="next" href="exo-Extensions-to-Pango.html" title="Extensions to Pango">
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
<td><a accesskey="p" href="exo-Extensions-to-GObject.html"><img src="left.png" width="24" height="24" border="0" alt="Prev"></a></td>
<td><a accesskey="u" href="exo-extensions.html"><img src="up.png" width="24" height="24" border="0" alt="Up"></a></td>
<td><a accesskey="h" href="index.html"><img src="home.png" width="24" height="24" border="0" alt="Home"></a></td>
<th width="100%" align="center">exo Reference Manual</th>
<td><a accesskey="n" href="exo-Extensions-to-Pango.html"><img src="right.png" width="24" height="24" border="0" alt="Next"></a></td>
</tr></table>
<div class="refentry" lang="en">
<a name="exo-Extensions-to-Gtk"></a><div class="titlepage"></div>
<div class="refnamediv"><table width="100%"><tr>
<td valign="top">
<h2><span class="refentrytitle">Extensions to Gtk</span></h2>
<p>Extensions to Gtk &#8212; Miscelleanous extensions to the Gtk+ library.</p>
</td>
<td valign="top" align="right"></td>
</tr></table></div>
<div class="refsect1" lang="en">
<a name="id2660202"></a><h2>Stability Level</h2>
Stable, unless otherwise indicated
</div>
<div class="refsynopsisdiv">
<h2>Synopsis</h2>
<pre class="synopsis">

#include &lt;exo/exo.h&gt;


gpointer    <a href="exo-Extensions-to-Gtk.html#exo-gtk-object-ref-sink">exo_gtk_object_ref_sink</a>         (GtkObject *object);
void        <a href="exo-Extensions-to-Gtk.html#exo-gtk-radio-action-set-current-value">exo_gtk_radio_action_set_current_value</a>
                                            (GtkRadioAction *action,
                                             gint current_value);
</pre>
</div>
<div class="refsect1" lang="en">
<a name="id2661424"></a><h2>Description</h2>
<p>

</p>
</div>
<div class="refsect1" lang="en">
<a name="id2661433"></a><h2>Details</h2>
<div class="refsect2" lang="en">
<a name="id2661438"></a><h3>
<a name="exo-gtk-object-ref-sink"></a>exo_gtk_object_ref_sink ()</h3>
<a class="indexterm" name="id2661447"></a><pre class="programlisting">gpointer    exo_gtk_object_ref_sink         (GtkObject *object);</pre>
<p>
Helper function used to take a reference on
<em class="parameter"><code>object</code></em> and droppping the floating reference
to <em class="parameter"><code>object</code></em> (if any) atomically.
</p>
<p>
If libexo is compiled against Gtk+ 2.9.0 or
newer, this function will use <code class="function">g_object_ref_sink()</code>,
since with newer Gtk+/GObject versions, the floating
reference handling was moved to GObject. Else, this
function will expand to
</p>
<p>
</p>
<div class="informalexample"><pre class="programlisting">
g_object_ref (G_OBJECT (object));
gtk_object_sink (GTK_OBJECT (object));
</pre></div>
<p>
</p>
<p>
The caller is responsible to release the reference
on <em class="parameter"><code>object</code></em> acquire by this function call using
<code class="function">g_object_unref()</code>.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>object</code></em>&#160;:</span></td>
<td> a <span class="type">GtkObject</span>.
</td>
</tr>
<tr>
<td>
<span class="term"><span class="emphasis"><em>Returns</em></span>&#160;:</span></td>
<td> a reference to <em class="parameter"><code>object</code></em>.
</td>
</tr>
</tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2661566"></a><h3>
<a name="exo-gtk-radio-action-set-current-value"></a>exo_gtk_radio_action_set_current_value ()</h3>
<a class="indexterm" name="id2661578"></a><pre class="programlisting">void        exo_gtk_radio_action_set_current_value
                                            (GtkRadioAction *action,
                                             gint current_value);</pre>
<p>
Looks for all actions in the group to which <em class="parameter"><code>action</code></em> belongs and if
any of the actions matches the <em class="parameter"><code>current_value</code></em>, it will become the
new active action.
</p>
<p>
Else if none of the actions in <em class="parameter"><code>action</code></em>'s radio group match
the specified <em class="parameter"><code>current_value</code></em>, all actions will be deactivated and
the radio group will have no active action afterwards.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>action</code></em>&#160;:</span></td>
<td> A <span class="type">GtkRadioAction</span>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>current_value</code></em>&#160;:</span></td>
<td> the value of the <span class="type">GtkRadioAction</span> to activate.
</td>
</tr>
</tbody>
</table></div>
</div>
</div>
</div>
<table class="navigation" width="100%" summary="Navigation footer" cellpadding="2" cellspacing="0"><tr valign="middle">
<td align="left"><a accesskey="p" href="exo-Extensions-to-GObject.html"><b>&lt;&lt;&#160;Extensions to GObject</b></a></td>
<td align="right"><a accesskey="n" href="exo-Extensions-to-Pango.html"><b>Extensions to Pango&#160;&gt;&gt;</b></a></td>
</tr></table>
</body>
</html>
