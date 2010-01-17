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

<p>
To get a list of available modules and components, you can
<a href="http://git.xfce.org/" class="external">browse the GIT repositories</a>.
</p>

<h3>Latest release version (4.6.x) from the GIT repositories</h3>

<p>You can download the desired modules with the following command:</p>

<p>
<code class="code">git clone -b xfce-4.6 git://git.xfce.org/category/$modulename</code>
</p>

<p>For example:</p>

<p>
<code class="code">git clone -b xfce-4.6 git://git.xfce.org/xfce/xfce4-panel</code>
</p>

<h3>Latest development version (4.7.x) from the GIT repositories </h3>

<p>You can download the desired modules with the following command:</p>

<p>
<code class="code">git clone git://git.xfce.org/category/$modulename</code>
</p>

<p>For example:</p>

<p>
<code class="code">git clone git://git.xfce.org/xfce/xfce4-panel</code>
</p>

<div class="tip">To synchronize your local copy (checkout) of the release or development
tree with the one on the server you can run <code>git pull</code> instead of
<code>git clone</code>. This will speed up the process and minimize the
Xfce server transfer.
</div>

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

<p>To build the Xfce modules from GIT (you need the xfce4-dev-tools package) run this command: </p>

<p><code class="code">./autogen.sh --prefix=/usr/local &amp;&amp; make &amp;&amp; make install</code></p>

<p>The <a href="/documentation/requirements">requirements</a> page lists all the required dependencies and
the build order of the modules.</p>
