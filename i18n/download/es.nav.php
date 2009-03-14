<?php include_once('version.php'); ?>
<ul>
	<li><a href="/download#stable">Versión estable</a>
		<ul>
			<li><a href="/download#source">Código fuente</a></li>
			<li><a href="/download#installer">Instalador gráfico</a></li>
			<li><a href="/download#binaries">Binarios</a></li>
		</ul>
	</li>
    <?php if(isset($version_unstable)) { ?>
    <li><a href="/download#unstable">Versión inestable</a></li>
    <?php } ?>
	<li><a href="/download/development">Versión de desarrollo</a>
		<ul>
			<li><a href="http://svn.xfce.org/" class="external">Ver SVN</a></li>
			<li><a href="http://mocha.xfce.org/downloads/svn-snapshots/" class="external">Snapshots diarios</a></li>
		</ul>
	</li>
	<li><a href="http://goodies.xfce.org" class="external">Complementos del panel</a></li>
	<li><a href="/download/distros">Distribuciones de Xfce</a></li>
</ul>
