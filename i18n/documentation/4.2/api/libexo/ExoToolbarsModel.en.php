<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=US-ASCII">
<title>ExoToolbarsModel</title>
<meta name="generator" content="DocBook XSL Stylesheets V1.69.1">
<link rel="start" href="index.html" title="exo Reference Manual">
<link rel="up" href="exo-toolbars.html" title="Part&#160;II.&#160;Editable Toolbars">
<link rel="prev" href="exo-toolbars.html" title="Part&#160;II.&#160;Editable Toolbars">
<link rel="next" href="ExoToolbarsEditor.html" title="ExoToolbarsEditor">
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
<td><a accesskey="p" href="exo-toolbars.html"><img src="left.png" width="24" height="24" border="0" alt="Prev"></a></td>
<td><a accesskey="u" href="exo-toolbars.html"><img src="up.png" width="24" height="24" border="0" alt="Up"></a></td>
<td><a accesskey="h" href="index.html"><img src="home.png" width="24" height="24" border="0" alt="Home"></a></td>
<th width="100%" align="center">exo Reference Manual</th>
<td><a accesskey="n" href="ExoToolbarsEditor.html"><img src="right.png" width="24" height="24" border="0" alt="Next"></a></td>
</tr></table>
<div class="refentry" lang="en">
<a name="ExoToolbarsModel"></a><div class="titlepage"></div>
<div class="refnamediv"><table width="100%"><tr>
<td valign="top">
<h2><span class="refentrytitle">ExoToolbarsModel</span></h2>
<p>ExoToolbarsModel &#8212; The toolbars backend used by <a href="ExoToolbarsView.html" title="ExoToolbarsView"><span class="type">ExoToolbarsView</span></a></p>
</td>
<td valign="top" align="right"></td>
</tr></table></div>
<div class="refsynopsisdiv">
<h2>Synopsis</h2>
<pre class="synopsis">

#include &lt;exo/exo.h&gt;


            <a href="ExoToolbarsModel.html#ExoToolbarsModel-struct">ExoToolbarsModel</a>;
enum        <a href="ExoToolbarsModel.html#ExoToolbarsModelFlags">ExoToolbarsModelFlags</a>;
#define     <a href="ExoToolbarsModel.html#EXO-TOOLBARS-ITEM-TYPE:CAPS">EXO_TOOLBARS_ITEM_TYPE</a>
<a href="ExoToolbarsModel.html" title="ExoToolbarsModel">ExoToolbarsModel</a>* <a href="ExoToolbarsModel.html#exo-toolbars-model-new">exo_toolbars_model_new</a>    (void);
void        <a href="ExoToolbarsModel.html#exo-toolbars-model-set-actions">exo_toolbars_model_set_actions</a>  (<a href="ExoToolbarsModel.html" title="ExoToolbarsModel">ExoToolbarsModel</a> *model,
                                             gchar **actions,
                                             guint n_actions);
gchar**     <a href="ExoToolbarsModel.html#exo-toolbars-model-get-actions">exo_toolbars_model_get_actions</a>  (<a href="ExoToolbarsModel.html" title="ExoToolbarsModel">ExoToolbarsModel</a> *model);
gboolean    <a href="ExoToolbarsModel.html#exo-toolbars-model-load-from-file">exo_toolbars_model_load_from_file</a>
                                            (<a href="ExoToolbarsModel.html" title="ExoToolbarsModel">ExoToolbarsModel</a> *model,
                                             const gchar *filename,
                                             GError **error);
gboolean    <a href="ExoToolbarsModel.html#exo-toolbars-model-save-to-file">exo_toolbars_model_save_to_file</a> (<a href="ExoToolbarsModel.html" title="ExoToolbarsModel">ExoToolbarsModel</a> *model,
                                             const gchar *filename,
                                             GError **error);
<a href="ExoToolbarsModel.html#ExoToolbarsModelFlags">ExoToolbarsModelFlags</a> <a href="ExoToolbarsModel.html#exo-toolbars-model-get-flags">exo_toolbars_model_get_flags</a>
                                            (<a href="ExoToolbarsModel.html" title="ExoToolbarsModel">ExoToolbarsModel</a> *model,
                                             gint toolbar_position);
void        <a href="ExoToolbarsModel.html#exo-toolbars-model-set-flags">exo_toolbars_model_set_flags</a>    (<a href="ExoToolbarsModel.html" title="ExoToolbarsModel">ExoToolbarsModel</a> *model,
                                             <a href="ExoToolbarsModel.html#ExoToolbarsModelFlags">ExoToolbarsModelFlags</a> flags,
                                             gint toolbar_position);
GtkToolbarStyle <a href="ExoToolbarsModel.html#exo-toolbars-model-get-style">exo_toolbars_model_get_style</a>
                                            (<a href="ExoToolbarsModel.html" title="ExoToolbarsModel">ExoToolbarsModel</a> *model,
                                             gint toolbar_position);
void        <a href="ExoToolbarsModel.html#exo-toolbars-model-set-style">exo_toolbars_model_set_style</a>    (<a href="ExoToolbarsModel.html" title="ExoToolbarsModel">ExoToolbarsModel</a> *model,
                                             GtkToolbarStyle style,
                                             gint toolbar_position);
void        <a href="ExoToolbarsModel.html#exo-toolbars-model-unset-style">exo_toolbars_model_unset_style</a>  (<a href="ExoToolbarsModel.html" title="ExoToolbarsModel">ExoToolbarsModel</a> *model,
                                             gint toolbar_position);
gchar*      <a href="ExoToolbarsModel.html#exo-toolbars-model-get-item-type">exo_toolbars_model_get_item_type</a>
                                            (<a href="ExoToolbarsModel.html" title="ExoToolbarsModel">ExoToolbarsModel</a> *model,
                                             GdkAtom dnd_type);
gchar*      <a href="ExoToolbarsModel.html#exo-toolbars-model-get-item-id">exo_toolbars_model_get_item_id</a>  (<a href="ExoToolbarsModel.html" title="ExoToolbarsModel">ExoToolbarsModel</a> *model,
                                             const gchar *type,
                                             const gchar *name);
gchar*      <a href="ExoToolbarsModel.html#exo-toolbars-model-get-item-data">exo_toolbars_model_get_item_data</a>
                                            (<a href="ExoToolbarsModel.html" title="ExoToolbarsModel">ExoToolbarsModel</a> *model,
                                             const gchar *type,
                                             const gchar *id);
gboolean    <a href="ExoToolbarsModel.html#exo-toolbars-model-add-item">exo_toolbars_model_add_item</a>     (<a href="ExoToolbarsModel.html" title="ExoToolbarsModel">ExoToolbarsModel</a> *model,
                                             gint toolbar_position,
                                             gint item_position,
                                             const gchar *id,
                                             const gchar *type);
void        <a href="ExoToolbarsModel.html#exo-toolbars-model-add-separator">exo_toolbars_model_add_separator</a>
                                            (<a href="ExoToolbarsModel.html" title="ExoToolbarsModel">ExoToolbarsModel</a> *model,
                                             gint toolbar_position,
                                             gint item_position);
gint        <a href="ExoToolbarsModel.html#exo-toolbars-model-add-toolbar">exo_toolbars_model_add_toolbar</a>  (<a href="ExoToolbarsModel.html" title="ExoToolbarsModel">ExoToolbarsModel</a> *model,
                                             gint toolbar_position,
                                             const gchar *name);
void        <a href="ExoToolbarsModel.html#exo-toolbars-model-move-item">exo_toolbars_model_move_item</a>    (<a href="ExoToolbarsModel.html" title="ExoToolbarsModel">ExoToolbarsModel</a> *model,
                                             gint toolbar_position,
                                             gint item_position,
                                             gint new_toolbar_position,
                                             gint new_item_position);
void        <a href="ExoToolbarsModel.html#exo-toolbars-model-remove-item">exo_toolbars_model_remove_item</a>  (<a href="ExoToolbarsModel.html" title="ExoToolbarsModel">ExoToolbarsModel</a> *model,
                                             gint toolbar_position,
                                             gint item_position);
void        <a href="ExoToolbarsModel.html#exo-toolbars-model-remove-toolbar">exo_toolbars_model_remove_toolbar</a>
                                            (<a href="ExoToolbarsModel.html" title="ExoToolbarsModel">ExoToolbarsModel</a> *model,
                                             gint toolbar_position);
gint        <a href="ExoToolbarsModel.html#exo-toolbars-model-n-items">exo_toolbars_model_n_items</a>      (<a href="ExoToolbarsModel.html" title="ExoToolbarsModel">ExoToolbarsModel</a> *model,
                                             gint toolbar_position);
void        <a href="ExoToolbarsModel.html#exo-toolbars-model-item-nth">exo_toolbars_model_item_nth</a>     (<a href="ExoToolbarsModel.html" title="ExoToolbarsModel">ExoToolbarsModel</a> *model,
                                             gint toolbar_position,
                                             gint item_position,
                                             gboolean *is_separator,
                                             const gchar **id,
                                             const gchar **type);
gint        <a href="ExoToolbarsModel.html#exo-toolbars-model-n-toolbars">exo_toolbars_model_n_toolbars</a>   (<a href="ExoToolbarsModel.html" title="ExoToolbarsModel">ExoToolbarsModel</a> *model);
const gchar* <a href="ExoToolbarsModel.html#exo-toolbars-model-toolbar-nth">exo_toolbars_model_toolbar_nth</a> (<a href="ExoToolbarsModel.html" title="ExoToolbarsModel">ExoToolbarsModel</a> *model,
                                             gint toolbar_position);


</pre>
</div>
<div class="refsect1" lang="en">
<a name="id2602611"></a><h2>Object Hierarchy</h2>
<pre class="synopsis">

  GObject
   +----ExoToolbarsModel
</pre>
</div>
<div class="refsect1" lang="en">
<a name="id2602628"></a><h2>Signal Prototypes</h2>
<pre class="synopsis">

"<a href="ExoToolbarsModel.html#ExoToolbarsModel-get-item-data">get-item-data</a>"
            gchar*      user_function      (<a href="ExoToolbarsModel.html" title="ExoToolbarsModel">ExoToolbarsModel</a> *arg0,
                                            gchar *arg1,
                                            gchar *arg2,
                                            gpointer user_data);
"<a href="ExoToolbarsModel.html#ExoToolbarsModel-get-item-id">get-item-id</a>"
            gchar*      user_function      (<a href="ExoToolbarsModel.html" title="ExoToolbarsModel">ExoToolbarsModel</a> *arg0,
                                            gchar *arg1,
                                            gchar *arg2,
                                            gpointer user_data);
"<a href="ExoToolbarsModel.html#ExoToolbarsModel-get-item-type">get-item-type</a>"
            gchar*      user_function      (<a href="ExoToolbarsModel.html" title="ExoToolbarsModel">ExoToolbarsModel</a> *arg0,
                                            gpointer arg1,
                                            gpointer user_data);
"<a href="ExoToolbarsModel.html#ExoToolbarsModel-item-added">item-added</a>"
            void        user_function      (<a href="ExoToolbarsModel.html" title="ExoToolbarsModel">ExoToolbarsModel</a> *model,
                                            gint toolbar_position,
                                            gint item_position,
                                            gpointer user_data);
"<a href="ExoToolbarsModel.html#ExoToolbarsModel-item-removed">item-removed</a>"
            void        user_function      (<a href="ExoToolbarsModel.html" title="ExoToolbarsModel">ExoToolbarsModel</a> *model,
                                            gint toolbar_position,
                                            gint item_position,
                                            gpointer user_data);
"<a href="ExoToolbarsModel.html#ExoToolbarsModel-toolbar-added">toolbar-added</a>"
            void        user_function      (<a href="ExoToolbarsModel.html" title="ExoToolbarsModel">ExoToolbarsModel</a> *model,
                                            gint toolbar_position,
                                            gpointer user_data);
"<a href="ExoToolbarsModel.html#ExoToolbarsModel-toolbar-changed">toolbar-changed</a>"
            void        user_function      (<a href="ExoToolbarsModel.html" title="ExoToolbarsModel">ExoToolbarsModel</a> *model,
                                            gint toolbar_position,
                                            gpointer user_data);
"<a href="ExoToolbarsModel.html#ExoToolbarsModel-toolbar-removed">toolbar-removed</a>"
            void        user_function      (<a href="ExoToolbarsModel.html" title="ExoToolbarsModel">ExoToolbarsModel</a> *model,
                                            gint toolbar_position,
                                            gpointer user_data);
</pre>
</div>
<div class="refsect1" lang="en">
<a name="id2603036"></a><h2>Description</h2>
<p>
The <a href="ExoToolbarsModel.html" title="ExoToolbarsModel"><span class="type">ExoToolbarsModel</span></a> class includes the basic functionality
to manage editable toolbars.
</p>
</div>
<div class="refsect1" lang="en">
<a name="id2603052"></a><h2>Details</h2>
<div class="refsect2" lang="en">
<a name="id2603058"></a><h3>
<a name="ExoToolbarsModel-struct"></a>ExoToolbarsModel</h3>
<a class="indexterm" name="id2603066"></a><pre class="programlisting">typedef struct _ExoToolbarsModel ExoToolbarsModel;</pre>
<p>

</p>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2603081"></a><h3>
<a name="ExoToolbarsModelFlags"></a>enum ExoToolbarsModelFlags</h3>
<a class="indexterm" name="id2603090"></a><pre class="programlisting">typedef enum
{
  EXO_TOOLBARS_MODEL_NOT_REMOVABLE      = 1 &lt;&lt; 0,
  EXO_TOOLBARS_MODEL_ACCEPT_ITEMS_ONLY  = 1 &lt;&lt; 1,
  EXO_TOOLBARS_MODEL_OVERRIDE_STYLE     = 1 &lt;&lt; 2,
} ExoToolbarsModelFlags;
</pre>
<p>

</p>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2603104"></a><h3>
<a name="EXO-TOOLBARS-ITEM-TYPE:CAPS"></a>EXO_TOOLBARS_ITEM_TYPE</h3>
<a class="indexterm" name="id2603112"></a><pre class="programlisting">#define EXO_TOOLBARS_ITEM_TYPE "application/x-exo-toolbars-item"
</pre>
<p>

</p>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2603126"></a><h3>
<a name="exo-toolbars-model-new"></a>exo_toolbars_model_new ()</h3>
<a class="indexterm" name="id2603134"></a><pre class="programlisting"><a href="ExoToolbarsModel.html" title="ExoToolbarsModel">ExoToolbarsModel</a>* exo_toolbars_model_new    (void);</pre>
<p>
Creates a new <a href="ExoToolbarsModel.html" title="ExoToolbarsModel"><span class="type">ExoToolbarsModel</span></a> with a reference count
of one.
</p>
<p>
You need to call <a href="ExoToolbarsModel.html#exo-toolbars-model-set-actions"><code class="function">exo_toolbars_model_set_actions()</code></a> first, after
you created an <a href="ExoToolbarsModel.html" title="ExoToolbarsModel"><span class="type">ExoToolbarsModel</span></a> to set the list of actions,
that should be available from the toolbars.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody><tr>
<td>
<span class="term"><span class="emphasis"><em>Returns</em></span>&#160;:</span></td>
<td> A newly created <a href="ExoToolbarsModel.html" title="ExoToolbarsModel"><span class="type">ExoToolbarsModel</span></a>.
</td>
</tr></tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2603205"></a><h3>
<a name="exo-toolbars-model-set-actions"></a>exo_toolbars_model_set_actions ()</h3>
<a class="indexterm" name="id2603283"></a><pre class="programlisting">void        exo_toolbars_model_set_actions  (<a href="ExoToolbarsModel.html" title="ExoToolbarsModel">ExoToolbarsModel</a> *model,
                                             gchar **actions,
                                             guint n_actions);</pre>
<p>
Specifies the list of valid actions for <em class="parameter"><code>model</code></em>. <em class="parameter"><code>model</code></em> will only
manage actions that are specified in this list. This function
should be called right after you created <em class="parameter"><code>model</code></em>.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>model</code></em>&#160;:</span></td>
<td> An <a href="ExoToolbarsModel.html" title="ExoToolbarsModel"><span class="type">ExoToolbarsModel</span></a>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>actions</code></em>&#160;:</span></td>
<td> A string array with action names.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>n_actions</code></em>&#160;:</span></td>
<td> The number of strings in <em class="parameter"><code>actions</code></em>.
</td>
</tr>
</tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2603396"></a><h3>
<a name="exo-toolbars-model-get-actions"></a>exo_toolbars_model_get_actions ()</h3>
<a class="indexterm" name="id2603405"></a><pre class="programlisting">gchar**     exo_toolbars_model_get_actions  (<a href="ExoToolbarsModel.html" title="ExoToolbarsModel">ExoToolbarsModel</a> *model);</pre>
<p>
Returns the list of valid actions for <em class="parameter"><code>model</code></em>.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>model</code></em>&#160;:</span></td>
<td> An <a href="ExoToolbarsModel.html" title="ExoToolbarsModel"><span class="type">ExoToolbarsModel</span></a>.
</td>
</tr>
<tr>
<td>
<span class="term"><span class="emphasis"><em>Returns</em></span>&#160;:</span></td>
<td> The list of valid actions for <em class="parameter"><code>model</code></em>.
</td>
</tr>
</tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2603478"></a><h3>
<a name="exo-toolbars-model-load-from-file"></a>exo_toolbars_model_load_from_file ()</h3>
<a class="indexterm" name="id2603490"></a><pre class="programlisting">gboolean    exo_toolbars_model_load_from_file
                                            (<a href="ExoToolbarsModel.html" title="ExoToolbarsModel">ExoToolbarsModel</a> *model,
                                             const gchar *filename,
                                             GError **error);</pre>
<p>
Parses a file containing a toolbars UI definition and merges it with
the current contents of <em class="parameter"><code>model</code></em>.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>model</code></em>&#160;:</span></td>
<td> An <a href="ExoToolbarsModel.html" title="ExoToolbarsModel"><span class="type">ExoToolbarsModel</span></a>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>filename</code></em>&#160;:</span></td>
<td> The name of the file to parse.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>error</code></em>&#160;:</span></td>
<td> Return location for an error or <code class="literal">NULL</code>.
</td>
</tr>
<tr>
<td>
<span class="term"><span class="emphasis"><em>Returns</em></span>&#160;:</span></td>
<td> <code class="literal">TRUE</code> if the data was successfully loaded from the file
              specified by <em class="parameter"><code>filename</code></em>, else <code class="literal">FALSE</code>.
</td>
</tr>
</tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2603618"></a><h3>
<a name="exo-toolbars-model-save-to-file"></a>exo_toolbars_model_save_to_file ()</h3>
<a class="indexterm" name="id2603627"></a><pre class="programlisting">gboolean    exo_toolbars_model_save_to_file (<a href="ExoToolbarsModel.html" title="ExoToolbarsModel">ExoToolbarsModel</a> *model,
                                             const gchar *filename,
                                             GError **error);</pre>
<p>
Stores the UI definition of the contents of <em class="parameter"><code>model</code></em> to the file
specified by <em class="parameter"><code>filename</code></em>.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>model</code></em>&#160;:</span></td>
<td> An <a href="ExoToolbarsModel.html" title="ExoToolbarsModel"><span class="type">ExoToolbarsModel</span></a>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>filename</code></em>&#160;:</span></td>
<td> The name of the file to save to.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>error</code></em>&#160;:</span></td>
<td> The return location for an error or <code class="literal">NULL</code>.
</td>
</tr>
<tr>
<td>
<span class="term"><span class="emphasis"><em>Returns</em></span>&#160;:</span></td>
<td> <code class="literal">TRUE</code> if saving was successfully, else <code class="literal">FALSE</code> is
              returned.
</td>
</tr>
</tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2603757"></a><h3>
<a name="exo-toolbars-model-get-flags"></a>exo_toolbars_model_get_flags ()</h3>
<a class="indexterm" name="id2603766"></a><pre class="programlisting"><a href="ExoToolbarsModel.html#ExoToolbarsModelFlags">ExoToolbarsModelFlags</a> exo_toolbars_model_get_flags
                                            (<a href="ExoToolbarsModel.html" title="ExoToolbarsModel">ExoToolbarsModel</a> *model,
                                             gint toolbar_position);</pre>
<p>
Returns the <a href="ExoToolbarsModel.html#ExoToolbarsModelFlags"><span class="type">ExoToolbarsModelFlags</span></a> associated with the 
toolbar at <em class="parameter"><code>toolbar_position</code></em>.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>model</code></em>&#160;:</span></td>
<td> An <a href="ExoToolbarsModel.html" title="ExoToolbarsModel"><span class="type">ExoToolbarsModel</span></a>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>toolbar_position</code></em>&#160;:</span></td>
<td> The index of a toolbar in <em class="parameter"><code>model</code></em>.
</td>
</tr>
<tr>
<td>
<span class="term"><span class="emphasis"><em>Returns</em></span>&#160;:</span></td>
<td> The <a href="ExoToolbarsModel.html#ExoToolbarsModelFlags"><span class="type">ExoToolbarsModelFlags</span></a> associated
              with <em class="parameter"><code>toolbar_position</code></em>.
</td>
</tr>
</tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2603943"></a><h3>
<a name="exo-toolbars-model-set-flags"></a>exo_toolbars_model_set_flags ()</h3>
<a class="indexterm" name="id2603952"></a><pre class="programlisting">void        exo_toolbars_model_set_flags    (<a href="ExoToolbarsModel.html" title="ExoToolbarsModel">ExoToolbarsModel</a> *model,
                                             <a href="ExoToolbarsModel.html#ExoToolbarsModelFlags">ExoToolbarsModelFlags</a> flags,
                                             gint toolbar_position);</pre>
<p>
Changes the <a href="ExoToolbarsModel.html#ExoToolbarsModelFlags"><span class="type">ExoToolbarsModelFlags</span></a> associated with the
toolbar at <em class="parameter"><code>toolbar_position</code></em> to the value of <em class="parameter"><code>flags</code></em>.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>model</code></em>&#160;:</span></td>
<td> An <a href="ExoToolbarsModel.html" title="ExoToolbarsModel"><span class="type">ExoToolbarsModel</span></a>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>flags</code></em>&#160;:</span></td>
<td> The new flags for <em class="parameter"><code>toolbar_position</code></em>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>toolbar_position</code></em>&#160;:</span></td>
<td> The index of a toolbar in <em class="parameter"><code>model</code></em>.
</td>
</tr>
</tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2604138"></a><h3>
<a name="exo-toolbars-model-get-style"></a>exo_toolbars_model_get_style ()</h3>
<a class="indexterm" name="id2604147"></a><pre class="programlisting">GtkToolbarStyle exo_toolbars_model_get_style
                                            (<a href="ExoToolbarsModel.html" title="ExoToolbarsModel">ExoToolbarsModel</a> *model,
                                             gint toolbar_position);</pre>
<p>
Returns the overridden <span class="type">GtkToolbarStyle</span> for the toolbar
at <em class="parameter"><code>toolbar_position</code></em>. Should only be used if
<code class="literal">EXO_TOOLBARS_MODEL_OVERRIDE_STYLE</code> is set for the
toolbar.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>model</code></em>&#160;:</span></td>
<td> An <a href="ExoToolbarsModel.html" title="ExoToolbarsModel"><span class="type">ExoToolbarsModel</span></a>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>toolbar_position</code></em>&#160;:</span></td>
<td> The index of a toolbar in <em class="parameter"><code>model</code></em>.
</td>
</tr>
<tr>
<td>
<span class="term"><span class="emphasis"><em>Returns</em></span>&#160;:</span></td>
<td> The <span class="type">GtkToolbarStyle</span> associated with
              <em class="parameter"><code>toolbar_position</code></em>.
</td>
</tr>
</tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2604261"></a><h3>
<a name="exo-toolbars-model-set-style"></a>exo_toolbars_model_set_style ()</h3>
<a class="indexterm" name="id2604269"></a><pre class="programlisting">void        exo_toolbars_model_set_style    (<a href="ExoToolbarsModel.html" title="ExoToolbarsModel">ExoToolbarsModel</a> *model,
                                             GtkToolbarStyle style,
                                             gint toolbar_position);</pre>
<p>
Sets the style to use for a particular toolbar in <em class="parameter"><code>model</code></em>. You can
undo the effect of this function by calling
<a href="ExoToolbarsModel.html#exo-toolbars-model-unset-style"><code class="function">exo_toolbars_model_unset_style()</code></a>.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>model</code></em>&#160;:</span></td>
<td> An <a href="ExoToolbarsModel.html" title="ExoToolbarsModel"><span class="type">ExoToolbarsModel</span></a>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>style</code></em>&#160;:</span></td>
<td> A <span class="type">GtkToolbarStyle</span>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>toolbar_position</code></em>&#160;:</span></td>
<td> The index of a toolbar in <em class="parameter"><code>model</code></em>.
</td>
</tr>
</tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2604388"></a><h3>
<a name="exo-toolbars-model-unset-style"></a>exo_toolbars_model_unset_style ()</h3>
<a class="indexterm" name="id2604397"></a><pre class="programlisting">void        exo_toolbars_model_unset_style  (<a href="ExoToolbarsModel.html" title="ExoToolbarsModel">ExoToolbarsModel</a> *model,
                                             gint toolbar_position);</pre>
<p>
Undoes the effect of <a href="ExoToolbarsModel.html#exo-toolbars-model-unset-style"><code class="function">exo_toolbars_model_unset_style()</code></a> and resets
the style of the specified toolbar to the system default.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>model</code></em>&#160;:</span></td>
<td> An <a href="ExoToolbarsModel.html" title="ExoToolbarsModel"><span class="type">ExoToolbarsModel</span></a>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>toolbar_position</code></em>&#160;:</span></td>
<td> The index of a toolbar in <em class="parameter"><code>model</code></em>.
</td>
</tr>
</tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2604483"></a><h3>
<a name="exo-toolbars-model-get-item-type"></a>exo_toolbars_model_get_item_type ()</h3>
<a class="indexterm" name="id2604494"></a><pre class="programlisting">gchar*      exo_toolbars_model_get_item_type
                                            (<a href="ExoToolbarsModel.html" title="ExoToolbarsModel">ExoToolbarsModel</a> *model,
                                             GdkAtom dnd_type);</pre>
<p>
Return value :</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>model</code></em>&#160;:</span></td>
<td> An <a href="ExoToolbarsModel.html" title="ExoToolbarsModel"><span class="type">ExoToolbarsModel</span></a>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>dnd_type</code></em>&#160;:</span></td>
<td>
</td>
</tr>
<tr>
<td>
<span class="term"><span class="emphasis"><em>Returns</em></span>&#160;:</span></td>
<td>


</td>
</tr>
</tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2604574"></a><h3>
<a name="exo-toolbars-model-get-item-id"></a>exo_toolbars_model_get_item_id ()</h3>
<a class="indexterm" name="id2604584"></a><pre class="programlisting">gchar*      exo_toolbars_model_get_item_id  (<a href="ExoToolbarsModel.html" title="ExoToolbarsModel">ExoToolbarsModel</a> *model,
                                             const gchar *type,
                                             const gchar *name);</pre>
<p>
Return value :</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>model</code></em>&#160;:</span></td>
<td> An <a href="ExoToolbarsModel.html" title="ExoToolbarsModel"><span class="type">ExoToolbarsModel</span></a>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>type</code></em>&#160;:</span></td>
<td>
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>name</code></em>&#160;:</span></td>
<td>
</td>
</tr>
<tr>
<td>
<span class="term"><span class="emphasis"><em>Returns</em></span>&#160;:</span></td>
<td>


</td>
</tr>
</tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2604683"></a><h3>
<a name="exo-toolbars-model-get-item-data"></a>exo_toolbars_model_get_item_data ()</h3>
<a class="indexterm" name="id2604695"></a><pre class="programlisting">gchar*      exo_toolbars_model_get_item_data
                                            (<a href="ExoToolbarsModel.html" title="ExoToolbarsModel">ExoToolbarsModel</a> *model,
                                             const gchar *type,
                                             const gchar *id);</pre>
<p>
Return value :</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>model</code></em>&#160;:</span></td>
<td> An <a href="ExoToolbarsModel.html" title="ExoToolbarsModel"><span class="type">ExoToolbarsModel</span></a>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>type</code></em>&#160;:</span></td>
<td>
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>id</code></em>&#160;:</span></td>
<td>
</td>
</tr>
<tr>
<td>
<span class="term"><span class="emphasis"><em>Returns</em></span>&#160;:</span></td>
<td>


</td>
</tr>
</tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2604794"></a><h3>
<a name="exo-toolbars-model-add-item"></a>exo_toolbars_model_add_item ()</h3>
<a class="indexterm" name="id2604803"></a><pre class="programlisting">gboolean    exo_toolbars_model_add_item     (<a href="ExoToolbarsModel.html" title="ExoToolbarsModel">ExoToolbarsModel</a> *model,
                                             gint toolbar_position,
                                             gint item_position,
                                             const gchar *id,
                                             const gchar *type);</pre>
<p>
Adds a new toolbar item with the specified <em class="parameter"><code>type</code></em> and <em class="parameter"><code>id</code></em> to <em class="parameter"><code>model</code></em>,
where <em class="parameter"><code>id</code></em> has to be a valid action name for <em class="parameter"><code>model</code></em>, that was previously
set with <a href="ExoToolbarsModel.html#exo-toolbars-model-set-actions"><code class="function">exo_toolbars_model_set_actions()</code></a>.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>model</code></em>&#160;:</span></td>
<td> An <a href="ExoToolbarsModel.html" title="ExoToolbarsModel"><span class="type">ExoToolbarsModel</span></a>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>toolbar_position</code></em>&#160;:</span></td>
<td> The index of toolbar in <em class="parameter"><code>model</code></em>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>item_position</code></em>&#160;:</span></td>
<td> The position in the specified toolbar or -1.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>id</code></em>&#160;:</span></td>
<td> The identifier of the new item.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>type</code></em>&#160;:</span></td>
<td> The type of the new item.
</td>
</tr>
<tr>
<td>
<span class="term"><span class="emphasis"><em>Returns</em></span>&#160;:</span></td>
<td> <code class="literal">TRUE</code> if the item was added successfully, else <code class="literal">FALSE</code>.
</td>
</tr>
</tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2605132"></a><h3>
<a name="exo-toolbars-model-add-separator"></a>exo_toolbars_model_add_separator ()</h3>
<a class="indexterm" name="id2605144"></a><pre class="programlisting">void        exo_toolbars_model_add_separator
                                            (<a href="ExoToolbarsModel.html" title="ExoToolbarsModel">ExoToolbarsModel</a> *model,
                                             gint toolbar_position,
                                             gint item_position);</pre>
<p>
Adds a new separator item to the specified toolbar in <em class="parameter"><code>model</code></em>. If
you specify -1 for <em class="parameter"><code>item_position</code></em>, the separator will be appended
to the toolbar, else it will be inserted at the specified <em class="parameter"><code>item_position</code></em>.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>model</code></em>&#160;:</span></td>
<td> An <a href="ExoToolbarsModel.html" title="ExoToolbarsModel"><span class="type">ExoToolbarsModel</span></a>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>toolbar_position</code></em>&#160;:</span></td>
<td> The index of a toolbar in <em class="parameter"><code>model</code></em>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>item_position</code></em>&#160;:</span></td>
<td> The position in the specified toolbar or -1.
</td>
</tr>
</tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2605256"></a><h3>
<a name="exo-toolbars-model-add-toolbar"></a>exo_toolbars_model_add_toolbar ()</h3>
<a class="indexterm" name="id2605266"></a><pre class="programlisting">gint        exo_toolbars_model_add_toolbar  (<a href="ExoToolbarsModel.html" title="ExoToolbarsModel">ExoToolbarsModel</a> *model,
                                             gint toolbar_position,
                                             const gchar *name);</pre>
<p>
Adds a new toolbar to <em class="parameter"><code>model</code></em>. If you specify -1 for <em class="parameter"><code>toolbar_position</code></em>,
the toolbar will be appended to <em class="parameter"><code>model</code></em>; else the toolbar will be
inserted at the specified position. Emits the ::toolbar-added
signal.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>model</code></em>&#160;:</span></td>
<td> An <a href="ExoToolbarsModel.html" title="ExoToolbarsModel"><span class="type">ExoToolbarsModel</span></a>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>toolbar_position</code></em>&#160;:</span></td>
<td> Where to insert the new toolbar in <em class="parameter"><code>model</code></em>
                     or -1 to append the toolbar.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>name</code></em>&#160;:</span></td>
<td> The name of the new toolbar.
</td>
</tr>
<tr>
<td>
<span class="term"><span class="emphasis"><em>Returns</em></span>&#160;:</span></td>
<td> The real position of the new toolbar in <em class="parameter"><code>model</code></em>.
</td>
</tr>
</tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2605395"></a><h3>
<a name="exo-toolbars-model-move-item"></a>exo_toolbars_model_move_item ()</h3>
<a class="indexterm" name="id2605403"></a><pre class="programlisting">void        exo_toolbars_model_move_item    (<a href="ExoToolbarsModel.html" title="ExoToolbarsModel">ExoToolbarsModel</a> *model,
                                             gint toolbar_position,
                                             gint item_position,
                                             gint new_toolbar_position,
                                             gint new_item_position);</pre>
<p>
Moves an item to another position. The move operation
is done by first removing the specified item and afterwards
readding the item at the new position. Therefore, this
functions emits the ::item-removed and ::item-added
signals.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>model</code></em>&#160;:</span></td>
<td> An <a href="ExoToolbarsModel.html" title="ExoToolbarsModel"><span class="type">ExoToolbarsModel</span></a>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>toolbar_position</code></em>&#160;:</span></td>
<td> Old toolbar index.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>item_position</code></em>&#160;:</span></td>
<td> Old item index.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>new_toolbar_position</code></em>&#160;:</span></td>
<td> New toolbar index.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>new_item_position</code></em>&#160;:</span></td>
<td> New item index.
</td>
</tr>
</tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2605529"></a><h3>
<a name="exo-toolbars-model-remove-item"></a>exo_toolbars_model_remove_item ()</h3>
<a class="indexterm" name="id2605539"></a><pre class="programlisting">void        exo_toolbars_model_remove_item  (<a href="ExoToolbarsModel.html" title="ExoToolbarsModel">ExoToolbarsModel</a> *model,
                                             gint toolbar_position,
                                             gint item_position);</pre>
<p>
Removes the toolbar item at <em class="parameter"><code>item_position</code></em> from the toolbar
<em class="parameter"><code>toolbar_position</code></em> in <em class="parameter"><code>model</code></em> and emits the ::item-removed
signal.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>model</code></em>&#160;:</span></td>
<td> An <a href="ExoToolbarsModel.html" title="ExoToolbarsModel"><span class="type">ExoToolbarsModel</span></a>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>toolbar_position</code></em>&#160;:</span></td>
<td> A toolbar index.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>item_position</code></em>&#160;:</span></td>
<td> The index of the item to remove.
</td>
</tr>
</tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2605714"></a><h3>
<a name="exo-toolbars-model-remove-toolbar"></a>exo_toolbars_model_remove_toolbar ()</h3>
<a class="indexterm" name="id2605725"></a><pre class="programlisting">void        exo_toolbars_model_remove_toolbar
                                            (<a href="ExoToolbarsModel.html" title="ExoToolbarsModel">ExoToolbarsModel</a> *model,
                                             gint toolbar_position);</pre>
<p>
Removes the specified toolbar from <em class="parameter"><code>model</code></em> and emits
the ::toolbar-removed signal.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>model</code></em>&#160;:</span></td>
<td> A <a href="ExoToolbarsModel.html" title="ExoToolbarsModel"><span class="type">ExoToolbarsModel</span></a>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>toolbar_position</code></em>&#160;:</span></td>
<td> The index of a toolbar in <em class="parameter"><code>model</code></em>.
</td>
</tr>
</tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2605877"></a><h3>
<a name="exo-toolbars-model-n-items"></a>exo_toolbars_model_n_items ()</h3>
<a class="indexterm" name="id2605885"></a><pre class="programlisting">gint        exo_toolbars_model_n_items      (<a href="ExoToolbarsModel.html" title="ExoToolbarsModel">ExoToolbarsModel</a> *model,
                                             gint toolbar_position);</pre>
<p>
Returns the number of items in the specified toolbar.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>model</code></em>&#160;:</span></td>
<td> An <a href="ExoToolbarsModel.html" title="ExoToolbarsModel"><span class="type">ExoToolbarsModel</span></a>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>toolbar_position</code></em>&#160;:</span></td>
<td> The index of a toolbar in <em class="parameter"><code>model</code></em>.
</td>
</tr>
<tr>
<td>
<span class="term"><span class="emphasis"><em>Returns</em></span>&#160;:</span></td>
<td> The number of items in the specified toolbar.
</td>
</tr>
</tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2605973"></a><h3>
<a name="exo-toolbars-model-item-nth"></a>exo_toolbars_model_item_nth ()</h3>
<a class="indexterm" name="id2605981"></a><pre class="programlisting">void        exo_toolbars_model_item_nth     (<a href="ExoToolbarsModel.html" title="ExoToolbarsModel">ExoToolbarsModel</a> *model,
                                             gint toolbar_position,
                                             gint item_position,
                                             gboolean *is_separator,
                                             const gchar **id,
                                             const gchar **type);</pre>
<p>
Queries the properites of the toolbar item at <em class="parameter"><code>item_position</code></em> in toolbar
<em class="parameter"><code>toolbar_position</code></em>.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>model</code></em>&#160;:</span></td>
<td> An <a href="ExoToolbarsModel.html" title="ExoToolbarsModel"><span class="type">ExoToolbarsModel</span></a>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>toolbar_position</code></em>&#160;:</span></td>
<td> The index of a toolbar in <em class="parameter"><code>model</code></em>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>item_position</code></em>&#160;:</span></td>
<td> The index of an item in the specified toolbar.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>is_separator</code></em>&#160;:</span></td>
<td> Return location for the separator setting or <code class="literal">NULL</code>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>id</code></em>&#160;:</span></td>
<td> Return location for the item id or <code class="literal">NULL</code>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>type</code></em>&#160;:</span></td>
<td> Return location for the item type or <code class="literal">NULL</code>.
</td>
</tr>
</tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2606232"></a><h3>
<a name="exo-toolbars-model-n-toolbars"></a>exo_toolbars_model_n_toolbars ()</h3>
<a class="indexterm" name="id2606242"></a><pre class="programlisting">gint        exo_toolbars_model_n_toolbars   (<a href="ExoToolbarsModel.html" title="ExoToolbarsModel">ExoToolbarsModel</a> *model);</pre>
<p>
Returns the number of toolbars currently
managed by <em class="parameter"><code>model</code></em>.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>model</code></em>&#160;:</span></td>
<td> An <a href="ExoToolbarsModel.html" title="ExoToolbarsModel"><span class="type">ExoToolbarsModel</span></a>.
</td>
</tr>
<tr>
<td>
<span class="term"><span class="emphasis"><em>Returns</em></span>&#160;:</span></td>
<td> The number of toolbars in <em class="parameter"><code>model</code></em>.
</td>
</tr>
</tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2606314"></a><h3>
<a name="exo-toolbars-model-toolbar-nth"></a>exo_toolbars_model_toolbar_nth ()</h3>
<a class="indexterm" name="id2606324"></a><pre class="programlisting">const gchar* exo_toolbars_model_toolbar_nth (<a href="ExoToolbarsModel.html" title="ExoToolbarsModel">ExoToolbarsModel</a> *model,
                                             gint toolbar_position);</pre>
<p>
Returns the name of the toolbar at <em class="parameter"><code>toolbar_position</code></em> in
<em class="parameter"><code>model</code></em>.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>model</code></em>&#160;:</span></td>
<td> An <a href="ExoToolbarsModel.html" title="ExoToolbarsModel"><span class="type">ExoToolbarsModel</span></a>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>toolbar_position</code></em>&#160;:</span></td>
<td> The index of a toolbar in <em class="parameter"><code>model</code></em>.
</td>
</tr>
<tr>
<td>
<span class="term"><span class="emphasis"><em>Returns</em></span>&#160;:</span></td>
<td> The name of the toolbar at <em class="parameter"><code>toolbar_position</code></em>
              in <em class="parameter"><code>model</code></em>.
</td>
</tr>
</tbody>
</table></div>
</div>
</div>
<div class="refsect1" lang="en">
<a name="id2606434"></a><h2>Signals</h2>
<div class="refsect2" lang="en">
<a name="id2606439"></a><h3>
<a name="ExoToolbarsModel-get-item-data"></a>The "get-item-data" signal</h3>
<pre class="programlisting">gchar*      user_function                  (<a href="ExoToolbarsModel.html" title="ExoToolbarsModel">ExoToolbarsModel</a> *arg0,
                                            gchar *arg1,
                                            gchar *arg2,
                                            gpointer user_data);</pre>
<p>
</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody><tr>
<td>
<span class="term"><em class="parameter"><code>user_data</code></em>&#160;:</span></td>
<td>user data set when the signal handler was connected.</td>
</tr></tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2606506"></a><h3>
<a name="ExoToolbarsModel-get-item-id"></a>The "get-item-id" signal</h3>
<pre class="programlisting">gchar*      user_function                  (<a href="ExoToolbarsModel.html" title="ExoToolbarsModel">ExoToolbarsModel</a> *arg0,
                                            gchar *arg1,
                                            gchar *arg2,
                                            gpointer user_data);</pre>
<p>
</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody><tr>
<td>
<span class="term"><em class="parameter"><code>user_data</code></em>&#160;:</span></td>
<td>user data set when the signal handler was connected.</td>
</tr></tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2606573"></a><h3>
<a name="ExoToolbarsModel-get-item-type"></a>The "get-item-type" signal</h3>
<pre class="programlisting">gchar*      user_function                  (<a href="ExoToolbarsModel.html" title="ExoToolbarsModel">ExoToolbarsModel</a> *arg0,
                                            gpointer arg1,
                                            gpointer user_data);</pre>
<p>
</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody><tr>
<td>
<span class="term"><em class="parameter"><code>user_data</code></em>&#160;:</span></td>
<td>user data set when the signal handler was connected.</td>
</tr></tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2606634"></a><h3>
<a name="ExoToolbarsModel-item-added"></a>The "item-added" signal</h3>
<pre class="programlisting">void        user_function                  (<a href="ExoToolbarsModel.html" title="ExoToolbarsModel">ExoToolbarsModel</a> *model,
                                            gint toolbar_position,
                                            gint item_position,
                                            gpointer user_data);</pre>
<p>
This signal is emitted whenever a new item is added to a toolbar
managed by <em class="parameter"><code>model</code></em>.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>model</code></em>&#160;:</span></td>
<td> The <a href="ExoToolbarsModel.html" title="ExoToolbarsModel"><span class="type">ExoToolbarsModel</span></a> to which an item was added.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>toolbar_position</code></em>&#160;:</span></td>
<td> The index of the toolbar in <em class="parameter"><code>model</code></em> to which the item
                     was added.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>item_position</code></em>&#160;:</span></td>
<td> The index of the new item in the specified toolbar.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>user_data</code></em>&#160;:</span></td>
<td>user data set when the signal handler was connected.</td>
</tr>
</tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2606827"></a><h3>
<a name="ExoToolbarsModel-item-removed"></a>The "item-removed" signal</h3>
<pre class="programlisting">void        user_function                  (<a href="ExoToolbarsModel.html" title="ExoToolbarsModel">ExoToolbarsModel</a> *model,
                                            gint toolbar_position,
                                            gint item_position,
                                            gpointer user_data);</pre>
<p>
This signal is emitted whenever an item is removed from a toolbar
managed by <em class="parameter"><code>model</code></em>.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>model</code></em>&#160;:</span></td>
<td> The <a href="ExoToolbarsModel.html" title="ExoToolbarsModel"><span class="type">ExoToolbarsModel</span></a> from which an item was removed.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>toolbar_position</code></em>&#160;:</span></td>
<td> The index of the toolbar in <em class="parameter"><code>model</code></em> from which
                     the item was removed.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>item_position</code></em>&#160;:</span></td>
<td> The index of the item in the specified toolbar.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>user_data</code></em>&#160;:</span></td>
<td>user data set when the signal handler was connected.</td>
</tr>
</tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2606953"></a><h3>
<a name="ExoToolbarsModel-toolbar-added"></a>The "toolbar-added" signal</h3>
<pre class="programlisting">void        user_function                  (<a href="ExoToolbarsModel.html" title="ExoToolbarsModel">ExoToolbarsModel</a> *model,
                                            gint toolbar_position,
                                            gpointer user_data);</pre>
<p>
This signal is emitted whenever a new toolbar is added to <em class="parameter"><code>model</code></em>.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>model</code></em>&#160;:</span></td>
<td> The <a href="ExoToolbarsModel.html" title="ExoToolbarsModel"><span class="type">ExoToolbarsModel</span></a> to which a new toolbar was
                     added.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>toolbar_position</code></em>&#160;:</span></td>
<td> The index of the new toolbar in <em class="parameter"><code>model</code></em>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>user_data</code></em>&#160;:</span></td>
<td>user data set when the signal handler was connected.</td>
</tr>
</tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2607060"></a><h3>
<a name="ExoToolbarsModel-toolbar-changed"></a>The "toolbar-changed" signal</h3>
<pre class="programlisting">void        user_function                  (<a href="ExoToolbarsModel.html" title="ExoToolbarsModel">ExoToolbarsModel</a> *model,
                                            gint toolbar_position,
                                            gpointer user_data);</pre>
<p>
This signal is emitted whenever the flags or the style of a toolbar
change, which is managed by <em class="parameter"><code>model</code></em>. All views connected to <em class="parameter"><code>model</code></em>
should then update their internal state of the specified toolbar.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>model</code></em>&#160;:</span></td>
<td> The <a href="ExoToolbarsModel.html" title="ExoToolbarsModel"><span class="type">ExoToolbarsModel</span></a> that manages the changed
                     toolbar.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>toolbar_position</code></em>&#160;:</span></td>
<td> The index of the changed toolbar in <em class="parameter"><code>model</code></em>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>user_data</code></em>&#160;:</span></td>
<td>user data set when the signal handler was connected.</td>
</tr>
</tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2607241"></a><h3>
<a name="ExoToolbarsModel-toolbar-removed"></a>The "toolbar-removed" signal</h3>
<pre class="programlisting">void        user_function                  (<a href="ExoToolbarsModel.html" title="ExoToolbarsModel">ExoToolbarsModel</a> *model,
                                            gint toolbar_position,
                                            gpointer user_data);</pre>
<p>
This signal is emitted whenever a toolbar is removed from <em class="parameter"><code>model</code></em>.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>model</code></em>&#160;:</span></td>
<td> The <a href="ExoToolbarsModel.html" title="ExoToolbarsModel"><span class="type">ExoToolbarsModel</span></a>
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>toolbar_position</code></em>&#160;:</span></td>
<td> The index of the toolbar in <em class="parameter"><code>model</code></em> that was
                     removed.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>user_data</code></em>&#160;:</span></td>
<td>user data set when the signal handler was connected.</td>
</tr>
</tbody>
</table></div>
</div>
</div>
<div class="refsect1" lang="en">
<a name="id2607351"></a><h2>See Also</h2>
<p>
<a href="ExoToolbarsView.html" title="ExoToolbarsView"><span class="type">ExoToolbarsView</span></a>, <a href="ExoToolbarsEditor.html" title="ExoToolbarsEditor"><span class="type">ExoToolbarsEditor</span></a>, <a href="ExoToolbarsEditorDialog.html" title="ExoToolbarsEditorDialog"><span class="type">ExoToolbarsEditorDialog</span></a>
</p>
</div>
</div>
<table class="navigation" width="100%" summary="Navigation footer" cellpadding="2" cellspacing="0"><tr valign="middle">
<td align="left"><a accesskey="p" href="exo-toolbars.html"><b>&lt;&lt;&#160;Part&#160;II.&#160;Editable Toolbars</b></a></td>
<td align="right"><a accesskey="n" href="ExoToolbarsEditor.html"><b>ExoToolbarsEditor&#160;&gt;&gt;</b></a></td>
</tr></table>
</body>
</html>
