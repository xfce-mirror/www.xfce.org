<html><head><meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"><title>mcs-client</title><meta name="generator" content="DocBook XSL Stylesheets V1.66.1"><link rel="start" href="index.html" title="libxfce4mcs Reference Manual"><link rel="up" href="ch01.html" title="libxfce4mcs Core Reference"><link rel="prev" href="ch01.html" title="libxfce4mcs Core Reference"><link rel="next" href="libxfce4mcs-mcs-common.html" title="mcs-common"><meta name="generator" content="GTK-Doc V1.2 (XML mode)"><style type="text/css">
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
      </style></head><body bgcolor="white" text="black" link="#0000FF" vlink="#840084" alink="#0000FF"><table class="navigation" width="100%" summary="Navigation header" cellpadding="2" cellspacing="2"><tr valign="middle"><td><a accesskey="p" href="ch01.html"><img src="left.png" width="24" height="24" border="0" alt="Prev"></a></td><td><a accesskey="u" href="ch01.html"><img src="up.png" width="24" height="24" border="0" alt="Up"></a></td><td><a accesskey="h" href="index.html"><img src="home.png" width="24" height="24" border="0" alt="Home"></a></td><th width="100%" align="center">libxfce4mcs Reference Manual</th><td><a accesskey="n" href="libxfce4mcs-mcs-common.html"><img src="right.png" width="24" height="24" border="0" alt="Next"></a></td></tr></table><div class="refentry" lang="en"><a name="libxfce4mcs-mcs-client"></a><div class="titlepage"></div><div class="refnamediv"><h2><span class="refentrytitle">mcs-client</span></h2><p>mcs-client &#8212; MCS client interface (for applications)</p></div><div class="refsynopsisdiv"><h2>Synopsis</h2><pre class="synopsis">



struct      <a href="libxfce4mcs-mcs-client.html#McsClient">McsClient</a>;
enum        <a href="libxfce4mcs-mcs-client.html#McsAction">McsAction</a>;
void        (<a href="libxfce4mcs-mcs-client.html#McsNotifyFunc">*McsNotifyFunc</a>)                (const gchar *name,
                                             const gchar *channel_name,
                                             <a href="libxfce4mcs-mcs-client.html#McsAction">McsAction</a> action,
                                             <a href="libxfce4mcs-mcs-common.html#McsSetting">McsSetting</a> *setting,
                                             void *cb_data);
void        (<a href="libxfce4mcs-mcs-client.html#McsWatchFunc">*McsWatchFunc</a>)                 (Window window,
                                             gboolean is_start,
                                             long mask,
                                             void *cb_data);
<a href="libxfce4mcs-mcs-client.html#McsClient">McsClient</a>*  <a href="libxfce4mcs-mcs-client.html#mcs-client-new">mcs_client_new</a>                  (Display *display,
                                             int screen,
                                             <a href="libxfce4mcs-mcs-client.html#McsNotifyFunc">McsNotifyFunc</a> notify,
                                             <a href="libxfce4mcs-mcs-client.html#McsWatchFunc">McsWatchFunc</a> watch,
                                             void *cb_data);
void        <a href="libxfce4mcs-mcs-client.html#mcs-client-destroy">mcs_client_destroy</a>              (<a href="libxfce4mcs-mcs-client.html#McsClient">McsClient</a> *client);
gboolean    <a href="libxfce4mcs-mcs-client.html#mcs-client-process-event">mcs_client_process_event</a>        (<a href="libxfce4mcs-mcs-client.html#McsClient">McsClient</a> *client,
                                             XEvent *xev);
<a href="libxfce4mcs-mcs-common.html#McsChannel">McsChannel</a>* <a href="libxfce4mcs-mcs-client.html#mcs-client-add-channel">mcs_client_add_channel</a>          (<a href="libxfce4mcs-mcs-client.html#McsClient">McsClient</a> *client,
                                             const gchar *channel_name);
void        <a href="libxfce4mcs-mcs-client.html#mcs-client-delete-channel">mcs_client_delete_channel</a>       (<a href="libxfce4mcs-mcs-client.html#McsClient">McsClient</a> *client,
                                             const gchar *channel_name);
<a href="libxfce4mcs-mcs-common.html#McsResult">McsResult</a>   <a href="libxfce4mcs-mcs-client.html#mcs-client-get-setting">mcs_client_get_setting</a>          (<a href="libxfce4mcs-mcs-client.html#McsClient">McsClient</a> *client,
                                             const gchar *name,
                                             const gchar *channel_name,
                                             <a href="libxfce4mcs-mcs-common.html#McsSetting">McsSetting</a> **setting);
void        <a href="libxfce4mcs-mcs-client.html#mcs-client-show">mcs_client_show</a>                 (Display *display,
                                             int screen,
                                             const gchar *message);
gboolean    <a href="libxfce4mcs-mcs-client.html#mcs-client-check-manager">mcs_client_check_manager</a>        (Display *display,
                                             int screen,
                                             const gchar *manager_command);
</pre></div><div class="refsect1" lang="en"><a name="id2549135"></a><h2>Description</h2><p>
The MCS client functions are intended to be called by applications that store
settings via the MCS manager.  The client functions are limited to querying
and watching settings data; MCS clients are not capable of changing any
settings.
</p></div><div class="refsect1" lang="en"><a name="id2549149"></a><h2>Details</h2><div class="refsect2" lang="en"><a name="id2549154"></a><h3><a name="McsClient"></a>struct McsClient</h3><a class="indexterm" name="id2549162"></a><pre class="programlisting">struct McsClient;</pre><p>

</p></div><hr><div class="refsect2" lang="en"><a name="id2549172"></a><h3><a name="McsAction"></a>enum McsAction</h3><a class="indexterm" name="id2549180"></a><pre class="programlisting">    typedef enum
    {
        MCS_ACTION_NEW,
        MCS_ACTION_CHANGED,
        MCS_ACTION_DELETED
    }
    McsAction;
</pre><p>
A type used in the <a href="libxfce4mcs-mcs-client.html#McsNotifyFunc"><span class="type">McsNotifyFunc</span></a> to describe a settings event.
</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term"><tt class="literal">MCS_ACTION_NEW</tt></span></td><td>A new setting has been added to the channel.
</td></tr><tr><td><span class="term"><tt class="literal">MCS_ACTION_CHANGED</tt></span></td><td>An existing setting has changed.
</td></tr><tr><td><span class="term"><tt class="literal">MCS_ACTION_DELETED</tt></span></td><td>A setting has been deleted from the channel.

</td></tr></tbody></table></div></div><hr><div class="refsect2" lang="en"><a name="id2549240"></a><h3><a name="McsNotifyFunc"></a>McsNotifyFunc ()</h3><a class="indexterm" name="id2549248"></a><pre class="programlisting">void        (*McsNotifyFunc)                (const gchar *name,
                                             const gchar *channel_name,
                                             <a href="libxfce4mcs-mcs-client.html#McsAction">McsAction</a> action,
                                             <a href="libxfce4mcs-mcs-common.html#McsSetting">McsSetting</a> *setting,
                                             void *cb_data);</pre><p>
A function of this type, passed to <a href="libxfce4mcs-mcs-client.html#mcs-client-new"><tt class="function">mcs_client_new()</tt></a> will be called when changes
occur in channels that the MCS client is watching.
</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term"><i class="parameter"><tt>name</tt></i> :</span></td><td>The name of the setting that is affected.
</td></tr><tr><td><span class="term"><i class="parameter"><tt>channel_name</tt></i> :</span></td><td>The channel to which the setting belongs.
</td></tr><tr><td><span class="term"><i class="parameter"><tt>action</tt></i> :</span></td><td>An <a href="libxfce4mcs-mcs-client.html#McsAction"><span class="type">McsAction</span></a> describing the event.
</td></tr><tr><td><span class="term"><i class="parameter"><tt>setting</tt></i> :</span></td><td>A pointer to the <a href="libxfce4mcs-mcs-common.html#McsSetting"><span class="type">McsSetting</span></a> that is affected.
</td></tr><tr><td><span class="term"><i class="parameter"><tt>cb_data</tt></i> :</span></td><td>Callback data passed to <a href="libxfce4mcs-mcs-client.html#mcs-client-new"><tt class="function">mcs_client_new()</tt></a>.


</td></tr></tbody></table></div></div><hr><div class="refsect2" lang="en"><a name="id2549377"></a><h3><a name="McsWatchFunc"></a>McsWatchFunc ()</h3><a class="indexterm" name="id2466871"></a><pre class="programlisting">void        (*McsWatchFunc)                 (Window window,
                                             gboolean is_start,
                                             long mask,
                                             void *cb_data);</pre><p>

</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term"><i class="parameter"><tt>window</tt></i> :</span></td><td>The X window on which an event occurred.
</td></tr><tr><td><span class="term"><i class="parameter"><tt>is_start</tt></i> :</span></td><td>
</td></tr><tr><td><span class="term"><i class="parameter"><tt>Param3</tt></i> :</span></td><td>
</td></tr><tr><td><span class="term"><i class="parameter"><tt>cb_data</tt></i> :</span></td><td>Callback data passed to <a href="libxfce4mcs-mcs-client.html#mcs-client-new"><tt class="function">mcs_client_new()</tt></a>.
</td></tr></tbody></table></div></div><hr><div class="refsect2" lang="en"><a name="id2466963"></a><h3><a name="mcs-client-new"></a>mcs_client_new ()</h3><a class="indexterm" name="id2466972"></a><pre class="programlisting"><a href="libxfce4mcs-mcs-client.html#McsClient">McsClient</a>*  mcs_client_new                  (Display *display,
                                             int screen,
                                             <a href="libxfce4mcs-mcs-client.html#McsNotifyFunc">McsNotifyFunc</a> notify,
                                             <a href="libxfce4mcs-mcs-client.html#McsWatchFunc">McsWatchFunc</a> watch,
                                             void *cb_data);</pre><p>
Creates a new client connection to the MCS manager running on <i class="parameter"><tt>display</tt></i> and
<i class="parameter"><tt>screen</tt></i>.</p><p>

</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term"><i class="parameter"><tt>display</tt></i> :</span></td><td> The X display on which the MCS manager is running.
</td></tr><tr><td><span class="term"><i class="parameter"><tt>screen</tt></i> :</span></td><td> The X screen on which the MCS manager is running.
</td></tr><tr><td><span class="term"><i class="parameter"><tt>notify</tt></i> :</span></td><td> A <a href="libxfce4mcs-mcs-client.html#McsNotifyFunc"><span class="type">McsNotifyFunc</span></a> to call when changes occur in MCS channels.
</td></tr><tr><td><span class="term"><i class="parameter"><tt>watch</tt></i> :</span></td><td> A <a href="libxfce4mcs-mcs-client.html#McsWatchFunc"><span class="type">McsWatchFunc</span></a> to call when (something happens).
</td></tr><tr><td><span class="term"><i class="parameter"><tt>cb_data</tt></i> :</span></td><td> A pointer to data to pass to the <i class="parameter"><tt>notify</tt></i> and <i class="parameter"><tt>watch</tt></i> functions.
</td></tr><tr><td><span class="term"><span class="emphasis"><em>Returns</em></span> :</span></td><td> A new <a href="libxfce4mcs-mcs-client.html#McsClient"><span class="type">McsClient</span></a>.
</td></tr></tbody></table></div></div><hr><div class="refsect2" lang="en"><a name="id2467122"></a><h3><a name="mcs-client-destroy"></a>mcs_client_destroy ()</h3><a class="indexterm" name="id2467131"></a><pre class="programlisting">void        mcs_client_destroy              (<a href="libxfce4mcs-mcs-client.html#McsClient">McsClient</a> *client);</pre><p>
Frees all resources associated with <i class="parameter"><tt>client</tt></i>.</p><p>

</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term"><i class="parameter"><tt>client</tt></i> :</span></td><td> An <a href="libxfce4mcs-mcs-client.html#McsClient"><span class="type">McsClient</span></a>.
</td></tr></tbody></table></div></div><hr><div class="refsect2" lang="en"><a name="id2580551"></a><h3><a name="mcs-client-process-event"></a>mcs_client_process_event ()</h3><a class="indexterm" name="id2580559"></a><pre class="programlisting">gboolean    mcs_client_process_event        (<a href="libxfce4mcs-mcs-client.html#McsClient">McsClient</a> *client,
                                             XEvent *xev);</pre><p>
FIXME: Fill me in!</p><p>

</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term"><i class="parameter"><tt>client</tt></i> :</span></td><td> An <a href="libxfce4mcs-mcs-client.html#McsClient"><span class="type">McsClient</span></a>.
</td></tr><tr><td><span class="term"><i class="parameter"><tt>xev</tt></i> :</span></td><td> An <span class="type">XEvent</span> to process.
</td></tr><tr><td><span class="term"><span class="emphasis"><em>Returns</em></span> :</span></td><td> <tt class="literal">True</tt> if something happens, <tt class="literal">FALSE</tt> otherwise.
</td></tr></tbody></table></div></div><hr><div class="refsect2" lang="en"><a name="id2580642"></a><h3><a name="mcs-client-add-channel"></a>mcs_client_add_channel ()</h3><a class="indexterm" name="id2580651"></a><pre class="programlisting"><a href="libxfce4mcs-mcs-common.html#McsChannel">McsChannel</a>* mcs_client_add_channel          (<a href="libxfce4mcs-mcs-client.html#McsClient">McsClient</a> *client,
                                             const gchar *channel_name);</pre><p>
Adds a channel to be monitored by <i class="parameter"><tt>client</tt></i>.  This must be called before any
settings changes in that channel will cause the <a href="libxfce4mcs-mcs-client.html#McsNotifyFunc"><span class="type">McsNotifyFunc</span></a> (passed to
<a href="libxfce4mcs-mcs-client.html#mcs-client-new"><tt class="function">mcs_client_new()</tt></a>) to be called.</p><p>

</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term"><i class="parameter"><tt>client</tt></i> :</span></td><td> An <a href="libxfce4mcs-mcs-client.html#McsClient"><span class="type">McsClient</span></a>.
</td></tr><tr><td><span class="term"><i class="parameter"><tt>channel_name</tt></i> :</span></td><td> The name of the channel to add.
</td></tr><tr><td><span class="term"><span class="emphasis"><em>Returns</em></span> :</span></td><td> A pointer to the <a href="libxfce4mcs-mcs-common.html#McsChannel"><span class="type">McsChannel</span></a> referenced.
</td></tr></tbody></table></div></div><hr><div class="refsect2" lang="en"><a name="id2580744"></a><h3><a name="mcs-client-delete-channel"></a>mcs_client_delete_channel ()</h3><a class="indexterm" name="id2580752"></a><pre class="programlisting">void        mcs_client_delete_channel       (<a href="libxfce4mcs-mcs-client.html#McsClient">McsClient</a> *client,
                                             const gchar *channel_name);</pre><p>
Removes <i class="parameter"><tt>channel_name</tt></i> from the list of channels that <i class="parameter"><tt>client</tt></i> is watching.
The <i class="parameter"><tt>client</tt></i> will no longer receive notifications of settings changes in this
channel.</p><p>

</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term"><i class="parameter"><tt>client</tt></i> :</span></td><td> An <a href="libxfce4mcs-mcs-client.html#McsClient"><span class="type">McsClient</span></a>.
</td></tr><tr><td><span class="term"><i class="parameter"><tt>channel_name</tt></i> :</span></td><td> The name of a channel this McsClient is watching.
</td></tr></tbody></table></div></div><hr><div class="refsect2" lang="en"><a name="id2580825"></a><h3><a name="mcs-client-get-setting"></a>mcs_client_get_setting ()</h3><a class="indexterm" name="id2580834"></a><pre class="programlisting"><a href="libxfce4mcs-mcs-common.html#McsResult">McsResult</a>   mcs_client_get_setting          (<a href="libxfce4mcs-mcs-client.html#McsClient">McsClient</a> *client,
                                             const gchar *name,
                                             const gchar *channel_name,
                                             <a href="libxfce4mcs-mcs-common.html#McsSetting">McsSetting</a> **setting);</pre><p>
Retrieves setting <i class="parameter"><tt>name</tt></i> from channel <i class="parameter"><tt>channel</tt></i> name.  The result is placed in
<i class="parameter"><tt>setting</tt></i> and should be freed with <a href="libxfce4mcs-mcs-common.html#mcs-setting-free"><tt class="function">mcs_setting_free()</tt></a>.</p><p>

</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term"><i class="parameter"><tt>client</tt></i> :</span></td><td> An <a href="libxfce4mcs-mcs-client.html#McsClient"><span class="type">McsClient</span></a>.
</td></tr><tr><td><span class="term"><i class="parameter"><tt>name</tt></i> :</span></td><td> The name of a setting.
</td></tr><tr><td><span class="term"><i class="parameter"><tt>channel_name</tt></i> :</span></td><td> The name of the channel in which to look for <i class="parameter"><tt>name</tt></i>.
</td></tr><tr><td><span class="term"><i class="parameter"><tt>setting</tt></i> :</span></td><td> A pointer to a McsSetting structure.
</td></tr><tr><td><span class="term"><span class="emphasis"><em>Returns</em></span> :</span></td><td> <tt class="literal">MCS_SUCCESS</tt> on success, or another <a href="libxfce4mcs-mcs-common.html#McsResult"><span class="type">McsResult</span></a> representing an
              error that occurred.
</td></tr></tbody></table></div></div><hr><div class="refsect2" lang="en"><a name="id2580970"></a><h3><a name="mcs-client-show"></a>mcs_client_show ()</h3><a class="indexterm" name="id2580978"></a><pre class="programlisting">void        mcs_client_show                 (Display *display,
                                             int screen,
                                             const gchar *message);</pre><p>
Instructs the MCS manager to show the settings dialog for the module
specified in <i class="parameter"><tt>message</tt></i>.</p><p>

</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term"><i class="parameter"><tt>display</tt></i> :</span></td><td> The X display on which the MCS manager is running.
</td></tr><tr><td><span class="term"><i class="parameter"><tt>screen</tt></i> :</span></td><td> The X screen on which the MCS manager is running.
</td></tr><tr><td><span class="term"><i class="parameter"><tt>message</tt></i> :</span></td><td> The module to show.
</td></tr></tbody></table></div></div><hr><div class="refsect2" lang="en"><a name="id2581056"></a><h3><a name="mcs-client-check-manager"></a>mcs_client_check_manager ()</h3><a class="indexterm" name="id2581065"></a><pre class="programlisting">gboolean    mcs_client_check_manager        (Display *display,
                                             int screen,
                                             const gchar *manager_command);</pre><p>
Checks to see if an MCS manager is running on <i class="parameter"><tt>display</tt></i> and <i class="parameter"><tt>screen</tt></i>.  If not,
tries to execute <i class="parameter"><tt>manager_command</tt></i>.</p><p>

</p><div class="variablelist"><table border="0"><col align="left" valign="top"><tbody><tr><td><span class="term"><i class="parameter"><tt>display</tt></i> :</span></td><td> The X display on which the MCS manager may be running.
</td></tr><tr><td><span class="term"><i class="parameter"><tt>screen</tt></i> :</span></td><td> The X screen on which the MCS manager may be running.
</td></tr><tr><td><span class="term"><i class="parameter"><tt>manager_command</tt></i> :</span></td><td> A command to execute.
</td></tr><tr><td><span class="term"><span class="emphasis"><em>Returns</em></span> :</span></td><td> <tt class="literal">TRUE</tt> if the MCS manager is running, <tt class="literal">FALSE</tt> otherwise.
</td></tr></tbody></table></div></div></div></div><table class="navigation" width="100%" summary="Navigation footer" cellpadding="2" cellspacing="0"><tr valign="middle"><td align="left"><a accesskey="p" href="ch01.html"><b>&lt;&lt; libxfce4mcs Core Reference</b></a></td><td align="right"><a accesskey="n" href="libxfce4mcs-mcs-common.html"><b>mcs-common &gt;&gt;</b></a></td></tr></table></body></html>
