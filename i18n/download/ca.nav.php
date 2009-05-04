<?php include_once('version.php'); ?>
<ul>
	<li><a href="/download#stable">Versió estable</a>
		<ul>
			<li><a href="/download#source">Codi font</a></li>
			<li><a href="/download#installer">Instal·lador gràfic</a></li>
			<li><a href="/download#binaries">Binaris</a></li>
		</ul>
	</li>
    <?php if(isset($version_unstable)) { ?>
    <li><a href="/download#unstable">Versió inestable</a></li>
    <?php } ?>
	<li><a href="/download/development">Versió de desenvolupament</a>
		<ul>
			<li><a href="http://svn.xfce.org/" class="external">Explorar el SVN</a></li>
			<li><a href="http://mocha.xfce.org/downloads/svn-snapshots/" class="external">Snapshots diaris</a></li>
		</ul>
	</li>
	<li><a href="http://goodies.xfce.org" class="external">Connectors del panell</a></li>
	<li><a href="/download/distros">Distribucions basades en Xfce</a></li>
</ul>
