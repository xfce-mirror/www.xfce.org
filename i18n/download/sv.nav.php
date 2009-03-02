<?php include_once('version.php'); ?>
<ul>
	<li><a href="/download#stable">Stabila utgåvor</a>
		<ul>
			<li><a href="/download#source">Källkod</a></li>
			<li><a href="/download#installer">Grafisk installerare</a></li>
			<li><a href="/download#binaries">Binärfiler</a></li>
		</ul>
	</li>
    <?php if(isset($version_unstable)) { ?>
    <li><a href="/download#unstable">Instabil utgåva</a></li>
    <?php } ?>
	<li><a href="/download/development">Utvecklingsversion</a>
		<ul>
			<li><a href="http://svn.xfce.org/" class="external">Bläddra i SVN</a></li>
			<li><a href="http://mocha.xfce.org/downloads/svn-snapshots/" class="external">Dagliga ögonblicksbilder</a></li>
		</ul>
	</li>
	<li><a href="http://goodies.xfce.org" class="external">Insticksmoduler för panel</a></li>
	<li><a href="/download/distros">Xfce-distributioner</a></li>
</ul>
