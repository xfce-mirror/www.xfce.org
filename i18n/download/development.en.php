<h1>Xfce development source code</h1>

<p>
If you want to build Xfce from source code, you can either download the source
tarballs of a released version of Xfce from our <a href="/download">download page</a>,
or try a development version, by downloading it from subversion (only
for the adventurous). Please note that installing two different versions of
Xfce (ie. stable and development) is not supported.</p>

<h3>Latest release version (4.6.x)</h3>

<p>
This version contain the latest bug fixes, without any major new feature. This should be
more stable than the development version (and even than the last official release), but
there is still no guarantee that this version is bug free.
</p>

<h3>Latest development version (4.7.x) </h3>

<p>
This version contain the latest development updates and bug fixes. There is no
guarantee that it's fully working and bug free.
</p>

<h2>Getting the source code </h2>

<h3>Latest release version (4.6.x) from SVN</h3>

<p>You can download the full release tree with the following command:</p>

<p>
<code class="code">svn checkout http://svn.xfce.org/svn/xfce/modules/4.6</code>
</p>

<p>Or the appropriate modules:</p>

<p>
<code class="code">svn checkout http://svn.xfce.org/svn/xfce/$modulename/branches/xfce_4_6 $modulename</code>
</p>

<h3>Latest development version (4.7.x) from SVN </h3>

<p>
You can download the full release tree with the following command:
</p>

<p>
<code class="code">svn checkout http://svn.xfce.org/svn/xfce/modules/trunk</code>
</p>

<p>Or the appropriate modules:</p>

<p>
<code class="code">svn checkout http://svn.xfce.org/svn/xfce/$modulename/trunk $modulename</code>
</p>

<div class="tip">To synchronize your local copy (checkout) of the release or development
tree with the one on the server you can run <code>svn update</code> instead of
<code>svn checkout</code>. This will speed up the process and minimize the
Xfce server transfer.
</div>

<h3>Daily development snapshots</h3>

<p>
If you don't want to test the development version of Xfce on a regular basis or you
have no experience with building source from SVN, you can download the daily development
snapshots <a href="http://mocha.xfce.org/downloads/svn-snapshots/">here</a>.
</p>

<h2>Building the modules</h2>

<p>
If you have downloaded the  tarballs, you need to unpack them before going on.
</p>

<p>
If you install into a different prefix from pkg-config, you have to set the
PKG_CONFIG_PATH variable to include the path to the *.pc files installed by the
Xfce libraries, which is ${prefix}/lib/pkgconfig.  For example:
</p>

<p>
<code class="code">export PKG_CONFIG_PATH=/usr/local/lib/pkgconfig</code>
</p>

<p>To build the modules from the tarballs just run:</p>

<p>
<code class="code">./configure --prefix=/usr/local &amp;&amp; make &amp;&amp; make install</code>
</p>

<p>To build the svn modules (you need the xfce4-dev-tools package) run this command: </p>

<p><code class="code">./autogen.sh --prefix=/usr/local &amp;&amp; make &amp;&amp; make install</code></p>
