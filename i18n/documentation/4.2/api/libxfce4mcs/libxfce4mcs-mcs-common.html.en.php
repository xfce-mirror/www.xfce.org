<html><head><meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"><title>mcs-common</title><meta name="generator" content="DocBook XSL Stylesheets V1.66.1"><link rel="start" href="index.html" title="libxfce4mcs Reference Manual"><link rel="up" href="ch01.html" title="libxfce4mcs Core Reference"><link rel="prev" href="libxfce4mcs-mcs-client.html" title="mcs-client"><link rel="next" href="libxfce4mcs-mcs-manager.html" title="mcs-manager"><meta name="generator" content="GTK-Doc V1.2 (XML mode)"><style type="text/css">
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
      </style></head><body bgcolor="white" text="black" link="#0000FF" vlink="#840084" alink="#0000FF"><table class="navigation" width="100%" summary="Navigation header" cellpadding="2" cellspacing="2"><tr valign="middle"><td><a accesskey="p" href="libxfce4mcs-mcs-client.html"><img src="left.png" width="24" height="24" border="0" alt="Prev"></a></td><td><a accesskey="u" href="ch01.html"><img src="up.png" width="24" height="24" border="0" alt="Up"></a></td><td><a accesskey="h" href="index.html"><img src="home.png" width="24" height="24" border="0" alt="Home"></a></td><th width="100%" align="center">libxfce4mcs Reference Manual</th><td><a accesskey="n" href="libxfce4mcs-mcs-manager.html"><img src="right.png" width="24" height="24" border="0" alt="Next"></a></td></tr></table><div class="refentry" lang="en"><a name="libxfce4mcs-mcs-common"></a><div class="titlepage"></div><div class="refnamediv"><h2><span class="refentrytitle">mcs-common</span></h2><p>mcs-common &#8212; common MCS utility functions and types</p></div><div class="refsynopsisdiv"><h2>Synopsis</h2><pre class="synopsis">



struct      <a href="libxfce4mcs-mcs-common.html#McsBuffer">McsBuffer</a>;
struct      <a href="libxfce4mcs-mcs-common.html#McsColor">McsColor</a>;
struct      <a href="libxfce4mcs-mcs-common.html#McsList">McsList</a>;
struct      <a href="libxfce4mcs-mcs-common.html#McsChannel">McsChannel</a>;
struct      <a href="libxfce4mcs-mcs-common.html#McsChannelList">McsChannelList</a>;
struct      <a href="libxfce4mcs-mcs-common.html#McsSetting">McsSetting</a>;
enum        <a href="libxfce4mcs-mcs-common.html#McsType">McsType</a>;
enum        <a href="libxfce4mcs-mcs-common.html#McsResult">McsResult</a>;
enum        <a href="libxfce4mcs-mcs-common.html#McsManagerCheck">McsManagerCheck</a>;
<a href="libxfce4mcs-mcs-common.html#McsManagerCheck">McsManagerCheck</a> <a href="libxfce4mcs-mcs-common.html#mcs-manager-check-running">mcs_manager_check_running</a>   (Display *display,
                                             int screen);
<a href="libxfce4mcs-mcs-common.html#McsSetting">McsSetting</a>* <a href="libxfce4mcs-mcs-common.html#mcs-setting-copy">mcs_setting_copy</a>                (<a href="libxfce4mcs-mcs-common.html#McsSetting">McsSetting</a> *setting);
void        <a href="libxfce4mcs-mcs-common.html#mcs-setting-free">mcs_setting_free</a>                (<a href="libxfce4mcs-mcs-common.html#McsSetting">McsSetting</a> *setting);
int         <a href="libxfce4mcs-mcs-common.html#mcs-setting-equal">mcs_setting_equal</a>               (<a href="libxfce4mcs-mcs-common.html#McsSetting">McsSetting</a> *setting_a,
                                             <a href="libxfce4mcs-mcs-common.html#McsSetting">McsSetting</a> *setting_b);
void        <a href="libxfce4mcs-mcs-common.html#mcs-list-free">mcs_list_free</a>                   (<a href="libxfce4mcs-mcs-common.html#McsList">McsList</a> *list);
<a href="libxfce4mcs-mcs-common.html#McsList">McsList</a>*    <a href="libxfce4mcs-mcs-common.html#mcs-list-copy">mcs_list_copy</a>                   (<a href="libxfce4mcs-mcs-common.html#McsList">McsList</a> *list);
<a href="libxfce4mcs-mcs-common.html#McsResult">McsResult</a>   <a href="libxfce4mcs-mcs-common.html#mcs-list-insert">mcs_list_insert</a>                 (<a href="libxfce4mcs-mcs-common.html#McsList">McsList</a> **list,
                                             <a href="libxfce4mcs-mcs-common.html#McsSetting">McsSetting</a> *setting);
<a href="libxfce4mcs-mcs-common.html#McsSetting">McsSetting</a>* <a href="libxfce4mcs-mcs-common.html#mcs-list-lookup">mcs_list_lookup</a>                 (<a href="libxfce4mcs-mcs-common.html#McsList">McsList</a> *list,
                                             const gchar *name);
<a href="libxfce4mcs-mcs-common.html#McsResult">McsResult</a>   <a href="libxfce4mcs-mcs-common.html#mcs-list-delete">mcs_list_delete</a>                 (<a href="libxfce4mcs-mcs-common.html#McsList">McsList</a> **list,
                                             const gchar *name);
gchar       <a href="libxfce4mcs-mcs-common.html#mcs-byte-order">mcs_byte_order</a>                  (void);
#define     <a href="libxfce4mcs-mcs-common.html#MCS-PAD-CAPS">MCS_PAD</a>                         (n,m)
</pre></div><div class="refsect1" lang="en"><a name="id2549998"></a><h2>Description</h2><p>

</p></div><div class="refsect1" lang="en"><a name="id2550007"></a><h2>Details</h2><div class="refsect2" lang="en"><a name="id2550013"></a><h3><a name="McsBuffer"></a>struct McsBuffer</h3><a class="indexterm" name="id2550021"></a><pre class="programlisting">struct McsBuffer {

        gchar byte_order;
        size_t len;
        guchar *data;
        guchar *pos;
    };
</pre><p>
A data storage buffer.
</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term">gchar <i class="structfield"><tt>byte_order</tt></i></span></td><td>The btye ordering of data in the buffer.
</td></tr><tr><td><span class="term">size_t <i class="structfield"><tt>len</tt></i></span></td><td>The length of data in the buffer.
</td></tr><tr><td><span class="term">guchar *<i class="structfield"><tt>data</tt></i></span></td><td>A pointer to the data in the buffer.
</td></tr><tr><td><span class="term">guchar *<i class="structfield"><tt>pos</tt></i></span></td><td>FIXME

</td></tr></tbody></table></div></div><hr><div class="refsect2" lang="en"><a name="id2494582"></a><h3><a name="McsColor"></a>struct McsColor</h3><a class="indexterm" name="id2494590"></a><pre class="programlisting">struct McsColor {

        guint16 red, green, blue, alpha;
    };
</pre><p>
A structure representing a color value.
</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term">guint16 <i class="structfield"><tt>red</tt></i></span></td><td>The color's red component.
</td></tr><tr><td><span class="term">guint16 <i class="structfield"><tt>green</tt></i></span></td><td>The color's green component.
</td></tr><tr><td><span class="term">guint16 <i class="structfield"><tt>blue</tt></i></span></td><td>The color's blue component.
</td></tr><tr><td><span class="term">guint16 <i class="structfield"><tt>alpha</tt></i></span></td><td>The color's alpha (transparency) value.

</td></tr></tbody></table></div></div><hr><div class="refsect2" lang="en"><a name="id2494674"></a><h3><a name="McsList"></a>struct McsList</h3><a class="indexterm" name="id2494682"></a><pre class="programlisting">struct McsList {

        McsSetting *setting;
        McsList *next;
    };
</pre><p>
A singly-linked list structure containing <a href="libxfce4mcs-mcs-common.html#McsSetting"><span class="type">McsSetting</span></a> structs.
</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term"><a href="libxfce4mcs-mcs-common.html#McsSetting">McsSetting</a> *<i class="structfield"><tt>setting</tt></i></span></td><td>The <a href="libxfce4mcs-mcs-common.html#McsSetting"><span class="type">McsSetting</span></a> in this list node.
</td></tr><tr><td><span class="term"><a href="libxfce4mcs-mcs-common.html#McsList">McsList</a> *<i class="structfield"><tt>next</tt></i></span></td><td>A pointer to the next node in the list.

</td></tr></tbody></table></div></div><hr><div class="refsect2" lang="en"><a name="id2494745"></a><h3><a name="McsChannel"></a>struct McsChannel</h3><a class="indexterm" name="id2494754"></a><pre class="programlisting">struct McsChannel {

        gchar *channel_name;
        Atom channel_atom;
        McsList *settings;
        gboolean raw;
        int ref_count;
    };
</pre><p>
A representation of a settings channel.
</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term">gchar *<i class="structfield"><tt>channel_name</tt></i></span></td><td>The name of the channel.
</td></tr><tr><td><span class="term">Atom <i class="structfield"><tt>channel_atom</tt></i></span></td><td>FIXME
</td></tr><tr><td><span class="term"><a href="libxfce4mcs-mcs-common.html#McsList">McsList</a> *<i class="structfield"><tt>settings</tt></i></span></td><td>A list of settings in the channel.
</td></tr><tr><td><span class="term">gboolean <i class="structfield"><tt>raw</tt></i></span></td><td>
</td></tr><tr><td><span class="term">int <i class="structfield"><tt>ref_count</tt></i></span></td><td>A reference count.

</td></tr></tbody></table></div></div><hr><div class="refsect2" lang="en"><a name="id2533876"></a><h3><a name="McsChannelList"></a>struct McsChannelList</h3><a class="indexterm" name="id2533885"></a><pre class="programlisting">struct McsChannelList {

        McsChannel *channel;
        McsChannelList *next;
    };
</pre><p>
A singly-linked list structure containing <a href="libxfce4mcs-mcs-common.html#McsChannel"><span class="type">McsChannel</span></a> structs.
</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term"><a href="libxfce4mcs-mcs-common.html#McsChannel">McsChannel</a> *<i class="structfield"><tt>channel</tt></i></span></td><td>The <a href="libxfce4mcs-mcs-common.html#McsChannel"><span class="type">McsChannel</span></a> in this list node.
</td></tr><tr><td><span class="term"><a href="libxfce4mcs-mcs-common.html#McsChannelList">McsChannelList</a> *<i class="structfield"><tt>next</tt></i></span></td><td>A pointer to the next node in the list.

</td></tr></tbody></table></div></div><hr><div class="refsect2" lang="en"><a name="id2533948"></a><h3><a name="McsSetting"></a>struct McsSetting</h3><a class="indexterm" name="id2533956"></a><pre class="programlisting">struct McsSetting {

        gchar *name;
        gchar *channel_name;
        McsType type;

        union
        {
            int v_int;
            gchar *v_string;
            McsColor v_color;
        }
        data;
</pre><p>
A structure representing a setting controlled by the MCS manager.
</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term">gchar *<i class="structfield"><tt>name</tt></i></span></td><td>The name of the setting.
</td></tr><tr><td><span class="term">gchar *<i class="structfield"><tt>channel_name</tt></i></span></td><td>The channel to which the setting belongs.
</td></tr><tr><td><span class="term"><a href="libxfce4mcs-mcs-common.html#McsType">McsType</a> <i class="structfield"><tt>type</tt></i></span></td><td>The <a href="libxfce4mcs-mcs-common.html#McsType"><span class="type">McsType</span></a> of the setting.

</td></tr></tbody></table></div></div><hr><div class="refsect2" lang="en"><a name="id2534033"></a><h3><a name="McsType"></a>enum McsType</h3><a class="indexterm" name="id2534041"></a><pre class="programlisting">    typedef enum
    {
        MCS_TYPE_INT = 0,
        MCS_TYPE_STRING = 1,
        MCS_TYPE_COLOR = 2
    }
    McsType;
</pre><p>
An enumerated type for MCS settings types.
</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term"><tt class="literal">MCS_TYPE_INT</tt></span></td><td>The setting is an integer value.
</td></tr><tr><td><span class="term"><tt class="literal">MCS_TYPE_STRING</tt></span></td><td>The setting is a string value.
</td></tr><tr><td><span class="term"><tt class="literal">MCS_TYPE_COLOR</tt></span></td><td>The setting is an <a href="libxfce4mcs-mcs-common.html#McsColor"><span class="type">McsColor</span></a> value.

</td></tr></tbody></table></div></div><hr><div class="refsect2" lang="en"><a name="id2582800"></a><h3><a name="McsResult"></a>enum McsResult</h3><a class="indexterm" name="id2582809"></a><pre class="programlisting">    typedef enum
    {
        MCS_SUCCESS,
        MCS_NO_MEM,
        MCS_ACCESS,
        MCS_FAILED,
        MCS_NO_ENTRY,
        MCS_DUPLICATE_ENTRY,
        MCS_NO_CHANNEL
    }
    McsResult;
</pre><p>
An enumerated type for detailing error conditions from MCS functions.
</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term"><tt class="literal">MCS_SUCCESS</tt></span></td><td>The command commpleted successfully.
</td></tr><tr><td><span class="term"><tt class="literal">MCS_NO_MEM</tt></span></td><td>The command failed due to an out-of-memory condition.
</td></tr><tr><td><span class="term"><tt class="literal">MCS_ACCESS</tt></span></td><td>The command failed because you do not have the proper access privileges.
</td></tr><tr><td><span class="term"><tt class="literal">MCS_FAILED</tt></span></td><td>The command failed for an unknown or generic reason.
</td></tr><tr><td><span class="term"><tt class="literal">MCS_NO_ENTRY</tt></span></td><td>The command failed because no entry was found matching what you specified.
</td></tr><tr><td><span class="term"><tt class="literal">MCS_DUPLICATE_ENTRY</tt></span></td><td>The command failed because an entry of that name already exists.
</td></tr><tr><td><span class="term"><tt class="literal">MCS_NO_CHANNEL</tt></span></td><td>The command failed because the channel specified does not exist.

</td></tr></tbody></table></div></div><hr><div class="refsect2" lang="en"><a name="id2582918"></a><h3><a name="McsManagerCheck"></a>enum McsManagerCheck</h3><a class="indexterm" name="id2582926"></a><pre class="programlisting">    typedef enum
    {
        MCS_MANAGER_NONE,
        MCS_MANAGER_STD,
        MCS_MANAGER_MULTI_CHANNEL,
        MCS_MANAGER_BOTH
    }
    McsManagerCheck;
</pre><p>
An enumerated type detailing what kind of MCS manager is running.
</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term"><tt class="literal">MCS_MANAGER_NONE</tt></span></td><td>No MCS manager is running.
</td></tr><tr><td><span class="term"><tt class="literal">MCS_MANAGER_STD</tt></span></td><td>A standard MCS manager is running.
</td></tr><tr><td><span class="term"><tt class="literal">MCS_MANAGER_MULTI_CHANNEL</tt></span></td><td>A multi-channel MCS manager is running.
</td></tr><tr><td><span class="term"><tt class="literal">MCS_MANAGER_BOTH</tt></span></td><td>An MCS manager that supports both single- and multi-channel access is running.

</td></tr></tbody></table></div></div><hr><div class="refsect2" lang="en"><a name="id2582994"></a><h3><a name="mcs-manager-check-running"></a>mcs_manager_check_running ()</h3><a class="indexterm" name="id2583003"></a><pre class="programlisting"><a href="libxfce4mcs-mcs-common.html#McsManagerCheck">McsManagerCheck</a> mcs_manager_check_running   (Display *display,
                                             int screen);</pre><p>
Checks to see if there is an MCS manager running on <i class="parameter"><tt>display</tt></i> and <i class="parameter"><tt>screen</tt></i>.</p><p>

</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term"><i class="parameter"><tt>display</tt></i> :</span></td><td> The X display on which the MCS manager may be running.
</td></tr><tr><td><span class="term"><i class="parameter"><tt>screen</tt></i> :</span></td><td> The X screen on which the MCS manager may be running.
</td></tr><tr><td><span class="term"><span class="emphasis"><em>Returns</em></span> :</span></td><td> An <a href="libxfce4mcs-mcs-common.html#McsManagerCheck"><span class="type">McsManagerCheck</span></a> value describing what kind of MCS manager
              (if any) is running.
</td></tr></tbody></table></div></div><hr><div class="refsect2" lang="en"><a name="id2583084"></a><h3><a name="mcs-setting-copy"></a>mcs_setting_copy ()</h3><a class="indexterm" name="id2583092"></a><pre class="programlisting"><a href="libxfce4mcs-mcs-common.html#McsSetting">McsSetting</a>* mcs_setting_copy                (<a href="libxfce4mcs-mcs-common.html#McsSetting">McsSetting</a> *setting);</pre><p>
Makes a copy of <i class="parameter"><tt>setting</tt></i>.  You should free the result with <a href="libxfce4mcs-mcs-common.html#mcs-setting-free"><tt class="function">mcs_setting_free()</tt></a>
when it is no longer needed.</p><p>

</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term"><i class="parameter"><tt>setting</tt></i> :</span></td><td> An existing <a href="libxfce4mcs-mcs-common.html#McsSetting"><span class="type">McsSetting</span></a>.
</td></tr><tr><td><span class="term"><span class="emphasis"><em>Returns</em></span> :</span></td><td> A new <a href="libxfce4mcs-mcs-common.html#McsSetting"><span class="type">McsSetting</span></a>, initialised to the value of <i class="parameter"><tt>setting</tt></i>.
</td></tr></tbody></table></div></div><hr><div class="refsect2" lang="en"><a name="id2583167"></a><h3><a name="mcs-setting-free"></a>mcs_setting_free ()</h3><a class="indexterm" name="id2583175"></a><pre class="programlisting">void        mcs_setting_free                (<a href="libxfce4mcs-mcs-common.html#McsSetting">McsSetting</a> *setting);</pre><p>
Frees all resources associated with <i class="parameter"><tt>setting</tt></i>.</p><p>

</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term"><i class="parameter"><tt>setting</tt></i> :</span></td><td> An <a href="libxfce4mcs-mcs-common.html#McsSetting"><span class="type">McsSetting</span></a>.
</td></tr></tbody></table></div></div><hr><div class="refsect2" lang="en"><a name="id2583223"></a><h3><a name="mcs-setting-equal"></a>mcs_setting_equal ()</h3><a class="indexterm" name="id2583232"></a><pre class="programlisting">int         mcs_setting_equal               (<a href="libxfce4mcs-mcs-common.html#McsSetting">McsSetting</a> *setting_a,
                                             <a href="libxfce4mcs-mcs-common.html#McsSetting">McsSetting</a> *setting_b);</pre><p>
Checks to see if <i class="parameter"><tt>setting_a</tt></i> and <i class="parameter"><tt>setting_b</tt></i> represent the same setting
data.</p><p>

</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term"><i class="parameter"><tt>setting_a</tt></i> :</span></td><td> An <a href="libxfce4mcs-mcs-common.html#McsSetting"><span class="type">McsSetting</span></a>.
</td></tr><tr><td><span class="term"><i class="parameter"><tt>setting_b</tt></i> :</span></td><td> An <a href="libxfce4mcs-mcs-common.html#McsSetting"><span class="type">McsSetting</span></a>.
</td></tr><tr><td><span class="term"><span class="emphasis"><em>Returns</em></span> :</span></td><td> <tt class="literal">1</tt> if the two settings are the same, <tt class="literal">0</tt> otherwise.
</td></tr></tbody></table></div></div><hr><div class="refsect2" lang="en"><a name="id2583323"></a><h3><a name="mcs-list-free"></a>mcs_list_free ()</h3><a class="indexterm" name="id2583331"></a><pre class="programlisting">void        mcs_list_free                   (<a href="libxfce4mcs-mcs-common.html#McsList">McsList</a> *list);</pre><p>
Frees all memory associated with <i class="parameter"><tt>list</tt></i>.</p><p>

</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term"><i class="parameter"><tt>list</tt></i> :</span></td><td> An <a href="libxfce4mcs-mcs-common.html#McsList"><span class="type">McsList</span></a>.
</td></tr></tbody></table></div></div><hr><div class="refsect2" lang="en"><a name="id2581287"></a><h3><a name="mcs-list-copy"></a>mcs_list_copy ()</h3><a class="indexterm" name="id2583349"></a><pre class="programlisting"><a href="libxfce4mcs-mcs-common.html#McsList">McsList</a>*    mcs_list_copy                   (<a href="libxfce4mcs-mcs-common.html#McsList">McsList</a> *list);</pre><p>
Makes a copy of <i class="parameter"><tt>list</tt></i>.  You should free the result with <a href="libxfce4mcs-mcs-common.html#mcs-list-free"><tt class="function">mcs_list_free()</tt></a> when
it is no longer needed.</p><p>

</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term"><i class="parameter"><tt>list</tt></i> :</span></td><td> An existing <a href="libxfce4mcs-mcs-common.html#McsList"><span class="type">McsList</span></a>.
</td></tr><tr><td><span class="term"><span class="emphasis"><em>Returns</em></span> :</span></td><td> A new <a href="libxfce4mcs-mcs-common.html#McsList"><span class="type">McsList</span></a>, initialised to the contents of <i class="parameter"><tt>list</tt></i>.
</td></tr></tbody></table></div></div><hr><div class="refsect2" lang="en"><a name="id2583415"></a><h3><a name="mcs-list-insert"></a>mcs_list_insert ()</h3><a class="indexterm" name="id2583422"></a><pre class="programlisting"><a href="libxfce4mcs-mcs-common.html#McsResult">McsResult</a>   mcs_list_insert                 (<a href="libxfce4mcs-mcs-common.html#McsList">McsList</a> **list,
                                             <a href="libxfce4mcs-mcs-common.html#McsSetting">McsSetting</a> *setting);</pre><p>
Inserts <i class="parameter"><tt>setting</tt></i> into <i class="parameter"><tt>list</tt></i>, updating the list pointer if necessary.</p><p>

</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term"><i class="parameter"><tt>list</tt></i> :</span></td><td> A pointer to an existing <a href="libxfce4mcs-mcs-common.html#McsList"><span class="type">McsList</span></a>.
</td></tr><tr><td><span class="term"><i class="parameter"><tt>setting</tt></i> :</span></td><td> An <a href="libxfce4mcs-mcs-common.html#McsSetting"><span class="type">McsSetting</span></a> to insert into the list.
</td></tr><tr><td><span class="term"><span class="emphasis"><em>Returns</em></span> :</span></td><td> <tt class="literal">MCS_SUCCESS</tt> if the item was successfully inserted.
</td></tr></tbody></table></div></div><hr><div class="refsect2" lang="en"><a name="id2583502"></a><h3><a name="mcs-list-lookup"></a>mcs_list_lookup ()</h3><a class="indexterm" name="id2583510"></a><pre class="programlisting"><a href="libxfce4mcs-mcs-common.html#McsSetting">McsSetting</a>* mcs_list_lookup                 (<a href="libxfce4mcs-mcs-common.html#McsList">McsList</a> *list,
                                             const gchar *name);</pre><p>
Looks for a setting with name <i class="parameter"><tt>name</tt></i> in the <a href="libxfce4mcs-mcs-common.html#McsList"><span class="type">McsList</span></a>.</p><p>

</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term"><i class="parameter"><tt>list</tt></i> :</span></td><td> An <a href="libxfce4mcs-mcs-common.html#McsList"><span class="type">McsList</span></a>.
</td></tr><tr><td><span class="term"><i class="parameter"><tt>name</tt></i> :</span></td><td> The name of a setting.
</td></tr><tr><td><span class="term"><span class="emphasis"><em>Returns</em></span> :</span></td><td> The corresponding <a href="libxfce4mcs-mcs-common.html#McsSetting"><span class="type">McsSetting</span></a>, or <tt class="literal">NULL</tt> if the setting was not
              found.
</td></tr></tbody></table></div></div><hr><div class="refsect2" lang="en"><a name="id2583595"></a><h3><a name="mcs-list-delete"></a>mcs_list_delete ()</h3><a class="indexterm" name="id2583603"></a><pre class="programlisting"><a href="libxfce4mcs-mcs-common.html#McsResult">McsResult</a>   mcs_list_delete                 (<a href="libxfce4mcs-mcs-common.html#McsList">McsList</a> **list,
                                             const gchar *name);</pre><p>
Deletes the <a href="libxfce4mcs-mcs-common.html#McsSetting"><span class="type">McsSetting</span></a> with name <i class="parameter"><tt>name</tt></i> from <i class="parameter"><tt>list</tt></i>, adjusting the list
pointer if necessary.</p><p>

</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term"><i class="parameter"><tt>list</tt></i> :</span></td><td> A pointer to an existing <a href="libxfce4mcs-mcs-common.html#McsList"><span class="type">McsList</span></a>.
</td></tr><tr><td><span class="term"><i class="parameter"><tt>name</tt></i> :</span></td><td> The name of the item to delete.
</td></tr><tr><td><span class="term"><span class="emphasis"><em>Returns</em></span> :</span></td><td> <tt class="literal">MCS_SUCCESS</tt> on success.
</td></tr></tbody></table></div></div><hr><div class="refsect2" lang="en"><a name="id2583689"></a><h3><a name="mcs-byte-order"></a>mcs_byte_order ()</h3><a class="indexterm" name="id2583697"></a><pre class="programlisting">gchar       mcs_byte_order                  (void);</pre><p>
Gets the byte ordering for this system.</p><p>

</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term"><span class="emphasis"><em>Returns</em></span> :</span></td><td> Either <tt class="literal">LSBFirst</tt> or <tt class="literal">MSBFirst</tt>.
</td></tr></tbody></table></div></div><hr><div class="refsect2" lang="en"><a name="id2583735"></a><h3><a name="MCS-PAD-CAPS"></a>MCS_PAD()</h3><a class="indexterm" name="id2583744"></a><pre class="programlisting">#define MCS_PAD(n,m) ((n + m - 1) &amp; (~(m-1)))
</pre><p>

</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term"><i class="parameter"><tt>n</tt></i> :</span></td><td>
</td></tr><tr><td><span class="term"><i class="parameter"><tt>m</tt></i> :</span></td><td>


</td></tr></tbody></table></div></div></div></div><table class="navigation" width="100%" summary="Navigation footer" cellpadding="2" cellspacing="0"><tr valign="middle"><td align="left"><a accesskey="p" href="libxfce4mcs-mcs-client.html"><b>&lt;&lt; mcs-client</b></a></td><td align="right"><a accesskey="n" href="libxfce4mcs-mcs-manager.html"><b>mcs-manager &gt;&gt;</b></a></td></tr></table></body></html>
