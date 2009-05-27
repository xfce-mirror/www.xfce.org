<?php
    include_once ("version.php");
?>
<a name="stable"></a>

<h1>Descargar la versión estable (<?php echo $version; ?>) </h1>

<p>
La mayoría de distribuciones incluyen Xfce, pero si desea una versión más nueva o quiere compilar Xfce desde el principio, puede encontrar los paquetes necesarios a continuación. También puede echar un vistazo a la lista  
de distribuciones orientadas a Xfce <a href="/download/distros">aquí</a>.
</p>

<h2 id="source">Código fuente</h2>

<p>
Todos los módulos de Xfce están disponibles como un único archivo comprimido en nuestros repositorios de SourceForge
y en varios mirrors (como un único <em>o</em> varios archivos comprimidos):
</p>

<?php printServers("", $servers); ?>

<!--
<h2 id="installer">Instaladores gráficos</h2>

<p>
Los instaladores de Xfce son una colección de paquetes que simplifican notablemente el proceso
de instalación de Xfce y de algunas extensiones. Lea más sobre el instalador
<a href="/documentation/installers/xfce/index.html">aquí</a>.
</p>

<?php printServers("installers", $servers); ?>
-->

<h2 id="binaries">Binarios</h2>

<table cellspacing="5">
  <tr>
    <td><img src="../../images/download/debian.png" alt="Debian" width="40" height="40" /></td>
    <td><strong>Debian Testing / Inestable</strong><br />
      <a href="http://pkg-xfce.alioth.debian.org/">Grupo de Xfce en Debian</a></td>
  </tr>
  <!--
  <tr>
    <td><img src="../../images/download/fedora.png" alt="Fedora" width="40" height="40" /></td>
    <td><strong>Redhat &amp; Fedora</strong><br />
    <a href="http://sourceforge.net/project/showfiles.php?group_id=19869&package_id=187881&release_id=<?php echo $sf_release_id; ?>">SourceForge.net<br />
    </a><a href="http://mocha.xfce.org/archive/xfce-<?php echo $version; ?>">xfce.org</a> | <a href="http://www.ca-us.xfce.org/archive/xfce-<?php echo $version; ?>">ca-us.xfce.org</a> | <a href="http://www.de.xfce.org/archive/xfce-<?php echo $version; ?>" target="_blank">de.xfce.org</a> <br />
    <a href="http://www.p0llux.be/xfce/xfce-<?php echo $version; ?>/installers/">p0llux.be</a></td>
  </tr>
  -->
  <tr>
    <td><img src="../../images/download/mandriva.png" alt="Mandriva" width="40" height="40" /></td>
    <td><strong>Mandriva &amp; Mandrake</strong><br />
      <a href="ftp://mandrivauser.de/rpm/GPL/">ftp://mandrivauser.de/rpm/GPL/</a><br />
      <a href="http://www.eslrahc.com/">http://www.eslrahc.com/</a></td>
  </tr>
  <tr>
    <td><img src="../../images/download/suse.png" alt="Suse" width="40" height="40" /></td>
    <td><strong>openSUSE (SUSE Linux)</strong><br />
      <a href="http://en.opensuse.org/X11:xfce">Repositories for openSUSE (SUSE Linux)</a></td>
  </tr>
  <tr>
    <td><img src="../../images/download/solaris.png" alt="Solaris" width="40" height="40" /></td>
    <td><strong>Solaris SPARC/x86/AMD</strong><br />
      <a href="http://www.blastwave.org">http://www.blastwave.org</a></td>
  </tr>
  <tr>
    <td><img src="../../images/download/xubuntu.png" alt="Xubuntu" width="40" height="40" /></td>
    <td><strong>Xubuntu</strong><br />
      <a href="http://www.xubuntu.org">http://www.xubuntu.org</a></td>
  </tr>
</table>

<?php if(isset($version_unstable)) { ?>

<a name="unstable"></a>

<h1>Descargar versión inestable (<?php echo $version_unstable; ?>) </h1>

<p>
A continuación puede encontrar lugares de descarga para las últimas versiones
de desarrollo/inestables. Tenga en cuenta que es casi seguro que este software contenga fallos,
muchos de los cuales pueden influir negativamente a la hora de usarlo en un entorno de
producción.  Debería hacer una copia de todos los archivos de configuración antes de instalar
y usar estas versiones. Si no está seguro de descargar y usar
esta versión, probablemente debería plantearse el usar la <a href="#stable">versión estable</a>
antes mencionada.
</p>

<h2 id="source-unstable">Código fuente</h2>

<p>
Todos los módulos de Xfce están disponibles como un único archivo comprimido en nuestro repositorio de SourceForge 
y en varios mirrors (como un único <em>o</em> varios archivos comprimidos):
</p>

<?php printServers("", $servers_unstable); ?>

<?php } /* isset($version_unstable) */ ?>
