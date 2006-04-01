<html><head><meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"><title>XfceFileChooser</title><meta name="generator" content="DocBook XSL Stylesheets V1.66.1"><link rel="start" href="index.html" title="libxfcegui4 Reference Manual"><link rel="up" href="libxfcegui4-core.html" title="Xfce GUI Core Reference"><link rel="prev" href="XfceAppMenuItem.html" title="XfceAppMenuItem"><link rel="next" href="XfceFramebox.html" title="XfceFramebox"><meta name="generator" content="GTK-Doc V1.2 (XML mode)"><style type="text/css">
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
      </style></head><body bgcolor="white" text="black" link="#0000FF" vlink="#840084" alink="#0000FF"><table class="navigation" width="100%" summary="Navigation header" cellpadding="2" cellspacing="2"><tr valign="middle"><td><a accesskey="p" href="XfceAppMenuItem.html"><img src="left.png" width="24" height="24" border="0" alt="Prev"></a></td><td><a accesskey="u" href="libxfcegui4-core.html"><img src="up.png" width="24" height="24" border="0" alt="Up"></a></td><td><a accesskey="h" href="index.html"><img src="home.png" width="24" height="24" border="0" alt="Home"></a></td><th width="100%" align="center">libxfcegui4 Reference Manual</th><td><a accesskey="n" href="XfceFramebox.html"><img src="right.png" width="24" height="24" border="0" alt="Next"></a></td></tr></table><div class="refentry" lang="en"><a name="libxfcegui4-XfceFileChooser"></a><div class="titlepage"></div><div class="refnamediv"><h2><span class="refentrytitle">XfceFileChooser</span></h2><p>XfceFileChooser &#8212; a wrapper around <a href="http://developer.gnome.org/doc/API/2.0/gtk/GtkFileSelection.html" target="_top">GtkFileSelection</a> and <a href="http://developer.gnome.org/doc/API/2.0/gtk/GtkFileChooserDialog.html" target="_top">GtkFileChooserDialog</a></p></div><div class="refsynopsisdiv"><h2>Synopsis</h2><pre class="synopsis">

#include &lt;libxfcegui4/libxfcegui4.h&gt;


typedef     <a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser">XfceFileChooser</a>;
enum        <a href="libxfcegui4-XfceFileChooser.html#XfceFileChooserAction">XfceFileChooserAction</a>;
void        (<a href="libxfcegui4-XfceFileChooser.html#PreviewUpdateFunc">*PreviewUpdateFunc</a>)            (<a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser">XfceFileChooser</a> *chooser,
                                             gpointer user_data);
GtkWidget*  <a href="libxfcegui4-XfceFileChooser.html#xfce-file-chooser-dialog-new">xfce_file_chooser_dialog_new</a>    (const gchar *title,
                                             GtkWindow *parent,
                                             <a href="libxfcegui4-XfceFileChooser.html#XfceFileChooserAction">XfceFileChooserAction</a> action,
                                             const gchar *first_button_text,
                                             ...);
GtkWidget*  <a href="libxfcegui4-XfceFileChooser.html#xfce-file-chooser-new">xfce_file_chooser_new</a>           (const gchar *title,
                                             GtkWindow *parent,
                                             <a href="libxfcegui4-XfceFileChooser.html#XfceFileChooserAction">XfceFileChooserAction</a> action,
                                             const gchar *first_button_text,
                                             ...);
void        <a href="libxfcegui4-XfceFileChooser.html#xfce-file-chooser-set-select-multiple">xfce_file_chooser_set_select_multiple</a>
                                            (<a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser">XfceFileChooser</a> *chooser,
                                             gboolean select_multiple);
gboolean    <a href="libxfcegui4-XfceFileChooser.html#xfce-file-chooser-get-select-multiple">xfce_file_chooser_get_select_multiple</a>
                                            (<a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser">XfceFileChooser</a> *chooser);
void        <a href="libxfcegui4-XfceFileChooser.html#xfce-file-chooser-set-current-name">xfce_file_chooser_set_current_name</a>
                                            (<a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser">XfceFileChooser</a> *chooser,
                                             const gchar *name);
gchar*      <a href="libxfcegui4-XfceFileChooser.html#xfce-file-chooser-get-filename">xfce_file_chooser_get_filename</a>  (<a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser">XfceFileChooser</a> *chooser);
gboolean    <a href="libxfcegui4-XfceFileChooser.html#xfce-file-chooser-set-filename">xfce_file_chooser_set_filename</a>  (<a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser">XfceFileChooser</a> *chooser,
                                             const gchar *filename);
GSList*     <a href="libxfcegui4-XfceFileChooser.html#xfce-file-chooser-get-filenames">xfce_file_chooser_get_filenames</a> (<a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser">XfceFileChooser</a> *chooser);
gboolean    <a href="libxfcegui4-XfceFileChooser.html#xfce-file-chooser-set-current-folder">xfce_file_chooser_set_current_folder</a>
                                            (<a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser">XfceFileChooser</a> *chooser,
                                             const gchar *filename);
gchar*      <a href="libxfcegui4-XfceFileChooser.html#xfce-file-chooser-get-current-folder">xfce_file_chooser_get_current_folder</a>
                                            (<a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser">XfceFileChooser</a> *chooser);
void        <a href="libxfcegui4-XfceFileChooser.html#xfce-file-chooser-set-preview-widget">xfce_file_chooser_set_preview_widget</a>
                                            (<a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser">XfceFileChooser</a> *chooser,
                                             GtkWidget *preview_widget);
GtkWidget*  <a href="libxfcegui4-XfceFileChooser.html#xfce-file-chooser-get-preview-widget">xfce_file_chooser_get_preview_widget</a>
                                            (<a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser">XfceFileChooser</a> *chooser);
void        <a href="libxfcegui4-XfceFileChooser.html#xfce-file-chooser-set-preview-callback">xfce_file_chooser_set_preview_callback</a>
                                            (<a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser">XfceFileChooser</a> *chooser,
                                             <a href="libxfcegui4-XfceFileChooser.html#PreviewUpdateFunc">PreviewUpdateFunc</a> func,
                                             gpointer user_data);
void        <a href="libxfcegui4-XfceFileChooser.html#xfce-file-chooser-set-preview-widget-active">xfce_file_chooser_set_preview_widget_active</a>
                                            (<a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser">XfceFileChooser</a> *chooser,
                                             gboolean active);
gboolean    <a href="libxfcegui4-XfceFileChooser.html#xfce-file-chooser-get-preview-widget-active">xfce_file_chooser_get_preview_widget_active</a>
                                            (<a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser">XfceFileChooser</a> *chooser);
void        <a href="libxfcegui4-XfceFileChooser.html#xfce-file-chooser-set-use-preview-label">xfce_file_chooser_set_use_preview_label</a>
                                            (<a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser">XfceFileChooser</a> *chooser,
                                             gboolean use_label);
void        <a href="libxfcegui4-XfceFileChooser.html#xfce-file-chooser-set-extra-widget">xfce_file_chooser_set_extra_widget</a>
                                            (<a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser">XfceFileChooser</a> *chooser,
                                             GtkWidget *extra_widget);
GtkWidget*  <a href="libxfcegui4-XfceFileChooser.html#xfce-file-chooser-get-extra-widget">xfce_file_chooser_get_extra_widget</a>
                                            (<a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser">XfceFileChooser</a> *chooser);
void        <a href="libxfcegui4-XfceFileChooser.html#xfce-file-chooser-add-filter">xfce_file_chooser_add_filter</a>    (<a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser">XfceFileChooser</a> *chooser,
                                             <a href="libxfcegui4-XfceFileChooser.html#XfceFileFilter">XfceFileFilter</a> *filter);
void        <a href="libxfcegui4-XfceFileChooser.html#xfce-file-chooser-remove-filter">xfce_file_chooser_remove_filter</a> (<a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser">XfceFileChooser</a> *chooser,
                                             <a href="libxfcegui4-XfceFileChooser.html#XfceFileFilter">XfceFileFilter</a> *filter);
void        <a href="libxfcegui4-XfceFileChooser.html#xfce-file-chooser-set-filter">xfce_file_chooser_set_filter</a>    (<a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser">XfceFileChooser</a> *chooser,
                                             <a href="libxfcegui4-XfceFileChooser.html#XfceFileFilter">XfceFileFilter</a> *filter);
void        <a href="libxfcegui4-XfceFileChooser.html#xfce-file-chooser-set-local-only">xfce_file_chooser_set_local_only</a>
                                            (<a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser">XfceFileChooser</a> *chooser,
                                             gboolean local_only);
gboolean    <a href="libxfcegui4-XfceFileChooser.html#xfce-file-chooser-get-local-only">xfce_file_chooser_get_local_only</a>
                                            (<a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser">XfceFileChooser</a> *chooser);
gboolean    <a href="libxfcegui4-XfceFileChooser.html#xfce-file-chooser-add-shortcut-folder">xfce_file_chooser_add_shortcut_folder</a>
                                            (<a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser">XfceFileChooser</a> *chooser,
                                             const gchar *folder,
                                             GError **error);
gboolean    <a href="libxfcegui4-XfceFileChooser.html#xfce-file-chooser-remove-shortcut-folder">xfce_file_chooser_remove_shortcut_folder</a>
                                            (<a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser">XfceFileChooser</a> *chooser,
                                             const gchar *folder,
                                             GError **error);
typedef     <a href="libxfcegui4-XfceFileChooser.html#XfceFileFilter">XfceFileFilter</a>;
<a href="libxfcegui4-XfceFileChooser.html#XfceFileFilter">XfceFileFilter</a>* <a href="libxfcegui4-XfceFileChooser.html#xfce-file-filter-new">xfce_file_filter_new</a>        ();
void        <a href="libxfcegui4-XfceFileChooser.html#xfce-file-filter-set-name">xfce_file_filter_set_name</a>       (<a href="libxfcegui4-XfceFileChooser.html#XfceFileFilter">XfceFileFilter</a> *filter,
                                             const gchar *name);
void        <a href="libxfcegui4-XfceFileChooser.html#xfce-file-filter-add-mime-type">xfce_file_filter_add_mime_type</a>  (<a href="libxfcegui4-XfceFileChooser.html#XfceFileFilter">XfceFileFilter</a> *filter,
                                             const gchar *mime_type);
void        <a href="libxfcegui4-XfceFileChooser.html#xfce-file-filter-add-pattern">xfce_file_filter_add_pattern</a>    (<a href="libxfcegui4-XfceFileChooser.html#XfceFileFilter">XfceFileFilter</a> *filter,
                                             const gchar *pattern);


</pre></div><div class="refsect1" lang="en"><a name="id2544793"></a><h2>Description</h2><p>
<a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser"><span class="type">XfceFileChooser</span></a> is meant to be used as a gtk-version-neutral file selector.
If libxfcegui4 is compiled against GTK+ 2.0 or 2.2, <a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser"><span class="type">XfceFileChooser</span></a> will use
the older
<a href="http://developer.gnome.org/doc/API/2.0/gtk/GtkFileSelection.html" target="_top">GtkFileSelection</a>.
If libxfcegui4 is compiled against GTK+ 2.4 or greater, <a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser"><span class="type">XfceFileChooser</span></a> will
use <a href="http://developer.gnome.org/doc/API/2.0/gtk/GtkFileChooserDialog.html" target="_top">GtkFileChooserDialog</a>.
The API of <a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser"><span class="type">XfceFileChooser</span></a> is designed to be similar to that of the
<a href="http://developer.gnome.org/doc/API/2.0/gtk/GtkFileChooser.html" target="_top">GtkFileChooser</a>
interface, and may behave differently from the older
<a href="http://developer.gnome.org/doc/API/2.0/gtk/GtkFileSelection.html" target="_top">GtkFileSelection</a>
API.
</p></div><div class="refsect1" lang="en"><a name="id2544869"></a><h2>Details</h2><div class="refsect2" lang="en"><a name="id2544875"></a><h3><a name="XfceFileChooser"></a>XfceFileChooser</h3><a class="indexterm" name="id2544885"></a><pre class="programlisting">typedef GtkDialog XfceFileChooser;
</pre><p>

</p></div><hr><div class="refsect2" lang="en"><a name="id2544900"></a><h3><a name="XfceFileChooserAction"></a>enum XfceFileChooserAction</h3><a class="indexterm" name="id2544912"></a><pre class="programlisting">typedef enum {
	XFCE_FILE_CHOOSER_ACTION_OPEN,
	XFCE_FILE_CHOOSER_ACTION_SAVE,
	XFCE_FILE_CHOOSER_ACTION_SELECT_FOLDER,
	XFCE_FILE_CHOOSER_ACTION_CREATE_FOLDER
} XfceFileChooserAction;
</pre><p>
      Describes whether a <a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser"><span class="type">XfceFileChooser</span></a> is being used to open
      existing files or to save to a possibly new file.
    </p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term"><tt class="literal">XFCE_FILE_CHOOSER_ACTION_OPEN</tt></span></td><td>Indicates open mode.  The file chooser
    will only let the user pick an existing file.
</td></tr><tr><td><span class="term"><tt class="literal">XFCE_FILE_CHOOSER_ACTION_SAVE</tt></span></td><td>Indicates save mode.  The file chooser
    will let the user pick an existing file, or type in a new
    filename.
</td></tr><tr><td><span class="term"><tt class="literal">XFCE_FILE_CHOOSER_ACTION_SELECT_FOLDER</tt></span></td><td>Indicates an Open mode for
    selecting folders.  The file chooser will let the user pick an
    existing folder.
</td></tr><tr><td><span class="term"><tt class="literal">XFCE_FILE_CHOOSER_ACTION_CREATE_FOLDER</tt></span></td><td>Indicates a mode for creating a
    new folder.  The file chooser will let the user name an existing or
    new folder.

</td></tr></tbody></table></div></div><hr><div class="refsect2" lang="en"><a name="id2545011"></a><h3><a name="PreviewUpdateFunc"></a>PreviewUpdateFunc ()</h3><a class="indexterm" name="id2545022"></a><pre class="programlisting">void        (*PreviewUpdateFunc)            (<a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser">XfceFileChooser</a> *chooser,
                                             gpointer user_data);</pre><p>
Use this function prototype for functions to be passed to
<a href="libxfcegui4-XfceFileChooser.html#xfce-file-chooser-set-preview-callback"><tt class="function">xfce_file_chooser_set_preview_callback()</tt></a>.
</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term"><i class="parameter"><tt>chooser</tt></i> :</span></td><td>The <a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser"><span class="type">XfceFileChooser</span></a> where the signal occurred.
</td></tr><tr><td><span class="term"><i class="parameter"><tt>user_data</tt></i> :</span></td><td>The <i class="parameter"><tt>user_data</tt></i> passed to <a href="libxfcegui4-XfceFileChooser.html#xfce-file-chooser-set-preview-callback"><tt class="function">xfce_file_chooser_set_preview_callback()</tt></a>.


</td></tr></tbody></table></div></div><hr><div class="refsect2" lang="en"><a name="id2545129"></a><h3><a name="xfce-file-chooser-dialog-new"></a>xfce_file_chooser_dialog_new ()</h3><a class="indexterm" name="id2545141"></a><pre class="programlisting">GtkWidget*  xfce_file_chooser_dialog_new    (const gchar *title,
                                             GtkWindow *parent,
                                             <a href="libxfcegui4-XfceFileChooser.html#XfceFileChooserAction">XfceFileChooserAction</a> action,
                                             const gchar *first_button_text,
                                             ...);</pre><div class="warning" style="margin-left: 0.5in; margin-right: 0.5in;"><h3 class="title">Warning</h3><p><tt class="literal">xfce_file_chooser_dialog_new</tt> is deprecated and should not be used in newly-written code. Use <a href="libxfcegui4-XfceFileChooser.html#xfce-file-chooser-new"><tt class="function">xfce_file_chooser_new()</tt></a> instead.</p></div><p>
</p><p>

</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term"><i class="parameter"><tt>title</tt></i> :</span></td><td> The dialog's window title, or <tt class="literal">NULL</tt>.
</td></tr><tr><td><span class="term"><i class="parameter"><tt>parent</tt></i> :</span></td><td> The dialog's transient parent window, or <tt class="literal">NULL</tt>.
</td></tr><tr><td><span class="term"><i class="parameter"><tt>action</tt></i> :</span></td><td> Open or save mode for dialog.
</td></tr><tr><td><span class="term"><i class="parameter"><tt>first_button_text</tt></i> :</span></td><td> Stock ID or text for the first button.
</td></tr><tr><td><span class="term"><i class="parameter"><tt>...</tt></i> :</span></td><td> Response ID for the first button, followed by additional (button, ID)
      pairs, terminated with a <tt class="literal">NULL</tt> argument.
</td></tr><tr><td><span class="term"><span class="emphasis"><em>Returns</em></span> :</span></td><td> a new <a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser"><span class="type">XfceFileChooser</span></a> dialog widget.
</td></tr></tbody></table></div></div><hr><div class="refsect2" lang="en"><a name="id2545332"></a><h3><a name="xfce-file-chooser-new"></a>xfce_file_chooser_new ()</h3><a class="indexterm" name="id2545343"></a><pre class="programlisting">GtkWidget*  xfce_file_chooser_new           (const gchar *title,
                                             GtkWindow *parent,
                                             <a href="libxfcegui4-XfceFileChooser.html#XfceFileChooserAction">XfceFileChooserAction</a> action,
                                             const gchar *first_button_text,
                                             ...);</pre><p>
Constructs a new file chooser dialog.  If compiled against GTK+ 2.4 (or
above), this will create a
<a href="http://developer.gnome.org/doc/API/2.0/gtk/GtkFileChooserDialog.html" target="_top">GtkFileChooserDialog</a>.
For GTK+ 2.0 and 2.2, this creates a
<a href="http://developer.gnome.org/doc/API/2.0/gtk/GtkFileSelection.html" target="_top">GtkFileSelection</a>.
</p><p>
Since 4.1</p><p>

</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term"><i class="parameter"><tt>title</tt></i> :</span></td><td> The dialog's window title, or <tt class="literal">NULL</tt>.
</td></tr><tr><td><span class="term"><i class="parameter"><tt>parent</tt></i> :</span></td><td> The dialog's transient parent window, or <tt class="literal">NULL</tt>.
</td></tr><tr><td><span class="term"><i class="parameter"><tt>action</tt></i> :</span></td><td> Open or save mode for dialog.
</td></tr><tr><td><span class="term"><i class="parameter"><tt>first_button_text</tt></i> :</span></td><td> Stock ID or text for the first button.
</td></tr><tr><td><span class="term"><i class="parameter"><tt>...</tt></i> :</span></td><td> Response ID for the first button, followed by additional (button, ID)
      pairs, terminated with a <tt class="literal">NULL</tt> argument.
</td></tr><tr><td><span class="term"><span class="emphasis"><em>Returns</em></span> :</span></td><td> a new <a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser"><span class="type">XfceFileChooser</span></a> dialog widget.
</td></tr></tbody></table></div></div><hr><div class="refsect2" lang="en"><a name="id2545532"></a><h3><a name="xfce-file-chooser-set-select-multiple"></a>xfce_file_chooser_set_select_multiple ()</h3><a class="indexterm" name="id2545544"></a><pre class="programlisting">void        xfce_file_chooser_set_select_multiple
                                            (<a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser">XfceFileChooser</a> *chooser,
                                             gboolean select_multiple);</pre><p>
Sets whether multiple files can be selected in the file chooser.
</p><p>
Since 4.1</p><p>

</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term"><i class="parameter"><tt>chooser</tt></i> :</span></td><td> An <a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser"><span class="type">XfceFileChooser</span></a>.
</td></tr><tr><td><span class="term"><i class="parameter"><tt>select_multiple</tt></i> :</span></td><td> <tt class="literal">TRUE</tt> it multiple files can be selected.
</td></tr></tbody></table></div></div><hr><div class="refsect2" lang="en"><a name="id2545636"></a><h3><a name="xfce-file-chooser-get-select-multiple"></a>xfce_file_chooser_get_select_multiple ()</h3><a class="indexterm" name="id2545648"></a><pre class="programlisting">gboolean    xfce_file_chooser_get_select_multiple
                                            (<a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser">XfceFileChooser</a> *chooser);</pre><p>
Gets whether multiple files can be selected in the file chooser.  See
<a href="libxfcegui4-XfceFileChooser.html#xfce-file-chooser-set-select-multiple"><tt class="function">xfce_file_chooser_set_select_multiple()</tt></a>.
</p><p>
Since 4.1</p><p>

</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term"><i class="parameter"><tt>chooser</tt></i> :</span></td><td> An <a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser"><span class="type">XfceFileChooser</span></a>.
</td></tr><tr><td><span class="term"><span class="emphasis"><em>Returns</em></span> :</span></td><td> <tt class="literal">TRUE</tt> if multiple files can be selected, <tt class="literal">FALSE</tt> otherwise.
</td></tr></tbody></table></div></div><hr><div class="refsect2" lang="en"><a name="id2545746"></a><h3><a name="xfce-file-chooser-set-current-name"></a>xfce_file_chooser_set_current_name ()</h3><a class="indexterm" name="id2545758"></a><pre class="programlisting">void        xfce_file_chooser_set_current_name
                                            (<a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser">XfceFileChooser</a> *chooser,
                                             const gchar *name);</pre><p>
Sets the name to be displayed in the file chooser's entry box, as if entered
by the user.  This function is meant to be used, e.g., to suggest a file
name to a user in a "Save as..." dialog.
</p><p>
To preselect a particular existing filename, see
<a href="libxfcegui4-XfceFileChooser.html#xfce-file-chooser-set-filename"><tt class="function">xfce_file_chooser_set_filename()</tt></a>.
</p><p>
Since 4.1</p><p>

</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term"><i class="parameter"><tt>chooser</tt></i> :</span></td><td> An <a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser"><span class="type">XfceFileChooser</span></a>.
</td></tr><tr><td><span class="term"><i class="parameter"><tt>name</tt></i> :</span></td><td> The filename to use (UTF-8 only).
</td></tr></tbody></table></div></div><hr><div class="refsect2" lang="en"><a name="id2545861"></a><h3><a name="xfce-file-chooser-get-filename"></a>xfce_file_chooser_get_filename ()</h3><a class="indexterm" name="id2545872"></a><pre class="programlisting">gchar*      xfce_file_chooser_get_filename  (<a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser">XfceFileChooser</a> *chooser);</pre><p>
Returns the currently selected file in the file chooser.  If multiple files
are selected, behavior is indeterminate.
</p><p>
Since 4.1</p><p>

</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term"><i class="parameter"><tt>chooser</tt></i> :</span></td><td> An <a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser"><span class="type">XfceFileChooser</span></a>.
</td></tr><tr><td><span class="term"><span class="emphasis"><em>Returns</em></span> :</span></td><td> The currently selected filename, or <tt class="literal">NULL</tt> if no file is
              selected.  This string is allocated by libxfcegui4 and should
              be released with <tt class="function">g_free()</tt> when it is no longer needed.
</td></tr></tbody></table></div></div><hr><div class="refsect2" lang="en"><a name="id2545966"></a><h3><a name="xfce-file-chooser-set-filename"></a>xfce_file_chooser_set_filename ()</h3><a class="indexterm" name="id2545978"></a><pre class="programlisting">gboolean    xfce_file_chooser_set_filename  (<a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser">XfceFileChooser</a> *chooser,
                                             const gchar *filename);</pre><p>
Sets <i class="parameter"><tt>filename</tt></i> as the currently selected file in the file chooser, changing
the file chooser's directory view if necessary.
</p><p>
Note that the file must exist, or nothing will occur except for possibly a
directory change.  If you wish to suggest a file name to the user, use
<a href="libxfcegui4-XfceFileChooser.html#xfce-file-chooser-set-current-name"><tt class="function">xfce_file_chooser_set_current_name()</tt></a> instead.
</p><p>
Since 4.1</p><p>

</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term"><i class="parameter"><tt>chooser</tt></i> :</span></td><td> An <a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser"><span class="type">XfceFileChooser</span></a>.
</td></tr><tr><td><span class="term"><i class="parameter"><tt>filename</tt></i> :</span></td><td> A filename to set.
</td></tr><tr><td><span class="term"><span class="emphasis"><em>Returns</em></span> :</span></td><td> <tt class="literal">TRUE</tt> if the file exists and was selected, <tt class="literal">FALSE</tt> otherwise.
</td></tr></tbody></table></div></div><hr><div class="refsect2" lang="en"><a name="id2546110"></a><h3><a name="xfce-file-chooser-get-filenames"></a>xfce_file_chooser_get_filenames ()</h3><a class="indexterm" name="id2546121"></a><pre class="programlisting">GSList*     xfce_file_chooser_get_filenames (<a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser">XfceFileChooser</a> *chooser);</pre><p>
Gets a list of file names selected in the file chooser.  This is intended for
use when <a href="libxfcegui4-XfceFileChooser.html#xfce-file-chooser-set-select-multiple"><tt class="function">xfce_file_chooser_set_select_multiple()</tt></a> is used to allow the
selection of multiple files.
</p><p>
Since 4.1</p><p>

</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term"><i class="parameter"><tt>chooser</tt></i> :</span></td><td> An <a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser"><span class="type">XfceFileChooser</span></a>.
</td></tr><tr><td><span class="term"><span class="emphasis"><em>Returns</em></span> :</span></td><td> A <a href="http://developer.gnome.org/doc/API/2.0/glib/glib-Singly-Linked-Lists.html" target="_top">GSList</a>
              containing the filenames of all selected files in the file
              chooser.  Release the list with <tt class="function">g_slist_free()</tt> and the
              filenames with <tt class="function">g_free()</tt> when they are no longer needed.
</td></tr></tbody></table></div></div><hr><div class="refsect2" lang="en"><a name="id2546238"></a><h3><a name="xfce-file-chooser-set-current-folder"></a>xfce_file_chooser_set_current_folder ()</h3><a class="indexterm" name="id2546250"></a><pre class="programlisting">gboolean    xfce_file_chooser_set_current_folder
                                            (<a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser">XfceFileChooser</a> *chooser,
                                             const gchar *filename);</pre><p>
Sets the current folder of <i class="parameter"><tt>chooser</tt></i> to <i class="parameter"><tt>filename</tt></i>.
</p><p>
Since 4.1</p><p>

</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term"><i class="parameter"><tt>chooser</tt></i> :</span></td><td> An <a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser"><span class="type">XfceFileChooser</span></a>.
</td></tr><tr><td><span class="term"><i class="parameter"><tt>filename</tt></i> :</span></td><td> The full path of the new current folder.
</td></tr><tr><td><span class="term"><span class="emphasis"><em>Returns</em></span> :</span></td><td> <tt class="literal">TRUE</tt> if the folder exists and could be changed, <tt class="literal">FALSE</tt>
              otherwise.
</td></tr></tbody></table></div></div><hr><div class="refsect2" lang="en"><a name="id2546370"></a><h3><a name="xfce-file-chooser-get-current-folder"></a>xfce_file_chooser_get_current_folder ()</h3><a class="indexterm" name="id2546382"></a><pre class="programlisting">gchar*      xfce_file_chooser_get_current_folder
                                            (<a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser">XfceFileChooser</a> *chooser);</pre><p>
Gets the current folder visible in the file chooser.
</p><p>
Since 4.1</p><p>

</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term"><i class="parameter"><tt>chooser</tt></i> :</span></td><td> An <a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser"><span class="type">XfceFileChooser</span></a>.
</td></tr><tr><td><span class="term"><span class="emphasis"><em>Returns</em></span> :</span></td><td> The currently-selected folder.  Release with <tt class="function">g_free()</tt> when no
              longer needed.
</td></tr></tbody></table></div></div><hr><div class="refsect2" lang="en"><a name="id2546468"></a><h3><a name="xfce-file-chooser-set-preview-widget"></a>xfce_file_chooser_set_preview_widget ()</h3><a class="indexterm" name="id2546480"></a><pre class="programlisting">void        xfce_file_chooser_set_preview_widget
                                            (<a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser">XfceFileChooser</a> *chooser,
                                             GtkWidget *preview_widget);</pre><p>
Sets an app-supplied widget to be shown as a "preview widget" for the file
chooser.  To implement the preview, set a callback function using
<a href="libxfcegui4-XfceFileChooser.html#xfce-file-chooser-set-preview-callback"><tt class="function">xfce_file_chooser_set_preview_callback()</tt></a>.  In this callback function, use
<a href="libxfcegui4-XfceFileChooser.html#xfce-file-chooser-get-filename"><tt class="function">xfce_file_chooser_get_filename()</tt></a> to get the currently selected file.
Finally, use <a href="libxfcegui4-XfceFileChooser.html#xfce-file-chooser-set-preview-widget-active"><tt class="function">xfce_file_chooser_set_preview_widget_active()</tt></a> to tell the file
chooser whether or not a preview should be shown for that file.
</p><p>
Since 4.1</p><p>

</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term"><i class="parameter"><tt>chooser</tt></i> :</span></td><td> An <a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser"><span class="type">XfceFileChooser</span></a>.
</td></tr><tr><td><span class="term"><i class="parameter"><tt>preview_widget</tt></i> :</span></td><td> A widget used to preview file data.
</td></tr></tbody></table></div></div><hr><div class="refsect2" lang="en"><a name="id2546605"></a><h3><a name="xfce-file-chooser-get-preview-widget"></a>xfce_file_chooser_get_preview_widget ()</h3><a class="indexterm" name="id2546617"></a><pre class="programlisting">GtkWidget*  xfce_file_chooser_get_preview_widget
                                            (<a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser">XfceFileChooser</a> *chooser);</pre><p>
Retrieves the preview widget set by <a href="libxfcegui4-XfceFileChooser.html#xfce-file-chooser-set-preview-widget"><tt class="function">xfce_file_chooser_set_preview_widget()</tt></a>.
</p><p>
Since 4.1</p><p>

</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term"><i class="parameter"><tt>chooser</tt></i> :</span></td><td> An <a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser"><span class="type">XfceFileChooser</span></a>.
</td></tr><tr><td><span class="term"><span class="emphasis"><em>Returns</em></span> :</span></td><td> A <a href="http://developer.gnome.org/dock/API/2.0/gtk/GtkWidget.html" target="_top">GtkWidget</a>,
              or <tt class="literal">NULL</tt> if no preview widget was set.
</td></tr></tbody></table></div></div><hr><div class="refsect2" lang="en"><a name="id2546715"></a><h3><a name="xfce-file-chooser-set-preview-callback"></a>xfce_file_chooser_set_preview_callback ()</h3><a class="indexterm" name="id2546727"></a><pre class="programlisting">void        xfce_file_chooser_set_preview_callback
                                            (<a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser">XfceFileChooser</a> *chooser,
                                             <a href="libxfcegui4-XfceFileChooser.html#PreviewUpdateFunc">PreviewUpdateFunc</a> func,
                                             gpointer user_data);</pre><p>
Sets a callback function to be executed whenever the preview widget requires
updating.  Unfortunately, this method limits the application to a single
callback function, but this should be sufficient for most uses.
</p><p>
Since 4.1</p><p>

</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term"><i class="parameter"><tt>chooser</tt></i> :</span></td><td> An <a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser"><span class="type">XfceFileChooser</span></a>.
</td></tr><tr><td><span class="term"><i class="parameter"><tt>func</tt></i> :</span></td><td> A callback function.
</td></tr><tr><td><span class="term"><i class="parameter"><tt>user_data</tt></i> :</span></td><td> Data to be passed to <i class="parameter"><tt>func</tt></i>.
</td></tr></tbody></table></div></div><hr><div class="refsect2" lang="en"><a name="id2546843"></a><h3><a name="xfce-file-chooser-set-preview-widget-active"></a>xfce_file_chooser_set_preview_widget_active ()</h3><a class="indexterm" name="id2546856"></a><pre class="programlisting">void        xfce_file_chooser_set_preview_widget_active
                                            (<a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser">XfceFileChooser</a> *chooser,
                                             gboolean active);</pre><p>
Sets whether or not the currently selected file supports some type of
preview, handled by the widget set with
<a href="libxfcegui4-XfceFileChooser.html#xfce-file-chooser-set-preview-widget"><tt class="function">xfce_file_chooser_set_preview_widget()</tt></a>.  This should be used in the preview
callback every time the selected file is changed.
</p><p>
Since 4.1</p><p>

</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term"><i class="parameter"><tt>chooser</tt></i> :</span></td><td> An <a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser"><span class="type">XfceFileChooser</span></a>.
</td></tr><tr><td><span class="term"><i class="parameter"><tt>active</tt></i> :</span></td><td> <tt class="literal">TRUE</tt> or <tt class="literal">FALSE</tt> depending on whether or not the preview should be
         shown.
</td></tr></tbody></table></div></div><hr><div class="refsect2" lang="en"><a name="id2546967"></a><h3><a name="xfce-file-chooser-get-preview-widget-active"></a>xfce_file_chooser_get_preview_widget_active ()</h3><a class="indexterm" name="id2546980"></a><pre class="programlisting">gboolean    xfce_file_chooser_get_preview_widget_active
                                            (<a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser">XfceFileChooser</a> *chooser);</pre><p>
Gets whether or not the preview widget is displayed for the current file.
See <a href="libxfcegui4-XfceFileChooser.html#xfce-file-chooser-set-preview-widget-active"><tt class="function">xfce_file_chooser_set_preview_widget_active()</tt></a>.
</p><p>
Since 4.1</p><p>

</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term"><i class="parameter"><tt>chooser</tt></i> :</span></td><td> An <a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser"><span class="type">XfceFileChooser</span></a>.
</td></tr><tr><td><span class="term"><span class="emphasis"><em>Returns</em></span> :</span></td><td> <tt class="literal">TRUE</tt> if the preview widget is active, <tt class="literal">FALSE</tt> otherwise.
</td></tr></tbody></table></div></div><hr><div class="refsect2" lang="en"><a name="id2547079"></a><h3><a name="xfce-file-chooser-set-use-preview-label"></a>xfce_file_chooser_set_use_preview_label ()</h3><a class="indexterm" name="id2547090"></a><pre class="programlisting">void        xfce_file_chooser_set_use_preview_label
                                            (<a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser">XfceFileChooser</a> *chooser,
                                             gboolean use_label);</pre><p>
Sets whether the file chooser should display a text label above the preview
widget containing the name of the selected file.
</p><p>
Since 4.1</p><p>

</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term"><i class="parameter"><tt>chooser</tt></i> :</span></td><td> An <a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser"><span class="type">XfceFileChooser</span></a>.
</td></tr><tr><td><span class="term"><i class="parameter"><tt>use_label</tt></i> :</span></td><td> Whether to display a stock label with the name of the previewed
            file.
</td></tr></tbody></table></div></div><hr><div class="refsect2" lang="en"><a name="id2547178"></a><h3><a name="xfce-file-chooser-set-extra-widget"></a>xfce_file_chooser_set_extra_widget ()</h3><a class="indexterm" name="id2547191"></a><pre class="programlisting">void        xfce_file_chooser_set_extra_widget
                                            (<a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser">XfceFileChooser</a> *chooser,
                                             GtkWidget *extra_widget);</pre><p>
Sets a widget to display in the file chooser to provide extra options to the
user.
</p><p>
Since 4.1</p><p>

</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term"><i class="parameter"><tt>chooser</tt></i> :</span></td><td> An <a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser"><span class="type">XfceFileChooser</span></a>.
</td></tr><tr><td><span class="term"><i class="parameter"><tt>extra_widget</tt></i> :</span></td><td> An extra widget to display.
</td></tr></tbody></table></div></div><hr><div class="refsect2" lang="en"><a name="id2547276"></a><h3><a name="xfce-file-chooser-get-extra-widget"></a>xfce_file_chooser_get_extra_widget ()</h3><a class="indexterm" name="id2547289"></a><pre class="programlisting">GtkWidget*  xfce_file_chooser_get_extra_widget
                                            (<a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser">XfceFileChooser</a> *chooser);</pre><p>
Gets the widget set with <a href="libxfcegui4-XfceFileChooser.html#xfce-file-chooser-set-extra-widget"><tt class="function">xfce_file_chooser_set_extra_widget()</tt></a>.
</p><p>
Since 4.1</p><p>

</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term"><i class="parameter"><tt>chooser</tt></i> :</span></td><td> An <a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser"><span class="type">XfceFileChooser</span></a>.
</td></tr><tr><td><span class="term"><span class="emphasis"><em>Returns</em></span> :</span></td><td> The extra <a href="http://developer.gnome.org/doc/API/2.0/gtk/GtkWidget.html" target="_top">GtkWidget</a>.
</td></tr></tbody></table></div></div><hr><div class="refsect2" lang="en"><a name="id2547380"></a><h3><a name="xfce-file-chooser-add-filter"></a>xfce_file_chooser_add_filter ()</h3><a class="indexterm" name="id2547391"></a><pre class="programlisting">void        xfce_file_chooser_add_filter    (<a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser">XfceFileChooser</a> *chooser,
                                             <a href="libxfcegui4-XfceFileChooser.html#XfceFileFilter">XfceFileFilter</a> *filter);</pre><p>
Adds a filter to the list of filters that the user can select to restrict
the view of the file chooser.
</p><p>
Note: This currently does nothing when libxfcegui4 is compiled against GTK+
2.2 or lower.
</p><p>
Since 4.1</p><p>

</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term"><i class="parameter"><tt>chooser</tt></i> :</span></td><td> An <a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser"><span class="type">XfceFileChooser</span></a>.
</td></tr><tr><td><span class="term"><i class="parameter"><tt>filter</tt></i> :</span></td><td> An <a href="libxfcegui4-XfceFileChooser.html#XfceFileFilter"><span class="type">XfceFileFilter</span></a> created with <a href="libxfcegui4-XfceFileChooser.html#xfce-file-filter-new"><tt class="function">xfce_file_filter_new()</tt></a>.
</td></tr></tbody></table></div></div><hr><div class="refsect2" lang="en"><a name="id2547500"></a><h3><a name="xfce-file-chooser-remove-filter"></a>xfce_file_chooser_remove_filter ()</h3><a class="indexterm" name="id2547512"></a><pre class="programlisting">void        xfce_file_chooser_remove_filter (<a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser">XfceFileChooser</a> *chooser,
                                             <a href="libxfcegui4-XfceFileChooser.html#XfceFileFilter">XfceFileFilter</a> *filter);</pre><p>
Removes <i class="parameter"><tt>filter</tt></i> from the list of filters displayed by the file chooser.
</p><p>
Note: This currently does nothing when libxfcegui4 is compiled against GTK+
2.2 or lower.
</p><p>
Since 4.1</p><p>

</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term"><i class="parameter"><tt>chooser</tt></i> :</span></td><td> An <a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser"><span class="type">XfceFileChooser</span></a>.
</td></tr><tr><td><span class="term"><i class="parameter"><tt>filter</tt></i> :</span></td><td> An <a href="libxfcegui4-XfceFileChooser.html#XfceFileFilter"><span class="type">XfceFileFilter</span></a>.
</td></tr></tbody></table></div></div><hr><div class="refsect2" lang="en"><a name="id2547615"></a><h3><a name="xfce-file-chooser-set-filter"></a>xfce_file_chooser_set_filter ()</h3><a class="indexterm" name="id2547628"></a><pre class="programlisting">void        xfce_file_chooser_set_filter    (<a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser">XfceFileChooser</a> *chooser,
                                             <a href="libxfcegui4-XfceFileChooser.html#XfceFileFilter">XfceFileFilter</a> *filter);</pre><p>
Sets the file chooser's currently selected file filter to <i class="parameter"><tt>filter</tt></i>.  This
filter must have been added previously using <a href="libxfcegui4-XfceFileChooser.html#xfce-file-chooser-add-filter"><tt class="function">xfce_file_chooser_add_filter()</tt></a>.
</p><p>
Note: This currently does nothing when libxfcegui4 is compiled against GTK+
2.2 or lower.
</p><p>
Since 4.1</p><p>

</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term"><i class="parameter"><tt>chooser</tt></i> :</span></td><td> An <a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser"><span class="type">XfceFileChooser</span></a>.
</td></tr><tr><td><span class="term"><i class="parameter"><tt>filter</tt></i> :</span></td><td> An <a href="libxfcegui4-XfceFileChooser.html#XfceFileFilter"><span class="type">XfceFileFilter</span></a>.
</td></tr></tbody></table></div></div><hr><div class="refsect2" lang="en"><a name="id2547743"></a><h3><a name="xfce-file-chooser-set-local-only"></a>xfce_file_chooser_set_local_only ()</h3><a class="indexterm" name="id2547755"></a><pre class="programlisting">void        xfce_file_chooser_set_local_only
                                            (<a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser">XfceFileChooser</a> *chooser,
                                             gboolean local_only);</pre><div class="warning" style="margin-left: 0.5in; margin-right: 0.5in;"><h3 class="title">Warning</h3><p><tt class="literal">xfce_file_chooser_set_local_only</tt> is deprecated and should not be used in newly-written code. This function isn't really useful in the context of Xfce.
</p><p>
Since 4.1</p></div><p>
Sets whether or not the file chooser can display and/or allow the selection
of non-local files.</p><p>

</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term"><i class="parameter"><tt>chooser</tt></i> :</span></td><td> An <a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser"><span class="type">XfceFileChooser</span></a>.
</td></tr><tr><td><span class="term"><i class="parameter"><tt>local_only</tt></i> :</span></td><td> Whether to only allow the display of local files.
</td></tr></tbody></table></div></div><hr><div class="refsect2" lang="en"><a name="id2547852"></a><h3><a name="xfce-file-chooser-get-local-only"></a>xfce_file_chooser_get_local_only ()</h3><a class="indexterm" name="id2547865"></a><pre class="programlisting">gboolean    xfce_file_chooser_get_local_only
                                            (<a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser">XfceFileChooser</a> *chooser);</pre><div class="warning" style="margin-left: 0.5in; margin-right: 0.5in;"><h3 class="title">Warning</h3><p><tt class="literal">xfce_file_chooser_get_local_only</tt> is deprecated and should not be used in newly-written code. This function isn't really useful in the context of Xfce.
</p><p>
Since 4.1</p></div><p>
Gets whether or not the file chooser can display and/or allow the selection
of non-local files.
</p><p>
Return value:</p><p>

</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term"><i class="parameter"><tt>chooser</tt></i> :</span></td><td> An <a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser"><span class="type">XfceFileChooser</span></a>.
</td></tr><tr><td><span class="term"><span class="emphasis"><em>Returns</em></span> :</span></td><td> <tt class="literal">TRUE</tt> if non-local files are allowed, <tt class="literal">FALSE</tt> otherwise.
</td></tr></tbody></table></div></div><hr><div class="refsect2" lang="en"><a name="id2547966"></a><h3><a name="xfce-file-chooser-add-shortcut-folder"></a>xfce_file_chooser_add_shortcut_folder ()</h3><a class="indexterm" name="id2547979"></a><pre class="programlisting">gboolean    xfce_file_chooser_add_shortcut_folder
                                            (<a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser">XfceFileChooser</a> *chooser,
                                             const gchar *folder,
                                             GError **error);</pre><p>
Adds a folder to be displayed in the shortcut folders list in the file
chooser.  The folder name is validated, so only valid paths may be added.
</p><p>
Note: This currently does nothing when libxfcegui4 is compiled against GTK+
2.2 or lower.
</p><p>
Since 4.1</p><p>

</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term"><i class="parameter"><tt>chooser</tt></i> :</span></td><td> An <a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser"><span class="type">XfceFileChooser</span></a>.
</td></tr><tr><td><span class="term"><i class="parameter"><tt>folder</tt></i> :</span></td><td> The full path to a folder name.
</td></tr><tr><td><span class="term"><i class="parameter"><tt>error</tt></i> :</span></td><td> Location to store any errors, or <tt class="literal">NULL</tt>.
</td></tr><tr><td><span class="term"><span class="emphasis"><em>Returns</em></span> :</span></td><td> <tt class="literal">TRUE</tt> if the folder given is valid, <tt class="literal">FALSE</tt> otherwise.  If
              <i class="parameter"><tt>error</tt></i> is non-<tt class="literal">NULL</tt>, it will be set with any error that occurs.
</td></tr></tbody></table></div></div><hr><div class="refsect2" lang="en"><a name="id2548134"></a><h3><a name="xfce-file-chooser-remove-shortcut-folder"></a>xfce_file_chooser_remove_shortcut_folder ()</h3><a class="indexterm" name="id2548146"></a><pre class="programlisting">gboolean    xfce_file_chooser_remove_shortcut_folder
                                            (<a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser">XfceFileChooser</a> *chooser,
                                             const gchar *folder,
                                             GError **error);</pre><p>
Removes the specified folder from the file chooser's shortcut folder list.
</p><p>
Note: This currently does nothing when libxfcegui4 is compiled against GTK+
2.2 or lower.
</p><p>
Since 4.1</p><p>

</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term"><i class="parameter"><tt>chooser</tt></i> :</span></td><td> An <a href="libxfcegui4-XfceFileChooser.html#XfceFileChooser"><span class="type">XfceFileChooser</span></a>.
</td></tr><tr><td><span class="term"><i class="parameter"><tt>folder</tt></i> :</span></td><td> The full path to an existing shortcut folder name.
</td></tr><tr><td><span class="term"><i class="parameter"><tt>error</tt></i> :</span></td><td> Location to store any errors, or <tt class="literal">NULL</tt>.
</td></tr><tr><td><span class="term"><span class="emphasis"><em>Returns</em></span> :</span></td><td> <tt class="literal">TRUE</tt> if the removal succeeded, <tt class="literal">FALSE</tt> otherwise.  If <i class="parameter"><tt>error</tt></i> is
              non-<tt class="literal">NULL</tt>, it will be set with any error that occurs.
</td></tr></tbody></table></div></div><hr><div class="refsect2" lang="en"><a name="id2548300"></a><h3><a name="XfceFileFilter"></a>XfceFileFilter</h3><a class="indexterm" name="id2548310"></a><pre class="programlisting">typedef GtkObject XfceFileFilter;
</pre><p>
With GTK+ 2.4, this object is mapped to a
<a href="http://developer.gnome.org/doc/API/2.0/gtk/GtkFileFilter.html" target="_top">GtkFileFilter</a>.
However, with GTK+ 2.0 or 2.2, this object doesn't exist, so functions that use
it will return and expect a <tt class="literal">NULL</tt> value.  As such, pointers to an
<a href="libxfcegui4-XfceFileChooser.html#XfceFileFilter"><span class="type">XfceFileFilter</span></a> should be treated as opaque, and no attempt should be made to
dereference them.
</p></div><hr><div class="refsect2" lang="en"><a name="id2548351"></a><h3><a name="xfce-file-filter-new"></a>xfce_file_filter_new ()</h3><a class="indexterm" name="id2548362"></a><pre class="programlisting"><a href="libxfcegui4-XfceFileChooser.html#XfceFileFilter">XfceFileFilter</a>* xfce_file_filter_new        ();</pre><p>
Create a new empty file filter.
</p><p>
Note: this will always return <tt class="literal">NULL</tt> when libxfcegui4 is compiled against GTK+
2.2 or below, as file filters are not supported.
</p><p>
Since 4.1</p><p>

</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term"><span class="emphasis"><em>Returns</em></span> :</span></td><td> An <a href="libxfcegui4-XfceFileChooser.html#XfceFileFilter"><span class="type">XfceFileFilter</span></a>, or <tt class="literal">NULL</tt> (GTK+ 2.2 and below).
</td></tr></tbody></table></div></div><hr><div class="refsect2" lang="en"><a name="id2548432"></a><h3><a name="xfce-file-filter-set-name"></a>xfce_file_filter_set_name ()</h3><a class="indexterm" name="id2548444"></a><pre class="programlisting">void        xfce_file_filter_set_name       (<a href="libxfcegui4-XfceFileChooser.html#XfceFileFilter">XfceFileFilter</a> *filter,
                                             const gchar *name);</pre><p>
Sets a name to be displayed in in the option menu which describes the
filter's purpose.
</p><p>
Note: this function has no effect when libxfcegui4 is compiled against GTK+
2.2 or below, as file filters are not supported.
</p><p>
Since 4.1</p><p>

</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term"><i class="parameter"><tt>filter</tt></i> :</span></td><td> An <a href="libxfcegui4-XfceFileChooser.html#XfceFileFilter"><span class="type">XfceFileFilter</span></a>.
</td></tr><tr><td><span class="term"><i class="parameter"><tt>name</tt></i> :</span></td><td> The name of the filter.
</td></tr></tbody></table></div></div><hr><div class="refsect2" lang="en"><a name="id2548534"></a><h3><a name="xfce-file-filter-add-mime-type"></a>xfce_file_filter_add_mime_type ()</h3><a class="indexterm" name="id2548546"></a><pre class="programlisting">void        xfce_file_filter_add_mime_type  (<a href="libxfcegui4-XfceFileChooser.html#XfceFileFilter">XfceFileFilter</a> *filter,
                                             const gchar *mime_type);</pre><p>
Adds a MIME type to the file filter.  All files matching this MIME type will
be displayed in the file chooser when the filter is selected.
</p><p>
Note: this function has no effect when libxfcegui4 is compiled against GTK+
2.2 or below, as file filters are not supported.
</p><p>
Since 4.1</p><p>

</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term"><i class="parameter"><tt>filter</tt></i> :</span></td><td> An <a href="libxfcegui4-XfceFileChooser.html#XfceFileFilter"><span class="type">XfceFileFilter</span></a>.
</td></tr><tr><td><span class="term"><i class="parameter"><tt>mime_type</tt></i> :</span></td><td> A registered MIME type.
</td></tr></tbody></table></div></div><hr><div class="refsect2" lang="en"><a name="id2548637"></a><h3><a name="xfce-file-filter-add-pattern"></a>xfce_file_filter_add_pattern ()</h3><a class="indexterm" name="id2548649"></a><pre class="programlisting">void        xfce_file_filter_add_pattern    (<a href="libxfcegui4-XfceFileChooser.html#XfceFileFilter">XfceFileFilter</a> *filter,
                                             const gchar *pattern);</pre><p>
Adds a shell-glob-type file pattern to the file filter.  All files matching
the pattern will be displayed in the file chooser when the filter is
selected.
</p><p>
Note: this function has no effect when libxfcegui4 is compiled against GTK+
2.2 or below, as file filters are not supported.
</p><p>
Since 4.1</p><p>

</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term"><i class="parameter"><tt>filter</tt></i> :</span></td><td> An <a href="libxfcegui4-XfceFileChooser.html#XfceFileFilter"><span class="type">XfceFileFilter</span></a>.
</td></tr><tr><td><span class="term"><i class="parameter"><tt>pattern</tt></i> :</span></td><td> A file pattern.
</td></tr></tbody></table></div></div></div></div><table class="navigation" width="100%" summary="Navigation footer" cellpadding="2" cellspacing="0"><tr valign="middle"><td align="left"><a accesskey="p" href="XfceAppMenuItem.html"><b>&lt;&lt; XfceAppMenuItem</b></a></td><td align="right"><a accesskey="n" href="XfceFramebox.html"><b>XfceFramebox &gt;&gt;</b></a></td></tr></table></body></html>
