<?php
    include ("version.php");
?>
<a name="stable"></a>
<h1>Download da versão estável (<?php echo $version; ?>) </h1>
<p>A maioria das distribuições possui o ambiente de desktop Xfce. Mas se você deseja obter uma versão mais nova ou compilar o Xfce apartir de seu código-fonte, você pode procurar os pacotes abaixo. Você também pode dar uma olhada nas distribuições que são orientadas ao Xfce <a href="/download/distros">aqui</a>.</p>

<h2 id="source">Código-fonte</h2>
<p>Todos os módulos do Xfce estão disponíveis em um simples arquivo comprimido em formato tarball em nosso repositório SourceForge e diversos mirrors (em um único arquivo comprimido em tarball <em>ou</em> em módulos separados</p>.
<?php printMirror($version); ?>

<!--
<h2 id="installer">Instalador Gráfico</h2>
<p>Xfce-Installer é uma coleção de pacotes que simplifica notavelmente o processo de instalação do Xfce e algumas extensões. Leia mais sobre o instalador <a href="/documentation/installers/xfce/index.html">aqui</a>.</p>
<?php printServers("installers", $servers); ?>
-->

<h2 id="binaries">Binários</h2>
<table cellspacing="5">
  <tr>
    <td><img src="../../images/download/debian.png" alt="Debian" width="40" height="40" /></td>
    <td><strong>Debian Testing / Unstable</strong><br />
      <a href="http://pkg-xfce.alioth.debian.org/">Grupo do Debian Xfce</a></td>
  </tr>
  <!--
  <tr>
    <td><img src="../../images/download/fedora.png" alt="Fedora" width="40" height="40" /></td>
    <td><strong>Redhat &amp; Fedora</strong><br />
    <a href="http://sourceforge.net/project/showfiles.php?group_id=19869&package_id=187881&release_id=<?php echo $sf_release_id; ?>">SourceForge.net<br />
    </a><a href="http://mocha.xfce.org/archive/xfce-<?php echo $version; ?>">xfce.org</a> | <a href="http://www.us.xfce.org/archive/xfce-<?php echo $version; ?>" target="_blank">us.xfce.org</a> | <a href="http://www.ca-us.xfce.org/archive/xfce-<?php echo $version; ?>" target="_blank">ca-us.xfce.org</a> | <a href="http://www.de.xfce.org/archive/xfce-<?php echo $version; ?>" target="_blank">de.xfce.org</a> <br />
    <a href="http://www.p0llux.be/xfce/xfce-<?php echo $version; ?>/installers/">p0llux.be</a></td>
  </tr>
  -->
  <tr>
    <td><img src="../../images/download/suse.png" alt="Suse" width="40" height="40" /></td>
    <td><strong>openSUSE (SUSE Linux)</strong><br />
      <a href="http://en.opensuse.org/X11:xfce">Repositórios para o openSUSE (SUSE Linux)</a></td>
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
<?php printMirror($version_unstable); ?>

<?php } /* isset($version_unstable) */ ?>
