<h1>Xfce 源代码</h1>
<p>如果您想从源代码编译 Xfce，您可以从我们的<a href="/download">下载页面</a>下载一个 Xfce 发布版本的源代码压缩包，或者通过从 subversion 下载，尝试一个开发版本 (仅仅对于冒险的人)。请注意，不支持同时安装 Xfce 的两个版本 (例如，稳定版和开发版)。</p>
<h3>最新的发布版本 (4.4.x)</h3>
<p>此版本包括了最新的错误修正，没有人和主要的新特性。这应该比开发版更加稳定 (甚至于最新的官方版本)，但是仍然无法担保这个版本没有一点错误。</p>
<h3>最新的开发版本 (4.5.x)</h3>
<p>此版本包括了最新的开发更新和错误修正。无法保证它完全能够工作并且没有错误。</p>
<h2>获取源代码</h2>
<h3>从 SVN 获取最新的发布版本 (4.4.x)</h3>
<p>您可以用以下命令下载完整的发布目录：</p>
<p><code class="code">svn checkout http://svn.xfce.org/svn/xfce/modules/4.4</code></p>
<p>或者下载适当的模块：</p>
<p><code class="code">svn checkout http://svn.xfce.org/svn/xfce/$modulename/branches/xfce_4_4 $modulename</code></p>
<h3>从 SVN 获取最新的开发版本(4.5.x)</h3>
<p>您可以用以下命令下载完整的发布目录：</p>
<p><code class="code">svn checkout http://svn.xfce.org/svn/xfce/modules/trunk</code></p>
<p>或者下载适当的模块：</p>
<p><code class="code">svn checkout http://svn.xfce.org/svn/xfce/$modulename/trunk $modulename</code></p>
<div class="tip">为了将您的发布或者开发目录的本地副本 (checkout) 与服务器上的副本同步，您可以运行 <code>svn update</code> 而不是 <code>svn checkout</code>。这样将会加速进程并使 Xfce 服务器的传输量最小。</div>
<h3>每日开发快照</h3>
<p>如果您不想要定期测试 Xfce 的开发版本，或者您对从 SVN 编译源代码没有经验，您可以<a href="http://mocha.xfce.org/downloads/svn-snapshots/">在此</a>下载每日开发快照。</p>
<h2>编译模块</h2>
<p>如果您下载了源代码压缩包，在继续之前，您需要先解压缩它们。</p>
<p>如果您将其安装进一个与 pkg-config 不同的目录 (prefix)，您得设定 PKG_CONFIG_PATH 变量以包含由 Xfce 4 库所安装的 *.pc 文件的路径，路径是 ${prefix}/lib/pkgconfig。例如：</p>
<p><code class="code">export PKG_CONFIG_PATH=/usr/local/lib/pkgconfig</code></p>
<p>从源代码压缩包编译模块，仅仅运行：</p>
<p><code class="code">./configure --prefix=/usr/local &amp;&amp; make &amp;&amp; make install</code></p>
<p>编译 svn 模块 (您需要 xfce4-dev-tools 软件包) 运行这条命令：</p>
<p><code class="code">./autogen.sh --prefix=/usr/local &amp;&amp; make &amp;&amp; make install</code></p>
