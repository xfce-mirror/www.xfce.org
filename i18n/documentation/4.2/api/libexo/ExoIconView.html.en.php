<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=US-ASCII">
<title>ExoIconView</title>
<meta name="generator" content="DocBook XSL Stylesheets V1.69.1">
<link rel="start" href="index.html" title="exo Reference Manual">
<link rel="up" href="exo-widgets.html" title="Part&#160;III.&#160;Additional widgets">
<link rel="prev" href="ExoIconBar.html" title="ExoIconBar">
<link rel="next" href="ExoTreeView.html" title="ExoTreeView">
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
<td><a accesskey="p" href="ExoIconBar.html"><img src="left.png" width="24" height="24" border="0" alt="Prev"></a></td>
<td><a accesskey="u" href="exo-widgets.html"><img src="up.png" width="24" height="24" border="0" alt="Up"></a></td>
<td><a accesskey="h" href="index.html"><img src="home.png" width="24" height="24" border="0" alt="Home"></a></td>
<th width="100%" align="center">exo Reference Manual</th>
<td><a accesskey="n" href="ExoTreeView.html"><img src="right.png" width="24" height="24" border="0" alt="Next"></a></td>
</tr></table>
<div class="refentry" lang="en">
<a name="ExoIconView"></a><div class="titlepage"></div>
<div class="refnamediv"><table width="100%"><tr>
<td valign="top">
<h2><span class="refentrytitle">ExoIconView</span></h2>
<p>ExoIconView &#8212; A widget which displays a list of icons in a grid</p>
</td>
<td valign="top" align="right"></td>
</tr></table></div>
<div class="refsynopsisdiv">
<h2>Synopsis</h2>
<pre class="synopsis">

#include &lt;exo/exo.h&gt;


            <a href="ExoIconView.html#ExoIconView-struct">ExoIconView</a>;
enum        <a href="ExoIconView.html#ExoIconViewDropPosition">ExoIconViewDropPosition</a>;
GtkWidget*  <a href="ExoIconView.html#exo-icon-view-new">exo_icon_view_new</a>               (void);
GtkWidget*  <a href="ExoIconView.html#exo-icon-view-new-with-model">exo_icon_view_new_with_model</a>    (GtkTreeModel *model);
GtkTreeModel* <a href="ExoIconView.html#exo-icon-view-get-model">exo_icon_view_get_model</a>       (const <a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view);
void        <a href="ExoIconView.html#exo-icon-view-set-model">exo_icon_view_set_model</a>         (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             GtkTreeModel *model);
gint        <a href="ExoIconView.html#exo-icon-view-get-text-column">exo_icon_view_get_text_column</a>   (const <a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view);
void        <a href="ExoIconView.html#exo-icon-view-set-text-column">exo_icon_view_set_text_column</a>   (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             gint column);
gint        <a href="ExoIconView.html#exo-icon-view-get-markup-column">exo_icon_view_get_markup_column</a> (const <a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view);
void        <a href="ExoIconView.html#exo-icon-view-set-markup-column">exo_icon_view_set_markup_column</a> (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             gint column);
gint        <a href="ExoIconView.html#exo-icon-view-get-pixbuf-column">exo_icon_view_get_pixbuf_column</a> (const <a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view);
void        <a href="ExoIconView.html#exo-icon-view-set-pixbuf-column">exo_icon_view_set_pixbuf_column</a> (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             gint column);
GtkOrientation <a href="ExoIconView.html#exo-icon-view-get-orientation">exo_icon_view_get_orientation</a>
                                            (const <a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view);
void        <a href="ExoIconView.html#exo-icon-view-set-orientation">exo_icon_view_set_orientation</a>   (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             GtkOrientation orientation);
gint        <a href="ExoIconView.html#exo-icon-view-get-columns">exo_icon_view_get_columns</a>       (const <a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view);
void        <a href="ExoIconView.html#exo-icon-view-set-columns">exo_icon_view_set_columns</a>       (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             gint columns);
gint        <a href="ExoIconView.html#exo-icon-view-get-item-width">exo_icon_view_get_item_width</a>    (const <a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view);
void        <a href="ExoIconView.html#exo-icon-view-set-item-width">exo_icon_view_set_item_width</a>    (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             gint item_width);
gint        <a href="ExoIconView.html#exo-icon-view-get-spacing">exo_icon_view_get_spacing</a>       (const <a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view);
void        <a href="ExoIconView.html#exo-icon-view-set-spacing">exo_icon_view_set_spacing</a>       (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             gint spacing);
gint        <a href="ExoIconView.html#exo-icon-view-get-row-spacing">exo_icon_view_get_row_spacing</a>   (const <a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view);
void        <a href="ExoIconView.html#exo-icon-view-set-row-spacing">exo_icon_view_set_row_spacing</a>   (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             gint row_spacing);
gint        <a href="ExoIconView.html#exo-icon-view-get-column-spacing">exo_icon_view_get_column_spacing</a>
                                            (const <a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view);
void        <a href="ExoIconView.html#exo-icon-view-set-column-spacing">exo_icon_view_set_column_spacing</a>
                                            (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             gint column_spacing);
gint        <a href="ExoIconView.html#exo-icon-view-get-margin">exo_icon_view_get_margin</a>        (const <a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view);
void        <a href="ExoIconView.html#exo-icon-view-set-margin">exo_icon_view_set_margin</a>        (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             gint margin);
GtkSelectionMode <a href="ExoIconView.html#exo-icon-view-get-selection-mode">exo_icon_view_get_selection_mode</a>
                                            (const <a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view);
void        <a href="ExoIconView.html#exo-icon-view-set-selection-mode">exo_icon_view_set_selection_mode</a>
                                            (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             GtkSelectionMode mode);
gboolean    <a href="ExoIconView.html#exo-icon-view-get-single-click">exo_icon_view_get_single_click</a>  (const <a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view);
void        <a href="ExoIconView.html#exo-icon-view-set-single-click">exo_icon_view_set_single_click</a>  (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             gboolean single_click);
void        <a href="ExoIconView.html#exo-icon-view-widget-to-icon-coords">exo_icon_view_widget_to_icon_coords</a>
                                            (const <a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             gint wx,
                                             gint wy,
                                             gint *ix,
                                             gint *iy);
void        <a href="ExoIconView.html#exo-icon-view-icon-to-widget-coords">exo_icon_view_icon_to_widget_coords</a>
                                            (const <a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             gint ix,
                                             gint iy,
                                             gint *wx,
                                             gint *wy);
GtkTreePath* <a href="ExoIconView.html#exo-icon-view-get-path-at-pos">exo_icon_view_get_path_at_pos</a>  (const <a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             gint x,
                                             gint y);
gboolean    <a href="ExoIconView.html#exo-icon-view-get-item-at-pos">exo_icon_view_get_item_at_pos</a>   (const <a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             gint x,
                                             gint y,
                                             GtkTreePath **path,
                                             GtkCellRenderer **cell);
gboolean    <a href="ExoIconView.html#exo-icon-view-get-visible-range">exo_icon_view_get_visible_range</a> (const <a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             GtkTreePath **start_path,
                                             GtkTreePath **end_path);
void        (<a href="ExoIconView.html#ExoIconViewForeachFunc">*ExoIconViewForeachFunc</a>)       (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             GtkTreePath *path,
                                             gpointer user_data);
void        <a href="ExoIconView.html#exo-icon-view-selected-foreach">exo_icon_view_selected_foreach</a>  (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             <a href="ExoIconView.html#ExoIconViewForeachFunc">ExoIconViewForeachFunc</a> func,
                                             gpointer data);
void        <a href="ExoIconView.html#exo-icon-view-select-path">exo_icon_view_select_path</a>       (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             GtkTreePath *path);
void        <a href="ExoIconView.html#exo-icon-view-unselect-path">exo_icon_view_unselect_path</a>     (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             GtkTreePath *path);
gboolean    <a href="ExoIconView.html#exo-icon-view-path-is-selected">exo_icon_view_path_is_selected</a>  (const <a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             GtkTreePath *path);
GList*      <a href="ExoIconView.html#exo-icon-view-get-selected-items">exo_icon_view_get_selected_items</a>
                                            (const <a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view);
void        <a href="ExoIconView.html#exo-icon-view-select-all">exo_icon_view_select_all</a>        (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view);
void        <a href="ExoIconView.html#exo-icon-view-unselect-all">exo_icon_view_unselect_all</a>      (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view);
void        <a href="ExoIconView.html#exo-icon-view-item-activated">exo_icon_view_item_activated</a>    (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             GtkTreePath *path);
gboolean    <a href="ExoIconView.html#exo-icon-view-get-cursor">exo_icon_view_get_cursor</a>        (const <a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             GtkTreePath **path,
                                             GtkCellRenderer **cell);
void        <a href="ExoIconView.html#exo-icon-view-set-cursor">exo_icon_view_set_cursor</a>        (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             GtkTreePath *path,
                                             GtkCellRenderer *cell,
                                             gboolean start_editing);
void        <a href="ExoIconView.html#exo-icon-view-scroll-to-path">exo_icon_view_scroll_to_path</a>    (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             GtkTreePath *path,
                                             gboolean use_align,
                                             gfloat row_align,
                                             gfloat col_align);
void        <a href="ExoIconView.html#exo-icon-view-enable-model-drag-source">exo_icon_view_enable_model_drag_source</a>
                                            (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             GdkModifierType start_button_mask,
                                             const GtkTargetEntry *targets,
                                             gint n_targets,
                                             GdkDragAction actions);
void        <a href="ExoIconView.html#exo-icon-view-enable-model-drag-dest">exo_icon_view_enable_model_drag_dest</a>
                                            (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             const GtkTargetEntry *targets,
                                             gint n_targets,
                                             GdkDragAction actions);
void        <a href="ExoIconView.html#exo-icon-view-unset-model-drag-source">exo_icon_view_unset_model_drag_source</a>
                                            (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view);
void        <a href="ExoIconView.html#exo-icon-view-unset-model-drag-dest">exo_icon_view_unset_model_drag_dest</a>
                                            (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view);
void        <a href="ExoIconView.html#exo-icon-view-set-reorderable">exo_icon_view_set_reorderable</a>   (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             gboolean reorderable);
gboolean    <a href="ExoIconView.html#exo-icon-view-get-reorderable">exo_icon_view_get_reorderable</a>   (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view);
void        <a href="ExoIconView.html#exo-icon-view-set-drag-dest-item">exo_icon_view_set_drag_dest_item</a>
                                            (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             GtkTreePath *path,
                                             <a href="ExoIconView.html#ExoIconViewDropPosition">ExoIconViewDropPosition</a> pos);
void        <a href="ExoIconView.html#exo-icon-view-get-drag-dest-item">exo_icon_view_get_drag_dest_item</a>
                                            (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             GtkTreePath **path,
                                             <a href="ExoIconView.html#ExoIconViewDropPosition">ExoIconViewDropPosition</a> *pos);
gboolean    <a href="ExoIconView.html#exo-icon-view-get-dest-item-at-pos">exo_icon_view_get_dest_item_at_pos</a>
                                            (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             gint drag_x,
                                             gint drag_y,
                                             GtkTreePath **path,
                                             <a href="ExoIconView.html#ExoIconViewDropPosition">ExoIconViewDropPosition</a> *pos);
GdkPixmap*  <a href="ExoIconView.html#exo-icon-view-create-drag-icon">exo_icon_view_create_drag_icon</a>  (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             GtkTreePath *path);
gboolean    (<a href="ExoIconView.html#ExoIconViewSearchEqualFunc">*ExoIconViewSearchEqualFunc</a>)   (GtkTreeModel *model,
                                             gint column,
                                             const gchar *key,
                                             GtkTreeIter *iter,
                                             gpointer search_data);
void        (<a href="ExoIconView.html#ExoIconViewSearchPositionFunc">*ExoIconViewSearchPositionFunc</a>)
                                            (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             GtkWidget *search_dialog,
                                             gpointer user_data);
gboolean    <a href="ExoIconView.html#exo-icon-view-get-enable-search">exo_icon_view_get_enable_search</a> (const <a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view);
void        <a href="ExoIconView.html#exo-icon-view-set-enable-search">exo_icon_view_set_enable_search</a> (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             gboolean enable_search);
gint        <a href="ExoIconView.html#exo-icon-view-get-search-column">exo_icon_view_get_search_column</a> (const <a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view);
void        <a href="ExoIconView.html#exo-icon-view-set-search-column">exo_icon_view_set_search_column</a> (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             gint search_column);
<a href="ExoIconView.html#ExoIconViewSearchEqualFunc">ExoIconViewSearchEqualFunc</a> <a href="ExoIconView.html#exo-icon-view-get-search-equal-func">exo_icon_view_get_search_equal_func</a>
                                            (const <a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view);
void        <a href="ExoIconView.html#exo-icon-view-set-search-equal-func">exo_icon_view_set_search_equal_func</a>
                                            (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             <a href="ExoIconView.html#ExoIconViewSearchEqualFunc">ExoIconViewSearchEqualFunc</a> search_equal_func,
                                             gpointer search_equal_data,
                                             GDestroyNotify search_equal_destroy);
<a href="ExoIconView.html#ExoIconViewSearchPositionFunc">ExoIconViewSearchPositionFunc</a> <a href="ExoIconView.html#exo-icon-view-get-search-position-func">exo_icon_view_get_search_position_func</a>
                                            (const <a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view);
void        <a href="ExoIconView.html#exo-icon-view-set-search-position-func">exo_icon_view_set_search_position_func</a>
                                            (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             <a href="ExoIconView.html#ExoIconViewSearchPositionFunc">ExoIconViewSearchPositionFunc</a> search_position_func,
                                             gpointer search_position_data,
                                             GDestroyNotify search_position_destroy);


</pre>
</div>
<div class="refsect1" lang="en">
<a name="id2630394"></a><h2>Object Hierarchy</h2>
<pre class="synopsis">

  GObject
   +----GtkObject
         +----GtkWidget
               +----GtkContainer
                     +----ExoIconView
</pre>
</div>
<div class="refsect1" lang="en">
<a name="id2630428"></a><h2>Implemented Interfaces</h2>
<p>
ExoIconView implements
 AtkImplementorIface and  GtkCellLayout.</p>
</div>
<div class="refsect1" lang="en">
<a name="id2630449"></a><h2>Properties</h2>
<pre class="synopsis">

  "<a href="ExoIconView.html#ExoIconView--column-spacing">column-spacing</a>"       gint                  : Read / Write
  "<a href="ExoIconView.html#ExoIconView--columns">columns</a>"              gint                  : Read / Write
  "<a href="ExoIconView.html#ExoIconView--enable-search">enable-search</a>"        gboolean              : Read / Write
  "<a href="ExoIconView.html#ExoIconView--item-width">item-width</a>"           gint                  : Read / Write
  "<a href="ExoIconView.html#ExoIconView--margin">margin</a>"               gint                  : Read / Write
  "<a href="ExoIconView.html#ExoIconView--markup-column">markup-column</a>"        gint                  : Read / Write
  "<a href="ExoIconView.html#ExoIconView--model">model</a>"                GtkTreeModel          : Read / Write
  "<a href="ExoIconView.html#ExoIconView--orientation">orientation</a>"          GtkOrientation        : Read / Write
  "<a href="ExoIconView.html#ExoIconView--pixbuf-column">pixbuf-column</a>"        gint                  : Read / Write
  "<a href="ExoIconView.html#ExoIconView--reorderable">reorderable</a>"          gboolean              : Read / Write
  "<a href="ExoIconView.html#ExoIconView--row-spacing">row-spacing</a>"          gint                  : Read / Write
  "<a href="ExoIconView.html#ExoIconView--search-column">search-column</a>"        gint                  : Read / Write
  "<a href="ExoIconView.html#ExoIconView--selection-mode">selection-mode</a>"       GtkSelectionMode      : Read / Write
  "<a href="ExoIconView.html#ExoIconView--single-click">single-click</a>"         gboolean              : Read / Write
  "<a href="ExoIconView.html#ExoIconView--spacing">spacing</a>"              gint                  : Read / Write
  "<a href="ExoIconView.html#ExoIconView--text-column">text-column</a>"          gint                  : Read / Write
</pre>
</div>
<div class="refsect1" lang="en">
<a name="id2630774"></a><h2>Style Properties</h2>
<pre class="synopsis">

  "<a href="ExoIconView.html#ExoIconView--selection-box-alpha">selection-box-alpha</a>"  guchar                : Read
  "<a href="ExoIconView.html#ExoIconView--selection-box-color">selection-box-color</a>"  GdkColor              : Read
</pre>
</div>
<div class="refsect1" lang="en">
<a name="id2630812"></a><h2>Signal Prototypes</h2>
<pre class="synopsis">

"<a href="ExoIconView.html#ExoIconView-activate-cursor-item">activate-cursor-item</a>"
            gboolean    user_function      (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                            gpointer user_data);
"<a href="ExoIconView.html#ExoIconView-item-activated">item-activated</a>"
            void        user_function      (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                            GtkTreePath *path,
                                            gpointer user_data);
"<a href="ExoIconView.html#ExoIconView-move-cursor">move-cursor</a>"
            gboolean    user_function      (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                            GtkMovementStep step,
                                            gint count,
                                            gpointer user_data);
"<a href="ExoIconView.html#ExoIconView-select-all">select-all</a>"
            void        user_function      (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                            gpointer user_data);
"<a href="ExoIconView.html#ExoIconView-select-cursor-item">select-cursor-item</a>"
            void        user_function      (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                            gpointer user_data);
"<a href="ExoIconView.html#ExoIconView-selection-changed">selection-changed</a>"
            void        user_function      (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                            gpointer user_data);
"<a href="ExoIconView.html#ExoIconView-set-scroll-adjustments">set-scroll-adjustments</a>"
            void        user_function      (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                            GtkAdjustment *hadjustment,
                                            GtkAdjustment *vadjustment,
                                            gpointer user_data);
"<a href="ExoIconView.html#ExoIconView-start-interactive-search">start-interactive-search</a>"
            gboolean    user_function      (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *iconb_view,
                                            gpointer user_data);
"<a href="ExoIconView.html#ExoIconView-toggle-cursor-item">toggle-cursor-item</a>"
            void        user_function      (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                            gpointer user_data);
"<a href="ExoIconView.html#ExoIconView-unselect-all">unselect-all</a>"
            void        user_function      (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                            gpointer user_data);
</pre>
</div>
<div class="refsect1" lang="en">
<a name="id2631223"></a><h2>Description</h2>
<p>
  <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a> provides an alternative view on a list model.
  It displays the model as a grid of icons with labels. Like
  <span class="type">GtkTreeView</span>, it allows to select one or multiple items 
  (depending on the selection mode, see <a href="ExoIconView.html#exo-icon-view-set-selection-mode"><code class="function">exo_icon_view_set_selection_mode()</code></a>).
  In addition to selection with the arrow keys, <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a> supports
  rubberband selection, which is controlled by dragging the pointer.
</p>
</div>
<div class="refsect1" lang="en">
<a name="id2631265"></a><h2>Details</h2>
<div class="refsect2" lang="en">
<a name="id2631270"></a><h3>
<a name="ExoIconView-struct"></a>ExoIconView</h3>
<a class="indexterm" name="id2631278"></a><pre class="programlisting">typedef struct _ExoIconView ExoIconView;</pre>
<p>
  The <span class="structname">ExoIconView</span> struct contains only
  private fields and should not be directly accessed.
</p>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2631297"></a><h3>
<a name="ExoIconViewDropPosition"></a>enum ExoIconViewDropPosition</h3>
<a class="indexterm" name="id2631305"></a><pre class="programlisting">typedef enum
{
  EXO_ICON_VIEW_NO_DROP,
  EXO_ICON_VIEW_DROP_INTO,
  EXO_ICON_VIEW_DROP_LEFT,
  EXO_ICON_VIEW_DROP_RIGHT,
  EXO_ICON_VIEW_DROP_ABOVE,
  EXO_ICON_VIEW_DROP_BELOW
} ExoIconViewDropPosition;
</pre>
<p>
Specifies whether to display the drop indicator,
i.e. where to drop into the icon view.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><code class="literal">EXO_ICON_VIEW_NO_DROP</code></span></td>
<td> no drop indicator.
</td>
</tr>
<tr>
<td>
<span class="term"><code class="literal">EXO_ICON_VIEW_DROP_INTO</code></span></td>
<td> drop indicator on an item.
</td>
</tr>
<tr>
<td>
<span class="term"><code class="literal">EXO_ICON_VIEW_DROP_LEFT</code></span></td>
<td> drop indicator on the left of an item.
</td>
</tr>
<tr>
<td>
<span class="term"><code class="literal">EXO_ICON_VIEW_DROP_RIGHT</code></span></td>
<td> drop indicator on the right of an item.
</td>
</tr>
<tr>
<td>
<span class="term"><code class="literal">EXO_ICON_VIEW_DROP_ABOVE</code></span></td>
<td> drop indicator above an item.
</td>
</tr>
<tr>
<td>
<span class="term"><code class="literal">EXO_ICON_VIEW_DROP_BELOW</code></span></td>
<td> drop indicator below an item.
</td>
</tr>
</tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2631412"></a><h3>
<a name="exo-icon-view-new"></a>exo_icon_view_new ()</h3>
<a class="indexterm" name="id2631420"></a><pre class="programlisting">GtkWidget*  exo_icon_view_new               (void);</pre>
<p>
Creates a new <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a> widget</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody><tr>
<td>
<span class="term"><span class="emphasis"><em>Returns</em></span>&#160;:</span></td>
<td> A newly created <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a> widget
</td>
</tr></tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2631469"></a><h3>
<a name="exo-icon-view-new-with-model"></a>exo_icon_view_new_with_model ()</h3>
<a class="indexterm" name="id2631478"></a><pre class="programlisting">GtkWidget*  exo_icon_view_new_with_model    (GtkTreeModel *model);</pre>
<p>
Creates a new <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a> widget with the model <em class="parameter"><code>model</code></em>.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>model</code></em>&#160;:</span></td>
<td> The model.
</td>
</tr>
<tr>
<td>
<span class="term"><span class="emphasis"><em>Returns</em></span>&#160;:</span></td>
<td> A newly created <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a> widget.
</td>
</tr>
</tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2631550"></a><h3>
<a name="exo-icon-view-get-model"></a>exo_icon_view_get_model ()</h3>
<a class="indexterm" name="id2631559"></a><pre class="programlisting">GtkTreeModel* exo_icon_view_get_model       (const <a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view);</pre>
<p>
Returns the model the <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a> is based on. Returns <code class="literal">NULL</code> if the
model is unset.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>icon_view</code></em>&#160;:</span></td>
<td> a <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>
</td>
</tr>
<tr>
<td>
<span class="term"><span class="emphasis"><em>Returns</em></span>&#160;:</span></td>
<td> A <span class="type">GtkTreeModel</span>, or <code class="literal">NULL</code> if none is currently being used.
</td>
</tr>
</tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2631644"></a><h3>
<a name="exo-icon-view-set-model"></a>exo_icon_view_set_model ()</h3>
<a class="indexterm" name="id2631653"></a><pre class="programlisting">void        exo_icon_view_set_model         (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             GtkTreeModel *model);</pre>
<p>
Sets the model for a <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>.  
If the <em class="parameter"><code>icon_view</code></em> already has a model set, it will remove 
it before setting the new model.  If <em class="parameter"><code>model</code></em> is <code class="literal">NULL</code>, then
it will unset the old model.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>icon_view</code></em>&#160;:</span></td>
<td> A <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>model</code></em>&#160;:</span></td>
<td> The model.
</td>
</tr>
</tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2631815"></a><h3>
<a name="exo-icon-view-get-text-column"></a>exo_icon_view_get_text_column ()</h3>
<a class="indexterm" name="id2631825"></a><pre class="programlisting">gint        exo_icon_view_get_text_column   (const <a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view);</pre>
<div class="warning" style="margin-left: 0.5in; margin-right: 0.5in;">
<h3 class="title">Warning</h3>
<p><code class="literal">exo_icon_view_get_text_column</code> is deprecated and should not be used in newly-written code. Use the more powerful <span class="type">GtkCellRenderer</span>s instead, as <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>
            now implements <span class="type">GtkCellLayout</span>.</p>
</div>
<p>
Returns the column with text for <em class="parameter"><code>icon_view</code></em>.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>icon_view</code></em>&#160;:</span></td>
<td> A <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>.
</td>
</tr>
<tr>
<td>
<span class="term"><span class="emphasis"><em>Returns</em></span>&#160;:</span></td>
<td> the text column, or -1 if it's unset.

</td>
</tr>
</tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2631924"></a><h3>
<a name="exo-icon-view-set-text-column"></a>exo_icon_view_set_text_column ()</h3>
<a class="indexterm" name="id2631933"></a><pre class="programlisting">void        exo_icon_view_set_text_column   (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             gint column);</pre>
<div class="warning" style="margin-left: 0.5in; margin-right: 0.5in;">
<h3 class="title">Warning</h3>
<p><code class="literal">exo_icon_view_set_text_column</code> is deprecated and should not be used in newly-written code. Use the more powerful <span class="type">GtkCellRenderer</span>s instead, as <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>
            now implements <span class="type">GtkCellLayout</span>.</p>
</div>
<p>
Sets the column with text for <em class="parameter"><code>icon_view</code></em> to be <em class="parameter"><code>column</code></em>. The text
column must be of type <span class="type">G_TYPE_STRING</span>.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>icon_view</code></em>&#160;:</span></td>
<td> A <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>column</code></em>&#160;:</span></td>
<td> A column in the currently used model.
</td>
</tr>
</tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2632122"></a><h3>
<a name="exo-icon-view-get-markup-column"></a>exo_icon_view_get_markup_column ()</h3>
<a class="indexterm" name="id2632132"></a><pre class="programlisting">gint        exo_icon_view_get_markup_column (const <a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view);</pre>
<div class="warning" style="margin-left: 0.5in; margin-right: 0.5in;">
<h3 class="title">Warning</h3>
<p><code class="literal">exo_icon_view_get_markup_column</code> is deprecated and should not be used in newly-written code. Use the more powerful <span class="type">GtkCellRenderer</span>s instead, as <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>
            now implements <span class="type">GtkCellLayout</span>.</p>
</div>
<p>
Returns the column with markup text for <em class="parameter"><code>icon_view</code></em>.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>icon_view</code></em>&#160;:</span></td>
<td> A <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>.
</td>
</tr>
<tr>
<td>
<span class="term"><span class="emphasis"><em>Returns</em></span>&#160;:</span></td>
<td> the markup column, or -1 if it's unset.

</td>
</tr>
</tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2632231"></a><h3>
<a name="exo-icon-view-set-markup-column"></a>exo_icon_view_set_markup_column ()</h3>
<a class="indexterm" name="id2632241"></a><pre class="programlisting">void        exo_icon_view_set_markup_column (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             gint column);</pre>
<div class="warning" style="margin-left: 0.5in; margin-right: 0.5in;">
<h3 class="title">Warning</h3>
<p><code class="literal">exo_icon_view_set_markup_column</code> is deprecated and should not be used in newly-written code. Use the more powerful <span class="type">GtkCellRenderer</span>s instead, as <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>
            now implements <span class="type">GtkCellLayout</span>.</p>
</div>
<p>
Sets the column with markup information for <em class="parameter"><code>icon_view</code></em> to be
<em class="parameter"><code>column</code></em>. The markup column must be of type <span class="type">G_TYPE_STRING</span>.
If the markup column is set to something, it overrides
the text column set by <a href="ExoIconView.html#exo-icon-view-set-text-column"><code class="function">exo_icon_view_set_text_column()</code></a>.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>icon_view</code></em>&#160;:</span></td>
<td> A <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>column</code></em>&#160;:</span></td>
<td> A column in the currently used model.
</td>
</tr>
</tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2632371"></a><h3>
<a name="exo-icon-view-get-pixbuf-column"></a>exo_icon_view_get_pixbuf_column ()</h3>
<a class="indexterm" name="id2632380"></a><pre class="programlisting">gint        exo_icon_view_get_pixbuf_column (const <a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view);</pre>
<div class="warning" style="margin-left: 0.5in; margin-right: 0.5in;">
<h3 class="title">Warning</h3>
<p><code class="literal">exo_icon_view_get_pixbuf_column</code> is deprecated and should not be used in newly-written code. Use the more powerful <span class="type">GtkCellRenderer</span>s instead, as <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>
            now implements <span class="type">GtkCellLayout</span>.</p>
</div>
<p>
Returns the column with pixbufs for <em class="parameter"><code>icon_view</code></em>.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>icon_view</code></em>&#160;:</span></td>
<td> A <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>.
</td>
</tr>
<tr>
<td>
<span class="term"><span class="emphasis"><em>Returns</em></span>&#160;:</span></td>
<td> the pixbuf column, or -1 if it's unset.

</td>
</tr>
</tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2632480"></a><h3>
<a name="exo-icon-view-set-pixbuf-column"></a>exo_icon_view_set_pixbuf_column ()</h3>
<a class="indexterm" name="id2632489"></a><pre class="programlisting">void        exo_icon_view_set_pixbuf_column (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             gint column);</pre>
<div class="warning" style="margin-left: 0.5in; margin-right: 0.5in;">
<h3 class="title">Warning</h3>
<p><code class="literal">exo_icon_view_set_pixbuf_column</code> is deprecated and should not be used in newly-written code. Use the more powerful <span class="type">GtkCellRenderer</span>s instead, as <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>
            now implements <span class="type">GtkCellLayout</span>.</p>
</div>
<p>
Sets the column with pixbufs for <em class="parameter"><code>icon_view</code></em> to be <em class="parameter"><code>column</code></em>. The pixbuf
column must be of type <span class="type">GDK_TYPE_PIXBUF</span></p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>icon_view</code></em>&#160;:</span></td>
<td> A <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>column</code></em>&#160;:</span></td>
<td> A column in the currently used model.
</td>
</tr>
</tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2632610"></a><h3>
<a name="exo-icon-view-get-orientation"></a>exo_icon_view_get_orientation ()</h3>
<a class="indexterm" name="id2632619"></a><pre class="programlisting">GtkOrientation exo_icon_view_get_orientation
                                            (const <a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view);</pre>
<p>
Returns the value of the ::orientation property which determines 
whether the labels are drawn beside the icons instead of below.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>icon_view</code></em>&#160;:</span></td>
<td> a <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>
</td>
</tr>
<tr>
<td>
<span class="term"><span class="emphasis"><em>Returns</em></span>&#160;:</span></td>
<td> the relative position of texts and icons 

</td>
</tr>
</tbody>
</table></div>
<p>Since  0.3.1
</p>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2632684"></a><h3>
<a name="exo-icon-view-set-orientation"></a>exo_icon_view_set_orientation ()</h3>
<a class="indexterm" name="id2632694"></a><pre class="programlisting">void        exo_icon_view_set_orientation   (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             GtkOrientation orientation);</pre>
<p>
Sets the ::orientation property which determines whether the labels 
are drawn beside the icons instead of below.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>icon_view</code></em>&#160;:</span></td>
<td> a <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>orientation</code></em>&#160;:</span></td>
<td> the relative position of texts and icons 
</td>
</tr>
</tbody>
</table></div>
<p>Since  0.3.1
</p>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2632770"></a><h3>
<a name="exo-icon-view-get-columns"></a>exo_icon_view_get_columns ()</h3>
<a class="indexterm" name="id2632846"></a><pre class="programlisting">gint        exo_icon_view_get_columns       (const <a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view);</pre>
<p>
Returns the value of the ::columns property.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>icon_view</code></em>&#160;:</span></td>
<td> a <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>
</td>
</tr>
<tr>
<td>
<span class="term"><span class="emphasis"><em>Returns</em></span>&#160;:</span></td>
<td> the number of columns, or -1
</td>
</tr>
</tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2632977"></a><h3>
<a name="exo-icon-view-set-columns"></a>exo_icon_view_set_columns ()</h3>
<a class="indexterm" name="id2632985"></a><pre class="programlisting">void        exo_icon_view_set_columns       (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             gint columns);</pre>
<p>
Sets the ::columns property which determines in how
many columns the icons are arranged. If <em class="parameter"><code>columns</code></em> is
-1, the number of columns will be chosen automatically 
to fill the available area.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>icon_view</code></em>&#160;:</span></td>
<td> a <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>columns</code></em>&#160;:</span></td>
<td> the number of columns
</td>
</tr>
</tbody>
</table></div>
<p>Since  0.3.1
</p>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2633133"></a><h3>
<a name="exo-icon-view-get-item-width"></a>exo_icon_view_get_item_width ()</h3>
<a class="indexterm" name="id2633142"></a><pre class="programlisting">gint        exo_icon_view_get_item_width    (const <a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view);</pre>
<p>
Returns the value of the ::item-width property.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>icon_view</code></em>&#160;:</span></td>
<td> a <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>
</td>
</tr>
<tr>
<td>
<span class="term"><span class="emphasis"><em>Returns</em></span>&#160;:</span></td>
<td> the width of a single item, or -1

</td>
</tr>
</tbody>
</table></div>
<p>Since  0.3.1
</p>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2633209"></a><h3>
<a name="exo-icon-view-set-item-width"></a>exo_icon_view_set_item_width ()</h3>
<a class="indexterm" name="id2633218"></a><pre class="programlisting">void        exo_icon_view_set_item_width    (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             gint item_width);</pre>
<p>
Sets the ::item-width property which specifies the width 
to use for each item. If it is set to -1, the icon view will 
automatically determine a suitable item size.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>icon_view</code></em>&#160;:</span></td>
<td> a <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>item_width</code></em>&#160;:</span></td>
<td> the width for each item
</td>
</tr>
</tbody>
</table></div>
<p>Since  0.3.1
</p>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2633292"></a><h3>
<a name="exo-icon-view-get-spacing"></a>exo_icon_view_get_spacing ()</h3>
<a class="indexterm" name="id2633301"></a><pre class="programlisting">gint        exo_icon_view_get_spacing       (const <a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view);</pre>
<p>
Returns the value of the ::spacing property.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>icon_view</code></em>&#160;:</span></td>
<td> a <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>
</td>
</tr>
<tr>
<td>
<span class="term"><span class="emphasis"><em>Returns</em></span>&#160;:</span></td>
<td> the space between cells 

</td>
</tr>
</tbody>
</table></div>
<p>Since  0.3.1
</p>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2633367"></a><h3>
<a name="exo-icon-view-set-spacing"></a>exo_icon_view_set_spacing ()</h3>
<a class="indexterm" name="id2633376"></a><pre class="programlisting">void        exo_icon_view_set_spacing       (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             gint spacing);</pre>
<p>
Sets the ::spacing property which specifies the space 
which is inserted between the cells (i.e. the icon and 
the text) of an item.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>icon_view</code></em>&#160;:</span></td>
<td> a <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>spacing</code></em>&#160;:</span></td>
<td> the spacing
</td>
</tr>
</tbody>
</table></div>
<p>Since  0.3.1
</p>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2633450"></a><h3>
<a name="exo-icon-view-get-row-spacing"></a>exo_icon_view_get_row_spacing ()</h3>
<a class="indexterm" name="id2633460"></a><pre class="programlisting">gint        exo_icon_view_get_row_spacing   (const <a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view);</pre>
<p>
Returns the value of the ::row-spacing property.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>icon_view</code></em>&#160;:</span></td>
<td> a <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>
</td>
</tr>
<tr>
<td>
<span class="term"><span class="emphasis"><em>Returns</em></span>&#160;:</span></td>
<td> the space between rows

</td>
</tr>
</tbody>
</table></div>
<p>Since  0.3.1
</p>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2633526"></a><h3>
<a name="exo-icon-view-set-row-spacing"></a>exo_icon_view_set_row_spacing ()</h3>
<a class="indexterm" name="id2633536"></a><pre class="programlisting">void        exo_icon_view_set_row_spacing   (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             gint row_spacing);</pre>
<p>
Sets the ::row-spacing property which specifies the space 
which is inserted between the rows of the icon view.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>icon_view</code></em>&#160;:</span></td>
<td> a <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>row_spacing</code></em>&#160;:</span></td>
<td> the row spacing
</td>
</tr>
</tbody>
</table></div>
<p>Since  0.3.1
</p>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2633610"></a><h3>
<a name="exo-icon-view-get-column-spacing"></a>exo_icon_view_get_column_spacing ()</h3>
<a class="indexterm" name="id2633622"></a><pre class="programlisting">gint        exo_icon_view_get_column_spacing
                                            (const <a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view);</pre>
<p>
Returns the value of the ::column-spacing property.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>icon_view</code></em>&#160;:</span></td>
<td> a <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>
</td>
</tr>
<tr>
<td>
<span class="term"><span class="emphasis"><em>Returns</em></span>&#160;:</span></td>
<td> the space between columns

</td>
</tr>
</tbody>
</table></div>
<p>Since  0.3.1
</p>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2633688"></a><h3>
<a name="exo-icon-view-set-column-spacing"></a>exo_icon_view_set_column_spacing ()</h3>
<a class="indexterm" name="id2633700"></a><pre class="programlisting">void        exo_icon_view_set_column_spacing
                                            (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             gint column_spacing);</pre>
<p>
Sets the ::column-spacing property which specifies the space 
which is inserted between the columns of the icon view.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>icon_view</code></em>&#160;:</span></td>
<td> a <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>column_spacing</code></em>&#160;:</span></td>
<td> the column spacing
</td>
</tr>
</tbody>
</table></div>
<p>Since  0.3.1
</p>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2633774"></a><h3>
<a name="exo-icon-view-get-margin"></a>exo_icon_view_get_margin ()</h3>
<a class="indexterm" name="id2633783"></a><pre class="programlisting">gint        exo_icon_view_get_margin        (const <a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view);</pre>
<p>
Returns the value of the ::margin property.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>icon_view</code></em>&#160;:</span></td>
<td> a <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>
</td>
</tr>
<tr>
<td>
<span class="term"><span class="emphasis"><em>Returns</em></span>&#160;:</span></td>
<td> the space at the borders 

</td>
</tr>
</tbody>
</table></div>
<p>Since  0.3.1
</p>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2633917"></a><h3>
<a name="exo-icon-view-set-margin"></a>exo_icon_view_set_margin ()</h3>
<a class="indexterm" name="id2633926"></a><pre class="programlisting">void        exo_icon_view_set_margin        (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             gint margin);</pre>
<p>
Sets the ::margin property which specifies the space 
which is inserted at the top, bottom, left and right 
of the icon view.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>icon_view</code></em>&#160;:</span></td>
<td> a <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>margin</code></em>&#160;:</span></td>
<td> the margin
</td>
</tr>
</tbody>
</table></div>
<p>Since  0.3.1
</p>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2634001"></a><h3>
<a name="exo-icon-view-get-selection-mode"></a>exo_icon_view_get_selection_mode ()</h3>
<a class="indexterm" name="id2634012"></a><pre class="programlisting">GtkSelectionMode exo_icon_view_get_selection_mode
                                            (const <a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view);</pre>
<p>
Gets the selection mode of the <em class="parameter"><code>icon_view</code></em>.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>icon_view</code></em>&#160;:</span></td>
<td> A <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>.
</td>
</tr>
<tr>
<td>
<span class="term"><span class="emphasis"><em>Returns</em></span>&#160;:</span></td>
<td> the current selection mode
</td>
</tr>
</tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2634080"></a><h3>
<a name="exo-icon-view-set-selection-mode"></a>exo_icon_view_set_selection_mode ()</h3>
<a class="indexterm" name="id2634091"></a><pre class="programlisting">void        exo_icon_view_set_selection_mode
                                            (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             GtkSelectionMode mode);</pre>
<p>
Sets the selection mode of the <em class="parameter"><code>icon_view</code></em>.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>icon_view</code></em>&#160;:</span></td>
<td> A <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>mode</code></em>&#160;:</span></td>
<td> The selection mode
</td>
</tr>
</tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2634236"></a><h3>
<a name="exo-icon-view-get-single-click"></a>exo_icon_view_get_single_click ()</h3>
<a class="indexterm" name="id2634246"></a><pre class="programlisting">gboolean    exo_icon_view_get_single_click  (const <a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view);</pre>
<p>
Returns <code class="literal">TRUE</code> if <em class="parameter"><code>icon_view</code></em> is currently in single click mode,
else <code class="literal">FALSE</code> will be returned.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>icon_view</code></em>&#160;:</span></td>
<td> a <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>.
</td>
</tr>
<tr>
<td>
<span class="term"><span class="emphasis"><em>Returns</em></span>&#160;:</span></td>
<td> whether <em class="parameter"><code>icon_view</code></em> is currently in single click mode.

</td>
</tr>
</tbody>
</table></div>
<p>Since  0.3.1.3
</p>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2634334"></a><h3>
<a name="exo-icon-view-set-single-click"></a>exo_icon_view_set_single_click ()</h3>
<a class="indexterm" name="id2634344"></a><pre class="programlisting">void        exo_icon_view_set_single_click  (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             gboolean single_click);</pre>
<p>
If <em class="parameter"><code>single_click</code></em> is <code class="literal">TRUE</code>, <em class="parameter"><code>icon_view</code></em> will be in single click mode
afterwards, else <em class="parameter"><code>icon_view</code></em> will be in double click mode.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>icon_view</code></em>&#160;:</span></td>
<td> a <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>single_click</code></em>&#160;:</span></td>
<td> <code class="literal">TRUE</code> for single click, <code class="literal">FALSE</code> for double click mode.
</td>
</tr>
</tbody>
</table></div>
<p>Since  0.3.1.3
</p>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2634452"></a><h3>
<a name="exo-icon-view-widget-to-icon-coords"></a>exo_icon_view_widget_to_icon_coords ()</h3>
<a class="indexterm" name="id2634464"></a><pre class="programlisting">void        exo_icon_view_widget_to_icon_coords
                                            (const <a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             gint wx,
                                             gint wy,
                                             gint *ix,
                                             gint *iy);</pre>
<p>
Converts widget coordinates to coordinates for the icon window
(the full scrollable area of the icon view).</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>icon_view</code></em>&#160;:</span></td>
<td> a <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>wx</code></em>&#160;:</span></td>
<td> widget x coordinate.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>wy</code></em>&#160;:</span></td>
<td> widget y coordinate.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>ix</code></em>&#160;:</span></td>
<td> return location for icon x coordinate or <code class="literal">NULL</code>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>iy</code></em>&#160;:</span></td>
<td> return location for icon y coordinate or <code class="literal">NULL</code>.
</td>
</tr>
</tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2634604"></a><h3>
<a name="exo-icon-view-icon-to-widget-coords"></a>exo_icon_view_icon_to_widget_coords ()</h3>
<a class="indexterm" name="id2634616"></a><pre class="programlisting">void        exo_icon_view_icon_to_widget_coords
                                            (const <a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             gint ix,
                                             gint iy,
                                             gint *wx,
                                             gint *wy);</pre>
<p>
Converts icon view coordinates (coordinates in full scrollable
area of the icon view) to widget coordinates.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>icon_view</code></em>&#160;:</span></td>
<td> a <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>ix</code></em>&#160;:</span></td>
<td> icon x coordinate.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>iy</code></em>&#160;:</span></td>
<td> icon y coordinate.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>wx</code></em>&#160;:</span></td>
<td> return location for widget x coordinate or <code class="literal">NULL</code>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>wy</code></em>&#160;:</span></td>
<td> return location for widget y coordinate or <code class="literal">NULL</code>.
</td>
</tr>
</tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2634825"></a><h3>
<a name="exo-icon-view-get-path-at-pos"></a>exo_icon_view_get_path_at_pos ()</h3>
<a class="indexterm" name="id2634835"></a><pre class="programlisting">GtkTreePath* exo_icon_view_get_path_at_pos  (const <a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             gint x,
                                             gint y);</pre>
<p>
Finds the path at the point (<em class="parameter"><code>x</code></em>, <em class="parameter"><code>y</code></em>), relative to widget coordinates.
See <a href="ExoIconView.html#exo-icon-view-get-item-at-pos"><code class="function">exo_icon_view_get_item_at_pos()</code></a>, if you are also interested in
the cell at the specified position.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>icon_view</code></em>&#160;:</span></td>
<td> A <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>x</code></em>&#160;:</span></td>
<td> The x position to be identified
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>y</code></em>&#160;:</span></td>
<td> The y position to be identified
</td>
</tr>
<tr>
<td>
<span class="term"><span class="emphasis"><em>Returns</em></span>&#160;:</span></td>
<td> The <span class="type">GtkTreePath</span> corresponding to the icon or <code class="literal">NULL</code>
              if no icon exists at that position.
</td>
</tr>
</tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2634969"></a><h3>
<a name="exo-icon-view-get-item-at-pos"></a>exo_icon_view_get_item_at_pos ()</h3>
<a class="indexterm" name="id2634979"></a><pre class="programlisting">gboolean    exo_icon_view_get_item_at_pos   (const <a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             gint x,
                                             gint y,
                                             GtkTreePath **path,
                                             GtkCellRenderer **cell);</pre>
<p>
Finds the path at the point (<em class="parameter"><code>x</code></em>, <em class="parameter"><code>y</code></em>), relative to widget coordinates.
In contrast to <a href="ExoIconView.html#exo-icon-view-get-path-at-pos"><code class="function">exo_icon_view_get_path_at_pos()</code></a>, this function also 
obtains the cell at the specified position. The returned path should
be freed with <code class="function">gtk_tree_path_free()</code>.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>icon_view</code></em>&#160;:</span></td>
<td> A <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>x</code></em>&#160;:</span></td>
<td> The x position to be identified
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>y</code></em>&#160;:</span></td>
<td> The y position to be identified
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>path</code></em>&#160;:</span></td>
<td> Return location for the path, or <code class="literal">NULL</code>
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>cell</code></em>&#160;:</span></td>
<td> Return location for the renderer responsible for the cell
  at (<em class="parameter"><code>x</code></em>, <em class="parameter"><code>y</code></em>), or <code class="literal">NULL</code>
</td>
</tr>
<tr>
<td>
<span class="term"><span class="emphasis"><em>Returns</em></span>&#160;:</span></td>
<td> <code class="literal">TRUE</code> if an item exists at the specified position

</td>
</tr>
</tbody>
</table></div>
<p>Since  0.3.1
</p>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2635180"></a><h3>
<a name="exo-icon-view-get-visible-range"></a>exo_icon_view_get_visible_range ()</h3>
<a class="indexterm" name="id2635190"></a><pre class="programlisting">gboolean    exo_icon_view_get_visible_range (const <a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             GtkTreePath **start_path,
                                             GtkTreePath **end_path);</pre>
<p>
Sets <em class="parameter"><code>start_path</code></em> and <em class="parameter"><code>end_path</code></em> to be the first and last visible path. 
Note that there may be invisible paths in between.
</p>
<p>
Both paths should be freed with <code class="function">gtk_tree_path_free()</code> after use.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>icon_view</code></em>&#160;:</span></td>
<td> A <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>start_path</code></em>&#160;:</span></td>
<td> Return location for start of region, or <code class="literal">NULL</code>
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>end_path</code></em>&#160;:</span></td>
<td> Return location for end of region, or <code class="literal">NULL</code>
</td>
</tr>
<tr>
<td>
<span class="term"><span class="emphasis"><em>Returns</em></span>&#160;:</span></td>
<td> <code class="literal">TRUE</code>, if valid paths were placed in <em class="parameter"><code>start_path</code></em> and <em class="parameter"><code>end_path</code></em>

</td>
</tr>
</tbody>
</table></div>
<p>Since  0.3.1
</p>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2635347"></a><h3>
<a name="ExoIconViewForeachFunc"></a>ExoIconViewForeachFunc ()</h3>
<a class="indexterm" name="id2635355"></a><pre class="programlisting">void        (*ExoIconViewForeachFunc)       (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             GtkTreePath *path,
                                             gpointer user_data);</pre>
<p>
Callback function prototype, invoked for every selected path in the
<em class="parameter"><code>icon_view</code></em>. See <a href="ExoIconView.html#exo-icon-view-selected-foreach"><code class="function">exo_icon_view_selected_foreach()</code></a> for details.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>icon_view</code></em>&#160;:</span></td>
<td> an <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>path</code></em>&#160;:</span></td>
<td> the current path.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>user_data</code></em>&#160;:</span></td>
<td> the user data supplied to <a href="ExoIconView.html#exo-icon-view-selected-foreach"><code class="function">exo_icon_view_selected_foreach()</code></a>.
</td>
</tr>
</tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2635538"></a><h3>
<a name="exo-icon-view-selected-foreach"></a>exo_icon_view_selected_foreach ()</h3>
<a class="indexterm" name="id2635547"></a><pre class="programlisting">void        exo_icon_view_selected_foreach  (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             <a href="ExoIconView.html#ExoIconViewForeachFunc">ExoIconViewForeachFunc</a> func,
                                             gpointer data);</pre>
<p>
Calls a function for each selected icon. Note that the model or
selection cannot be modified from within this function.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>icon_view</code></em>&#160;:</span></td>
<td> A <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>func</code></em>&#160;:</span></td>
<td> The funcion to call for each selected icon.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>data</code></em>&#160;:</span></td>
<td> User data to pass to the function.
</td>
</tr>
</tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2635707"></a><h3>
<a name="exo-icon-view-select-path"></a>exo_icon_view_select_path ()</h3>
<a class="indexterm" name="id2635716"></a><pre class="programlisting">void        exo_icon_view_select_path       (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             GtkTreePath *path);</pre>
<p>
Selects the row at <em class="parameter"><code>path</code></em>.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>icon_view</code></em>&#160;:</span></td>
<td> A <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>path</code></em>&#160;:</span></td>
<td> The <span class="type">GtkTreePath</span> to be selected.
</td>
</tr>
</tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2635798"></a><h3>
<a name="exo-icon-view-unselect-path"></a>exo_icon_view_unselect_path ()</h3>
<a class="indexterm" name="id2635806"></a><pre class="programlisting">void        exo_icon_view_unselect_path     (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             GtkTreePath *path);</pre>
<p>
Unselects the row at <em class="parameter"><code>path</code></em>.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>icon_view</code></em>&#160;:</span></td>
<td> A <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>path</code></em>&#160;:</span></td>
<td> The <span class="type">GtkTreePath</span> to be unselected.
</td>
</tr>
</tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2635889"></a><h3>
<a name="exo-icon-view-path-is-selected"></a>exo_icon_view_path_is_selected ()</h3>
<a class="indexterm" name="id2635898"></a><pre class="programlisting">gboolean    exo_icon_view_path_is_selected  (const <a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             GtkTreePath *path);</pre>
<p>
Returns <code class="literal">TRUE</code> if the icon pointed to by <em class="parameter"><code>path</code></em> is currently
selected. If <em class="parameter"><code>icon</code></em> does not point to a valid location, <code class="literal">FALSE</code> is returned.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>icon_view</code></em>&#160;:</span></td>
<td> A <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>path</code></em>&#160;:</span></td>
<td> A <span class="type">GtkTreePath</span> to check selection on.
</td>
</tr>
<tr>
<td>
<span class="term"><span class="emphasis"><em>Returns</em></span>&#160;:</span></td>
<td> <code class="literal">TRUE</code> if <em class="parameter"><code>path</code></em> is selected.
</td>
</tr>
</tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2636018"></a><h3>
<a name="exo-icon-view-get-selected-items"></a>exo_icon_view_get_selected_items ()</h3>
<a class="indexterm" name="id2636029"></a><pre class="programlisting">GList*      exo_icon_view_get_selected_items
                                            (const <a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view);</pre>
<p>
Creates a list of paths of all selected items. Additionally, if you are
planning on modifying the model after calling this function, you may
want to convert the returned list into a list of <span class="type">GtkTreeRowReference</span>s.
To do this, you can use <code class="function">gtk_tree_row_reference_new()</code>.
</p>
<p>
To free the return value, use:
</p>
<div class="informalexample"><pre class="programlisting">
g_list_foreach (list, gtk_tree_path_free, NULL);
g_list_free (list);
</pre></div>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>icon_view</code></em>&#160;:</span></td>
<td> A <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>.
</td>
</tr>
<tr>
<td>
<span class="term"><span class="emphasis"><em>Returns</em></span>&#160;:</span></td>
<td> A <span class="type">GList</span> containing a <span class="type">GtkTreePath</span> for each selected row.
</td>
</tr>
</tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2636129"></a><h3>
<a name="exo-icon-view-select-all"></a>exo_icon_view_select_all ()</h3>
<a class="indexterm" name="id2636137"></a><pre class="programlisting">void        exo_icon_view_select_all        (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view);</pre>
<p>
Selects all the icons. <em class="parameter"><code>icon_view</code></em> must has its selection mode set
to <span class="type">GTK_SELECTION_MULTIPLE</span>.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody><tr>
<td>
<span class="term"><em class="parameter"><code>icon_view</code></em>&#160;:</span></td>
<td> A <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>.
</td>
</tr></tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2636201"></a><h3>
<a name="exo-icon-view-unselect-all"></a>exo_icon_view_unselect_all ()</h3>
<a class="indexterm" name="id2636210"></a><pre class="programlisting">void        exo_icon_view_unselect_all      (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view);</pre>
<p>
Unselects all the icons.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody><tr>
<td>
<span class="term"><em class="parameter"><code>icon_view</code></em>&#160;:</span></td>
<td> A <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>.
</td>
</tr></tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2636261"></a><h3>
<a name="exo-icon-view-item-activated"></a>exo_icon_view_item_activated ()</h3>
<a class="indexterm" name="id2636269"></a><pre class="programlisting">void        exo_icon_view_item_activated    (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             GtkTreePath *path);</pre>
<p>
Activates the item determined by <em class="parameter"><code>path</code></em>.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>icon_view</code></em>&#160;:</span></td>
<td> a <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>path</code></em>&#160;:</span></td>
<td> the <span class="type">GtkTreePath</span> to be activated
</td>
</tr>
</tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2636353"></a><h3>
<a name="exo-icon-view-get-cursor"></a>exo_icon_view_get_cursor ()</h3>
<a class="indexterm" name="id2636361"></a><pre class="programlisting">gboolean    exo_icon_view_get_cursor        (const <a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             GtkTreePath **path,
                                             GtkCellRenderer **cell);</pre>
<p>
Fills in <em class="parameter"><code>path</code></em> and <em class="parameter"><code>cell</code></em> with the current cursor path and cell. 
If the cursor isn't currently set, then *<em class="parameter"><code>path</code></em> will be <code class="literal">NULL</code>.  
If no cell currently has focus, then *<em class="parameter"><code>cell</code></em> will be <code class="literal">NULL</code>.
</p>
<p>
The returned <span class="type">GtkTreePath</span> must be freed with <code class="function">gtk_tree_path_free()</code>.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>icon_view</code></em>&#160;:</span></td>
<td> A <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>path</code></em>&#160;:</span></td>
<td> Return location for the current cursor path, or <code class="literal">NULL</code>
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>cell</code></em>&#160;:</span></td>
<td> Return location the current focus cell, or <code class="literal">NULL</code>
</td>
</tr>
<tr>
<td>
<span class="term"><span class="emphasis"><em>Returns</em></span>&#160;:</span></td>
<td> <code class="literal">TRUE</code> if the cursor is set.

</td>
</tr>
</tbody>
</table></div>
<p>Since  0.3.1
</p>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2636670"></a><h3>
<a name="exo-icon-view-set-cursor"></a>exo_icon_view_set_cursor ()</h3>
<a class="indexterm" name="id2636679"></a><pre class="programlisting">void        exo_icon_view_set_cursor        (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             GtkTreePath *path,
                                             GtkCellRenderer *cell,
                                             gboolean start_editing);</pre>
<p>
Sets the current keyboard focus to be at <em class="parameter"><code>path</code></em>, and selects it.  This is
useful when you want to focus the user's attention on a particular item.  
If <em class="parameter"><code>cell</code></em> is not <code class="literal">NULL</code>, then focus is given to the cell specified by 
it. Additionally, if <em class="parameter"><code>start_editing</code></em> is <code class="literal">TRUE</code>, then editing should be 
started in the specified cell.  
</p>
<p>
This function is often followed by <code class="literal">gtk_widget_grab_focus 
(icon_view)</code> in order to give keyboard focus to the widget.  
Please note that editing can only happen when the widget is realized.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>icon_view</code></em>&#160;:</span></td>
<td> a <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>path</code></em>&#160;:</span></td>
<td> a <span class="type">GtkTreePath</span>
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>cell</code></em>&#160;:</span></td>
<td> a <span class="type">GtkCellRenderer</span> or <code class="literal">NULL</code>
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>start_editing</code></em>&#160;:</span></td>
<td> <code class="literal">TRUE</code> if the specified cell should start being edited.
</td>
</tr>
</tbody>
</table></div>
<p>Since  0.3.1
</p>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2636856"></a><h3>
<a name="exo-icon-view-scroll-to-path"></a>exo_icon_view_scroll_to_path ()</h3>
<a class="indexterm" name="id2636865"></a><pre class="programlisting">void        exo_icon_view_scroll_to_path    (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             GtkTreePath *path,
                                             gboolean use_align,
                                             gfloat row_align,
                                             gfloat col_align);</pre>
<p>
Moves the alignments of <em class="parameter"><code>icon_view</code></em> to the position specified by <em class="parameter"><code>path</code></em>.  
<em class="parameter"><code>row_align</code></em> determines where the row is placed, and <em class="parameter"><code>col_align</code></em> determines where 
<em class="parameter"><code>column</code></em> is placed.  Both are expected to be between 0.0 and 1.0. 
0.0 means left/top alignment, 1.0 means right/bottom alignment, 0.5 means center.
</p>
<p>
If <em class="parameter"><code>use_align</code></em> is <code class="literal">FALSE</code>, then the alignment arguments are ignored, and the
tree does the minimum amount of work to scroll the item onto the screen.
This means that the item will be scrolled to the edge closest to its current
position.  If the item is currently visible on the screen, nothing is done.
</p>
<p>
This function only works if the model is set, and <em class="parameter"><code>path</code></em> is a valid row on the
model.  If the model changes before the <em class="parameter"><code>tree_view</code></em> is realized, the centered
path will be modified to reflect this change.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>icon_view</code></em>&#160;:</span></td>
<td> A <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>path</code></em>&#160;:</span></td>
<td> The path of the item to move to.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>use_align</code></em>&#160;:</span></td>
<td> whether to use alignment arguments, or <code class="literal">FALSE</code>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>row_align</code></em>&#160;:</span></td>
<td> The vertical alignment of the item specified by <em class="parameter"><code>path</code></em>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>col_align</code></em>&#160;:</span></td>
<td> The horizontal alignment of the item specified by <em class="parameter"><code>column</code></em>.
</td>
</tr>
</tbody>
</table></div>
<p>Since  0.3.1
</p>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2637075"></a><h3>
<a name="exo-icon-view-enable-model-drag-source"></a>exo_icon_view_enable_model_drag_source ()</h3>
<a class="indexterm" name="id2637086"></a><pre class="programlisting">void        exo_icon_view_enable_model_drag_source
                                            (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             GdkModifierType start_button_mask,
                                             const GtkTargetEntry *targets,
                                             gint n_targets,
                                             GdkDragAction actions);</pre>
<p>
Turns <em class="parameter"><code>icon_view</code></em> into a drag source for automatic DND.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>icon_view</code></em>&#160;:</span></td>
<td> a <span class="type">GtkIconTreeView</span>
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>start_button_mask</code></em>&#160;:</span></td>
<td> Mask of allowed buttons to start drag
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>targets</code></em>&#160;:</span></td>
<td> the table of targets that the drag will support
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>n_targets</code></em>&#160;:</span></td>
<td> the number of items in <em class="parameter"><code>targets</code></em>
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>actions</code></em>&#160;:</span></td>
<td> the bitmask of possible actions for a drag from this widget
</td>
</tr>
</tbody>
</table></div>
<p>Since  0.3.1
</p>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2637233"></a><h3>
<a name="exo-icon-view-enable-model-drag-dest"></a>exo_icon_view_enable_model_drag_dest ()</h3>
<a class="indexterm" name="id2637244"></a><pre class="programlisting">void        exo_icon_view_enable_model_drag_dest
                                            (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             const GtkTargetEntry *targets,
                                             gint n_targets,
                                             GdkDragAction actions);</pre>
<p>
Turns <em class="parameter"><code>icon_view</code></em> into a drop destination for automatic DND.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>icon_view</code></em>&#160;:</span></td>
<td> a <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>targets</code></em>&#160;:</span></td>
<td> the table of targets that the drag will support
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>n_targets</code></em>&#160;:</span></td>
<td> the number of items in <em class="parameter"><code>targets</code></em>
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>actions</code></em>&#160;:</span></td>
<td> the bitmask of possible actions for a drag from this widget
</td>
</tr>
</tbody>
</table></div>
<p>Since  0.3.1
</p>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2637438"></a><h3>
<a name="exo-icon-view-unset-model-drag-source"></a>exo_icon_view_unset_model_drag_source ()</h3>
<a class="indexterm" name="id2637450"></a><pre class="programlisting">void        exo_icon_view_unset_model_drag_source
                                            (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view);</pre>
<p>
Undoes the effect of #<a href="ExoIconView.html#exo-icon-view-enable-model-drag-source"><code class="function">exo_icon_view_enable_model_drag_source()</code></a>.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody><tr>
<td>
<span class="term"><em class="parameter"><code>icon_view</code></em>&#160;:</span></td>
<td> a <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>
</td>
</tr></tbody>
</table></div>
<p>Since  0.3.1
</p>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2637517"></a><h3>
<a name="exo-icon-view-unset-model-drag-dest"></a>exo_icon_view_unset_model_drag_dest ()</h3>
<a class="indexterm" name="id2637529"></a><pre class="programlisting">void        exo_icon_view_unset_model_drag_dest
                                            (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view);</pre>
<p>
Undoes the effect of #<a href="ExoIconView.html#exo-icon-view-enable-model-drag-dest"><code class="function">exo_icon_view_enable_model_drag_dest()</code></a>.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody><tr>
<td>
<span class="term"><em class="parameter"><code>icon_view</code></em>&#160;:</span></td>
<td> a <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>
</td>
</tr></tbody>
</table></div>
<p>Since  0.3.1
</p>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2637596"></a><h3>
<a name="exo-icon-view-set-reorderable"></a>exo_icon_view_set_reorderable ()</h3>
<a class="indexterm" name="id2637606"></a><pre class="programlisting">void        exo_icon_view_set_reorderable   (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             gboolean reorderable);</pre>
<p>
This function is a convenience function to allow you to reorder models that
support the <span class="type">GtkTreeDragSourceIface</span> and the <span class="type">GtkTreeDragDestIface</span>.  Both
<span class="type">GtkTreeStore</span> and <span class="type">GtkListStore</span> support these.  If <em class="parameter"><code>reorderable</code></em> is <code class="literal">TRUE</code>, then
the user can reorder the model by dragging and dropping rows.  The
developer can listen to these changes by connecting to the model's
::row-inserted and ::row-deleted signals.
</p>
<p>
This function does not give you any degree of control over the order -- any
reordering is allowed.  If more control is needed, you should probably
handle drag and drop manually.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>icon_view</code></em>&#160;:</span></td>
<td> A <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>reorderable</code></em>&#160;:</span></td>
<td> <code class="literal">TRUE</code>, if the list of items can be reordered.
</td>
</tr>
</tbody>
</table></div>
<p>Since  0.3.1
</p>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2637795"></a><h3>
<a name="exo-icon-view-get-reorderable"></a>exo_icon_view_get_reorderable ()</h3>
<a class="indexterm" name="id2637804"></a><pre class="programlisting">gboolean    exo_icon_view_get_reorderable   (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view);</pre>
<p>
Retrieves whether the user can reorder the list via drag-and-drop. 
See <a href="ExoIconView.html#exo-icon-view-set-reorderable"><code class="function">exo_icon_view_set_reorderable()</code></a>.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>icon_view</code></em>&#160;:</span></td>
<td> a <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>
</td>
</tr>
<tr>
<td>
<span class="term"><span class="emphasis"><em>Returns</em></span>&#160;:</span></td>
<td> <code class="literal">TRUE</code> if the list can be reordered.

</td>
</tr>
</tbody>
</table></div>
<p>Since  0.3.1
</p>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2637884"></a><h3>
<a name="exo-icon-view-set-drag-dest-item"></a>exo_icon_view_set_drag_dest_item ()</h3>
<a class="indexterm" name="id2637964"></a><pre class="programlisting">void        exo_icon_view_set_drag_dest_item
                                            (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             GtkTreePath *path,
                                             <a href="ExoIconView.html#ExoIconViewDropPosition">ExoIconViewDropPosition</a> pos);</pre>
<p>
Sets the item that is highlighted for feedback.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>icon_view</code></em>&#160;:</span></td>
<td> a <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>path</code></em>&#160;:</span></td>
<td> The path of the item to highlight, or <code class="literal">NULL</code>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>pos</code></em>&#160;:</span></td>
<td> Specifies whether to drop, relative to the item
</td>
</tr>
</tbody>
</table></div>
<p>Since  0.3.1
</p>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2638067"></a><h3>
<a name="exo-icon-view-get-drag-dest-item"></a>exo_icon_view_get_drag_dest_item ()</h3>
<a class="indexterm" name="id2638078"></a><pre class="programlisting">void        exo_icon_view_get_drag_dest_item
                                            (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             GtkTreePath **path,
                                             <a href="ExoIconView.html#ExoIconViewDropPosition">ExoIconViewDropPosition</a> *pos);</pre>
<p>
Gets information about the item that is highlighted for feedback.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>icon_view</code></em>&#160;:</span></td>
<td> a <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>path</code></em>&#160;:</span></td>
<td> Return location for the path of the highlighted item, or <code class="literal">NULL</code>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>pos</code></em>&#160;:</span></td>
<td> Return location for the drop position, or <code class="literal">NULL</code>
</td>
</tr>
</tbody>
</table></div>
<p>Since  0.3.1
</p>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2638185"></a><h3>
<a name="exo-icon-view-get-dest-item-at-pos"></a>exo_icon_view_get_dest_item_at_pos ()</h3>
<a class="indexterm" name="id2638197"></a><pre class="programlisting">gboolean    exo_icon_view_get_dest_item_at_pos
                                            (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             gint drag_x,
                                             gint drag_y,
                                             GtkTreePath **path,
                                             <a href="ExoIconView.html#ExoIconViewDropPosition">ExoIconViewDropPosition</a> *pos);</pre>
<p>
Determines the destination item for a given position.
</p>
<p>
Both <em class="parameter"><code>drag_x</code></em> and <em class="parameter"><code>drag_y</code></em> are given in icon window coordinates. Use
#<a href="ExoIconView.html#exo-icon-view-widget-to-icon-coords"><code class="function">exo_icon_view_widget_to_icon_coords()</code></a> if you need to translate
widget coordinates first.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>icon_view</code></em>&#160;:</span></td>
<td> a <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>drag_x</code></em>&#160;:</span></td>
<td> the position to determine the destination item for
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>drag_y</code></em>&#160;:</span></td>
<td> the position to determine the destination item for
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>path</code></em>&#160;:</span></td>
<td> Return location for the path of the highlighted item, or <code class="literal">NULL</code>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>pos</code></em>&#160;:</span></td>
<td> Return location for the drop position, or <code class="literal">NULL</code>
</td>
</tr>
<tr>
<td>
<span class="term"><span class="emphasis"><em>Returns</em></span>&#160;:</span></td>
<td> whether there is an item at the given position.

</td>
</tr>
</tbody>
</table></div>
<p>Since  0.3.1
</p>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2638452"></a><h3>
<a name="exo-icon-view-create-drag-icon"></a>exo_icon_view_create_drag_icon ()</h3>
<a class="indexterm" name="id2638461"></a><pre class="programlisting">GdkPixmap*  exo_icon_view_create_drag_icon  (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             GtkTreePath *path);</pre>
<p>
Creates a <span class="type">GdkPixmap</span> representation of the item at <em class="parameter"><code>path</code></em>.  
This image is used for a drag icon.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>icon_view</code></em>&#160;:</span></td>
<td> a <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>path</code></em>&#160;:</span></td>
<td> a <span class="type">GtkTreePath</span> in <em class="parameter"><code>icon_view</code></em>
</td>
</tr>
<tr>
<td>
<span class="term"><span class="emphasis"><em>Returns</em></span>&#160;:</span></td>
<td> a newly-allocated pixmap of the drag icon.

</td>
</tr>
</tbody>
</table></div>
<p>Since  0.3.1
</p>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2638571"></a><h3>
<a name="ExoIconViewSearchEqualFunc"></a>ExoIconViewSearchEqualFunc ()</h3>
<a class="indexterm" name="id2638580"></a><pre class="programlisting">gboolean    (*ExoIconViewSearchEqualFunc)   (GtkTreeModel *model,
                                             gint column,
                                             const gchar *key,
                                             GtkTreeIter *iter,
                                             gpointer search_data);</pre>
<p>
A function used for checking whether a row in <em class="parameter"><code>model</code></em> matches a search key string
entered by the user. Note the return value is reversed from what you would normally
expect, though it has some similarity to <code class="function">strcmp()</code> returning 0 for equal strings.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>model</code></em>&#160;:</span></td>
<td> the <span class="type">GtkTreeModel</span> being searched.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>column</code></em>&#160;:</span></td>
<td> the search column set by <a href="ExoIconView.html#exo-icon-view-set-search-column"><code class="function">exo_icon_view_set_search_column()</code></a>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>key</code></em>&#160;:</span></td>
<td> the key string to compare with.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>iter</code></em>&#160;:</span></td>
<td> the <span class="type">GtkTreeIter</span> of the current item.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>search_data</code></em>&#160;:</span></td>
<td> user data from <a href="ExoIconView.html#exo-icon-view-set-search-equal-func"><code class="function">exo_icon_view_set_search_equal_func()</code></a>.
</td>
</tr>
<tr>
<td>
<span class="term"><span class="emphasis"><em>Returns</em></span>&#160;:</span></td>
<td> <code class="literal">FALSE</code> if the row matches, <code class="literal">TRUE</code> otherwise.
</td>
</tr>
</tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2638840"></a><h3>
<a name="ExoIconViewSearchPositionFunc"></a>ExoIconViewSearchPositionFunc ()</h3>
<a class="indexterm" name="id2638850"></a><pre class="programlisting">void        (*ExoIconViewSearchPositionFunc)
                                            (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             GtkWidget *search_dialog,
                                             gpointer user_data);</pre>
<p>
A function used to place the <em class="parameter"><code>search_dialog</code></em> for the <em class="parameter"><code>icon_view</code></em>.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>icon_view</code></em>&#160;:</span></td>
<td> an <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>search_dialog</code></em>&#160;:</span></td>
<td> the search dialog window to place.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>user_data</code></em>&#160;:</span></td>
<td> user data from <a href="ExoIconView.html#exo-icon-view-set-search-position-func"><code class="function">exo_icon_view_set_search_position_func()</code></a>.
</td>
</tr>
</tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2638962"></a><h3>
<a name="exo-icon-view-get-enable-search"></a>exo_icon_view_get_enable_search ()</h3>
<a class="indexterm" name="id2638971"></a><pre class="programlisting">gboolean    exo_icon_view_get_enable_search (const <a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view);</pre>
<p>
Returns whether or not the <em class="parameter"><code>icon_view</code></em> allows to start
interactive searching by typing in text.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>icon_view</code></em>&#160;:</span></td>
<td> an <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>.
</td>
</tr>
<tr>
<td>
<span class="term"><span class="emphasis"><em>Returns</em></span>&#160;:</span></td>
<td> whether or not to let the user search
              interactively.

</td>
</tr>
</tbody>
</table></div>
<p>Since  0.3.1.3
</p>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2639043"></a><h3>
<a name="exo-icon-view-set-enable-search"></a>exo_icon_view_set_enable_search ()</h3>
<a class="indexterm" name="id2639052"></a><pre class="programlisting">void        exo_icon_view_set_enable_search (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             gboolean enable_search);</pre>
<p>
If <em class="parameter"><code>enable_search</code></em> is set, then the user can type in text to search through
the <em class="parameter"><code>icon_view</code></em> interactively (this is sometimes called "typeahead find").
</p>
<p>
Note that even if this is <code class="literal">FALSE</code>, the user can still initiate a search
using the "start-interactive-search" key binding.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>icon_view</code></em>&#160;:</span></td>
<td> an <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>enable_search</code></em>&#160;:</span></td>
<td> <code class="literal">TRUE</code> if the user can search interactively.
</td>
</tr>
</tbody>
</table></div>
<p>Since  0.3.1.3
</p>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2639223"></a><h3>
<a name="exo-icon-view-get-search-column"></a>exo_icon_view_get_search_column ()</h3>
<a class="indexterm" name="id2639233"></a><pre class="programlisting">gint        exo_icon_view_get_search_column (const <a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view);</pre>
<p>
Returns the column searched on by the interactive search code.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>icon_view</code></em>&#160;:</span></td>
<td> an <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>.
</td>
</tr>
<tr>
<td>
<span class="term"><span class="emphasis"><em>Returns</em></span>&#160;:</span></td>
<td> the column the interactive search code searches in.

</td>
</tr>
</tbody>
</table></div>
<p>Since  0.3.1.3
</p>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2639368"></a><h3>
<a name="exo-icon-view-set-search-column"></a>exo_icon_view_set_search_column ()</h3>
<a class="indexterm" name="id2639378"></a><pre class="programlisting">void        exo_icon_view_set_search_column (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             gint search_column);</pre>
<p>
Sets <em class="parameter"><code>search_column</code></em> as the column where the interactive search code should search in.
</p>
<p>
If the search column is set, user can use the "start-interactive-search" key
binding to bring up search popup. The "enable-search" property controls
whether simply typing text will also start an interactive search.
</p>
<p>
Note that <em class="parameter"><code>search_column</code></em> refers to a column of the model.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>icon_view</code></em>&#160;:</span></td>
<td> an <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>search_column</code></em>&#160;:</span></td>
<td> the column of the model to search in, or -1 to disable searching.
</td>
</tr>
</tbody>
</table></div>
<p>Since  0.3.1.3
</p>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2639470"></a><h3>
<a name="exo-icon-view-get-search-equal-func"></a>exo_icon_view_get_search_equal_func ()</h3>
<a class="indexterm" name="id2639482"></a><pre class="programlisting"><a href="ExoIconView.html#ExoIconViewSearchEqualFunc">ExoIconViewSearchEqualFunc</a> exo_icon_view_get_search_equal_func
                                            (const <a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view);</pre>
<p>
Returns the compare function currently in use.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>icon_view</code></em>&#160;:</span></td>
<td> an <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>.
</td>
</tr>
<tr>
<td>
<span class="term"><span class="emphasis"><em>Returns</em></span>&#160;:</span></td>
<td> the currently used compare function for the search code.

</td>
</tr>
</tbody>
</table></div>
<p>Since  0.3.1.3
</p>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2639549"></a><h3>
<a name="exo-icon-view-set-search-equal-func"></a>exo_icon_view_set_search_equal_func ()</h3>
<a class="indexterm" name="id2639561"></a><pre class="programlisting">void        exo_icon_view_set_search_equal_func
                                            (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             <a href="ExoIconView.html#ExoIconViewSearchEqualFunc">ExoIconViewSearchEqualFunc</a> search_equal_func,
                                             gpointer search_equal_data,
                                             GDestroyNotify search_equal_destroy);</pre>
<p>
Sets the compare function for the interactive search capabilities;
note that some like <code class="function">strcmp()</code> returning 0 for equality
<a href="ExoIconView.html#ExoIconViewSearchEqualFunc"><span class="type">ExoIconViewSearchEqualFunc</span></a> returns <code class="literal">FALSE</code> on matches.
</p>
<p>
Specifying <code class="literal">NULL</code> for <em class="parameter"><code>search_equal_func</code></em> will reset <em class="parameter"><code>icon_view</code></em> to use the default
search equal function.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>icon_view</code></em>&#160;:</span></td>
<td> an <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>search_equal_func</code></em>&#160;:</span></td>
<td> the compare function to use during the search, or <code class="literal">NULL</code>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>search_equal_data</code></em>&#160;:</span></td>
<td> user data to pass to <em class="parameter"><code>search_equal_func</code></em>, or <code class="literal">NULL</code>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>search_equal_destroy</code></em>&#160;:</span></td>
<td> destroy notifier for <em class="parameter"><code>search_equal_data</code></em>, or <code class="literal">NULL</code>.
</td>
</tr>
</tbody>
</table></div>
<p>Since  0.3.1.3
</p>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2639740"></a><h3>
<a name="exo-icon-view-get-search-position-func"></a>exo_icon_view_get_search_position_func ()</h3>
<a class="indexterm" name="id2639752"></a><pre class="programlisting"><a href="ExoIconView.html#ExoIconViewSearchPositionFunc">ExoIconViewSearchPositionFunc</a> exo_icon_view_get_search_position_func
                                            (const <a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view);</pre>
<p>
Returns the search dialog positioning function currently in use.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>icon_view</code></em>&#160;:</span></td>
<td> an <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>.
</td>
</tr>
<tr>
<td>
<span class="term"><span class="emphasis"><em>Returns</em></span>&#160;:</span></td>
<td> the currently used function for positioning the search dialog.

</td>
</tr>
</tbody>
</table></div>
<p>Since  0.3.1.3
</p>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2639817"></a><h3>
<a name="exo-icon-view-set-search-position-func"></a>exo_icon_view_set_search_position_func ()</h3>
<a class="indexterm" name="id2639829"></a><pre class="programlisting">void        exo_icon_view_set_search_position_func
                                            (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                             <a href="ExoIconView.html#ExoIconViewSearchPositionFunc">ExoIconViewSearchPositionFunc</a> search_position_func,
                                             gpointer search_position_data,
                                             GDestroyNotify search_position_destroy);</pre>
<p>
Sets the function to use when positioning the seach dialog.
</p>
<p>
Specifying <code class="literal">NULL</code> for <em class="parameter"><code>search_position_func</code></em> will reset <em class="parameter"><code>icon_view</code></em> to use the default
search position function.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>icon_view</code></em>&#160;:</span></td>
<td> an <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>search_position_func</code></em>&#160;:</span></td>
<td> the function to use to position the search dialog, or <code class="literal">NULL</code>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>search_position_data</code></em>&#160;:</span></td>
<td> user data to pass to <em class="parameter"><code>search_position_func</code></em>, or <code class="literal">NULL</code>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>search_position_destroy</code></em>&#160;:</span></td>
<td> destroy notifier for <em class="parameter"><code>search_position_data</code></em>, or <code class="literal">NULL</code>.
</td>
</tr>
</tbody>
</table></div>
<p>Since  0.3.1.3
</p>
</div>
</div>
<div class="refsect1" lang="en">
<a name="id2639990"></a><h2>Properties</h2>
<div class="refsect2" lang="en">
<a name="id2639995"></a><h3>
<a name="ExoIconView--column-spacing"></a>The "<code class="literal">column-spacing</code>" property</h3>
<pre class="programlisting">  "column-spacing"       gint                  : Read / Write</pre>
<p>
The column-spacing property specifies the space which is inserted between
the columns of the icon view.</p>
<p>

</p>
<p>Allowed values: &gt;= 0</p>
<p>Default value: 6</p>
<p>Since  0.3.1
</p>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2640038"></a><h3>
<a name="ExoIconView--columns"></a>The "<code class="literal">columns</code>" property</h3>
<pre class="programlisting">  "columns"              gint                  : Read / Write</pre>
<p>
The columns property contains the number of the columns in which the
items should be displayed. If it is -1, the number of columns will
be chosen automatically to fill the available area.</p>
<p>

</p>
<p>Allowed values: &gt;= -1</p>
<p>Default value: -1</p>
<p>Since  0.3.1
</p>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2640080"></a><h3>
<a name="ExoIconView--enable-search"></a>The "<code class="literal">enable-search</code>" property</h3>
<pre class="programlisting">  "enable-search"        gboolean              : Read / Write</pre>
<p>
View allows user to search through columns interactively.</p>
<p>

</p>
<p>Default value: TRUE</p>
<p>Since  0.3.1.3
</p>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2640118"></a><h3>
<a name="ExoIconView--item-width"></a>The "<code class="literal">item-width</code>" property</h3>
<pre class="programlisting">  "item-width"           gint                  : Read / Write</pre>
<p>
The item-width property specifies the width to use for each item. 
If it is set to -1, the icon view will automatically determine a 
suitable item size.</p>
<p>

</p>
<p>Allowed values: &gt;= -1</p>
<p>Default value: -1</p>
<p>Since  0.3.1
</p>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2640229"></a><h3>
<a name="ExoIconView--margin"></a>The "<code class="literal">margin</code>" property</h3>
<pre class="programlisting">  "margin"               gint                  : Read / Write</pre>
<p>
The margin property specifies the space which is inserted 
at the edges of the icon view.</p>
<p>

</p>
<p>Allowed values: &gt;= 0</p>
<p>Default value: 6</p>
<p>Since  0.3.1
</p>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2640270"></a><h3>
<a name="ExoIconView--markup-column"></a>The "<code class="literal">markup-column</code>" property</h3>
<pre class="programlisting">  "markup-column"        gint                  : Read / Write</pre>
<p>
The markup-column property contains the number of the model column
containing markup information to be displayed. The markup column must be 
of type <span class="type">G_TYPE_STRING</span>. If this property and the text-column property 
are both set to column numbers, it overrides the text column.
If both are set to -1, no texts are displayed.</p>
<p>

</p>
<p>Allowed values: &gt;= -1</p>
<p>Default value: -1</p>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2640385"></a><h3>
<a name="ExoIconView--model"></a>The "<code class="literal">model</code>" property</h3>
<pre class="programlisting">  "model"                GtkTreeModel          : Read / Write</pre>
<p>
The model property contains the <span class="type">GtkTreeModel</span>, which should be
display by this icon view. Setting this property to <code class="literal">NULL</code> turns
off the display of anything.</p>
<p>

</p>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2640428"></a><h3>
<a name="ExoIconView--orientation"></a>The "<code class="literal">orientation</code>" property</h3>
<pre class="programlisting">  "orientation"          GtkOrientation        : Read / Write</pre>
<p>
The orientation property specifies how the cells (i.e. the icon and 
the text) of the item are positioned relative to each other.</p>
<p>

</p>
<p>Default value: GTK_ORIENTATION_VERTICAL</p>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2640464"></a><h3>
<a name="ExoIconView--pixbuf-column"></a>The "<code class="literal">pixbuf-column</code>" property</h3>
<pre class="programlisting">  "pixbuf-column"        gint                  : Read / Write</pre>
<p>
The ::pixbuf-column property contains the number of the model column
containing the pixbufs which are displayed. The pixbuf column must be 
of type <span class="type">GDK_TYPE_PIXBUF</span>. Setting this property to -1 turns off the
display of pixbufs.</p>
<p>

</p>
<p>Allowed values: &gt;= -1</p>
<p>Default value: -1</p>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2640510"></a><h3>
<a name="ExoIconView--reorderable"></a>The "<code class="literal">reorderable</code>" property</h3>
<pre class="programlisting">  "reorderable"          gboolean              : Read / Write</pre>
<p>
The reorderable property specifies if the items can be reordered
by Drag and Drop.</p>
<p>

</p>
<p>Default value: FALSE</p>
<p>Since  0.3.1
</p>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2640548"></a><h3>
<a name="ExoIconView--row-spacing"></a>The "<code class="literal">row-spacing</code>" property</h3>
<pre class="programlisting">  "row-spacing"          gint                  : Read / Write</pre>
<p>
The row-spacing property specifies the space which is inserted between
the rows of the icon view.</p>
<p>

</p>
<p>Allowed values: &gt;= 0</p>
<p>Default value: 6</p>
<p>Since  0.3.1
</p>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2640590"></a><h3>
<a name="ExoIconView--search-column"></a>The "<code class="literal">search-column</code>" property</h3>
<pre class="programlisting">  "search-column"        gint                  : Read / Write</pre>
<p>
Model column to search through when searching through code.</p>
<p>

</p>
<p>Allowed values: &gt;= -1</p>
<p>Default value: -1</p>
<p>Since  0.3.1.3
</p>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2640634"></a><h3>
<a name="ExoIconView--selection-mode"></a>The "<code class="literal">selection-mode</code>" property</h3>
<pre class="programlisting">  "selection-mode"       GtkSelectionMode      : Read / Write</pre>
<p>
The selection-mode property specifies the selection mode of
icon view. If the mode is <span class="type">GTK_SELECTION_MULTIPLE</span>, rubberband selection
is enabled, for the other modes, only keyboard selection is possible.</p>
<p>

</p>
<p>Default value: GTK_SELECTION_SINGLE</p>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2640676"></a><h3>
<a name="ExoIconView--single-click"></a>The "<code class="literal">single-click</code>" property</h3>
<pre class="programlisting">  "single-click"         gboolean              : Read / Write</pre>
<p>
<code class="literal">TRUE</code> to activate items using a single click instead of a
double click.</p>
<p>

</p>
<p>Default value: FALSE</p>
<p>Since  0.3.1.3
</p>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2640718"></a><h3>
<a name="ExoIconView--spacing"></a>The "<code class="literal">spacing</code>" property</h3>
<pre class="programlisting">  "spacing"              gint                  : Read / Write</pre>
<p>
The spacing property specifies the space which is inserted between
the cells (i.e. the icon and the text) of an item.</p>
<p>

</p>
<p>Allowed values: &gt;= 0</p>
<p>Default value: 0</p>
<p>Since  0.3.1
</p>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2640760"></a><h3>
<a name="ExoIconView--text-column"></a>The "<code class="literal">text-column</code>" property</h3>
<pre class="programlisting">  "text-column"          gint                  : Read / Write</pre>
<p>
The text-column property contains the number of the model column
containing the texts which are displayed. The text column must be 
of type <span class="type">G_TYPE_STRING</span>. If this property and the markup-column 
property are both set to -1, no texts are displayed.</p>
<p>

</p>
<p>Allowed values: &gt;= -1</p>
<p>Default value: -1</p>
</div>
</div>
<div class="refsect1" lang="en">
<a name="id2640807"></a><h2>Style Properties</h2>
<div class="refsect2" lang="en">
<a name="id2640812"></a><h3>
<a name="ExoIconView--selection-box-alpha"></a>The "<code class="literal">selection-box-alpha</code>" style property</h3>
<pre class="programlisting">  "selection-box-alpha"  guchar                : Read</pre>
<p>Opacity of the selection box.</p>
<p>Default value: 64</p>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2640846"></a><h3>
<a name="ExoIconView--selection-box-color"></a>The "<code class="literal">selection-box-color</code>" style property</h3>
<pre class="programlisting">  "selection-box-color"  GdkColor              : Read</pre>
<p>Color of the selection box.</p>
</div>
</div>
<div class="refsect1" lang="en">
<a name="id2640878"></a><h2>Signals</h2>
<div class="refsect2" lang="en">
<a name="id2640884"></a><h3>
<a name="ExoIconView-activate-cursor-item"></a>The "activate-cursor-item" signal</h3>
<pre class="programlisting">gboolean    user_function                  (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                            gpointer user_data);</pre>
<p>
</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>icon_view</code></em>&#160;:</span></td>
<td> a <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>user_data</code></em>&#160;:</span></td>
<td>user data set when the signal handler was connected.</td>
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
<a name="id2640969"></a><h3>
<a name="ExoIconView-item-activated"></a>The "item-activated" signal</h3>
<pre class="programlisting">void        user_function                  (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                            GtkTreePath *path,
                                            gpointer user_data);</pre>
<p>
</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>icon_view</code></em>&#160;:</span></td>
<td> a <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>path</code></em>&#160;:</span></td>
<td>
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
<a name="id2641062"></a><h3>
<a name="ExoIconView-move-cursor"></a>The "move-cursor" signal</h3>
<pre class="programlisting">gboolean    user_function                  (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                            GtkMovementStep step,
                                            gint count,
                                            gpointer user_data);</pre>
<p>
</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>icon_view</code></em>&#160;:</span></td>
<td> a <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>step</code></em>&#160;:</span></td>
<td>
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>count</code></em>&#160;:</span></td>
<td>
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>user_data</code></em>&#160;:</span></td>
<td>user data set when the signal handler was connected.</td>
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
<a name="id2641252"></a><h3>
<a name="ExoIconView-select-all"></a>The "select-all" signal</h3>
<pre class="programlisting">void        user_function                  (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                            gpointer user_data);</pre>
<p>
</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>icon_view</code></em>&#160;:</span></td>
<td> a <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>.
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
<a name="id2641394"></a><h3>
<a name="ExoIconView-select-cursor-item"></a>The "select-cursor-item" signal</h3>
<pre class="programlisting">void        user_function                  (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                            gpointer user_data);</pre>
<p>
</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>icon_view</code></em>&#160;:</span></td>
<td> a <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>.
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
<a name="id2641467"></a><h3>
<a name="ExoIconView-selection-changed"></a>The "selection-changed" signal</h3>
<pre class="programlisting">void        user_function                  (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                            gpointer user_data);</pre>
<p>
</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>icon_view</code></em>&#160;:</span></td>
<td> a <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>.
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
<a name="id2641541"></a><h3>
<a name="ExoIconView-set-scroll-adjustments"></a>The "set-scroll-adjustments" signal</h3>
<pre class="programlisting">void        user_function                  (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                            GtkAdjustment *hadjustment,
                                            GtkAdjustment *vadjustment,
                                            gpointer user_data);</pre>
<p>
</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>icon_view</code></em>&#160;:</span></td>
<td> a <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>hadjustment</code></em>&#160;:</span></td>
<td>
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>vadjustment</code></em>&#160;:</span></td>
<td>
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
<a name="id2641722"></a><h3>
<a name="ExoIconView-start-interactive-search"></a>The "start-interactive-search" signal</h3>
<pre class="programlisting">gboolean    user_function                  (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *iconb_view,
                                            gpointer user_data);</pre>
<p>
</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>iconb_view</code></em>&#160;:</span></td>
<td> a <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>user_data</code></em>&#160;:</span></td>
<td>user data set when the signal handler was connected.</td>
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
<a name="id2641806"></a><h3>
<a name="ExoIconView-toggle-cursor-item"></a>The "toggle-cursor-item" signal</h3>
<pre class="programlisting">void        user_function                  (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                            gpointer user_data);</pre>
<p>
</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>icon_view</code></em>&#160;:</span></td>
<td> a <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>.
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
<a name="id2641880"></a><h3>
<a name="ExoIconView-unselect-all"></a>The "unselect-all" signal</h3>
<pre class="programlisting">void        user_function                  (<a href="ExoIconView.html" title="ExoIconView">ExoIconView</a> *icon_view,
                                            gpointer user_data);</pre>
<p>
</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>icon_view</code></em>&#160;:</span></td>
<td> a <a href="ExoIconView.html" title="ExoIconView"><span class="type">ExoIconView</span></a>.
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
</div>
<table class="navigation" width="100%" summary="Navigation footer" cellpadding="2" cellspacing="0"><tr valign="middle">
<td align="left"><a accesskey="p" href="ExoIconBar.html"><b>&lt;&lt;&#160;ExoIconBar</b></a></td>
<td align="right"><a accesskey="n" href="ExoTreeView.html"><b>ExoTreeView&#160;&gt;&gt;</b></a></td>
</tr></table>
</body>
</html>
