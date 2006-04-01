<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=US-ASCII">
<title>MD5 Functions</title>
<meta name="generator" content="DocBook XSL Stylesheets V1.69.1">
<link rel="start" href="index.html" title="exo Reference Manual">
<link rel="up" href="exo-miscelleanous.html" title="Part&#160;V.&#160;Miscelleanous">
<link rel="prev" href="exo-Executing-Applications.html" title="Executing Applications">
<link rel="next" href="exo-String-Utility-Functions.html" title="String Utility Functions">
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
<td><a accesskey="p" href="exo-Executing-Applications.html"><img src="left.png" width="24" height="24" border="0" alt="Prev"></a></td>
<td><a accesskey="u" href="exo-miscelleanous.html"><img src="up.png" width="24" height="24" border="0" alt="Up"></a></td>
<td><a accesskey="h" href="index.html"><img src="home.png" width="24" height="24" border="0" alt="Home"></a></td>
<th width="100%" align="center">exo Reference Manual</th>
<td><a accesskey="n" href="exo-String-Utility-Functions.html"><img src="right.png" width="24" height="24" border="0" alt="Next"></a></td>
</tr></table>
<div class="refentry" lang="en">
<a name="exo-MD5-functions"></a><div class="titlepage"></div>
<div class="refnamediv"><table width="100%"><tr>
<td valign="top">
<h2><span class="refentrytitle">MD5 Functions</span></h2>
<p>MD5 Functions &#8212; MD5 hash implementation</p>
</td>
<td valign="top" align="right"></td>
</tr></table></div>
<div class="refsect1" lang="en">
<a name="id2670995"></a><h2>Stability Level</h2>
Stable, unless otherwise indicated
</div>
<div class="refsynopsisdiv">
<h2>Synopsis</h2>
<pre class="synopsis">

#include &lt;exo/exo.h&gt;


            <a href="exo-MD5-functions.html#ExoMd5Digest">ExoMd5Digest</a>;
<a href="exo-MD5-functions.html#ExoMd5Digest">ExoMd5Digest</a>* <a href="exo-MD5-functions.html#exo-str-get-md5-digest">exo_str_get_md5_digest</a>        (const gchar *contents);
gchar*      <a href="exo-MD5-functions.html#exo-str-get-md5-str">exo_str_get_md5_str</a>             (const gchar *contents);
<a href="exo-MD5-functions.html#ExoMd5Digest">ExoMd5Digest</a>* <a href="exo-MD5-functions.html#exo-md5-str-to-digest">exo_md5_str_to_digest</a>         (const gchar *str_digest);
gchar*      <a href="exo-MD5-functions.html#exo-md5-digest-to-str">exo_md5_digest_to_str</a>           (const <a href="exo-MD5-functions.html#ExoMd5Digest">ExoMd5Digest</a> *digest);
<a href="exo-MD5-functions.html#ExoMd5Digest">ExoMd5Digest</a>* <a href="exo-MD5-functions.html#exo-md5-digest-dup">exo_md5_digest_dup</a>            (const <a href="exo-MD5-functions.html#ExoMd5Digest">ExoMd5Digest</a> *digest);
void        <a href="exo-MD5-functions.html#exo-md5-digest-free">exo_md5_digest_free</a>             (<a href="exo-MD5-functions.html#ExoMd5Digest">ExoMd5Digest</a> *digest);
guint       <a href="exo-MD5-functions.html#exo-md5-digest-hash">exo_md5_digest_hash</a>             (gconstpointer digest);
gboolean    <a href="exo-MD5-functions.html#exo-md5-digest-equal">exo_md5_digest_equal</a>            (gconstpointer digest1,
                                             gconstpointer digest2);


</pre>
</div>
<div class="refsect1" lang="en">
<a name="id2672177"></a><h2>Description</h2>
<p>
  This is an implementation 16-byte MD5 hash algorithm with some
  related utility functions.
</p>
</div>
<div class="refsect1" lang="en">
<a name="id2672186"></a><h2>Details</h2>
<div class="refsect2" lang="en">
<a name="id2672192"></a><h3>
<a name="ExoMd5Digest"></a>ExoMd5Digest</h3>
<a class="indexterm" name="id2672200"></a><pre class="programlisting">typedef struct {
  guchar digest[16];
} ExoMd5Digest;
</pre>
<p>
  Structure to represent a MD5 digest.
</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody><tr>
<td>
<span class="term">guchar&#160;<em class="structfield"><code>digest</code></em>[16];</span></td>
<td>the MD5 digest.

</td>
</tr></tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2672238"></a><h3>
<a name="exo-str-get-md5-digest"></a>exo_str_get_md5_digest ()</h3>
<a class="indexterm" name="id2672247"></a><pre class="programlisting"><a href="exo-MD5-functions.html#ExoMd5Digest">ExoMd5Digest</a>* exo_str_get_md5_digest        (const gchar *contents);</pre>
<p>
Creates a binary MD5 digest of the string <em class="parameter"><code>contents</code></em>.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>contents</code></em>&#160;:</span></td>
<td> The string to create a digest of.
</td>
</tr>
<tr>
<td>
<span class="term"><span class="emphasis"><em>Returns</em></span>&#160;:</span></td>
<td> A new binary MD5 digest. It should be freed
              with <a href="exo-MD5-functions.html#exo-md5-digest-free"><code class="function">exo_md5_digest_free()</code></a> when no longer
              needed.
</td>
</tr>
</tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2672318"></a><h3>
<a name="exo-str-get-md5-str"></a>exo_str_get_md5_str ()</h3>
<a class="indexterm" name="id2672327"></a><pre class="programlisting">gchar*      exo_str_get_md5_str             (const gchar *contents);</pre>
<p>
Creates a character array MD5 digestof the string
<em class="parameter"><code>contents</code></em>.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>contents</code></em>&#160;:</span></td>
<td> The string to create a digest of.
</td>
</tr>
<tr>
<td>
<span class="term"><span class="emphasis"><em>Returns</em></span>&#160;:</span></td>
<td> A newly-allocated character array which
              should be free with <code class="function">g_free()</code> when no
              longer needed.
</td>
</tr>
</tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2672467"></a><h3>
<a name="exo-md5-str-to-digest"></a>exo_md5_str_to_digest ()</h3>
<a class="indexterm" name="id2672475"></a><pre class="programlisting"><a href="exo-MD5-functions.html#ExoMd5Digest">ExoMd5Digest</a>* exo_md5_str_to_digest         (const gchar *str_digest);</pre>
<p>
Converts thq <em class="parameter"><code>str_digest</code></em> character array digest
into a binary digest.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>str_digest</code></em>&#160;:</span></td>
<td> The character array digest to convert.
</td>
</tr>
<tr>
<td>
<span class="term"><span class="emphasis"><em>Returns</em></span>&#160;:</span></td>
<td> A newly allocated binary digest. It should
              be freed with <a href="exo-MD5-functions.html#exo-md5-digest-free"><code class="function">exo_md5_digest_free()</code></a> when
              no longer needed.
</td>
</tr>
</tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2672547"></a><h3>
<a name="exo-md5-digest-to-str"></a>exo_md5_digest_to_str ()</h3>
<a class="indexterm" name="id2672555"></a><pre class="programlisting">gchar*      exo_md5_digest_to_str           (const <a href="exo-MD5-functions.html#ExoMd5Digest">ExoMd5Digest</a> *digest);</pre>
<p>
Converts the binary <em class="parameter"><code>digest</code></em> to an ASCII character array
digest. The result can be used as an ordinary C string.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>digest</code></em>&#160;:</span></td>
<td> The binary MD5 digest to convert.
</td>
</tr>
<tr>
<td>
<span class="term"><span class="emphasis"><em>Returns</em></span>&#160;:</span></td>
<td> A newly-allocated character array which
              should be freed with <code class="function">g_free()</code> when no
              longer needed.
</td>
</tr>
</tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2672626"></a><h3>
<a name="exo-md5-digest-dup"></a>exo_md5_digest_dup ()</h3>
<a class="indexterm" name="id2672634"></a><pre class="programlisting"><a href="exo-MD5-functions.html#ExoMd5Digest">ExoMd5Digest</a>* exo_md5_digest_dup            (const <a href="exo-MD5-functions.html#ExoMd5Digest">ExoMd5Digest</a> *digest);</pre>
<p>
Duplicates the contents of the <em class="parameter"><code>digest</code></em> binary
MD5 digest.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>digest</code></em>&#160;:</span></td>
<td> The MD5 digest to copy.
</td>
</tr>
<tr>
<td>
<span class="term"><span class="emphasis"><em>Returns</em></span>&#160;:</span></td>
<td> A new binary MD5 digest. It should
              be freed with <a href="exo-MD5-functions.html#exo-md5-digest-free"><code class="function">exo_md5_digest_free()</code></a>
              when no longer needed.
</td>
</tr>
</tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2672705"></a><h3>
<a name="exo-md5-digest-free"></a>exo_md5_digest_free ()</h3>
<a class="indexterm" name="id2672781"></a><pre class="programlisting">void        exo_md5_digest_free             (<a href="exo-MD5-functions.html#ExoMd5Digest">ExoMd5Digest</a> *digest);</pre>
<p>
Frees the memory allocated for the MD5 binary
<em class="parameter"><code>digest</code></em>.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody><tr>
<td>
<span class="term"><em class="parameter"><code>digest</code></em>&#160;:</span></td>
<td> The MD5 digest to free.
</td>
</tr></tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2672833"></a><h3>
<a name="exo-md5-digest-hash"></a>exo_md5_digest_hash ()</h3>
<a class="indexterm" name="id2672841"></a><pre class="programlisting">guint       exo_md5_digest_hash             (gconstpointer digest);</pre>
<p>
Gets the numeric hash of <em class="parameter"><code>digest</code></em>, for use
in <span class="type">GHashTable</span> and <span class="type">GCache</span>.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>digest</code></em>&#160;:</span></td>
<td> The <a href="exo-MD5-functions.html#ExoMd5Digest"><span class="type">ExoMd5Digest</span></a> to hash.
</td>
</tr>
<tr>
<td>
<span class="term"><span class="emphasis"><em>Returns</em></span>&#160;:</span></td>
<td> An unsigned integer hash of
              the digest;
</td>
</tr>
</tbody>
</table></div>
</div>
<hr>
<div class="refsect2" lang="en">
<a name="id2672921"></a><h3>
<a name="exo-md5-digest-equal"></a>exo_md5_digest_equal ()</h3>
<a class="indexterm" name="id2672930"></a><pre class="programlisting">gboolean    exo_md5_digest_equal            (gconstpointer digest1,
                                             gconstpointer digest2);</pre>
<p>
Tests the equality of <em class="parameter"><code>digest1</code></em> and <em class="parameter"><code>digest2</code></em>, useful for <span class="type">GHashTable</span> and
<span class="type">GCashe</span>.</p>
<p>

</p>
<div class="variablelist"><table border="0">
<col align="left" valign="top">
<tbody>
<tr>
<td>
<span class="term"><em class="parameter"><code>digest1</code></em>&#160;:</span></td>
<td> the first <a href="exo-MD5-functions.html#ExoMd5Digest"><span class="type">ExoMd5Digest</span></a> to compare.
</td>
</tr>
<tr>
<td>
<span class="term"><em class="parameter"><code>digest2</code></em>&#160;:</span></td>
<td> the second <a href="exo-MD5-functions.html#ExoMd5Digest"><span class="type">ExoMd5Digest</span></a> to compare.
</td>
</tr>
<tr>
<td>
<span class="term"><span class="emphasis"><em>Returns</em></span>&#160;:</span></td>
<td> <code class="literal">TRUE</code> if both digests are equal, <code class="literal">FALSE</code> otherwise.
</td>
</tr>
</tbody>
</table></div>
</div>
</div>
</div>
<table class="navigation" width="100%" summary="Navigation footer" cellpadding="2" cellspacing="0"><tr valign="middle">
<td align="left"><a accesskey="p" href="exo-Executing-Applications.html"><b>&lt;&lt;&#160;Executing Applications</b></a></td>
<td align="right"><a accesskey="n" href="exo-String-Utility-Functions.html"><b>String Utility Functions&#160;&gt;&gt;</b></a></td>
</tr></table>
</body>
</html>
