<?php
    include ("version.php");
?>
<a name="stable"></a>
<h1>下载稳定版本 (<?php echo $version; ?>) </h1>
<p>大多数发行版带有 Xfce。但如果您想要更新的版本或者您想要从头开始编译 Xfce，您可以从下方找到这些软件包。您也可以<a href="/download/distros">在此</a>看一看以 Xfce 做为默认桌面的发行版。</p>

<h2 id="source">源代码</h2>
<p>所有 Xfce 模块都可以从我们的 SourceForge 仓库和一些镜像站点中以单个源代码压缩包的形式得到，(在单独一个源代码压缩包<em>或者</em>分开的源代码压缩包中)：</p>
<?php printServers("", $servers); ?>


<h2 id="installer">图形安装程序</h2>
<p>Xfce-Installers 是软件包的一个总集，它能明显地使 Xfce 和一些扩展的安装进程简单化的。<a href="/documentation/installers/xfce/index.html">在此</a>阅读更多关于安装工具的信息。</p>
<?php printServers("installers", $servers); ?>


<h2 id="binaries">二进制包</h2>
<table cellspacing="5">
  <tr>
    <td><img src="../../images/download/debian.png" alt="Debian" width="40" height="40" /></td>
    <td><strong>Debian Testing / Unstable</strong><br />
      <a href="http://pkg-xfce.alioth.debian.org/">Debian Xfce Group</a></td>
  </tr>
  <!--
  <tr>
    <td><img src="../../images/download/fedora.png" alt="Fedora" width="40" height="40" /></td>
    <td><strong>Redhat &amp; Fedora</strong><br />
    <a href="http://sourceforge.net/project/showfiles.php?group_id=19869&package_id=187881&release_id=<?php echo $sf_release_id; ?>">SourceForge.net<br />
    </a><a href="http://mocha.xfce.org/archive/xfce-<?php echo $version; ?>">xfce.org</a> | <a href="http://www.ca-us.xfce.org/archive/xfce-<?php echo $version; ?>" target="_blank">ca-us.xfce.org</a> | <a href="http://www.de.xfce.org/archive/xfce-<?php echo $version; ?>" target="_blank">de.xfce.org</a> <br />
    <a href="http://www.p0llux.be/xfce/xfce-<?php echo $version; ?>/installers/">p0llux.be</a></td>
  </tr>
  -->
  <tr>
    <td><img src="../../images/download/suse.png" alt="Suse" width="40" height="40" /></td>
    <td><strong>openSUSE (SUSE Linux)</strong><br />
      <a href="http://en.opensuse.org/X11:xfce">openSUSE (SUSE Linux) 软件仓库</a></td>
  </tr>
  <tr>
    <td><img src="../../images/download/mandriva.png" alt="Mandriva" width="40" height="40" /></td>
    <td><strong>Mandriva &amp; Mandrake</strong><br />
      <a href="ftp://mandrivauser.de/rpm/GPL/">ftp://mandrivauser.de/rpm/GPL/</a><br />
      <a href="http://www.eslrahc.com/">http://www.eslrahc.com/</a></td>
  </tr>
  <tr>
    <td><img src="../../images/download/solaris.png" alt="Solaris" width="40" height="40" /></td>
    <td><strong>Solaris SPARC/x86/AMD</strong><br />
      <a href="http://www.blastwave.org">http://www.blastwave.org</a></td>
  </tr>
</table>

<?php if(isset($version_unstable)) { ?>

<a name="unstable"></a>
<h1>Download Unstable version (<?php echo $version_unstable; ?>) </h1>
<p>
Below you can find download locations for the latest development/unstable
release of Xfce.  Note that this software almost certainly contains bugs,
many of which might affect your desire to use it in a production
environment.  You should back up all configuration files before installing
and using these releases.  If you're uncertain about downloading this
release, you should probably use the <a href="#stable">stable version</a>
above.
</p>

<h2 id="source-unstable">Source code</h2>
<p>All Xfce modules are available in one single tarball from our SourceForge  repository, and from several mirrors (in one single tarball <em>or</em> separate  tarballs):</p>
<?php printServers("", $servers_unstable); ?>

<?php } /* isset($version_unstable) */ ?>
