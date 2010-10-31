<?php include_once('version.php'); ?>
<ul>
	<li><a href="/download#stable">Rilascio stabile</a>
		<ul>
			<li><a href="/download#source">Codice sorgente</a></li>
			<li><a href="/download#binaries">Binari</a></li>
		</ul>
	</li>
    <?php if(isset($version_unstable)) { ?>
    <li><a href="/download#unstable">Rilascio instabile</a></li>
    <?php } ?>
	<li><a href="/download/development">Versione in sviluppo</a>
		<ul>
			<li><a href="http://git.xfce.org/" class="external">Sfoglia il repository GIT</a></li>
		</ul>
	</li>
	<li><a href="http://goodies.xfce.org" class="external">Plugin del pannello</a></li>
	<li><a href="/download/distros">Distribuzioni con Xfce</a></li>
</ul>
